<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <title>FitZone/login</title>
    <link rel="icon" href="imeges/fit zone_logo..svg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="css/sport.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/darkmode.js" defer></script>
    <script src="js/pop.js" defer></script>
    <script src="js/navscript.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <header>
        <a href="index.html" class="logo"> </i> <span class="fit">Fit</span> <span>Zone</span></a>
        <ul class="navbar" id="nav">
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="shop.html"> Shop</a></li>
            <li><a href="about.html"> About Us</a></li>
            <li><a href="contact us.html">Contact Us</a></li>
            <li>
              <a href="#">
                <button id="dark-mode" class="moon" alt="k"><i class='bx bxs-moon'></i></button>
                <button id="light-mode" class="sun hide" alt="k"><i class='bx bxs-sun'></i></button>
            </a></li>
            
        </ul>
        <div class="main">
            <a href="login.html" class="user-login"><i class="fas fa-sign-in-alt"></i> login</a>
            <a href="#" id="cart-icon" style="  font-size: 1.1rem; font-weight: 500;"><i class="fas fa-shopping-cart"></i> cart</a>
            <a href="javascript:void(0);" class="menu-icon" onclick="myFunction()" id="menu-icon">
              <i class="fa fa-bars"></i>
            </a>
          </div>
    </header>
    <div class="container">
                <form action="" method="post">
                    <h1>Sign up</h1>
    
                    <input type="text" class="inputs" name="name"  placeholder="  Your Name" required >
                    <input type="email" class="inputs" name="email"  placeholder=" Your Email" required >
                    <input type="password" class="inputs" name="password"  placeholder=" Password" required>
                    <input type="password" class="inputs" name="cpassword" placeholder=" Repeat your password" required>
                    <br>
                    <div class="check">
                    <input type="checkbox" class="checkbox" required>
                    <label>I agree all statements in <a class="privacy" href="privacy.html">terms of services</a> </label>
                    </div>
                    
                
                    <div class="social-links">
                        <i class="fab fa-google"></i>
                        <i class="fab fa-facebook"></i>
                    </div>
    
                    <span id="message"></span>
            <button value="register" name="register">Sign up</button>
    
                    <div class="login">
                        <p>already have an account? <a href="login.php">login now</a></p>
                    </div>
    
                </form>
    
                <div class="side_img">
                    <img src="media/Screenshot 2024-04-30 014319.png" alt="">
                </div>
            </div>
            
    
    <script src="js/navscript.js"></script>
</body>
<script>
    <?php
    require_once "connect.php";
    if (isset($_POST['register'])) {
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($password === $cpassword) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, email, password) 
        VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $hashed_password . "')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.html");
                exit();
    exit;
    } else {
    echo "showMessage(Error: )" . $sql . "<br>" . mysqli_error($conn);
    }
    } else {
    echo "showMessage('Password and confirm password do not match!','red');";
    }
    }
    ?>

    function showMessage(message, color) {
        var messageElement = document.getElementById('message');
        messageElement.textContent = message;
        messageElement.style.color = color;
    }
    </script>
</html>