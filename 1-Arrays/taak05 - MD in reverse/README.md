# PHP-EXPERT

## 1-Arrays

## taak05 - MD in reverse

In deze opdracht ga je zelf een multidimensionale array maken. De code om de array op het scherm te tonen is al gemaakt.
Aan jou de taak om de juiste array te maken.
Maak gebruik van de tabel over Provincies in Nederland: [Provincies](https://nl.wikipedia.org/wiki/Provincies_van_Nederland#Overzicht)

### Multidimensionale array

```php
$provincies = [

];

foreach($provincies as $provincie ){
    echo '<h2>' . $provincie['provincie']. '</h2>';
    echo '<ul>';
    echo '<li>hoofdstad: ' . $provincie['hoofdstad']. '</li>';
    echo '<li>bevolking: ' . $provincie['bevolking']. '</li>';
    echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente']. '</li>';
    echo '</ul>';

}
```

## Leerdoelen

1. [ ] Je maakt een multidimensionale associatieve array om daarna te kunnen loopen.

## Opdracht

1. Schrijf een multidimensionale associatieve array genaamd `$provincies`
2. Zorg ervoor dat de drie __kolommen__ en de waardes juist getoond worden.

## Eindresultaat

![Eindresultaat](images/resultaat.png)

## Bronnen

[W3 Schools - PHP Arrays](https://www.w3schools.com/php/php_arrays_associative.asp)  
[W3 Schools - PHP Foreach Loop](https://www.w3schools.in/php/looping/foreach/)  
[Geek For Geeks - Associative Arrays in PHP](https://www.geeksforgeeks.org/associative-arrays-in-php/)  
[PHP Manual - Arrays](https://www.php.net/manual/en/language.types.array.php)
