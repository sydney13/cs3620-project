<?php
    require_once('./header.php');
?>  

<form method="POST" target="user_insert.php">
    Username: <input type="text" name="username"/><br/>
    Firstname: <input type="text" name="firstname"/><br/>
    Lastname: <input type="text" name="lastname"/><br/>
    Password: <input type="password" name="password"/><br/>
    <input type="submit" value="Create User" />

</form>


<?php
    require_once('./footer.php');
?> 