<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding: 20px;
        }

        h1 {

            font-weight: bolder;
        }

        .content {
            border: 1px dashed purple;
            padding: 20px;
        }

        img {
            width: 100px;
            /* height: 100px; */
        }
    </style>
</head>

<body>


    <?php

    $nieuwsberichten = [
        'Amsterdam' => [
            [
                'titel' => 'Nieuwe patatzaak is geopend!',
                'beschrijving' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec lacus odio. Phasellus rhoncus eros neque, at iaculis dui venenatis at. In semper vitae metus eu vehicula.',
                'image' => 'images/patat.jpg'
            ],
            [
                'titel' => 'Burgermeester Halsema houd de (nacht)wacht',
                'beschrijving' => 'Cras id dignissim orci. Ut venenatis congue erat, quis fermentum arcu vehicula id. Sed scelerisque dapibus interdum. Morbi id leo non mauris consequat condimentum id id erat. Duis nec ante volutpat, sodales lacus vel, porta odio. Phasellus odio ante, viverra ac pharetra nec, maximus quis nisi. Cras congue volutpat justo id pretium. Nullam hendrerit lorem id risus venenatis rhoncus. Aliquam nulla urna, auctor non erat at, euismod lacinia turpis.',
                'image' => 'images/burgermeester.jpg'
            ]
        ],
        'Sport' => [
            [
                'titel' => 'Frenkie De Jong scoort drie keer',
                'beschrijving' => 'Nullam cursus cursus lorem vel ultrices. In congue, dui sed volutpat posuere, lorem nisi varius eros, vel dapibus quam est vitae mi. Ut et nulla a est laoreet efficitur. Cras accumsan urna libero, in interdum sapien molestie et. Aliquam in magna augue. Vivamus venenatis bibendum nisi id bibendum. Nulla et mi mi.',
                'image' => 'images/frenkie01.jpg'

            ]
        ],
        'Economie' => [
            [
                'titel' => 'De beurzen klimmen weer na Red Thursday',
                'beschrijving' => 'Donec eu facilisis ex. Proin a maximus diam. Vivamus efficitur ac turpis quis facilisis. Vivamus non laoreet velit, vitae consectetur dolor. Quisque enim sapien, sollicitudin vitae nisi quis, ultrices pretium felis. Aliquam malesuada maximus hendrerit. Suspendisse auctor commodo lacinia. Maecenas metus nisi, porta non sollicitudin id, condimentum vitae nisl.',
                'image' => 'images/rodebeurzen.jpg'
            ]

        ],
        'Onderwijs' => [
            [
                'titel' => 'Scholen sluiten vanwege het coronavirus',
                'beschrijving' => 'Nulla facilisi. Vivamus sagittis sem et tellus tempor, sit amet sodales nisl ornare. Donec ac sapien elit. Sed in elit at urna fermentum pharetra. Aliquam erat volutpat. Vivamus vel neque placerat, tincidunt lorem vitae, rhoncus nunc. Etiam et mi ultricies nisl varius facilisis sit amet in tortor.',
                'image' => 'images/corona_school.jpg'
            ],
            [
                'titel' => 'ROC van Amsterdam krijgt bezoek van de koning',
                'beschrijving' => 'Ut lacinia, augue laoreet suscipit elementum, diam lorem lacinia leo, id rutrum est lorem eu leo. Nam euismod odio vel felis mollis, a imperdiet leo mattis. Duis erat nisi, cursus ut massa tincidunt, rhoncus vulputate dolor.',
                'image' => 'images/rocking.jpg'
            ]
        ],

    ];
    foreach($nieuwsberichten as $nieuwsbericht){
        foreach($nieuwsbericht as $x){
            echo "<h2 class=title>$x[titel]</h2>";
            echo "<p class=title>$x[beschrijving]</p>";
            echo "<img src= $x[image] class=title>";
        }
    }
    ?>
    <!-- Loop door de array $nieuwsberichten en toon de gegevens in de juist HTML-tags  -->
</body>

</html>