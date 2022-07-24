<?php
    include_once('templates/header.php');
?>
    <div class="container" id="view-contact-container">
        <h1 id="main-title"><?= $contact["name"] ?></h1>
        <p class="bold">Phone:</p>
        <p class="bold"><?= $contact["phone"] ?></p>
        <p class="bold">Observations:</p>
        <p class="bold"><?= $contact["observations"] ?></p>
    </div>
    <?php
    include_once('templates/footer.php');
?>