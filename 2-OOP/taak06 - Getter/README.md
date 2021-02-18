# PHP-EXPERT

## 2-OOP

## taak05 - Getter

Een methode gebruiken die de waarde van properties ophaalt. Een get-method.

### methods

Bij de vorige opdracht heb je een soort van setter method gemaakt. Hiermee kon je properties aanpassen. Nou je kunt ook een method maken die properties ophaalt. Hiervoor kun je de _return_ statement gebruiken.

### voorbeeld

We gebruiken weer de Hond Class.

```php
class Hond{
    public $naam;
    public $soort;

    public function setSoort($soort_parameter){ 
        $this->soort = $soort_parameter;
    }

    public function getSoort(){
        return $this->soort;
    }
}

```

Hoe gebruik je zo'n method (functie) dan? Bekijk eens onderstaand voorbeeld:

```php
$eenHond = new Hond();
$eenHond->naam = 'Bassie';
$eenHond->setSoort("Duitse Herder");
echo $eenHond->soort; //Duitse Herder
echo $eenHond->getSoort(); // Duitse Herder
```

Je ziet dat de laatste twee regels hetzelfde resultaat veroorzaken. In dit geval kan je dus beide regels code gebruiken. In de volgende opdracht zal het verschil duidelijker worden als we het gaan hebben over __zichtbaarheid__.

## Leerdoelen

1. [ ] Ik maak een `get`-methode aan die een propertie ophaald

## Opdracht

1. Maak een class _Robot_
2. Geef de Robot class de volgende properties: naam, geluid, voortstuwing
3. Maak twee objecten aan: $wally en $wolly.
4. Geef de properties van de objecten waardes:
   - $wally: naam="wal-e", geluid="beepboop", voortstuwing=rollend
   - $wolly: naam="wol-e", geluid="boopbeep", voortstuwing=lopend
5. Maak in de class nu een method aan die de propertie geluid kan ophalen en tonen op het scherm. Noem deze method `getSound()` en gebruik return
6. Maak gebruik van de method `getSound()` om van beide objecten het geluid op het scherm te tonen

## Bronnen

- [Geek For Geeks - PHP | Classes](https://www.geeksforgeeks.org/php-classes/)
- [Geek For Geeks - PHP | Objects](https://www.geeksforgeeks.org/php-objects/)
