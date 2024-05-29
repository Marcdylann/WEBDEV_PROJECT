<!DOCTYPE html>
<html lang="en">

<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

include 'Database/connection.php';
session_start();
?>

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width"/>
    <title>Fb Clone</title>
    <link
            rel="icon"
            href="https://cdn.iconscout.com/icon/free/png-512/facebook-social-media-fb-logo-square-44659.png"
    />
    <link rel="stylesheet" href="styles.css"/>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
</head>
<body>
<div class="contains-top-half-and-footer-bottom-half">
    <div class="global-container">
        <div class="bigger-box">
            <div class="big-box">
                <div class="left-box">
                    <div class="image-box">
                        <img
                                class="fb-logo"
                                src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg"
                                alt=""
                        />
                    </div>
                    <h2 class="logo-caption">
                        Facebook helps you connect and share with the people in your
                        life.
                    </h2>
                </div>
                <div class="right-box">
                    <div class="form-container">
                        <form>
                            <div class="space">
                                <input
                                        type="text"
                                        class="email-box"
                                        placeholder="Email address or phone number"
                                />
                            </div>
                            <div style="display: flex">
                                <div class="space">
                                    <input
                                            type="password"
                                            class="pw-box"
                                            placeholder="Password"
                                            id="password_field"
                                    />
                                </div>
                                <i
                                        class="far fa-eye-slash"
                                        id="toggleEyeIcon"
                                        style="cursor: pointer; display: none; margin: 24px -42px"
                                ></i>
                            </div>
                            <div class="space">
                                <button type="button" class="login-button" onclick="redirectToMain()">
                                    <b>Log In</b>
                                </button>

                                <script>
                                    function redirectToMain() {
                                        // Redirect to main.html
                                        window.location.href = 'main.php';
                                    }
                                </script>
                            </div>
                            <div class="spaceTwo adjustTwo">
                                <a href="#" class="adjust-forgot-pw">Forgotten password?</a>
                            </div>
                            <div class="line"></div>
                            <div>
                                <button type="button" class="create-button">
                                    <b>Create New Account</b>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="bottom-link-box">
                        <style>
                            /* Your existing CSS styles for the modal */
                            #registerModal {
                                display: none; /* Initially hide the modal */
                            }
                        </style>
                        </head>

                        <body>
                        <button onclick="openModal('registerModal')">Register</button>

                        <div id="registerModal" class="modal">
                            <div class="modal-content">
                                <span class="close" onclick="closeModal('registerModal')">&times;</span>
                                <img src="images/logging.PNG" alt="">
                                <h2>Register</h2>
                                <form method="POST">
                                    <label for="register-first-name">First Name:</label>
                                    <input type="text" id="register-first-name" name="first_name" required><br><br>

                                    <label for="register-last-name">Last Name:</label>
                                    <input type="text" id="register-last-name" name="last_name" required><br><br>

                                    <label for="register-email">Email:</label>
                                    <input type="email" id="register-email" name="email" required><br><br>

                                    <label for="register-password">Password:</label>
                                    <input type="password" id="register-password" name="password" required><br><br>

                                    <input type="submit" name="submit_action" value="Register">
                                    <div class="social-login">
                                        <button class="google-login">Sign up with Google</button>
                                        <button class="facebook-login">Sign up with Facebook</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <?php
                        if (isset($_POST["submit_action"])) {
                            $firstName = mysqli_real_escape_string($conn, $_POST['first_name']);
                            $lastName = mysqli_real_escape_string($conn, $_POST['last_name']);
                            $email = mysqli_real_escape_string($conn, $_POST['email']);
                            $password = mysqli_real_escape_string($conn, $_POST['password']);
                            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                            $sqlCheck = "SELECT * FROM Myles_user WHERE email ='$email'";
                            $resultCheck = mysqli_query($conn, $sqlCheck);
                            $countCheck = mysqli_num_rows($resultCheck);

                            if ($countCheck == 0) {
                                $sqlInsert = "INSERT INTO Myles_user (first_name, last_name, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
                                if (mysqli_query($conn, $sqlInsert)) {
                                    $sql = "SELECT id FROM Myles_user WHERE email ='$email'";
                                    $result = mysqli_query($conn, $sql);
                                    $arr = mysqli_fetch_assoc($result);
                                    $_SESSION['logged_in'] = true;
                                    $_SESSION['user_id'] = $arr['id'];
                                    $_SESSION['first_name'] = $firstName;
                                    $_SESSION['last_name'] = $lastName;
                                    echo '<script>alert("Registration successful!"); window.location.href = "main.php";</script>';
                                } else {
                                    echo '<script>alert("Error: Could not register. Please try again."); window.location.href = "index.php";</script>';
                                }
                            } else {
                                echo '<script>alert("Email already exists!"); window.location.href = "index.php";</script>';
                            }
                        }
                        ?>

                        <script>
                            function closeModal(modalId) {
                                document.getElementById(modalId).style.display = "none";
                            }

                            function openModal(modalId) {
                                document.getElementById(modalId).style.display = "block";
                            }
                        </script>
                        </body>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div>
            
            <div class="fb-clone">
            </div>
        </div>
    </footer>
