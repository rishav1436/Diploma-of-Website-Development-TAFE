<!-- RIGHT SIDE -->
<?php
require(ROOT . "app/view/template/sg-right.php");
?>

<!-- SUBGRID END -->
</div>

<footer>
    <p id="footnote">
        <script>
            document.querySelector('#footnote').innerHTML = "Copyright &copy; 2019 - " + new Date().getFullYear() + " Harris Fauntleroy";
        </script>
    </p>
</footer>

<!-- SUB-MAIN GRID END -->
</div>

<!-- MAIN GRID END -->
</div>

<script>
    const btn = document.querySelector("input[id=theme-toggle]");
    const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

    const currentTheme = localStorage.getItem("theme");
    if (currentTheme == "dark") {
        document.body.classList.toggle("dark-theme");
    } else if (currentTheme == "light") {
        document.body.classList.toggle("light-theme");
    }

    btn.addEventListener("change", function() {
        if (prefersDarkScheme.matches) {
            document.body.classList.toggle("light-theme");
            var theme = document.body.classList.contains("light-theme") ?
                "light" :
                "dark";
        } else {
            document.body.classList.toggle("dark-theme");
            var theme = document.body.classList.contains("dark-theme") ?
                "dark" :
                "light";
        }
        localStorage.setItem("theme", theme);
    });
</script>

</body>

</html>