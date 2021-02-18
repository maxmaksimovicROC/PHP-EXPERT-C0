# PHP-EXPERT

## 2-OOP

## taak05 - Setter

Een methode gebruiken die de waarde van properties aanpast.

### methods

Stel je codeert een applicatie voor een laboratorium. In het lab moeten ze soms een chemische stof toevoegen aan een expirement of ze moeten behaalde waardes van een display kunnen lezen.

Je kunt in de code een method opnemen waarmee je de waarde van property StofNaam aanpast op een elektronisch display

Ook kun je methods maken die de dan geldige waardes ophalen. In het geval van het laboratorium gebruik je deze bijvoorbeeld om te controleren wat de temperatuur is na een chemische reactie.

### voorbeeld

We hebben een class Hond met twee properties: naam en soort. Daarin kun je de _soort_ instellen met een method. Je gebruikt er het woordje __this__ voor. Dat doen we omdat we bij het maken van de class nog niet weten wat de namen van de objecten zullen zijn. 

Later weten we dat `$eenHond` gebruikt gaat worden. Maar nu weten we dat eigenlijk nog niet. Maar we willen wel de string `Duitse Herder` toekennen aan de _soort_ propertie. `$this` gaat over _deze_ class (of je kunt ook wel zeggen: gaat over dit object: dit=this)

```php
class Hond{
    public $naam;
    public $soort;

    public function setSoort(){ 
        $this->soort = 'Duitse Herder';
    }
}
```

Hoe gebruik je zo'n method (functie) dan? Bekijk eens onderstaand voorbeeld:

```php
$eenHond = new Hond();
$eenHond->naam = 'Bassie';
$eenHond->setSoort();
echo $eenHond->soort; //Duitse Herder
```

Nu is deze method `setSoort()` niet heel flexibel, want steeds dezelfde string wordt toegekend. We gaan met parameters werken om de method dynamischer te maken:

```php
class Hond{
    public $naam;
    public $soort;

    public function setSoort($soort_parameter){
        $this->soort = $soort_parameter;
    }
}

$eenHond = new Hond();
$eenHond->setSoort('Duitse Herder');
echo $eenHond->soort; // Duitse Herder
```

In bovenstaand voorbeeld wordt het al een stuk dynamischer. Nogmaals: geen heel boeiende applicatie.

## Leerdoelen

1. [ ] Ik maak een `set`-methode aan die een propertie waarde geeft

## Opdracht

1. Maak een class _Lamp_
2. Geef de Lamp class de volgende properties: kleur, helderheid, isAan
3. Maak twee objecten aan: $woonkamerLamp en $keukenLamp.
4. Geef de properties van de objecten waardes:
    - $woonkamerLamp: kleur="geel", helderheid="zacht", isAan=true
    - $keukenLamp: kleur="wit", helderheid="vel", isAan=false
5. Maak in de class nu een method aan die de propertie isAan kan wijzigen. Noem deze method `setStatus($status)`
6. Maak gebruik van de method `setStatus($status)` om de woonkamerLamp uit te zetten

## Bronnen

- [Geek For Geeks - PHP | Classes](https://www.geeksforgeeks.org/php-classes/)
- [Geek For Geeks - PHP | Objects](https://www.geeksforgeeks.org/php-objects/)
