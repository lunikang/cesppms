<!DOCTYPE html>
<html>

<body>
	<div class="panel panel-success" align="center">
    <div class="panel-body">
      <table width="100%">
        <tr>
          <td><label>Title:</label></td>
          <td colspan="4"><input type="text" class="form-control" name="title" data-toggle="tooltip" placeholder="Name of the Program/Project/Activity" value="<?= $proposal['title'] ?>" required></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><label>School:</label></td>
          <td>
            <select id="school" class="form-control" name="school" required>
            <option>-- Select your School --</option>
              <option value="School of Architecture, Fine Arts and Design" <?php if ($proposal['school']=="School of Architecture, Fine Arts and Design") echo 'selected="selected"'; ?>>School of Architecture, Fine Arts and Design</option>
              <option value="School of Arts and Sciences" <?php if ($proposal['school']=="School of Arts and Sciences") echo 'selected="selected"'; ?>>School of Arts and Sciences</option>
              <option value="School of Education" <?php if ($proposal['school']=="School of Education") echo 'selected="selected"'; ?>>School of Education</option>
              <option value="School of Health Care Profession" <?php if ($proposal['school']=="School of Health Care Profession") echo 'selected="selected"'; ?>>School of Health Care Profession</option>
              <option value="School of Law and Governance" <?php if ($proposal['school']=="School of Law and Governance") echo 'selected="selected"'; ?>>School of Law and Governance</option>
              <option value="School of Business and Economics" <?php if ($proposal['school']=="School of Business and Economics") echo 'selected="selected"'; ?>>School of Business and Economics</option>
              <option value="School of Engineering" <?php if ($proposal['school']=="School of Engineering") echo 'selected="selected"'; ?>>School of Engineering</option>
            </select>
          </td>
          <td><label>&nbsp Department:</label></td>
          <td>
            <select id="department" class="form-control" name="department" required>
              <option data-group="all" value="0" readonly>-- Select your Department --</option>
              <option disabled>-- School of Architecture, Fine Arts and Design --</option>
                <option data-group="School of Architecture, Fine Arts and Design" value="Architecture" <?php if ($proposal['department']=="Architecture") echo 'selected="selected"'; ?>>Architecture</option>
                <option data-group="School of Architecture, Fine Arts and Design" value="Fine Arts">Fine Arts</option>
              <option disabled>-- School of Arts and Sciences --</option>
                <option data-group="School of Arts and Sciences" value="Languages and Literature" <?php if ($proposal['department']=="Languages and Literature") echo 'selected="selected"'; ?>>Languages and Literature</option>
                <option data-group="School of Arts and Sciences" value="Philosophy and Religious Studies" <?php if ($proposal['department']=="Philosophy and Religious Studies") echo 'selected="selected"'; ?>>Philosophy and Religious Studies</option>
                <option data-group="School of Arts and Sciences" value="Psychology" <?php if ($proposal['department']=="Psychology") echo 'selected="selected"'; ?>>Psychology</option>
                <option data-group="School of Arts and Sciences" value="Anthropology, Sociology and History" <?php if ($proposal['department']=="Anthropology, Sociology and History") echo 'selected="selected"'; ?>>Anthropology, Sociology and History</option>
                <option data-group="School of Arts and Sciences" value="Biology" <?php if ($proposal['department']=="Biology") echo 'selected="selected"'; ?>>Biology</option>
                <option data-group="School of Arts and Sciences" value="Chemistry" <?php if ($proposal['department']=="Chemistry") echo 'selected="selected"'; ?>>Chemistry</option>
                <option data-group="School of Arts and Sciences" value="Computer and Information Sciences" <?php if ($proposal['department']=="Computer and Information Sciences") echo 'selected="selected"'; ?>>Computer and Information Sciences</option>
                <option data-group="School of Arts and Sciences" value="Mathematics" <?php if ($proposal['department']=="Mathematics") echo 'selected="selected"'; ?>>Mathematics</option>
                <option data-group="School of Arts and Sciences" value="Physics" <?php if ($proposal['department']=="Physics") echo 'selected="selected"'; ?>>Physics</option>
              <option disabled>-- School of Education --</option>
                <option data-group="School of Education" value="Teacher Education" <?php if ($proposal['department']=="Teacher Education") echo 'selected="selected"'; ?>>Teacher Education</option>
                <option data-group="School of Education" value="Science and Mathematics" <?php if ($proposal['department']=="Sciences and Mathematics") echo 'selected="selected"'; ?>>Science and Mathematics</option>
                <option data-group="School of Education" value="Physical Education" <?php if ($proposal['department']=="Physical Education") echo 'selected="selected"'; ?>>Physical Education</option>
              <option disabled>-- School of Health Care Profession -</option>
                <option data-group="School of Health Care Profession" value="Nursing" <?php if ($proposal['department']=="Nursing") echo 'selected="selected"'; ?>>Nursing</option>
                <option data-group="School of Health Care Profession" value="Pharmacy" <?php if ($proposal['department']=="Pharmacy") echo 'selected="selected"'; ?>>Pharmacy</option>
                <option data-group="School of Health Care Profession" value="Nutrition and Dietics" <?php if ($proposal['department']=="Nutrition and Dietics") echo 'selected="selected"'; ?>>Nutrition and Dietics</option>
              <option disabled>-- School of Law and Governance --</option>
                <option data-group="School of Law and Governance" value="Law" <?php if ($proposal['department']=="Law") echo 'selected="selected"'; ?>>Law</option>
                <option data-group="School of Law and Governance" value="Political Science" <?php if ($proposal['department']=="Political Science") echo 'selected="selected"'; ?>>Political Science</option>
              <option disabled>-- School of Business and Economics --</option>
                <option data-group="School of Business and Economics" value="Accountancy" <?php if ($proposal['department']=="Accountancy") echo 'selected="selected"'; ?>>Accountancy</option>
                <option data-group="School of Business and Economics" value="Business Administration" <?php if ($proposal['department']=="Business Administration") echo 'selected="selected"'; ?>>Business Administration</option>
                <option data-group="School of Business and Economics" value="Economics" <?php if ($proposal['department']=="Economics") echo 'selected="selected"'; ?>>Economics</option>
                <option data-group="School of Business and Economics" value="Hospitality Management" <?php if ($proposal['department']=="Hospitality Management") echo 'selected="selected"'; ?>>Hospitality Management</option>
              <option disabled>-- School of Engineering --</option>
                <option data-group="School of Engineering" value="Chemical Engineering" <?php if ($proposal['department']=="Chemical Engineering") echo 'selected="selected"'; ?>>Chemical Engineering</option>
                <option data-group="School of Engineering" value="Civil Engineering" <?php if ($proposal['department']=="Civil Engineering") echo 'selected="selected"'; ?>>Civil Engineering</option>
                <option data-group="School of Engineering" value="Computer Engineering" <?php if ($proposal['department']=="Computer Engineering") echo 'selected="selected"'; ?>>Computer Engineering</option>
                <option data-group="School of Engineering" value="Electronics and Communications Engineering" <?php if ($proposal['department']=="Electronics and Communications Engineering") echo 'selected="selected"'; ?>>Electronics and Communications Engineering</option>
                <option data-group="School of Engineering" value="Electrical Engineering" <?php if ($proposal['department']=="Electrical Engineering") echo 'selected="selected"'; ?>>Electrical Engineering</option>
                <option data-group="School of Engineering" value="Industrial Engineering" <?php if ($proposal['department']=="Industrial Engineering") echo 'selected="selected"'; ?>>Industrial Engineering</option>
                <option data-group="School of Engineering" value="Mechanical Engineering" <?php if ($proposal['department']=="Mechanical Engineering") echo 'selected="selected"'; ?>>Mechanical Engineering</option>
            </select>
          </td>
        </tr>
        <tr>
          <?php $inclusive_date = explode("-", $proposal['inclusive_date']) ?>
            <td><label>Inclusive Date:</label></td>
            <td><input type="text" id="inclusive-date1" name="inclusive_date1" data-toggle="tooltip" placeholder="Date Start of Activity (mm/dd/yyyy)" class="form-control" value="<?= $inclusive_date['0']?>" required></td>
            <td class="text-center"><em>to</em></td>
            <td><input type="text" id="inclusive-date2" name="inclusive_date2" data-toggle="tooltip" placeholder="Date End of Activity (mm/dd/yyyy)" class="form-control" value="<?= $inclusive_date['1']?>"required></td>
        </tr>
        <tr>
            <td><label>Venue:</label></td>
            <td colspan="3"><input type="text" class="form-control" data-toggle="tooltip" name="venue" placeholder="Where will the activity take place?" value="<?= $proposal['venue']?>" required></td>
            <td></td>
            <td></td>
        </tr>
      </table>
    </div>
  </div>
</body>
</html>