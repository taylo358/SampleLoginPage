<?php
     session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>    
<link rel="stylesheet" href="css/style.css">    
</head>
    
<body style="background-color:#95a5a6">
    
    <div id="main-wrapper">
        <center>
            <h2>Login Form</h2>
            <h3>Welcome 
                <?php echo $_SESSION['username'] ?>
            </h3>
            <img src="#" class="avatar"/>
        </center>
        
        <form class="myform" action="homepage.php" method="post">
          
            <input name="logout" type="submit" id="logout_btn" value="Log Out"/><br>
            
        </form>
        
        <?php
            if(isset($_POST['logout']))
            {
                session_destroy();
                header('location:index.php');
            }
        ?>
    </div>
    
    
    
</body>
</html>