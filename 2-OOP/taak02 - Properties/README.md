# PHP-EXPERT

## 2-OOP

## taak02 - Properties

Je gebruikt in deze opdracht de properties die je hebt gemaakt bij de class.

### Properties een waarde geven

Je weet hoe je een variabele declareert en een waarde geeft:

```php
$naam = 'Mohammed';
echo $naam; //Mohammed
```

Met properties van objecten kunnen we dat ook doen:

```php
class Student{
    public $voornaam;
}

$nieuweStudent = new Student();
$nieuweStudent->voornaam = 'Marcel';
echo $nieuweStudent->voornaam; //Marcel
```

## Leerdoelen

1. [ ] Ik geef waardes aan de properties van een gemaakt object

## Opdracht

1. Bij taak1 heb je een class gemaakt voor een auto met daarbij een aantal properties. Geef nu waardes aan deze properties:
   - merk: Tesla
   - kleur: rood
   - type: model 3
   - uitvoering: cabrio
   - brandstof: elektrisch
2. Toon de waardes op het scherm met een echo.

## Bronnen

- [Geek For Geeks - PHP | Classes](https://www.geeksforgeeks.org/php-classes/)
- [Geek For Geeks - PHP | Objects](https://www.geeksforgeeks.org/php-objects/)
