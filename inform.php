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
    <title>Potwierdzenie zgłoszenia</title>
</head>
<body>
    <nav>
        <a href="index.php"><img class="logo" src="assets/image/logo.png" alt="schools logo"></a>
        <a href="index.php">Powrót do strony głównej</a>
    </nav>

    <section id="footer">
        <div class="contact">
            <div class="contact_info">
<?php

$form_mail = $_POST['form_mail'];
$form_name = $_POST['form_name'];
$form_last_name = $_POST['form_last_name'];
$form_age = $_POST['form_age'];
$form_level = $_POST['form_level'];

/* tutaj można dodać funkcję dodającą formularz do bazy danych */

echo<<<END

    <h1 class="title">Podgląd formularza zgłoszeniowego</h1>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>Mail: </td> <td>$form_mail</td>
    </tr>
    <tr>
        <td>Imię: </td> <td>$form_name</td>
    </tr>
    <tr>
        <td>Nazwisko: </td> <td>$form_last_name</td>
    </tr>
    <tr>
    <td>Wiek: </td> <td>$form_age</td>
    </tr>
    <tr>
    <td>Poziom zaawansowania: </td> <td>$form_level</td>
    </tr>
    </table>
    
END;

?>

            </div>
        </div>
    </section>
</body>
</html