# PHP-EXPERT

## 3 PDO SELECT - Taak5 Select One Location

## Uitleg

In deze opdracht haal je een specifieke lokatie op door gebruik te maken van **prepared statements**.

```php
$city = "Amsterdam";

$sql = 'SELECT * FROM locations WHERE city = :city';
$statement = $database_connectie->prepare($sql);
$statement->bindParam(":city", $city);
$statement->execute();
$user = $statement->fetch(); //met fetch haal je 1 rij op uit de database
```

## Leerdoelen

> 1. [ ] Ik toon een enkele rij gegevens uit een database tabel met behulp van PDO (herhaling taak03)

## Opdracht

> 1. Maak gebruik van de database `toolsforever`.
> 2. Maak een bestand `one_location.php`.
> 3. Maak ook hier een database connectie met require
> 4. Haal de gegevens op met een SELECT WHERE-statement en haal uit de tabel `locations` alleen de gegevens van _Groningen_ op.
> 5. Bij 4 moet je wel gebruik maken van _prepared statements_, dus een sql-statement met een __placeholder__
> 6. Toon de gegevens op het scherm.

## Eindresultaat

## Bronnen

> [PHP Delusions - PDO](https://phpdelusions.net/pdo)  
> [Geek For Geeks - Associative Arrays in PHP](https://www.geeksforgeeks.org/associative-arrays-in-php/)
