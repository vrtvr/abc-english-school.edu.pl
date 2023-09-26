<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
    <link type="image/png" sizes="32x32" rel="icon" href="assets/image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Formularz zgłoszeniowy</title>
</head>

<body>
    <nav>
        <a href="index.php"><img class="logo" src="assets/image/logo.png" alt="schools logo"></a>
        <a href="index.php">Powrót do strony głównej</a>
    </nav>

    <footer>
        <div class="footer_form">
            <h3>Wypełnij formularz</h3>
            <div class="input">
                <form action="inform.php" method="post">
                    <legend>E-mail</legend>
                    <input class="data" type="mail" name="form_mail" required>
                    <legend>Imię</legend>
                    <input class="data" type="text" name="form_name">
                    <legend>Nazwisko</legend>
                    <input class="data" type="text" name="form_last_name">
                    <legend>Wiek</legend>
                    <textarea class="data" rows="1" name="form_age"></textarea>
                    <legend>Deklarowany poziom zaawansowania</legend>
                    <select class="data" type="text" name="data">
                    <option value="">Wybierz poziom nauki</option>
                    <option value="A1">Poziom A1</option>
                    <option value="A2">Poziom A2</option>
                    <option value="B1">Poziom B1</option>
                    <option value="B2">Poziom B2</option>
                    <option value="C1">Poziom C1</option>
                    <option value="C2">Poziom C2</option>
                </select>
                   <br>

                    <input class="submit" type="submit" value="Wyślij">
                </form>
            </div>
        </div>

        <div class="contact">
            <h3>W przypadku pytań, pozostajemy do dyspozycji</h3>
            <div class="contact_info">
                <div><i class="fa-solid fa-location-dot"></i> ABC English School <p>Pałac Kultury i Nauki plac
                        Defilad 1, 00-901 Warszawa</p>
                </div>
                <div><i class="fa-solid fa-envelope"></i> contact@abc.com</div>
                <div><i class="fa-solid fa-phone"></i> + 48 000 000 000</div>
                <div><i class="fa-solid fa-clock"></i> Pn-Pt 8:00 - 18:00</div>
            </div>
        </div>
    </footer>
</body>

</html