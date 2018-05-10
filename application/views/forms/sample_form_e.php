<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form E</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker3.css">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                  <a href="#">
                      <img src="<?php echo base_url();?>assets/img/ces_logo_sm.png"> &nbsp; CESDMS
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
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <?php echo form_open('Representative/addForme');?>
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="btn btn-default btn-xs pull-right" id="menu-toggle">
                <strong>Toggle Sidebar</strong> &nbsp
                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            </a>
            
             <div class="container-fluid">
                <div class="row tab-content">
                    <div>
                        <h1>USC-CES FORM E <small>CES Program/Project Completion Report Form</small></h1>
                        <hr>
                        <form>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>I. Preliminaries</h4>
                                </div>
                                <div class="panel-body">
                                    <table width="100%">
                                      <tr>
                                        <td width="28%"><strong>1.1 Complete Title of Program/Project</strong></td>
                                        <td width="2%"></td>
                                        <td><p><u>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed</u></p></td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.2 Unit/s Responsible</strong></td>
                                        <td></td>
                                        <td><p><u>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed</u></p></td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.3 Program/Project Duration</strong></td>
                                        <td></td>
                                        <td><p><u>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed</u></p></td>
                                      </tr>
                                      <tr>
                                        <td colspan="3">
                                          <table class="table table-bordered" width="100%">
                                            <thead>
                                              <th class="text-center" width="5%">No.</th>
                                              <th class="text-center">Activities</th>
                                              <th class="text-center">Inclusive Dates</th>
                                              <th class="text-center">Total No. of Hours</th>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td class="text-center"><label>1</label></td>
                                                <td class="text-center">River Clean-up</td>
                                                <td class="text-center">January 1, 2015</td>
                                                <td class="text-center">25 hours</td>
                                              </tr>
                                              <tr>
                                                <td class="text-center"><label>2</label></td>
                                                <td class="text-center">River Clean-up</td>
                                                <td class="text-center">January 1, 2015</td>
                                                <td class="text-center">25 hours</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.4 Final Beneficiaries/Target Groups</strong> <small>(specify the number per sector/group)</small></td>
                                        <td></td>
                                        <td><p><u>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed</u></p></td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.5 Partners/Collaborators</strong></td>
                                        <td></td>
                                        <td><p><u>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed</u></p></td>
                                      </tr>
                                      <tr>
                                        <td colspan="3">
                                          <table class="table table-bordered" width="100%">
                                            <thead>
                                              <th class="text-center">Intra USC Partners/Collaborators</th>
                                              <th class="text-center">Extra USC Partners/Collaborators</th>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>
                                                  <ul>
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                  </ul>
                                                </td>
                                                <td>
                                                  <ul>
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                  </ul>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>II. Participants, Partners and Beneficiaries</h4>
                                </div>
                                <div class="panel-body">
                                    <table width="100%">
                                      <tr>
                                        <td>
                                            <label>2.1 Summary</label>
                                            <ul style="list-style:none">
                                              <li>
                                                <em>2.1.1. Background of the issue addressed by the project</em>
                                                <div class="panel panel-default panel-body">
                                                  <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.Et movet expetendis sed, ea prima libris per, aeque insolens vix ei. Pri consul tincidunt ea. Ex primis electram definitiones usu. Elit tation nonumy ad per, vide tota senserit ius ut, dicunt vulputate ex nam. Invenire gloriatur percipitur ea duo. Eam te choro integre democritum.</p>
                                                </div>
                                              </li>
                                              <li>
                                                <em>2.1.2. Major achievements of the program/project</em>
                                                <div class="panel panel-default panel-body">
                                                  <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.Et movet expetendis sed, ea prima libris per, aeque insolens vix ei. Pri consul tincidunt ea. Ex primis electram definitiones usu. Elit tation nonumy ad per, vide tota senserit ius ut, dicunt vulputate ex nam. Invenire gloriatur percipitur ea duo. Eam te choro integre democritum.</p>
                                                </div>
                                              </li>
                                              <li>
                                                <em>2.1.3. How results of different activities contribute to the larger goal of the program/project</em>
                                                <div class="panel panel-default panel-body">
                                                  <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.Et movet expetendis sed, ea prima libris per, aeque insolens vix ei. Pri consul tincidunt ea. Ex primis electram definitiones usu. Elit tation nonumy ad per, vide tota senserit ius ut, dicunt vulputate ex nam. Invenire gloriatur percipitur ea duo. Eam te choro integre democritum.</p>
                                                </div>
                                              </li>
                                            </ul>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.2 Overall strategy adopted for the implementation of the program/project</label>
                                          <div class="panel panel-default panel-body">
                                            <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.Et movet expetendis sed, ea prima libris per, aeque insolens vix ei. Pri consul tincidunt ea. Ex primis electram definitiones usu. Elit tation nonumy ad per, vide tota senserit ius ut, dicunt vulputate ex nam. Invenire gloriatur percipitur ea duo. Eam te choro integre democritum.</p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.3 Achievements against specified goal</label>
                                          <table class="table table-bordered" width="100%">
                                            <thead>
                                              <th class="text-center">Goal</th>
                                              <th class="text-center">Specific Objectives</th>
                                              <th class="text-center">Specific Activities</th>
                                              <th class="text-center">Outputs</th>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                              </tr>
                                              <tr>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.4 Observed impact of the program/project</label>
                                          <div class="panel panel-default panel-body">
                                            <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.Et movet expetendis sed, ea prima libris per, aeque insolens vix ei. Pri consul tincidunt ea. Ex primis electram definitiones usu. Elit tation nonumy ad per, vide tota senserit ius ut, dicunt vulputate ex nam. Invenire gloriatur percipitur ea duo. Eam te choro integre democritum.</p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.5 Challenges/difficulties and measures undertaken</label>
                                          <div class="panel panel-default panel-body">
                                            <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.Et movet expetendis sed, ea prima libris per, aeque insolens vix ei. Pri consul tincidunt ea. Ex primis electram definitiones usu. Elit tation nonumy ad per, vide tota senserit ius ut, dicunt vulputate ex nam. Invenire gloriatur percipitur ea duo. Eam te choro integre democritum.</p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.6 Good practices</label>
                                          <div class="panel panel-default panel-body">
                                            <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.Et movet expetendis sed, ea prima libris per, aeque insolens vix ei. Pri consul tincidunt ea. Ex primis electram definitiones usu. Elit tation nonumy ad per, vide tota senserit ius ut, dicunt vulputate ex nam. Invenire gloriatur percipitur ea duo. Eam te choro integre democritum.</p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.7 Lessons learned from the program/project</label>
                                          <div class="panel panel-default panel-body">
                                            <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.Et movet expetendis sed, ea prima libris per, aeque insolens vix ei. Pri consul tincidunt ea. Ex primis electram definitiones usu. Elit tation nonumy ad per, vide tota senserit ius ut, dicunt vulputate ex nam. Invenire gloriatur percipitur ea duo. Eam te choro integre democritum.</p>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>III. Partnerships and Collaboration </h4>
                                </div>
                                <div class="panel-body">
                                  <table width="100%">
                                    <tr>
                                      <td>
                                        <label>3.1 Briefly describe the contributions of all your Intra and Extra USC partners/collaborators</label>
                                        <ul style="list-style:none">
                                          <li>
                                            3.1.1 Intra USC Partners/Collaborators
                                            <table class="table table-bordered" width="100%">
                                              <thead>
                                                <th class="text-center">Name of Partners/Collaborators</th>
                                                <th class="text-center">Actual Contributions</th>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Lorem ipsum dolor sit amet</td>
                                                  <td>Lorem ipsum dolor sit amet</td>
                                                </tr>
                                                <tr>
                                                  <td>Lorem ipsum dolor sit amet</td>
                                                  <td>Lorem ipsum dolor sit amet</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </li>
                                          <li>
                                            3.1.2 Extra USC Partners/Collaborators
                                            <table class="table table-bordered" width="100%">
                                              <thead>
                                                <th class="text-center">Name of Partners/Collaborators</th>
                                                <th class="text-center">Actual Contributions</th>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Lorem ipsum dolor sit amet</td>
                                                  <td>Lorem ipsum dolor sit amet</td>
                                                </tr>
                                                <tr>
                                                  <td>Lorem ipsum dolor sit amet</td>
                                                  <td>Lorem ipsum dolor sit amet</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </li>
                                        </ul>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <label>3.2 Assess your unit’s relationship with the partners/collaborators mentioned above. How have your relations affected the program/project?</label>
                                        <div class="panel panel-default panel-body">
                                          <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.Et movet expetendis sed, ea prima libris per, aeque insolens vix ei. Pri consul tincidunt ea. Ex primis electram definitiones usu. Elit tation nonumy ad per, vide tota senserit ius ut, dicunt vulputate ex nam. Invenire gloriatur percipitur ea duo. Eam te choro integre democritum.</p>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <label>3.3 Describe the other links or opportunities gained as a consequence of the program/project.</label>
                                        <div class="panel panel-default panel-body">
                                          <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.Et movet expetendis sed, ea prima libris per, aeque insolens vix ei. Pri consul tincidunt ea. Ex primis electram definitiones usu. Elit tation nonumy ad per, vide tota senserit ius ut, dicunt vulputate ex nam. Invenire gloriatur percipitur ea duo. Eam te choro integre democritum.</p>
                                        </div>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                            </div>

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>IV. Witness to the Word, In Action…</h4>
                                </div>
                                <div class="panel-body">
                                  <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.Et movet expetendis sed, ea prima libris per, aeque insolens vix ei. Pri consul tincidunt ea. Ex primis electram definitiones usu. Elit tation nonumy ad per, vide tota senserit ius ut, dicunt vulputate ex nam. Invenire gloriatur percipitur ea duo. Eam te choro integre democritum.</p>
                                </div>
                            </div>

                            <div class="panel panel-primary">
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
                        </form>
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