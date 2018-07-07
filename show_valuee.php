<?php
  session_start();
  /*$_SESSION['amount']=$_POST['amount'];
  $_SESSION['textbox_amount']=$_POST['textbox_amount'];
  $_SESSION['performance']=$_POST['performance'];
  $_SESSION['receipt_no']=$_POST['receipt_no'];
  $_SESSION['bank']=$_POST['bank'];
  $_SESSION['branch']=$_POST['branch'];
  $amount=$_SESSION['amount'];
  $textbox_amount=$_SESSION['textbox_amount'];
  $performance=$_SESSION['performance'];*/
  
  if(isset($_POST['save'])){
	   $file= mt_rand().".txt";
	   $handle = fopen($file, 'w') or die('Cannot open file:  '.$file);
	   $data = "Personal Information Summary"."\r\n"."\r\nName of The Applicant:".$_SESSION['app_name']."\r\nSecond Part(Surname):".$_SESSION['sur_name']
	   ."\r\nFirst Part(Given Name):".$_SESSION['f_name']
	   ."\r\nGender:".$_SESSION['gen']
	   ."\r\nNationality:".$_SESSION['nationality']
	   ."\r\nDate of Birth:".$_SESSION['dob']
	   ."\r\nPlace of Birth:".$_SESSION['birth_district'].",".$_SESSION['country_of_birth']
	   ."\r\nFather's Name:".$_SESSION['father_name']
	   ."\r\nMother's Name:".$_SESSION['mothers_name']
	   ."\r\nSpouse's Name:".$_SESSION['spouse_name']
	   ."\r\nNational ID No:".$_SESSION['n_id_no']
	   ."\r\nBirth ID No:".$_SESSION['b_id_no']
	   ."\r\nOld Passport No:".$_SESSION['pass_no']
	   ."\r\n"
	   ."\r\nPassport Information Summary:"
	   ."\r\n"
	   ."\r\nApplying in:".$_SESSION['applying_in']
	   ."\r\nPassport:".$_SESSION['pass_type']
	   ."\r\nApplication Type:New"
	   ."\r\n"
	   ."\r\nContact Information Summary"
	   ."\r\n"
	   ."\r\nMobile No:".$_SESSION['m_no']
	   ."\r\nPresent Address:".$_SESSION['v_house'].",".$_SESSION['road'].",".$_SESSION['po'].",".$_SESSION['district'].","."Bangladesh"
	   ."\r\nPermanent Address:".$_SESSION['v_house'].",".$_SESSION['road'].",".$_SESSION['po'].",".$_SESSION['district'].","."Bangladesh"
	   ."\r\nEmail:".$_SESSION['email']
	   ."\r\n"
	   /*."\r\nPayment Information Summary:"
	   ."\r\n"
	   ."\r\nPayment Amount:"."(".$_POST['amount'].")".$_SESSION['textbox_amount']
	   ."\r\nPayment Date:".$_POST['performance']
	   ."\r\nReceipt No:".$_POST['receipt_no']
	   ."\r\nBank Name:".$_POST['bank']
	   ."\r\nBank Branch:".$_POST['branch']*/;
	   
	   
	   
             fwrite($handle, $data);
			 fclose($file);
 }
  
