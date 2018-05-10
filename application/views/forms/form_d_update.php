<!DOCTYPE html>
<html lang="en">

<head>

    <title>CESDMS - Fill Out Form D</title>
    <?php include('application/views/header.php');?>

</head>

<body>

    <div id="wrapper">

          <?php include('application/views/sidebar.php');?>

        <!-- Page Content -->
         <?php echo form_open('Representative/updateFormd');?>
        <div id="page-content-wrapper">
            <?php include('application/views/topNav.php');?>
            <div class="container-fluid" style="padding-top:20px;">
                <div class="row tab-content">
                    <div>
                        <h1>Filling Out Form D <small>CES Program/Project/Activity Report Form</small></h1>
                        <hr>
                        <form>
                            <div class="panel" align="center">
                                <div class="panel-body">
                                    <table width="100%">
                                        <tr><input type="hidden" name="id" value="<?php echo $result_d['id'];?>">
                                            <td><label>Title:</label></td>
                                            <td colspan="3">
                                              <!-- <select class="form-control" required> -->
                                                <!-- <option>Name of Approved Proposal 1</option>
                                                <option>Name of Approved Proposal 2</option>
                                                <option>Name of Approved Proposal 3</option>
                                                <option>Name of Approved Proposal 4</option> -->
                                               
                                             <input type="text" name="fd_title" value="<?php echo $result_d['fd_title']; ?>" class="form-control" readonly>
                                                <td>

                                              <!-- </select></td> -->
                                       
                                               
                                            <td></td>
                                            <td></td>
                                        </tr>

                                         <!--   who created and the department of the creator of the report input here -->
                                       <tr><td> <input type="hidden" name="who_created" value="<?= $fname ?>&nbsp;<?= $lname ?>"></td>
                                        <td> <input type="hidden" name="creators_department" value="<?= $department ?>"></td>
                                         <input type="hidden" name="fd_school" value="<?php echo $office;?>">
                                           <input type="hidden" name="fd_dept" value="<?php echo $department;?>">
                                        <tr>
                                  <!-- END part of the info of creator -->

                                         <tr>
                                            <td><label>School:</label></td>
                                            <td>
                                              <select id="fd_school" class="form-control" name="" disabled>
                                               
                                              <option value="<?php echo $office; ?>"><?php echo $office; ?></option>
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
                                              <select id="fd_dept" class="form-control" name="" disabled>

                                                <option data-group="all" value="<?php echo $department; ?>" readonly> <?php echo $department; ?> </option>
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
                                            <td><input type="text" name="date_start" value="<?php echo $result_d['date_start']; ?>" placeholder="Date Start of Activity (mm/dd/yyyy)" class="form-control datepicker" required></td>
                                            <td class="text-center"><em>to</em></td>
                                            <td><input type="text" name="date_end" value="<?php echo $result_d['date_end']; ?>" placeholder="Date End of Activity (mm/dd/yyyy)" class="form-control datepicker" required></td>
                                        </tr>
                                        <tr>
                                            <td><label>Venue:</label></td>
                                            <td colspan="3"><input type="text" name="fd_venue" value="<?php echo $result_d['fd_venue']; ?>" class="form-control" placeholder="Where will the activity take place?" required></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>I. Introduction</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> Provide here an explanation or a rationale of the undertaken activity.</p>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" placeholder="Type Here..." name="introduction" value=""><?php echo $result_d['introduction']; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>II. Participants, Partners and Beneficiaries</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> Present here a summary of the participants’ profile as well as the roles and responsibilities assumed. (the attendance sheet will serve as an attachment).</p>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" placeholder="Type Here..." name="participants_partners_and_beneficiaries" value=""><?php echo $result_d['participants_partners_and_beneficiaries']; ?></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>III. Highlights of the Activity</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> Point out the important features or parts of the activity as perceived by the sectors specified below:</p>
                                    </div>
                                    <!-- <table class="table table-bordered" width="100%">
                                      <thead>
                                        <th width="33%" class="text-center">As perceived by the Beneficiaries</th>
                                        <th width="33%" class="text-center">As perceived by the Students</th>
                                        <th width="33%" class="text-center">As perceived by the Faculty/Staff</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td><textarea class="form-control" rows="5" placeholder="Type Here..."></textarea></td>
                                          <td><textarea class="form-control" rows="5" placeholder="Type Here..."></textarea></td>
                                          <td><textarea class="form-control" rows="5" placeholder="Type Here..."></textarea></td>
                                        </tr>
                                      </tbody>
                                    </table> -->

                                    <label>As perceived by the Beneficiaries</label>
                                    <textarea class="form-control" rows="5" placeholder="Type Here..." name="perceived_by_beneficiaries" value=""><?php echo $result_d['perceived_by_beneficiaries']; ?></textarea>
                                    <label>As perceived by the Students</label>
                                    <textarea class="form-control" rows="5" placeholder="Type Here..." name="perceived_by_students" value=""><?php echo $result_d['perceived_by_students']; ?></textarea>
                                    <label>As perceived by the Faculty/Staff</label>
                                    <textarea class="form-control" rows="5" placeholder="Type Here..." name="perceived_by_faculty" value=""><?php echo $result_d['perceived_by_faculty']; ?></textarea>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>IV. Challenges/Difficulties Encountered</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> Enumerate and discuss the various difficulties encountered during the implementation of the activity. This may include matters such as logistics, manpower, program, or those that may have been encountered by the participants. Also discuss how the group addressed said challenges/problems.</p>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" placeholder="Type Here..." name="challenges_encountered" value=""><?php echo $result_d['challenges_encountered']; ?></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>V. Attachments</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p>
                                        <strong>Instruction:</strong> Please provide the following as attachments:
                                        <ol>
                                          <li>Program of Activity</li>
                                          <li>Attendance sheet/s</li>
                                          <li>At most 10 photos with appropriate captions</li>
                                          <li>Feedback forms from participants</li>
                                          <li>Reflection Papers from students</li>
                                          <li>Liquidation Report (if applicable)</li>
                                        </ol>
                                      </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="button" class="btn btn-lg btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
                             <?php echo form_close();?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Exit Modal -->
            <div class="modal fade" tabindex="-1" role="dialog" id="exit">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-warning"><span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp Warning!</h4>
                  </div>
                  <div class="modal-body">
                    Are you sure you want cancel creating the report? All progress will not be saved.
                  </div>
                  <div class="modal-footer">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <button type="button" class="btn btn-lg btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp No</button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <a href="<?php echo base_url() ?>/Representative/reports" style="text-decoration:none">
                        <button type="button" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp Yes</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
        </div>

    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- Bootstrap-Datepicker JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
    <!-- Custom Scripts -->
    <script src="<?php echo base_url();?>assets/js/global.js"></script>
    <script src="<?php echo base_url();?>assets/js/proposals.js"></script>
    <script src="<?php echo base_url();?>assets/js/form_processing.js"></script>

     <script type="text/javascript">
      $(function(){
        $('#fd_school').on('change', function(){
          var val = $(this).val();
          var sub = $('#fd_dept');
              sub.find('option').not(':first').hide();
              $('option', sub).filter(function() {
                  if($(this).attr('data-group') == val)
                      $(this).show();
              });
          sub.val(0);
        });
      });
    </script>

</body>

</html>