<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>

<body 
    <div id="box">
    <div style="font-size: 20px; margin: 10px;">Login</div>
        <form action="" method="post">
            <input id="text" type="text" name="user_name" id=""> <br><br>
            <input id="text" type="password" name="password" id=""> <br><br>
            <input id="button" type="Submit" value="Login" id=""> <br><br>

            <a href="signup.php">Click to Sign up</a> <br><br>
        </form>
    </div>
    </div>
    

    <style>
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 50%;
		padding: 20px;
	}

	</style>
</body>
</html>