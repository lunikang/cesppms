<!DOCTYPE html>
<html lang="en">



<body>

   
      <div class="page-header text-center">
                        <h1>Filling Out Form B <small>CES Program/Project/Activity Proposal</small></h1>
                        <h3>(<em>Details</em>)</h3>
                    </div>

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
                                            <table id="GOGO" class="table table-bordered" width="100%">
                                            
                                              <tr>
                                                 <?php $unitresp= explode(' , ', $result_ab['unitresp_chosenradio']);?>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="unit_responsible[]" value="CES Office" <?php  if(in_array("CES Office", $unitresp)) {echo 'checked';}?>/>CES Office</label>
                                                   <!--  <?php echo form_checkbox('unit_responsible[]', 'CES Office'); ?>CES Office -->
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                   <!--   <?php //echo form_checkbox('unit_responsible[]', 'School of Arts and Sciences'); ?>School of Arts and Sciences -->

                                                    <label><input type="checkbox" name="unit_responsible[]" value="School of Arts and Sciences" data-toggle="collapse" data-target="#sas" <?php  if(in_array("School of Arts and Sciences", $unitresp)) {echo 'checked';}?>>School of Arts and Sciences</label>
                                                    <div id="sas" class="collapse">
                                                      <select class="form-control" name="school_of_arts_and_sciences">
                                                        <option value="<?php echo $result_ab['SAS'];?>"><?php echo $result_ab['SAS'];?></option>

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
                                                    <label><input type="checkbox" name="unit_responsible[]" value="School of Archetecture, Fine Arts and Design" data-toggle="collapse" data-target="#safad" <?php  if(in_array("School of Archetecture, Fine Arts and Design", $unitresp)) {echo 'checked';}?>>School of Architecture, Fine Arts and Design</label>
                                                    <div id="safad" class="collapse">
                                                      <select class="form-control" name="school_of_architecture_fine_arts_and_design">
                                                        <option value="<?php echo $result_ab['SAFAD'];?>"><?php echo $result_ab['SAFAD'];?></option>
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
                                                    <label><input type="checkbox" name="unit_responsible[]" value="School of Education" data-toggle="collapse" data-target="#soed" <?php  if(in_array("School of Education", $unitresp)) {echo 'checked';}?>>School of Education</label>
                                                    <div id="soed" class="collapse">
                                                      <select class="form-control" name="school_of_education">
                                                        <option value="<?php echo $result_ab['SED'];?>"><?php echo $result_ab['SED'];?></option>
                                                        <option value="Teacher Education">Teacher Education</option>
                                                        <option value="Science and Mathematics">Science and Mathematics</option>
                                                        <option value="Physical Education">Physical Education</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="unit_responsible[]" value="School of Engineering" data-toggle="collapse" data-target="#soe" <?php  if(in_array("School of Engineering", $unitresp)) {echo 'checked';}?>>School of Engineering</label>
                                                    <div id="soe" class="collapse">
                                                      <select class="form-control" name="school_of_engineering">
                                                        <option value="<?php echo $result_ab['SOE'];?>"><?php echo $result_ab['SOE'];?></option>
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
                                                    <label><input type="checkbox" name="unit_responsible[]" value="School of Business and Economics" data-toggle="collapse" data-target="#sbe" <?php  if(in_array("School of Business and Economics", $unitresp)) {echo 'checked';}?>>School of Business and Economics</label>
                                                    <div id="sbe" class="collapse">
                                                      <select class="form-control" name="school_of_business_and_economics">
                                                        <option value="<?php echo $result_ab['SBE'];?>"><?php echo $result_ab['SBE'];?></option>
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
                                                    <label><input type="checkbox" name="unit_responsible[]" value="School of Health Care Profession" data-toggle="collapse" data-target="#shcp" <?php  if(in_array("School of Health Care Profession", $unitresp)) {echo 'checked';}?>>School of Health Care Profession</label>
                                                    <div id="shcp" class="collapse">
                                                      <select class="form-control" name="school_of_health_care_profession">
                                                        <option value="<?php echo $result_ab['SHCP'];?>"><?php echo $result_ab['SHCP'];?></option>
                                                        <option value="Nursing">Nursing</option>
                                                        <option value="Pharmacy">Pharmacy</option>
                                                        <option value="Nutrition and Dietics">Nutrition and Dietics</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="unit_responsible[]" value="School of Law and Governance" data-toggle="collapse" data-target="#solg" <?php  if(in_array("School of Law and Governance", $unitresp)) {echo 'checked';}?>>School of Law and Governance</label>
                                                    <div id="solg" class="collapse">
                                                      <select class="form-control" name="school_of_law_and_governance">
                                                        <option value="<?php echo $result_ab['SLG'];?>"><?php echo $result_ab['SLG'];?></option>
                                                        <option value="Law">Law</option>
                                                        <option value="Political Science">Political Science</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td> 
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="unit_responsible[]" value="Support Unit" data-toggle="collapse" data-target="#su" <?php  if(in_array("Support Unit", $unitresp)) {echo 'checked';}?>>Support Unit</label>
                                                    <div id="su" class="collapse">
                                                      <select class="form-control" name="support_unit">
                                                        <option value="<?php echo $result_ab['Supunit'];?>"><?php echo $result_ab['Supunit'];?></option>
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
                                                <?php  ?>
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
                                               <?php $time_frame= explode(' , ', $result_ab['timeframe']);?>
                                              <tr>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="radio">
                                                    <label><input type="radio" name="term" value="Short Term-" data-toggle="collapse" id="shortterm" data-target="#short_term" <?php  if(in_array("Short Term-", $time_frame)) { echo "checked";}?> >Short Term</label>
                                                  </div>
                                                  <div id="short_term" class="collapse">
                                                    <div class="panel">
                                                      <ul style="list-style-type:none">
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="semester" value="1 Semester" enabled="true" id="sem1" <?php  if(in_array("1 Semester", $time_frame)) { echo "checked";}?>>1 Semester</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="semester" value="2 Semesters" enabled="true" id="sem2" <?php  if(in_array("2 Semesters", $time_frame)) { echo "checked";}?> >2 Semesters</label>
                                                          </div>
                                                        </li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="radio">
                                                    <label><input type="radio" name="term" value="Medium Term-"data-toggle="collapse" id="medterm" data-target="#medium_term" <?php  if(in_array("Medium Term-", $time_frame)) { echo "checked";}?>>Medium Term</label>
                                                  </div>
                                                  <div id="medium_term" class="collapse">
                                                    <div class="panel">
                                                      <ul style="list-style-type:none">
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="semester" value="3 Semesters" enabled="true" id="sem3" <?php  if(in_array("3 Semesters", $time_frame)) { echo "checked";}?> >3 Semesters</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="semester" value="4 Semesters" enabled="true" id="sem4" <?php  if(in_array("4 Semesters", $time_frame)) { echo "checked";}?> >4 Semesters</label>
                                                          </div>
                                                        </li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="radio">
                                                    <label><input type="radio" name="term" value="Long Term-" data-toggle="collapse" id="longterm" data-target="#long_term" <?php  if(in_array("Long Term-", $time_frame)) { echo "checked";}?>>Long Term</label>
                                                  </div>
                                                  <div id="long_term" class="collapse">
                                                    <div class="panel">
                                                      <ul style="list-style-type:none">
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="semester" value="5 Semesters" enabled="true" id="sem5" <?php  if(in_array("5 Semesters", $time_frame)) { echo "checked";}?> >5 Semesters</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="semester" value="6 Semesters" enabled="true" id="sem6" <?php  if(in_array("6 Semesters", $time_frame)) { echo "checked"; }?> >6 Semesters</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio form-inline">
                                                            <label><input type="radio" name="semester" value="others" enabled="true" id="sem_others" <?php  if(in_array("others", $time_frame)) { echo "checked";} ?> >Others:</label>
                                                            &nbsp
                                                            <input type="text" id="othersem" class="form-control" name="semester_others" placeholder="Count by Semesters" value="<?php echo $result_ab['timeframe_others']?>">
                                                               
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
                                              <?php $locus_and_leadership= explode(' , ', $result_ab['locus_and_lead']);?>
                                              <tr>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="Course-based(undergraduate)" <?php  if(in_array("Course-based(undergraduate)", $locus_and_leadership)) { echo "checked";} ?> >Course-based (undergraduate)</label>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="Course-based(graduate)" <?php  if(in_array("Course-based(graduate)", $locus_and_leadership)) { echo "checked";} ?> >Course-based (graduate)</label>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="Student Organization-led" <?php  if(in_array("Student Organization-led", $locus_and_leadership)) { echo "checked";} ?> >Student Organization-led</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="Department-led" <?php  if(in_array("Department-led", $locus_and_leadership)) { echo "checked";} ?> >Department-led</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="School-wide" <?php  if(in_array("School-wide", $locus_and_leadership)) { echo "checked";} ?> >School-wide</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="Alumni-led" <?php  if(in_array("Alumni-led", $locus_and_leadership)) { echo "checked";} ?> >Alumni-led</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="Support-unit Led" <?php  if(in_array("Support-unit Led", $locus_and_leadership)) { echo "checked";} ?> >Support-unit Led</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="SVD-Led" <?php  if(in_array("SVD-Led", $locus_and_leadership)) { echo "checked";} ?> >SVD-Led</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox form-inline">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" value="others:" <?php  if(in_array("others:", $locus_and_leadership)) { echo "checked";} ?> >Others</label>
                                                    &nbsp
                                                    <input type="text" class="form-control" placeholder="Type Here..." name="locus_and_leadership_others" value="<?php echo $result_ab['locus_and_lead_spec']?>">
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
                                      
                                      <?php include('nature_of_the_program_edit.php'); ?>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 5th Part -->
                                      <thead>
                                        <th class="bg-success">E. Program Area (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)</th>
                                      </thead>
                                      
                                      <?php include('program_area_edit.php'); ?>

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
                                          <?php ?>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="prelimasschoice_contextdimension[]" id="unitdone" data-toggle="collapse" data-target="#prelim1" value="unit have done preliminary needs assessment" <?php  if($result_ab['prelimneedassess_choice'] === "unit have done preliminary needs assessment") { echo "checked";} ?> >unit have done preliminary needs assessment <span class="glyphicon glyphicon-asterisk"></span></label>
                                              </div>

                                          <!--COLLAPSE #prelim1-->
                                              <div id="prelim1" class="collapse">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Unit personnel involved in the needs assessment activity:</th>
                                                  </thead>
                                                  <tbody>
                                                    <?php $unit_personnel_involved= explode(' , ', $result_ab['upi_chosenradio']);?>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                          <label><input type="checkbox" name="unit_personnel_involved[]" value="faculty members" <?php  if(in_array("faculty members", $unit_personnel_involved)) { echo "checked";} ?> >faculty members</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="student org./majors" <?php  if(in_array("student org./majors", $unit_personnel_involved)) { echo "checked";} ?> >student org./majors</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="class instructor" <?php  if(in_array("class instructor", $unit_personnel_involved)) { echo "checked";} ?> >class instructor</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="course enrollees" <?php  if(in_array("course enrollees", $unit_personnel_involved)) { echo "checked";} ?> >course enrollees</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="staff" <?php  if(in_array("staff", $unit_personnel_involved)) { echo "checked";} ?> >staff</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="student volunteers" <?php  if(in_array("student volunteers", $unit_personnel_involved)) { echo "checked";} ?> >student volunteers</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="community/org partners" <?php  if(in_array("community/org partners", $unit_personnel_involved)) { echo "checked";} ?> >community/org partners</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="employed enumerators" <?php  if(in_array("employed enumerators", $unit_personnel_involved)) { echo "checked";} ?> >employed enumerators</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="2">
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" value="others" <?php  if(in_array("others", $unit_personnel_involved)) { echo "checked";} ?> >Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="unit_personnel_involved_others" placeholder="Type Here..." value="<?php echo $result_ab['upi_spec']?>">
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
                                                <label><input type="radio" id="unitnotdone" name="prelimasschoice_contextdimension[]" value="unit have not done preliminary needs assessment" <?php  if($result_ab['prelimneedassess_choice'] === "unit have not done preliminary needs assessment") { echo "checked";} ?> >unit have not done preliminary needs assessment</label>
                                              </div>
                                            </td>
                                          </tr>
