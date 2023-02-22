<?php

class ContohStatic {
    public static $angka = 1;

    public static function halo(){
        return "Halo " . self::$angka++ . " kali.";
    }
}

echo ContohStatic::$angka;
echo ContohStatic::halo();
echo ContohStatic::halo();
echo ContohStatic::halo();

// nilai static akan selalu tetap meskipun object di-instancs berulang kali
// untuk fungsi bantuan/helper
// class utility