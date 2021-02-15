# PHP-EXPERT

## 6 PDO DELETE - Taak01 Update User

## Uitleg

Je kunt data natuurlijk ook updaten. Hiervoor gebruik je wederom weer een HTML-Form. Maar nu wel met uiteraard een andere SQL Statement.

Je moet eerst voor jezelf bepalen welke rij je wilt aanpassen. Deze data moet je eerst tonen in het formulier. Dit kun je de update bewerkstelligen met een SQL SELECT WHERE statement. Als je die uitvoert kun je de data in het formulier tonen.

```php
$form_id = $_GET['id'];
$form_firstname = 'Homer';
$form_lastname = 'Simpson';

//UPDATE EEN WAARDE IN EEN DATABASE TABEL
$sql = "UPDATE users SET firstname = :ph_firstname, lastname = :ph_lastname WHERE id = :id";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_firstname", $form_firstname );
$stmt->bindParam(":ph_lastname",  $form_lastname );
$stmt->bindParam(":id", $form_id );
$stmt->execute();
```

## Leerdoelen

> 1. [ ] Ik pas een enkele data rij uit de users tabel aan

## Opdracht

1. Maak gebruik van de database `toolsforever` met PHPMyAdmin
2. Maak gebruik van `users.php` in de map `toolsforever`
3. Maak een bestand aan `user_update.php`
4. Voeg dynamisch een link `<a>` toe aan elke gebruiker op `users.php`, de link dient te verwijzen naar `user_update.php?id=1`. Kun je ervoor zorgen dat het cijfer 1 steeds correct correspondeert met de jusite gebruiker?
5. Als men op de link klikt dan moet men op `user_update.php` belanden
6. Op `user_update.php` voer je bovenstaande code uit
7. Check PHPAdmin of het product is verwijderd.

## Bronnen

> [PHP Delusions - PDO](https://phpdelusions.net/pdo)  