</div>

<style>

    /* Basic Modal Styles */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto; /* Enable scroll if needed */
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 40%;
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Subtle shadow */
    }

    /* Modal Content Styles */
    .modal h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333; /* Dark gray heading */
    }

    .modal label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .modal input[type="text"],
    .modal input[type="email"],
    .modal input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .modal input[type="submit"] {
        background-color: #4CAF50; /* Green */
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s ease; /* Smooth transition */
    }

    .modal input[type="submit"]:hover {
        background-color: #45a049; /* Darker green on hover */
    }

    /* Social Login Buttons */
    .social-login button {
        background-color: #fff;
        color: #333;
        padding: 10px 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        cursor: pointer;
        width: calc(50% - 10px); /* 50% width with margin in between */
        margin: 10px 5px;
        display: inline-block;
        text-align: center;
    }

    .social-login {
        display: flex;
        justify-content: space-between;
    }

    /* Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Responsive Design (Optional) */
    @media (max-width: 768px) {
        .modal-content {
            width: 80%;
        }
    }


    .global-container {
    margin: 0 auto;
    position: relative;
  }
  

  
  .bigger-box {
    padding-bottom: 112px;
    padding-top: 72px;
    min-width: 500px;
    /* background-image: url(./images/winter.gif); */
  }
  
  .big-box {
    display: block;
    width: 1262px;
    margin: 0 auto;
    padding: 20px 0;
    position: relative;
  }
  
  .left-box {
    width: 400px;
    box-sizing: border-box;
    margin-left: 150px;
    margin-right: 20px;
    padding-right: 32px;
    display: inline-block;
    vertical-align: top;
  }
  
  .image-box {
    padding: 112px 0 16px;
  }
  
  .fb-logo {
    height: 106px;
    margin: -28px;
    border: 0;
  }
  
  .logo-caption {
    font-family: SFProDisplay-Regular, Helvetica, Arial, sans-serif;
    font-size: 28px;
    font-weight: normal;
    line-height: 28px;
    width: 490px;
    padding: 0 0 20px;
    display: inline-block;
    letter-spacing: normal;
    margin: 0px;
  }
  
  .right-box {
    display: inline-block;
    vertical-align: top;
    height: 456px;
    width: 396px;
  }
  
  @media only screen and (max-width: 1125px) {
    .right-box {
      float: right;
    }
  }
  
  .email-box {
    border-radius: 6px;
    font-size: 17px;
    padding: 14px 16px;
    width: 330px;
    background: white;
    border: 1px solid lightgray;
    height: 22px;
    line-height: 16px;
    vertical-align: middle;
  }
  
  .pw-box {
    border-radius: 6px;
    font-size: 17px;
    padding: 14px 16px;
    width: 330px;
    background: white;
    border: 1px solid lightgray;
    height: 22px;
    line-height: 16px;
    vertical-align: middle;
  }
  
  .email-box:focus,
  .pw-box:focus {
    outline: 1px solid rgb(25, 120, 243);
    outline-offset: -2px;
  }
  
  .login-button {
    background-color: rgb(25, 120, 243);
    border: none;
    border-radius: 6px;
    font-size: 20px;
    color: white;
    line-height: 48px;
    padding: 0 16px;
    width: 364px;
    vertical-align: middle;
  }
  
  .login-button:hover {
    background-color: rgb(23, 112, 230);
    cursor: pointer;
  }
  
  .create-button {
    border: none;
    border-radius: 6px;
    font-size: 17px;
    line-height: 48px;
    padding: 0 16px;
    background-color: rgb(67, 184, 43);
    color: white;
    margin-left: 90px;
    margin-top: 24px;
    margin-bottom: 24px;
  }
  
  .create-button:hover {
    background-color: rgb(55, 165, 33);
    cursor: pointer;
  }
  
  .line {
    align-items: center;
    border-bottom: 1px solid lightgray;
    display: flex;
    margin: 6px 16px 0px;
    text-align: center;
  }
  
  .adjust-forgot-pw {
    margin-left: 107.5px;
    color: rgb(25, 120, 243);
    font-family: SFProText-Regular, Helvetica, Arial, sans-serif;
    font-size: 14px;
  }
  
  .form-container {
    align-items: center;
    background-color: white;
    border: none;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
    box-sizing: border-box;
    width: 397px;
    height: 345px;
    margin: 40px;
    padding: 10px;
    margin-left: 150px;
  }
  
  .space {
    padding: 6px;
  }
  
  .spaceTwo {
    padding: 0px 6px;
  }
  
  .adjust {
    margin: 10px;
  }
  
  .adjustTwo {
    margin: 10px 10px 16px;
  }
  
  a {
    text-decoration: none;
    cursor: pointer;
  }
  
  a:hover {
    color: rgb(25, 120, 243);
    text-decoration: underline;
  }
  
  .bottom-link-box {
    color: #1c1e21;
    font-family: SFProText-Regular, Helvetica, Arial, sans-serif;
    font-size: 14px;
    font-weight: normal;
    padding-top: 0;
    margin-top: -12.5px;
    margin-left: 150px;
    text-align: center;
    width: 400px;
    height: 100px;
  }
  
  .bottom-link {
    color: black;
  }
  
  .bottom-link:hover {
    color: black;
    text-decoration: underline;
  }
  
  body {
    background: #fff;
    color: rgb(27, 29, 32);
    direction: ltr;
    line-height: 1.34;
    margin: 0;
    padding: 0;
    unicode-bidi: embed;
  }
  
  .list-items {
    display: inline-block;
    font-family: SFProText-Regular, Helvetica, Arial, sans-serif;
    color: rgb(138, 141, 145);
    font-size: 12px;
    margin: 2.5px;
  }
  
  .list-items:hover {
    color: rgb(138, 141, 145);
    text-decoration: underline;
  }
  
  .plus-button {
    width: 25px;
    font-weight: bold;
    font-size: 10px;
  }
  
  .line-2 {
    align-items: center;
    border-bottom: 1px solid lightgray;
    display: flex;
    margin: 20px 16px;
    text-align: center;
  }
  
  .fb-clone {
    font-family: SFProText-Regular, Helvetica, Arial, sans-serif;
    color: rgb(138, 141, 145);
    font-size: 11px;
    margin-left: 45px;
    margin-bottom: 16px;
  }
  
  .fb-clone-link {
    font-family: SFProText-Regular, Helvetica, Arial, sans-serif;
    color: rgb(138, 141, 145);
    font-size: 11px;
  }
  
  footer {
    text-align: justify;
    background-image: url(https://i.imgur.com/LLoz1n1.gif);
    display: block;
    width: 1200px;
    margin: 0 auto;
  }
  
  .reduce-margin {
    margin-top: 0px;
    margin-bottom: 0px;
  }
  
  /* Line 240 - 369 are codes to adjust for mobile responsivness in bigger phones and tablets */
  @media only screen and (max-width: 1125px) {
    .bigger-box {
      padding-bottom: 170px;
      padding-top: 0px;
      margin-top: -90px;
    }
  
    .big-box {
      display: flex;
      flex-direction: column;
      text-align: center;
      height: 496px;
      margin: 0 40px;
      width: auto;
    }
  
    .left-box {
      margin: 0 auto;
      padding: 0;
    }
  
    .logo-caption {
      font-size: 24px;
      line-height: 28px;
      width: auto;
      padding: 0;
    }
  
    .right-box {
      float: none;
      margin: 0 auto;
      padding: 40px;
    }
  
    .form-container {
      float: none;
      margin: 0 auto;
    }
  
    .adjust {
      float: none;
      margin: 1 auto;
      height: 25px;
    }
  
    .adjust-forgot-pw {
      float: none;
      margin: 0 auto;
      height: 25px;
    }
  
    .spaceTwo {
      margin-bottom: 16px;
    }
  
    .line {
      margin: 10px 8px;
    }
  
    .create-button {
      display: flex;
      flex-direction: column;
      text-align: center;
    }
  
    .bottom-link-box {
      float: none;
      margin: 0 auto;
      margin-top: 25px;
      height: 25px;
    }
  
    footer {
      margin: 20px;
      margin-right: 55px;
      width: auto;
    }
  
    ul {
      margin: 0px;
      width: auto;
    }
  
    .line-2 {
      margin: 7.5px;
      margin-left: 45px;
      width: auto;
    }
  
    .fb-clone {
      margin-top: 10px;
      width: auto;
    }
  }
  
  /* Line 370 onwards are codes to adjust for mobile responsiveness in normal/smaller handphones. */
  @media only screen and (max-width: 480px) {
    .global-container {
      width: fit-content;
      height: fit-content;
    }
  
    .contains-top-half-and-footer-bottom-half {
      width: fit-content;
      height: fit-content;
    }
  
    body {
      width: fit-content;
      height: fit-content;
    }
  }




/* Basic Modal Styles */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 40%;
  border-radius: 10px; /* Rounded corners */
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Subtle shadow */
}

/* Modal Content Styles */
.modal h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333; /* Dark gray heading */
}

.modal label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.modal input[type="text"],
.modal input[type="email"],
.modal input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

.modal input[type="submit"] {
  background-color: #4CAF50; /* Green */
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 100%;
  transition: background-color 0.3s ease; /* Smooth transition */
}

.modal input[type="submit"]:hover {
  background-color: #45a049; /* Darker green on hover */
}

/* Social Login Buttons */
.social-login button {
  background-color: #fff;
  color: #333;
  padding: 10px 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  cursor: pointer;
  width: calc(50% - 10px); /* 50% width with margin in between */
  margin: 10px 5px;
  display: inline-block;
  text-align: center;
}
.social-login{
display: flex;
justify-content: space-between;
}

/* Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

/* Responsive Design (Optional) */
@media (max-width: 768px) {
  .modal-content {
      width: 80%;
  }
}

</style>

</body>
</html>

