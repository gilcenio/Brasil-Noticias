<?php
    // noticias  
    $url = 'http://newsapi.org/v2/top-headlines?sources=google-news-br&apiKey=718669245b364feba403c6b490d4a377';
    $response = file_get_contents($url);
    $NewsData = json_decode($response);
    // biticoin 
    $url = 'http://newsapi.org/v2/everything?q=bitcoin&apiKey=718669245b364feba403c6b490d4a377';
    $response1 = file_get_contents($url);
    $NewsData1 = json_decode($response1);
    // negocios
    $url = 'http://newsapi.org/v2/top-headlines?country=br&category=business&apiKey=718669245b364feba403c6b490d4a377';
    $response2 = file_get_contents($url);
    $NewsData2 = json_decode($response2);
    // entretenimento
    $url = 'http://newsapi.org/v2/top-headlines?country=br&category=entertainment&apiKey=718669245b364feba403c6b490d4a377';
    $response3 = file_get_contents($url);
    $NewsData3 = json_decode($response3);
    // saude
    $url = 'http://newsapi.org/v2/top-headlines?country=br&category=health&apiKey=718669245b364feba403c6b490d4a377';
    $response4 = file_get_contents($url);
    $NewsData4 = json_decode($response4);
    // ciencias
    $url = 'http://newsapi.org/v2/top-headlines?country=br&category=science&apiKey=718669245b364feba403c6b490d4a377';
    $response5 = file_get_contents($url);
    $NewsData5 = json_decode($response5);
    // esportes
    $url = 'http://newsapi.org/v2/top-headlines?country=br&category=sports&apiKey=718669245b364feba403c6b490d4a377';
    $response6 = file_get_contents($url);
    $NewsData6 = json_decode($response6);
    // tecnologia
    $url = 'http://newsapi.org/v2/top-headlines?country=br&category=technology&apiKey=718669245b364feba403c6b490d4a377';
    $response7 = file_get_contents($url);
    $NewsData7 = json_decode($response7);
    //  teste
    $url = 'http://newsapi.org/v2/top-headlines? country = us & category = business & apiKey = 718669245b364feba403c6b490d4a377';
    $response8 = file_get_contents($url);
    $NewsData8 = json_decode($response8);
    ?>