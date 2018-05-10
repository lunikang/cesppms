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
                      <img src="<?php echo base_url();?>assets/img/ces_logo_sm.png"> CES-DMS
                  </a>
                </li>
                <li>
                  <div align="center">
                    <img src="<?php echo base_url();?>assets/img/usc.png" alt="..." class="img-circle" style="height:140px; width:140px">
                    <h4 style="color:white"><?php echo $fname." ".$lname; ?></h4>
                    <h5 style="color:gray">CES Director</h5>
                  </div>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/home');?>" class="active"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp Endorsed Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/approved_proposals');?>"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp Approved Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/reviews');?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp Reviewed Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/other_reports');?>"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span>&nbsp Other Reports</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/manage_accounts');?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp Manage Accounts</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/account_settings');?>"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp Account Settings</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Users/logout');?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp Logout</a>
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

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4><span class="glyphicon glyphicon-list-alt"></span>&nbsp Assessment Form</h4>
                          </div>
                          <div class="panel-body">
                              <div class="alert-danger text-center col-lg-4 col-md-4 col-sm-12 col-xs-12"><strong>below 59%:</strong> Disapproved</div>
                              <div class="alert-warning text-center col-lg-4 col-md-4 col-sm-12 col-xs-12"><strong>60% to 80%:</strong> Approved with Major Refinements</div>
                              <div class="alert-success text-center col-lg-4 col-md-4 col-sm-12 col-xs-12"><strong>81% to 95%:</strong> Approved with Minor Refinements</div>

                              <table class="table table-bordered">
                                <thead>
                                  <th class="text-center">Criteria for Assessment</th>
                                  <th class="text-center">Ratings</th>
                                  <th class="text-center">Remarks</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td width="30%"><label>1. Rationale and Contextualization</label></td>
                                    <td width="25%">
                                      <select class="form-control">
                                        <option>5 - Essential</option>
                                        <option>4 - High Priority</option>
                                        <option>3 - Medium Priority</option>
                                        <option>2 - Low Priority</option>
                                        <option>1 - Not A Priority</option>
                                      </select>
                                    </td>
                                    <td width="45%"><textarea class="form-control" rows="3" placeholder="Type Here..."></textarea></td>
                                  </tr>
                                  <tr>
                                    <td><label>2. Goals, Objectives and Outcomes</label></td>
                                    <td>
                                      <select class="form-control">
                                        <option>5 - Very Desirable</option>
                                        <option>4 - Desirable</option>
                                        <option>3 - Neutral</option>
                                        <option>2 - Undesirable</option>
                                        <option>1 - Very Undesirable</option>
                                      </select>
                                    </td>
                                    <td><textarea class="form-control" rows="3" placeholder="Type Here..."></textarea></td>
                                  </tr>
                                  <tr>
                                    <td><label>3. Participants, Partners and Beneficiaries</label></td>
                                    <td>
                                      <select class="form-control">
                                        <option>5 - Absolutely Appropriate</option>
                                        <option>4 - Appropriate</option>
                                        <option>3 - Neutral</option>
                                        <option>2 - Inappropriate</option>
                                        <option>1 - Absolutely Inappropriate</option>
                                      </select>
                                    </td>
                                    <td><textarea class="form-control" rows="3" placeholder="Type Here..."></textarea></td>
                                  </tr>
                                  <tr>
                                    <td><label>4. Specific activities were cited</label></td>
                                    <td>
                                      <select class="form-control">
                                        <option>5 - Absolutely Appropriate</option>
                                        <option>4 - Appropriate</option>
                                        <option>3 - Neutral</option>
                                        <option>2 - Inappropriate</option>
                                        <option>1 - Absolutely Inappropriate</option>
                                      </select>
                                    </td>
                                    <td><textarea class="form-control" rows="3" placeholder="Type Here..."></textarea></td>
                                  </tr>
                                  <tr>
                                    <td><label>5. Budgetary needs are specified</label></td>
                                    <td>
                                      <select class="form-control">
                                        <option>5 - Perfectly Acceptable</option>
                                        <option>4 - Acceptable</option>
                                        <option>3 - Neutral</option>
                                        <option>2 - Unacceptable</option>
                                        <option>1 - Totally Unacceptable</option>
                                      </select>
                                    </td>
                                    <td><textarea class="form-control" rows="3" placeholder="Type Here..."></textarea></td>
                                  </tr>
                                  <tr>
                                    <td><label>6. Signatories are complete</label></td>
                                    <td>
                                      <select class="form-control">
                                        <option>5 - Totally Complete</option>
                                        <option>4 - Complete</option>
                                        <option>3 - Neutral</option>
                                        <option>2 - Incomplete</option>
                                        <option>1 - Totally Incomplete</option>
                                      </select>
                                    </td>
                                    <td><textarea class="form-control" rows="3" placeholder="Type Here..."></textarea></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2"></td>
                                    <td class="text-center success">
                                      <div class="form-inline">
                                        <div class="form-group">
                                          <label>Total:</label>
                                          <div class="input-group">
                                            <input type="number" class="form-control" placeholder="0.00" readonly>
                                            <div class="input-group-addon"><strong>%</strong></div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                          <a href="director_home.php" style="text-decoration:none">
                            <button type="button" class="btn btn-lg btn-danger btn-block"><span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>&nbsp Back</button>
                          </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                          <a href="director_sample_form_b.php" style="text-decoration:none">
                            <button type="button" class="btn btn-lg btn-success btn-block">Next &nbsp<span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></button>
                          </a>
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