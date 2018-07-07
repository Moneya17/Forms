<?php

	session_start();
	$_SESSION['app_name'] = $_POST['app_name'];
	$_SESSION['f_name'] = $_POST['f_name'];
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

 ?>


<html>
 <form name="stage_2" action="stage_33.php" method="post">
    <h3>PASSPORT APPLICATION-STAGE 2</h3>
	      Online Application ID: 0A000000040008216</br></br>
	Fields marked with <font color="red"><i>(*)</i></font> are mandatory.
	<hr>
	 <div>
	    <table width="50%" style="float:left">
	     <!--Applicant Contact information -->
	      <tr>
	       <td colspan="2"><b>Applicant Contact information</b></td>
	      </tr>
		  <tr>
	        <td>Office No:</td>
	  	    <td><input type="number" name="office_no" style="width:207px"></td>
	      </tr>
	      <tr>
	        <td>Residence No:</td>
		    <td><input type="number" name="r_no" style="width:207px"></td>
		  </tr>
	      <tr>
	        <td>Mobile No:</td>
		    <td><input type="tel"  pattern="^01[0-9]{9}" name="m_no" style="width:207px" title="01xxxxxxxxx"></td>
	      </tr>
		  <tr>
	       <td colspan="2"><b>Emergency Contact Person's Details</b></td>
	      </tr>
		  <tr>
	        <td>Name:*</td>
	  	    <td><input type="text" name="e_name" style="width:207px" required></td>
	      </tr>
		  <tr>
	        <td>Country:*</td>
		     <td>
		      <select name="county" style="width:207px" required>
			   <option value="">-Select-</option>
		       <option value="bangladesh">Bangladesh</option>
			   <option value="italy">Italy</option>
			  <option value="japan">Japan</option>
		      </select>
		     </td>
	      </tr>
		  <tr>
		   <td colspan="2">
		    <input type="checkbox"> Same as permanent address
		   </td>
		  </tr>
		  <tr>
		   <td colspan="2">
		    <input type="checkbox"> Same as present address
		   </td>
		  </tr>
		  <tr>
	        <td>Village/House:</td>
			<td><input type="text" name="v_house" style="width:210px"></td>
	      </tr>
	      <tr>
			<td>Road/Block/Sector:</td>
			<td><input type="text" name="road" style="width:210px"></td>
		  </tr>
	      <tr>
			<td>District:*</td>
			<td>
			  <select name="district" style="width:210px" >
			   <option value="">-Select-</option>
		       <option value="dhaka">Dhaka</option>
			   <option value="chittagong">Chittagong</option>
			   <option value="sylhet">Sylhet</option>
		     </select>
		   </td>
	      </tr>
		  <tr>
			<td>Police Station:*</td>
			<td><input type="text" name="ps" style="width:210px" ></td>
		  </tr>
	      <tr>
			<td>Post Office:*</td>
			<td><input type="text" name="po" style="width:210px" ></td>
	      </tr>
	      <tr>
	        <td>Contact No:*</td>
			<td><input type="tel" pattern="^01[0-9]{9}" name="c_no" style="width:210px" title="01xxxxxxxxx" required></td>
	      </tr>
		  <tr>
		   <td>Email:*</td>
		   <td><input type="email" name="g_email" style="width:210px" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="example@gmail.com" required></td>
		  </tr>
		  <tr>
			<td>Relationship:*</td>
			<td>
			  <select name="relation" style="width:210px" required>
			   <option value="">-Select-</option>
		       <option value="Uncle">Uncle</option>
			   <option value="Aunt">Aunt</option>
			   <option value="Neighbour">Neighbour</option>
		     </select>
		   </td>
	      </tr>
		 </table>
		 <table width="50%" style="float:left">
		  <tr>
	       <td colspan="2"><b>Old Passport Information</b></td>
	      </tr>
		  <tr>
			<td>Passport No:</td>
			<td><input type="number" name="pass_no" style="width:210px"></td>
		  </tr>
		  <tr>
			<td>Place of Issue:</td>
			<td><input type="text" name="place_of_issue" style="width:210px"></td>
		  </tr>
		  <tr>
			<td>Date of Issue:</td>
			<td><input type="text" name="date_of_issue" style="width:210px"></td>
		  </tr>
		  <tr>
			<td>Re-issue Reason:</td>
			<td>
			  <select name="re-issue" style="width:210px">
		       <option value="ex_page">Exhaustion of Pages</option>
			   <option value="lost">Lost Passport</option>
			   <option value="damaged">Damaged Passport</option>
		     </select>
		   </td>
	      </tr>
		  <tr>
		   <td colspan="2">
		    <button style="position: absolute; right: 25%; bottom: 5%;"> <a href="stage_11.php">Previous Page</button>
			<input type="submit" value="Save & Next" style="position: absolute; right: 17%; bottom: 5%;"> <a href="stage_3.html">
		   </td>
		  </tr>
		 </table>
		 
	 </div>
</html>