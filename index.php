<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    
    <title>Sing Up</title>
</head>
<body>
    <div class="bckgrd">
        <div class="menu">
            <a href="index.html"><i class="fa-solid fa-chevron-left home_icon" style="color: #ffffff;"></i>Home</a>
            <a href="index.html">Contact<i class="fa-solid fa-phone-flip contact_icon" style="color: #ffffff;"></i></a>
        </div>
        <div class="login_cont">
            <div class="login_form">
                <div id="title">
                    <p class="title">SIGN IN</p>
                </div>
                <div id="input_cont">
                    <form method="post">
                        <input type="text" placeholder="Name" class="user_name" name="user_name">
                        <input type="password" placeholder="Password" class="user_pass" name="user_pass">
    
                </div>
                <div id="button_cont">
                
                        <input type="submit" value="SIGN IN" class="signin_button" name="submit">
                    </form>
                </div>
                <div id="addons">
                    <div id="left">
                            <input type="checkbox"><p class="remember">Remember Me</p>
                    </div>
                    <div id="right">
                        <p class="forgot">Forgot password?
                    </div>
                </div>
                <div id="alert_cont">
                    <div class="alert">
                        <?php
                           $conn = mysqli_connect('localhost', 'root', '', 'login_js');
                           
                           if(isset($_POST['submit'])){

                                    $user_name = $_POST['user_name'];
                                    $user_pass = $_POST['user_pass'];
                            
                                    $sql = "INSERT INTO users (nickname, password)
                                    VALUES ('$user_name','$user_pass')";
                                    if (mysqli_query($conn, $sql)) {
                                        echo " <span class='alert_p'> Twoje konto zostało stwrozone pomyślnie </span>";
                                    } else {
                                        echo "Error: " . $sql . ":-" . mysqli_error($conn);
                                    }
                                    mysqli_close($conn);
                                }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>