?>
<html>
 <form name="show_value" action  = "#" method="post" onSubmit= "window.close();">
    <h3>PASSPORT APPLICATION-REVIEW ENROLMENT SUMMARY</h3>
	      Online Application ID: 0A000000040008216</br></br>
		  Enrolment Date: 04/07/2018</br></br>
		  <font color="red">
		  <i> Reminder before submitting your application</i>
		  </font></br></br>
		  <i>.After you click submit, you are not allowed to modify your information</i></br>
		  <i>.Please visit Uttara Branch on any working day within the next 15 days for biometric capture except government holiday</i>
		  <hr>
	<div>
	 <table width="50%" style="float:left">
	   <tr>
	     <td colspan="2">
		  <b>Personal Information Summary</b>
		 </td>
	   </tr>
	   <tr>
	     <td>Name of Applicant:</td>
		 <td>
		  <?php 
		  //session_start();
		  echo $_SESSION['app_name'];
		  //$data = "Name of Applicant:".$_SESSION['app_name'];
             //fwrite($handle, $data);
		  ?>
		 </td>
	   </tr>
	   <tr>
	     <td>Second Part(Surname):</td>
		 <td>
		  <?php 
		  //session_start();
		  echo $_SESSION['sur_name']; ?>
		 </td>
	   </tr>
	   <tr>
	     <td>First Part(Given Name):</td>
		 <td>
		  <?php 
		  //session_start();
		  echo $_SESSION['f_name']; ?>
		 </td>
	   </tr>
	   <tr>
	     <td>Gender:</td>
		 <td>
		  <?php 
		  
		  if(isset($_SESSION['gen'])) {
          if($_SESSION['gen'] == 'Male') {
		  echo "Male";}
          elseif($_SESSION['gen'] == 'Female') {
			  echo "Female";
		  }
		  else{echo "Other";}}?>
		  
			</td>
		  
	    </tr>
	   <tr>
	     <td>Nationality:</td>
		 <td>
		   <?php
		    if(isset($_SESSION['nationality'])){
			$selected_val = $_SESSION['nationality'];
			echo $selected_val;
				}
				?>
	   </tr>
	   <tr>
	     <td>Date of Birth</td>
	     <td>
		   <?PHP if(isset($_SESSION['dob'])){echo $_SESSION['dob'];}?>
		 </td>
	   </tr>
	   <tr>
	    <td>Place Of Birth:</td>
		<td>
		  <?php
		    if(isset($_SESSION['birth_district'])){
			$selected_val = $_SESSION['birth_district'];
			echo $selected_val;
				}
			
		    if(isset($_SESSION['country_of_birth'])){
			$selected_val = $_SESSION['country_of_birth'];
			echo ",".$selected_val;
				}
				?>
			
		</td>
	   </tr>
	   <tr>
	    <td>Father's name:</td>
		<td>
		 <?php 
		  echo $_SESSION['father_name']; ?>
		</td>
	   </tr>
	   <tr>
	    <td>Mother's name:</td>
		<td>
		 <?php 
		  echo $_SESSION['mothers_name']; ?>
		</td>
	   </tr>
	   <tr>
	     <td>Spouse's name:</td>
		 <td>
		  <?php 
		  echo $_SESSION['spouse_name']; ?>
		 </td>
	   </tr>
	   <tr>
	     <td>National ID No:</td>
		 <td>
		  <?php 
		  echo $_SESSION['n_id_no']; ?>
		 </td>
	   </tr>
	   <tr>
	     <td>Birth ID No:</td>
		 <td>
		  <?php 
		  echo $_SESSION['b_id_no']; ?>
		 </td>
	   </tr>
	   <tr>
	     <td>Old Passport No:</td>
		 <td>
		  <?php 
		  echo $_SESSION['pass_no']; ?>
		 </td>
	   </tr>
	   </table>
	   <table width="50%" style="float:left">
	   <tr>
	    <td colspan="2"><b>Passport Information Summary</b></td>
	   </tr>
	   <tr>
	     <td>Applying in:</td>
		 <td>
		  <?php
		    if(isset($_SESSION['applying_in'])){
			$selected_val = $_SESSION['applying_in'];
			echo $selected_val;
				}
				?>
		 </td>
	   </tr>
	   <tr>
	     <td>Passport Type:</td>
		 <td>
		  <?php
		    if(isset($_SESSION['pass_type'])){
			$selected_val = $_SESSION['pass_type'];
			echo $selected_val;
				}
				?>
		 </td>
	   </tr>
	   <tr>
	     <td>Application Type:</td>
		 <td>New
		 </td>
	   </tr>
	   <tr>
	    <td colspan="2"><b>Contact Information Summary</b></td>
	   </tr>
	   <tr>
	     <td>Mobile No:</td>
		 <td>
		  <?php 
		
		  echo $_SESSION['m_no']; ?>
		 </td>
	   </tr>
	   <tr>
	     <td>Present Address:</td>
		 <td>
		  <?php 
		  echo $_SESSION['v_house'].",".$_SESSION['road'].",".$_SESSION['po'].",";
		  if(isset($_SESSION['district'])){
			$selected_val = $_SESSION['district'];
		  echo $selected_val;}
		  echo ","."Bangladesh"; ?>
		 </td>
	   </tr>
	   <tr>
	     <td>Permanent Address:</td>
		 <td>
		  <?php 
		  echo $_SESSION['v_house'].",".$_SESSION['road'].",".$_SESSION['po'].",".$_SESSION['district'].","."Bangladesh"; ?>
		 </td>
	   </tr>
	   <tr>
	     <td>Email:</td>
		 <td>
		  <?php 
		  echo $_SESSION['email']; ?>
		 </td>
	   </tr>
	   <tr>
	    <td colspan="2"><b>Payment Information Summary</b></td>
	   </tr>
	   <tr>
	    <td>Payment Amount:</td>
		<td><?php 
			if(isset($_POST['amount'])){
			$selected_val = $_POST['amount'];
			echo "(".$selected_val.")";
				}
		echo $_POST['textbox_amount']; ?></td>
	   </tr>
	   <tr>
	     <td>Payment Date:</td>
		 <td>
		   <?php if(isset($_POST['performance']))
		   {echo $_POST['performance'];}
	      ?>
		 </td>
	   </tr>
	   <tr>
	     <td>Receipt No:</td>
		 <td>
		   <?php
		     echo $_POST['receipt_no'];
		   ?>
		 </td>
	   </tr>
	   <tr>
	     <td>Bank Name:</td>
		 <td>
		 <?php
		    if(isset($_POST['bank'])){
			$selected_val = $_POST['bank'];
			echo "(".$selected_val.")";
				}
				?>
		 </td>
	   </tr>
	   <tr>
	     <td>Bank Branch:</td>
		 <td>
		 <?php
		    if(isset($_POST['branch'])){
			$selected_val = $_POST['branch'];
			echo "(".$selected_val.")";
				}
				?>
		 </td>
	   </tr>
	   <tr>
	     <td colspan="2">
		    <button name="prev"style="position: absolute; right: 25%; bottom: -10%;"><a href="stage_33.php">Previous Page</button>
			<input type="submit" name="save" value="Save" style="position: absolute; right: 17%; bottom: -10%;">
		 </td>
	   </tr>
	  </table>
	</div>
  </form>
 </html>
 