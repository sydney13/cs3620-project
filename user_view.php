<?php
    require_once('./header.php');
?>

<?php
    require_once('./user/user.php');

    $user = new user();
    $user->getUser(1);

    echo $user->getUsername();
    echo "<br/>";

?>

<?php
    require_once('./footer.php');
?>
