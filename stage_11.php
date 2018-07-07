<html>
  <form name="stage_1" action="stage_22.php" method="post">
    <h3>PASSPORT APPLICATION-STAGE 1</h3>
	<i><font color="red">Before filling up the online application form read the <font color="blue">guidelines</font> carefully.</font></i></br></br>
	Fields marked with <font color="red"><i>(*)</i></font> are mandatory.
	<hr>
	 <div>
	 <table width="50%" style="float:left">
	  <!--Passport Application information -->
	  <tr>
	    <td colspan="2"><b>Passport Application Information</b></td>
	  </tr>
	  <tr>
	    <td>Applying in:*</td>
		 <td>
		   <select name="applying_in" style="width:207px" required>
		     <option value="">-Select-</option>
		     <option value="Bangladesh">Bangladesh</option>
			 <option value="Italy">Italy</option>
			 <option value="Japan">Japan</option>
		   </select>
		 </td>
	  </tr>
	  <tr>
	    <td>Application Type:</td>
		<td>NEW APPLICATION</td>
	  </tr>
	  <tr>
	    <td>Passport Type:*</td>
		<td>
		  <select name="pass_type" required>
		    <option value="Ordinary international passport">Ordinary international passport</option>
			<option value="Official Passport">Official passport</option>
			<option value="Diplomatic Passport">Diplomatic passport</option>
		  </select>
		</td>
	  </tr>
	  <tr>
	    <td>Delivery Type:</td>
		 <td>
		  <input type="radio" name="del" value="del">Regular</br>
		  <input type="radio" name="del" value="del">Express
		 </td>
	  </tr>
	  <!--Personal information -->
	  <tr>
	    <td colspan="2">
		 <b>Personal Information</b>
		</td>
	  </tr>
	  <tr>
	    <td>Name of Applicant:*</td>
		<td>
		 <input type="text" name="app_name" style="width:207px"  required>
			
	    </td>
	  </tr>
	  <tr>
	    <td>First Part(Given Name):</td>
		<td><input type="text" name="f_name" style="width:207px"></td>
	  </tr>
	  <tr>
	    <td>Second Part(Surname):*</td>
		<td><input type="text" name="sur_name" style="width:207px" required></td>
	  </tr>
	  <tr>
	    <td colspan="2">
		  Gurdian <input type="checkbox"> <font color="red"><i>"Tick"</i></font> only if Applicant is legally adapted
		</td>
	  </tr>
	  
	  <tr>
	    <td>Father's name:*</td>
		<td><input type="text"  name="father_name" style="width:207px" required></td>
	  </tr>
	  <tr>
	    <td>Father's Nationality:*</td>
		 <td>
		   <select name="fathers_nationality" style="width:210px" required>
		     <option value="">-Select-</option>
		     <option value="Bangladeshi">Bangladeshi</option>
			 <option value="Italian">Italian</option>
			 <option value="Japanese">Japanese</option>
		   </select>
		 </td>
	  </tr>
	  <tr>
	    <td>Father's Profession:*</td>
		 <td>
		   <select name="fathers_profession" style="width:210px" required>
		     <option value="">-Select-</option>
		     <option value="f_employee">Employee</option>
			 <option value="f_teacher">Teacher</option>
			 <option value="f_business">Businessman</option>
		   </select>
		 </td>
	  </tr>
	  
	  <tr>
	    <td>Mother's name:*</td>
		<td><input type="text"  name="mothers_name" style="width:207px" required></td>
	  </tr>
	  <tr>
	    <td>Mother's Nationality:*</td>
		 <td>
		   <select name="mothers_nationality" style="width:210px" required>
		     <option value="">-Select-</option>
		     <option value="bangladeshi">Bangladeshi</option>
			 <option value="italian">Italian</option>
			 <option value="japanese">Japanese</option>
		   </select>
		 </td>
	  </tr>
	  <tr>
	    <td>Mother's Profession:*</td>
		 <td>
		   <select name="mothers_profession" style="width:210px" required>
		     <option value="">-Select-</option>
		     <option value="m_employee">Employee</option>
			 <option value="m_teacher">Teacher</option>
			 <option value="m_business">Businessman</option>
		   </select>
		 </td>
	  </tr>
	  <tr>
	    <td>Spouse's name:</td>
		<td><input type="text"  name="spouse_name" style="width:207px"></td>
	  </tr>
	  <tr>
	    <td>Spouse's Nationality:</td>
		 <td>
		   <select name="spouses_nationality" style="width:210px">
		     <option value="">-Select-</option>
		     <option value="bangladeshi">Bangladeshi</option>
			 <option value="italian">Italian</option>
			 <option value="japanese">Japanese</option>
		   </select>
		 </td>
	  </tr>
	  <tr>
	    <td>Spouse's Profession:</td>
		 <td>
		   <select name="spouses_profession" style="width:210px">
		     <option value="">-Select-</option>
		     <option value="s_employee">Employee</option>
			 <option value="s_teacher">Teacher</option>
			 <option value="s_business">Businessman</option>
		   </select>
		 </td>
	  </tr>
	  <tr>
	    <td>Marital Status:*</td>
		 <td>
		   <select name="marital_status" style="width:210px" required>
		     <option value="">-Select-</option>
		     <option value="married">Married</option>
			 <option value="unmarried">UnMarried</option>
		   </select>
		 </td>
	  </tr>
	  <tr>
	    <td>Applicant's Profession:*</td>
		 <td>
		   <select name="applicant's_profession" style="width:210px" required>
		     <option value="">-Select-</option>
		     <option value="a_employee">Employee</option>
			 <option value="a_teacher">Teacher</option>
			 <option value="a_business">Businessman</option>
		   </select>
		 </td>
	  </tr>
	  <tr>
	    <td>Country of Birth:*</td>
		 <td>
		   <select name="country_of_birth" style="width:210px" required>
		     <option value="">-Select-</option>
		     <option value="Bangladesh">Bangladesh</option>
			 <option value="Italy">Italy</option>
			 <option value="Japan">Japan</option>
		   </select>
		 </td>
	  </tr>
	  <tr>
	    <td>Birth District:*</td>
		 <td>
		   <select name="birth_district" style="width:210px" required>
		     <option value="">-Select-</option>
		     <option value="Dhaka">Dhaka</option>
			 <option value="Chittagong">Chittagong</option>
			 <option value="Sylhet">Sylhet</option>
		   </select>
		 </td>
	  </tr>
	  
	 </table>
	 
	 
	 
	 <table width="50%" style="float:left">
	   <tr>
	    <td>Date of Birth:*</td>
		<td><input type="date" required name="dob" style="width:210px" min="1950-01-01" max="2000-01-01"></td>
	   </tr>
	   <tr>
	    <td>Gender:*</td>
		<td>
		 <input type="radio" name="gen" value="Male" required>Male</br>
		 <input type="radio" name="gen" value="Female">Female</br>
		 <input type="radio" name="gen" value="Others">Others
		</td>
	   </tr>
	   <tr>
	    <td>Birth ID No:*</td>
		<td><input type="number" name="b_id_no" style="width:210px" required></td>
	   </tr>
	   <tr>
	    <td>National ID No:</td>
		<td><input type="number" name="n_id_no" style="width:210px"></td>
	   </tr>
	   <tr>
	    <td>Tax ID No:</td>
		<td><input type="number" name="t_id_no" style="width:210px"></td>
	   </tr>
	  <tr>
	    <td>Height:*</td>
		<td>
		  <input type="number" name="cm" style="width:70px" required> cm
		  <input type="number" name="inch" style="width:70px" required> inch
		</td>
	   </tr>
	   <tr>
	    <td>Religion:*</td>
		 <td>
		   <select name="religion" style="width:212px" required>
		     <option value="">-Select-</option>
		     <option value="Islam">Islam</option>
			 <option value="Hindu">Hindu</option>
			 <option value="Christian">Christian</option>
			 <option value="Buddhist">Buddhist</option>
		   </select>
		 </td>
	    </tr>
		<tr>
		   <td>Email:*</td>
		<td><input type="email" required name="email" style="width:210px" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="example@gmail.com"></td>
		<tr>
		</tr>
		<!--Citizenship information -->
		<tr>
		 <td colspan="2"><b>Citizenship Information</b></td>
		</tr>
		
		<tr>
	    <td>Nationality:*</td>
		 <td>
		   <select name="nationality" style="width:210px" required>
		     <option value="">-Select-</option>
		     <option value="Bangladeshi">Bangladeshi</option>
			 <option value="Italian">Italian</option>
			 <option value="Japanese">Japanese</option>
		   </select>
		 </td>
	    </tr>
		 <tr>
	    <td>Citizenship Status:</td>
		 <td>
		   <select name="c-status" style="width:210px">
		     <option value="">-Select-</option>
		     <option value="Birth">Birth</option>
			 <option value="Natural">Naturalized</option>
		   </select>
		 </td>
	    </tr>
		<tr>
	    <td>Dual Citizenship:*</td>
		<td>
		 <input type="radio" name="dual" value="y" required>Yes</br>
		 <input type="radio" name="dual" value="n">No</br>
		</td>
	   </tr>
	   <!-- Present Address-->
	   
	   <tr>
		 <td colspan="2"><b>Present Address</b></td>
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
		   <select name="district" style="width:214px" required>
		     <option value="">-Select-</option>
		     <option value="Dhaka">Dhaka</option>
			 <option value="Chittagong">Chittagong</option>
			 <option value="Sylhet">Sylhet</option>
		   </select>
		 </td>
	    </tr>
		<tr>
	    <td>Police Station:*</td>
		<td><input type="text" name="ps" style="width:210px" required></td>
	   </tr>
	   <tr>
	    <td>Post Office:*</td>
		<td><input type="text" name="po" style="width:210px" required></td>
	   </tr>
	  <!-- Permanent Address-->
	   
	   <tr>
		 <td colspan="2"><b>Permanent Address</b></td>
		</tr>
		<tr>
		 <td colspan="2"><input type="checkbox" name="s_as_a"> Same as above</td>
		</tr>
		<tr>
	    <td>Village/House:</td>
		<td><input type="text" name="vp_house" style="width:210px"></td>
	   </tr>
	   <tr>
	    <td>Road/Block/Sector:</td>
		<td><input type="text" name="proad" style="width:210px"></td>
	   </tr>
	   <tr>
	    <td>District:*</td>
		 <td>
		   <select name="pdistrict" style="width:214px">
		     <option value="">-Select-</option>
		     <option value="dhaka">Dhaka</option>
			 <option value="chittagong">Chittagong</option>
			 <option value="sylhet">Sylhet</option>
		   </select>
		 </td>
	    </tr>
		<tr>
	    <td>Police Station:*</td>
		<td><input type="text" name="pps" style="width:210px" ></td>
	   </tr>
	   <tr>
	    <td>Post Office:*</td>
		<td><input type="text" name="ppo" style="width:210px" ></td>
	   </tr>
	   <tr>
	     <td colspan="2">
		    <button name="save"style="position: absolute; right: 25%; bottom: -40%;" onclick= "window.close();" onclick="window.close();">Save Now & Continue in the Future</button>
			<input type="submit" name="submit" value="Save & Next" style="position: absolute; right: 17%; bottom: -40%;">
		 </td>
	   </tr>
	 </table>
	</div>
  </form>
</html>

