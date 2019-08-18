#!/bin/env bash
#Author = Cahyadi
#Upload date = 04-08-2019
#Update = 14-08-2019(v2.0)
Update = 18-08-2019(v3.0)
clear
echo "\033[32;1;5m▀█▀ █▀▀ █▄░▄█ █▀▄ ▄▀▄ █░▄▀ \033[33;1;5m.      ,       "
echo "\033[32;1;5m░█░ █▀▀ █░█░█ █▀█ █▀█ █▀▄░ \033[33;1;5m;_/. . _ -+- _."
echo "\033[32;1;5m░▀░ ▀▀▀ ▀░░░▀ ▀▀░ ▀░▀ ▀░▀▀ \033[33;1;5m| \(_|(_) | (_]"
echo "\033[32;1;5mAuthor : \033[37;1;5mCahyadi"
echo "\033[32;1;5mGithub : \033[37;1;5mhttps://github.com/ColdDark29/"
echo "\033[32;1;5mVersi  : \033[37;1;5m3.0"
echo "\033[34;1;5m──────────────────────────────────────────────────"$r
echo "\033[32;1;5m[★]====[ \033[33;1;5m1\033[31;1;5m. \033[32;1;5mXL Axiata                     ]====[★]"
echo "\033[32;1;5m[★]====[ \033[33;1;5m2\033[31;1;5m. \033[32;1;5mThree(3)                      ]====[★]"
echo "\033[32;1;5m[★]====[ \033[33;1;5m3\033[31;1;5m. Keluar                        \033[32;1;5m]====[★]"
echo -n "\033[32;1;5m[?] Pilih \033[33;1;5m=> \033[37;1;5m"
read pilih;
if [ $pilih -eq 1 ]
then
    php XlAxiata.php
elif [ $pilih -eq 2 ]
then
    php Three.php
elif [ $pilih -eq 3 ]
then
    echo "\033[31;1;5m[!] Keluar\033[0m";
    exit
else
    echo "\033[31;1;5m[!] Pilihan tidak ada\033[0m"
    sleep 1
    sh dor.sh
fi
