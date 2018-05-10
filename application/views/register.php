<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CES-DMS - Register</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/carousel.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/sticky-footer.css" rel="stylesheet">
  </head>

  <body>
    <!-- Navigation Bar -->
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="index.php" class="pull-left"><img src="img/ces_logo_sm.png"></a>
              <a class="navbar-brand" href="index.php">&nbsp CES Document Management System</a>
            </div>
          </div>
        </nav>

      </div>
    </div>

    <!-- Registration Form -->
    <div class="container">
      <h1 class="text-center">Registration Form</h1>
      <hr>
      <?php echo form_open('Users/process_reg');?>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="panel panel-primary">
              <div class="panel-heading" align="left">
                <h4><span class="glyphicon glyphicon-education" aria-hidden="true"></span>&nbsp Student Information</h4>
              </div>
              <div class="panel-body">
                <table width="100%">
                  <tr>
                    <td class="text-right"><label>Last Name:</label></td>
                    <td width="2%"></td>
                    <td><input type="text" class="form-control" name="lname" required></td>
                  </tr>
                  <tr>
                    <td class="text-right"><label>First Name:</label></td>
                    <td></td>
                    <td><input type="text" class="form-control" name="fname" required></td>
                  </tr>
                  <tr>
                    <td class="text-right"><label>School:</label></td>
                    <td></td>
                    <td>
                      <select class="form-control" name="school" required>
                        <option>-- Select your School --</option>
                        <option value="School of Architecture, Fine Arts and Design">
                          School of Architecture, Fine Arts and Design
                          </option>
                        <option value="School of Arts and Sciences">
                          School of Arts and Sciences
                          </option>
                        <option value="School of Education">
                          School of Education
                          </option>
                        <option value="School of Health Care Profession">
                          School of Health Care Profession
                          </option>
                        <option value="School of Law and Governance">
                          School of Law and Governance
                          </option>
                        <option value="School of Business and Economics">
                          School of Business and Economics
                          </option>
                        <option value="School of Engineering">
                          School of Engineering
                          </option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-right"><label>Department:</label></td>
                    <td></td>
                    <td>
                      <select class="form-control" name="dept" required>
                      <option>-- Select your Department --</option>
                        <option disabled>-- School of Architecture, Fine Arts and Design --</option>
                          <option value="Architecture">Architecture</option>
                          <option value="Fine Arts">Fine Arts</option>
                        <option disabled>-- School of Arts and Sciences --</option>
                          <option value="Languages and Literature">Languages and Literature</option>
                          <option value="Philosophy and Religious Studies">Philosophy and Religious Studies</option>
                          <option value="Psychology">Psychology</option>
                          <option value="Anthropology, Sociology and History">Anthropology, Sociology and History</option>
                          <option value="Biology">Biology</option>
                          <option value="Chemistry">Chemistry</option>
                          <option value="Computer and Information Sciences">Computer and Information Sciences</option>
                          <option value="Mathematics">Mathematics</option>
                          <option value="Phsyics">Phsyics</option>
                        <option disabled>-- School of Education --</option>
                          <option value="Teacher Education">Teacher Education</option>
                          <option value="Science and Mathematics">Science and Mathematics</option>
                          <option value="Physical Education">Physical Education</option>
                        <option disabled>-- School of Health Care Profession -</option>
                          <option value="Nursing">Nursing</option>
                          <option value="Pharmacy">Pharmacy</option>
                          <option value="Nutrition and Dietics">Nutrition and Dietics</option>
                        <option disabled>-- School of Law and Governance --</option>
                          <option value="Law">Law</option>
                          <option value="Political Science">Political Science</option>
                        <option disabled>-- School of Business and Economics --</option>
                          <option value="Accountancy">Accountancy</option>
                          <option value="Business Administration">Business Administration</option>
                          <option value="Economics">Economics</option>
                          <option value="Hospitality Management">Hospitality Management</option>
                        <option disabled>-- School of Engineering --</option>
                          <option value="Chemical Engineering">Chemical Engineering</option>
                          <option value="Civil Engineering">Civil Engineering</option>
                          <option value="Computer Engineering">Computer Engineering</option>
                          <option value="Electronics and Communications Engineering">Electronics and Communications Engineering</option>
                          <option value="Electrical Engineering">Electrical Engineering</option>
                          <option value="Industrial Engineering">Industrial Engineering</option>
                          <option value="Mechanical Engineering">Mechanical Engineering</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-right"><label>Organization:</label></td>
                    <td></td>
                    <td><input type="text" class="form-control" name="org" required></td>
                  </tr>
                  <tr>
                    <td class="text-right"><label>Email Address:</label></td>
                    <td></td>
                    <td><input type="email" class="form-control" name="email" required></td>
                  </tr>
                  <tr>
                    <td class="text-right"><label>Contact Number:</label></td>
                    <td></td>
                    <td><input type="text" class="form-control" name="cnum" required></td>
                  </tr>
                </table>
              </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="panel panel-primary">
              <div class="panel-heading" align="left">
                <h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp Username & Password</h4>
              </div>
              <div class="panel-body">
                <table width="100%">
                  <tr>
                    <td class="text-right" width="30%"><label>Username:</label></td>
                    <td width="2%"></td>
                    <td><input type="text" class="form-control" name="uname" required><br></td>
                  </tr>
                  <tr>
                    <td class="text-right"><label>Password:</label></td>
                    <td></td>
                    <td><input type="password" class="form-control" name="pass1" required><br></td>
                  </tr>
                  <tr>
                    <td class="text-right"><label>Confirm Password:</label></td>
                    <td></td>
                    <td><input type="password" class="form-control" name="pass2" required><br></td>
                  </tr>
                  <tr>
                    <td colspan="3"><hr></td>
                  </tr>
                  <tr>
                    <table width="100%" align="center">
                      <tr>
                        <td width="48%">
                          <a href="index.php" style="text-decoration:none"><button type="button" class="btn btn-danger btn-block btn-lg"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button></a>
                        </td>
                        <td width="4%"></td>
                        <td width="48%">
                          <button type="submit" class="btn btn-success btn-block btn-lg" name="register" value="register"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp Register</button>
                        </td>
                      </tr>
                    </table>
                  </tr>
                </table>
              </div>
          </div>
        </div>
      <?php echo form_close();?>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
