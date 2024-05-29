<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'Database/connection.php';
//session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark">
    <title>Facebook Clone</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="images/fb.png" type="image/x-icon">
    <script src="main.js" defer></script>
</head>
<body>
<section class="flex-column loading">

<img src="loading.gif" alt="">
<div class="meta">
    <img src="images/meta.png" alt="">
    <p>Logging in....</p>
    <div>
        <p>Welcome!</p>
    </div>
</div>
</section>
<header>
    <nav>
        <div>
            <a href=""><img src="images/logo.png" alt=""></a>
        </div>
        <div class="search hover">
            <i class="fa-sharp fa-solid fa-magnifying-glass search_icon"></i>
            <input type="text" placeholder="Search">
        </div>
        <div class="top-icon hover toggle-menu">
            <a href="#!"><img src="images/bars.png" alt="" title="Menu"></a>
        </div>
        <ul class="top-menu">
            <li class="top-icon hover chats" data-chats="1">
                <a href="#!"><img src="images/messenger.png" alt="" title="Messenger"></a>
                <div class="top-icon-des">
                    <p class="top-icon-p"><small>Messenger</small></p>
                </div>
            </li>
            <li class="top-icon hover notif" data-notif="5">
                <a href="#!"><img src="images/notif.png" alt="" title="Notifications"></a>
                <div class="top-icon-des">
                    <p class="top-icon-p"><small>Notifications</small></p>
                </div>
            </li>
            <li class="top-icon profile-nav">
                <body>
                <a id="signoutImage">
                    <img src="images/marc.png" alt="">
                </a>
                <div id="signoutPopup" class="popup">
                    <p>Are you sure you want to sign out?</p>
                    <div class="popup-buttons">
                        <button id="confirmSignOut">Sign Out</button>
                        <button id="cancelSignOut">Cancel</button>
                    </div>
                </div>
                <script src="script.js"></script>
                </body>
            </li>
        </ul>
    </nav>
    <ul class="nav-menu flex-row">
        <li><a href="#!"><i class="fa-sharp fa-solid fa-house"></i></a></li>
        <li><a href="#!"><img src="images/friend-mobile.png" alt=""></a></li>
        <li><a href="#!"><img src="images/mes-mobile.png" alt=""></a></li>
        <li><a href="#!"><i class="fa-regular fa-bell"></i></a></li>
        <li><a href="#!"><i class="bx bx-slideshow"></i></a></li>
        <li><a href="#!"><i class="bx bx-store"></i></a></li>
    </ul>
</header>
<nav class="left-bar">
    <div class="signal"></div>
    <div class="flex-item">
        <div>
            <a href="#!" class="side-icon hover2">
                <i class="fa-solid fa-house"></i>
                <font>Home</font>
            </a>
        </div>
        <div>
            <a href="https://www.facebook.com/Marcdylann" class="side-icon2 hover2">
                <div class="circle-container2">
                    <img src="images/marc.png" alt="">
                </div>
                <font>Marc Dylan Pilapil</font>
            </a>
        </div>
    </div>
    <div class="flex-item">
        <div>
            <a href="#!" class="side-icon2 hover2">
                <div class="circle-container">
                    <img src="images/compact.png" alt="">
                </div>
                <font>Menu</font>
            </a>
        </div>
        <div>
            <a href="#!" class="side-icon2 hover2">
                <div class="circle-container2">
                    <img src="images/watch.png" alt="">
                </div>
                <font>Watch</font>
            </a>
        </div>
        <div>
            <a href="#!" class="side-icon2 hover2">
                <div class="circle-container2">
                    <img src="images/marketplace.png" alt="">
                </div>
                <font>Marketplace</font>
            </a>
        </div>
        <div>
            <a href="#!" class="side-icon2 hover2">
                <div class="circle-container2">
                    <img src="images/gaming.png" alt="">
                </div>
                <font>Gaming</font>
            </a>
        </div>
    </div>
    <div class="flex-item">
        <div>
            <a href="#!" class="side-icon2 hover2">
                <div class="circle-container">
                    <img src="images/group.png" alt="">
                </div>
                <font>Groups</font>
            </a>
        </div>
        <div>
            <a href="#!" class="side-icon2 hover2">
                <div class="circle-container2 fp">
                    <img src="images/group-img-2.png" alt="">
                </div>
                <font>WEBDEV GROUP...</font>
            </a>
        </div>
        <div>
            <a href="#!" class="side-icon2 hover2">
                <div class="circle-container2 fp">
                    <img src="images/group-img-1.jpg" alt="">
                </div>
                <font>Gaming for Life</font>
            </a>
        </div>
        <div>
            <a href="#!" class="side-icon2 hover2">
                <div class="circle-container2 fp">
                    <img src="images/fp2.png" alt="">
                </div>
                <font>USC Archi...</font>
            </a>
        </div>
    </div>

    <div class="flex-item">
        <div>
            <a href="#!" class="side-icon2 hover2">
                <div class="circle-container">
                    <img src="images/link.png" alt="">
                </div>
                <font>Shortcuts</font>
            </a>
        </div>
    </div>
    <div class="flex-item links">
        <small>
            <a href="https://www.facebook.com/privacy/policy/?entry_point=data_policy_redirect&entry=0">Privacy •</a>
            <a href="">Terms •</a>
            <a href="">Advertising •</a>
            <a href="">Ad Choices •</a>
            <a href="">Cookies •</a>
            <span>More •</span>
            <span>Meta &copy; 2024</span>
        </small>
        <br><br><br>
    </div>
