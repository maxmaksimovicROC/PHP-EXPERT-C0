# PHP-EXPERT

## 5 PDO DELETE - Taak01 Delete User

## Uitleg

Nu je data hebt toegevoegd moet data ook weer verwijderd worden. Let daarbij op dat je niet _alle_ data van een tabel verwijderd maar wel een enkele rij.

Met een simpele SQL statement kun je dit bereiken.

```php
$id = 1;// Het cijfer 1 moet jij vervangen voor een waarde uit de GET array. $_GET

//VERWIJDER EEN WAARDE UIT EEN DATABASE TABEL
$sql = "DELETE FROM products WHERE id = :ph_id";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_id", $id );
$stmt->execute()
```

## Leerdoelen

> 1. [ ] Ik verwijder een enkele rij gegevens uit een database tabel.

## Opdracht

1. Maak gebruik van de database `toolsforever` met PHPMyAdmin
2. Maak gebruik van `users.php` in de map `toolsforever`
3. Voeg dynamisch een link `<a>` toe aan elke gebruiker op `users.php`, de link dient te verwijzen naar `user_delete.php?id=1`. Kun je ervoor zorgen dat het cijfer 1 steeds correct correspondeert met de jusite gebruiker?
4. Als men op de link klikt dan moet men op `user_delete.php` belanden
5. Op `user_delete.php` voer je bovenstaande code uit
6. Check PHPAdmin of het product is verwijderd.

## Bronnen

> [PHP Delusions - PDO](https://phpdelusions.net/pdo)  
