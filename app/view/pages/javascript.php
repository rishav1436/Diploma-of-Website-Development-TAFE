<?php
require_once("../../../config.php");
require(ROOT . "app/view/template/header.php");
?>

<main>
    <article>
        <h2>Welcome.</h2>

        <input type='range' id='tempslider' min='0' max='255' value='0' oninput="tempnumber.value = tempslider.value">
        <input type='number' id='tempnumber' min='0' max='255' value='0'>

        <div id='swatch'></div>
        <div style='background-color: rgba(128, 128, 128, 100);'>TEST</div>

    </article>
</main>

<?php
require(ROOT . "app/view/template/footer.php");
?>