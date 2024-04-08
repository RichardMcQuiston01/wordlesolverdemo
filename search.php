<?php
header('Content-Type: application/json');
$output = [];

function eliminateLetter($string, $position, $letter) {

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['criteria'])) {
    $fileName = "wordlist.txt";
    $wordsList = file_get_contents($fileName);

    $words = explode("\n", $wordsList);

    $criteria = json_decode($_POST['criteria']);

    print_r($criteria); exit();
  }
}
echo json_encode($output);