<?php

session_start();

if ((isset($_SESSION['logged'])) && ($_SESSION['logged']==true))
{
    header('Location: userpanel.php');
    exit();
}

if (isset($_POST['name']))
{
 
    //pozytywna walidacja
    $all_ok=true;

    //weryfikacja maila
    $mail = $_POST['mail'];
    $mail_sani = filter_var($mail, FILTER_SANITIZE_EMAIL);
    $mail_chars = filter_var($mail, FILTER_VALIDATE_EMAIL);

    if ((filter_var($mail_sani, FILTER_SANITIZE_EMAIL)==false) || ($mail_sani!=$mail) || 
    (filter_var($mail_chars, FILTER_VALIDATE_EMAIL)==false))
    {
        $all_ok=false;
        $_SESSION['e_mail'] = '<span style="color:red">Podaj poprawny adres e-mail!</span><br>';
    }

    if ((strlen($mail)>40))
    {
        $all_ok=false;
        $_SESSION['e_mail'] = '<span style="color:red">Adres e-mail może mieć max. 40 znaków!</span><br>';        
    }

    //weryfikacja powtórzenia hasła
    $pswrd = $_POST['pswrd'];
    $pswrd_check = $_POST['pswrd_check'];

    if ($pswrd!=$pswrd_check)
    {
        $all_ok=false;
        $_SESSION['e_pswrd'] = '<span style="color:red">Podane hasła nie są identyczne!</span><br>';
    }

    //regex hasła
    $uppercase = preg_match('@[A-Z]@', $pswrd);
    $lowercase = preg_match('@[a-z]@', $pswrd);
    $number    = preg_match('@[0-9]@', $pswrd);
    $special_chars = preg_match('@[%\@\$\&]@', $pswrd);
    
    
    if (!$uppercase || !$lowercase || !$number || !$special_chars || (strlen($pswrd)<8) || (strlen($pswrd)>25))
    {
        $all_ok=false;
        $_SESSION['e_pswrd'] = '<span style="color:red">Hasło musi posiadać:<br> - od 8 do 25 znaków,
        <br> - jedną dużą i jedną małą literę,<br> - jedną cyfrę,<br> - jeden ze znaków specjalnych: %, @, $, &</span><br>';
    }

    //weryfikacja checkbox
    if (!isset($_POST['akcept']))
    {
        $all_ok=false;
        $_SESSION['e_akcept'] = '<span style="color:red">Zaznacz checkbox potwierdzający chęć rejestracji!</span><br>';        
    }

    //dane do bazy
    $pswrd = $_POST['pswrd'];
    $mail = $_POST['mail'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $lvl = $_POST['lvl'];
    $age = $_POST['age'];

    //zapamiętaj wprowadzone dane 
    $_SESSION['fr_mail'] = $mail;
    $_SESSION['fr_name'] = $name;
    $_SESSION['fr_last_name'] = $last_name;
    $_SESSION['fr_lvl'] = $lvl;
    $_SESSION['fr_age'] = $age;
    if (isset($_POST['akcept'])) $_SESSION['fr_akcept'] = true;

    require_once "connect.php";
    mysqli_report(MYSQLI_REPORT_STRICT);

    try
    {
        $connect = @new mysqli($host, $db_user, $db_password, $db_name);
        $connect->set_charset("utf8");
        if ($connect->connect_errno!=0)
        {
        throw new Exception(mysqli_connect_errno());
        }
        else
        {
            $result = $connect->query("SELECT id FROM users WHERE mail='$mail'");

            if (!$result) throw new Exception($connect->error);

            $how_many_mail = $result->num_rows;
            if($how_many_mail>0)
            {
                $all_ok=false;
                $_SESSION['e_mail']='<span style="color:red">Istnieje już konto przypisane do tego adresu e-mail!</span><br>';
            }

            if($all_ok==true)
            {
                if($connect->query
                ("INSERT INTO users VALUES (NULL, 'user', 'Uczeń', '$pswrd', '$mail', '$name', '$last_name', '$lvl', '$age', Now(), Now())"))
                {
                    $_SESSION['register_passed']=true;
                    header('Location: regpanel.php');
                }
                else
                {
                    throw new Exception($connect->error);
                }
            }

            $connect->close();
        }
    }
    catch(Exception $e)
    {
        echo '<span style="color:red">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
//        echo '<br>Informacja developerska: '.$e;
    }


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
    <link rel="stylesheet" href="css/login.css">
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
                
<?php
echo<<<END
<section id="login">
    <h1 class="title">Panel logowania</h1>
<br>
        <div class="input">
           <form action="logpanel.php" method="post">
                <legend>E-Mail</legend>
                <input class="data" type="mail" name="mail" required>
                <legend>Hasło</legend>
                <input class="data" type="password" name="pswrd" required>
                <input class="submit" type="submit" value="Zaloguj">
            </form>
        </div>
</section>
END;
        if(isset($_SESSION['log_error']))
        echo $_SESSION['log_error'];
        unset($_SESSION['log_error']);

echo<<<END
<section id="register">
        <br>
    <h1 class="title">Nie masz konta? Zarejestruj się poniżej</h1>
        <br>
END;

        if(isset($_SESSION['e_mail']))
        {
        echo $_SESSION['e_mail'];
        unset($_SESSION['e_mail']);
        }
        
        if(isset($_SESSION['e_pswrd']))
        {
        echo $_SESSION['e_pswrd'];
        unset($_SESSION['e_pswrd']);
        }

        if(isset($_SESSION['e_akcept']))
        {
        echo $_SESSION['e_akcept'];
        unset($_SESSION['e_akcept']);
        }
?>
        <div class="input">
           <form method="post">
                <br>
                <legend>E-Mail</legend>
                <input class="data" type="mail" value="<?php
                if (isset($_SESSION['fr_mail']))
                {
                    echo $_SESSION['fr_mail'];
                    unset($_SESSION['fr_mail']);
                }
                ?>" name="mail" required>
                <legend>Imię</legend>
                <input class="data" type="text" value="<?php
                if (isset($_SESSION['fr_name']))
                {
                    echo $_SESSION['fr_name'];
                    unset($_SESSION['fr_name']);
                }
                ?>" name="name" required>
                <legend>Nazwisko</legend>
                <input class="data" type="text" value="<?php
                if (isset($_SESSION['fr_last_name']))
                {
                    echo $_SESSION['fr_last_name'];
                    unset($_SESSION['fr_last_name']);
                }
                ?>" name="last_name" required>
                <legend>Poziom</legend>
                <select class="data" type="text" value="<?php
                if (isset($_SESSION['fr_lvl']))
                {
                    echo $_SESSION['fr_lvl'];
                    unset($_SESSION['fr_lvl']);
                }
                ?>" name="lvl" required>
                    <option value="">Wybierz poziom nauki</option>
                    <option value="A1">Poziom A1</option>
                    <option value="A2">Poziom A2</option>
                    <option value="B1">Poziom B1</option>
                    <option value="B2">Poziom B2</option>
                    <option value="C1">Poziom C1</option>
                    <option value="C2">Poziom C2</option>
                </select>
                <legend>Wiek</legend>
                <input class="data" type="int" value="<?php
                if (isset($_SESSION['fr_age']))
                {
                    echo $_SESSION['fr_age'];
                    unset($_SESSION['fr_age']);
                }
                ?>" name="age" required>
                <legend>Hasło</legend>
                <input class="data" type="password" name="pswrd" required>
                <legend>Powtórz hasło</legend>
                <input class="data" type="password" name="pswrd_check" required>
                <label>
                <legend>Potwierdź rejestrację poniżej:</legend>
                <input class="checkbox" type="checkbox" name="akcept" 
                <?php
                if (isset($_SESSION['fr_akcept']))
                {
                    echo "checked";
                    unset($_SESSION['fr_akcept']);
                }
                ?>> 
                </label>
                <input class="submit" type="submit" value="Zarejestruj">
            </form>
        </div>
</section>    

            </div>
        </div>
    </section>
</body>
</html