<?php
include('partial/header.php');
?>
    <form class="form" action="game.php">
        <fieldset>
            <legend>Start a Game</legend>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"class="form-control"  name="name" id="name">
            </div>
            <button type="submit" class="btn btn-primary play-button" >Play</button>
        </fieldset>
    </form>
<?php
include('partial/footer.php');
?>