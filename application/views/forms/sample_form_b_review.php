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
                  <div class="userinfo">
                    <img src="<?php echo base_url();?>assets/img/user.png" alt="..." class="img-circle" style="height:140px; width:140px">
                    <h4><?php echo $fname." ".$lname;?></h4>
                    <h5>CES Coordinator</h5>
                  </div>
                </li>
                <li>
                    <a href="coordinator_proposal.php"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp My Proposals</a>
                </li>
                <li>
                    <a href="coordinator_report.php"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp My Reports</a>
                </li>
                <li>
                    <a href="coordinator_other_report.php"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span>&nbsp Other Reports</a>
                </li>
                <li>
                    <a href="coordinator_review.php"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp Reviews</a>
                </li>
                <li>
                    <a href="coordinator_recommend.php"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp Recommendations</a>
                </li>
                <li>
                    <a href="coordinator_setting.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp Account Settings</a>
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
                        <h1>USC-CES FORM B <small>CES Program/Project/Activity Proposal (<u>Details</u>)</small></h1>
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
                                  <td><span class="glyphicon glyphicon-check" aria-hidden="true"></span>&nbsp Department Chair notes CES proposal</td>
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

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>I. Program/Project/Activity Profile</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                  <thead>
                                    <th class="bg-success">A. College/School/Department/Unit Responsible</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <ul>
                                          <li>CES Office</li>
                                          <li>School of Arts and Sciences - Computer and Information Sciences</li>
                                          <li>School of Architecture, Fine Arts and Design - Fine Arts</li>
                                          <li>School of Business and Economics - Business Administration</li>
                                          <li>Support Unit - Guidance Center</li>
                                        </ul>
                                      </td>
                                    </tr>
                                  </tbody>
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                  <thead>
                                    <th class="bg-success">B. Time Frame</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <ul>
                                          <li>Short Term - 1 Semester</li>
                                        </ul>
                                      </td>
                                    </tr>
                                  </tbody>
