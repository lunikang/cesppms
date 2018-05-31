<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Fill Out Form B</title>
    <?php include('application/views/header.php');?>
</head>

<body>

    <div id="wrapper">

      <?php include('application/views/sidebar.php');?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            
            <?php include('application/views/topNav.php');?>

            <div class="row">
                <div class="col-md-12">
                    <div class="page-header text-center">
                        <h1>Filling Out Form B <small>CES Program/Project/Activity Proposal</small></h1>
                        <h3>(<em>Details</em>)</h3>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row tab-content">
                    <div>
                        <?php 
                            // $attributes = array('id' => 'forms');
                            // echo form_open('Proposals/process_forms', $attributes);
                        echo form_open('Proposals/processform_b');
                        ?>
                            

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>Program/Project/Activity Profile</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                      <thead>
                                        <th class="bg-success">A. College/School/Department/Unit Responsible (<em>please <span class="text-danger">check/tick</span> the appropiate item</em>)</th>
                                      </thead>
                                      <tbody>
                                        <tr> <td class="col-md-8">
                                         
                                        <tr>
                                          <td>
                                            <table class="table table-bordered" width="100%">
                                              <tr>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="unit_responsible[]" value="CES Office">CES Office</label>
                                                   <!--  <?php echo form_checkbox('unit_responsible[]', 'CES Office'); ?>CES Office -->
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                   <!--   <?php echo form_checkbox('unit_responsible[]', 'School of Arts and Sciences'); ?>School of Arts and Sciences -->

                                                    <label><input type="checkbox" name="unit_responsible[]" value="School of Arts and Sciences-" data-toggle="collapse" data-target="#sas">School of Arts and Sciences</label>
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
                                                    <label><input type="checkbox" name="unit_responsible[]" value="school of archetecture, fine arts and design" data-toggle="collapse" data-target="#safad">School of Architecture, Fine Arts and Design</label>
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
                                                    <label><input type="checkbox" name="unit_responsible[]" value="school of education" data-toggle="collapse" data-target="#soed">School of Education</label>
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
                                                    <label><input type="checkbox" name="unit_responsible[]" value="school of engineering" data-toggle="collapse" data-target="#soe">School of Engineering</label>
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
                                                    <label><input type="checkbox" name="unit_responsible[]" value="school of business and economics" data-toggle="collapse" data-target="#sbe">School of Business and Economics</label>
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
                                                    <label><input type="checkbox" name="unit_responsible[]" value="school of health care profession" data-toggle="collapse" data-target="#shcp">School of Health Care Profession</label>
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
                                                    <label><input type="checkbox" name="unit_responsible[]" value="school of law and governance" data-toggle="collapse" data-target="#solg">School of Law and Governance</label>
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
                                                    <label><input type="checkbox" name="unit_responsible[]" value="support unit" data-toggle="collapse" data-target="#su">Support Unit</label>
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
                                          </td>
                                        </tr>
                                      </tbody>
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                      <thead>
                                        <th class="bg-success">B. Time Frame (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <table class="table table-bordered" width="100%">
                                              <tr>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="radio">
                                                    <label><input type="radio" name="term" value="Short Term-" data-toggle="collapse" id="shortterm" data-target="#short_term">Short Term</label>
                                                  </div>
                                                  <div id="short_term" class="collapse">
                                                    <div class="panel">
                                                      <ul style="list-style-type:none">
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="semester" value="1 Semester">1 Semester</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="semester" value="2 Semesters">2 Semesters</label>
                                                          </div>
                                                        </li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="radio">
                                                    <label><input type="radio" name="term" value="Medium Term-"data-toggle="collapse" id="medterm" data-target="#medium_term">Medium Term</label>
                                                  </div>
                                                  <div id="medium_term" class="collapse">
                                                    <div class="panel">
                                                      <ul style="list-style-type:none">
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="semester" value="3 Semesters">3 Semesters</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="semester" value="4 Semesters">4 Semesters</label>
                                                          </div>
                                                        </li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="radio">
                                                    <label><input type="radio" name="term" value="Long Term-" data-toggle="collapse" id="longterm" data-target="#long_term">Long Term</label>
                                                  </div>
                                                  <div id="long_term" class="collapse">
                                                    <div class="panel">
                                                      <ul style="list-style-type:none">
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="semester" value="5 Semesters">5 Semesters</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="semester" value="6 Semesters">6 Semesters</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio form-inline">
                                                            <label><input type="radio" name="semester" value="others">Others:</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="semester_others" placeholder="Count by Semesters">
                                                          </div>
                                                        </li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
<!-- +_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_ 3rd Part -->
                                      <thead>
                                        <th class="bg-success">C. Locus and Leadership (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <table class="table table-bordered" width="100%">
                                              <tr>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="Course-based(undergraduate)">Course-based (undergraduate)</label>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="Course-based(graduate)">Course-based (graduate)</label>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="Student Organization-led">Student Organization-led</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="Department-led">Department-led</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="School-wide">School-wide</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="Alumni-led">Alumni-led</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="Support-unit Led">Support-unit Led</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="SVD-Led">SVD-Led</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox form-inline">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="others:">Others</label>
                                                    &nbsp
                                                    <input type="text" class="form-control" placeholder="Type Here..." name="locus_and_leadership_others">
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>

<!-- +_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_ 4th Part -->
                                      <thead>
                                        <th class="bg-success">D. Nature of the Program/Project/Activity (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)</th>
                                      </thead>
                                      
                                      <?php include('nature_of_the_program.php'); ?>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 5th Part -->
                                      <thead>
                                        <th class="bg-success">E. Program Area (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)</th>
                                      </thead>
                                      
                                      <?php include('program_area.php'); ?>

                                    </table>
                                </div>
                            </div>

                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h4>Significance/Relevance Matrix</h4>
                              </div>
                              <div class="panel-body">
                                <div class="alert alert-info" role="alert">
                                  <p><span class="glyphicon glyphicon-info-sign"></span>&nbsp <em>please <strong>check/tick</strong> the appropriate item</em></p>
                                </div>
                                <table class="table table-bordered" width="100%">

<!--STARRRRRRRTTTTTT HERE! radio buttons-->
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                  <thead>
                                    <th class="bg-success">A. Contextual Dimension: <em>establish responsive is the P/P/A to the local context:</em></th>
                                  </thead>
                                  <tbody>
              <!--START OF FIRST PART RADIO BUTTON-->
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="prelimasschoice_contextdimension[]" id="unitdone" data-toggle="collapse" data-target="#prelim1" value="unit have done preliminary needs assessment">unit have done preliminary needs assessment <span class="glyphicon glyphicon-asterisk"></span></label>
                                              </div>

                                          <!--COLLAPSE #prelim1-->
                                              <div id="prelim1" class="collapse">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Unit personnel involved in the needs assessment activity:</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                          <label><input type="checkbox" name="unit_personnel_involved[]" value="faculty members">faculty members</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="student org./majors">student org./majors</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="class instructor">class instructor</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="course enrollees">course enrollees</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="staff">staff</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="student volunteers">student volunteers</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="community/org partners">community/org partners</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="employed enumerators">employed enumerators</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="2">
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="others">Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="unit_personnel_involved_others" placeholder="Type Here...">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <!--END COLLAPSE #prelim1-->
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" id="unitnotdone" name="prelimasschoice_contextdimension[]" value="unit have not done preliminary needs assessment">unit have not done preliminary needs assessment</label>
                                              </div>
                                            </td>
                                          </tr>
<!--END OF FIRST PART RADIO BUTTON-->

                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="verifdatachoice[]" value="with existing verifiable data from the field" id="withdata" data-toggle="collapse" data-target="#data1">with existing verifiable data from the field <span class="glyphicon glyphicon-asterisk"></span></label>
                                              </div>
                                              <div id="data1" class="collapse">
                                                <table class="table table-bordered" width="100%">
                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Data source/s:</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                          <label><input type="checkbox" name="data_sources[]" value="research(faculty/student)">research (faculty/student)</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="provided/expressed by the partner">provided/expressed by the partner</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="thesis/dissertation">thesis/dissertation</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="recommended by faculty/student/class">recommended by faculty/student/class</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="CES data gathering initiatives">CES data gathering initiatives</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="from Government agency">from Government agency</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="community meetings">community meetings</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="reflection notes/papers">reflection notes/papers</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="from secondary sources">from secondary sources</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="data_sources[]" value="others">Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="data_sources_others" placeholder="Type Here...">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>

                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Tools used to gather data:</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="survey/questionnare">survey/questionnare</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="exposure/immersions">exposure/immersions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="KII/FGDs">KII/FGDs</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="validation sessions">validation sessions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="ocular visit">ocular visit</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="documents review">documents review</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="community meetings">community meetings</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="others">Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="tools_used_to_gather_others" placeholder="Type Here...">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>

                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Means employed to verify the data:</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="survey/questionnare">survey/questionnare</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="exposure/immersions">exposure/immersions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="KII/FGDs">KII/FGDs</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="validation sessions">validation sessions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="ocular visit">ocular visit</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="documents review">documents review</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="community meetings">community meetings</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="others">Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="means_employed_to_verify_others" placeholder="Type Here...">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>

                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Who collected the data:</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" value="faculty">faculty</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" value="government agency">government agency</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" value="undergraduate students">undergraduate students</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" value="partner community/org./institution">partner community/org./institution</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" value="graduate students">graduate students</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" value="deloaded researcher">deloaded researcher</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="2">
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="who_collected[]" value="others">Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="who_collected_others" placeholder="Type Here...">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="verifdatachoice[]" value="without data from the field" id="withoutdata" data-toggle="collapse" data-target="#data2">without data from the field</label>
                                              </div>
                                              <div id="data2" class="collapse">
                                                <div class="panel">
                                                  <table class="table" width="100%">
                                                    <tr>
                                                      <td>
                                                        <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Enumerate bases for proposing the P/P/A:</th></label>
                                                        <textarea class="form-control" rows="10" name="bases_for_proposing_ppa" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp What are the means employed to ensure the responsiveness of the P/P/A to the local condition?</th></label>
                                                        <textarea class="form-control" rows="10" name="means_employed_to_ensure_responsiveness" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </div>
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                        <div class="alert alert-info" role="alert">
                                          <p><span class="glyphicon glyphicon-asterisk"></span>&nbsp <em>Please provide as attachment a copy of the needs assessment report or any available data as basis for this proposal</em></p>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
<!--ENDDDDD HERE! radio buttons-->


<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                  <thead>
                                    <th class="bg-success">B. Productivity Dimension: <em>please <span class="text-danger">check/tick</span> the appropriate item if the P/P/A involves technology:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="production of new technology">production of new technology</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="transfer of existing technology">transfer of existing technology</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="utilization of existing technology">utilization of existing technology</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="refinement/modification of existing technology">refinement/modification of existing technology</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="training or capacity-building for the use of Technology">training or capacity-building for the use of Technology</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="others">Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="productivity_dimension_others" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 3rd Part -->
                                  <thead>
                                    <th class="bg-success">C. Economic Dimension: <em>please <span class="text-danger">check/tick</span> the appropriate item if the P/P/A has economic implications:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="economic_dimension[]" value="generation of new livelihood projects/opportunities">generation of new livelihood projects/opportunities</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="economic_dimension[]" value="enhancement of partner’s current livelihood">enhancement of partner’s current livelihood</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="economic_dimension[]" value="employability of partners at">employability of partners at</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="employability_of_partners" placeholder="Type Here...">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="economic_dimension[]" value="measurable increase in the income of partners">measurable increase in the income of partners</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="economic_dimension[]" value="others">Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="economic_dimension_others" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 4th Part -->
                                  <thead>
                                    <th class="bg-success">
                                      D. Social Dimension: <em>please <span class="text-danger">check/tick</span> the appropriate item if the P/P/A will lead to or benefit: <small>PROVIDE THE ESTIMATED NUMBER OF BENEFICIARIES PER GROUP</small></em>
                                    </th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <thead>
                                            <th class="text-center" colspan="2">The P/P/A will benefit:</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="households" data-toggle="collapse" data-target="#hh">households</label>
                                                </div>
                                                <div id="hh" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_household" placeholder="How many?">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="youth(male)" data-toggle="collapse" data-target="#youth_m">youth (male) <em>[13 to 30 years old]</em></label>
                                                </div>
                                                <div id="youth_m" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_youth_male" placeholder="How many?">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="Local Government Units" data-toggle="collapse" data-target="#2_lgu">Local Government Units</label>
                                                </div>
                                                <div id="2_lgu" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_local_government_unit" placeholder="How many?">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="youth(female)" data-toggle="collapse" data-target="#youth_f">youth (female) <em>[13 to 30 years old]</em></label>
                                                </div>
                                                <div id="youth_f" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_youth_female" placeholder="How many?">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]"  value="Organizations/Associations" data-toggle="collapse" data-target="#oa">Organizations/Associations</label>
                                                </div>
                                                <div id="oa" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_organization" placeholder="How many?">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="children(boy)" data-toggle="collapse" data-target="#boy">children (boy) <em>[6 to 12 years old]</em></label>
                                                </div>
                                                <div id="boy" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_children_boy" placeholder="How many?">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="senior citizens(male)" data-toggle="collapse" data-target="#sr_m">senior citizens (male) <em>[at least 60 years old]</em></label>
                                                </div>
                                                <div id="sr_m" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_senior_citizen_male" placeholder="How many?">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="children(girl)" data-toggle="collapse" data-target="#girl">children (girl) <em>[6 to 12 years old]</em></label>
                                                </div>
                                                <div id="girl" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_children_girl" placeholder="How many?">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="senior citizens(female)" data-toggle="collapse" data-target="#sr_f">senior citizens (female) <em>[at least 60 years old]</em></label>
                                                </div>
                                                <div id="sr_f" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_senior_citizen_female" placeholder="How many?">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="infants(boy)" data-toggle="collapse" data-target="#infants_b">infants (boy) <em>[0 to 5 years old]</em></label>
                                                </div>
                                                <div id="infants_b" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_infants_boy" placeholder="How many?">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="adults(male)" data-toggle="collapse" data-target="#adults_m">adults (male) <em>[31 to 59 years old]</em></label>
                                                </div>
                                                <div id="adults_m" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_adults_male" placeholder="How many?">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]"  value="infants(girl)" data-toggle="collapse" data-target="#infants_g">infants (girl) <em>[0 to 5 years old]</em></label>
                                                </div>
                                                <div id="infants_g" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_infants_girl" placeholder="How many?">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="adults(female)" data-toggle="collapse" data-target="#adults_f">adults (female) <em>[31 to 59 years old]</em></label>
                                                </div>
                                                <div id="adults_f" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_adults_female" placeholder="How many?">
                                                </div>
                                              </td>
                                              <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="social_dimension[]" value="others" data-toggle="collapse" data-target="#benefit_others">Others</label>
                                              </div>
                                              <div id="benefit_others" class="collapse form-inline">
                                                <input type="text" class="form-control" name="social_dimension_others" placeholder="Type Here...">
                                                <input type="number" class="form-control" name="social_dimension_others_count" placeholder="How many?">
                                              </div>
                                            </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 5th Part -->
                                  <thead>
                                    <th class="bg-success">E. Environmental  Dimension: <em>the P/P/A addresses the environmental needs of the community</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="environment_dimension[]" value="River Management">River Management</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="environment_dimension[]" value="Greening Initiatives">Greening Initiatives <small>(e.g. Tree Panting, forestation, etc.)</small></label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="environment_dimension[]" value="Mangrove Planting">Mangrove Planting</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="environment_dimension[]" value="Clean-up Drives">Clean-up Drives <small>(coastal, river, drainage, sewage, etc.)</small></label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="environment_dimension[]" value="Beautification Activities">Beautification Activities</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox"name="environment_dimension[]" value="others">Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="environment_dimension_others" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 6th Part -->
                                  <thead>
                                    <th class="bg-success">F. Governance Dimension: <em>the program/project/activity will yield:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="networking with local government units and community leaders">networking with Local Government Units and community leaders</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="funding support from local government units">funding support from Local Government Units</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="funding support from other partners">funding support from other partners</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="established counterparts from local government units">established counterparts from Local Government Units</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="established counterparts from other partners">established counterparts from other partners</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="MOA/MOU with LGUs">Memorandum of Agreement or Memorandum of Understanding with Local Government Units</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="MOA/MOU with other partners">Memorandum of Agreement or Memorandum of Understanding with other partners</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="policy advocacy by USC faculty/students/staff">policy advocacy by USC faculty/students/staff</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="policy change initiatives by LGUs">policy change initiatives by Local Government Units</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="government_dimension[]" value="others">Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="government_dimension_others" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h4>Implications to Work hours, Academic Program, and Research</h4>
                              </div>
                              <div class="panel-body">
                                <div class="alert alert-info" role="alert">
                                  <p sty;e="text:justify"><span class="glyphicon glyphicon-info-sign"></span>&nbsp <em>The following variables are identified as essentials in order to determine that your program/project/activities are aligned to your unit’s program offerings and research priorities. Please provide the required preliminary data. <strong>Also, do take note that these will be verified after the completion of the program/project/activity.</strong></em></p>
                                </div>
                                <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                  <thead>
                                    <th class="bg-success">A. Practical Counts: <em>please provide below your estimated count per item:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="hours_needed_to_prepare" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of man hours needed to prepare the P/P/A</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="hours_needed_to_complete" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of man hours needed to complete the P/P/A</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="faculty_members_involved_count" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of faculty members who will be involved</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="course_based_students_involved_count" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of course-based students who will be involved</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="student_organization_members_involved_count" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of Student Organization members who will be involved</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="staff_involved_count" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of staff who will be involved</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="campaign_materials_to_produce_count" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of Information and Education Campaign materials to be produced</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="campaign_materials_to_improve_count" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of Information and Education Campaign materials to be improved/enhanced</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="curriculum_programs_to_develop_count" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of curricular programs to be developed</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="curriculum_programs_to_improve_count" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of curricular programs to be improved/enhanced</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="proposals_to_develop_count" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of proposals to be developed</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="papers_presented_count" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of papers to be presented</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="papers_published_count" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of papers to be published</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="policies_to_advocate_count" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of policies to be advocated</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                  <thead>
                                    <th class="bg-success">B. Human Resource Implications: <em>please provide the specifics:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <thead>
                                            <th colspan="3" class="text-center"><u>PREPARATION</u> OF THE PPA</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td width="30%"></td>
                                              <td class="text-center"><label>Faculty Members</label></td>
                                              <td class="text-center"><label>Students</label></td>
                                            </tr>
                                            <tr>
                                              <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Expertise and/or specialization needed</td>
                                              <td><textarea class="form-control" rows="3" name="preparation_expertise_needed_faculty_members"></textarea></td>
                                              <td><textarea class="form-control" rows="3" name="preparation_expertise_needed_students"></textarea></td>
                                            </tr>
                                            <tr>
                                              <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Roles/tasks</td>
                                              <td><textarea class="form-control" rows="3" name="preparation_roles_faculty_members"></textarea></td>
                                              <td><textarea class="form-control" rows="3" name="preparation_roles_students"></textarea></td>
                                            </tr>
                                          </tbody>
                                        </table>

                                        <table class="table table-bordered" width="100%">
                                          <thead>
                                            <th colspan="3" class="text-center">IMPLEMENTATION</u> OF THE PPA</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td width="30%"></td>
                                              <td class="text-center"><label>Faculty Members</label></td>
                                              <td class="text-center"><label>Students</label></td>
                                            </tr>
                                            <tr>
                                              <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Expertise and/or specialization needed</td>
                                              <td><textarea class="form-control" rows="3" name="implementation_expertise_needed_faculty_members"></textarea></td>
                                              <td><textarea class="form-control" rows="3"name="implementation_expertise_needed_students"></textarea></td>
                                            </tr>
                                            <tr>
                                              <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Roles/tasks</td>
                                              <td><textarea class="form-control" rows="3" name="implementation_roles_faculty_members"></textarea></td>
                                              <td><textarea class="form-control" rows="3" name="implementation_roles_students"></textarea></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h4>Institutional and Policy Support Needs and Counterparts</h4>
                              </div>
                              <div class="panel-body">
                                <div class="alert alert-info" role="alert">
                                  <p sty;e="text:justify"><span class="glyphicon glyphicon-info-sign"></span>&nbsp <em>It is essential that all extension initiatives remain faithful to the mutual contributions from partners to avoid the development of the partner’s dependent behavior toward the USC/unit. Thus, all CES programs/projects/ activities must be built on co-ownership of the initiatives. Hence, please identify the various logistical support needs essential in pursuing the program/project/activity to be sourced from both the USC system as well as from partners/beneficiaries</em></p>
                                </div>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                <table class="table table-bordered" width="100%">
                                  <thead>
                                    <th class="bg-success">A. Support from the USC system: <em>please identify your specific needs from USC-CES:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="support_from_usc[]" value="collaboration with other units">collaboration with other units</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="support_from_usc_collaboration" placeholder="Type Here...">
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="support_from_usc[]" value="resource speaker/s on">resource speaker/s on</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="support_from_usc_resource_speaker" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="support_from_usc[]" value="provision of meals and snacks for usc manpower">provision of meals and snacks for USC manpower</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="support_from_usc[]" value="provision of meals and snacks for partners">provision of meals and snacks for partners</label>
                                              </div>
                                            </td>
                                          </tr>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="support_from_usc[]" value="transport for">transport for</label>
                                                &nbsp
                                                <input type="number" class="form-control" name="support_from_usc_transport_count" placeholder="How Many?">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="support_from_usc[]" value="venue or work station/s">venue or work station/s</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="support_from_usc[]" value="materials">materials</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="support_from_usc[]" value="others">Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="support_from_usc_others" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                <table id="support-from-partner" class="table table-bordered" width="100%">
                                  <thead>
                                    <th class="bg-success">B. Support from partners/beneficiaries: <em>please specify the contributions/counterparts from partners:</em> 
                                      <button type="button" id="add-support-partners-row" class="pull-right btn btn-sm btn-success">
                                        <span class="glyphicon glyphicon-plus-sign"></span>
                                        &nbspAdd Row
                                      </button>
                                    </th>
                                  </thead>
                                    <tbody>
                                       
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <thead>
                                            <th colspan="2">
                                              <div class="form-inline">
                                                <label>Partner/Beneficiaries:</label>
                                                &nbsp
                                                <input type="text" class="form-control" placeholder="Type Here..." style="width:80%">
                                                <button type="button" class="rm-support-partners-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>
                                              </div>
                                            </th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="">collaboration with other units</label>
                                                  &nbsp
                                                  <input type="text" class="form-control" placeholder="Type Here...">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="">resource speaker/s on</label>
                                                  &nbsp
                                                  <input type="text" class="form-control" placeholder="Type Here...">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="">provision of meals and snacks for USC manpower</label>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="">provision of meals and snacks for partners</label>
                                                </div>
                                              </td>
                                            </tr>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="">transport for</label>
                                                  &nbsp
                                                  <input type="number" class="form-control" placeholder="How Many?">
                                                </div>
                                              </td>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="">registration fee/charge of</label>
                                                  &nbsp
                                                  <input type="number" class="form-control" placeholder="Type Here...">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="">venue or work station/s</label>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="">materials</label>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                            <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="">Others</label>
                                                  &nbsp
                                                  <input type="text" class="form-control" placeholder="Type Here...">
                                                </div>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h4>Partnership and Linkage Profile</h4>
                              </div>
                              <div class="panel-body">
                                <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                  <thead>
                                    <th class="bg-success">A. Partners and Collaborators: <em>please identify your partners/collaborators and provide their contribution/s:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <thead>
                                            <th class="text-center" width="40%">WITHIN USC Partners and/or Beneficiaries</th>
                                            <th class="text-center">What is/are the contribution/s or counterpart of the partner?</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_within_usc[]" value="academic department" data-toggle="collapse" data-target="#dept">Academic Department:</label>
                                                </div>
                                                <div id="dept" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_academic_department" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_academic_department_contributions" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_within_usc[]" value="co-curricular student organization" data-toggle="collapse" data-target="#co_cur">Co-Curricular Student Organization:</label>
                                                </div>
                                                <div id="co_cur" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_co_curricular_student_organization" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_co_curricular_student_organization_contribution" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_within_usc[]" value="extra-curricular student organization" data-toggle="collapse" data-target="#extra_cur">Extra-Curricular Student Organization:</label>
                                                </div>
                                                <div id="extra_cur" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_extra_curricular_student_organization" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_extra_curricular_student_organization_contribution" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_within_usc[]" value="support unit" data-toggle="collapse" data-target="#supp">Support Unit:</label>
                                                </div>
                                                <div id="supp" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_support_unit" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_support_unit_contribution" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_within_usc[]" value="alumni" data-toggle="collapse" data-target="#alum">Alumni:</label>
                                                </div>
                                                <div id="alum" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_alumni" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_alumni_contribution" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_within_usc[]" value="basic education" data-toggle="collapse" data-target="#bed">Basic Education:</label>
                                                </div>
                                                <div id="bed" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_basic_education" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_basic_education_contribution" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_within_usc[]" value="montessori academy" data-toggle="collapse" data-target="#mont_acad">Montessori Academy:</label>
                                                </div>
                                                <div id="mont_acad" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_montessori_academy" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_contributions" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_within_usc[]" value="others" data-toggle="collapse" data-target="#5a_others">Others:</label>
                                                </div>
                                                <div id="5a_others" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_within_usc_others" placeholder="Type...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_within_usc_others_contribution" placeholder="Type Here..."></td>
                                            </tr>
                                          </tbody>

                                          <thead>
                                            <th class="text-center" width="40%">OUTSIDE of USC Partners and/or Beneficiaries</th>
                                            <th class="text-center">What is/are the contribution/s or counterpart of the partner?</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_outside_usc[]" value="marginalized community" data-toggle="collapse" data-target="#marg_comm">Marginalized Community:</label>
                                                </div>
                                                <div id="marg_comm" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_marginalized_community" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_marginalized_community_contribution" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_outside_usc[]" value="local government unit" data-toggle="collapse" data-target="#5_lgu">Local Government Unit:</label>
                                                </div>
                                                <div id="5_lgu" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_local_government_unit" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_local_government_unit_contribution" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_outside_usc[]" value="public school" data-toggle="collapse" data-target="#pub">Public school:</label>
                                                </div>
                                                <div id="pub" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_public_school" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_public_school_contribution" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_outside_usc[]" value="civic group/association" data-toggle="collapse" data-target="#civ_grp">Civic Group/Association:</label>
                                                </div>
                                                <div id="civ_grp" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_civiv_group" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_civic_group_contribution" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_outside_usc[]" value="professional organization" data-toggle="collapse" data-target="#prof_org">Professional Organization:</label>
                                                </div>
                                                <div id="prof_org" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_professional_organization" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_professional_organization_contribution" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_outside_usc[]" value="government agency" data-toggle="collapse" data-target="#gov_agency">Government Agency:</label>
                                                </div>
                                                <div id="gov_agency" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_government_agency" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_government_agency_contribution" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_outside_usc[]" value="church" ata-toggle="collapse" data-target="#church">Church:</label>
                                                </div>
                                                <div id="church" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_church" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_church_contribution" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_outside_usc[]" value="advocacy group/non-governmental organization" data-toggle="collapse" data-target="#ngo">Advocacy Group/Non-Governmental Organization:</label>
                                                </div>
                                                <div id="ngo" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_advocacy_group" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_advocacy_group_contribution" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="partners_and_collaborators_outside_usc[]" value="others" data-toggle="collapse" data-target="#5b_others">Others:</label>
                                                </div>
                                                <div id="5b_others" class="collapse">
                                                  <input type="text" class="form-control" name="partners_and_collaborators_outside_usc_others" placeholder="Type...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" name="partners_and_collaborators_outside_usc_others_contribution" placeholder="Type Here..."></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                  <thead>
                                    <th class="bg-success">B. Nature of Linkage/Partnership: <em>please specify:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="moa" id="withmoa" name="nature_of_linkage" value="with memorandum of understanding/memorandum of agreement" data-toggle="collapse" data-target="#with_moa">with Memorandum of Understanding / Memorandum of Agreement</label>
                                              </div>
                                              <div id="with_moa" class="collapse">
                                                <div class="panel">
                                                  <table width="100%">
                                                    <tr>
                                                      <td class="text-right"><label>Date Signed:</label></td>
                                                      <td width="2%"></td>
                                                      <td><input type="text" name="date_signed" class="form-control datepicker" placeholder="mm/dd/yyyy"><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-right"><label>Signatories for USC:</label></td>
                                                      <td></td>
                                                      <td><input type="text" name="signatories_for_usc" class="form-control" placeholder="Type Here..."><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-right"><label>Signatories for Partner:</label></td>
                                                      <td></td>
                                                      <td><input type="text" name="signatories_for_partner" class="form-control" placeholder="Type Here..."><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <hr>
                                                        <label>Enumerate the Major duties of USC/Unit:</label>
                                                        <textarea class="form-control" rows="5" name="major_duties_of_usc_unit" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <label>Enumerate the Major duties of Partner/s:</label>
                                                        <textarea class="form-control" rows="5" name="major_duties_of_partner" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <label>Enumerate the opportunities identified:</label>
                                                        <textarea class="form-control" rows="5" name="with_moa_opportunities_identified" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <label>Enumerate the challenges/problems encountered:</label>
                                                        <textarea class="form-control" rows="5" name="with_moa_challenges_encountered" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </div>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="moa" id="withoutmoa"name="nature_of_linkage" value="without memorandum of understanding/memorandum of agreement" data-toggle="collapse" data-target="#without_moa">without Memorandum of Understanding / Memorandum of Agreement</label>
                                              </div>
                                              <div id="without_moa" class="collapse">
                                                <div class="panel">
                                                  <table width="100%">
                                                    <tr>
                                                      <td class="text-right"><label>Since when is the linkage:</label></td>
                                                      <td width="2%"></td>
                                                      <td><input type="text" name="date_linkage_started" class="form-control datepicker"><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-right"><label>Who initiated the linkage:</label></td>
                                                      <td></td>
                                                      <td><input type="text" name="who_initiated_linkage" class="form-control" placeholder="Type Here..."><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <hr>
                                                        <label>Enumerate the activities already done:</label>
                                                        <textarea name="activities_done" class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <label>Enumerate the opportunities identified:</label>
                                                        <textarea name="without_moa_opportunities_identified" class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                     <tr>
                                                      <td colspan="3">
                                                        <label>Enumerate the challenges/problems encountered:</label>
                                                        <textarea name="without_moa_problems_encountered" class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </div>
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>


                           <!--  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button> -->

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" align="center">
                              <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                              <button type="submit" class="btn btn-default btn-block" name="submit" value="save_b"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp SAVE & QUIT</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-success btn-block" id="submit" name="submit" value="submit_b" onclick= "window.location = '<?php echo base_url();?>index.php/Representative/send'"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
                            </div>
                           <?php echo form_close();?>
                    </div>
                </div>
            </div>

         
            
        </div>

    </div>
    <br>
    <br>
    <?php include('application/views/footer.php');?>

</body>

</html>