<!--END OF FIRST PART RADIO BUTTON-->
                                              
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="verifdatachoice[]" value="with existing verifiable data from the field" id="withdata" data-toggle="collapse" data-target="#data1" <?php  if($result_ab['verifdata_choice'] === "with existing verifiable data from the field") { echo "checked";} ?> >with existing verifiable data from the field <span class="glyphicon glyphicon-asterisk"></span></label>
                                              </div>
                                              <div id="data1" class="collapse">
                                                <table class="table table-bordered" width="100%">
                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Data source/s:</th>
                                                  </thead>
                                                  <tbody>
                                                    <?php $data_sources= explode(' , ', $result_ab['data_sources']);?>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                          <label><input type="checkbox" name="data_sources[]" value="research(faculty/student)" <?php  if(in_array("research(faculty/student)", $data_sources)) { echo "checked";} ?> >research (faculty/student)</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="provided/expressed by the partner" <?php  if(in_array("provided/expressed by the partner", $data_sources)) { echo "checked";} ?> >provided/expressed by the partner</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="thesis/dissertation" <?php  if(in_array("thesis/dissertation", $data_sources)) { echo "checked";} ?> >thesis/dissertation</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="recommended by faculty/student/class" <?php  if(in_array("recommended by faculty/student/class", $data_sources)) { echo "checked";} ?> >recommended by faculty/student/class</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="CES data gathering initiatives" <?php  if(in_array("CES data gathering initiatives", $data_sources)) { echo "checked";} ?> >CES data gathering initiatives</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="from Government agency" <?php  if(in_array("from Government agency", $data_sources)) { echo "checked";} ?> >from Government agency</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="community meetings" <?php  if(in_array("community meetings", $data_sources)) { echo "checked";} ?> >community meetings</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="reflection notes/papers" <?php  if(in_array("reflection notes/papers", $data_sources)) { echo "checked";} ?> >reflection notes/papers</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" value="from secondary sources" <?php  if(in_array("from secondary sources", $data_sources)) { echo "checked";} ?> >from secondary sources</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="data_sources[]" value="others" <?php  if(in_array("others", $data_sources)) { echo "checked";} ?> >Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="data_sources_others" placeholder="Type Here..." value="<?php echo $result_ab['datasource_others']?>">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>

                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Tools used to gather data:</th>
                                                  </thead>
                                                  <tbody>
                                                    <?php $tools_used_to_gather_data= explode(' , ', $result_ab['tools_used_to_gather_data']);?>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="survey/questionnare" <?php  if(in_array("survey/questionnare", $tools_used_to_gather_data)) { echo "checked";} ?> >survey/questionnare</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="exposure/immersions" <?php  if(in_array("exposure/immersions", $tools_used_to_gather_data)) { echo "checked";} ?> >exposure/immersions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="KII/FGDs" <?php  if(in_array("KII/FGDs", $tools_used_to_gather_data)) { echo "checked";} ?> >KII/FGDs</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="validation sessions" <?php  if(in_array("validation sessions", $tools_used_to_gather_data)) { echo "checked";} ?> >validation sessions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="ocular visit" <?php  if(in_array("ocular visit", $tools_used_to_gather_data)) { echo "checked";} ?> >ocular visit</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="documents review" <?php  if(in_array("documents review", $tools_used_to_gather_data)) { echo "checked";} ?> >documents review</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="community meetings" <?php  if(in_array("community meetings", $tools_used_to_gather_data)) { echo "checked";} ?> >community meetings</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" value="others" <?php  if(in_array("others", $tools_used_to_gather_data)) { echo "checked";} ?> >Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="tools_used_to_gather_others" placeholder="Type Here..." value="<?php echo $result_ab['toolsgat_others']?>">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>

                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Means employed to verify the data:</th>
                                                  </thead>
                                                  <tbody>
                                                    <?php $means_employed_to_verify_data= explode(' , ', $result_ab['means_employed_to_verify_data']);?>
                                                    <tr> 
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="survey/questionnare" <?php  if(in_array("survey/questionnare", $means_employed_to_verify_data)) { echo "checked";} ?> >survey/questionnare</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="exposure/immersions" <?php  if(in_array("exposure/immersions", $means_employed_to_verify_data)) { echo "checked";} ?> >exposure/immersions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="KII/FGDs" <?php  if(in_array("KII/FGDs", $means_employed_to_verify_data)) { echo "checked";} ?> >KII/FGDs</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="validation sessions" <?php  if(in_array("validation sessions", $means_employed_to_verify_data)) { echo "checked";} ?> >validation sessions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="ocular visit" <?php  if(in_array("ocular visit", $means_employed_to_verify_data)) { echo "checked";} ?> >ocular visit</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="documents review" <?php  if(in_array("documents review", $means_employed_to_verify_data)) { echo "checked";} ?> >documents review</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="community meetings" <?php  if(in_array("community meetings", $means_employed_to_verify_data)) { echo "checked";} ?> >community meetings</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" value="others" <?php  if(in_array("others", $means_employed_to_verify_data)) { echo "checked";} ?> >Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="means_employed_to_verify_others" placeholder="Type Here..." value="<?php echo $result_ab['meansemp_others']?>">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>

                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Who collected the data:</th>
                                                  </thead>
                                                  <tbody>
                                                    <?php $who_collected_the_data= explode(' , ', $result_ab['who_collected_the_data']);?>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" value="faculty" <?php  if(in_array("faculty", $who_collected_the_data)) { echo "checked";} ?> >faculty</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" value="government agency" <?php  if(in_array("government agency", $who_collected_the_data)) { echo "checked";} ?> >government agency</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" value="undergraduate students" <?php  if(in_array("undergraduate students", $who_collected_the_data)) { echo "checked";} ?> >undergraduate students</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" value="partner community/org./institution" <?php  if(in_array("partner community/org./institution", $who_collected_the_data)) { echo "checked";} ?> >partner community/org./institution</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" value="graduate students" <?php  if(in_array("graduate students", $who_collected_the_data)) { echo "checked";} ?> >graduate students</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" value="deloaded researcher" <?php  if(in_array("deloaded researcher", $who_collected_the_data)) { echo "checked";} ?> >deloaded researcher</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="2">
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="who_collected[]" value="others" <?php  if(in_array("others", $who_collected_the_data)) { echo "checked";} ?> >Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="who_collected_others" placeholder="Type Here..." value="<?php echo $result_ab['whocollect_others']?>">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="verifdatachoice[]" value="without data from the field" id="withoutdata" data-toggle="collapse" data-target="#data2" <?php  if($result_ab['verifdata_choice'] === "without data from the field") { echo "checked";} ?> >without data from the field</label>
                                              </div>
                                              <div id="data2" class="collapse">
                                                <div class="panel">
                                                  <table class="table" width="100%">
                                                    <tr>
                                                      <td>
                                                        <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Enumerate bases for proposing the P/P/A:</th></label>
                                                        <textarea class="form-control" rows="10" name="bases_for_proposing_ppa" placeholder="Type Here..."><?php echo $result_ab['bases_for_proposing_program']?></textarea>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp What are the means employed to ensure the responsiveness of the P/P/A to the local condition?</th></label>
                                                        <textarea class="form-control" rows="10" name="means_employed_to_ensure_responsiveness" placeholder="Type Here..."><?php echo $result_ab['means_employed_ensure_resposiveness']?></textarea>
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
                                          <tr><?php $productivity_dimension= explode(' , ', $result_ab['productivity_dimension']);?>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="production of new technology" <?php  if(in_array("production of new technology", $productivity_dimension)) { echo "checked";} ?> >production of new technology</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="transfer of existing technology" <?php  if(in_array("transfer of existing technology", $productivity_dimension)) { echo "checked";} ?> >transfer of existing technology</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="utilization of existing technology" <?php  if(in_array("utilization of existing technology", $productivity_dimension)) { echo "checked";} ?> >utilization of existing technology</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="refinement/modification of existing technology" <?php  if(in_array("refinement/modification of existing technology", $productivity_dimension)) { echo "checked";} ?> >refinement/modification of existing technology</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="training or capacity-building for the use of Technology" <?php  if(in_array("training or capacity-building for the use of Technology", $productivity_dimension)) { echo "checked";} ?> >training or capacity-building for the use of Technology</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="others" <?php  if(in_array("others", $productivity_dimension)) { echo "checked";} ?> >Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="productivity_dimension_others" placeholder="Type Here..." value="<?php echo $result_ab['productivity_dimension_spec']?>">
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
                                    <tr><?php $economic_dimension= explode(' , ', $result_ab['economic_dimension']);?>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="economic_dimension[]" value="generation of new livelihood projects/opportunities" <?php  if(in_array("generation of new livelihood projects/opportunities", $economic_dimension)) { echo "checked";} ?> >generation of new livelihood projects/opportunities</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="economic_dimension[]" value="enhancement of partner’s current livelihood" <?php  if(in_array("enhancement of partner’s current livelihood", $economic_dimension)) { echo "checked";} ?> >enhancement of partner’s current livelihood</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="economic_dimension[]" value="employability of partners at" <?php  if(in_array("employability of partners at", $economic_dimension)) { echo "checked";} ?> >employability of partners at</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="employability_of_partners" placeholder="Type Here..." value="<?php echo $result_ab['econdim_employpart']?>">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="economic_dimension[]" value="measurable increase in the income of partners" <?php  if(in_array("measurable increase in the income of partners", $economic_dimension)) { echo "checked";} ?> >measurable increase in the income of partners</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="economic_dimension[]" value="others" <?php  if(in_array("others", $economic_dimension)) { echo "checked";} ?> >Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="economic_dimension_others" placeholder="Type Here..." value="<?php echo $result_ab['economic_dimension_spec']?>">
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
                                    <tr><?php $social_dimension= explode(' , ', $result_ab['socdim_chosenradio']);?>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <thead>
                                            <th class="text-center" colspan="2">The P/P/A will benefit:</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="households" data-toggle="collapse" data-target="#hh" <?php  if(in_array("households", $social_dimension)) { echo "checked";} ?> >households</label>
                                                </div>
                                                <div id="hh" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_household" placeholder="How many?" value="<?php echo $result_ab['household']?>">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="youth(male)" data-toggle="collapse" data-target="#youth_m" <?php  if(in_array("youth(male)", $social_dimension)) { echo "checked";} ?> >youth (male) <em>[13 to 30 years old]</em></label>
                                                </div>
                                                <div id="youth_m" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_youth_male" placeholder="How many?" value="<?php echo $result_ab['youthmale']?>">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="Local Government Units" data-toggle="collapse" data-target="#2_lgu" <?php  if(in_array("Local Government Units", $social_dimension)) { echo "checked";} ?> >Local Government Units</label>
                                                </div>
                                                <div id="2_lgu" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_local_government_unit" placeholder="How many?" value="<?php echo $result_ab['localgovunit']?>">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="youth(female)" data-toggle="collapse" data-target="#youth_f" <?php  if(in_array("youth(female)", $social_dimension)) { echo "checked";} ?> >youth (female) <em>[13 to 30 years old]</em></label>
                                                </div>
                                                <div id="youth_f" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_youth_female" placeholder="How many?" value="<?php echo $result_ab['youthfemale']?>">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]"  value="Organizations/Associations" data-toggle="collapse" data-target="#oa" <?php  if(in_array("Organizations/Associations", $social_dimension)) { echo "checked";} ?> >Organizations/Associations</label>
                                                </div>
                                                <div id="oa" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_organization" placeholder="How many?" value="<?php echo $result_ab['orgs_assocs']?>">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="children(boy)" data-toggle="collapse" data-target="#boy" <?php  if(in_array("children(boy)", $social_dimension)) { echo "checked";} ?> >children (boy) <em>[6 to 12 years old]</em></label>
                                                </div>
                                                <div id="boy" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_children_boy" placeholder="How many?" value="<?php echo $result_ab['childboy']?>">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="senior citizens(male)" data-toggle="collapse" data-target="#sr_m" <?php  if(in_array("senior citizens(male)", $social_dimension)) { echo "checked";} ?> >senior citizens (male) <em>[at least 60 years old]</em></label>
                                                </div>
                                                <div id="sr_m" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_senior_citizen_male" placeholder="How many?" value="<?php echo $result_ab['seniorcitizen_male']?>">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="children(girl)" data-toggle="collapse" data-target="#girl" <?php  if(in_array("children(girl)", $social_dimension)) { echo "checked";} ?> >children (girl) <em>[6 to 12 years old]</em></label>
                                                </div>
                                                <div id="girl" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_children_girl" placeholder="How many?" value="<?php echo $result_ab['childgirl']?>">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="senior citizens(female)" data-toggle="collapse" data-target="#sr_f" <?php  if(in_array("senior citizens(female)", $social_dimension)) { echo "checked";} ?> >senior citizens (female) <em>[at least 60 years old]</em></label>
                                                </div>
                                                <div id="sr_f" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_senior_citizen_female" placeholder="How many?" value="<?php echo $result_ab['seniorcitizen_female']?>">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="infants(boy)" data-toggle="collapse" data-target="#infants_b" <?php  if(in_array("infants(boy)", $social_dimension)) { echo "checked";} ?> >infants (boy) <em>[0 to 5 years old]</em></label>
                                                </div>
                                                <div id="infants_b" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_infants_boy" placeholder="How many?" value="<?php echo $result_ab['infants_boy']?>">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="adults(male)" data-toggle="collapse" data-target="#adults_m" <?php  if(in_array("adults(male)", $social_dimension)) { echo "checked";} ?> >adults (male) <em>[31 to 59 years old]</em></label>
                                                </div>
                                                <div id="adults_m" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_adults_male" placeholder="How many?" value="<?php echo $result_ab['adults_male']?>">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]"  value="infants(girl)" data-toggle="collapse" data-target="#infants_g" <?php  if(in_array("infants(girl)", $social_dimension)) { echo "checked";} ?> >infants (girl) <em>[0 to 5 years old]</em></label>
                                                </div>
                                                <div id="infants_g" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_infants_girl" placeholder="How many?" value="<?php echo $result_ab['infants_girl']?>">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" value="adults(female)" data-toggle="collapse" data-target="#adults_f" <?php  if(in_array("adults(female)", $social_dimension)) { echo "checked";} ?> >adults (female) <em>[31 to 59 years old]</em></label>
                                                </div>
                                                <div id="adults_f" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_adults_female" placeholder="How many?" value="<?php echo $result_ab['adults_female']?>">
                                                </div>
                                              </td>
                                              <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="social_dimension[]" value="others" data-toggle="collapse" data-target="#benefit_others" <?php  if(in_array("others", $social_dimension)) { echo "checked";} ?> >Others</label>
                                              </div>
                                              <div id="benefit_others" class="collapse form-inline">
                                                <input type="text" class="form-control" name="social_dimension_others" placeholder="Type Here..." value="<?php echo $result_ab['socdim_othersname']?>">
                                                <input type="number" class="form-control" name="social_dimension_others_count" placeholder="How many?" value="<?php echo $result_ab['socdim_otherscount']?>">
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
                                    <tr><?php $environmental_dimension= explode(' , ', $result_ab['environmental_dimension']);?>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="environment_dimension[]" value="River Management" <?php  if(in_array("River Management", $environmental_dimension)) { echo "checked";} ?> >River Management</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="environment_dimension[]" value="Greening Initiatives" <?php  if(in_array("Greening Initiatives", $environmental_dimension)) { echo "checked";} ?> >Greening Initiatives <small>(e.g. Tree Panting, forestation, etc.)</small></label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="environment_dimension[]" value="Mangrove Planting" <?php  if(in_array("Mangrove Planting", $environmental_dimension)) { echo "checked";} ?> >Mangrove Planting</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="environment_dimension[]" value="Clean-up Drives" <?php  if(in_array("Clean-up Drives", $environmental_dimension)) { echo "checked";} ?> >Clean-up Drives <small>(coastal, river, drainage, sewage, etc.)</small></label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="environment_dimension[]" value="Beautification Activities" <?php  if(in_array("Beautification Activities", $environmental_dimension)) { echo "checked";} ?> >Beautification Activities</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="environment_dimension[]" value="others" <?php  if(in_array("others", $environmental_dimension)) { echo "checked";} ?> >Others</label>
                                                &nbsp;
                                                <input type="text" class="form-control" name="environment_dimension_others" placeholder="Type Here..." value="<?php echo $result_ab['environmental_dimension_spec']?>">
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
                                    <tr> <?php $government_dimension= explode(' , ', $result_ab['governance_dimension']);?>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="networking with local government units and community leaders" <?php  if(in_array("networking with local government units and community leaders", $government_dimension)) { echo "checked";} ?> >networking with Local Government Units and community leaders</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="funding support from local government units" <?php  if(in_array("funding support from local government units", $government_dimension)) { echo "checked";} ?> >funding support from Local Government Units</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="funding support from other partners" <?php  if(in_array("funding support from other partners", $government_dimension)) { echo "checked";} ?> >funding support from other partners</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="established counterparts from local government units" <?php  if(in_array("established counterparts from local government units", $government_dimension)) { echo "checked";} ?> >established counterparts from Local Government Units</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="established counterparts from other partners" <?php  if(in_array("established counterparts from other partners", $government_dimension)) { echo "checked";} ?> >established counterparts from other partners</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="MOA/MOU with LGUs" <?php  if(in_array("MOA/MOU with LGUs", $government_dimension)) { echo "checked";} ?> >Memorandum of Agreement or Memorandum of Understanding with Local Government Units</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="MOA/MOU with other partners" <?php  if(in_array("MOA/MOU with other partners", $government_dimension)) { echo "checked";} ?> >Memorandum of Agreement or Memorandum of Understanding with other partners</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="policy advocacy by USC faculty/students/staff" <?php  if(in_array("policy advocacy by USC faculty/students/staff", $government_dimension)) { echo "checked";} ?> >policy advocacy by USC faculty/students/staff</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" value="policy change initiatives by LGUs" <?php  if(in_array("policy change initiatives by LGUs", $government_dimension)) { echo "checked";} ?> >policy change initiatives by Local Government Units</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="government_dimension[]" value="others" <?php  if(in_array("others", $government_dimension)) { echo "checked";} ?> >Others</label>
                                                &nbsp;
                                                <input type="text" class="form-control" name="government_dimension_others" placeholder="Type Here..." value="<?php echo $result_ab['environmental_dimension_spec']?>">
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
                                                  <td width="20%"><input type="number" name="hours_needed_to_prepare" class="form-control" value="<?php echo $result_ab['manhours_prepare']?>"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of man hours needed to prepare the P/P/A</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="hours_needed_to_complete" class="form-control" value="<?php echo $result_ab['manhours_comp']?>"></td>
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
                                                  <td width="20%"><input type="number" name="faculty_members_involved_count" class="form-control" value="<?php echo $result_ab['facultyinv']?>"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of faculty members who will be involved</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="course_based_students_involved_count" class="form-control" value="<?php echo $result_ab['coursebasedstud']?>"></td>
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
                                                  <td width="20%"><input type="number" name="student_organization_members_involved_count" class="form-control" value="<?php echo $result_ab['studorg']?>"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of Student Organization members who will be involved</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="staff_involved_count" class="form-control" value="<?php echo $result_ab['staffinv']?>"></td>
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
                                                  <td width="20%"><input type="number" name="campaign_materials_to_produce_count" class="form-control" value="<?php echo $result_ab['matproduced']?>"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of Information and Education Campaign materials to be produced</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="campaign_materials_to_improve_count" class="form-control" value="<?php echo $result_ab['matimproved']?>"></td>
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
                                                  <td width="20%"><input type="number" name="curriculum_programs_to_develop_count" class="form-control" value="<?php echo $result_ab['curricprogdev']?>"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of curricular programs to be developed</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="curriculum_programs_to_improve_count" class="form-control" value="<?php echo $result_ab['curricprogimp']?>"></td>
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
                                                  <td width="20%"><input type="number" name="proposals_to_develop_count" class="form-control" value="<?php echo $result_ab['propdev']?>"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of proposals to be developed</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="papers_presented_count" class="form-control" value="<?php echo $result_ab['paperspres']?>"></td>
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
                                                  <td width="20%"><input type="number" name="papers_published_count" class="form-control" value="<?php echo $result_ab['paperspub']?>"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of papers to be published</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="policies_to_advocate_count" class="form-control" value="<?php echo $result_ab['policiesadv']?>"></td>
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
                                              <td><textarea class="form-control" rows="3" name="preparation_expertise_needed_faculty_members"><?php echo $result_ab['preparation_expertise_needed_faculty']?></textarea></td>
                                              <td><textarea class="form-control" rows="3" name="preparation_expertise_needed_students"><?php echo $result_ab['preparation_expertise_needed_students']?></textarea></td>
                                            </tr>
                                            <tr>
                                              <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Roles/tasks</td>
                                              <td><textarea class="form-control" rows="3" name="preparation_roles_faculty_members"><?php echo $result_ab['preparation_roles_faculty']?></textarea></td>
                                              <td><textarea class="form-control" rows="3" name="preparation_roles_students"><?php echo $result_ab['preparation_roles_students']?></textarea></td>
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
                                              <td><textarea class="form-control" rows="3" name="implementation_expertise_needed_faculty_members"><?php echo $result_ab['implementation_expertise_needed_faculty']?></textarea></td>
                                              <td><textarea class="form-control" rows="3" name="implementation_expertise_needed_students"><?php echo $result_ab['implementation_expertise_needed_students']?></textarea></td>
                                            </tr>
                                            <tr>
                                              <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Roles/tasks</td>
                                              <td><textarea class="form-control" rows="3" name="implementation_roles_faculty_members"><?php echo $result_ab['implementation_roles_faculty']?></textarea></td>
                                              <td><textarea class="form-control" rows="3" name="implementation_roles_students"><?php echo $result_ab['implementation_roles_students']?></textarea></td>
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
                                <h4>Linkage Profile</h4>
                              </div>
                              <div class="panel-body">
                                <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                 

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                  <thead>
                                    <th class="bg-success"> Nature of Linkage/Partnership: <em>please specify:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="moa" id="withmoa" name="nature_of_linkage" value="with memorandum of understanding/memorandum of agreement" data-toggle="collapse" data-target="#with_moa" <?php  if($result_ab['moa_mou_choice'] == "with memorandum of understanding/memorandum of agreement") { echo "checked";} ?> >with Memorandum of Understanding / Memorandum of Agreement</label>
                                              </div>
                                              <div id="with_moa" class="collapse">
                                                <div class="panel">
                                                  <table width="100%">
                                                    <tr>
                                                      <td class="text-right"><label>Date Signed:</label></td>
                                                      <td width="2%"></td>
                                                      <td><input type="text" name="date_signed" class="form-control datepicker" placeholder="mm/dd/yyyy" value="<?php echo $result_ab['date_signed']?>"><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-right"><label>Signatories for USC:</label></td>
                                                      <td></td>
                                                      <td><input type="text" name="signatories_for_usc" class="form-control" placeholder="Type Here..." value="<?php echo $result_ab['signatories_for_usc']?>"><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-right"><label>Signatories for Partner:</label></td>
                                                      <td></td>
                                                      <td><input type="text" name="signatories_for_partner" class="form-control" placeholder="Type Here..." value="<?php echo $result_ab['signatories_for_partner']?>"><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <hr>
                                                        <label>Enumerate the Major duties of USC/Unit:</label>
                                                        <textarea class="form-control" rows="5" name="major_duties_of_usc_unit" placeholder="Type Here..."><?php echo $result_ab['major_duties_of_usc_unit']?></textarea>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <label>Enumerate the Major duties of Partner/s:</label>
                                                        <textarea class="form-control" rows="5" name="major_duties_of_partner" placeholder="Type Here..."><?php echo $result_ab['major_duties_of_partners']?></textarea>
                                                      </td>
                                                    </tr>
                                                    
                                                  </table>
                                                </div>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="moa" id="withoutmoa" name="nature_of_linkage" value="without memorandum of understanding/memorandum of agreement" data-toggle="collapse" data-target="#without_moa" <?php  if( $result_ab['moa_mou_choice'] == "without memorandum of understanding/memorandum of agreement") { echo "checked";} ?> >without Memorandum of Understanding / Memorandum of Agreement</label>
                                              </div>
                                              <div id="without_moa" class="collapse">
                                                <div class="panel">
                                                  <table width="100%">
                                                    <tr>
                                                      <td class="text-right"><label>Since when is the linkage:</label></td>
                                                      <td width="2%"></td>
                                                      <td><input type="text" name="date_linkage_started" class="form-control datepicker" value="<?php echo $result_ab['when_is_linkage']?>"><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-right"><label>Who initiated the linkage:</label></td>
                                                      <td></td>
                                                      <td><input type="text" name="who_initiated_linkage" class="form-control" placeholder="Type Here..." value="<?php echo $result_ab['who_initiated_linkage']?>"><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <hr>
                                                        <label>Enumerate the activities already done:</label>
                                                        <textarea name="activities_done" class="form-control" rows="5" placeholder="Type Here..."><?php echo $result_ab['activities_already_done']?></textarea>
                                                      </td>
                                                    </tr>

                                                  </table>
                                                      
                                                    
                                         

                                                </div>
                                              </div>
                                            </td>

                                          </tr>
                                          
                                        </table>
                                        <div>
                                                        <label>Enumerate the opportunities identified:</label>
                                                        <textarea class="form-control" rows="5" name="opportunities_identified" placeholder="Type Here..."><?php echo $result_ab['opportunities_identified']?></textarea>
                                                    </div>
                                                    <div>
                                                        <label>Enumerate the challenges/problems encountered:</label>
                                                        <textarea class="form-control" rows="5" name="challenges_encountered" placeholder="Type Here..."><?php echo $result_ab['challenges_encountered']?></textarea>
                                                     </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>


                           <!--  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button> -->

                          <!--   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" align="center">
                              <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                              <button type="submit" class="btn btn-default btn-block" name="submit" value="save_b"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp SAVE & QUIT</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-success btn-block" id="submit" name="submit" value="submit_b"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
                            </div> -->
                           
                    </div>
                </div>
            </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

 <!-- Custom Script -->
    <script src="<?php echo base_url();?>assets/js/global.js"></script>
    <script src="<?php echo base_url();?>assets/js/proposals.js"></script>
    <script src="<?php echo base_url();?>assets/js/form_processing.js"></script>            
        

</body>

</html>