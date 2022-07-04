<?php
include 'header.php';
?>


<div class="loginPromptBody" style="background-image: url('images/abishek_images/loginprompt/loginpromptbg.jpg')">

    <div class="loginPromptPageLogo">
        <img src="images/abishek_images/loginprompt/logo.png" alt="logo">
    </div>

    <div class="loginPromptleft">
        <h1>
            You must login to continue
        </h1>
    </div>

    <div class="loginPromptQ">
        <div class="lpnewUserQ">
            <h4>New User?</h4>
            <a href = "sign.php"><button>Register here</button></a>
        </div>

        <div class="lpnewUserQ">
            <h4>Already registered?</h4>
            <a href = "login.php"><button>Login Here</button><a>
        </div>

    </div>




</div>
<?php
include 'footer.php';
?>