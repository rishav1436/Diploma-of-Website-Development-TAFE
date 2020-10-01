<?php
require_once("../../../config.php");
require(ROOT . "app/view/template/header.php");
?>

<main>
    <h2>Our blog</h2>

    <article>
        <div class='content-blog'>
            <div class='blog-content'>
                <h2>A word from Maurice</h2>
                <p>
                    Hi, my name is Maurice Lidman and my background is in boxing. I competed as an amateur in my early years and now like to share my knowledge and expertise as a coach. It is not unknown for me to jump into the ring as your sparring partner. Hope to see you in the club!
                </p>
                <h4>Posted: 26/08/2020</h4>
            </div>
            <aside>
                <img src='/public/img/author.jpg' alt='photo of author' class='author-img'>
                <h3>Maurice Lidman</h3>
                <p>Former professional boxer</p>
                <p>ML Strengths authority on all things boxing</p>
            </aside>
        </div>

    </article>
</main>

<?php
require(ROOT . "app/view/template/footer.php");
?>