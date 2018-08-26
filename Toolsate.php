#!/data/data/com.termux/files/usr/bin/php
<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}
function input($echo) {
        echo $echo." --> ";
}
menu:
system($bersih);
$lblue  = "\e[36m";
$bluebg = "\e[44m";
$bold   = "\e[1m";
$cln    = "\e[0m";
$redbg = "\e[101m";
$yellowbg = "\e[43m";
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
$n="\033[1;37m";
$m="\033[1;31m";
$h="\033[1;32m";

function logo() {
  system("clear");
  echo <<<ST
\033[01;36m
 _____           _           _
|_   _|__   ___ | |___  __ _| |_ ___
  | |/ _ \ / _ \| / __|/ _` | __/ _ \
  | | (_) | (_) | \__ \ (_| | ||  __/
  |_|\___/ \___/|_|___/\__,_|\__\___|

\e[36m[===============================================>
\033[01;32mCodename   : \033[01;33mphp
\033[01;32mVersion    : \033[01;33m1.2
\033[01;32mAuthor     : \033[01;33mGunadiCBR
\033[01;32mDate       : \033[01;33m17-08-2018
\033[01;32mTeam       : \033[01;33mMls18hckr
\e[36m[===============================================>


ST;
}

function About() {
  logo();
  echo <<<ST
         \e[36m[==========================================================>
         \033[01;33mNama Tool \033[01;37m: \033[01;36mToolsate
         \033[01;33mAuthor \033[01;37m: \033[01;36mGunadiCBR
         \033[01;33mTeam \033[01;37m: \033[01;36mMls18hckr & afelCBR
         \033[01;33mDate \033[01;37m: \033[01;36m17-08-2018
         \033[01;33mSpesial Thanks To:
         \033[01;33m1. \033[01;36mafel
         \033[01;33m2. \033[01;36mayam
         \033[01;33m3. \033[01;36manjing
         \033[01;31mAnd All Member Mls18hckr
         \e[36m[==========================================================>

\033[01;36mplease \033[01;33mENTER \033[01;36mFor Back To Menu

ST;
  $prompt=" \033[31;1mroot@Tools-\e[36mToolsate~# ";
  echo $prompt;
  $getact = readline('');
  menu();
}

function menu() {
  logo();
  echo "\e[1m990. Informasi Tool ini\n";
  echo "999. \033[01;32mExit (Keluar) \n\n";
  $prompt="  \033[31;1mroot@tools-\033[34;1mToolsate~# ";
  echo $prompt;
  $inp = readline('');
  if ($inp=="999") {
    echo "\n\033[01;31mBy...By...By Mastahku...:)\033[00m\n";
    sleep(1.80);
    echo "\033[01;32m[-]Exiting Program......:)\n\n\033[00m" . $bold;
    sleep(4.90);
    exit();
  } else if ($inp=="990") {
    About();
  } else {
    echo "\033[01;31m[!] WRONG INPUT [!]" . $cln;
    sleep(0.90);
    menu();
  }
}
menu();
?>
