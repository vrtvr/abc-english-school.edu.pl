<?php
session_start();

if ((!isset($_POST['mail'])) || (!isset($_POST['pswrd'])))
{
    header('Location: index.php');
    exit();
}

require_once "connect.php";

$connect = @new mysqli($host, $db_user, $db_password, $db_name);

if ($connect->connect_errno!=0)
{
    echo "Error: ".$connect->connect_errno." Opis: ".$connect->connect_error;
}
else{
    $mail = $_POST['mail'];
    $password = $_POST['pswrd'];

    $mail = htmlentities($mail, ENT_QUOTES, "UTF-8");
    $password = htmlentities($password, ENT_QUOTES, "UTF-8");

/*    $sql = "SELECT * FROM users WHERE mail='$mail' AND pswrd='$password'";

    if ($result = @$connect->query($sql))
*/

    if ($result = @$connect->query(sprintf("SELECT * FROM users WHERE mail='%s' AND pswrd='%s'",
    mysqli_real_escape_string($connect,$mail),
    mysqli_real_escape_string($connect,$password))))
    {
        $how_many_users = $result->num_rows;
        if($how_many_users>0)
        {
            $_SESSION['logged'] = true;
            $rows = $result->fetch_assoc();
            $_SESSION['id'] = $rows['id'];
            $_SESSION['role'] = $rows['role'];
            $_SESSION['type'] = $rows['type'];
            $_SESSION['mail'] = $rows['mail'];
            $_SESSION['name'] = $rows['name'];
            $_SESSION['last_name'] = $rows['last_name'];
            $_SESSION['lvl'] = $rows['lvl'];
            $_SESSION['age'] = $rows['age'];

            unset($_SESSION['log_error']);
            $result->close();
            echo $mail;
            header('Location: adminpanel.php');
        } else {

            $_SESSION['log_error'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
            header('Location: login.php');

        }
    }

    $connect->close();
}


?>