#!/bin/bash

CUR_YYYY=$(date +"%Y")
CUR_MM=$(date +"%m")
CUR_DD=$(date +"%d")
CUR_HH=$(date +"%H")

if [ $CUR_HH -lt 10 ]; then
  CUR_HH=0$(date +"%H" | cut -c 2)
fi

CUR_NN=$(date +"%M")
CUR_SS=$(date +"%S")

SUBFILENAME="${CUR_DD}${CUR_MM}${CUR_YYYY}_${CUR_HH}${CUR_NN}${CUR_SS}"

echo "SET time_zone = \"+00:00\";" > "./21232f297a57a5a743894a0e4a801fc3/assets/database/migrations/$SUBFILENAME.sql"
