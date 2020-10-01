<?php
require_once("../../../config.php");
require(ROOT . "app/view/template/header.php");
?>

<main>
    <article>
        <h2>Welcome.</h2>

        <input type='range' id='red' min='0' max='255' value='0'>
        <input type='range' id='green' min='0' max='255' value='0'>
        <input type='range' id='blue' min='0' max='255' value='0'>
        <span id='tempnumber' style='border-radius: 2px;'></span>

    </article>
</main>

<script>
    const red = document.getElementById('red');
    const green = document.getElementById('green');
    const blue = document.getElementById('blue');

    let swatch = document.getElementById('tempnumber');

    let redslider = 0;
    let greenslider = 0;
    let blueslider = 0;

    swatch.innerHTML = 'RGB: ' + red.value + ' ' + green.value + ' ' + blue.value;
    swatch.style["background-color"] = "rgb(" + red.value + ", " + green.value + ", " + blue.value + ")";

    red.addEventListener("input", function() {
        swatch.innerHTML = 'RGB: ' + red.value + ' ' + green.value + ' ' + blue.value;
        swatch.style["background-color"] = "rgb(" + red.value + ", " + green.value + ", " + blue.value + ")";
    });
    green.addEventListener("input", function() {
        swatch.innerHTML = 'RGB: ' + red.value + ' ' + green.value + ' ' + blue.value;
        swatch.style["background-color"] = "rgb(" + red.value + ", " + green.value + ", " + blue.value + ")";
    });
    blue.addEventListener("input", function() {
        swatch.innerHTML = 'RGB: ' + red.value + ' ' + green.value + ' ' + blue.value;
        swatch.style["background-color"] = "rgb(" + red.value + ", " + green.value + ", " + blue.value + ")";
    });
</script>

<?php
require(ROOT . "app/view/template/footer.php");
?>