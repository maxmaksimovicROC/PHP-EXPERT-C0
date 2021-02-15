# PHP-EXPERT

## 4 PDO INSERT - Taak02 Create Location

## Uitleg

In deze opdracht ga je nog meer data toevoegen aan de database `toolsforever`. Maar nu ga je een locatie toevoegen.

```php
//gegevens uit een formulier ophalen.
$name = $_POST['form_name'];
$address = $_POST['form_address'];
$city = $_POST['form_city'];

$sql = "INSERT INTO locations (name, address, city) VALUES (:ph_name , :ph_address, :ph_city)" ;//sql query  met PLACEHOLDERS
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_name", $name ); //verbind de waardes
$stmt->bindParam(":ph_address", $address ); //verbind de waardes
$stmt->bindParam(":ph_city", $city ); //verbind de waardes
$stmt->execute();
```

## Leerdoelen

> 1. [ ] Ik voeg gegevens toe aan een databasetabel

## Opdracht

> 1. Maak gebruik van de database `toolsforever` met PHPMyAdmin
> 2. Maak een `location_create.php` in de map `toolsforever`
> 3. Maak in `location_create.php` een formulier waarbij je een `naam`, `adres` en `stad` kan noteren in invulvelden
> 4. Zorg ervoor dat je de `method="post"` en `action="location_store.php"` gebruikt bij `<form>`
> 5. Maak een `location_store.php` in de map `toolsforever`
> 6. Maak een database connectie met `require` in `location_store.php`
> 7. Maak gebruik van bovenstaande code in `location_store.php` om een lokatie in de db op te slaan.
> 8. Check PHPAdmin of de nieuwe gebruiker is opgeslagen.

## Eindresultaat

## Bronnen

> [PHP Delusions - PDO](https://phpdelusions.net/pdo)  
> [Geek For Geeks - Associative Arrays in PHP](https://www.geeksforgeeks.org/associative-arrays-in-php/)  
