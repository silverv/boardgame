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
$selectedPlant = $currentPlanet->getPlants()[1];
function fillPlantInventory($plants){
    $i = 0;
    foreach ($plants as $plant){
        $tableEntry = '<tr class="table-';
        $tableEntry.=(($i % 2 === 0 ? 'primary">' : 'secodary">'));
        $tableEntry.='<th scope="row"><span class="badge badge-pill badge-';
        $planted = $plant->getIsPlanted() ? 'success>Planted">' : 'light>Dormant">';
        $tableEntry.= $planted . '</span></th>';
        $tableEntry.= '<td>' . $plant->getName() . '</td>' . '<td>' . $plant->getLatinName() . '</td>';
        $tableEntry.= '<td><span class="badge badge-pill badge-info">' . $plant->getSeeds() . '</span></td></tr>';
        echo $tableEntry;
    }
}
?>
    <div class="container">
        <div class="plant-info">
            <div class="plant-inventory">
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
                        <?php foreach( $currentPlanet->getPlants() as $key=>$plant): ?>
                            <?= ($key % 2 === 0 ? '<tr class="table-primary">' : '<tr class="table-">'); ?>
                                <th scope="row">
                                    <?= ($plant->getIsPlanted() ? '<span class="badge badge-pill badge-success>Planted">' : '<span class="badge badge-pill badge-light>Dormant">')?>
                                    </span>
                                </th>
                                <td>
                                    <?= $plant->getName(); ?>
                                </td>
                                <td>
                                    <?= $plant->getLatinName(); ?>
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-info"> <?= $plant->getSeeds(); ?> </span></td>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="plant-detail">
                <div class="card text-white bg-success mb-3 ">
                    <h3 class="card-header"><?= $selectedPlant->getLatinName(); ?></h3>
                    <div class="card-body">
                        <h5 class="card-title"><?= $selectedPlant->getName(); ?></h5>
                    </div>
                    <img style="height: 200px; width: 100%; display: block;" src= <?= $selectedPlant->getImageURL(); ?> alt="Plant image">
                    <div class="card-body">
                        <p class="card-text"><?= $selectedPlant->getDescription();?></p>
                    </div>
                    <div class="card-footer text-muted">
                    </div>
                </div>
            </div>
        </div>
        <div class="planet-view">
            <h1 class="name"><?php echo $currentPlanet->getName(); ?></h1>
                <div class='planet'>
                    <canvas id='globe'></canvas>
                    <script type='text/javascript' src='../scripts/create_planet.js'></script>
                </div>
            </div>
        </div>
<?php
include('footer.php');
?>

