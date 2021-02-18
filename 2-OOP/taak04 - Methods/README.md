# PHP-EXPERT

## 2-OOP

## taak04 - Methods

In deze opdracht gaan we verder met OOP. We gaan het hebben over wat objecten allemaal kunnen. De vorige opdracht ging over wat ze hadden: properties/eigenschappen.
Nu wat ze kunnen, de functies ofwel de methodes: iets berekenen. Iets ophalen, iets wijzigen enz.

### methods

Een methode is een functie in een class. Een object heeft dus één of meerdere methodes die gebruikt kunnen worden. Er bestaan ingebouwde methodes, maar je kunt zelf ook methodes maken.

### voorbeeld

De onderstaande class heeft een method `checkInhoud`. Deze functie doet niet zoveel behalve dan een if-statement uitvoeren. Als $inhoud vol is dan wordt er de string `De emmer is vol!` op het scherm getoont door de methode. Misschien niet een boeiende functie/method maar het gaat erom dat je weet hoe zoiets eruit zou kunnen zien.

```php
class Emmer{
    public $inhoud;
    public $kleur;

    //deze functie controleert of de emmer vol is ja of nee
    public function checkInhoud(){ 
        if($this->inhoud == 100){
            echo 'De emmer is vol!'; 
            }
        else{
            echo 'de emmer is niet vol';
        }
    }
}
```

En hoe gebruik je dan zo'n method (functie) dan? Bekijk eens onderstaand voorbeeld:

```php
$rodeEmmer = new Emmer();
$rodeEmmer->kleur = 'rood';
$rodeEmmer->checkInhoud();
```

Als je goed kijkt, zie je dat het gebruiken van een method bijna hetzelfde werkt als het gebruiken van een propertie. Het verschil zit hem in de `()` haakjes. De functie/method wordt nu uitgevoerd. Het handige aan OOP is dat we deze functie nu elke keer kunnen gebruiken voor ALLE objecten.

```php
//nu geen rodeEmmer maar een blauweEmmer
$blauweEmmer = new Emmer();
$blauweEmmer->kleur = 'blauw'; 
$blauweEmmer->checkInhoud();
```

## Leerdoelen

1. [ ] Ik maak een methode aan in een class en gebruik deze bij twee verschillende objecten

## Opdracht

1. Maak een class _Scooter_
2. Geef de Scooter class de volgende properties: kleur, merk, inhoudTank
3. Maak twee objecten aan: $piago en $peugeot.
4. Geef de properties van de objecten waardes:
   - $piago: merk="piago", kleur="rood", inhoudTank="6"
   - $peugeot: merk="peugeot", kleur="zwart", inhoudTank="7"
5. Maak in de class nu een method aan die checkt of de brandstoftank leeg is. Zo ja, zet een string op het scherm voor ieder object!

## Bronnen

- [Geek For Geeks - PHP | Classes](https://www.geeksforgeeks.org/php-classes/)
- [Geek For Geeks - PHP | Objects](https://www.geeksforgeeks.org/php-objects/)
