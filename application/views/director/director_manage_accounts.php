<!DOCTYPE html>
<html lang="en">

<head>
    <title>CES-DMS - Manage Accounts</title>
    <?php include('application/views/header.php'); ?>
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
                        <h1>&nbsp;&nbsp;<span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Manage Accounts</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
              <?php include('application/views/messages.php'); ?>
                <div class="row">
                  <ul class="nav nav-tabs nav-justified" id="director-manage-account-tabs" role="tab-list">
                    <li class="nav-item active">
                      <a href="#active" class="nav-link" data-toggle="tab" role="tab">
                        <strong>Active</strong>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#pending" class="nav-link" data-toggle="tab" role="tab">
                        <strong>Pending</strong>
                      </a>
                    </li>
                  </ul>
                </div>
                <br>
                <div class="row">
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="active" role="tab-panel">
                      <?php include('active_accounts.php');?>
                    </div>
                    <div class="tab-pane fade" id="pending" role="tab-panel">
                      <?php include('pending_accounts.php');?>
                    </div>
                  </div>
                </div>
            </div>        

        </div>

    </div>


    <?php include('application/views/modals.php'); ?>

    <?php include('application/views/footer.php'); ?>

    <script type="text/javascript">
            var base_url = "<?php echo base_url()."index.php/"; ?>";
    </script>

    

</body>

</html>