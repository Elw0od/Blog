<div id="sidebar" class="sidebar">
            <div class="menu-left-part">
                <div class="search-holder">
                    <form action="index.php?page=search" method="POST">
                        <label>
                            <input type="text" name="keywords" autocomplete="off" class="search-field" placeholder="Tapez ici pour rechercher...">
                        </label>
                    </form>
                </div>
                <div class="site-info-holder">
                    <h1 class="site-title">NomDuBlog</h1>
                    <p class="site-description">
                        Description du blog à venir, quand les idées seront là.
                    </p>
                </div>
                <nav id="header-main-menu">
                    <ul class="main-menu sm sm-clean">
                        <li class="<?php echo ($page=="home")?"active" : ""; ?>"><a href="index.php?page=home">Accueil</a></li>
                        <li class="<?php echo ($page=="about")?"active" : ""; ?>"><a href="index.php?page=about">A propos de moi</a></li>
                        <li class="<?php echo ($page=="blog")?"active" : ""; ?>"><a href="index.php?page=blog">Blog</a></li>
                        <li class="<?php echo ($page=="contact")?"active" : ""; ?>"><a href="index.php?page=contact">Contact</a></li>
                        <?php if (admin()==1) { ?>
                            <li class="<?php echo ($page=="dashboard")?"active" : ""; ?>"><a href="admin/index.php?page=dashboard">Dashboard</a></li>
                        <?php } else { ?>
                            <li class="<?php echo ($page=="login")?"active" : ""; ?>"><a href="admin/index.php?page=login">Connexion</a></li>
                        <?php } ?>
                    </ul>
                </nav>
                <footer>
                    <div class="footer-info" id="fixedfoot">
                        © 2018 COPYRIGHT - <a href="https://twitter.com/KevinDupas/">KEVIN DUPAS</a>.
                    </div>
                </footer>
            </div>
            <div class="menu-right-part">
                <div class="logo-holder">
                    <a href="index.php?page=home">
                        <img src="images/logo.png" alt="Suppablog WP">
                    </a>
                </div>
                <div class="toggle-holder">
                    <div id="toggle">
                        <div class="menu-line"></div>
                    </div>
                </div>
                <div class="social-holder">
                    <div class="social-list">
                        <a href="https://github.com/KevinDupas" target="_blank"><i class="fa fa-github"></i></a>
                        <a href="https://twitter.com/kevindupas?lang=fr" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/kevin.dupas.1" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <!--<a href="#"><i class="fa fa-behance"></i></a>-->
                        <a href="#"><i class="fa fa-rss"></i></a>
                    </div>
                </div>
                <div class="fixed scroll-top"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></div>
            </div>
            <div class="clear"></div>
</div>