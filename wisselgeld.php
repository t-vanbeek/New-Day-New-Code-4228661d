<?php

/*
1. INPUT bedrag
2. Maak een CONSTANT Array met de naam GELDEENHEDEN met daarin de volgende geldeenheden (50, 20, 10, 5, 2, 1)
3. restbedrag = bedrag
4. Voor elke geldeenheid in GELDEENHEDEN
    4a) IF restbedrag >= geldeenheid
        4aa) aantalKeerGeldEenheidInRestBedrag = bereken hoevaak geldeenheid in restbedrag past
        4ab) restbedrag = restbedrag % geldeenheid
        4ac) PRINT X keer X euro
*/

$geldeenheden = array(
    50,
    20,
    10,
    5,
    2,
    1
);

echo "Bedrag?" . PHP_EOL;
$restbedrag = readline() . PHP_EOL;

foreach ($geldeenheden as $GELDEENHEDEN) {
    if ($restbedrag >= $GELDEENHEDEN) {
        
        $aantalKeerGeldEenheidInRestBedrag = $restbedrag / $GELDEENHEDEN;

        var_dump($aantalKeerGeldEenheidInRestBedrag);
        
        $floored = floor($aantalKeerGeldEenheidInRestBedrag);
        
        var_dump($floored);

        $floored = (int) $floored;

        $aantalKeerGeldEenheidInRestBedrag = $floored;
        
        $restbedrag = $restbedrag % $GELDEENHEDEN;

        echo("$aantalKeerGeldEenheidInRestBedrag keer $GELDEENHEDEN euro.") . PHP_EOL;
    }
}

?>