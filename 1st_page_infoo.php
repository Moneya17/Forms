<?php

	session_start();
	$_SESSION['app_name'] = $_POST['app_name'];
	/*$_SESSION['f_name'] = $_POST['f_name'];
	$_SESSION['sur_name'] = $_POST['sur_name'];
	$_SESSION['father_name'] = $_POST['father_name'];
	$_SESSION['fathers_nationality'] = $_POST['fathers_nationality'];
	$_SESSION['gen'] = $_POST['gen'];
	$_SESSION['nationality'] = $_POST['nationality'];
	$_SESSION['applying_in'] = $_POST['applying_in'];
	$_SESSION['pass_type'] = $_POST['pass_type'];
	$_SESSION['b_id_no'] = $_POST['b_id_no'];
	$_SESSION['dob'] = $_POST['dob'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['country_of_birth'] = $_POST['country_of_birth'];
	$_SESSION['birth_district'] = $_POST['birth_district'];
	$_SESSION['n_id_no'] = $_POST['n_id_no'];
	$_SESSION['v_house'] = $_POST['v_house'];
	$_SESSION['road'] = $_POST['road'];
	$_SESSION['district'] = $_POST['district'];
	$_SESSION['ps'] = $_POST['ps'];
	$_SESSION['po'] = $_POST['po'];
	$_SESSION['mothers_name'] = $_POST['mothers_name'];
	$_SESSION['mothers_nationality'] = $_POST['mothers_nationality'];
	$_SESSION['spouse_name'] = $_POST['spouse_name'];
	*/
	
	if(isset($_POST['save_now'])){
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
	   ."\r\nBirth ID No:".$_SESSION['b_id_no'];
	   
	   fwrite($handle, $data);
	fclose();}

 ?>
<html>
 <form name="1st_page_info" action="#" method="post">
    <h3>PASSPORT APPLICATION-REVIEW ENROLMENT SUMMARY</h3>
	      Online Application ID: 0A000000040008216</br></br>
		  Enrolment Date: 04/07/2018</br></br>
		  <hr>
	<div>
	 <table width="50%" style="float:left">
	   <tr>
	     <td>
		  <b>Personal Information Summary</b>
		 </td>
	   </tr>
	   <tr>
	     <td>Name of Applicant:</td>
		 <td>
			<?php
			 echo $_SESSION['app_name'];
			 
			?>
	
    

		 </td>
	   </tr>
	   <tr>
	     <td>Second Part(Surname):</td>
		 <td>
		  <?php echo $_POST['sur_name']; ?>
		 </td>
	   </tr>
	  </table>
	 </div>
  </form>
</html>