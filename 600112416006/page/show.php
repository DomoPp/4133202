<?php 
    require "conDB.php";

    $sql = "SELECT * FROM tb_member";

    $result = mysqli_query($link, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

        <table>
            <thead>
                <tr>
                    <td>name</td>
                    <td>age</td>
                    <td>sex</td>
                    <td>fav</td>
                    <td>province</td>
                    <td>Edit</td>
                </tr>
            </thead>
            <tbody>
            <?php
            
            while($rows = mysqli_fetch_array($result)):
            ?>
                <tr>
                    <td> <?= $rows['name'] ?> </td>
                    <td> <?= $rows['age'] ?> </td>
                    <td> <?= $rows['sex'] ?> </td>
                    <td> <?= $rows['fav'] ?> </td>
                    <td> <?= $rows['province'] ?> </td>
                    <td><a href="edit_member.php?name=<?=$rows['name']?>">Edit</a></td>
                    <td><a href="del_member.php?name=<?=$rows['name']?>">ลบ</a></td>
                </tr>
            <?php endwhile;?>
            </tbody>
        </table>

</body>
</html>