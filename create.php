<?php
    include_once('templates/header.php');
?>

    <div class="container">
        <?php include_once("templates/backbtn.html");?>
        <h1 id="main-title">Create contact</h1>
        <form id="create-form" action="<?= $BASE_URL ?>/config/process.php" methos="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="name">Phone number:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" required>
            </div>
            <div class="form-group">
                <label for="name">Observations:</label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Observations" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>  

<?php
    include_once('templates/footer.php');
?>