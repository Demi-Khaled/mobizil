<?php
session_start();

if(isset($_SESSION['id'])&&isset($_SESSION['user_name'])){
?>
<!DOCTYPE html>
<html0>
<head>
   
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">

</head>
<body>
    

<h1>Hello,<?php echo $_SESSION['user_name']?></h1>
<a href="logout.php">logout</a>



</body>
</html>

<?php

}
else{

header("location: index.php");
exit();





}?>