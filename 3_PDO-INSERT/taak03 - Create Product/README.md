# PHP-EXPERT

## 4 PDO INSERT - Taak02 Create Product

## Uitleg

In deze opdracht gaan we nog meer data toevoegen. Maar omdat te doen hebben we nog een databasetabel nodig.
We gaan __producten__ toevoegen aan de database via een formulier. Bij deze taak heb je kennis nodig die bij PHP Expert voorbij is gekomen.

## Leerdoelen

> 1. [ ] Ik maak een nieuwe database tabel via phpmyadmin
> 1. [ ] Ik voeg gegevens toe aan een databasetabel

## Opdracht

1. Maak gebruik van de database `toolsforever` met PHPMyAdmin
2. Maak een nieuwe databasetabel genaamd `products` met PHPMyAdmin
3. Voeg de volgende gegevens toe:
      - `id` (int:11), (vink bij deze even A_I aan, van Auto Increment)
      - `name` (varchar:60),
      - `purchase_price`  (decimal:5,2),
      - `selling_price`  (decimal:5,2)
4. Maak een bestand aan `product_create.php` in de map `toolsforever`
5. Zet in het bestand `product_create.php` een formulier waarbij je een naam, aankoopprijs en verkoopprijs van het product uit het formulier kan ophalen. (denk aan de method: post of get)
6. Maak nog een bestand aan `product_store.php` in de map `toolsforever`
7. Gebruik de code uit de vorige opdracht in `product_store.php` en verander de code zodanig dat je een product kan opslaan in de database
8. Check PHPAdmin of het nieuwe product is opgeslagen.

## Bronnen

> [PHP Delusions - PDO](https://phpdelusions.net/pdo)  
> [Geek For Geeks - Associative Arrays in PHP](https://www.geeksforgeeks.org/associative-arrays-in-php/)  
