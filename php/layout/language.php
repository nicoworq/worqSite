<?php

/* Translations */
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
} else {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

if ($lang === 'es') {
    $locale = 'es_AR.utf8';
} else {
    $locale = 'en_EN.utf8';
}


putenv("LANG=" . $locale);
setlocale(LC_ALL, $locale);
$domain = 'es';

bindtextdomain('domain', 'locale/nocache');
bindtextdomain($domain, 'locale');

bind_textdomain_codeset($domain, 'UTF-8');
textdomain($domain);

$lang_to = $lang === 'es' ? 'en' : 'es';

$current_page = basename($_SERVER['PHP_SELF']);
