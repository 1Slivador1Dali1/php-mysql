<?php
define("ADMINPASS", "12345");
$errors = "";

if (!empty($_POST['password_access'])) {
    if ($_POST['password_access'] === ADMINPASS) {
        $_SESSION['access'] = true;
        $errors = 'Вы авторизованы!';
    } else {
        $errors = "Пароль не верный";
    }
}

if (!empty($errors)) {
    echo $errors;
} else {
?>
    <form action="" method="POST">
        <input type="password" name="password_access" placeholder="Password">
        <button>login</button>
    </form>
<?php } ?>