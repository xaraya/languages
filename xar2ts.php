<?php

set_time_limit(900);

function handleFile ($filepath, $locale)
{
    if (substr($filepath, -4) == '.xml') {
        //echo "Reading file $filepath\r\n";
        $contents = file_get_contents ($filepath);
        preg_match_all('!<entry>\\s*<string>(.*)</string>\\s*<translation>(.*)</translation>\\s*<references>(\\s*<reference file=".*" line=".*" />\\s*)+</references>\\s*</entry>!m', $contents, $matches);
        
        if (count($matches[0]) == 0) return;

        $matchesNumber = count($matches[0]);
        for ($i=0;$i<$matchesNumber;$i++)
        {
            preg_match_all('%<reference file="(.*)" line=".*" />%m', $matches[3][$i], $refMatches);

            $refNumber = count($refMatches[0]);
            for ($j=0;$j<$refNumber;$j++)
            {
                addTranslation ($matches[1][$i], 
                                $matches[2][$i], 
                                $refMatches[1][$j],
                                $locale);
            }            
        }

    }
}

function searchDir($path, $locale)
{
    $dh = opendir($path);

    while ($entry = readdir($dh)) {
        $filepath = "$path/$entry"; 
        if (is_dir($filepath)) {
            if (($entry != '.') &&
                ($entry != '..') &&
                ($entry != 'CVS') &&
                ($entry != 'SCCS') &&
                ($entry != 'PENDING')) {
                //Recurse
                searchDir($filepath, $locale);
            }
        } else { // -> is file
            handleFile($filepath, $locale);
        }
    }

    closedir($dh);
}

function addTranslation ($string, $translation, $reference, $locale)
{
    if (!isset($GLOBALS['locales'][$locale][$reference]))
        $GLOBALS['locales'][$locale][$reference] = array();

    if (!isset($GLOBALS['locales'][$locale][$reference][$string]))
        $GLOBALS['locales'][$locale][$reference][$string] = $translation;
}

    $path = realpath('.');

    $dh = opendir($path);
    while ($entry = readdir($dh)) 
    {
        $filepath = "$path/$entry"; 
        if (is_dir($filepath))
        {
            if (($entry != '.') &&
                ($entry != '..') &&
                ($entry != 'CVS') &&
                ($entry != 'SCCS') &&
                ($entry != 'PENDING')) 
            {
                searchLocaleDir($filepath);
            }
        }
    }
    closedir($dh);

    function searchLocaleDir($path)
    {
        $dh = opendir($path);
        while ($entry = readdir($dh)) 
        {
            $filepath = "$path/$entry"; 
            if (is_dir($filepath)) 
            {
                if (($entry != '.') &&
                    ($entry != '..') &&
                    ($entry != 'CVS') &&
                    ($entry != 'SCCS') &&
                    ($entry != 'PENDING')) 
                {
                    if (strpos($entry, 'utf-8') !== false)
                    {   
                        //utf8 locale found => searchdir
                        $GLOBALS['locales'] = array();
                        $GLOBALS['locales'][$entry] = array();
 
                        var_dump($entry, $filepath);
                        searchDir($filepath, $entry);
                        $output = transformArrayToTS($GLOBALS['locales'][$entry]);

                        $handle = fopen("$entry.ts", "w");
                        fwrite($handle, $output);
                        fclose($handle);
                        //reset the locales
                    }
                }
            }
        }
        closedir($dh);
    }

function indent($string, $level = 0)
{
    $space = str_repeat(' ', 4 * $level);
    return "\r\n" . $space . $string;
}

function transformArrayToTS ($array)
{
    $output = "<!DOCTYPE TS><TS>";
    foreach ($array as $reference => $array)
    {
        $output .= indent("<context>");
        $output .= indent("<name>$reference</name>", 1);
        foreach ($array as $string => $translation)
        {
            $output .= indent("<message>", 1);
            $output .= indent("<source>$string</source>", 2);
            if (!empty($translation)) 
            {
                $output .= indent("<translation>$translation</translation>", 2);
            } else {
                $output .= indent("<translation type=\"unfinished\"></translation>", 2);
            }
            $output .= indent("</message>", 1);
        }
        $output .= indent("</context>");
    }
    $output .= indent("</TS>");
    
    return $output;
}

?>