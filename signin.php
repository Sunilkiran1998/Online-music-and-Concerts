<html>
<head></head>
<style>
@import url('https://fonts.googleapis.com/css?family=Nunito+Sans');

body {
  display: flex;
  justify-content: center;
}

.vldform {
    box-sizing: border-box;
    width: 375px;
    display: flex;
    flex-direction: column;
    padding: 35px 55px;
    font-family: "Nunito Sans";
    animation: a .5s;
    animation-fill-mode: forwards;
    border: #d4d4d4 1px solid;
    border-radius: 10px;
    box-shadow: 0 2px 6px 0 hsla(0, 0%, 0%, 0.2);
}

.vldform a {
    text-decoration: none;
}

.vldform h1 {
    font-size: 40px;
    color: #552FAB;
    margin: 0px 0px 26px 0px;
}

.vldform__textbox {
    border: 0;
    outline: 0;
    border-bottom: 2px #512DA8 solid;
    font-size: 18px;
    margin-top: 36px;
    padding-bottom: 9px;
    font-family: "Nunito Sans";
}

.vldform__textbox[type="password"]::after {
    content: " ";
    display: block;
    width: 10px;
    height: 10px;
    background-color: rebeccapurple;
    
}

.vldform__recoverypassword{
    align-self: flex-end;
    margin: 10px 0px;
    font-size: 16px;
    color: #2E67A9;
}

.vldform__button {
    margin-top: 42px;
    height: 50px;
    border: 0;
    color: #fff;
    border-radius: 10px;
    background-image: linear-gradient(#512DA8, #673AB7);
    font-size: 22px;
    font-weight: 600;
    font-family: "Nunito Sans";
    cursor: pointer;
}

.vldform__signup {
    align-self: center;
    margin-top: 50px;
    margin-bottom: 0px;
}

.vldform__signup a {
    color: #6538B5;
    font-weight: 600;
    margin-left: 4px;
}

.vldreg {
    display: none;
}

.vldrecpass {
    display: none;
}

@keyframes a {
    0% {
        opacity: 0;
        transform: translateY(-5px)
    }

    to {
        opacity: 1;
        transform: translateY(5px)
    }
}

@media (max-width: 400px) {
    .vldform {
        width: 350px;
        padding: 20px 40px;
    }
    
}

@media (max-width: 360px) {
    .vldform {
        width: 305px;
        padding: 20px 35px;
    }

    .vldform__signup {
        text-align: center;
    }

    .vldform__signup a {
        margin-left: 14px;
    }
}
</style>
<body>
  <form class="vldform vldauth" id="login-form" action="authen_login.php" method="post">
    <h1>Log in</h1>
    <input class="vldform__textbox" type="text" name="user_name" id="user_name" placeholder="Username" required autocomplete="off">
    <input class="vldform__textbox" type="password" name="user_pass" id="user_pass" placeholder="Password" required autocomplete="off">
   
    <input class="vldform__button" type="submit" value="Log in">
    <p class="vldform__signup">Don't have account?
      <a class="vldform__signuplink" href="#" onclick="showregform()">Sign up</a>
    </p>
  </form>
  <form class="vldform vldreg" action="insert.php" method="post" name="form">
      <h1>Sign up</h1>
      <input class="vldform__textbox" type="text" name="username" placeholder="Username" required autocomplete="off">
      <input class="vldform__textbox" type="password" name="Password"  placeholder="Password" required autocomplete="off">
      <input class="vldform__textbox" type="email" name="email" placeholder="Email" required autocomplete="off">
      
      <input class="vldform__button" type="submit" onclick="return validation()" value="Sign up">
      <p class="vldform__signup">You already have account?
        <a href="#" onclick="showauthform()">Log in</a>
      </p>
  </form>

 
</body>
<script>
function validation()
{
var a = document.form.username.value;
var password = document.form.Password.value;
if(a=="")
{
alert("Please Enter Your Name");
document.form.username.focus();
return false;
}
if(!isNaN(a))
{
alert("Please Enter Only Characters");
document.form.username.select();
return false;
}
if (password.length < 5) 
{
alert("Your Password must atleast contain 5 characters");
document.form.Password.select();
return false;
}
}

function showregform(){
    document.title = "Sign up";
    document.querySelector(".vldauth").style.display = "none";
    document.querySelector(".vldreg").style.display = "flex";
}

function showauthform(){
    document.title = "Log in";
    document.querySelector(".vldauth").style.display = "flex";
    document.querySelector(".vldreg").style.display = "none";
    document.querySelector(".vldrecpass").style.display = "none";
}

function showrecoveryform(){
    document.title = "Password recovery";
    document.querySelector(".vldauth").style.display = "none";
    document.querySelector(".vldrecpass").style.display = "flex";
}

function preventback(){
window.history.forward();
}
setTimeout("preventback()",0);
window.onunload=function(){null};

</script>

</script>