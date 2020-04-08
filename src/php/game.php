<?php
include('header.php');
include('classes/planet.php');
include('classes/plant.php');


$currentPlanet = new Planet();
$currentPlanet->addPlant(new Plant('nettle', 'Whatever whateveris', false, 20));
$currentPlanet->addPlant(new Plant('cactus', 'Agave tequila', true, 1000));
$currentPlanet->addPlant(new Plant('alder', 'Sambuca sambuca', true, 23));
$currentPlanet->setName('Earth');
$currentPlanet->setClimate('Temperate');
$currentPlanet->setHasVolcanicActivity(true);
$currentPlanet->setType('terrestrial');
$currentPlanet->setHasWater(true);

function fillPlantInventory($plants){
    $i = 0;
    foreach ($plants as $plant){
        $tableEntry = '';
        $tableEntry.=(($i % 2 === 0 ? '<tr class="table-primary">' : '<tr class="table-secodary">'));
        $tableEntry.='<th scope="row"><span class="badge badge-pill badge-';
        $planted = $plant->getIsPlanted() ? 'success>Planted">' : 'light>Dormant">';
        $tableEntry.=$planted . '</span></th>';
        $tableEntry.= '<td>' . $plant->getName() . '</td>' . '<td>' . $plant->getLatinName() . '</td>';
        $tableEntry.= '<td><span class="badge badge-pill badge-info">' . $plant->getSeeds() . '</span></td></tr>';
        echo $tableEntry;
    }
}
?>
    <div class="container">
        <div class="plantlist">
            <h1>Plant Inventory</h1>
            <table class="talbe table-hover">
                <thead>
                <tr>
                    <th scope="col">Status</th>
                    <th scope="col">Name</th>
                    <th scope="col">Latin Name</th>
                    <th scope="col">Seeds</th>
                </tr>
                <thead>
                <tbody>
                    <?php fillPlantInventory($currentPlanet->getPlants()); ?>
                </tbody>
            </table>
        </div>
        <div class="planet-view">
            <h1 class="name"><?php echo $currentPlanet->getName(); ?></h1>
                <div class='container, planet'>
                    <canvas id='globe'></canvas>
                    <script type='text/javascript' src='../scripts/create_planet.js'></script>
                </div>
            </div>
        </div>
<?php
include('footer.php');
?>

