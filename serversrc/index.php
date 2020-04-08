<p>Here's all the planets:</p>
<?php
$dbconn = pg_connect("host=13.53.41.225 dbname=silverphp user=silverphp password=5KXhj!zOw6sZ70IwTe@5")
    or die('Could not connect: ' . pg_last_error());
$query = 'SELECT * FROM public.planet';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
</head>

<body>
    <?php
    echo "<table>\n";
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";
    ?>
</body>

</html>
<p>Planets end here</p>
<a href="plants"></a>