</nav>
<main class="flex-column main">
    <div class="newsfeed flex-column stories-wrapper">
        <ul class="flex-row stories-header">
            <li><a href="#!">Stories</a>
                <div class="border-blue"></div>
            </li>
            <li class="hover2"><a href="#!">Reels</a></li>
            <li class="hover2"><a href="#!">Rooms</a></li>
        </ul>
        <div class="stories-scroll">
            <ul class="flex-row stories-container">
                <div class="stories">
                    <div class="flex-column story create-story"></div>
                    <div class="create-container flex-row">
                        <div class="plus-story top-icon"><i class="fa fa-plus"></i></div>
                        <p><small>Create story</small></p>
                    </div>
                </div>
                <div class="stories">
                    <div class="flex-column story story-1"></div>
                    <p><small>Seth Michael Arong</small></p>
                </div>
                <div class="stories">
                    <div class="flex-column story story-2"></div>
                    <p><small>Vince Angelou Pancho</small></p>
                </div>
                <div class="stories">
                    <div class="flex-column story story-3"></div>
                    <p><small>Nathaniel Padas</small></p>
                </div>
                <div class="stories">
                    <div class="flex-column story story-4"></div>
                    <p><small>Bryle Andre Payot</small></p>
                </div>
                <div class="stories">
                    <div class="flex-column story story-5"></div>
                    <p><small>Earl Jillian Rallos</small></p>
                </div>
                <div class="stories">
                    <div class="flex-column story story-6"></div>
                    <p><small>Tracy Mcgrady</small></p>
                </div>
                <div class="stories">
                    <div class="flex-column story story-7"></div>
                    <p><small>Steph Curry</small></p>
                </div>
            </ul>
        </div>
        <div class="top-icon hover2 btn-prev">
            <a><img src="images/arrow.png" alt=""></a>
        </div>
        <div class="top-icon hover2 btn-next">
            <a><img src="images/arrow.png" alt=""></a>
        </div>
    </div>
    <div class="newsfeed flex-column header-whats">
        <div class="news-header flex-row border-bot">
            <div class="flex-row status">
                <div class="news-dp">
                    <img src="images/marc.png" alt="">
                </div>
                <div class="mind-input">


                    <!-- <input class="hover post-input" type="text" placeholder= "What's on your mind, Marc?"> -->


                    <form method="post">
                        <input class="hover post-input" type="text" name="post_content"
                               placeholder="What's on your mind, Marc?" required>
                        <button type="submit" name="submit_post">Post</button>
                    </form>

                    <?php

                    if (isset($_POST["submit_post"])) {
                        $postContent = mysqli_real_escape_string($conn, $_POST['post_content']);

                        // Assuming you have the user information stored in session
                        $userId = $_SESSION['user_id'];

                        // Get current date and time
                        $date = date('Y-m-d');
                        $time = date('H:i:s');
                        $sqlInsert = "INSERT INTO post_info (date, time, text) VALUES ('$date', '$time', '$postContent')";
                        if (mysqli_query($conn, $sqlInsert)) {
                            echo '<script>alert("Post submitted successfully!"); window.location.href = "main.php";</script>';
                        } else {
                            echo '<script>alert("Error: Could not submit post. Please try again."); window.location.href = "index.php";</script>';
                        }
                    }
                    ?>


                </div>
            </div>
        </div>
        <div class="flex-row interact mind">
            <div class="flex-row interact-icons ii1">
                <img src="images/live-vid.png" alt="">
                <p class="live-video">Live video</p>
            </div>
            <div class="flex-row interact-icons ii2">
                <img src="images/photo.png" alt="">
                <p id="photo">Photo/Video</p>
            </div>
            <div class="flex-row interact-icons ii3">
                <img src="images/happy.png" alt="">
                <p>Feeling/activity</p>
            </div>
        </div>
    </div>

    <div class="newsfeed post-container">
    </div>
    <div class="newsfeed flex-column">
        <div class="news-header flex-row paragraph-box">
            <div class="flex-row">
                <div class="news-dp">
                    <img src="images/marc.png" alt="">
                </div>
                <div class="dp-name">
                    <p><strong>Marc Dylan Pilapil</strong></p>
                    <div class="flex-row under-name">
                        <small>1d •</small><img src="images/globe.png" alt="" class="news-icon">
                    </div>
                </div>
            </div>
            <div class="dot-menu hover2">
                <img src="images/dotmenu.png" alt="" class="news-icon dot">
                <div class="triangle"></div>
                <small class="del-post"><i class="fa-solid fa-x"></i>Hide Post</small>
            </div>
        </div>
        <div class="paragraph">
        </div>
        <div class="post">
            <div class="pic-container">
                <img src="images/collage.jpeg" alt="">
            </div>
            <div class="pic-comment"></div>
        </div>
        <div class="news-footer flex-column">
            <div class="flex-row likes">
                <div class="flex-row">
                    <img src="images/react2.png" alt="">
                    <p class="react-quan">229</p>
                </div>
                <div class="flex-row comments">
                    <p>105 Comments</p>
                    <p>3 Shares</p>
                </div>
            </div>
            <div class="flex-row interact mind share">
                <div class="flex-row interact-icons like-container" id="com-react">
                    <div class="like-icon">

                    </div>
                    <p class="like">Like</p>
                </div>
                <div class="flex-row interact-icons" id="com-react">
                    <img src="images/comment.png" alt="">
                    <p>Comment</p>
                </div>
                <div class="flex-row interact-icons" id="com-react">
                    <img src="images/share.png" alt="">
                    <p>Share</p>
                </div>
            </div>
        </div>
    </div>

    <div class="newsfeed flex-column">
        <div class="news-header flex-row">
            <div class="flex-row">
                <div class="news-dp">
                    <img src="images/daryll.jpeg" alt="">
                </div>
                <div class="dp-name">
                    <p><strong>Daryll A. Pilapil</strong></p>
                    <div class="flex-row under-name">
                        <small>June 10 •</small><img src="images/globe.png" alt="" class="news-icon">
                    </div>
                </div>
            </div>
            <div class="dot-menu hover2">
                <img src="images/dotmenu.png" alt="" class="news-icon dot">
                <div class="triangle"></div>
                <small class="del-post"><i class="fa-solid fa-x"></i>Hide Post</small>
            </div>
        </div>
        <div class="paragraph">
            <p>
                <i class="fa-solid fa-headphones"></i> 'Happy Birthday to my Eldest Son, Marc Dylan Myles C. Pilapil!
            </p>
        </div>
        <div class="post attention">
            <img src="images/birthday.jpeg">
            </video>
        </div>
        <div class="news-footer flex-column">
            <div class="flex-row likes">
                <div class="flex-row">
                    <img src="images/react2.png" alt="">
                    <p class="react-quan">3K</p>
                </div>
                <div class="flex-row comments">
                    <p>45 Comments</p>
                    <p>582 Shares</p>
                </div>
            </div>
            <div class="flex-row interact mind share">
                <div class="flex-row interact-icons like-container" id="com-react">
                    <div class="like-icon">

                    </div>
                    <p class="like">Like</p>
                </div>
                <div class="flex-row interact-icons" id="com-react">
                    <img src="images/comment.png" alt="">
                    <p>Comment</p>
                </div>
                <div class="flex-row interact-icons" id="com-react">
                    <img src="images/share.png" alt="">
                    <p>Share</p>
                </div>
            </div>
        </div>
    </div>

    <div class="newsfeed flex-column">
        <div class="news-header flex-row paragraph-box">
            <div class="flex-row">
                <div class="news-dp">
                    <img src="images/cahleen.jpeg" alt="">
                </div>
                <div class="dp-name">
                    <p><strong>Cahleen Jyne Pilapil</strong></p>
                    <div class="flex-row under-name">
                        <small>14m •</small><img src="images/globe.png" alt="" class="news-icon">
                    </div>
                </div>
            </div>
            <div class="dot-menu hover2">
                <img src="images/dotmenu.png" alt="" class="news-icon dot">
                <div class="triangle"></div>
                <small class="del-post"><i class="fa-solid fa-x"></i>Hide Post</small>
            </div>
        </div>
        <div class="paragraph">
            <p>looking good <3</p>
        </div>
        <div class="post">
            <div class="pic-container">
                <img src="images/jyne.jpeg" alt="">
            </div>
            <div class="pic-comment"></div>
        </div>
        <div class="news-footer flex-column">
            <div class="flex-row likes">
                <div class="flex-row">
                    <img src="images/react.png" alt="">
                    <p class="react-quan">1K</p>
                </div>
                <div class="flex-row comments">
                    <p>5 Comments</p>
                    <p>32 Shares</p>
                </div>
            </div>
            <div class="flex-row interact mind share">
                <div class="flex-row interact-icons like-container" id="com-react">
                    <div class="like-icon">
                    </div>
                    <p class="like">Like</p>
                </div>
                <div class="flex-row interact-icons" id="com-react">
                    <img src="images/comment.png" alt="">
                    <p>Comment</p>
                </div>
                <div class="flex-row interact-icons" id="com-react">
                    <img src="images/share.png" alt="">
                    <p>Share</p>
                </div>
            </div>
        </div>
    </div>

    <div class="newsfeed flex-column">
        <div class="news-header flex-row">
            <div class="flex-row">
                <div class="news-dp">
                    <img src="images/valorant.jpeg" alt="">
                </div>
                <div class="dp-name">
                    <p><strong>VALORANT</strong></p>
                    <div class="flex-row under-name">
                        <small>Sponsored •</small><img src="images/globe.png" alt="" class="news-icon">
                    </div>
                </div>
            </div>
            <div class="dot-menu hover2">
                <img src="images/dotmenu.png" alt="" class="news-icon dot">
                <div class="triangle"></div>
                <small class="del-post"><i class="fa-solid fa-x"></i>Hide Post</small>
            </div>
        </div>
        <div class="paragraph">
            <p>
                Play Valorant now!
            </p>
        </div>
        <div class="post">
            <video autoplay controls muted>
                <source src="images/valorant.mp4">
            </video>
        </div>
        <div class="news-footer flex-column">
            <div class="flex-row likes">
                <div class="flex-row">
                    <img src="images/react2.png" alt="">
                    <p class="react-quan" data-quan="3">50</p>
                </div>
                <div class="flex-row comments">
                    <p>2 Comments</p>
                    <p>3 Shares</p>
                </div>
            </div>
            <div class="flex-row interact mind share">
                <div class="flex-row interact-icons like-container" id="com-react">
                    <div class="like-icon">

                    </div>
                    <p class="like">Like</p>
                </div>
                <div class="flex-row interact-icons" id="com-react">
                    <img src="images/comment.png" alt="">
                    <p>Comment</p>
                </div>
                <div class="flex-row interact-icons" id="com-react">
                    <img src="images/share.png" alt="">
                    <p>Share</p>
                </div>
            </div>
        </div>
    </div>

    <div class="newsfeed flex-column">
        <div class="news-header flex-row">
            <div class="flex-row">
                <div class="news-dp">
                    <img src="images/marc.png" alt="">
                </div>
                <div class="dp-name">
                    <p><strong>Marc Dylan Pilapil</strong></p>
                    <div class="flex-row under-name">
                        <small>1m •</small><img src="images/globe.png" alt="" class="news-icon">
                    </div>
                </div>
            </div>
            <div class="dot-menu hover2">
                <img src="images/dotmenu.png" alt="" class="news-icon dot">
                <div class="triangle"></div>
                <small class="del-post"><i class="fa-solid fa-x"></i>Hide Post</small>
            </div>
        </div>
        <div class="paragraph">

        </div>
        <div class="post">
            <video autoplay controls muted>
                <source src="images/DOTA2.mp4">
            </video>
        </div>
        <div class="news-footer flex-column">
            <div class="flex-row likes">
                <div class="flex-row">
                    <img src="images/react.png" alt="">
                    <p class="react-quan">20</p>
                </div>
                <div class="flex-row comments">
                    <p>1 Comments</p>
                    <p>2 Shares</p>
                </div>
            </div>
            <div class="flex-row interact mind share">
                <div class="flex-row interact-icons like-container" id="com-react">
                    <div class="like-icon">

                    </div>
                    <p class="like">Like</p>
                </div>
                <div class="flex-row interact-icons" id="com-react">
                    <img src="images/comment.png" alt="">
                    <p>Comment</p>
                </div>
                <div class="flex-row interact-icons" id="com-react">
                    <img src="images/share.png" alt="">
                    <p>Share</p>
                </div>
            </div>
        </div>
    </div>

    <div class="newsfeed flex-column">
        <div class="news-header flex-row paragraph-box">
            <div class="flex-row">
                <div class="news-dp">
                    <img src="images/frie.jpeg" alt="">
                </div>
                <div class="dp-name">
                    <p><strong>Frieren Community</strong></p>
                    <div class="flex-row under-name">
                        <small>1h •</small><img src="images/globe.png" alt="" class="news-icon">
                    </div>
                </div>
            </div>
            <div class="dot-menu hover2">
                <img src="images/dotmenu.png" alt="" class="news-icon dot">
                <div class="triangle"></div>
                <small class="del-post"><i class="fa-solid fa-x"></i>Hide Post</small>
            </div>
        </div>
        <div class="paragraph">
            <p>STARK FIGHTING DRAGON</p>
        </div>
        <div class="post aespa flex-row">
            <div class="pic-container aespa flex-row">
                <img src="images/dragon.gif" alt="">
            </div>
            <div class="pic-comment"></div>
        </div>
        <div class="news-footer flex-column">
            <div class="flex-row likes">
                <div class="flex-row">
                    <img src="images/react.png" alt="">
                    <p class="react-quan">23K</p>
                </div>
                <div class="flex-row comments">
                    <p>200 Comments</p>
                    <p>239 Shares</p>
                </div>
            </div>
            <div class="flex-row interact mind share">
                <div class="flex-row interact-icons like-container" id="com-react">
                    <div class="like-icon">
                    </div>
                    <p class="like">Like</p>
                </div>
                <div class="flex-row interact-icons" id="com-react">
                    <img src="images/comment.png" alt="">
                    <p>Comment</p>
                </div>
                <div class="flex-row interact-icons" id="com-react">
                    <img src="images/share.png" alt="">
                    <p>Share</p>
                </div>
            </div>
        </div>
    </div>


