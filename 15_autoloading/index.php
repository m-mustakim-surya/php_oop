<?php
// dapat dilakukan dengan beberapa cara
// 1. semua line require banyak-banyak yang digabungkan pada 1 file kemudian yang dipanggil file itu saja
// 2. autoload semua class dengan spl_autoload_register();

spl_autoload_register(function($class){
    require_once __DIR__ . 'src/' . $class . '.php'
});
// nama direktori src hanya contoh saja
