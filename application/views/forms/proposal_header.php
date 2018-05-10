<!DOCTYPE html>
<html>

<body>
	<div class="panel panel-success" align="center">
    <div class="panel-body">
      <table width="100%">
        <tr>
          <td><label>Title:</label></td>
          <td colspan="4"><input type="text" class="form-control" name="title" data-toggle="tooltip" placeholder="Name of the Program/Project/Activity" required></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><label>School:</label></td>
          <td>
            <select id="school" class="form-control" name="school" value="<?php echo $user_office?>" required>
            <option>-- Select your School --</option>
              <option value="School of Architecture, Fine Arts and Design">School of Architecture, Fine Arts and Design</option>
              <option value="School of Arts and Sciences">School of Arts and Sciences</option>
              <option value="School of Education">School of Education</option>
              <option value="School of Health Care Profession">School of Health Care Profession</option>
              <option value="School of Law and Governance">School of Law and Governance</option>
              <option value="School of Business and Economics">School of Business and Economics</option>
              <option value="School of Engineering">School of Engineering</option>
            </select>
          </td>
          <td><label>&nbsp Department:</label></td>
          <td>
            <select id="department" class="form-control" name="department" value="<?php echo $user_dept?>" required>
              <option data-group="all" value="0" readonly>-- Select your Department --</option>
              <option disabled>-- School of Architecture, Fine Arts and Design --</option>
                <option data-group="School of Architecture, Fine Arts and Design" value="Architecture">Architecture</option>
                <option data-group="School of Architecture, Fine Arts and Design" value="Fine Arts">Fine Arts</option>
              <option disabled>-- School of Arts and Sciences --</option>
                <option data-group="School of Arts and Sciences" value="Languages and Literature">Languages and Literature</option>
                <option data-group="School of Arts and Sciences" value="Philosophy and Religious Studies">Philosophy and Religious Studies</option>
                <option data-group="School of Arts and Sciences" value="Psychology">Psychology</option>
                <option data-group="School of Arts and Sciences" value="Anthropology, Sociology and History">Anthropology, Sociology and History</option>
                <option data-group="School of Arts and Sciences" value="Biology">Biology</option>
                <option data-group="School of Arts and Sciences" value="Chemistry">Chemistry</option>
                <option data-group="School of Arts and Sciences" value="Computer and Information Sciences">Computer and Information Sciences</option>
                <option data-group="School of Arts and Sciences" value="Mathematics">Mathematics</option>
                <option data-group="School of Arts and Sciences" value="Phsyics">Phsyics</option>
              <option disabled>-- School of Education --</option>
                <option data-group="School of Education" value="Teacher Education">Teacher Education</option>
                <option data-group="School of Education" value="Science and Mathematics">Science and Mathematics</option>
                <option data-group="School of Education" value="Physical Education">Physical Education</option>
              <option disabled>-- School of Health Care Profession -</option>
                <option data-group="School of Health Care Profession" value="Nursing">Nursing</option>
                <option data-group="School of Health Care Profession" value="Pharmacy">Pharmacy</option>
                <option data-group="School of Health Care Profession" value="Nutrition and Dietics">Nutrition and Dietics</option>
              <option disabled>-- School of Law and Governance --</option>
                <option data-group="School of Law and Governance" value="Law">Law</option>
                <option data-group="School of Law and Governance" value="Political Science">Political Science</option>
              <option disabled>-- School of Business and Economics --</option>
                <option data-group="School of Business and Economics" value="Accountancy">Accountancy</option>
                <option data-group="School of Business and Economics" value="Business Administration">Business Administration</option>
                <option data-group="School of Business and Economics" value="Economics">Economics</option>
                <option data-group="School of Business and Economics" value="Hospitality Management">Hospitality Management</option>
              <option disabled>-- School of Engineering --</option>
                <option data-group="School of Engineering" value="Chemical Engineering">Chemical Engineering</option>
                <option data-group="School of Engineering" value="Civil Engineering">Civil Engineering</option>
                <option data-group="School of Engineering" value="Computer Engineering">Computer Engineering</option>
                <option data-group="School of Engineering" value="Electronics and Communications Engineering">Electronics and Communications Engineering</option>
                <option data-group="School of Engineering" value="Electrical Engineering">Electrical Engineering</option>
                <option data-group="School of Engineering" value="Industrial Engineering">Industrial Engineering</option>
                <option data-group="School of Engineering" value="Mechanical Engineering">Mechanical Engineering</option>
            </select>
          </td>
        </tr>
        <tr>
            <td><label>Inclusive Date:</label></td>
            <td><input type="text" name="inclusive_date1" data-toggle="tooltip" placeholder="Date Start of Activity (mm/dd/yyyy)" class="form-control datepicker" required></td>
            <td class="text-center"><em>to</em></td>
            <td><input type="text" name="inclusive_date2" data-toggle="tooltip" placeholder="Date End of Activity (mm/dd/yyyy)" class="form-control datepicker" required></td>
        </tr>
        <tr>
            <td><label>Venue:</label></td>
            <td colspan="3"><input type="text" class="form-control" data-toggle="tooltip" name="venue" placeholder="Where will the activity take place?" required></td>
            <td></td>
            <td></td>
        </tr>
      </table>
    </div>
  </div>
</body>
</html>