<?php
require_once("../../../config.php");
require(ROOT . 'app/model/dbConnection.php');
require(ROOT . 'app/model/dbFunctions.php');
require(ROOT . 'app/controller/inputFilter.php');
require(ROOT . "app/view/template/header.php");
?>

<main>
    <article>
        <h2>Admin panel.</h2>
        <p>A lot of this site is currently a work in progress.</p>
        <?php
        require(ROOT . "app/controller/db-ctrl.php");
        ?>
    </article>
</main>

<?php
require(ROOT . "app/view/template/footer.php");
?>