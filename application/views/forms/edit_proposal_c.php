<!DOCTYPE html>
<html>
<head>
	<title>CESDMS - Edit Proposal</title>
	<?php include('application/views/header.php');?>
</head>
<body>

	<div id="wrapper">

        <?php include('application/views/sidebar.php');?>
        <?php include('application/views/topNav.php');?>

        <!-- Page Content -->
        <div id="page-content-wrapper">

        	<?php var_dump($proposal); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header text-center">
                        <h1>Filling Out Form C <small>CES Program/Project/Activity Proposal</small></h1>
                        <h3>(<em>For Requests</em>)</h3>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row tab-content">
                    <div>
                    
                        <?php 
                            $attributes = array('id' => 'forms');
                            echo form_open('Proposals/process_forms', $attributes);
                        ?>
                            
                            <?php include('edit_proposal_header.php');?>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>Program/Project/Activity Profile</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                      <thead>
                                        <th class="bg-success">A. Requester (<em>please <span class="text-danger">check/tick</span> the appropriate item and <span class="text-danger">include</span> the specific name of partner or requester</em>)</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <table width="100%">
                                              <tr>
                                                <td width="15%">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="requester[]" value="community" data-toggle="collapse" data-target="#1_comm" <?php if (isset($proposal['community'])) echo 'checked="checked"' ?>>Community</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div id="1_comm" class="collapse <?php if (isset($proposal['community'])) echo 'in'?>">
                                                    <input type="text" class="form-control" name="community" placeholder="Please Specify..." <?php if (isset($proposal['community'])) echo 'value=" ' . $proposal['community'] . ' " ' ?>></td>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="requester[]" value="organization" data-toggle="collapse" data-target="#1_org" <?php if (isset($proposal['organization'])) echo 'checked="checked"'?>>Organization</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div id="1_org" class="collapse <?php if (isset($proposal['organization'])) echo 'in'?>">
                                                    <input type="text" class="form-control" name="organization" placeholder="Please Specify..." <?php if (isset($proposal['organization'])) echo 'value=" ' . $proposal['organization'] . ' " ' ?>></td>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="requester[]" value="institution" data-toggle="collapse" data-target="#1_inst" <?php if (isset($proposal['institution'])) echo 'checked="checked"' ?>>Institution</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div id="1_inst" class="collapse <?php if (isset($proposal['institution'])) echo 'in'?>">
                                                    <input type="text" class="form-control" name="institution" placeholder="Please Specify..."></td>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td colspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="requester[]" value="units from within usc" data-toggle="collapse" data-target="#1_units" <?php if (isset($proposal['unit_from_usc'])) echo 'checked="checked"'?>>Unit/s from within USC, please specify</label>
                                                  </div>
                                                  <div id="1_units" class="collapse <?php if (isset($proposal['unit_from_usc'])) echo 'in'?>">
                                                    <table class="table table-bordered" width="100%">
                                                      <tr>
                                                        <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" value="ces office">CES Office</label>
                                                          </div>
                                                        </td>
                                                        <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" value="school_of_arts_and_sciences" data-toggle="collapse" data-target="#sas">School of Arts and Sciences</label>
                                                            <div id="sas" class="collapse">
                                                              <select class="form-control" name="school_of_arts_and_sciences">
                                                                <option value="0">-- Select your Department --</option>
                                                                <option value="Languages and Literature">Languages and Literature</option>
                                                                <option value="Philosophy and Religious Studies">Philosophy and Religious Studies</option>
                                                                <option value="Psychology">Psychology</option>
                                                                <option value="Anthropology, Sociology and History">Anthropology, Sociology and History</option>
                                                                <option value="Biology">Biology</option>
                                                                <option value="Chemistry">Chemistry</option>
                                                                <option value="Computer and Information Sciences">Computer and Information Sciences</option>
                                                                <option value="Mathematics">Mathematics</option>
                                                                <option value="Physics">Physics</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td>
                                                        <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" value="school of architecture, fine arts and design" data-toggle="collapse" data-target="#safad">School of Architecture, Fine Arts and Design</label>
                                                            <div id="safad" class="collapse">
                                                              <select class="form-control" name="school_of_architecture_fine_arts_and_design">
                                                                <option value="0">-- Select your Department --</option>
                                                                <option value="Architecture">Architecture</option>
                                                                <option value="Fine Arts">Fine Arts</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" value="school of education" data-toggle="collapse" data-target="#soed">School of Education</label>
                                                            <div id="soed" class="collapse">
                                                              <select class="form-control" name="school_of_education">
                                                                <option value="0">-- Select your Department --</option>
                                                                <option value="Teacher Education">Teacher Education</option>
                                                                <option value="Science and Mathematics">Science and Mathematics</option>
                                                                <option value="Physical Education">Physical Education</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" value="school of engineering" data-toggle="collapse" data-target="#soe">School of Engineering</label>
                                                            <div id="soe" class="collapse">
                                                              <select class="form-control" name="school_of_engineering">
                                                                <option value="0">-- Select your Department --</option>
                                                                <option value="Chemical Engineering">Chemical Engineering</option>
                                                                <option value="Civil Engineering">Civil Engineering</option>
                                                                <option value="Computer Engineering">Computer Engineering</option>
                                                                <option value="Electronics and Communications Engineering">Electronics and Communications Engineering</option>
                                                                <option value="Electrical Engineering">Electrical Engineering</option>
                                                                <option value="Industrial Engineering">Industrial Engineering</option>
                                                                <option value="Mechanical Engineering">Mechanical Engineering</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td> 
                                                        <td>
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" value="school of business and economics" data-toggle="collapse" data-target="#sbe">School of Business and Economics</label>
                                                            <div id="sbe" class="collapse">
                                                              <select class="form-control" name="school_of_business_and_economics">
                                                                <option value="0">-- Select your Department --</option>
                                                                <option value="Accountancy">Accountancy</option>
                                                                <option value="Business Administration">Business Administration</option>
                                                                <option value="Economics">Economics</option>
                                                                <option value="Hospitality Management">Hospitality Management</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td> 
                                                      </tr>
                                                      <tr>
                                                        <td>
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" value="school of health care profession" data-toggle="collapse" data-target="#shcp">School of Health Care Profession</label>
                                                            <div id="shcp" class="collapse">
                                                              <select class="form-control" name="school_of_health_care_profession">
                                                                <option value="0">-- Select your Department --</option>
                                                                <option value="Nursing">Nursing</option>
                                                                <option value="Pharmacy">Pharmacy</option>
                                                                <option value="Nutrition and Dietics">Nutrition and Dietics</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" value="school of law and governance" data-toggle="collapse" data-target="#solg">School of Law and Governance</label>
                                                            <div id="solg" class="collapse">
                                                              <select class="form-control" name="school_of_law_and_governance">
                                                                <option value="0">-- Select your Department --</option>
                                                                <option value="Law">Law</option>
                                                                <option value="Political Science">Political Science</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td> 
                                                        <td>
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_from_usc[]" value="support unit" data-toggle="collapse" data-target="#su">Support Unit</label>
                                                            <div id="su" class="collapse">
                                                              <select class="form-control" name="support_unit">
                                                                <option value="0">-- Choose your Unit --</option>
                                                                <option value="Athletics Office">Athletics Office</option>
                                                                <option value="Campus Ministry, Talamban">Campus Ministry, Talamban</option>
                                                                <option value="Guidance Center">Guidance Center</option>
                                                                <option value="Director of Library">Director of Library</option>
                                                                <option value="OSA Downtown">OSA Downtown</option>
                                                                <option value="OSA Talamban">OSA Talamban</option>
                                                                <option value="Club Mega">Club Mega</option>
                                                                <option value="Pathways">Pathways</option>
                                                                <option value="USC-Supreme Student Council">USC-Supreme Student Council</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td> 
                                                      </tr>
                                                    </table>
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                      <thead>
                                        <th class="bg-success">B. Mode of request (<em>please <span class="text-danger">check/tick</span> the appropriate item and <span class="text-danger">attach</span> said communication to this proposal</em>)</th>
                                      </thead>

                                      <?php if (isset($proposal['mode_of_request'])) { 
                                      	$mode_of_request = explode(",", $proposal['mode_of_request']); 
                                      } ?>

                                      <tbody>
                                        <tr>
                                          <td>
                                            <table width="100%">
                                              <tr>
                                                <td colspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="mode_of_request[]" value="letter" <?php if (isset($proposal['mode_of_request']) && in_array("letter", $mode_of_request)) echo 'checked="checked"' ?>>letter, please attach</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td colspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="mode_of_request[]" value="email"<?php if (isset($proposal['mode_of_request']) && in_array("email", $mode_of_request)) echo 'checked="checked"' ?>>email, please attach</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td colspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="mode_of_request[]" value="verbal" <?php if (isset($proposal['mode_of_request']) && in_array("verbal", $mode_of_request)) echo 'checked="checked"' ?>>verbal, please provide evidence</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td colspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="mode_of_request[]" value="sms" <?php if (isset($proposal['mode_of_request']) && in_array("sms", $mode_of_request)) echo 'checked="checked"' ?>>SMS, please provide evidence</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="mode_of_request[]" value="others" data-toggle="collapse" data-target="#1b_others" <?php if (isset($proposal['mode_of_request']) && in_array("others", $mode_of_request)) echo 'checked="checked"' ?>>Others</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div id="1b_others" class="collapse <?php if (isset($proposal['mode_of_request_others'])) echo 'in' ?>">
                                                    <input type="text" class="form-control" name="mode_of_request_others"placeholder="Please Specify..." <?php if (isset($proposal['mode_of_request_others'])) echo 'value="'. $proposal['mode_of_request_others'] .'"'?>></td>
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>

