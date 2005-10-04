#!/bin/bash
# Script to package the locales up into downloads
# This resides in com.xaraya.languages branch 
# all branches need to be checked in directories directly below the
# working directory of this branch.

DESTDIR="/var/www/ddf/common/downloads/languages"

DIRS=`find . -type d -maxdepth 2 -mindepth 2 \! -path "*BitKeeper*" \! -path "*SCCS*"`
for dir in $DIRS
do
  LOCNAME=`echo $dir | cut -d '/' -f 3`
  LANGDIR=`echo $dir | cut -d '/' -f 2`
  # only package this locale if it actually contains translations
  COUNT=`find $dir \! -path "*SCCS*" -type f | xargs grep '<translation>' | wc -l`
  cd $LANGDIR
  if [ ! "$COUNT" -eq 0 ]
    then
    echo "Packaging $LOCNAME"
    rm -f $DESTDIR/$LOCNAME.tgz
    tar -zch --exclude '*SCCS*' -f $DESTDIR/$LOCNAME.tgz $LOCNAME
    rm -f $DESTDIR/$LOCNAME.zip
    zip -rq $DESTDIR/$LOCNAME.zip $LOCNAME -x '*SCCS*'
  fi
  cd ..
done
