<!DOCTYPE html>
<html lang="en">

<head>

    <title>CESPPMS - Form E (Edit Form)</title>
    <?php include('application/views/header.php');?>

</head>

<body>

  <?php //var_dump($this->session->all_userdata()); ?>

    <div id="wrapper">

         <?php include('application/views/sidebar.php');?>

        <!-- Sidebar -->
        <!-- <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                  <a href="#">
                      <img src="<?php echo base_url();?>assets/img/ces_logo_sm.png"> &nbsp; CESPPMS
                  </a>
                </li>
                <li>
                  <div align="center">
                    <img src="<?php echo base_url();?>assets/img/usc_white.png" alt="..." class="img-circle navlogo" style="height:140px; width:140px">
                <h4 class="name"><?php echo $fname." ".$lname;?></h4>
                    <h5 class="designation">CES Representative</h5>
                  </div>
                </li>
                <li>
                    <a href="<?php echo site_url('Representative/home');?>"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp My Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Representative/reports');?>" class="active"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp My Reports</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Representative/account_settings');?>"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp Account Settings</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Users/logout');?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp Logout</a>
                </li>
            </ul>
        </div> -->
        <!-- /#sidebar-wrapper -->

        <?php //var_dump($results_e)?>

        <!-- Page Content -->
        <?php echo form_open('Representative/updateForme');?>
      
        <div id="page-content-wrapper">
            <!-- <a href="#menu-toggle" class="btn btn-default btn-xs pull-right" id="menu-toggle">
                <strong>Toggle Sidebar</strong> &nbsp
                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            </a> -->
               <?php include('application/views/topNav.php');?>
            <div class="container-fluid" style="padding-top:15px;">
                <div class="row tab-content">
                    <div>
                        <h1>Filling Out Form E <small>CES Program/Project Completion Report Form &nbsp;<i>(Edit Form)</i></small>
                          </h1>
                        <hr>
                        <form>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>I. Preliminaries</h4>
                                </div>
                                <div class="panel-body">
                                    <table width="100%">
                                      <tr>
                                        <td width="25%"><strong>1.1 Complete Title of Program/Project</strong></td>
                                        </td>
                                        <td><input type="text" class="form-control" placeholder="Type Here..." name="title_of_program"  value="<?php echo $results_e['title_of_program']; ?>" required><br></td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.2 Unit/s Responsible</strong></td>
                                        <td></td>
                                        <td><input type="text" class="form-control" placeholder="Type Here..." name="unit_responsible" value="<?php echo $results_e['unit_responsible']; ?>" required><br></td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.3 Program/Project Duration</strong></td>
                                        <td></td>
                                        <td><input type="text" class="form-control" placeholder="Type Here..." name="program_duration" value="<?php echo $results_e['program_duration']; ?>" required><br></td>
                                      </tr>

                                       <!--   who created and the department of the creator of the report input here -->
                                       <tr><td> <input type="hidden" name="who_created" value="<?= $fname ?>&nbsp;<?= $lname ?>"></td>
                                        <td> <input type="hidden" name="creators_department" value="<?= $department ?>"></td>

                                      </tr>
                                       <tr>
                                        <td colspan="3">
                                          <!-- <table class="table table-bordered" width="100%">
                                            <thead>
                                              <th class="text-center" width="5%">No.</th>
                                              <th class="text-center">Activities</th>
                                              <th class="text-center">Inclusive Dates</th>
                                              <th class="text-center">Total No. of Hours</th>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td class="text-center"><label>1</label></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control datepicker" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                              </tr>
                                              <tr>
                                                <td class="text-center"><label>2</label></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control datepicker" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <div class="text-center">
                                            <button type="button" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp Add Row</button>
                                          </div>
                                          <br> -->

                                         
                                                <table id="activity-reports" class="table table-bordered">
                                                  <thead>
                                                      <th class="text-center">Activities</th>
                                                      <th class="text-center">Inclusive Dates</th>
                                                      <th class="text-center">Total No. of Hours</th>
                                                      <th class="text-center"><button type="button" id="add-activity-reports-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button></th>
                                                  </thead>
                                                  <?php 
                                                  $act_act= explode(' , ', $results_e['act_title']);
                                                  $act_incdate=explode(' , ', $results_e['incdate']);
                                                  $act_hours=explode(' , ', $results_e['totalhours']);
                                                  $arrlength = count($act_act);
                                                  $arrlength = count($act_incdate);
                                                  $arrlength = count($act_hours);

                                                  for($x = 0; $x < $arrlength; $x++) {?>
                                                  <tbody>
                                                     <tr>
                                                      <td> <input type="text" name="act_title[]" class="form-control" value="<?php echo $act_act[$x]; ?>"></td>
                                                      <td><input type="text" name="incdate[]" class="form-control" value="<?php echo $act_incdate[$x]; ?>"></td>
                                                      <td><input type="text" name="totalhours[]" class="form-control" value="<?php echo $act_hours[$x]; ?>"></td>
                                                      <td> <button type="button" class="rm-activityrep-outline-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button></td>
                                                    </tr>
                                                  </tbody>
                                                  <?php }?>
                                                </table>
                                        

                                        </td>
                                      </tr>
                                       
                                      <tr>
                                        <td><strong>1.4 Final Beneficiaries/Target Groups</strong> <small>(specify the number per sector/group)</small></td>
                                        <td></td>
                                        <td><input type="text" class="form-control" placeholder="Type Here..." name="final_target_groups" value="<?php echo $results_e['final_target_groups']; ?>" required><br></td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.5 Partners/Collaborators</strong></td>
                                        <td></td>
                                        <td><input type="text" class="form-control" placeholder="Type Here..." name="collaborators" value="<?php echo $results_e['collaborators']; ?>" required><br></td>
                                      </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>II. Participants, Partners and Beneficiaries</h4>
                                </div>
                                <div class="panel-body">
                                    <table width="100%">
                                      <tr>
                                        <td>
                                            <label>2.1 Summary</label> <small><em>(please write a summary of successes and expected impact of the program/project. Although there is no specifically required format just supply inputs to the items below. You may add items you may consider important)</em></small>
                                            <ul style="list-style:none">
                                              <li>
                                                <em>2.1.1. Background of the issue addressed by the project</em>
                                                <textarea class="form-control" rows="5" name="background_of_issue" value=""><?php echo $results_e['background_of_issue']; ?></textarea>
                                              </li>
                                              <li>
                                                <em>2.1.2. Major achievements of the program/project</em>
                                                <textarea class="form-control" rows="5" placeholder="Type Here..." name="major_achievements_of_program" value=""><?php echo $results_e['major_achievements_of_program']; ?></textarea>
                                              </li>
                                              <li>
                                                <em>2.1.3. How results of different activities contribute to the larger goal of the program/project</em>
                                                <textarea class="form-control" rows="5" placeholder="Type Here..." name="results_of_activities_to_goal" value=""><?php echo $results_e['results_of_activities_to_goal']; ?></textarea>
                                              </li>
                                            </ul>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.2 Overall strategy adopted for the implementation of the program/project</label> <small><em>(please describe in detail the overall strategy or approach used to ensure the accomplishment of outcomes. You may discuss here the framework of the program/project, if there is any)</em></small>
                                          <textarea class="form-control" rows="5" placeholder="Type Here..." name="overall_strategy_adopted"><?php echo $results_e['overall_strategy_adopted']; ?></textarea>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div style="position: relative; width: 100%; ">
                                          <label>2.3 Achievements against specified goal</label> <small><em>(please highlight the outputs of the program/project against the goal identified for the program/project. The details can be sourced from your <strong>Form A</strong>)</em></small>
                                          <div class="alert alert-info" role="alert">
                                              <strong>For Outputs:</strong>
                                              <ul>
                                                <li>Please note whether outputs were achieved or not achieved. If not achieved, provide reason/s.</li>
                                                <li>Please quantify and give narrative assessment of results.</li>
                                              </ul>
                                          </div>
                                       </div>
                                       

                                       <div> <!-- START para sa insert table sa goals area -->
                                              <table id="goals-outline" class="table table-bordered">
                                                <thead>
                                                    <th class="text-center">Goal</th>
                                                    <th class="text-center">Specific Objectives</th>
                                                    <th class="text-center">Specific Activities</th>
                                                    <th class="text-center">Outputs</th>
                                                    <th class="text-center"><button type="button" id="add-goals-outline-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button></th>
                                                </thead>
                                                 <?php 
                                                  $goalarr= explode(' , ', $results_e['goal_title']);
                                                  $specobjarr=explode(' , ', $results_e['spec_obj']);
                                                  $specactarr=explode(' , ', $results_e['spec_act']);
                                                  $outputsarr=explode(' , ', $results_e['outputs']);

                                                  $goalspart = count($goalarr);
                                                  $goalspart = count($specobjarr);
                                                  $goalspart = count($specactarr);
                                                  $goalspart = count($outputsarr);

                                                  for($x = 0; $x < $goalspart; $x++) {?>
                                                <tbody>
                                                  <tr>
                                                    <td><input type="text" name="goal_title[]" class="form-control" value="<?php echo $goalarr[$x]?>"></td>
                                                    <td><input type="text" name="spec_obj[]" class="form-control" value="<?php echo $specobjarr[$x]?>"></td>
                                                    <td><input type="text" name="spec_act[]" class="form-control" value="<?php echo $specactarr[$x]?>"></td>
                                                    <td><input type="text" name="outputs[]" class="form-control" value="<?php echo $outputsarr[$x]?>"></td>
                                                    <td><button type="button" class="rm-goals-outline-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button></td>
                                                  </tr>
                                                </tbody>
                                                <?php }?>
                                              </table>
                                        </div> <!-- END para sa insert table sa goals area -->
                                       
                                      </div>
                                          <br>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.4 Observed impact of the program/project</label> <small><em>(please describe the observed and/or documented outcomes or impact of the program/project. You may provide as attachment some evidences to show these outcomes or impact)</em></small>
                                          <textarea class="form-control" rows="5" placeholder="Type Here..." name=" observed_impact_of_program"><?php echo $results_e['observed_impact_of_program']; ?></textarea>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.5 Challenges/difficulties and measures undertaken</label> <small><em>(please describe the challenges/difficulties encountered in all of the phases of the program/project and the measures or mechanisms undertaken to address them)</em></small>
                                          <textarea class="form-control" rows="5" placeholder="Type Here..." name="challenges_and_measures_undertaken"><?php echo $results_e['challenges_and_measures_undertaken']; ?></textarea>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.6 Good practices</label> <small><em>(please provide all the good practices that resulted from the program/project)</em></small>
                                          <textarea class="form-control" rows="5" placeholder="Type Here..." name="good_practices"><?php echo $results_e['good_practices']; ?></textarea>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.7 Lessons learned from the program/project</label> <small><em>(please describe the experiences and lessons learned by the students, faculty, staff especially in terms of program/project management and implementation, partnership and collaboration, community mobilization, capacity building, advocacy, among others)</em></small>
                                          <textarea class="form-control" rows="5" placeholder="Type Here..." name="lessons_learned_from_program"><?php echo $results_e['lessons_learned_from_program']; ?></textarea>
                                        </td>
                                      </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>III. Partnerships and Collaboration </h4>
                                </div>
                                <div class="panel-body">
                                  <table width="100%">
                                    <tr>
                                      <td>

                                       
                                        <ul style="list-style:none">
                                          <li>
                                            3.1.1 Intra USC Partners/Collaborators
                                            <div>
                                            <table id="intra-collabs" class="table table-bordered">
                                                <thead>
                                                    <th class="text-center">Name of Partners/Collaborators</th>
                                                    <th class="text-center">Actual Contributions</th>
                                                    <th class="text-center"><button type="button" id="add-intra-collabs-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span></button></th>
                                                </thead>
                                                 <?php 
                                                  $intrapartner= explode(' , ', $results_e['intraname']);
                                                  $intracontrib=explode(' , ', $results_e['intracontribs']);
                                                  
                                                  $intracollabs = count($intrapartner);
                                                  $intracollabs = count($intracontrib);

                                                  for($x = 0; $x < $intracollabs; $x++) {?>
                                                <tbody>
                                                  <tr>
                                                    <td><input type="text" name="intraname[]" class="form-control" value="<?php echo $intrapartner[$x]?>"></td>
                                                    <td><input type="text" name=" intracontribs[]" class="form-control" value="<?php echo $intracontrib[$x]?>"></td>
                                                    <td><button type="button" class="rm-intra-outline-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button></td>
                                                  </tr>
                                                </tbody>
                                                <?php }?>
                                              </table>
                                            </div>
                                          </div> <!-- END of input div sa intra -->

                                          </div> <!-- END OF INTRA PART -->
                                          </li>
                                          <li>
                                            <div> <!-- EXTRA area -->

                                            3.1.2 Extra USC Partners/Collaborators
                                            

                                            <div> <!-- SA input table sa extra -->
                                            <table id="extra-collabs" class="table table-bordered table-condensed">
                                                <thead>
                                                    <th class="text-center">Name of Partners/Collaborators</th>
                                                    <th class="text-center">Actual Contributions</th>
                                                    <th class="text-center"><button type="button" id="add-extra-collabs-row" class="pull-right btn btn-sm btn-success" style="width:35px"><span class="glyphicon glyphicon-plus-sign"></span></button></th>
                                                </thead>
                                                  <?php 
                                                  $extrapartner= explode(' , ', $results_e['extraname']);
                                                  $extracontrib=explode(' , ', $results_e['extracontribs']);
                                                  
                                                  $extracollabs = count($extrapartner);
                                                  $extracollabs = count($extracontrib);

                                                  for($x = 0; $x < $intracollabs; $x++) {?>
                                                <tbody>
                                                  <tr>
                                                    <td><input type="text" name="extraname[]" class="form-control" value="<?php echo $extrapartner[$x]?>"></td>
                                                    <td><input type="text" name="extracontribs[]" class="form-control" value="<?php echo $extracontrib[$x]?>"></td>
                                                    <td><button type="button" class="rm-extra-outline-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button></td>
                                                  </tr>
                                                </tbody>
                                                <?php }?>
                                              </table>
                                            </div>
                                          </div> <!-- END of right side of extra area -->


                                            </div> <!-- END of whole extra area -->
                                          </li>
                                        </ul>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <label>3.2 Assess your unit’s relationship with the partners/collaborators mentioned above. How have your relations affected the program/project?</label>
                                        <textarea class="form-control" rows="5" placeholder="Type Here..." name="unit_relationship"><?php echo $results_e['unit_relationship']; ?></textarea>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <label>3.3 Describe the other links or opportunities gained as a consequence of the program/project.</label>
                                        <textarea class="form-control" rows="5" placeholder="Type Here..." name="other_links_gained_from_program"><?php echo $results_e['other_links_gained_from_program']; ?></textarea>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>IV. Witness to the Word, In Action…</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> please describe how the program/project allowed students, faculty, staff to manifest their being Carolinians, Witnesses to the Word</p>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" placeholder="Type Here..." name="witness_to_the_word"><?php echo $results_e['witness_to_the_word']; ?></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>V. Ways Forward</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> please explain how your experiences in this program/project can help future undertakings</p>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" placeholder="Type Here..." name="ways_forward"><?php echo $results_e['ways_forward']; ?></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>VI. Attachments</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> please provide as attachment all documents you deem necessary and useful besides those already prescribed by Form E or the Portfolio Checklist</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="button" class="btn btn-lg btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <td width="2%"><input type="hidden" name="fe_id" value="<?php echo $results_e['fe_id'];?>">
                              <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Save</button>
                            
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
                      <a href="<?php echo base_url() ?>index.php/Representative/reports" style="text-decoration:none">
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

</body>

</html>