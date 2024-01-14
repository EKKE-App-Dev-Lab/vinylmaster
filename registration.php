<?php
define('Access', TRUE);
include "./AdditionalPHP/startSession.php";
?>

<?php
include "connection.php";

$uname = $fname = $lname = $email = $password= "";
$passwordCriteria = "";
$fnameCriteria = "";
$lnameCriteria = "";
$unameCriteria = "";
$emailCriteria = "";
$confirmPasswordCriteria = "";
$recaptchaCriteria = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $unameOK = false;
    $fnameOK = false;
    $lnameOK = false;
    $emailOK = false;
    $passwordOK = false;
    $confirmPasswordOK = false;

    if(empty($_POST["uname"])){
        $unameCriteria = "A felhasználónév megadása kötelező!";
    } else {
        $uname = test_input($_POST["uname"]);

        // név csak betűket és whitespace-t tartalmazaz + számok
        // alfanumerikus és legalább 5 hosszú
        if(!preg_match('/^[a-zA-Z0-9]{5,}$/', $uname)) {
            $unameCriteria = "A felhasználónév csak betűket és számokat tartalmazhat és legalább 5 karakter hosszúnak kell lennie!";
        }
        else {
            // check if username already in database
            $sql = "SELECT * FROM user WHERE uname = '$uname'";

            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1){
                $unameCriteria = "Ez a felhasználónév már foglalt!";
            }
            else
            {
                $unameOK = true;
            }
        }
    }

    if (empty($_POST["fname"])) {
        $fnameCriteria = "A keresztnév megadása kötelező!";
    } else {
        $fname = test_input($_POST["fname"]);
        // név csak betűket és whitespace-t tartalmazhaz
        if (!preg_match("/^[a-z A-ZáéíóöőúüűÁÉÍÓÖŐÚÜŰ]*$/",$fname)) {
            $fnameCriteria = "Csak betű és szóköz használata megengedett!";
        }
        else
        {
            $fnameOK = true;
        }
    }

    if (empty($_POST["lname"])) {
        $lnameCriteria = "A vezetéknév megadása kötelező!";
    } else {
        $lname = test_input($_POST["lname"]);
        // név csak betűket és whitespace-t tartalmazhaz
        if (!preg_match("/^[a-z A-ZáéíóöőúüűÁÉÍÓÖŐÚÜŰ]*$/",$lname)) {
            $lnameCriteria = "Csak betű és szóköz használata megengedett!";
        }
        else
        {
            $lnameOK = true;
        }
    }

    if (empty($_POST["email"])) {
        $emailCriteria = "Az e-mail cím megadása kötelező!";
    } else {
        $email = test_input($_POST["email"]);
        // név csak betűket és whitespace-t tartalmazhaz
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailCriteria = "Helytelen e-mail formátum!";
        }
        else
        {
            // nézzük meg, regisztráltak-e már az email címmel
            $sql = "SELECT * FROM user WHERE email='$email'";

            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1){
                $emailCriteria = "Ez az e-mail cím már regisztrálva van!";
            }
            else
            {
                $emailOK = true;
            }
        }
    }

    if (empty($_POST["password"])) {
        $passwordCriteria = "Jelszó megadása kötelező!";
    } else {
        $password = test_input($_POST["password"]);
        // Jelszónak az alábbi kritériumoknak kell megfelelnie
        // tartalmazzon egy számot
        // egy nagybetűt
        // speciális karaktert az alábbiak közül: !@#$%
        // 8 és 20 karakter hosszúnak kell lennie
        if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/', $password)) {
            $passwordCriteria = 'A jelszónak tartalmaznia kell legalább <b>egy számot</b>, legalább <b>egy nagybetűt</b>, legalább egy speciális karaktert <b>!@#$%</b> valamint <b>8</b> és <b>20</b> közötti karakter hosszúságúnak kell lennie!';
        }
        else {
            $passwordOK = true;
        }

        if (empty($_POST["confirmPassword"])) {
            $confirmPasswordCriteria = "Kérlek erősítsd meg a jelszavadat!";
        }
        else if (($_POST["confirmPassword"]) == $password){
            $confirmPasswordOK = true;
        }
        else {
            $confirmPasswordCriteria = "A két megadott jelszó nem egyezik!";
        }
    }

    $captcha = $_POST["g-recaptcha-response"];
    $secretkey = "6Ld1nA0aAAAAAJps4LCRTs7jfshN9GNjZAghnt0f";
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='.urldecode($secretkey).'&response='.urldecode($captcha).'';
    $response = file_get_contents($url);
    $responseKey = json_decode($response, TRUE);

    if($responseKey['success'])
    {
        if($unameOK == true && $passwordOK == true && $fnameOK == true && $lnameOK == true && $emailOK == true)
        {
            //Generate VKey
            $vkey = md5(time().$uname);

            $passHash = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO user (uname, pass, fname, lname, email, vkey)
                VALUES ('$uname', '$passHash', '$fname', '$lname', '$email', '$vkey')";

            if(mysqli_query($conn, $sql)){
                //send mail
                $to = $email;
                $subject = "Email megerősítése - VINYLMASTER";
                $message = "<a href='http://localhost/Cake-Shop-Website/verifyEmail.php?vkey=$vkey'>Register Account</a>";
                $headers = "From: vinylmasters@gmail.com \r\n";
                $headers .= "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                mail($to, $subject, $message, $headers);
                setcookie("thankYouCookie", "verificationEmailSent");
                header('location: thankYouRegistration.php');

                $lastUserID = mysqli_insert_id($conn);

                $sql = "INSERT INTO cart (userID) VALUES ($lastUserID);";

                mysqli_query($conn, $sql);
            }
        }
    }
    else {
        $recaptchaCriteria = "Please confirm the reCAPTCHA";
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<!DOCTYPE html>
<html lang="en-MU">
<head>
    <meta charset="utf-8">
    <title>VINYLMASTER | REGISZTRÁCIÓ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS File-->
    <link rel="stylesheet" type="text/css" href="Common.css">
    <link rel="stylesheet" type="text/css" href="Account.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0e16635bd7.js" crossorigin="anonymous"></script>
    <!--BOXICONS-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Animate CSS -->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!--reCAPTCHA-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
<?php $page = 'login';?>

<!--Start Navigation Bar-->
<?php include './Includes/MobileNavBar.php';?>
<!--End Navigation Bar-->


<!--Start Navigation Bar @media 1200px-->
<?php include './Includes/PcNavBar.php';?>
<!--End Navigation Bar @media 1200px-->


<!--Start Background Image-->
<div class="bg-image-container">
    <div class="bg-image-join"></div>
</div>
<!--End Background Image-->


<!--Start Login Panel-->
<div class="login-page reg-page">
    <div class="form">
        <div class="login">
            <div class="login-header">
                <h3>REGISZTRÁCIÓ</h3>
                <p>Kérlek add meg a szükséges adatokat a regisztrációhoz!</p>
            </div>
        </div>

        <form class="login-form" method="post" actions="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <span class="Uname-Error"><?php echo $unameCriteria;?></span>
            <input type="text" name="uname" placeholder="Felhasználónév" value="<?php echo $uname;?>"/>
            <span class="FirstName-Error"><?php echo $fnameCriteria;?></span>
            <input type="text" name="fname" placeholder="Keresztnév" value="<?php echo $fname;?>"/>
            <span class="LastName-Error"><?php echo $lnameCriteria;?></span>
            <input type="text" name="lname" placeholder="Vezetéknév" value="<?php echo $lname;?>"/>
            <span class="Email-Error"><?php echo $emailCriteria;?></span>
            <input type="text" name="email" placeholder="Email" value="<?php echo $email;?>"/>
            <span class="Password-Error"><?php echo $passwordCriteria;?></span>
            <input type="password" name="password" placeholder="Jelszó"/>
            <span class="Password-Error"><?php echo $confirmPasswordCriteria;?></span>
            <input type="password" name="confirmPassword" placeholder="Jelszó újra"/>
            <span class=recaptcha-Error"><?php echo $recaptchaCriteria;?></span>
            <div name="g-recaptcha-response" class="g-recaptcha" data-sitekey="6Ld1nA0aAAAAAA7F7eJOY7CMwg7aaQAfg3WZy6P0"></div>
            <button>Regisztráció</button>
            <p class="message">Már van fiókod? <a href="login.php">Lépj be!</a></p>
            <!-- <p class="or-message"><b>OR</b></p> -->
        </form>
    </div>
</div>
<!--End Login Panel-->
</body>
</html>
