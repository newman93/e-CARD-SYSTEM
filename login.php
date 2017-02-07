<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('Philip' => 'paajaf1234');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:admin.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/login.css">
        <script>
            $('.message a').click(function(){
                $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
            });
        </script>
    </head>
    <body>
        <div class="login-page">
            <div class="form">
                <form class="login-form" method="post">
                    <input name="Username" type="text" placeholder="username"/>
                    <input name="Password" type="password" placeholder="password"/>
                    <button name="Submit">LOG IN</button>
                    <?php if(isset($msg)){?>
                        <?php echo $msg;?>
                    <?php } ?>
                </form>
            </div>
        </div>
    </body>
</html>
