<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 3</title>
    </head>
<body style="background-color:lightblue;background-size:cover">
    <h1>Shopping Cart Checkout</h1>
    <hr/>
<!-- //Starting the session to get the session variable from the last page-->
<?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
echo "The name is : ".$fullNameValue.".";
echo "<br></br>";
echo "The total value is : &euro;".$totalValue2.".";
?>
<br>
            <hr/>
            <br>
        <center>
            <div class="form">
                <form name="intCancel" method="post" action="consultinghomepage.html">
                <input type="submit" name="btnCancel" id="btnCancel" onclick="" value="Cancel Transaction" style="background-color:lightgray; color:black"/>
            </form>
        </div>
        </center>
<br>
<br>
<center>
            <div class="form">
                <form name="intNext" method="post" action="Ebus1.php">
                <input type="submit" name="btnNext" id="btnNext" onclick="" value="Next Transaction" style="background-color:lightgray; color:black"/>
            </form>
        </div>
        </center>




</body>
</html>