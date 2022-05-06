<?php
    function getValue($val){
        static $lang = array(
            "admin"             =>  'admin',
            "category"          =>  'category',
            "table"             =>  'table',
            "tax"               =>  'tax',
            "product"           =>  'product',
            "users"             =>  'users',
            "order"             =>  'order',
            "biling"            =>  'biling',
            "logout"            =>  'logout',
            "darkMode"          =>  'dark mode',
            "dashboard"         =>  'dashboard',
            "master"            =>  'master',
            "setting"           =>  'setting',
            "todaySales"        =>  'today Sales',
            "yesterdaySales"    =>  'yesterday Sales',
            "last7DaysSales"    =>  'last 7 Days Sales',
            "allTimesSales"     =>  'all Times Sales',
            "tabel"             => 'tabel',
            "person"            => 'person',
            "TableStatusArea"   =>  'Table Status Area',
        ) ;
        return $lang[$val] ; 
    }
?>