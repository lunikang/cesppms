<!DOCTYPE html>
<html lang="en">

<head>
    <title>CES-DMS - All Reports</title>
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
                        <h1><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp Reports</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <?php include('application/views/messages.php'); ?>
                <div class="row">
                    <ul class="nav nav-tabs nav-justified" id="coordinator-report-tabs" role="tablist">
                        <li class="nav-item active">
                            <a href="#my-reports" class="nav-link" data-toggle="tab" role="tab">
                                <strong>My Reports</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#other-reports" class="nav-link" data-toggle="tab" role="tab">
                                <strong>Other Reports</strong>
                            </a>
                        </li>
                    </ul>

                    <br>
                    <!-- MY REPORTS AREA sa coodinator -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="my-reports" role="tab-panel">
                            <?php include('my_reports.php');?>
                        </div>

                        <!-- OTHER REPORTS AREA -->
                        <div class="tab-pane fade" id="other-reports" role="tab-panel">
                            <?php include('other_reports.php');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Leigh Profile -->
          <!--   <div class="modal fade" tabindex="-1" role="dialog" id="leigh_profile">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp User's Information</h4>
                  </div>
                  <div class="modal-body">
                    <table>
                        <tr>
                            <td width="35%"><label>Full Name</label></td>
                            <td width="5%"><label>:</label></td>
                            <td>Leigh Mabano</td>
                        </tr>
                        <tr>
                            <td><label>Office/Unit</label></td>
                            <td><label>:</label></td>
                            <td>CAS - Computer and Information Sciences</td>
                        </tr>
                        <tr>
                            <td><label>Designation</label></td>
                            <td><label>:</label></td>
                            <td>Representative</td>
                        </tr>
                        <tr>
                            <td><label>Email Address</label></td>
                            <td><label>:</label></td>
                            <td>leigh_example@yahoo.com</td>
                        </tr>
                        <tr>
                            <td><label>Contact Number</label></td>
                            <td><label>:</label></td>
                            <td>09123456789</td>
                        </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Amanda Profile -->
            <!-- <div class="modal fade" tabindex="-1" role="dialog" id="amanda_profile">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp User's Information</h4>
                  </div>
                  <div class="modal-body">
                    <table>
                        <tr>
                            <td width="35%"><label>Full Name</label></td>
                            <td width="5%"><label>:</label></td>
                            <td>Amanda Quinal</td>
                        </tr>
                        <tr>
                            <td><label>Office/Unit</label></td>
                            <td><label>:</label></td>
                            <td>CAS - Computer and Information Sciences</td>
                        </tr>
                        <tr>
                            <td><label>Designation</label></td>
                            <td><label>:</label></td>
                            <td>Representative</td>
                        </tr>
                        <tr>
                            <td><label>Email Address</label></td>
                            <td><label>:</label></td>
                            <td>amanda_example@yahoo.com</td>
                        </tr>
                        <tr>
                            <td><label>Contact Number</label></td>
                            <td><label>:</label></td>
                            <td>09123456789</td>
                        </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div> -->

    <?php include('application/views/footer.php');?>

</body>

</html>