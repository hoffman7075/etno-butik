<?php
$redirects = file_get_contents(__DIR__ . "/redirects.dat");
$rows = explode(";", $redirects);
$curPage = $APPLICATION->GetCurPage(true);

foreach($rows as $row) {
    $row = explode(",", $row);
    if( $curPage == $row[0] ) {
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $row[1]);
        exit;
    }
}