<?php
#Author = Cahyadi
#Upload date = 04-08-2019
#Update = 14-08-2019(v2.0)
#Update = 18-08-2019(v3.0)
$r = "\033[0m";
$m = "\033[31;1;5m";
$h = "\033[32;1;5m";
$k = "\033[33;1;5m";
$b = "\033[34;1;5m";
$c = "\033[36;1;5m";
$p = "\033[37;1;5m";
$logo =
  $h."▀█▀ █▀▀ █▄░▄█ █▀▄ ▄▀▄ █░▄▀ ".$k." .         ,    
".$h."░█░ █▀▀ █░█░█ █▀█ █▀█ █▀▄░ ".$k." ;_/. . _ -+- _.
".$h."░▀░ ▀▀▀ ▀░░░▀ ▀▀░ ▀░▀ ▀░▀▀ ".$k." | \(_|(_) | (_]
".$h."Author : ".$p."Cahyadi
".$h."Github : ".$p."https://github.com/ColdDark29/
".$h."Versi  : ".$p."3.0
".$b."──────────────────────────────────────────────────\n".$r;
function m(){
    global $logo,$h,$m,$k,$p,$r;
    system("clear");
    echo $logo;
    echo $h."[★]====[ ".$k."1".$m.".".$h." XL Axiata                     ]====[★]\n";
    echo $h."[★]====[ ".$k."2".$m.".".$h." Three(3)                      ]====[★]\n";
    echo $h."[★]====[ ".$k."3".$m.". Keluar                        ".$h."]====[★]\n".$r;
    pm();
};
function pm(){
    global $h,$m,$p,$k,$r;
    echo $h."[?] Pilih ".$k."=> ".$p;
    $x = trim(fgets(STDIN));
    if ($x == 1):
        include("XLAxiata.php");
    elseif($x == 2):
        include("Three.php");
    elseif($x == 3):
        echo $m."[!] Keluar\n".$r;
        sleep(1);
        exit();
    else:
        echo $m."[!] Pilihan tidak ada\n".$r;
        pm();
    endif;
};
m();
?>