<!-- +_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_ 3rd Part -->
                                      <thead>
                                        <th class="bg-success">C. Nature of the Program/Project/Activity (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)</th>
                                      </thead>
                                        
                                        <?php if (isset($proposal['nature_of_the_program'])) {
                                           $nature_of_the_program = explode(",", $proposal['nature_of_the_program']);
                                        } ?>

                                        <?php include('edit_nature_of_the_program.php'); ?>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 5th Part -->
                                      <thead>
                                        <th class="bg-success"> D. Program Area (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)</th>
                                      </thead>

                                      <?php if (isset($proposal['program_area'])) {
                                           $program_area = explode(",", $proposal['program_area']);
                                        } ?>
                                      
                                      <?php include('edit_program_area.php'); ?>

                                    </table>
                                </div>
                            </div>

                            <?php include('edit_rationale_and_contextualization.php');?>

                            <?php include('edit_goal_objectives_and_outcomes.php');?>

                            <?php include('edit_participants_partners_and_beneficiaries.php');?>

                            <?php include('edit_outline_of_activities.php');?>
                            
                            <?php include('edit_budgetary_requirements.php');?>

                            <?php echo form_hidden('proposal_id', $this->encryption->encrypt($proposal['id']) ); ?>
                            <input type="hidden" name="form_type" value="c"></input>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" align="center">
                              <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                              <button type="submit" class="btn btn-default btn-block" name="submit" value="save_c"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp SAVE & QUIT</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-success btn-block" id="submit" name="submit" value="submit_c"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>

            <?php include('exit_modal.php');?>

        </div>

    </div>
    <br>
    <br>
    <?php include('application/views/footer.php');?>

</body>
</html>