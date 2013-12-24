<html>
	<head>
		<title>Registration Form</title>
	                <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script> <!--jquery link for floating menu--->
		        <style type='text/css'> /*Cascading style sheet for the form design*/
			        .center
			        {
			          
				        font-size:200%;
				        margin:auto;
				        width:30%;
			        }
			        body /* Background color*/
			        {
				        background-color:#FFF;
			         }


                                .newspaper
                                {
                                -moz-column-count:2; /* Firefox */


                                -moz-column-gap:450px; /* Firefox */

                                }


	  	        </style>
	                <script type='text/javascript'>
                                $(function() {
		                        // Stick the #nav to the top of the window
		                        var nav = $('#nav');
		                        var navHomeY = nav.offset().top;
		                        var isFixed = false;
		                        var $w = $(window);
		                        $w.scroll(function() {
		                                    var scrollTop = $w.scrollTop();
		                                    var shouldBeFixed = scrollTop > navHomeY;
		                                    if (shouldBeFixed && !isFixed) {
		                                                nav.css({
		                                                    position: 'fixed',
		                                                    top: 6,
		                                                    left: nav.offset().left,
		                                                    width: nav.width()
		                                                });
		                                                isFixed = true;
		                                     }
		                                     else if (!shouldBeFixed && isFixed) {
		                                                nav.css({
		                                                        position: 'static'
		                                                });
		                                                isFixed = false;
		                                     }
		                          });
	                        });


	                </script>
	                <script>
/* Function for Enter key to move to next field*/ 
function keydown(e,s){
	if (!e) var e = window.event;
	if (e.keyCode) code = e.keyCode;        
	else if (e.which) code = e.which;
	if (code==13){
		document.getElementById(s).focus();
	}
}
</script>

<script>
/* Function to go from subgroupname to groupname by Up arrow */ 
function jumptoemailid()
{
	var x=document.getElementById("gender").selectedIndex;
	var y=document.getElementById("gender").options;
	if(y[x].index==0){
	if (code==38){
		document.getElementById('email').focus();
	}
   }

}
</script>
<script>
/* Function to go from search account by to accountname & account code by Down arrow*/ 
function jumptoemaili()
{
	var x=document.getElementById("searchacc_by").selectedIndex;
	var y=document.getElementById("searchacc_by").options;
	if(y[x].index==2){
		if (code==13){
			document.getElementById('account_name').focus();
		}
        }
	else{
		if (code==13){
			document.getElementById('accountcode_search').focus();
	        }
        }

}
</script>
<script>
/* Function for Down arrow to move to next field*/ 
function keydowns(e,s){
	if (!e) var e = window.event;
	if (e.keyCode) code = e.keyCode;
	else if (e.which) code = e.which;
	if (code==40){
		document.getElementById(s).focus();
	}
}
</script>

<script>
/* Function to go from accountname to search account by Up arrow*/ 
function accnametosearch()
{
	var x=document.getElementById("account_name").selectedIndex;
	var y=document.getElementById("account_name").options;
	if(y[x].index==0){
		if (code==38){
			document.getElementById('searchacc_by').focus();
	        }
        }

}
</script>

<script>
//create a function that accepts an input variable (which key was key pressed)
function disableEnterKey(e)
{
 
//create a variable to hold the number of the key that was pressed     
	var key;

	//if the users browser is internet explorer
	if(window.event)
	{
		//store the key code (Key number) of the pressed key
		key = window.event.keyCode;

	//otherwise, it is firefox
	} 
	else 
	{
		//store the key code (Key number) of the pressed key
		key = e.which;     
	}

	//if key 13 is pressed (the enter key)
	if(key == 13)
	{
		//do nothing
		return false;
	      
    //otherwise
    	} 
	else 
	{
      
	    //continue as normal (allow the key press for keys other than "enter")
	    return true;
    	}
      
	//and don't forget to close the function    
	
	keydown(e,s);
}
</script>
<script>
/* Function for Up arrow to move to previous field*/ 
function keyup(e,s){
	if (!e) var e = window.event;
	if (e.keyCode) code = e.keyCode;
	else if (e.which) code = e.which;
	if (code==38){
		document.getElementById(s).focus();
	}
}
</script>
                </head>
