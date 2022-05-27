<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

    <style>
     body
    {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;        min-height: 100vh;
        font-family: 'Jost', sans-serif;
        background: url(background.jpg) no-repeat center/ cover;
    }
    .main
    {
        width: 490px;
        height: 510px;
        overflow: hidden;
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        border-radius: 10px;
        box-shadow: 5px 20px 50px #000;
    }
    #chk
    {
        display: none;
    }
    .signup
    {
        position: relative;
        width:100%;
        height: 100%;
    }
    label
    {
        color: #000;
        font-size: 2.3em;
        justify-content: center;
        display: flex;
        margin: 60px;
        font-weight: bold;
        cursor: pointer;
        transition: .5s ease-in-out;
    }
    input
    {
        width: 60%;
        height: 20px;
        color: black;
        background: #fff;
        justify-content: center;
        display: flex;
        margin: 20px auto;
        padding: 10px;
        border: none;
        outline: none;
        border-radius: 5px;
    }
    
    input::placeholder{
    color: black;
    }
    
    .signup button
    {
        width: 65%;
        height: 50px;
        margin: 10px auto;
        justify-content: center;
        display: block;
        color: rgb(235, 50, 50);
        font-size: 1em;
        font-weight: bold;
        margin-top: 20px;
        outline: none;
        border: none;
        border-radius: 5px;
        transition: .2s ease-in;
        cursor: pointer;
    }
    
    .signup button:hover{
        background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
    }
    .login{
        height: 460px;
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        border-radius: 70% / 10%;
        transform: translateY(-180px);
        transition: .8s ease-in-out;
        
    }
    .login label{
        color: #06861b;
        transform: scale(.6);
    }
    .login button{
        width: 65%;
        height: 50px;
        margin: 10px auto;
        justify-content: center;
        display: block;
        color: rgb(235, 50, 50);
        background: #000;
        font-size: 1em;
        font-weight: bold;
        margin-top: 20px;
        outline: none;
        border: none;
        border-radius: 5px;
        transition: .2s ease-in;
        cursor: pointer;
    }
    
    .login button:hover{
        background: #06690e;
    }
    #chk:checked ~ .login{
        transform: translateY(-500px);
    }
    #chk:checked ~ .login label{
        transform: scale(1);	
    }
    #chk:checked ~ .signup label{
        transform: scale(.6);
}
p  {
    color: black;
    text-align: center;
}
</style>
</head>
<body>
<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
		
			<div class="signup">
				<form method = "POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username" placeholder="Username" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" name="submit">Login</button>
                    <p>Don't have an account? <a href= "signup.php">Sign Up</a></p>
				</form>
			</div>
</div>
			
</body>
</html>