</main>
<!-- message edit-->
<div class="circle-edit hover">
    <img src="images/edit.png" alt="">
    <div class="edit-icon-des">
        <p class="top-icon-p"><small>New Message</small></p>
    </div>
</div>

<!-- right bar -->

<nav class="right-bar">
    <div>
        <div class="rightbar-title">
            <p>Sponsored</p>
        </div>
        <div class="flex-row hover2 ads">
            <img src="images/scrub.png" alt="">
            <div class="ad-p">
                <p>SCRUB DADDY</p>
                <small>ScrubDaddy.com</small>
            </div>
        </div>
        </a>
        <div class="flex-row hover2 ads">
            <img src="images/prime.jpeg" alt="">
            <div class="ad-p">
                <p>PRIME DRINK</p>
                <p>Hydration</p>
                <small>Prime.com</small>
            </div>
        </div>
        </a>
    </div>
    <div class="div-friend">
        <div class="rightbar-title">
            <div class=" flex-row friend-req">
                <p>Friend Request</p>
                <small><a href="#!">See all</a></small>
            </div>
        </div>
        <div class="flex-row hover2 ads friend-deactfp">
            <img src="images/delgado.jpeg" alt="">
            <div class="flex-column friend-des">
                <div class="flex-row friend-name">
                    <p>Jio Delgado</p>
                    <small>6d</small>
                </div>
                <div class="flex-row friend-name btn">
                    <button>Confirm</button>
                    <button onclick="del()">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <div class="div">
        <div class="rightbar-title">
            <div class=" flex-row friend-req contact-title">
                <p>Contacts</p>
                <img src="images/dotmen.png" alt="">
            </div>
        </div>
        <div class="flex-row hover2 ads friend contacts">
            <div class="friend-img">
                <img src="images/daryll.jpeg" alt="">
            </div>
            <div class="flex-column friend-des">
                <div class="flex-row friend-name">
                    <p>Daryll A. Pilapil</p>
                </div>
            </div>
        </div>
        <div class="flex-row hover2 ads friend contacts">
            <div class="friend-img">
                <img src="images/chally.jpeg" alt="">
            </div>
            <div class="flex-column friend-des">
                <div class="flex-row friend-name">
                    <p>Chally C. Pilapil</p>
                </div>
            </div>
        </div>
        <div class="flex-row hover2 ads friend contacts">
            <div class="friend-img">
                <img src="images/dyvin.jpeg" alt="">
            </div>
            <div class="flex-column friend-des">
                <div class="flex-row friend-name">
                    <p>Russ Dyvin Bermiso</p>
                </div>
            </div>
        </div>
        <div class="flex-row hover2 ads friend contacts">
            <div class="friend-img">
                <img src="images/ethan.jpeg" alt="">
            </div>
            <div class="flex-column friend-des">
                <div class="flex-row friend-name">
                    <p>Ethan Bermiso</p>
                </div>
            </div>
        </div>
        <div class="flex-row hover2 ads friend contacts">
            <div class="friend-img">
                <img src="images/cahleen.jpeg" alt="">
            </div>
            <div class="flex-column friend-des">
                <div class="flex-row friend-name">
                    <p>Cahleen Jyne</p>
                </div>
            </div>
        </div>
        <div class="flex-row hover2 ads friend contacts">
            <div class="friend-img">
                <img src="images/george.jpeg" alt="">
            </div>
            <div class="flex-column friend-des">
                <div class="flex-row friend-name">
                    <p>George Luis Go</p>
                </div>
            </div>
        </div>
        <div class="flex-row hover2 ads friend contacts">
            <div class="friend-img">
                <img src="images/azeneth.jpeg" alt="">
            </div>
            <div class="flex-column friend-des">
                <div class="flex-row friend-name">
                    <p>Azeneth Sayson</p>
                </div>
            </div>
        </div>
        <div class="flex-row hover2 ads friend contacts">
            <div class="friend-img">
                <img src="images/dolly.jpeg" alt="">
            </div>
            <div class="flex-column friend-des">
                <div class="flex-row friend-name">
                    <p>Dolly Epe</p>
                </div>
            </div>
        </div>
        <div class="flex-row hover2 ads friend contacts">
            <div class="friend-img">
                <img src="images/allen.jpeg" alt="">
            </div>
            <div class="flex-column friend-des">
                <div class="flex-row friend-name">
                    <p>Allen Allegrado</p>
                </div>
            </div>
        </div>
        <div class="flex-row hover2 ads friend contacts">
            <div class="friend-img">
                <img src="images/roy.jpeg" alt="">
            </div>
            <div class="flex-column friend-des">
                <div class="flex-row friend-name">
                    <p>Roy Padayogdog</p>
                </div>
            </div>
        </div>
        <div class="flex-row hover2 ads friend contacts">
            <div class="friend-img">
                <img src="images/nik.jpeg" alt="">
            </div>
            <div class="flex-column friend-des">
                <div class="flex-row friend-name">
                    <p>Nik Pazon</p>
                </div>
            </div>
        </div>


        <div class="div">
            <div class="rightbar-title">
                <div class=" flex-row friend-req contact-title">
                    <p>Group conversations</p>
                </div>
            </div>
            <div class="flex-row hover2 ads friend contacts">
                <img src="images/valorant.jpeg" alt="">
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>Valorant PH</p>
                    </div>
                </div>
            </div>
            <div class="flex-row hover2 ads friend contacts">
                <img src="images/dota.jpeg" alt="">
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>Dota Cinema</p>
                    </div>
                </div>
            </div>
            <div class="flex-row hover2 ads friend contacts">
                <img src="images/jollibee.png" alt="">
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>Jollibee Merchants</p>
                    </div>
                </div>
            </div>
            <div class="flex-row hover2 ads friend contacts">
                <img src="images/amp.jpeg" alt="">
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>AMP</p>
                    </div>
                </div>
            </div>
        </div>
