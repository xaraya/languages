#!/bin/nice /bin/sh
# this script will generate a file of translation totals for each locale.
# "locale, TOTAL, TRANSLATED, UNTRANSLATED" > ../totals.csv
# update the languages repos
RESULTDIR=/var/www/ddf/common/downloads/languages
bk pull
bk -r get
rm -f $RESULTDIR/*.csv
# Count by Locale
touch $RESULTDIR/totals.csv
DIRS=`find . -type d -maxdepth 2 -mindepth 2 \! -path "*BitKeeper*" \! -path "*SCCS*"`
for dir in $DIRS
do
 COUNT=`find $dir \! -path "*SCCS*" -type f | xargs grep '<entry' | wc -l`
 KEYCOUNT=`find $dir \! -path "*SCCS*" -type f | xargs grep '<keyEntry' | wc -l`
 UNTRANSCOUNT=`find $dir \! -path "*SCCS*" -type f | xargs grep '<translation></translation>' | wc -l`
 LANGNAME=`echo $dir | cut -d '/' -f 3`
 let "TOTAL=$COUNT + $KEYCOUNT"
 let "TRANSCOUNT=$TOTAL - $UNTRANSCOUNT"
 if [ ! "$TOTAL" -eq 0 ]
 then
   echo "$LANGNAME,$TOTAL,$TRANSCOUNT,$UNTRANSCOUNT" >> $RESULTDIR/totals.csv
 fi
done
# Count By Module
touch $RESULTDIR/core.csv
touch $RESULTDIR/modules.csv
touch $RESULTDIR/themes.csv
# Core
DIRS=`find . -type d -maxdepth 4 -mindepth 4 -name 'xml/core' \! -path "*BitKeeper*" \! -path "*SCCS*"`
for dir in $DIRS
do
 let "COUNT=$COUNT + `find $dir \! -path '*SCCS*' -type f | xargs grep '<entry' | wc -l`"
 let "KEYCOUNT=$KEYCOUNT + `find $dir \! -path '*SCCS*' -type f | xargs grep '<keyEntry' | wc -l`"
 let "UNTRANSCOUNT=$UNTRANSCOUNT + `find $dir \! -path '*SCCS*' -type f | xargs grep '<translation></translation>' | wc -l`"
done
let "TOTAL=$COUNT + $KEYCOUNT"
let "TRANSCOUNT=$TOTAL - $UNTRANSCOUNT"
if [ ! "$TOTAL" -eq 0 ]
then
  echo "core,$TOTAL,$TRANSCOUNT,$UNTRANSCOUNT" >> $RESULTDIR/core.csv
fi
# Modules
COUNT=0
KEYCOUNT=0
TRANSCOUNT=0
UNTRANSCOUNT=0
OLDMODNAME=''
MODNAME=''
DIRS=`find . -type d -maxdepth 5 -mindepth 5 -path '*xml/modules*' \! -path "*BitKeeper*" \! -path "*SCCS*" | sort -t '/' -k 6`
for dir in $DIRS
do
 MODNAME=`echo $dir | cut -d '/' -f 6`
 if [ "$MODNAME" == "$OLDMODNAME" ]
 then
   let "COUNT=$COUNT + `find $dir \! -path '*SCCS*' -type f | xargs grep '<entry' | wc -l`"
   let "KEYCOUNT=$KEYCOUNT + `find $dir \! -path '*SCCS*' -type f | xargs grep '<keyEntry' | wc -l`"
   let "UNTRANSCOUNT=$UNTRANSCOUNT + `find $dir \! -path '*SCCS*' -type f | xargs grep '<translation></translation>' | wc -l`"
   OLDMODNAME=$MODNAME
 else
     if [ ! "$OLDMODNAME" == '' ]
     then
       let "TOTAL=$COUNT + $KEYCOUNT"
       let "TRANSCOUNT=$TOTAL - $UNTRANSCOUNT"
       if [ ! "$TOTAL" -eq 0 ]
       then
         echo "$OLDMODNAME,$TOTAL,$TRANSCOUNT,$UNTRANSCOUNT" >> $RESULTDIR/modules.csv
       fi
     fi 
   COUNT=`find $dir \! -path "*SCCS*" -type f | xargs grep '<entry' | wc -l`
   KEYCOUNT=`find $dir \! -path "*SCCS*" -type f | xargs grep '<keyEntry' | wc -l`
   UNTRANSCOUNT=`find $dir \! -path "*SCCS*" -type f | xargs grep '<translation></translation>' | wc -l`
   OLDMODNAME=$MODNAME
 fi
done
# write out last module totals
let "TOTAL=$COUNT + $KEYCOUNT"
let "TRANSCOUNT=$TOTAL - $UNTRANSCOUNT"
if [ ! "$TOTAL" -eq 0 ]
then
  echo "$OLDMODNAME,$TOTAL,$TRANSCOUNT,$UNTRANSCOUNT" >> $RESULTDIR/modules.csv
fi
# Themes
COUNT=0
KEYCOUNT=0
TRANSCOUNT=0
UNTRANSCOUNT=0
OLDTHEMENAME=''
THEMENAME=''
DIRS=`find . -type d -maxdepth 5 -mindepth 5 -path '*xml/themes*' \! -path "*BitKeeper*" \! -path "*SCCS*" | sort -t '/' -k 6`
for dir in $DIRS
do
 THEMENAME=`echo $dir | cut -d '/' -f 6`
 if [ "$THEMENAME" == "$OLDTHEMENAME" ]
 then
   let "COUNT=$COUNT + `find $dir \! -path '*SCCS*' -type f | xargs grep '<entry' | wc -l`"
   let "KEYCOUNT=$KEYCOUNT + `find $dir \! -path '*SCCS*' -type f | xargs grep '<keyEntry' | wc -l`"
   let "UNTRANSCOUNT=$UNTRANSCOUNT + `find $dir \! -path '*SCCS*' -type f | xargs grep '<translation></translation>' | wc -l`"
   OLDTHEMENAME=$THEMENAME
 else
     if [ ! "$OLDTHEMENAME" == '' ]
     then
       let "TOTAL=$COUNT + $KEYCOUNT"
       let "TRANSCOUNT=$TOTAL - $UNTRANSCOUNT"
       if [ ! "$TOTAL" -eq 0 ]
       then
         echo "$OLDTHEMENAME,$TOTAL,$TRANSCOUNT,$UNTRANSCOUNT" >> $RESULTDIR/themes.csv
       fi
     fi 
   COUNT=`find $dir \! -path "*SCCS*" -type f | xargs grep '<entry' | wc -l`
   KEYCOUNT=`find $dir \! -path "*SCCS*" -type f | xargs grep '<keyEntry' | wc -l`
   UNTRANSCOUNT=`find $dir \! -path "*SCCS*" -type f | xargs grep '<translation></translation>' | wc -l`
   OLDTHEMENAME=$THEMENAME
 fi
done
# write out last theme totals
let "TOTAL=$COUNT + $KEYCOUNT"
let "TRANSCOUNT=$TOTAL - $UNTRANSCOUNT"
if [ ! "$TOTAL" -eq 0 ]
then
  echo "$OLDTHEMENAME,$TOTAL,$TRANSCOUNT,$UNTRANSCOUNT" >> $RESULTDIR/themes.csv
fi
