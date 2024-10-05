<?php 

require_once 'db.php';

//$insert = "INSERT INTO `team` (`name`,`email`,`date`) VALUES ('Билл','bill@gmail.com','2023-10-23')";
//$update = "UPDATE `team` SET `text` = 'hello' WHERE `id` = 2";
//$delete = "DELETE FROM `team` WHERE `id` = 4";
// $update = "UPDATE `team` SET `name` = 'Egor' WHERE `id` = 2";
$select = "SELECT `id`,`name`,`email`,`date` FROM `team`";

// $query2 = mysqli_query($db, $update);

$query = mysqli_query($db, $select);
$team = mysqli_fetch_all($query, MYSQLI_ASSOC);
?> 
<style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 150px;
    }
    .list{
        text-align: center;
    }

</style>
<?php
if ($query) { ?>
<div class="list">
<h2>Наша команда</h2>
    <style>
        td {
            padding: 10px;
        }
    </style>
    <table style="text-align: center;">
        <thead style="background: green; color:aliceblue;">
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>DATE</td>
        </thead>
    <?php foreach ($team as $member) { ?>
        <tr style="background-color: grey; color:aliceblue;">
            <td><?php echo $member['id'];  ?></td>
            <td><?php echo $member['name'];  ?></td>
            <td><?php echo $member['email'];  ?></td>
            <td><?php echo $member['date'];  ?></td>
        </tr>
    <?php } ?>
    </table>
</div>
    <?php
}
//var_dump(mysqli_fetch_all($query, MYSQLI_ASSOC));
// if ($query) {var_dump($query);}
// else {echo 'Ошибка';}

// echo mysqli_error($db);
?>

<style>
    form {
        border: 3px solid #000000;
        max-width: 200px;
        text-align: center;
        padding: 10px;
        margin-top: 20px;
        border-radius: 10px;
    }
    input {
        display: block;
        padding: 5px;
        margin: 5px;
        border-radius: 10px;
    }

    button{
        padding: 3px;
        border-radius: 10px;
        background-color: #000000;
        color: whitesmoke;
    }
    .form{
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .form > h2 {
        margin-bottom: 0;
    }
</style>
<div class="form">
<h2>Добавить члена команды</h2>
<form action="./engine/add.php" method="POST">
    <label for="name">Имя</label>
    <input type="text" name="name">

    <label for="email">Почта</label>
    <input type="text" name="email">

    <label for="date">Дата</label>
    <input type="text" name="date" placeholder="yyyy-mm-dd">
    <button type="submit" >Отправить</button>
</form>
</div>