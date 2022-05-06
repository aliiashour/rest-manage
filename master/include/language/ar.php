<?php
    function getValue($val){
        static $lang = array(
            "admin"             =>  'الأدمن',
            "category"          =>  'الأقسام',
            "table"             =>  'الطاولة',
            "tax"               =>  'الضريبة',
            "product"           =>  'المنتج',
            "users"             =>  'المستخدم',
            "order"             =>  'الطلب',
            "biling"            =>  'الفاتورة',
            "logout"            =>  'خروج',
            "darkMode"          =>  'النظام القاتم',
            "dashboard"         =>  'اللوحة الرئيسية',
            "master"            =>  'الأساسي',
            "setting"           =>  'الأعدادات',
            "todaySales"        =>  'مبيعات اليوم',
            "yesterdaySales"    =>  'مبيعات الأمس',
            "last7DaysSales"    =>  'مبيعات الاسبوع الماضي',
            "allTimesSales"     =>  'كل المبيعات',
            "tabel"             => 'طاولة',
            "person"            => 'شخص',
            "TableStatusArea"   =>  'قائمة حالات الطاولات',
        ) ;
        return $lang[$val] ; 
    }
?>