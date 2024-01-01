<?php
include("connection.php");
/////// Contact us///////////
$namee="";
$email = "";
$messagee="";
if (isset($_POST['save'])) {
$namee = $_POST['namee'];
$email = $_POST['email'];
$messagee = $_POST['messagee'];
mysqli_query($conn,"INSERT INTO feedback (namee,email,messagee) VALUES ('$namee','$email','$messagee')");
header ('location: contactus.php');

}
?>

<?php
include("connection.php");
$username="";
$passwordd= "";
if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $passwordd = $_POST['passwordd'];
    mysqli_query($conn,"INSERT INTO loginn (username,passwordd) VALUES ('$username','$passwordd')");
    header ('location:Account.php');
}
?>

<?php
include("connection.php");
$usernamee="";
$emaill="";
$passworddd= "";
if (isset($_POST['save'])) {
    $usernamee = $_POST['usernamee'];
    $emaill = $_POST['emaill'];
    $passworddd = $_POST['passworddd'];
    mysqli_query($conn,"INSERT INTO register (usernamee,emaill,passworddd) VALUES ('$usernamee','$emaill','$passworddd')");
    header ('location:Account.php');
}
?>
<?php
include("connection.php");
$fullname="";
$number="";
$address= "";
if (isset($_POST['save'])) {
    $fullname = $_POST['fullname'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    mysqli_query($conn,"INSERT INTO orders (fullname,number,address) VALUES ('$fullname','$number','$address')");
    header ('location:Account.php');
}
?>
