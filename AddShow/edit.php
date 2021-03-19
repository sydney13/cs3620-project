<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
     <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

<nav class="navbar is-light">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="login.html">
                    <span class="icon is-large">
                <i class="fas fa-home"></i>
              </span>
                    <span>Home</span>
                </a>
                <div class="navbar-burger burger" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">
                    <!-- navbar link go here -->
                </div>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="profile.php" class="button is-warning">
                                <span class="icon"><i class="fas fa-user"></i></span>
                                <span>Cancel</span>
                            </a>
                            <a href="login.php" class="button is-danger">
                                <span class="icon"><i class="fas fa-list"></i></i></span>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

<?php
require './utilities/config.php';
require 'setenv.php';

 ?>

<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('./show/show.php');

    $show = new show();
    $shows = $show->getShow($_GET["id"]);




        echo '<div class="card">
                <div class="card-content">
                <form method="POST" action="./user_update.php" >
                Title:<input class="input is-normal" type="text" name="show_name" placeholder="Name" value="' . $shows[0]->getShowName() . '" /><br />
                Creator:<input class="input is-normal" type="text" name="show_description" placeholder="About....." value="' . $shows[0]->getShowDescription() . '"/><br />
                Release Date:<input class="input is-normal" type="text" name="show_rating" placeholder="5 stars" value="' . $shows[0]->getShowRating() . '"/><br />
                <input type="hidden" name="id" placeholder="1" value="' . $shows[0]->getShowId() . '"/>
                <input class="button" type="submit" value="Save" />
                </form>
                </div>
            </div>';
    
?>
