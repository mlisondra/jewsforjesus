<?php
/*
$ch = curl_init();
$params = urlencode('?milder.lisondra@jewsforjesus.org=025zeus');
curl_setopt($ch, CURLOPT_URL, 'https://bibles.org/v2/versions/eng-NASB:Acts.8.34.js' . $params); 

curl_exec($ch);
//print_r(curl_getinfo($ch));
curl_close($ch);
fclose($fp);
*/
$referred_passage = $_POST['passage'];
  $key = "5530e325750bbc1e";
  $passage = urlencode($referred_passage);
  $options = "include-first-verse-number=0&include-heading-horizontal-lines=0&include-passage-horizontal-lines=0&output-format=plain-text&include-passage-references=false&include-footnote-links=false&include-footnotes=false&include-verse-numbers=false&include-word-ids=false&include-headings=false&include-short-copyright=false";
  $url = "http://www.esvapi.org/v2/rest/passageQuery?key=$key&passage=$passage&$options";
  $ch = curl_init($url); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  $response = curl_exec($ch);
  curl_close($ch);
  print $response;
