<!DOCTYPE html>
<html lang="en">

<?php
include 'connection.php'; 
session_start();
?>


  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Fb Clone</title>
    <link
      rel="icon"
      href="https://cdn.iconscout.com/icon/free/png-512/facebook-social-media-fb-logo-square-44659.png"
    />
    <link rel="stylesheet" href="styles.css" />
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
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('registerModal')">&times;</span>
            <img src="images/logging.PNG" alt="">
            <h2>Register</h2>
            <form method="POST" action="index.php">
                <label for="register-first-name">First Name:</label>
                <input type="text" id="register-first-name" name="first_name" required><br><br>

                <label for="register-last-name">Last Name:</label>
                <input type="text" id="register-last-name" name="last_name" required><br><br>

                <label for="register-email">Email:</label>
                <input type="email" id="register-email" name="email" required><br><br>

                <label for="register-password">Password:</label>
                <input type="password" id="register-password" name="password" required><br><br>

                <input type="submit" name="submit" value="Register">
                <div class="social-login">
                    <button class="google-login">Sign up with Google</button>
                    <button class="facebook-login">Sign up with Facebook</button>
                </div>
            </form>
        </div>
    </div>

    <?php
include 'connection.php'; 
?>

<body>
    <button onclick="openModal('registerModal')">Register</button>
    
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('registerModal')">&times;</span>
            <img src="images/logging.PNG" alt="">
            <h2>Register</h2>
            <form method="POST" action="main.php">
                <label for="register-first-name">First Name:</label>
                <input type="text" id="register-first-name" name="first_name" required><br><br>

                <label for="register-last-name">Last Name:</label>
                <input type="text" id="register-last-name" name="last_name" required><br><br>

                <label for="register-email">Email:</label>
                <input type="email" id="register-email" name="email" required><br><br>

                <label for="register-password">Password:</label>
                <input type="password" id="register-password" name="password" required><br><br>

                <input type="submit" name="submit" value="Register">
                <div class="social-login">
                    <button class="google-login">Sign up with Google</button>
                    <button class="facebook-login">Sign up with Facebook</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST["submit"])) {
        $firstName = mysqli_real_escape_string($conn, $_POST['first_name']);
        $lastName = mysqli_real_escape_string($conn, $_POST['last_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sqlCheck = "SELECT * FROM Myles_user WHERE email ='$email'";
        $resultCheck = mysqli_query($conn, $sqlCheck);
        $countCheck = mysqli_num_rows($resultCheck);

        if ($countCheck == 0) {
            $sqlInsert = "INSERT INTO Myles_user (first_name, last_name, email, password) VALUES ('$firstName', '$lastName', '$email', '$hashedPassword')";
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
          <ul>
            <li class="list-items">English (UK)</li>
            <li class="list-items">
              <a class="list-items" href="#">中文(简体)</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Bahasa Indonesia</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">日本語</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">ภาษาไทย</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Tiếng Việt</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">한국어</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Español</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Português (Brasil)</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Français (France)</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Deutsch</a>
            </li>
            <button type="button" class="plus-button">+</button>
          </ul>
          <div class="line-2 reduce-margin"></div>
          <ul>
            <li class="list-items">
              <a class="list-items" href="#">Messenger</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Fb Lite</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Watch</a></li>
            <li class="list-items">
              <a class="list-items" href="#">People</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Pages</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Page Categories</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Places</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Games</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Locations</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Marketplace</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Fb Pay</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Groups</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Jobs</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Occulus</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Portal</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Instagram</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Local</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Fundraisers</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Services</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Spark AR</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Shops</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Voting Information Centre</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">About</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Create ad</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Create Page</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Developers</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Careers</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Privacy</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Cookies</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">AdChoices</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Terms</a></li>
            <li class="list-items"><a class="list-items" href="#">Help</a></li>
          </ul>
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