<!-- +_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_ 3rd Part -->
                                  <thead>
                                    <th class="bg-success">C. Locus and Leadership</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <ul>
                                          <li>Course-based (undergraduate)</li>
                                          <li>Department-led</li>
                                        </ul>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- +_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_ 4th Part -->
                                  <thead>
                                    <th class="bg-success">D. Nature of the Program/Project/Activity</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <ul>
                                          <li>Technical Assistance (for agencies, organization, civic groups)</li>
                                          <li>Information Services (dissemination of knowledge/information through various means)</li>
                                        </ul>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 5th Part -->
                                  <thead>
                                    <th class="bg-success">E. Program Area</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <ul>
                                          <li>Health Advocacy and Wellness Promotion</li>
                                          <li>Information Sharing</li>
                                          <li>Issue Advocacy and Rights Promotion</li>
                                        </ul>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h4>II. Significance/Relevance Matrix</h4>
                          </div>
                          <div class="panel-body">
                            <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                              <thead>
                                <th class="bg-success">A. Contextual Dimension:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <label>unit have done preliminary needs assessment</label>
                                    <br>
                                    <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Unit personnel involved in the needs assessment activity:</label>
                                    <ul>
                                      <li>faculty members</li>
                                      <li>student org./majors</li>
                                      <li>student volunteers</li>
                                      <li>community/org partners</li>
                                    </ul>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>with existing verifiable data from the field</label>
                                    <br>
                                    <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Data source/s:</label>
                                    <ul>
                                      <li>provided/expressed by the partner</li>
                                      <li>recommended by faculty/student/class</li>
                                      <li>CES data gathering initiatives</li>
                                      <li>community meetings</li>
                                    </ul>
                                    <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Tools used to gather data:</label>
                                    <ul>
                                      <li>survey/questionnare</li>
                                      <li>exposure/immersions</li>
                                      <li>documents review</li>
                                      <li>community meetings</li>
                                    </ul>
                                    <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Means employed to verify the data:</label>
                                    <ul>
                                      <li>survey/questionnare</li>
                                      <li>exposure/immersions</li>
                                      <li>documents review</li>
                                      <li>community meetings</li>
                                    </ul>
                                    <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Who collected the data:</label>
                                    <ul>
                                      <li>undergraduate students</li>
                                      <li>partner community/org./institution</li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                              <thead>
                                <th class="bg-success">B. Productivity Dimension:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <ul>
                                      <li>utilization of existing technology</li>
                                      <li>training or capacity-building for the use of Technology</li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 3rd Part -->
                              <thead>
                                <th class="bg-success">C. Economic Dimension:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <ul>
                                      <li>enhancement of partner’s current livelihood</li>
                                      <li>measurable increase in the income of partners</li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 4th Part -->
                              <thead>
                                <th class="bg-success">D. Social Dimension:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <label>The P/P/A will benefit:</label>
                                    <br>
                                    <ul>
                                      <li><strong>20</strong> - households</li>
                                      <li><strong>30</strong> - youth (male) [13 to 30 years old]</li>
                                      <li><strong>30</strong> - youth (female) [13 to 30 years old]</li>
                                      <li><strong>10</strong> - children (boy) [6 to 12 years old]</li>
                                      <li><strong>10</strong> - children (girl) [6 to 12 years old]</li>
                                      <li><strong>20</strong> - adults (male) [31 to 59 years old]</li>
                                      <li><strong>20</strong> - adults (female) [31 to 59 years old]</li>
                                      <li><strong>5</strong> - infants (boy) [0 to 5 years old]</li>
                                      <li><strong>5</strong> - infants (girl) [0 to 5 years old]</li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 5th Part -->
                              <thead>
                                <th class="bg-success">E. Environmental  Dimension:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <ul>
                                      <li>River Management</li>
                                      <li>Clean-up Drives (coastal, river, drainage, sewage, etc.)</li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 6th Part -->
                              <thead>
                                <th class="bg-success">F. Governance Dimension:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <ul>
                                      <li>funding support from LGUs</li>
                                      <li>established counterparts from LGUs</li>
                                      <li>established counterparts from other partners</li>
                                      <li>MOA/MOU with other partners</li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>

                        <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h4>III. Implications to Work hours, Academic Program, and Research</h4>
                          </div>
                          <div class="panel-body">
                            <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                              <thead>
                                <th class="bg-success">A. Practical Counts:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <table class="table table-bordered" width="100%">
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong>20</strong> No. of man hours needed to prepare the P/P/A
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong>20</strong> No. of man hours needed to complete the P/P/A
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong>20</strong> No. of faculty members who will be involved
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong>20</strong> No. of course-based students who will be involved
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong>20</strong> No. of Student Organization members who will be involved
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong>20</strong> No. of staff who will be involved
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong>20</strong> No. of Information and Education Campaign materials to be produced
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong>20</strong> No. of Information and Education Campaign materials to be improved/enhanced
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong>20</strong> No. of curricular programs to be developed</td>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong>20</strong> No. of curricular programs to be improved/enhanced
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong>20</strong> No. of proposals to be developed
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong>20</strong> No. of papers to be presented
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong>20</strong> No. of papers to be published
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong>20</strong> No. of policies to be advocated
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                              <thead>
                                <th class="bg-success">B. Human Resource Implications:</th>
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
                                          <td>
                                            <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.</p>
                                          </td>
                                          <td>
                                            <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.</p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Roles/tasks</td>
                                          <td>
                                            <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.</p>
                                          </td>
                                          <td>
                                            <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.</p>
                                          </td>
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
                                          <td>
                                            <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.</p>
                                          </td>
                                          <td>
                                            <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.</p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Roles/tasks</td>
                                          <td>
                                            <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.</p>
                                          </td>
                                          <td>
                                            <p class="text-justify">Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia, id partem dictas nam, no vim diam docendi. Nam legere scaevola ad, cu usu dicit partem inimicus. No est aliquando elaboraret, epicuri probatus sed cu.</p>
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

                        <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h4>IV. Institutional and Policy Support Needs and Counterparts</h4>
                          </div>
                          <div class="panel-body">
                            <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                              <thead>
                                <th class="bg-success">A. Support from the USC system:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <ul>
                                      <li>collaboration with other units <strong>School of Arts and Sciences - Computer and Information Sciences</strong></li>
                                      <li>provision of meals and snacks for USC manpower</li>
                                      <li>provision of meals and snacks for partners</li>
                                      <li>venue or work station/s</li>
                                      <li>materials</li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                              <thead>
                                <th class="bg-success">B. Support from partners/beneficiaries:</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <table class="table table-bordered" width="100%">
                                      <thead>
                                        <th>1. Partner/Beneficiaries: Lorem ipsum dolor sit amet</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <ul>
                                              <li>provision of meals and snacks for USC manpower</li>
                                              <li>provision of meals and snacks for partners</li>
                                            </ul>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>

                                    <table class="table table-bordered" width="100%">
                                      <thead>
                                        <th>2. Partner/Beneficiaries: Lorem ipsum dolor sit amet</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <ul>
                                              <li>venue or work station/s</li>
                                              <li>materials</li>
                                            </ul>
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

                        <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h4>V. Partnership and Linkage Profile</h4>
                          </div>
                          <div class="panel-body">
                            <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                              <thead>
                                <th class="bg-success">A. Partners and Collaborators:</th>
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
                                            Academic Department: <u>Computer and Information Sciences</u>
                                          </td>
                                          <td>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Co-Curricular SO: <u>Dynamic Communication Society</u>
                                          </td>
                                          <td>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Support Unit: <u>USC-Supreme Student Council</u>
                                          </td>
                                          <td>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia</td>
                                        </tr>
                                      </tbody>

                                      <thead>
                                        <th class="text-center" width="40%">OUTSIDE of USC Partners and/or Beneficiaries</th>
                                        <th class="text-center">What is/are the contribution/s or counterpart of the partner?</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            Marginalized Community: <u>Lorem ipsum dolor sit amet</u>
                                          </td>
                                          <td>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            LGU: <u>Lorem ipsum dolor sit amet</u>
                                          </td>
                                          <td>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Public school: <u>Lorem ipsum dolor sit amet</u>
                                          </td>
                                          <td>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Civic Group/Association: <u>Lorem ipsum dolor sit amet</u>
                                          </td>
                                          <td>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Professional Org.: <u>Lorem ipsum dolor sit amet</u>
                                          </td>
                                          <td>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Gov’t Agency: <u>Lorem ipsum dolor sit amet</u>
                                          </td>
                                          <td>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Church: <u>Lorem ipsum dolor sit amet</u>
                                          </td>
                                          <td>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Advocacy Group/NGO: <u>Lorem ipsum dolor sit amet</u>
                                          </td>
                                          <td>Lorem ipsum dolor sit amet, ei mazim deseruisse persequeris sed. Id eam integre nonumes iracundia</td>
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
                                    <p>with MOU/MOA</p>
                                    <label>Date Signed:</label> <u>January 6, 2016</u>
                                    <br>
                                    <label>Signatories for USC:</label> <u>Lorem ipsum dolor sit amet</u>
                                    <br>
                                    <label>Signatories for Partner:</label> <u>Lorem ipsum dolor sit amet</u>
                                    <br>
                                    <label>Enumerate the Major duties of USC/Unit:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify">Lorem ipsum dolor sit amet, usu an legimus vivendum adolescens, pro no vidisse definitiones, quas mundi quo ex. Eam at ullum quidam, omnesque verterem his te. Posse nonumy impedit ea qui, alii velit nulla eu vim. Indoctum volutpat sed at. Essent accusam constituam in vis, duo agam nonumy principes ea, nec putent numquam definitionem ad. Cum scripta oportere voluptaria an.</p>
                                    </div>
                                    <label>Enumerate the Major duties of Partner/s:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify">Lorem ipsum dolor sit amet, usu an legimus vivendum adolescens, pro no vidisse definitiones, quas mundi quo ex. Eam at ullum quidam, omnesque verterem his te. Posse nonumy impedit ea qui, alii velit nulla eu vim. Indoctum volutpat sed at. Essent accusam constituam in vis, duo agam nonumy principes ea, nec putent numquam definitionem ad. Cum scripta oportere voluptaria an.</p>
                                    </div>
                                    <label>Enumerate the opportunities identified:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify">Lorem ipsum dolor sit amet, usu an legimus vivendum adolescens, pro no vidisse definitiones, quas mundi quo ex. Eam at ullum quidam, omnesque verterem his te. Posse nonumy impedit ea qui, alii velit nulla eu vim. Indoctum volutpat sed at. Essent accusam constituam in vis, duo agam nonumy principes ea, nec putent numquam definitionem ad. Cum scripta oportere voluptaria an.</p>
                                    </div>
                                    <label>Enumerate the challenges/problems encountered:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify">Lorem ipsum dolor sit amet, usu an legimus vivendum adolescens, pro no vidisse definitiones, quas mundi quo ex. Eam at ullum quidam, omnesque verterem his te. Posse nonumy impedit ea qui, alii velit nulla eu vim. Indoctum volutpat sed at. Essent accusam constituam in vis, duo agam nonumy principes ea, nec putent numquam definitionem ad. Cum scripta oportere voluptaria an.</p>
                                    </div>
                                  </td>
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
                                    <td width="30%"><label>1. Program/Project/Activity Profile</label></td>
                                    <td width="25%">
                                      <select class="form-control">
                                        <option>5 - Completely Filled-in</option>
                                        <option>4 - Filled-in</option>
                                        <option>3 - Neutral</option>
                                        <option>2 - Unfilled</option>
                                        <option>1 - Totally Unfilled</option>
                                      </select>
                                    </td>
                                    <td width="45%"><textarea class="form-control" rows="3" placeholder="Type Here..."></textarea></td>
                                  </tr>
                                  <tr>
                                    <td><label>2. Significance Matrix</label></td>
                                    <td>
                                      <select class="form-control">
                                        <option>5 - Absolutely Significant</option>
                                        <option>4 - Significant</option>
                                        <option>3 - Neutral</option>
                                        <option>2 - Insignificant</option>
                                        <option>1 - Absolutely Insignificant</option>
                                      </select>
                                    </td>
                                    <td><textarea class="form-control" rows="3" placeholder="Type Here..."></textarea></td>
                                  </tr>
                                  <tr>
                                    <td><label>3. Implications to work hours, academic program and research: <u>Practical Counts</u></label></td>
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
                                    <td><label>4. Implications to work hours, academic program and research: <u>Human Resources</u></label></td>
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
                                    <td><label>5. Institutional Support Needs: <u>Support from USC System</u></label></td>
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
                                    <td><label>6. Institutional Support Needs: <u>Support from Partners/Beneficaries</u></label></td>
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
                                    <td><label>7. Partnership and Linkage: <u>Intra USC Partners/Beneficiaries</u></label></td>
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
                                    <td><label>8. Partnership and Linkage: <u>Extra USC Partners/Beneficiaries</u></label></td>
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
                                    <td><label>9. Partnership and Linkage: <u>With MOA/MOU</u></label></td>
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
                          <button type="button" class="btn btn-lg btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                          <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
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
                    Are you sure you want cancel assessing the proposal? All progress will not be saved.
                  </div>
                  <div class="modal-footer">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <button type="button" class="btn btn-lg btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp No</button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <a href="coordinator_review.php" style="text-decoration:none">
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