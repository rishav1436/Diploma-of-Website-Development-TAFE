<nav class='for-desktop'>
    <ul>
        <li><a href="/index.php">Home</a></li>
        <li><a href="/app/view/pages/content.php">About</a></li>
        <li><a href="/app/view/pages/table-of-data.php">Classes</a></li>
        <li><a href="/app/view/pages/web-form.php">Contact</a></li>
        <li><a href="/app/view/pages/blog.php">Blog</a></li>
    </ul>
</nav>

<nav class='for-mobile'>
    <button class="mobile-menu">ML-Strength</button>
    <div class=mobile-menu-content>
        <ul>
            <li><a href="/index.php">Home</a></li>
            <li><a href="/app/view/pages/content.php">About</a></li>
            <li><a href="/app/view/pages/table-of-data.php">Classes</a></li>
            <li><a href="/app/view/pages/web-form.php">Contact</a></li>
            <li><a href="/app/view/pages/blog.php">Blog</a></li>
        </ul>
    </div>
</nav>

<script>
    var menu = document.getElementsByClassName("mobile-menu");

    for (var i = 0; i < menu.length; i++) {
        menu[i].onclick = function() {
            this.classList.toggle('is-open');

            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                // accordion is currently open, so close it
                content.style.maxHeight = null;
            } else {
                // accordion is currently closed, so open it
                content.style.maxHeight = content.scrollHeight + "px";
            }
        }
    }
</script>