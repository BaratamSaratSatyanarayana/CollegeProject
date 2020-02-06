<!DOCTYPE html>
<html>
    <head>
         <meta name="viewport" content="width=1024">
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
	
    <body>

        <form action="register.php" onsubmit="return Validate()" class="w3-container w3-card-4 w3-light-grey w3-text-yellow w3-margin" enctype="multipart/form-data" method="POST" name="vform">
                                
								<h2 class="w3-center">Register</h2>

         <div class="w3-row-padding w3-section-border" style="width:150%;margin-left:0.1%">
		 
		   <div class="w3-half">
                   <select class="w3-select" name="salut" required="true">
                       <option  value="" disabled selected>Salutation</option>
                       <option value="1">Mr.</option>
                       <option value="2">Mrs.</option>
                       <option value="3">Miss.</option>
                   </select>
                                <div style="margin-top:1%"></div>
		           <select class="w3-select" name="str" required="true">
			          <option  value="" disabled selected>Stream</option>
			          <option value="1">B.tech</option>
			          <option value="2">M.tech</option>
			          <option value="3">MBA</option>
		           </select>
         </div>
		 <div class="w3-half">
		   
<br>
<table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
<tbody><tr>
<td>
<input name="image" type="file" required="true">
</td>

</tr>
</tbody></table>


</div>
</div> 
		 
         <div class="w3-row-padding w3-section">
		 
              <div class="w3-half" >
                         <input class="w3-input w3-border" name="first" required="true" type="text"  autocomplete="off" placeholder="First Name"> 
			  </div>
					    
	          <div class="w3-half">
			              <input class="w3-input w3-border" name="last" type="text" required="true" autocomplete="off"  placeholder="Last Name">
              </div>
					
		  </div>
<div class="w3-row-padding w3-section">
    <div class="w3-half">
      <input class="w3-input w3-border" name="Qualification" type="text" required="true" autocomplete="off" placeholder="Qualification">
    </div>
	    <div class="w3-half">
      <input class="w3-input w3-border" name="Designation" type="text" required="true" autocomplete="off"placeholder="Designation">
    </div>
</div>

<div class="w3-row-padding w3-section">
	<div class="w3-half">
      <input class="w3-input w3-border" name="email" type="email" placeholder="Email"autocomplete="off" required="true">
    </div>
	<div class="w3-half">
	  <div id="phone_div">
      <input class="w3-input w3-border" name="phonenum" type="number" placeholder="Mobile Number" autocomplete="off" required="true">
      <div id="phone_error"></div>
	</div>
	</div>
</div>

<div class="w3-row-padding w3-section">
	<div class="w3-half">
	  <div id="password_div">
      <input class="w3-input w3-border" name="Password" type="password" placeholder="Password"autocomplete="off" required="true">
      
	 </div>
	</div>
	<div class="w3-half">
	  <div id="pass_confirm_div">
      <input class="w3-input w3-border" name="Confirm_Password" type="password" placeholder="Confirm Password" autocomplete="off"required="true">
          	   <div id="password_error"></div>
	   </div>
	</div>
</div>

<div class="w3-row-padding w3-section">
	<div class="w3-half">
      <input class="w3-input w3-border" name="Employee_Id" type="text" placeholder="Employee Id" autocomplete="off" required="true">
    </div>
	<div class="w3-half">
		<select class="w3-select" name="department" required="true">
			<option value="" disabled selected>Department</option>
			<option value="1">CSE</option>
			<option value="2">ECE</option>
			<option value="3">EEE</option>
			<option value="4">CIV</option>
			<option value="5">MECH</option>
			<option value="6">IT</option>
		</select>
    </div>

<div class="w3-row-padding w3-section-border" >
<button class="w3-button w3-block w3-section w3-yellow w3-ripple w3-padding" type="submit" value="submit" name="submit">Register</button>
</div>

<div class="w3-text-row">
<h4 class="w3-center w3-text-red">Already have an account?<a href="login.php" class="w3-text-yellow" style="text-decoration:none;">Login here!!</a></h4>
</div>
</div>
</form>

</body>
</html> 
 <script src="scripts.js"></script>