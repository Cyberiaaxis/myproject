<?php

require_once 'core/init.php';
$insert = DB::getInstance()->insert("user", [
    'username' => 'nitin',
    'password' => 'sharma',
    'salt' => 'new',
    'groups' => '1'
        ]);

var_dump($insert);

