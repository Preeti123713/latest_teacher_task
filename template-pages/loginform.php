<?php
/* Template Name: Login */

require_once('wp-load.php');

if (is_user_logged_in()) {
    $current_user = wp_get_current_user();
    echo "Welcome to the member's area, " . esc_html($current_user->user_login) . "!";
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && isset($_POST['password'])) {
        $email = sanitize_email($_POST['email']);
        $password = $_POST['password'];

        $creds = array(
            'user_login'    => $email,
            'user_password' => $password,
            'remember'      => true
        );

        $user = wp_signon($creds, false);

        if (is_wp_error($user)) {
            echo $user->get_error_message();
        } else {
            echo "Login successful";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <title>Online Teaching Platform</title>
    <!---we had linked our css file----->
    <style>
      *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.full-page
{
    height: 100%;
	width: 100%;
	/* background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("<?php //echo get_stylesheet_directory_uri();?>template-pages/images/bg-2.jpg"); */
  background-color: #f3c693;
  background-position: center;
	background-size: cover;
	position: absolute;
}
.navbar
{
    display: flex;
    align-items: center;
    padding: 20px;
    padding-left: 50px;
    padding-right: 30px;
    padding-top: 50px;
}
nav
{
    flex: 1;
    text-align: right;
}
nav ul 
{
    display: inline-block;
    list-style: none;
}
nav ul li
{
    display: inline-block;
    margin-right: 70px;
}
nav ul li a
{
    text-decoration: none;
    font-size: 20px;
    color: white;
    font-family: sans-serif;
}
nav ul li button
{
    font-size: 20px;
    color: white;
    outline: none;
    border: none;
    background: transparent;
    cursor: pointer;
    font-family: sans-serif;
}
nav ul li button:hover
{
    color: aqua;
}
nav ul li a:hover
{
    color: aqua;
}
a
{
    text-decoration: none;
    color: palevioletred;
    font-size: 28px;
}
#login-form
{
    display: none;
}
.form-box
{
    width:380px;
	height:480px;
	position:relative;
	margin:2% auto;
	background:rgba(0,0,0,0.3);
	padding:10px;
    overflow: hidden;
}
.button-box
{
	width:220px;
	margin:35px auto;
	position:relative;
	box-shadow: 0 0 20px 9px #ff61241f;
	border-radius: 30px;
}
.toggle-btn
{
	padding:10px 30px;
	cursor:pointer;
	background:transparent;
	border:0;
	outline: none;
	position: relative;
}
#btn
{
	top: 0;
	left:0;
	position: absolute;
	width: 110px;
	height: 100%;
	background: #F3C693;
	border-radius: 30px;
	transition: .5s;
}
.input-group-login
{
	top: 150px;
	position:absolute;
	width:280px;
	transition:.5s;
}
.input-group-register
{
    top: 120px;
	position:absolute;
	width:280px;
	transition:.5s;
}
.input-field
{
	width: 100%;
	padding:10px 0;
	margin:5px 0;
	border-left:0;
	border-top:0;
	border-right:0;
	border-bottom: 1px solid #999;
	outline:none;
	background: transparent;
}
.submit-btn
{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: #F3C693;
	border: 0;
	outline: none;
	border-radius: 30px;
}
.check-box
{
	margin: 30px 10px 34px 0;
}
span
{
	color:#777;
	font-size:12px;
	bottom:68px;
	position:absolute;
}
#login
{
	left:50px;
}
#login input
{
	color:white;
	font-size:15;
}
#register
{
	left:450px;
}
#register input
{
	color:white;
	font-size: 15;
}
</style>
</head>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href='website.html'>Online Teaching Platform</a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li></ul>
				</nav></div>
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login' method="post" action="">
                    <input type='text' name="email"class='input-field'placeholder='Email Id' required >
		    <input type='password' name="password" class='input-field'placeholder='Enter Password' required>
		    <input type='checkbox'class='check-box'><span>Remember Password</span>
		    <button type='submit'class='submit-btn'>Log in</button>
		 </form>
		 <form id='register' class='input-group-register' method="post">
		     <input type='text'class='input-field'placeholder='First Name' name="first_name" required>
		     <input type='text'class='input-field'placeholder='Last Name 'name="last_name" required>
		     <input type='email'class='input-field'placeholder='Email Id' name="email" required>
		     <input type='password'class='input-field'placeholder='Enter Password' name="password" required>
		     <input type='password'class='input-field'placeholder='Confirm Password' name="confirm_password"  required>
		     <input type='checkbox'class='check-box'><span>I agree to the terms and conditions</span>
                    <button type='submit'class='submit-btn'>Register</button>
	         </form>
            </div>
        </div>
		<div class="billing" id="billing-form">
            <form action="">
                <label>Name</label>
                <input type="text" name="name" value="" required><br><br>
                <label>Total Amount</label>
                <input type="number" name="amount" value="" required><br><br>
                <label>Card Number</label>
                <input type="number" name="card number" value="" required><br><br>
                <label>CVC</label>
                <input type="number" name="cvc" value="" required><br><br>
                <label>Expiry Date</label>
                <input type="number" name="expiry" value="" required><br><br>
                <button type="submit" value="Submit">Submit</button>
            </form>			
        </div>
    </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>