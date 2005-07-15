<?php
/*
 * File: $Id: $
 *
 * Newsletter 
 *
 * @package Xaraya eXtensible Management System
 * @copyright (C) 2003-2004 by the Xaraya Development Team
 * @link http://www.xaraya.com
 *
 * @subpackage newsletter module
 * @author Richard Cave <rcave@xaraya.com>
*/


/**
 * Get a template file from /modules/newsletter/templates
 * 
 * @private
 * @author Richard Cave
 * @param $args an array of arguments
 * @param $args['filename'] the template filename
 * @returns string
 * @return $sourceFile
 */
function newsletter_userapi_gettemplatefile($args)
{
    // Extract args
    extract($args);

    if (empty($filename)) {
        $msg = xarML('Must provide a filename!  #(1) function #(2)() in module #(3)',
                'userapi', 'gettemplatefile', 'Newsletter');
        xarErrorSet(XAR_USER_EXCEPTION, 'MISSING_DATA', new DefaultUserException($msg));
        return false;
    }
    
    // Get the template source
    if (!($modBaseInfo = xarMod_getBaseInfo("newsletter"))) return;
    $modOsDir = $modBaseInfo['osdirectory'];        

    // Patch from Roger Keays - see Bug #3419
    // First try the theme directory
    $themedir = xarTplGetThemeDir();
    $themefilename = preg_replace('/.xd$/', '.xt', $filename);
    $sourceFile = "$themedir/modules/$modOsDir/templates/$themefilename";

    // Check if the template file exists in theme directory
    if (!file_exists($sourceFile)) {
        $sourceFile = "modules/$modOsDir/templates/$filename";
    }

    // Check if the template file exists
    if (!file_exists($sourceFile)) {
        $msg = xarML('Template file #(1) does not exist!', $sourceFile);
        xarErrorSet(XAR_USER_EXCEPTION, 'MISSING_DATA', new DefaultUserException($msg));
        return false;
    }

    return $sourceFile;
}

?>
