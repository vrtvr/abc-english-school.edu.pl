<!DOCTYPE html>
<html lang="pl">

<head>
<meta charset="UTF-8">
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
    <title>ABC English School</title>
</head>

<body>
    <header>
    <nav>
        <a href="index.php"><img class="logo" src="assets/image/logo.png" alt="schools logo"></a>
        <ul>
            <li><a href="#front">O nas</a></li>
            <li><a href="#course">Oferta</a></li>
            <li><a href="#location">Lokalizacja</a></li>
            <li class="nav_item">
                <a class="nav_link" href="#contact">Kontakt</a>
            </li>
            <li><a href="login.php">Strefa słuchacza</a></li>

        </ul>
        <button class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </button>

    </nav>
    </header>
    <!-- front -->
    <section id="front">
        <div class="front_container">

            <div>
                <h3> ABC English School <span></span></h3>
                <h5>Uczymy dzieci, młodzież i dorosłych języka angielskiego. <span></span></h5>
                <a href="form.php" type="button" class="cta">ZAPISZ SIĘ NA KURS</a>
            </div>
        </div>
    </section>

    <!-- oferta -->
    <section id="course">
        <div class="course_container">
            <div class="course_header">
                <h1 class="title">Nasza oferta</h1>
            </div>
            <div class="all_courses">
                <!-- children -->
                <div class="course_item">
                    <div class="course_info">
                        <h2>Dzieci</h2>
                        <p>Kurs angielskiego dla dzieci w wieku przedszkolnym prowadzimy metodami aktywizującymi,
                            bazując na wieloletnim doświadczeniu w pracy z dziećmi. Doceniamy dynamikę na lekcji,
                            materiały DIY, kreatywne czytanie książek, materiały dydaktyczne dedykowane dzieciom oraz
                            tworzymy własne, autorskie pomoce naukowe które uatrakcyjniają zajęcia z dziećmi i świetnie
                            wpływają na ich motywaję.</p>
                    </div>
                    <div class="img">
                        <img src="assets/image/children.sm.jpg" alt="children" width="450" height="500">
                    </div>
                </div>

                <!-- teenagers -->
                <div class="course_item">
                    <div class="course_info">
                        <h2>Młodzież</h2>
                        <p> W szkole językowej ABC School korzystamy z nowoczesnych technologii. Na zajęciach zapewniamy
                            podróż w VR reality i polecamy fantastyczne aplikacje do nauki angielskiego na zajęciach i
                            poza
                            nimi. U nas znajdziesz praktyczną pomoc nauczyciela i informację zwrotną o postępach w nauce
                            języka angielskiego ale również wirtualne zasoby z mega pomocnymi materiałami.
                            W tym wieku ważne jest chcieć się uczyć a my robimy wszystko aby uczeń, który do nas trafi
                            lubił
                            język angielski i chętnie go przyswajał.</p>
                    </div>
                    <div class="img">
                        <img src="assets/image/teenagers.sm.jpg" alt="teenagers" width="450" height="500">
                    </div>
                </div>
                <!-- adults -->
                <div class="course_item">
                    <div class="course_info">
                        <h2>Dorośli</h2>
                        <p>Kursy dla dorosłych to przede wszystkim coaching językowy w kierunku komfortu podczas lekcji,
                            ośmielenia słuchacza tak aby komunikacja w języku angielskim była efektywna. Ważne w
                            coachingu
                            językowym jest poczucie postępu, dlatego stwarzamy sytuacje naturalnego zanurzenia się w
                            języku
                            poprzez ciekawe materiały, dobrane z wielką uważnością, poprzez ćwiczenie umiejętności
                            słuchania
                            ze zrozumieniem różnych akcentów, oraz jeśli jest taka potrzeba to pisanie różnych form
                            dokumentów.</p>
                    </div>
                    <div class="img">
                        <img src="assets/image/adults.sm.jpg" alt="adults" width="450" height="500">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Lokalizacja -->
    <section id="location">
        <div class="map">
            <div class="location">
                <h1 class="title">Lokalizacja</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.6354182554355!2d21.003420075518886!3d52.23184125752549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc8c92692e49%3A0xc2e97ae5311f2dc2!2sPa%C5%82ac%20Kultury%20i%20Nauki!5e0!3m2!1spl!2spl!4v1686479656424!5m2!1spl!2spl"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
    </section>

    <!-- Kontakt nagłówek -->
    <section id="contact">
        <div class="contact">
            <div class="contact">
                <h1 class="title">Kontakt</h1>
            </div>
        </div>
    </section>

    <!-- formularz kontaktowy -->
    <footer>
        <div class="footer_container">
        <div class="footer_form">
            <h3>Skontaktuj się z nami</h3>
            <div class="input">
                <form action="inmail.php" method="post">
                    <legend>E-mail</legend>
                    <input class="data" type="email" name="msgmail" required>
                    <legend>Tytuł wiadomości</legend>
                    <input class="data" type="tytul" name="msgtitle">
                    <legend>Wiadomość</legend>
                    <textarea class="data" rows="3" name="msgcontent"></textarea>
                    <input class="submit" type="submit" value="Wyślij">
                </form>
            </div>
        </div>

        <!-- dane do kontaktu -->
        <div class="contact">
            <div class="contact_info">
                <div><i class="fa-solid fa-location-dot"></i> ABC English School <p>Pałac Kultury i Nauki plac
                        Defilad 1, 00-901 Warszawa</p>
                </div>
                <div><i class="fa-solid fa-envelope"></i> contact@abc.com</div>
                <div><i class="fa-solid fa-phone"></i> + 48 000 000 000</div>
                <div><i class="fa-solid fa-clock"></i> Pn-Pt 8:00 - 18:00</div>
            </div>
        </div>
    </div>
    </footer>

</body>

<script src="js/scripts.js"></script>

</html>