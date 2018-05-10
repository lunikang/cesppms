<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sample Form D</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                  <a href="#">
                    <h3>
                      <img src="<?php echo base_url();?>assets/img/ces_logo_sm.png">
                      &nbsp CES-DMS
                    </h3>
                  </a>
                </li>
                <li>
                  <div class="userinfo">
                    <img src="<?php echo base_url();?>assets/img/usc.png" alt="..." class="img-circle" style="height:140px; width:140px">
                    <h4><?php echo $fname." ".$lname;?></h4>
                    <h5>CES Representative</h5>
                  </div>
                </li>
                <li>
                    <a href="<?php echo site_url('Representative/home');?>"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp My Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Representative/reports');?>"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp My Reports</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Representative/account_settings');?>"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp Account Settings</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Users/logout')?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">
                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>&nbsp <strong>Toggle Menu</strong>
            </a>
            <div class="container-fluid">
                <div class="row tab-content">
                    <div>
                        <h1>USC-CES FORM D <small>CES Program/Project/Activity Report Form</small></h1>
                        <hr>
                        <div class="panel" align="center">
                            <div class="panel-body">
                              <h2>Barangay Talamban River Clean-up</h2>
                              <h3>School of Arts & Sciences</h3>
                              <h4>Computer and Information Sciences</h4>
                              <h5>Barangay Talamban, Cebu City</h5>
                              <h5>December 25, 2015</h5>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>I. Introduction</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu. Et movet expetendis sed, ea prima libris per, aeque insolens vix ei. Pri consul tincidunt ea. Ex primis electram definitiones usu. Elit tation nonumy ad per, vide tota senserit ius ut, dicunt vulputate ex nam. Invenire gloriatur percipitur ea duo. Eam te choro integre democritum.</p>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>II. Participants, Partners and Beneficiaries</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu. Et movet expetendis sed, ea prima libris per, aeque insolens vix ei. Pri consul tincidunt ea. Ex primis electram definitiones usu. Elit tation nonumy ad per, vide tota senserit ius ut, dicunt vulputate ex nam. Invenire gloriatur percipitur ea duo. Eam te choro integre democritum.</p>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>III. Highlights of the Activity</h4>
                            </div>
                            <div class="panel-body">
                                <label>As perceived by the Beneficiaries</label>
                                <div class="panel panel-default panel-body">
                                  <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.</p>
                                </div>
                                <label>As perceived by the Students</label>
                                <div class="panel panel-default panel-body">
                                  <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.</p>
                                </div>
                                <label>As perceived by the Faculty/Staff</label>
                                <div class="panel panel-default panel-body">
                                  <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>IV. Challenges/Difficulties Encountered</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu. Et movet expetendis sed, ea prima libris per, aeque insolens vix ei. Pri consul tincidunt ea. Ex primis electram definitiones usu. Elit tation nonumy ad per, vide tota senserit ius ut, dicunt vulputate ex nam. Invenire gloriatur percipitur ea duo. Eam te choro integre democritum.</p>
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
                    Are you sure you want cancel creating the proposal? All progress will not be saved.
                  </div>
                  <div class="modal-footer">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <button type="button" class="btn btn-lg btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp No</button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <a href="create_proposal.php" style="text-decoration:none">
                        <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp Yes</button>
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

    <!-- Customized JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

    <!-- Datepicker Script -->
    <script type="text/javascript">
      $('.datepicker').datepicker({
        todayBtn: "linked"
      });
    </script>

</body>

</html>