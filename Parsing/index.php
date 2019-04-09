<?php

require_once "simple_html_dom.php";

$url = "http://ananaska.com/vse-novosti/";

function getArticleData($url)
{
    $article = file_get_html($url);

    $h1 = $article->find('h1', 0)->innertext;
    $content = $article->find('article', 0)->innertext;

    $data = compact('h1', 'content');

    return $data;
}

function getArticleLinksFromCatalog($url)
{
    echo PHP_EOL . $url . PHP_EOL . PHP_EOL;

    $html = file_get_html($url);

    foreach ($html->find('a.read-more-link') as $link_to_article) {
        echo $link_to_article->href . PHP_EOL;
        print_r(getArticleData($link_to_article->href));
    }

    // Recursion
    if ($next_link = $html->find('a.next', 0)) {
        getArticleLinksFromCatalog($next_link->href);
    }
}

getArticleLinksFromCatalog($url);
