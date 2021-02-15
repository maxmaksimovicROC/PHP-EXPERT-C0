# PHP EXPERT

## 3 PDO SELECT - taak01 Database

### Uitleg

De makers van PHP hebben een een soort tussenlaag gebouwd waarmee je tussen PHP (de code) en MySQL (de database) kunt communiceren.

PDO staat voor PHP Data Object. PDO is vele malen beter dan zijn kleine broertjes `mysql` en `mysqli`.

De voordelen zitten in

> * Beveiliging (prepared statements)
> * Gebruiksvriendelijkheid (veel functies die helpen automatiseren)
> * Herbruikbaarheid (verschillende databasetypen gebruiken)

Je gaat gebruik maken van een PDO-OBJECT om dit te bewerkstelligen.Om het PDO-object te gebruiken moeten we eerst een connectie maken met de database.

In de onderstaande code staat een voorbeeld van het maken van zo'n connectie. Er wordt een connectie gemaakt met de `easydrive` database

(Als je dat nog niet gedaan hebt kun je nu een database maken met behulp van PHPMyAdmin)

```php
$database_lokatie     = 'localhost';
$database_naam        = 'easydrive';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);
```

De variabele `$database_connectie` bevat allerlei methodes en eigenschappen die we gaan gebruiken in de komende taken.

## Leerdoelen

> 1. [ ] Ik maak een database connectie met behulp van PDO

## Opdracht

1. Maak een map aan op je server in htdocs, noem deze : `toolsforever`. Hierin codeer je de bestanden van de komende taken
2. Maak een database aan genaamd `toolsforever` met PHPMyAdmin
3. Importeer de volgende sql-bestanden (zie map `sql`) in de database
    * `users.sql`
    * `locations.sql`
4. Codeer de code van regel 24 t/m 29 van dit bestand in `database.php`
5. Pas in de code de naam van de database aan naar `toolsforever`

## Bronnen

> [PHP Delusions - PDO](https://phpdelusions.net/pdo)  
