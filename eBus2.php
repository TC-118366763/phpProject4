<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
/*
 * Create a session variable for the mobile number 
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;


/**
 * Allocate the mobile number session variable to a text box
 */
 
?>

<!DOCTYPE html>
<html>
	<head>
		<title>eBusiness 2</title>
	</head>
	<body style="background-color:lightblue;background-size:cover">
		<div class="form">
			<form name="Details" method="post" action="Ebus3.php">
                            <h1>Customer Details</h1>
                            <hr/>
				<center>
					<table cellspacing="10">
					<tr>
						<td><b></b></td>
						<td><b>Enter in your details below</b></td>
					</tr>
					<tr>
						<td>Name:</td>
						<td><input type="text" id="txtName" name="txtName" value=""  /></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" id="txtNum" name="txtNum" value=""  /></td>
					</tr>
					
					<tr>
						<td>Pin:</td>
						<td><input type="password" maxlength="4" id="txtPassword" name="txtPassword" value=""  /></td>
					</tr>
					
					<tr>
						
						<td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"  /></td>
					</tr>
				</table>
			</center>
			
		<center>
		
		
				<input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
		</center>
		</div>
		</form>
                    <br>
            <hr/>
            <br>
        <center>
            <div class="form">
                <form name="intBack" method="post" action="consultinghomepage.html">
                <input type="submit" name="btnBack" id="btnBack" onclick="" value="Return to Consulting Services" style="background-color:lightgray; color:black"/>
            </form>
        </div>
        </center>
	</body>
</html>

					
					
					
					
					
					
					
					
					
					
					