</nav>

<div class="toast">
    <p>Your input field is empty, Try again.</p><i class="fa-regular fa-x hover btn-toast"></i>
</div>

</body>
</html>

<style>
    * {
        --var-gray1--: #242526;
        --var-gray2--: #18191a;
        --var-gray3--: #3a3b3c;
        --var-gray4--: #3e4042;
        --var-blue--: #0084ff;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html, body {
        font-family: "Segoe UI Historic", "Segoe UI", Helvetica, Arial, sans-serif;
        background-color: var(--var-gray2--);
        overflow-x: hidden;
    }

    li, a {
        color: white;
        text-decoration: none;
    }

    ul {
        list-style: none;
    }

    span, p, h1, h2 {
        color: white;
    }

    input {
        outline: none;
    }

    video {
        width: 100%;
    }

    small {
        color: rgba(220, 220, 220, 0.548);
    }

    .hover:hover {
        background-color: rgba(220, 220, 220, 0.548);
    }

    .hover2:hover {
        background-color: var(--var-gray4--);
    }

    .flex-row {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .flex-column {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .loading {
        position: fixed;
        top: 0;
        left: 0;
        gap: 2rem;
        z-index: 999;
        background-color: white;
        height: 100vh;
        width: 100vw;
        visibility: visible;
    }

    .loading.hide-load {
        z-index: -999;
        visibility: hidden;
    }

    .meta p {
        color: var(--var-blue--);
        text-align: center;
    }

    .meta {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        padding: 0 1rem;
    }

    .meta img {
        width: 4rem;
        animation: spin infinite linear 2000ms;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    header {
        background-color: var(--var-gray1--);
        border-bottom: 2px solid var(--var-gray4--);
        position: fixed;
        width: 100vw;
        z-index: 990;
    }

    header nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo {
        color: var(--var-blue--);
    }

    .search {
        width: 36.7%;
        margin-left: .5rem;
        position: relative;
        background-color: var(--var-gray3--);
        border-radius: 10vw;
    }

    .search input {
        border: none;
        width: 100%;
        height: 100%;
        background-color: transparent;
        padding: .8rem 1rem .8rem 2.5rem;
        color: white;
        font-size: .9rem;
        border-radius: 10vw;
        outline: none;
    }

    .search_icon {
        position: absolute;
        color: gainsboro;
        top: .8rem;
        left: 1rem;
    }

    input::placeholder {
        color: gainsboro;
    }

    .top-menu {
        padding: 0 2rem 0 1rem;
        display: flex;
        gap: .5rem;
    }

    .top-menu .top-icon:last-child img {
        width: 100%;
    }

    .top-icon {
        background-color: var(--var-gray4--);
        border-radius: 50vw;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 2.5rem;
        height: 2.5rem;
    }

    .top-icon img {
        width: 1.2rem;
        margin-top: .2rem;
    }

    .notif, .chats, .profile-nav {
        position: relative;
    }

    [data-notif]::after {
        content: attr(data-notif);
    }

    [data-chats]::after {
        content: attr(data-chats);
    }

    [data-notif]::after, [data-chats]::after, .profile-nav::after {
        position: absolute;
        top: -6px;
        right: -5px;

        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #e41e3f;
        border-radius: 50%;
        width: 19px;
        height: 19px;
        font-size: 11px;
        font-weight: 600;
    }

    .profile-nav::after {
        content: '';
        top: 0;
        right: 0;
        width: 9px;
        height: 9px;
        animation: pulse 1.5s ease-in infinite;
    }

    @keyframes pulse {
        0% {
            scale: 1;
        }
        50% {
            scale: 1.5;
            background-color: rgba(228, 92, 115, 0.61);
        }
        100% {
            scale: 1;
        }
    }

    .new {
        display: none;
        position: absolute;
        top: 3.5rem;
        right: .5rem;
        background-color: white;
        border-radius: .5rem;
        width: 15rem;
        padding: 1rem;
        box-shadow: 0 0 3px 1px white;
    }

    .profile-nav.block .new {
        display: block;
    }

    nav .profile-nav .new h3 {
        text-align: center;
        margin-bottom: 1rem;
        background-image: linear-gradient(blue, red);
        -webkit-background-clip: text;
        color: transparent;
    }

    .new li:last-child {
        text-align: center;
        margin: 1rem 0 0;
    }

    .new li:last-child small {
        color: rgba(99, 97, 97, 0.87);
    }

    .new h3, .new li {
        color: black;
    }

    .new::after {
        content: '';
        position: absolute;
        background-color: white;
        width: 1rem;
        height: 1rem;
        border-radius: .2rem;
        top: -5px;
        right: 5px;

        transform: rotate(45deg)

    }

    .top-icon-des {
        background-color: rgba(255, 255, 255, 0.719);
        position: absolute;
        top: 3.2rem;
        padding: .3rem .7rem .5rem .7rem;
        border-radius: .5rem;
        display: none;
    }

    .top-icon:hover {
        cursor: pointer;
        animation: fade 1s ease-in-out 1000ms;
    }

    .top-icon:hover .top-icon-des {
        display: block;
    }

    .top-icon-p small {
        color: black;
    }

    .toggle-menu {
        display: none;
    }

    .nav-menu {
        justify-content: space-around;
        padding: 1rem 0;
        display: none;
    }

    .nav-menu li {
        position: relative;
    }

    .nav-menu li:first-child i {
        font-size: 1.2rem;
    }

    .nav-menu li:nth-child(2) img {
        width: 1.5rem;
    }

    .nav-menu li i {
        font-size: 1.3rem;
    }

    .nav-menu li img {
        width: 1.3rem;
    }

    .nav-menu li:nth-child(3)::after {
        content: '1';
    }

    .nav-menu li:nth-child(4)::after {
        content: '5';
    }

    .nav-menu li:nth-child(3)::after, .nav-menu li:nth-child(4)::after {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 16px;
        height: 16px;
        background-color: #e41e3f;
        font-size: 10px;
        font-weight: 600;
        border: 1px solid var(--var-gray1--);
        border-radius: 50%;
        top: -7px;
        right: -7px;
    }

    .nav-menu li:nth-child(5)::after {
        content: '15+';
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 20px;
        height: 16px;
        background-color: #e41e3f;
        font-size: 10px;
        font-weight: 600;
        border: 1px solid var(--var-gray1--);
        border-radius: .5rem;
        top: -7px;
        right: -11px;
    }

    .left-bar {
        margin-top: 58px;
        height: 93vh;
        width: 21vw;
        padding: 1rem 0 0 1rem;
        position: fixed;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        overflow-y: scroll;
    }

    .left-bar::-webkit-scrollbar {
        width: 0.55rem;
        display: none;
    }

    .left-bar::-webkit-scrollbar-track {
        background: transparent;
        display: flex;
    }

    .left-bar::-webkit-scrollbar-thumb {
        background: rgba(220, 220, 220, 0.397);
        border-radius: 20rem;
    }

    .left-bar:hover::-webkit-scrollbar {
        display: flex;
        opacity: 1;
        transition: .5s;
    }

    .signal {
        width: 2rem;
        height: 2.3rem;
        background-color: var(--var-blue--);
        position: absolute;
        left: -28px;
        top: 1.1rem;
        border-radius: 3px;
    }

    .fa-house {
        color: var(--var-blue--);
    }

    .side-icon {
        padding: .5rem;
        border-radius: .5rem;
        display: flex;
        align-items: center;
        gap: .8rem;
    }

    .side-icon2 {
        padding: .4rem .2rem;
        border-radius: .5rem;
        display: flex;
        align-items: center;
        gap: .5rem;
    }

    .side-icon2:hover .circle-container {
        background-color: rgba(220, 220, 220, 0.178);
    }

    .circle-container {
        background-color: var(--var-gray4--);
        border-radius: 50vw;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 1.8rem;
        height: 1.8rem;
    }

    .circle-container2 {
        border-radius: 50vw;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 1.8rem;
        height: 1.8rem;
    }

    .side-icon2 .circle-container img {
        width: .9rem;
    }

    .side-icon img, .side-icon2 img {
        width: 1.5rem;
    }

    .home-icon font {
        font-weight: 400;
    }

    .links {
        line-height: 1;
        margin-top: .5rem;
        padding: 1rem 0;
    }

    .links span, .links p, .links a {
        color: gainsboro;
    }

    .fp {
        position: relative;
    }

    .fp::after {
        content: '';
        width: 9px;
        height: 9px;
        position: absolute;
        top: -4px;
        right: -4px;
        background-color: var(--var-blue--);
        border: 2px solid var(--var-gray4--);
        border-radius: 50%;
    }

    .fp img {
        border-radius: .5rem;
    }

    .links a:hover {
        text-decoration: underline;
    }

    main {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding: 4rem 0 1rem 0;
    }

    .stories-wrapper {
        position: relative;
    }

    .stories-header {
        padding: .2rem 1rem;
        justify-content: space-around;
        width: 100%;
        border-bottom: 1px solid #3e404257;
        position: relative;
    }

    .stories-header li {
        width: 100%;
        text-align: center;
        border-radius: .5rem;
        padding: 1rem;
        cursor: pointer;
    }

    .stories-header li:first-child a {
        color: var(--var-blue--);
        font-weight: 500;
    }

    .border-blue {
        height: 3px;
        width: 31%;
        background-color: var(--var-blue--);
        position: absolute;
        bottom: 0;
        border-radius: 5px 5px 0 0;
        left: 1rem;
    }

    .stories-scroll {
        height: 14.5rem;
        width: 100%;
        overflow-x: scroll;
        position: relative;

        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
    }

    .stories-scroll::-webkit-scrollbar {
        display: none;
    }

    .stories-container {
        gap: .5rem;
        height: 14.5rem;
        width: 61.5rem;
        position: absolute;
        left: 0;
        padding: 1rem;
        justify-content: flex-start;
    }

    .stories {
        width: 10rem;
        height: 100%;
        border-radius: 1rem;
        overflow: hidden;
        position: relative;
        box-shadow: 0 .6px 2px var(--var-gray2--);
        height: 100%;
    }

    .stories-container .stories p {
        text-align: left;
        width: 100%;
        line-height: 1;
    }

    .stories p small {
        font-weight: bold;
        color: white;
        letter-spacing: .5px;
        position: absolute;
        bottom: .7rem;
        left: .7rem;
        text-shadow: 0px 1px 4px black;

    }

    .btn-prev {
        position: absolute;
        left: 1rem;
        bottom: 6rem;
        width: 3rem;
        height: 3rem;
        transform: rotate(180deg);
        display: none;
        z-index: -5;
        transition: .5s;
    }

    .btn-next {
        position: absolute;
        right: 1rem;
        bottom: 6rem;
        width: 3rem;
        height: 3rem;
    }

    .story:hover {
        scale: 1.1;
        background-color: rgba(0, 0, 0, 0.226);
        background-blend-mode: multiply;
    }

    .story {
        border-radius: 1rem;
        cursor: pointer;
        transition: .5s;
    }

    .create-story {
        background-image: url(images/dp-story.jpg);
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 75%;
        border-radius: 0;
        position: relative;
        z-index: 2;
    }

    .story-1 {
        background-image: url(images/Seth.jpeg);
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100%;
    }

    .story-2 {
        background-image: url(images/Pancho.jpg);
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100%;
    }

    .story-3 {
        background-image: url(images/Nathaniel.jpeg);
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100%;
    }

    .story-4 {
        background-image: url(images/Bryle.jpeg);
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100%;
    }

    .story-5 {
        background-image: url(images/Earl.jpeg);
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100%;
    }

    .story-6 {
        background-image: url(images/Tracy.jpeg);
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100%;
    }

    .story-7 {
        background-image: url(images/Steph.jpg);
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100%;
    }

    .create-container {
        height: 25%;
        position: absolute;
        bottom: 0;
        background-color: var(--var-gray1--);
        width: 100%;
        display: flex;
        justify-content: center;
        z-index: 2;
    }

    .create-container p small {
        bottom: .7rem;
        left: 1rem;
    }

    .plus-story {
        position: absolute;
        height: 2.4rem;
        width: 2.4rem;
        bottom: 2rem;
        background-color: #0084ff;
        border: 4px solid var(--var-gray1--);
        z-index: 2;
    }

    .newsfeed .status {
        width: 100%;
    }

    .newsfeed .mind {
        width: 95%;
        padding: .3rem 0;
    }

    .mind-input {
        width: 100%;
        color: grey;

    }

    .mind-input input {
        border: none;
        width: 100%;
        border-radius: 10vw;
        height: 100%;
        font-size: 1.1rem;
        font-weight: lighter;
        background-color: transparent;
        padding: .7rem 1rem .5rem .8rem;
        color: white;
        background-color: #3a3b3c;
    }

    #com-react img {
        width: 1.2rem;
    }

    .newsfeed .border-bot {
        width: 94%;
        padding-inline: 0;
        border-bottom: 1px solid var(--var-gray4--);
    }

    .newsfeed .mind .interact-icons {
        padding: .5rem 1rem;
        width: 100%;
        border-radius: 5px;
        cursor: pointer;
    }

    .newsfeed .mind .interact-icons img {
        width: 1.5rem;
    }

    .newsfeed .mind .interact-icons:hover {
        background-color: var(--var-gray4--);
    }

    .newsfeed {
        background-color: #242526;
        border-radius: .5rem;
        width: clamp(490px, 37%, 770px);
        margin: 0 auto;
        margin-top: 1rem;
    }

    .newsfeed p, .newsfeed small, .stories-header a {
        color: rgb(187, 185, 185);
    }

    .news-header {
        color: white;
        width: 100%;
        padding: 1rem;
        justify-content: space-between;
    }

    .dp-name {
        margin-top: -.5rem;
    }

    .dp-name p {
        color: white;
    }

    .news-dp {
        margin-right: .5rem;
        border-radius: 50%;
    }

    .news-dp img {
        width: 2.5rem;
        border-radius: 50%;
    }

    .under-name {
        gap: .5rem;
        justify-content: flex-start;
    }

    .news-icon {
        width: .8rem;
    }

    .dot-menu {
        width: 50%;
        display: flex;
        justify-content: flex-end;
        padding: .5rem;
    }

    .post img {
        width: 100%;
    }

    .news-footer {
        width: 100%;
    }

    .likes {
        border-bottom: 1px solid var(--var-gray4--);
        width: 93%;
        justify-content: space-between;
        padding: 1rem 0;
    }

    .like-icon {
        width: 1.2rem;
        height: 1.2rem;
        background-image: url(images/like.png);
        background-size: cover;
        background-repeat: no-repeat;
    }

    .like-container.active .like-icon {
        width: 1.2rem;
        height: 1.2rem;
        background-image: url(images/like-blue.png);
        background-size: cover;
        background-repeat: no-repeat;
        animation: trigger ease-out 500ms;
    }

    .like-container.active .like {
        color: #0084ff;
    }

    .react-quan.activequan::before {
        content: "You and ";
    }

    .react-quan.activequan::after {
        content: " others";
    }

    @keyframes trigger {
        50% {
            transform: rotate(-20deg);
            scale: 1.2;
        }
        100% {
            transform: rotate(0deg);
        }
    }

    .interact {
        width: 80%;
        justify-content: space-between;
        padding: 1rem;
    }

    .interact-icons {
        gap: .5rem;
        justify-content: center;
        align-items: center;
    }

    .interact-icons img {
        width: 1.2rem;
    }

    .comments {
        gap: .5rem;
    }

    .paragraph-box {
        padding-bottom: 0;
    }

    .paragraph {
        padding: .3rem 1rem .8rem 1rem;
        width: 100%;
    }

    .paragraph p {
        color: white;
    }

    .post-container {
        display: flex;
        background-color: var(--var-gray2--);
        margin-top: 0;
        flex-direction: column;
        flex-direction: column-reverse;
    }

    .new-post {
        width: 100%;
        display: flex;
        flex-direction: column;
        border-radius: .5rem;
        margin-top: 1rem;
        background-color: var(--var-gray1--);
    }

    .newsfeed .post-par {
        font-size: 1.5rem;
    }

    .new-post .likes {
        padding-top: 0;
    }

    .dot-menu {
        position: relative;
        width: 2.2rem;
        height: 2.2rem;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .dot-menu img {
        width: 1rem;
    }

    .del-post {
        display: none;
    }

    .dot-menu.active .del-post {
        position: absolute;
        bottom: -2.1rem;
        background-color: var(--var-gray1--);
        color: gainsboro;
        border-radius: .5rem;
        width: 6.1rem;
        padding: .3rem .5rem .5rem .5rem;
        box-shadow: 0 1px 2px black;
        display: flex;
        gap: 5px;
        align-items: center;
        justify-content: center;
    }

    .del-post i {
        font-size: 8px;
        padding: 2px 4px;
        border-radius: 3px;
        margin-top: 2px;
        border: 1px solid white;
    }

    .dot-menu.active .triangle {
        position: absolute;
        width: 1rem;
        height: 1rem;
        bottom: -1rem;
        transform: rotate(45deg);
        background-color: var(--var-gray1--);
        box-shadow: 0 0 5px black;
        border-radius: 4px;
        display: flex;
    }

    /* ================ */

    .attention {
        width: 100%;
    }

    .portfolio {
        color: var(--var-blue--);
    }

    .aespa {
        width: 100%;
        height: 100%;
        background-color: black;
    }

    .aespa img {
        width: 80%;
    }

    .circle-edit {
        background-color: var(--var-gray4--);
        border-radius: 50vw;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 3rem;
        height: 3rem;
        position: fixed;
        bottom: 1rem;
        right: 1rem;
        z-index: 1;
    }

    .circle-edit img {
        width: 1.3rem;
    }

    .circle-edit:hover {
        cursor: pointer;
    }

    .circle-edit .edit-icon-des {
        background-color: rgba(255, 255, 255, 0.719);
        position: absolute;
        right: 3rem;
        width: 6.6rem;
        padding: .3rem .7rem .5rem .7rem;
        border-radius: .5rem;
        display: none;
    }

    .circle-edit:hover .edit-icon-des {
        display: block;
    }

    .right-bar {
        margin-top: 60px;
        height: 91vh;
        width: 315px;
        padding: 1rem 1rem;
        position: fixed;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        overflow-y: scroll;
        overflow-x: hidden;
        right: .3rem;
        top: 0;
    }

    .right-bar > div {
        width: 290px
    }

    .rightbar-title {
        padding: .5rem;
        font-size: 1.1rem;
    }

    .right-bar::-webkit-scrollbar {
        width: 0.55rem;
        right: 0;
        top: 0;
        display: none;
        position: absolute;
    }

    .right-bar::-webkit-scrollbar-track {
        background: transparent;
        position: absolute;
        display: flex;
    }

    .right-bar::-webkit-scrollbar-thumb {
        background: rgba(220, 220, 220, 0.397);
        border-radius: 20rem;
    }

    .right-bar:hover::-webkit-scrollbar {
        display: flex;
        animation: fade-out 20s linear;
        animation-delay: -20s;
        opacity: 1;
        transition-delay: 200ms;
    }

    @keyframes fade-out {
        1% {
            opacity: 1;
        }
        40% {
            opacity: 0.6;
        }
        80% {
            opacity: 0.3;
        }
        100% {
            opacity: 0;
        }
    }

    /* ... (Your other CSS styles) ... */

    /* Popup Container */
    .popup {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4); /* Semi-transparent background */
        justify-content: center; /* Center the content vertically and horizontally */
        align-items: center;
    }

    .popup-content {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Subtle shadow */
        text-align: center; /* Center text within the popup */
    }

    .popup-buttons {
        display: flex; /* Arrange buttons horizontally */
        justify-content: space-around; /* Space buttons evenly */
        margin-top: 20px;
    }

    /* Sign Out Button */
    #confirmSignOut {
        background-color: #dc3545; /* Red color */
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }

    /* Cancel Button */
    #cancelSignOut {
        background-color: #6c757d; /* Gray color */
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }


    .ads {
        justify-content: space-between;
        border-radius: .5rem;
        padding: .5rem;
        width: 100%;
        cursor: pointer;
    }

    .ads img {
        border-radius: .5rem;
        width: 6.5rem;
    }

    .ad-p {
        text-align: left;
        padding: 1rem;
        width: 100%;
    }

    .friend-img {
        position: relative;
        border-radius: 100%;
    }

    .friend-img::after {
        content: '';
        position: absolute;
        bottom: 1px;
        right: -2px;

        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #10b981;
        border: 2px solid var(--var-gray2--);
        border-radius: 50%;
        width: 7px;
        height: 7px;
        font-size: 11px;
        font-weight: 600;

    }

    .friend-req {
        justify-content: space-between;
    }

    .friend-req a {
        color: var(--var-blue--);
    }

    .friend-deactfp img {
        width: 4.8rem;
        border-radius: 100%;
    }

    .friend img {
        height: 1.5rem;
        object-fit: cover;
        border-radius: 100%;

    }

    .friend-des {
        width: 100%;
        gap: .5rem;
        padding-left: .5rem;
    }

    .friend-name {
        width: 100%;
        justify-content: space-between;
    }

    button {
        width: 100%;
        padding: .5rem;
        border-radius: .5rem;
        border: none;
        cursor: pointer;
    }

    .btn {
        gap: .4rem;
    }

    .btn button:first-child {
        background-color: var(--var-blue--);
    }

    .btn button:last-child {
        background-color: var(--var-gray4--);
    }

    .friend:hover button:last-child {
        background-color: rgba(220, 220, 220, 0.445);
    }

    .contact-title img {
        width: 1.2rem;
    }

    .contacts {
        padding: .6rem;
    }

    .contacts img {
        width: 1.5rem;
        border-radius: 10vw;
    }

    .toast {
        position: fixed;
        background-color: var(--var-gray3--);
        left: 1.2rem;
        bottom: 1rem;
        padding: 1.2rem 1.5rem;
        border-radius: .5rem;
        visibility: hidden;
        transition: .2s;
        display: flex;
        align-items: center;
        gap: 1rem;
        justify-content: center;
    }

    .toast i {
        cursor: pointer;
        font-size: 12px;
        height: 2rem;
        width: 2rem;
        border-radius: 50%;
        display: grid;
        place-items: center;
    }

    .toast i:hover {
        color: black;
    }

    .toast.active {
        visibility: visible;
        bottom: 1rem;
    }

    @media (max-width: 1160px) {
        .left-bar {
            width: 68px;
            border-right: 2px solid var(--var-gray4--);
        }

        .left-bar font, .left-bar .links {
            display: none;
        }

        .newsfeed {
            margin-inline: 0 14rem;
        }

    }

    @media (max-width: 899px) {
        .right-bar {
            display: none;
        }

        .newsfeed {
            margin-inline: 4rem 0;
        }
    }

    @media (max-width: 700px) {
        .nav-menu {
            display: flex;
        }

        .main {
            margin-top: 2rem;
        }

        .left-bar, .right-bar, .top-menu, .circle-edit, .ii1, .ii3 {
            display: none;
        }

        .toggle-menu {
            display: flex;
            position: absolute;
            right: 1rem;
        }

        header {
            width: 100vw;
        }

        .search {
            width: 2.6rem;
            position: absolute;
            right: 4rem;

        }

        .search_icon {
            position: absolute;
            top: .8rem;
            left: .8rem;
        }

        .flex-column .header-whats {
            flex-direction: row;
            padding: 0 1rem;
        }

        .dot-menu.active .del-post {
            right: .3rem;
        }

        .newsfeed .mind {
            flex-direction: column;
            width: 4rem;
            padding: 0;
        }

        .newsfeed .share {
            flex-direction: row;
            width: 95%;
        }

        .ii2 {
            flex-direction: column;
        }

        .newsfeed .border-bot {
            border-bottom: none;
        }

        .newsfeed {
            width: 100%;
            border-radius: 0;
            border-top: 1px solid var(--var-gray4--);
            margin-inline: auto;
        }

        .post-container {
            border-top: 0;
        }

        .new-post {
            border-top: 1px solid var(--var-gray4--);
            border-radius: 0;
        }
    }
</style>