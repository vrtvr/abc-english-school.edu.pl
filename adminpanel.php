<?php

session_start();

if (!isset($_SESSION['logged']))
{
    header('Location: index.php');
    exit();
}

if($_SESSION['role'] != 'Admin'){
    header('Location: userpanel.php');
    exit();
}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link type="image/png" sizes="32x32" rel="icon" href="assets/image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Strefa administratora</title>
</head>
<body>

    <nav>
        <a href="adminpanel.php"><img class="logo" src="assets/image/logo.png" alt="schools logo"></a>
        <ul>
            <li><a href="admincalendar.php">Plan zajęć edit</a></li>
            <li><a href="users.php">Użytkownicy</a></li>
            <li><a href="adminpanel.php">Powiadomienia</a></li>
            <li><a href="logout.php">Wyloguj</a></li>
 
        </ul>
        <button class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </button>

    </nav>


<section id="course">
    <div class="course_container">
        <div class="course_header">
                
<?php

echo "Witaj ".$_SESSION['name']."!"."<br><br>";
echo "Mail:<br>".$_SESSION['mail']."<br><br>";
echo "Typ dostępu:<br>".$_SESSION['type']."<br><br>";
echo "Status:<br>Brak nowych powiadomień"

?>

        </div>
    </div>
</section>
</body>
</html