<nav>
    <!-- Premier menu -->
    <div class="menu">
        <div class="burger p-3 menu-hover">
            <i class="fas fa-bars"></i>
        </div>
        <div class="search">
            <i class="fas fa-search"></i>
            <input type="text">
        </div>
        <div class="title">
            <img src="<?= $basePath ?>assets/images/title.svg" alt="Mealoclock">
        </div>
        <div class="login p-3 menu-hover">
            <i class="fas fa-sign-in-alt"></i>
            &nbsp;Connexion
        </div>
        <div class="inscription p-3 menu-hover">
            <i class="fas fa-edit"></i>
            &nbsp;Inscription
        </div>
    </div>
    <!-- Second menu -->
    <div class="menu">
        <div class="menu-hover"><a href="<?= $router->generate('main_home') ?>">Home</a></div>
        <div class="menu-hover"><a href="<?= $router->generate('main_cgu') ?>">CGU</a></div>
        <div class="menu-hover"><a href="<?= $router->generate('main_faq') ?>">FAQ</a></div>
        <div class="menu-hover"><a href="<?= $router->generate('community_community', ['id' => 42]) ?>">Community 12</a></div>
        <div class="menu-hover"><a href="<?= $router->generate('event_create') ?>">Create Event</a></div>
        <div class="menu-hover"><i class="fab fa-twitter"></i></div>
        <div class="menu-hover"><i class="fab fa-facebook-f"></i></div>
    </div>
</nav>
<!-- emmet : nav(ul(li(a)*2)) -->
<!--<nav>
    <ul>
        <li><a href="<?= $router->generate('main_home') ?>">Home</a></li>
        <li><a href="<?= $router->generate('main_cgu') ?>">CGU</a></li>
        <li><a href="<?= $router->generate('main_faq') ?>">FAQ</a></li>
        <li><a href="<?= $router->generate('community_community', ['id' => 42]) ?>">Community 12</a></li>
        <li><a href="<?= $router->generate('event_create') ?>">Create Event</a></li>
    </ul>
</nav>-->
