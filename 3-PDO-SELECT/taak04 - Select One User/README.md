# PHP-EXPERT

## 3 PDO SELECT - Taak04 Select One User

## Uitleg

In deze opdracht haal je nog meer data uit een database met behulp van het PDO-object. Met prepared statements ofwel _queries die voorbereid zijn_ kun je variabelen toevoegen op een juiste wijze. Je voorkomt hiermee SQL injecties.

> Onthoud: Als je variabelen wilt gebruiken in een query dan moet je **placeholders** gebruiken

Eerst de volledige code:

```php
$email = "mohamed@toolsforever.nl";

$sql = 'SELECT * FROM users WHERE email = :email';
$statement = $database_connectie->prepare($sql);
$statement->bindParam(":email", $email);
$statement->execute();
$user = $statement->fetch();
```

### Toelichting

Je ziet hieronder een placeholder staan: `:email`
Tijdens deze module gebruiken we dus de combinatie van een **:** en een **woord** erachter als placeholder: **:placeholder**
Zo maken we een veilige query. __Dus geen variabele in de sql-statement__

```php
$sql = 'SELECT * FROM users WHERE email = :email;
```

Daarna _prepare_ je de query met behulp van **PDO::prepare()**. Het resultaat van deze methode stoppen we in een nieuwe variabele, genaamd `$statement`. __Dit is een nieuw object!__

```php
$statement = $database_connectie->prepare($sql)
```

De query is nu voorbereid. Maar nu dienen we nog de placeholder en de opgegeven variabele te koppelen met de methode `bindParam()` van een het nieuwe object `$statement`

```php
$statement->bindParam(":email", $email);  // hier koppel je opgegeven variabele ($email) en de placeholder (":email") aan elkaar
```

Je maakt wederom gebruik van het `$statement` object om de query uit te voeren ofwel _execute()_ de sql string die net is voorbereid.

```php
$statement->execute();
```

De query is uitgevoerd en nu bepaal je wat je wilt doen met de query (aantal gevonden voorwerpen of alle records ophalen, etcetera). In dit geval de gegevens van de gebruiker ophalen:

```php
$user = $statement->fetch(); //haal 1 rij uit de database op met de method fetch()
```

Nu heb je op een veilige wijze alle gegevens van de gebruiker met emailadres `mohamed@toolsforever.nl` opgehaald. Deze gegevens staan nu in de variabele `$user`. Dit is een _associatieve_ array. En die kan je op het scherm tonen zoals je gewend bent.

## Leerdoelen

> 1. [ ] Ik toon een enkele rij gegevens uit een database tabel met behulp van PDO

## Opdracht

> 1. Maak gebruik van de database `toolsforever`.
> 2. Maak in gebruiker.php van deze opdracht een databaseconnectie.
> 3. Haal de gegevens op met een SELECT WHERE-statement en haal uit de `users` tabel alleen de gegevens van _Bart Koning_ op.
> 4. Bij 3 moet je wel gebruik maken van _prepared statements_
> 5. Toon de gegevens op het scherm.

## Eindresultaat

![Eindresultaat](images/eindresultaat.png)

## Bronnen

> [PHP Delusions - PDO](https://phpdelusions.net/pdo)  
> [Geek For Geeks - Associative Arrays in PHP](https://www.geeksforgeeks.org/associative-arrays-in-php/)
