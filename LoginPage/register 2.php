<?php
    require 'setenv.php';
    require 'config.php';
?>  


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
     <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

<nav class="navbar is-light">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.php">
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
                            <a href="login.php" class="button">
                                <span class="icon"><i class="fas fa-user"></i></span>
                                <span>Login</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
<form method="POST" action="./user_insert.php">
    Username:<input class="input is-normal" type="text" name="username" placeholder="username@email.com" /><br />
    First Name:<input class="input is-normal" type="text" name="firstName" placeholder="firstname" /><br />
    Last Name:<input class="input is-normal" type="text" name="lastName" placeholder="lastname" /><br />
    Password:<input class="input is-normal" type="password" name="password" placeholder="*****" /><br /><br />
    <input class="button" type="submit" value="Create User" />
</form>

