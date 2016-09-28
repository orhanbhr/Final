<?php return
[
    //--------------------------------------------------------------------------------------------------
    // DateTime
    //--------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : Copyright (c) 2012-2016, ZN Framework
    //
    //--------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------
    // Timezone
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanım: Saatlerde kaymama olmaması için bölge seçimi yapılmıştır.
    // Bulunduğunu bölgeye göre ayarlayabilirsiniz.
    // Varsayılan olarak Europe/Istanbul seçilmiştir.
    //
    //--------------------------------------------------------------------------------------------------
    'timeZone' => 'Europe/Istanbul',

    //--------------------------------------------------------------------------------------------------
    // Set Locale
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanım: Türkçe içerikli karakterleri desteklemesi amacıyla kullanılır.
    // setDate() yöntemi haric diğer yöntemler için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------
    'setLocale' =>
    [
        //----------------------------------------------------------------------------------------------
        // Charset
        //----------------------------------------------------------------------------------------------
        //
        // Tarih/Zaman çıktıları için karakter seti ayarlanır.
        //
        //----------------------------------------------------------------------------------------------
        'charset'  => 'tr_TR.UTF-8',

        //----------------------------------------------------------------------------------------------
        // Language
        //----------------------------------------------------------------------------------------------
        //
        // Tarih/Zaman çıktıları için dil türü ayarlanır.
        //
        //----------------------------------------------------------------------------------------------
        'language' => 'turkish',
    ]
];