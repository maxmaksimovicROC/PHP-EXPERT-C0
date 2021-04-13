# PHP-EXPERT

## 4 PDO INSERT - Taak01 Create User

## Uitleg

In deze opdracht ga je data toevoegen aan een database halen met behulp van het PDO-object. Je weet uit de module PHP EXPERT 1 dat je eerst een connectie moet maken om daarna het object te gebruiken.

Stel je wilt gegevens toevoegen aan je database, dan neem je de volgende stappen:

1. Welke database ga je gebruiken?
2. Welke data wil je toevoegen?
3. Hoe wil je de gebruiker van je applicatie dat laten doen?

### vraag 1: Welke database ga je gebruiken?

Ok, nu we dit weten gaan we eerst vraag 1 beantwoorden: welke database? Oke, stel we gaan verder met de database `toolsforever`. Als je dit weet dan kun je een database connectie maken. (check PHP-Expert PDO-SELECT taak01)

### vraag 2: Welke data wil je toevoegen?

Welke data willen we gaan opslaan? Zeg nou eens dat we `gebruiker` informatie willen opslaan. Niet meteen complexe gegevens, maar gewoon een __voornaam__ en een __achternaam__. Dit zijn dus 2 stukjes data en dus twee verschillende kolommen in de database-tabel. Check je PHPMyadmin (database: toolsforever).

### vraag 3 Hoe wil je de gebruiker van je applicatie dat laten doen?

Vaak wordt een formulier `<form>` gebruikt om data dat is ingevuld op te slaan in een database. Je kunt ook andere manieren gebruiken maar wij gebruiken deze voor nu.

Bij zo'n formulier moet je bepalen welke __methode__ je gaat gebruiken. Is dat POST of GET. Weet je de verschillen nog?

  GET | POST
  --|---|
  opslaan als bookmark | geen bookmarking
  Niet gebruiken voor gevoelige data | gebruiken bij maken of update van data

Dus als je goed gelezen hebt gaan we _vraag 3_ beantwoorden met `POST`-method

- Nu kun je een php-bestand gaan maken
- formulier maken met html en css
- php code schrijven om database connectie te maken
- php code schrijven om data op te slaan in de database

De onderstaande code kun je gebruiken bij deze opdracht.

```php
//gegevens uit een formulier ophalen met de post method.
$firstName = $_POST['form_firstname'];
$lastName = $_POST['form_lastname'];


// !! De onderstaande code voegt gebruikers toe en geen producten. Pas de code aan.!!
$sql = "INSERT INTO users (firstname, lastname) VALUES (:ph_firstname , :ph_lastname)" ;//sql query met PLACEHOLDERS
//een ID slaan we niet op, deze wordt automatisch aangemaakt door MySQL
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_firstname", $firstName ); //verbind de waardes
$stmt->bindParam(":ph_lastname", $lastName ); //verbind de waardes
$stmt->execute();
```

## Leerdoelen

> 1. [ ] Ik voeg gegevens toe aan een databasetabel

## Opdracht

> 1. Maak gebruik van de database `toolsforever` met PHPMyAdmin
> 2. Maak een `user_create.php` in de map `toolsforever`
> 3. Maak in `user_create.php` een formulier waarbij je een `voornaam` en `achternaam` kan noteren in invulvelden
> 4. Zorg ervoor dat je de `method="post"` en `action="user_store.php"` gebruikt bij `<form>`
> 5. Maak een `user_store.php` in de map `toolsforever`
> 6. Maak een database connectie met `require` in `user_store.php`
> 7. Maak gebruik van bovenstaande code in `user_store.php` om een gebruiker in de db op te slaan.
> 8. Check PHPAdmin of de nieuwe gebruiker is opgeslagen.

## Bronnen

> [PHP Delusions - PDO](https://phpdelusions.net/pdo)  
> [Geek For Geeks - Associative Arrays in PHP](https://www.geeksforgeeks.org/associative-arrays-in-php/)  
