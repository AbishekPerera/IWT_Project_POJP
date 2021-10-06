<?php
include 'header.php';
?>


<div class="loginfm" style="width: 100%; height: 700px; background-image: url('images/abishek_images/login/loginpage.jpg')">

    <div class=loginform>

        <form action="#">
            <h2>
                Login
            </h2>
            <div class="loginbox">
                <input type="text" required>
                <span>User Name</span>
            </div>

            <div class="loginbox">
                <input type="password" required>
                <span>Password</span>
            </div>

            <div class="loginsubmit">
                <button type="submit">Login</button>
            </div>

            <div class="loginremember">
            <span>New</span> <span class="pwd"><a href="#">User?</a></span>
            </div>

            <div class="logincancel">
                <button type="button" class="cancelbtn">Cancel</button>
                <span>Forgot</span> <span class="pwd"><a href="#">password?</a></span>
            </div>



        </form>



    </div>









</div>

<?php
include 'footer.php';
?>