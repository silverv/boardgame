<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('header.php');
include('classes/planet.php');
include('classes/plant.php');

// Creating a planet 
$currentPlanet = new Planet();
$currentPlanet->addPlant(new Plant('nettle', 'Whatever whateveris', false, 20));
$currentPlanet->addPlant(new Plant('cactus', 'Agave tequila', true, 1000));
$currentPlanet->addPlant(new Plant('alder', 'Sambuca sambuca', true, 23));
$currentPlanet->name = "Earth";
$currentPlanet->climate = "Temperate";
$currentPlanet->hasVolcanicActivity = true;
$currentPlanet->type = "terrestrial";
$currentPlanet->hasWater = true;
$currentPlanet->plants[1]->description = "A cactus (plural cacti, cactuses, or less commonly, cactus)[3] is a member of the plant family Cactaceae,[Note 1] a family comprising about 127 genera with some 1750 known species of the order Caryophyllales.[4] The word \"cactus\" derives, through Latin, from the Ancient Greek κάκτος, kaktos, a name originally used by Theophrastus for a spiny plant whose identity is now not certain.[5] Cacti occur in a wide range of shapes and sizes. Most cacti live in habitats subject to at least some drought. Many live in extremely dry environments, even being found in the Atacama Desert, one of the driest places on earth. Cacti show many adaptations to conserve water. Almost all cacti are succulents, meaning they have thickened, fleshy parts adapted to store water. Unlike many other succulents, the stem is the only part of most cacti where this vital process takes place. Most species of cacti have lost true leaves, retaining only spines, which are highly modified leaves. As well as defending against herbivores, spines help prevent water loss by reducing air flow close to the cactus and providing some shade. In the absence of leaves, enlarged stems carry out photosynthesis. Cacti are native to the Americas, ranging from Patagonia in the south to parts of western Canada in the north—except for Rhipsalis baccifera, which also grows in Africa and Sri Lanka. Cactus spines are produced from specialized structures called areoles, a kind of highly reduced branch. Areoles are an identifying feature of cacti. As well as spines, areoles give rise to flowers, which are usually tubular and multipetaled. Many cacti have short growing seasons and long dormancies, and are able to react quickly to any rainfall, helped by an extensive but relatively shallow root system that quickly absorbs any water reaching the ground surface. Cactus stems are often ribbed or fluted, which allows them to expand and contract easily for quick water absorption after rain, followed by long drought periods. Like other succulent plants, most cacti employ a special mechanism called \"crassulacean acid metabolism\" (CAM) as part of photosynthesis. Transpiration, during which carbon dioxide enters the plant and water escapes, does not take place during the day at the same time as photosynthesis, but instead occurs at night. The plant stores the carbon dioxide it takes in as malic acid, retaining it until daylight returns, and only then using it in photosynthesis. Because transpiration takes place during the cooler, more humid night hours, water loss is significantly reduced.";
$selectedPlant = $currentPlanet->plants[1];

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
                <?php foreach ($currentPlanet->plants as $key => $plant) : ?>
                    <tr>
                        <td>
                            <?php if ($plant->isPlanted) : ?>
                                <span>Planted</span>
                            <?php else : ?>
                                <span>Dormant</span>
                            <?php endif ?>
                        </td>
                        <td>
                            <?= $plant->name; ?>
                        </td>
                        <td>
                            <?= $plant->latinName; ?>
                        </td>
                        <td>
                            <span> <?= $plant->seeds; ?> </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="plant-detail">
            <h3><?= $selectedPlant->latinName; ?></h3>
            <div>
                <p><?= $selectedPlant->name; ?></p>
            </div>
            <img class="plant-image" src=<?= $selectedPlant->imageURL; ?>>
            <div>
                <p><?= $selectedPlant->description; ?></p>
            </div>
        </div>
    </div>
    <div class="planet-view">
        <h1 class="name"><?php echo $currentPlanet->name; ?></h1>
        <div class='planet'>
            <canvas width='500px' height='500px' id='globe'></canvas>
            <script type='text/javascript' src='../scripts/create_planet.js'></script>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>