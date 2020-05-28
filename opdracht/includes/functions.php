<?php
$producten = array(
"1" => [
    'naam' => 'peren',
    'prijs' => 2.00
],

"2" => [
    'naam' => 'pindakaas',
    'prijs' => 2.50
],

"3" => [
    'naam' => 'aardapellen',
    'prijs' => 0.10
],

"4" => [
    'naam' => 'stroopwafels',
    'prijs' => 3.00
],

"5" => [
    'naam' => 'sigaretten',
    'prijs' => 7.40
],

"6" => [
    'naam' => 'limonade',
    'prijs' => 1.20
],

"7" => [
    'naam' => 'bier',
    'prijs' => 1.40
],

"8" => [
    'naam' => 'wijn',
    'prijs' => 3.00
],

"9" => [
    'naam' => 'zandkoekjes',
    'prijs' => 2.40
],

"10" => [
    'naam' => 'rijst',
    'prijs' => 2.00
],

);

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
}

function getDataType(){
    if (isset($_GET['input'])){
        $datatype = gettype($_GET['input']);
        echo $datatype;
    }
}

function berekenPrijs(){
    global $producten;

    if(isset($_GET['productnummer']) && isset($_GET['aantal'])){
        if (isset($producten[$_GET['productnummer']])){
            echo $producten[$_GET['productnummer']]
            ['prijs'] * $_GET['aantal'];
        }
    }
}

function berekenKorting()
{
    if (!isset($_GET['leeftijd']) || $_GET['leeftijd'] == 0) {
        return;
    }

    $leeftijd = $_GET['leeftijd'];
    // echo "leeftijd is". $leeftijd;
    $korting = 0; 

    // echo $leeftijd;
    if ($leeftijd < 16) {
        $korting = 1;
    } elseif ($leeftijd == 19) {
        $korting = 0.19;
    } elseif ($leeftijd == 18) {
        $korting = 0.18;
    } elseif ($leeftijd == 17) {
        $korting = 0.17;
    } elseif ($leeftijd == 16) {
        $korting = 0.16;
    }

    echo $korting . ' euro';
}

?>