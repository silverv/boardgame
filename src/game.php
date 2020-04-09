<?php
include('header.php');
include('classes/planet.php');
include('classes/plant.php');

// Creating a planet 
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
?>
<div class="container">
    <div class="plant-info">
        <div class="plant-inventory">
            <h1>Plant Inventory</h1>
            <table class="plant-table">
                <tr>
                    <th>Status</th>
                    <th>Name</th>
                    <th>Latin Name</th>
                    <th>Seeds</th>
                </tr>
                <?php foreach ($currentPlanet->getPlants() as $key => $plant) : ?>
                    <tr>
                        <td>
                            <?php if ($plant->getIsPlanted()) : ?>
                                <span>Planted</span>
                            <?php else : ?>
                                <span>Dormant</span>
                            <?php endif ?>
                        </td>
                        <td>
                            <?= $plant->getName(); ?>
                        </td>
                        <td>
                            <?= $plant->getLatinName(); ?>
                        </td>
                        <td>
                            <span> <?= $plant->getSeeds(); ?> </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="plant-detail">
            <div class="card text-white bg-success mb-3 ">
                <h3 class="card-header"><?= $selectedPlant->getLatinName(); ?></h3>
                <div class="card-body">
                    <h5 class="card-title"><?= $selectedPlant->getName(); ?></h5>
                </div>
                <img style="height: 200px; width: 100%; display: block;" src=<?= $selectedPlant->getImageURL(); ?> alt="Plant image">
                <div class="card-body">
                    <p class="card-text"><?= $selectedPlant->getDescription(); ?></p>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>
        </div>
    </div>
    <div class="planet-view">
        <h1 class="name"><?php echo $currentPlanet->getName(); ?></h1>
        <div class='planet'>
            <canvas width='500px' height='500px' id='globe'></canvas>
            <script type='text/javascript' src='../scripts/create_planet.js'></script>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>