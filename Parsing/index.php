<?php

require_once "simple_html_dom.php";

$url = "http://ananaska.com/vse-novosti/";

function getArticleLinksFromCatalog($url)
{
    $html = file_get_html($url);

    foreach ($html->find('a.read-more-link') as $link_to_article) {
        echo $link_to_article->href . PHP_EOL;
    }
}

getArticleLinksFromCatalog($url);
