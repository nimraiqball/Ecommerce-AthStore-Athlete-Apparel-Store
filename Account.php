<? include('connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - AthStore</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="images/Ath-removebg-preview.png" width="300px">
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="Account.php">Account</a></li>
                
            </ul>
        </nav>
        <a href="cart.html"><img src="images/icons8-cart-50.png" width="30px" height="30px"></a>

    </div>

    
</div> 
<!-----------Account Pagr----------->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/football-player-png-isolated-hd-pictures-58810.png" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>
                    <form action="process.php" method="post" id="LoginForm">
                        <input type="text" placeholder="Username" id="username" name="username">
                        <input type="password" placeholder="Password" id="passwordd" name="passwordd">
                        <button type="submit" name="save" class="btn">Login</button>
                        <a href="">Forgot Password</a>
                    </form>
                    <form action="process.php" method="post" id="RegForm">
                        <input type="text" placeholder="Username" id="username" name="usernamee">
                        <input type="email" placeholder="Email" id="emaill" name="emaill">
                        <input type="password" placeholder="Password" id="passwordd" name="passworddd">
                       <button type="submit" name="save" class="btn">Registers</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!------------js for login/reg form----------->

<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register(){
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }
    function login(){
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
    }

</script>

<!----------Footer---------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-1">
                <img src="images/Ath-removebg-preview.png">
                <p>Our Purpose is to Sustainably Make the Pleasure <br>and Benefits of Sports
                    Accessible to the Many.
                </p>
            </div>
        </div>
        <hr>
        <p class="copyright">© 2024 Nimra Iqbal. All rights reserved.</p>
    </div>
</div>
</body>
</html>