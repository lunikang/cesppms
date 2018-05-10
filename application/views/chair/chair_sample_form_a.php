<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

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
                      <img src="img/ces_logo_sm.png"> CES-DMS
                  </a>
                </li>
                <li>
                  <div align="center">
                    <img src="img/user.png" alt="..." class="img-circle" style="height:140px; width:140px">
                    <h4 style="color:white">Zoreck Mahusay</h4>
                    <h5 style="color:gray">Department Chair</h5>
                  </div>
                </li>
                <li>
                    <a href="chair_note.php"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp Notes</a>
                </li>
                <li>
                    <a href="chair_setting.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp Account Settings</a>
                </li>
                <li>
                    <a href="index.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp Logout</a>
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
                        <h1>USC-CES FORM A <small>CES Program/Project/Activity Proposal (<u>Concept Note</u>)</small></h1>
                        <hr>
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <label>Progress:</label>
                          </div>
                          <div class="panel-body">
                            <div class="progress">
                              <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                              </div>
                            </div>
                            <div class="text-success">
                              <table>
                                <tr>
                                  <td><span class="glyphicon glyphicon-check" aria-hidden="true"></span>&nbsp Department Chair notes CES proposal - <strong>January 1, 2016</strong></td>
                                </tr>
                                <tr>
                                  <td><span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span>&nbsp CES Coordinator recommends endorsement of CES proposal</td>
                                </tr>
                                <tr>
                                  <td><span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span>&nbsp School Dean endorses CES Proposals</td>
                                </tr>
                                <tr>
                                  <td><span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span>&nbsp Review Committee assesses CES proposal</td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>

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
                                <h4>I. Rationale and Contextualization</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify">Lorem ipsum dolor sit amet, usu an legimus vivendum adolescens, pro no vidisse definitiones, quas mundi quo ex. Eam at ullum quidam, omnesque verterem his te. Posse nonumy impedit ea qui, alii velit nulla eu vim. Indoctum volutpat sed at. Essent accusam constituam in vis, duo agam nonumy principes ea, nec putent numquam definitionem ad. Cum scripta oportere voluptaria an.</p>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>II. Goal, Objectives, and Outcomes</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify">Lorem ipsum dolor sit amet, usu an legimus vivendum adolescens, pro no vidisse definitiones, quas mundi quo ex. Eam at ullum quidam, omnesque verterem his te. Posse nonumy impedit ea qui, alii velit nulla eu vim. Indoctum volutpat sed at. Essent accusam constituam in vis, duo agam nonumy principes ea, nec putent numquam definitionem ad. Cum scripta oportere voluptaria an.</p>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>III. Participants, Partners and Beneficiaries</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify">Lorem ipsum dolor sit amet, usu an legimus vivendum adolescens, pro no vidisse definitiones, quas mundi quo ex. Eam at ullum quidam, omnesque verterem his te. Posse nonumy impedit ea qui, alii velit nulla eu vim. Indoctum volutpat sed at. Essent accusam constituam in vis, duo agam nonumy principes ea, nec putent numquam definitionem ad. Cum scripta oportere voluptaria an.</p>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>IV. Outline of Activities</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                  <thead>
                                      <th class="text-center">Tentative Date</th>
                                      <th class="text-center">Activities</th>
                                      <th class="text-center">Participants Needed</th>
                                      <th class="text-center">Person/s In-charge</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="text-center">December 25, 2015</td>
                                      <td class="text-center">Feeding</td>
                                      <td class="text-center">100</td>
                                      <td class="text-center">DynaCom Society</td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>V. Budgetary Requirements</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                  <thead>
                                      <th class="text-center" width="20%">Particulars</th>
                                      <th class="text-center" width="20%">Frequency</th>
                                      <th class="text-center" width="20%">Quantity</th>
                                      <th class="text-center" width="20%">Amount</th>
                                      <th class="text-center" width="20%">Total</th>
                                  </thead>
                                  <thead>
                                      <th colspan="5" class="bg-success">A. Meals and Snacks</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="text-center">Sample</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">₱ 100.00</td>
                                      <td class="text-center">₱ 100.00</td>
                                    </tr>
                                    <tr>
                                      <td class="text-center">Sample</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">₱ 100.00</td>
                                      <td class="text-center">₱ 100.00</td>
                                    </tr>
                                  </tbody>
                                  <thead>
                                      <th colspan="5" class="bg-success">B. Transportation</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="text-center">Sample</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">₱ 100.00</td>
                                      <td class="text-center">₱ 100.00</td>
                                    </tr>
                                    <tr>
                                      <td class="text-center">Sample</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">₱ 100.00</td>
                                      <td class="text-center">₱ 100.00</td>
                                    </tr>
                                  </tbody>
                                  <thead>
                                      <th colspan="5" class="bg-success">C. Materials</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="text-center">Sample</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">₱ 100.00</td>
                                      <td class="text-center">₱ 100.00</td>
                                    </tr>
                                    <tr>
                                      <td class="text-center">Sample</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">₱ 100.00</td>
                                      <td class="text-center">₱ 100.00</td>
                                    </tr>
                                    <tr>
                                      <td class="text-right" colspan="4"><h4>Total:</h4></td>
                                      <td class="text-center"><h4>₱ 600.00</h4></td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>

                        <hr>

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4><span class="glyphicon glyphicon-comment"></span>&nbsp Your Comments</h4>
                          </div>
                          <div class="panel-body">
                            <select class="form-control" style="width:40%" required>
                              <option>I. Rationale and Contextualization</option>
                              <option>II. Goal, Objectives, and Outcomes</option>
                              <option>III. Participants, Partners and Beneficiaries</option>
                              <option>IV. Outline of Activities</option>
                              <option>V. Budgetary Requirements</option>
                            </select>
                            <br>
                            <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                          </div>
                          <div class="text-center">
                            <button type="button" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp Add</button>
                          </div>
                          <br>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                          <button type="button" class="btn btn-lg btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp Back</button>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                          <a href="chair_sample_form_b.php" style="text-decoration:none">
                            <button type="button" class="btn btn-lg btn-success btn-block">Next &nbsp<span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></button>
                          </a>
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
                    Are you sure you want to return to the "Proposals to be Noted" page? All progress will not be saved.
                  </div>
                  <div class="modal-footer">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <button type="button" class="btn btn-lg btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp No</button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <a href="chair_note.php" style="text-decoration:none">
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
    <script src="js/jquery.min.js"></script>

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