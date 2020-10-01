<?php
require_once("../../../config.php");
require(ROOT . "app/view/template/header.php");
?>

<main>
    <h2>About us</h2>
    
    <article>
        <p>
            We are a Brisbane based company with clubs at Ashgrove, Brisbane City, Chermside, Graceville and Westlake.
        </p>

        <p>
            We are a family operated business that has little to do with the rest of the fitness industry. Our gym world does not include the annoying telemarketers or membership consultants. Our gyms speak for themselves, our members do our marketing. We believe that word of mouth has way more credibility than something that a marketing machine dreams up. You are always welcome to look through any of our gyms at your own pace, with no pressure whatsoever.
        </p>
    </article>

    <div class='img-container'>
        <div class='img-content'>
            <img src='/public/img/content/content_1.jpg' alt="group yoga session">
            <p>Group classes</p>
        </div>
        <div class='img-content'>
            <img src='/public/img/content/content_2.jpg' alt="girls high-fiving mid-pushup">
            <p>A great time</p>
        </div>
        <div class='img-content'>
            <img src='/public/img/content/content_3.jpg' alt="trainer spotting man doing pushups">
            <p>The best trainers</p>
        </div>
    </div>
</main>

<?php
require(ROOT . "app/view/template/footer.php");
?>