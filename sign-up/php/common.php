<?php

// OUTPUT THE HEADER AND OPEN BODY TAG

function output_header($title) {
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <meta charset="utf-8">
        <head>
        <title>' . $title . '</title>
        <link rel="icon" href="../img/icon.ico" sizes="16x16 32x32" type="image/png">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div id="header">
            <img src="../../img/mr-logo.png" id="stopMotionIcon">
            <h1>THE LEGEND OF MIRAI - MMORPG</h1>        
        <script src="../js/header.js"></script>   
        </head>
        <body>';
}

// OUTPUT THE NAVIGATION

function output_navigation($a1, $a2, $a3, $a4, $a5) {
    echo '
    <div class="nav">
        <ul>
            <li id="FAQ"><a class=' . $a1 . ' href="index.php">Rate Our Game</a></li>
            <li id="reg"><a class=' . $a2 . ' href="register.php">Register</a></li>
            <li id="login"><a class=' . $a3 . ' href="login.php">Login</a></li>
            <li id="rank"><a class=' . $a5 . ' href="Download.php">Download</a></li>
        </ul>
    </div>   
    <script src="../js/navigation.js"></script>';
}

// OUTPUT THE TEXT FIELD

function output_content($content, $divid) {
    echo ' 
    <div id='. $divid .'>
        <p>'. $content .'</p>  
    </div>';
}

// OUTPUT THE REGISTRATION FORM

function output_registerForm() {  
    echo '
    
    <i id ="registerEye" onclick="showPassword()" class="fa fa-eye-slash"></i>
    
    <i id ="confirmEye" onclick="showConfirmPassword()" class="fa fa-eye-slash"></i>
    
    <div id="registerForms">
    
        <label><i class="fa fa-user"></i> User ID</label>
        <input type="text" id="IDinput" placeholder="User ID" maxlength="12">
    
        <label><i class="fa fa-envelope"></i> Email</label> 
        <input type="text" id="emailInput" placeholder="Email" maxlength="64">
    
        <label><i class="fa fa-flag"></i> Country</label>
        <input type="text" id="countryInput" placeholder="Country" maxlength="55">
        
        <label><i class="fa fa-phone"></i> Telephone</label>
        <input type="text" id="telephoneInput" placeholder="Telephone" maxlength="18">
        
        <label><i class="fa fa-key"></i> Password</label>
        <input type="password" id="passwordInput" placeholder="Password" maxlength="16">
        
        <label><i class="fa fa-key"></i> Confirm Password</label>
        <input type="password" id="passwordConfirmInput" placeholder="Confirm Password" maxlength="16">
    
        <button id="registerButton" onclick="validation();">Register</button>
    
    </div>
 
    <p id="registerFailure"></p>
    
    <script src="../js/registerform.js"></script>';
}

// OUTPUT THE LOGIN FORM


function output_loginForm() {
    echo '   
    <p id="loggedInUser"></p>
    
    <i id ="loginEye" onclick="showPassword()" class="fa fa-eye-slash"></i>
    
    <div id="loginForms">
    
        <label><i class="fa fa-user"></i> User ID</label>
        <input type="text" id="IDinput" placeholder="User ID" maxlength="12">

        <label><i class="fa fa-key"></i> Password</label>
        <input type="password" id="passwordInput" placeholder="Password" maxlength="16">
        
        <button id="loginButton" onclick="login();" id="buttonEnter">Log In</button>
        
    </div>
    
    <p id="loginFailure"></p>
    
    <script src ="../js/loginform.js"></script>';
}

// OUTPUT SOCIAL MEDIA ICONS

function output_icons() {
    echo '
    <div class="icon-bar">
        <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a> 
        <a href="https://twitter.com" class="twitter"><i class="fa fa-twitter"></i></a> 
        <a href="https://google.com" class="google"><i class="fa fa-google"></i></a> 
        <a href="https://linkedin.com" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="https://bit.ly/3jFPiPz" class="youtube"><i class="fa fa-youtube"></i></a> 
    </div>';
}


// OUTPUT RATING STARS AND PIECHART

function output_feedback() {
    echo '
        <form class="rating-form" action="#" method="post" name="rating-game">
            <fieldset class="form-group"> 
                <div class="form-item">    
                    <input id="rating-5" name="rating" type="radio" value="5" onclick="drawChart(5)" />
                    <label for="rating-5" data-value="5">
                        <span class="rating-star">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star"></i>
                        </span>
                    </label>
                    <input id="rating-4" name="rating" type="radio" value="4" onclick="drawChart(4)" />
                    <label for="rating-4" data-value="4">
                        <span class="rating-star">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star"></i>
                        </span>
                    </label>
                    <input id="rating-3" name="rating" type="radio" value="3" onclick="drawChart(3)" />
                    <label for="rating-3" data-value="3">
                        <span class="rating-star">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star"></i>
                        </span>
                    </label>
                    <input id="rating-2" name="rating" type="radio" value="2" onclick="drawChart(2)" />
                    <label for="rating-2" data-value="2">
                        <span class="rating-star">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star"></i>
                        </span>
                    </label>
                    <input id="rating-1" name="rating" type="radio" value="1" onclick="drawChart(1)" />
                    <label for="rating-1" data-value="1">
                        <span class="rating-star">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star"></i>
                        </span>
                    </label>       
                </div>
            </fieldset>
        </form>
        <div id="piechart"></div>
        <p id="feedbackResult"></p>
        <script src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="../js/rating.js"></script>';
}

// OUTPUT THE FOOTER

function output_footer() {
    echo '
    </body>
    <footer>
        <p>Created by: Anouar Abdallah <br> Contact information: <a href="https://mail.google.com/" target="_blank">anouar.abdallah@polytechnicien.tn</a></p>
    </footer>
</html>';
}

// OUTPUT THE Download

function output_Download() {
    echo '
    <p id="Download"></p>
    <script src="../js/Download.js"></script>';
}

?>