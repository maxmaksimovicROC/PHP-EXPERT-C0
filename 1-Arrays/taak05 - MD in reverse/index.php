<?php
$provincies = [ 
    [
        'provincie'=> 'Zuid-Holland',
        'hoofdstad' => 'Rotterdam',
        'bevolking' => '2500000',
        'inwoners_gemeente' => '200000'
    ],
    [
        'provincie'=> 'Utrecht',
        'hoofdstad' => 'Utrecht',
        'bevolking' => '2000000',
        'inwoners_gemeente' => '190000'
    ],
    ];

foreach($provincies as $provincie ){
    echo '<h2>' . $provincie['provincie']. '</h2>';
    echo '<ul>';
    echo '<li>hoofdstad: ' . $provincie['hoofdstad']. '</li>';
    echo '<li>bevolking: ' . $provincie['bevolking']. '</li>';
    echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente']. '</li>';
    echo '</ul>';

}
?>
