<?php

session_start();

if (!isset($_SESSION['logged']))
{
    header('Location: index.php');
    exit();
}

ini_set('display_errors', 1);

include 'calendar.php';
date_default_timezone_set('Europe/Warsaw');
$calendar = new Calendar('2023-07-01');
$calendar->add_event('Grupa A1, godz.16-18', '2023-07-03', 1, 'green');
$calendar->add_event('Grupa A1, godz.16-18', '2023-07-10', 1, 'green');
$calendar->add_event('Grupa A1, godz.16-18', '2023-07-17', 1, 'green');
$calendar->add_event('Grupa A1, godz.16-18', '2023-07-24', 1, 'green');
$calendar->add_event('Grupa A1, godz.16-18', '2023-07-31', 1, 'green');

$calendar->add_event('Grupa A2, godz.16-18', '2023-07-04', 1, 'blue');
$calendar->add_event('Grupa A2, godz.16-18', '2023-07-11', 1, 'blue');
$calendar->add_event('Grupa A2, godz.16-18', '2023-07-18', 1, 'blue');
$calendar->add_event('Grupa A2, godz.16-18', '2023-07-25', 1, 'blue');

$calendar->add_event('Grupa B1, godz.15-17', '2023-07-05', 1, 'indigo');
$calendar->add_event('Grupa B1, godz.15-17', '2023-07-12', 1, 'indigo');
$calendar->add_event('Grupa B1, godz.15-17', '2023-07-19', 1, 'indigo');
$calendar->add_event('Grupa B1, godz.15-17', '2023-07-26', 1, 'indigo');

$calendar->add_event('Grupa B2, godz.16-18', '2023-07-06', 1, 'red');
$calendar->add_event('Grupa B2, godz.16-18', '2023-07-13', 1, 'red');
$calendar->add_event('Grupa B2, godz.16-18', '2023-07-20', 1, 'red');
$calendar->add_event('Grupa B2, godz.16-18', '2023-07-27', 1, 'red');

$calendar->add_event('Grupa C1, godz.17-19', '2023-07-07', 1, 'olive');
$calendar->add_event('Grupa C1, godz.17-19', '2023-07-14', 1, 'olive');
$calendar->add_event('Grupa C1, godz.17-19', '2023-07-21', 1, 'olive');
$calendar->add_event('Grupa C1, godz.17-19', '2023-07-28', 1, 'olive');

$calendar->add_event('Grupa C2, godz.18-20', '2023-07-04', 1, 'sienna');
$calendar->add_event('Grupa C2, godz.18-20', '2023-07-06', 1, 'sienna');
$calendar->add_event('Grupa C2, godz.18-20', '2023-07-13', 1, 'sienna');
$calendar->add_event('Grupa C2, godz.18-20', '2023-07-18', 1, 'sienna');
$calendar->add_event('Grupa C2, godz.18-20', '2023-07-20', 1, 'sienna');
$calendar->add_event('Grupa C2, godz.18-20', '2023-07-27', 1, 'sienna');
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
    <link href="css/calendar.css" rel="stylesheet" type="text/css">
    <link type="image/png" sizes="32x32" rel="icon" href="assets/image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Plan zajęć</title>
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
	<div class="content home">
		<?php
        echo $calendar;
        ?>
	</div>
</body>
</html>
