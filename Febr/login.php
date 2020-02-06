<?php
session_start();
?>
<!DOCTYPE html>
<html>

<meta name="viewport" content="width=1024">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h3 {
  font-size:20px;
  text-decoration:none;
  margin-left:0;
  text-align: center;
  font-weight: bold;
  color: red;
}
</style>
<body>
<form action="server_1.php" class="w6-container w6-card-4 w6-light-grey w6-text-yellow w6-margin" method="post">
<div class="w3-container w3-center" style="width:50%;margin:12% 0 0 35%;">
  
  <div class="w3-card-4 w3-light-grey w3-center" style="width:50%">

    <div class="w3-container w3-center">
   <h3 class="w3-center" >Login</h3>
      <div class="w3-row-section w3-padding">

      <input class="w3-input w3-border" name="email" type="email" placeholder="Email" autocomplete="off">
		</div>
	<div class="w3-row-section w3-padding">

    <input class="w3-input w3-border" name="password" type="password" placeholder="Password">
    </div>
	
	<div class="w3-row" style="width:90%;margin:0 0 0 5%;">	
	<button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" type="submit" name="login_user">Login</button>	
	</div>
	<div class="w3-row">
<h4 class="w3-center w3-text-red">Don't have an account?<a href="Reg.php" class="w3-text-yellow" style="text-decoration:none;">Register!!</a></h4>
    </div>
</div>
  

</div>
</div>

</form>

 <?php
 
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        die("<h3>$error</h3>");
                    }
                ?>  
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>