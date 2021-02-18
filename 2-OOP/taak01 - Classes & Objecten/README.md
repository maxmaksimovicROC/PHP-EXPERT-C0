# PHP-EXPERT

## 2-OOP

## taak01 - Classes & Objecten

In deze opdracht maak je kennis met een belangrijk concept binnen programmeren: OOP.
OOP staat voor Object Oriented Programming. De meeste software-ontwikkelaars werken hiermee. Het is een manier om code te ordenen. Je hebt er al eens gebruik van gemaakt zonder dat je het wist.

### Objecten in de echte wereld

### Uitleg 1: objecten

De wereld om je heen bestaat uit objecten. Denk maar aan de muis in je hand, of het bureau waaraan je zit. Maar ook een mens kun je definieren als object.
Daarnaast zijn huizen, auto's, speeltuinen en voetbalveldjes ook objecten. Eigenlijk is alles een object, als we het puur vanuit een software-ontwikkelaar kijken.

> #### Regel 1: Alles is een object

### Uitleg 2: properties (eigenschappen)

Alle eerdergenoemde objecten hebben eigenschappen, zoals: kleur, grootte, materiaalsoort, titel en naam. Zo heeft een auto een bepaalde kleur, hoogte, merk en typenaam.
Andere objecten hebben vaak weer andere _eigenschappen_. Het Engelse woord voor eigenschap is ook wel _property_.

> #### Regel 2: Elk object heeft een of meer eigenschappen

### Uitleg 3: methods (functionaliteiten)

Alle eerder genoemde objecten hebben naast eigenschappen ook _methods_. Dit betekent simpelweg dat objecten dingen kunnen **doen!**. Een aantal voorbeelden

- een auto: kan starten, kan rijden, kan stoppen en kan keren
- een mens: kan lopen, kan springen, kan tekenen, kan programmeren.
- een speeltuin kan opengaan, dichtgaan.

Methods zijn functionaliteiten (functions) van een object.

> ### Regel 3: Elk object heeft een of meer methods/functions

### Objecten in PHP

Binnen programmeertalen zijn er ook objecten. Vaak krijg je die van de bedenkers van de taal aangeleverd. Maar soms moet je zelf objecten bedenken. En om dit te doen moet je eerst een blauwdruk maken: een tekening van het object voordat je het object maakt. Je maakt tenslotte ook nooit een huis zonder bouwtekening of nooit een game of website zonder eerst een plan te maken?

Bij programmeren maken we altijd eerst een tekening om daarna een object te maken. Zo'n '_tekening_' noemmen we een **class**. Als we een class van een student willen maken dan ziet dat er zo uit

```php
class Student(){

}
```

Willen we properties (eigenschappen) toevoegen aan de student-bouwtekening dan doen we dat zo in PHP:

```php
class Student(){
  public $voornaam;
  public $achternaam;
  public $leeftijd;
  public $studentnummer;
}
```

> Het woordje __public__ verwijst naar een bepaalde toegankelijkheid tot de eigenschap. Waar in de code is de variabele aanspreekbaar. Daarover later meer.

#### Van Class naar Object

Oké, je hebt nu een mooie bouwtekening gemaakt. Deze **class** gaan we omzetten in een **object**

```php
class Student(){//bouwtekening
  public $voornaam;
  public $achternaam;
  public $leeftijd;
  public $studentnummer;
}

$nieuweStudent = new Student(); //met het woordje new maken we een nieuw object. Zet (net als bij een functie) haakjes achter de naam van het object

$nogEenNieuweStudent = new Student(); //en nu hebben we nog een student-object gemaakt.

// Er zijn nu twee Student Objecten gemaakt
```

## Leerdoelen

1. [ ] Ik maak een class
2. [ ] Ik maak van de eerder gemaakte class twee objecten

## Opdracht

1. Maak een class __auto__
2. Geef de volgende properties aan de auto: merk, kleur, type, uitvoering, brandstof
3. Maak van de class twee objecten, ofwel maak een auto-object. Gebruik de variable $nieuweAuto en $nogEenAndereAuto

## Bronnen

- [Geek For Geeks - PHP | Classes](https://www.geeksforgeeks.org/php-classes/)
- [Geek For Geeks - PHP | Objects](https://www.geeksforgeeks.org/php-objects/)
