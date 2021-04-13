# PHP-EXPERT

## 3 PDO SELECT - Taak02 Select All Users

## Uitleg

In deze opdracht ga je data uit een database halen met behulp van het eerder gemaakte PDO-object `$database_connectie`. Je dient uiteraard een sql statement te schrijven

Stel je hebt een databasetabel met schilderijen en die wil je uitlezen met PHP en op het scherm in je browser tonen.

```php
$sql = 'SELECT * FROM paintings';
$statement = $database_connectie->prepare($sql);
$statement->execute();
$all_paintings = $statement->fetchAll(); //fetchAll alle rijen die voldoen aan de sql-statemnt

print_r($all_paintings);

foreach($all_paintings as $painting){  
  echo $painting['naam'] . "<br>";
}
```

## Leerdoelen

1. [ ] Ik toon de gegevens uit een databasetabel met een prepared statement en de `fetchAll()` method

## Opdracht

1. Maak gebruik van de database `toolsforever`
2. Maak een bestand `users.php` in de map `htdocs`
3. Maak gebruik van het eerder gemaakte PDO-Object, je kunt gewoon `require 'database.php'`; coderen
4. Haal de gegevens van **gebruikers** op met een SELECT-statement uit de tabel `users` met de voorbeeld code hierboven
5. Loop door de gegevens met een foreach loop en toon alle data in de browser, bijvoorbeeld in een tabel

## Eindresultaat

![Eindresultaat](images/resultaat.png)

## Bronnen

> [PHP Delusions - PDO](https://phpdelusions.net/pdo)  
> [Geek For Geeks - Associative Arrays in PHP](https://www.geeksforgeeks.org/associative-arrays-in-php/)  
