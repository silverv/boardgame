
$result = pg_prepare($dbconn, "plantquery", "INSERT INTO public.planet_plant_user (planet_id, user_id, plant_id, amount) VALUES($1, $2, $3, $4);");
$result= pg_execute($dbconn, "plantquery", array($currentPlanet->id, $_SESSION['user_id'], $chosenPlantId, 3))