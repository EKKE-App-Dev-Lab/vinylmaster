<?php
define('Access', TRUE);
include "./AdditionalPHP/startSession.php";
?>

<?php
include "connection.php";

$uname = $password= "";
$errCriteria = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ((empty($_POST['uname'])) || (empty($_POST['password']))){
        $errCriteria = "Incorrect Username or Password!";
    } else {
        $uname = test_input($_POST['uname']);
        $password = test_input($_POST['password']);

        // select row
        $sql = "SELECT * FROM user WHERE uname='$uname'";
        $result= mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);

            // csekkoljuk, hogy validált emailcíme van-e
            if($row['verified'] == 1)
            {
                setcookie("thankYouCookie", "verificationEmailSent", time() - 3600);
                setcookie("verifiedEmailCookie", "emailInvalid", time() - 3600);
                setcookie("resetPassword","resetMailSent", time() - 3600);
                // hashelt passok egyeznek-e
                if(password_verify($password, $row['pass']))
                {
                    include "./AdditionalPHP/startSession.php";

                    // sessionebn tároljuk a user adatot
                    $_SESSION['uname'] = $row['uname'];
                    $_SESSION['isAdmin'] = $row['isAdmin'];

                    header('location: checkAccount.php');
                } else {
                    $errCriteria = "Incorrect Username or Password!";
                }
            }
            else if(isset($_COOKIE['verifiedEmailCookie']))
            {
                if(password_verify($password, $row['pass'])){

                    include "./AdditionalPHP/startSession.php";

                    $vkey = md5(time().$uname);

                    $sql = "UPDATE user SET vkey = '$vkey' WHERE uname = '$uname'";

                    if(mysqli_query($conn, $sql)){

                        $to = $row['email'];
                        $subject = "Email Verification";
                        $message = "<a href='http://localhost/MyFiles/CakeShop/verifyEmail.php?vkey=$vkey'>Register Account</a>";
                        $headers = "From: malako.cakeshop@gmail.com \r\n";
                        $headers .= "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                        mail($to, $subject, $message, $headers);

                        setcookie("thankYouCookie", "verificationEmailSent");
                        setcookie("verifiedEmailCookie", "emailInvalid", time() - 3600);
                        header('location: thankYouRegistration.php');

                    }
                }
                else {
                    $errCriteria = "Helytelen felhasználónév vagy jelszó!";
                }
            }
            else
            {
                $errCriteria = "Kérjük, erősítse meg az e-mail címét, mielőtt bejelentkezik!.";
            }
        } else {
            $errCriteria = "Helytelen felhasználónév vagy jelszó!";
        }
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
