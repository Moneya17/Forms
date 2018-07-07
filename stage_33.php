<?php
   session_start();
  $_SESSION['pass_no'] = $_POST['pass_no'];
  $_SESSION['m_no'] = $_POST['m_no'];
  
?>
<html>
   <form name="stage_3" action="show_valuee.php" method="post">
    <h3>PASSPORT APPLICATION-STAGE 2</h3>
	      Online Application ID: 0A000000040008216</br></br>
	Fields marked with <font color="red"><i>(*)</i></font> are mandatory.
	<hr>
	<div>
	    <table width="50%" style="float:left">
	     <!--Payment information -->
	      <tr>
	       <td colspan="2"><b>Payment information</b></td>
	      </tr>
		  <tr>
		    <td>Payment Type:</td>
			  <td>
				<input type="radio" name="pay" value="o">Online</br>
				<input type="radio" name="pay" value="n">Non-Online</br>
		      </td>
		  </tr>
		  <tr>
		    <td colspan="2">
			 <input type="checkbox">Skip Payment
			</td>
		  </tr>
		  <tr>
	        <td>Amount:*</td>
		     <td>
		      <select name="amount" required>
		       <option value="BDT">BDT</option>
			   <option value="Dollar">Dollar</option>
			  <option value="Euro">Euro</option>
		      </select>
			  
			  <input type="number" name="textbox_amount" style="width:70px">
		     </td>
	      </tr>
		  <tr>
	        <td>Date of Performance:*</td>
			<td><input type="date" name="performance" style="width:200px" required></td>
	      </tr>
		  <tr>
	        <td>Receipt No:*</td>
			<td><input type="number" name="receipt_no" style="width:200px" required></td>
	      </tr>
		  <tr>
			<td>Name of Bank:</td>
			<td>
			  <select name="bank" style="width:200px">
			   <option value="">-Select-</option>
		       <option value="Dhaka Bank">Dhaka Bank</option>
			   <option value="Sonali Bank">Sonali Bank</option>
			   <option value="Trust Bank">Trust Bank</option>
		     </select>
		   </td>
	      </tr>
		  <tr>
			<td>Name of Branch:</td>
			<td>
			  <select name="branch" style="width:200px">
			   <option value="">-Select-</option>
		       <option value="Rajanigandha">Rajanigandha</option>
			   <option value="Uttara">Uttara</option>
			   <option value="Banani">Banani</option>
		     </select>
		   </td>
	      </tr>
		</table>
		<table width="50%" style="float:left">
		 <tr>
		   <td>
		    <button style="position: absolute; right: 25%; bottom: 15%;"> <a href="stage_22.php">Previous Page</button>
			<input type="submit" value="Save & Next" style="position: absolute; right: 17%; bottom: 15%;">
		   </td>
		  </tr>
		</table>
	</div>
</html>