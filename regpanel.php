<?php
session_start();

if((!isset($_SESSION['register_passed'])))
{
    header('Location: login.php');
    exit();
}
else
{
    unset($_SESSION['register_passed']);
}

//Usuwanie zmiennych przechowywanych na wypadek błędnej walidacji
if (isset($_SESSION['fr_mail'])) unset($_SESSION['fr_mail']);
if (isset($_SESSION['fr_name'])) unset($_SESSION['fr_name']);
if (isset($_SESSION['fr_last_name'])) unset($_SESSION['fr_last_name']);
if (isset($_SESSION['fr_lvl'])) unset($_SESSION['fr_lvl']);
if (isset($_SESSION['fr_age'])) unset($_SESSION['fr_age']);
if (isset($_SESSION['fr_akcept'])) unset($_SESSION['fr_akcept']);

//Usuwanie błędów rejestarcji
if (isset($_SESSION['e_mail'])) unset($_SESSION['e_mail']);
if (isset($_SESSION['e_pswrd'])) unset($_SESSION['e_pswrd']);
if (isset($_SESSION['e_akcept'])) unset($_SESSION['e_akcept']);
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
    <title>Panel logowania</title>
</head>
<body>
    <nav>
        <a href="index.php"><img class="logo" src="assets/image/logo.png" alt="schools logo"></a>
        <a href="index.php">Powrót do strony głównej</a>
    </nav>

    <section id="course">
        <div class="course_container">
            <div class="course_header">
                <br><br><br>
                <h2>Dziękujemy za rejestrację!</h2>
                <h2>Możesz już zalogować się na swoje konto.</h2>
                <br>
                <a href="login.php">Zaloguj się do Panelu Słuchacza!</a>


            </div>
        </div>
    </section>
</body>
</html
