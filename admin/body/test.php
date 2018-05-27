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
                        <li><a href="/admin/index.php?page=login">Connexion</a></li>
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
                    <?php
            if($page != 'login' && $page != 'new' && $page != 'password'){
                ?>
                            <a href="index.php?page=dashboard"><i class="material-icons">dashboard</i></a>
                        <?php
                        if(admin()==1){
                            ?>
                            <a href="index.php?page=write"><i class="fa fa-github"></a>
                            <a href="index.php?page=list"><i class="fa fa-github"></a>
                            <a href="index.php?page=settings"><i class="fa fa-github"></a>

                            <?php
                        }

                        ?>
                    </div>
                </div>
                <div class="fixed scroll-top"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></div>
            </div>
            <div class="clear"></div>
</div>