#!/bin/bash
# Script to package the locales up into downloads

# checkout all files first
#bk -r get

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
    tar -zch --exclude '*SCCS*' -f /var/www/ddf/common/downloads/languages/$LOCNAME.tgz $LOCNAME
    zip -rq /var/www/ddf/common/downloads/languages/$LOCNAME.zip $LOCNAME -x '*SCCS*'
  fi
  cd ..
done
