<!DOCTYPE html>
<html>
<head>
<title> SIGN UP </title>
<link rel="stylesheet" type="text/css" href="sginupstyle.css">
</head>
<body>
    <form action="sginupphp.php" method="post">
        <h2>SIGN UP</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>
           
            
        
            <label> User Name </label>
            <input type="text" name="uname" placeholder="User Name "><br>
        
            <label> password </label>
            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit">Sign Up</button>
         
            <a href="index.php">have one !</a>

    </form>
</body>
</html>