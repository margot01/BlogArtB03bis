<link rel="stylesheet" href="<?php echo(ROOTFRONT . '/back/css/style.css');?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amarante&family=Assistant:wght@300;600&display=swap" rel="stylesheet">

<header class="menu-desktop2">
    <div class=menu-desktop>
        
        <nav>
            <ul class="menu">
                <li class="menu-accueil">
                    <a href="<?php echo(ROOTFRONT . '/index.php')?>" class=accueil>accueil</a>
                </li>
                <li class="menu-apropos">
                    <a href="<?php echo(ROOTFRONT . '/construction.php')?>" class=apropos>a propos</a>
                </li>
                <li class="menu-articles">
                    <a href="<?php echo(ROOTFRONT . '/all_articles.php')?>" class=articles>articles</a>
                </li>
                <li>
                    <a href="index1.php">
                        <?php
                        if (isset($_COOKIE['statut'])){
                            if ($_COOKIE['statut'] == 1){
                                echo "panneau d'admin";
                            } else {
                                echo "&nbsp";
                            }
                        }
                        ?>
                    </a>
                </li>
            </ul>
        </nav>
        
        <a href="<?php echo(ROOTFRONT . '/index.php')?>">
            <img class="logo" src="<?php echo(ROOTFRONT . '/front/assets/images/logoBrrrdeaux.svg');?>" alt="Logo Brrrdeaux" />
        </a>

        <nav>
            <ul class="bar">
                <li class="bar-compte">
                    <a href="<?php echo(ROOTFRONT . '/mon_compte.php')?>" class=connect>mon compte</a>
                </li>
                <li>
                    <select>
                        <option value="Français">fr</option>
                        <option value="English">eng</option>
                        <option value="Espanol">es</option>
                    </select>
                </li>
                <li>
                    <form>
                        <div class="icon-search">
                            <img class="logo-menu" src="<?php echo(ROOTFRONT . '/front/assets/images/search.svg');?>" alt="Loupe" />
                            <input type="search" id="Research" name="q" placeholder="Rechercher" size="50">
                        </div>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</header>

