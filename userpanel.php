<?php

session_start();

if (!isset($_SESSION['logged']))
{
    header('Location: index.php');
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
    <title>Strefa słuchacza</title>
</head>
<body>

    <nav>
        <a href="index.php"><img class="logo" src="assets/image/logo.png" alt="schools logo"></a>
        <ul>
            <li><a href="usercalendar.php">Plan zajęć</a></li>
            <li><a href="userpanel.php">Powiadomienia</a></li>
            <li><a href="index.php">Powrót do strony głównej</a></li>
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
echo "Należysz do grupy:<br>".$_SESSION['lvl']."<br><br>";
echo "Status:<br>Brak nowych powiadomień"

?>

        </div>
    </div>
</section>
</body>
</html