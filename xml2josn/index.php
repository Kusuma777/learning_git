<?php
    $xmlObject = simplexml_load_file('sample.xml');
    $jsonData = json_encode($xmlObject, JSON_PRETTY_PRINT);
      
    print_r($jsonData);
?>