<nav>

        <a id="navhome" href="/index.php"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a>

        <a id="navgit" href="https://github.com/HarrisFauntleroy"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a>

        <a id="navlinkd" href="https://www.linkedin.com/in/harris-fauntleroy-b4b5b51b1/"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>

        <a id="navcontact" href="/app/controllers/contactform.php"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></a>

        <a id="navlogin" href="#"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i></a>

        <a id="open-menu" href="#"><i class="fa fa-bars fa-lg" aria-hidden="true"></i></a>

</nav>

<script>
    var toggler = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function() {
            this.parentElement.querySelector(".dropdown-content").classList.toggle("show-content");
            this.classList.toggle("dropdown-btn-down");
        });
    }
</script>
<script>
/* Open */
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

/* Close */
function closeNav() {
  document.getElementById("myNav").style.height = "0%";
} 
</script>
<!-- dawd

        <h3 id="sitenav-header">Site navigation</h3>

        <ul id="site-nav-menu">

            <li><span class="dropdown-btn">TAFE ICT50615</span>
                <ul class="dropdown-content">
                    <li><span class="dropdown-btn">CMS</span>
                        <ul class="dropdown-content">
                            <li><span class="dropdown-btn">Wordpress</span>
                                <ul class="dropdown-content">
                                    <li><a href="/cms/wordpress">- Photographer site</a></li>
                                </ul>
                            </li>
                            <li><span class="dropdown-btn">Drupal</span>
                                <ul class="dropdown-content">
                                    <li><a href="/cms/drupal">- empty</a></li>
                                </ul>
                            </li>
                            <li><span class="dropdown-btn">Joomla</span>
                                <ul class="dropdown-content">
                                    <li><a href="/cms/joomla">- empty</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><span class="dropdown-btn">Web design cluster</span>
                        <ul class="dropdown-content">
                            <li><a href="/ICT50615/single-page-site/">- Single page website</a></li>
                            <li><a href="/ICT50615/five-page-site/">- Five page website</a></li>
                            <li><a href="/ICT50615/web-form/">- Web form</a></li>
                            <li><a href="/ICT50615/single-page-application/">- Single page application</a></li>
                        </ul>
                    <li><span class="dropdown-btn">Integrate database with a website</span>
                        <ul class="dropdown-content">
                            <li><a href="#">- spare</a></li>
                        </ul>
                    <li><span class="dropdown-btn">Create web based programs</span>
                        <ul class="dropdown-content">
                            <li><a href="#">- spare</a></li>
                        </ul>
                    <li><a href="#">- spare</a></li>
                </ul>
            </li>

            <li><span class="dropdown-btn">Web development</span>
                <ul class="dropdown-content">
                    <li><span class="dropdown-btn">CSS snippets</span>
                        <ul class="dropdown-content">
                            <li><a href="#">- Buttons</a></li>
                            <li><a href="#">- Inputs</a></li>
                            <li><a href="#">- Animations</a></li>
                        </ul>
                    </li>
                    <li><a href="https://harrisfauntleroy.github.io/">- Static site</a></li>
                    <li><a href="https://harrisfauntleroy.com/">- Dynamic (PHP)</a></li>
                </ul>
            </li>

            <li><span class="dropdown-btn">Fitness</span>
                <ul class="dropdown-content">
                    <li><span class="dropdown-btn">SUBMENU</span>
                        <ul class="dropdown-content">
                            <li><a href="#">- empty</a></li>
                        </ul>
                    </li>
                    <li><a href="#">- empty</a></li>
                </ul>
            </li>

            <li><span class="dropdown-btn">Photography</span>
                <ul class="dropdown-content">
                    <li><span class="dropdown-btn">SUBMENU</span>
                        <ul class="dropdown-content">
                            <li><a href="#">- empty</a></li>
                        </ul>
                    </li>
                    <li><a href="#">- empty</a></li>
                </ul>
            </li>

            <li><span class="dropdown-btn">Projects</span>
                <ul class="dropdown-content">
                    <li><span class="dropdown-btn">SUBMENU</span>
                        <ul class="dropdown-content">
                            <li><a href="#">- empty</a></li>
                        </ul>
                    </li>
                    <li><a href="#">- empty</a></li>
                </ul>
            </li>

            <li><span class="dropdown-btn">Links</span>
                <ul class="dropdown-content">
                    <li><span class="dropdown-btn">Instagram</span>
                        <ul class="dropdown-content">
                            <li><a href="https://www.instagram.com/harrisfauntleroy/">- Photography <i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/the_quantum_general/">- High voltage <i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/shrugganaught/">- Weightlifting <i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </li>
                    <li><a href="https://www.instructables.com/member/HazzWold1993/">- Instructables</a></li>
                </ul>
            </li>

        </ul>

-->