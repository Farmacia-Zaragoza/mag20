#!/bin/bash

if [ -d mag20 ] ; then
rm -rf ./mag20
fi

git clone https://github.com/Farmacia-Zaragoza/mag20.git
for i in $(find mag20 -maxdepth 1 -type d | cut -d "/" -f2  | grep -v "^\." | grep -v "mag20" )  ; do
rm -rf ./$i
done

cp -rf ./mag20/extensions/* ./

MAGENTO_PATH=./

${MAGENTO_PATH}bin/magento s:up
${MAGENTO_PATH}bin/magento s:s:d -f