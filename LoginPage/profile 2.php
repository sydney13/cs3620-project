<?php
require 'config.php';
require 'setenv.php';

session_start();



if(!isset($_SESSION['loggedin'])){
    header('Location: login.php');
    exit;
}
// query the database
$stmt = $con->prepare('SELECT password FROM user WHERE user_id = ?');
$stmt->bind_param('i', $_SESSION['user_id']);
$stmt->execute();
$stmt->bind_result($password);
$stmt->fetch();
$stmt->close();

?>

<?= template_header('Profile') ?>
<?= template_nav() ?>

    <!-- START PAGE CONTENT -->
    <h1 class="title">Profile</h1>
    <p class="subtitle">Your account details are below.</p>

    <table class="table">
    <tr>
    <td>Username: </td>
    <td><?=$_SESSION['name']?></td>
    </tr>

    <tr>
    <td>Password: </td>
    <td><?=$password?></td>
    </tr>


    </table>
    <!-- END PAGE CONTENT -->

<?= template_footer() ?>