<body>
  
    <!-- The header code, including the menu -->
  
    
            <div id="nav">
               <div class="center">
			<form action="http://localhost/simpleform.php" method="post" name="regform" id="regform">
				<table>
					<tr>
						<td><font color="black">Firstname *:</td><td> <input type="text" id="FirstName" style = "background:#FFD700;Height:29px;Width: 200px;font-size:18px;" onkeyup="keydown(event,'user_id')" onKeydown="return disableEnterKey(event)"  name="FirstName"  value=<?php echo '"', $_POST["name"], '"' ?>required/> </td>
					</tr>	
					<tr>
						<td><font color="">User Name *:</td><td><input type="text" name="user_id" id="user_id" onfocus="OnFocusIt(this)" onblur="OutFocusIt(this)" style = "background:#FFD700;Height:29px;Width: 200px;font-size:18px;" onkeyup="keydown(event,'password')" onKeydown="return disableEnterKey(event)" required/></td>
					</tr>
					<tr>
						<td><font color="black">Password *:</td><td><input type="password" id="password" style = "background:#FFD700;Height:29px;Width: 200px;font-size:18px;" onkeyup="keydown(event,'password')" onKeydown="return disableEnterKey(event)" name="password"  required/></td>
					</tr>		
					<tr>    <td><font color="black">Mobile Number *:</td><td><input type="text" style = "background:#FFD700;Height:29px;Width: 200px;font-size:18px;" onkeyup="keydown(event,'password')" onKeydown="return disableEnterKey(event)" name="mobile_number" value=<?php echo '"', $_POST["mobile_number"], '"' ?> required/></td>
					</tr>		
					<tr>    <td><font color="black">Email Id *:</td><td><input type="email" id="email" style = "background:#FFD700;Height:29px;Width: 200px;font-size:18px;" onkeyup="keydown(event,'password')" onKeydown="return disableEnterKey(event)" name="email_id" value=<?php echo '"', $_POST["email_id"], '"' ?> required/></td>
					</tr>
					<td colspan="1"><label for="gender" id="gender">&nbsp;&nbsp;&nbsp;&nbsp;<font size = "3">Search Account By: </label></td>
		<td colspan="2">
			<select id="gender" name="gender" onkeypress="jumptoemailid()">
				<option>--Please Select--</option>
				<option>Male</option>
				<option>Female</option>
			</select>
		</td>
					<tr>
						<td><input type="reset" name="reset" id = "reset" value="reset" size="6" /> </td>
						<td><input type="submit" name="register" id ="register" value="register" size="6" /> </td>
				
				
					</tr>
	
				</table>
				

			</form>
			</div>
                <br class="clearLeft" />
            </div>
 
		
	</head>

		
			 <!-- The main page content (just filler for this demo) -->
<p> <font color="black"><div class = "newspaper">
This simple code link is meant to get you started in basics of php/html/css/javascript/mysql.This link instructs you in Php by slowly building and establishing skills through techniques like practice and memorization, then applying them to increasingly difficult problems. You will have the tools needed to begin learning more complex programming topics. I like to tell people that my link gives you your 'programming black belt.' What this means is that you know the basics well enough to now start learning programming.If you work hard, take your time, and build these skills, you will learn to code.</p>

<p>The page has detailed documentation for every line of code. This is basically a simple registration form in php.</p>

<p>One can even have a look at the other features included like floating menu, keyboard shortcuts,css,jquery,javascript,html.</p>

<p>An index.php file, having a Welcome message, 'Welcome to File processing' and two links, 'Register' & 'Login' taking to register.php and login.php details about which are given below.Write register.php that takes Name, User Name, Password, Mobile number and E-mail id as input. Use HTML 5 validation to ensure all fields are mandatory.Upon submitting the form, these details should be written to a file users.txt in a newline as colon separated values and message 'Dear User, Thank you for enrolling.' message should appear for users returning back to index.php.If the file exist append, else create and keep adding.The User name is unique. Ensure the file doesn't have a line containing same user name as the one being added. If user name already exist, Error message “Same User name exist, Try again with a different one.' must come & other than user name and password all other values must be retained back in the form.Write login.php that takes User name and Password as inputs (they are mandatory fields) & when submitted it accesses the file to check is user name exist in lines and if exist the password is right.

Hint: Loop through lines, Use explode() to store user name and pass word as an associative array first, Use array_key_exist() to check if user name exist, then compare password.

If credentials are right then take to a user.php else return to same page displaying error message 'Bad Credentials'.

The user.php displays a welcome message 'Welcome User. Thank you for visiting back.' has a link to profile.php as Profile and password_change.php as Change Password

Upon clicking Profile returns fields Name, Mobile number and E-mail ID with their values for the User logged in, read from the file. An update button that will update the corresponding line in the file & return to user.php with success message 'Profile successfully updated'.

Upon clicking Change Password, will return a form asking for current password & new password and searches the file, verifies that the current password matches and if so updates the line with the new password and returns back to user.php with success message, 'Password successfully updated' else returns to password_change.php saying 'Current password is wrong'.

Hint: Use a hidden field to store User ID after logging in, using with the file can be searched for details.
An index.php file, having a Welcome message, 'Welcome to File processing' and two links, 'Register' & 'Login' taking to register.php and login.php details about which are given below.
Write register.php that takes Name, User Name, Password, Mobile number and E-mail id as input. Use HTML 5 validation to ensure all fields are mandatory.
Upon submitting the form, these details should be written to a file users.txt in a newline as colon separated values and message 'Dear User, Thank you for enrolling.' message should appear for users returning back to index.php. 
If the file exist append, else create and keep adding. 
The User name is unique. Ensure the file doesn't have a line containing same user name as the one being added. If user name already exist, Error message 'Same User name exist, Try again with a different one.' must come & other than user name and password all other values must be retained back in the form.
Write login.php that takes User name and Password as inputs (they are mandatory fields) & when submitted it accesses the file to check is user name exist in lines and if exist the password is right.
Hint: Loop through lines, Use explode() to store user name and pass word as an associative array first, Use array_key_exist() to check if user name exist, then compare password
If credentials are right then take to a user.php else return to same page displaying error message 'Bad Credentials'.
The user.php displays a welcome message 'Welcome User. Thank you for visiting back.' has a link to profile.php as Profile and password_change.php as Change Password
Upon clicking Profile returns fields Name, Mobile number and E-mail ID with their values for the User logged in, read from the file. An update button that will update the corresponding line in the file & return to user.php with success message 'Profile successfully updated'.
Upon clicking Change Password, will return a form asking for current password & new password and searches the file, verifies that the current password matches and if so updates the line with the new password and returns back to user.php with success message, 'Password successfully updated” else returns to password_change.php saying 'Current password is wrong'.
Hint: Use a hidden field to store User ID after logging in, using with the file can be searched for details
</p>
</body>
</html>

