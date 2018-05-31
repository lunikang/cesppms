<!DOCTYPE html>
<html>
<head>
	<title>CESPPMS - Edit Proposal</title>
	<?php include('application/views/header.php');?>
</head>
<body>

	<div id="wrapper">

        <?php include('application/views/sidebar.php');?>
        <?php include('application/views/topNav.php');?>
        
        <!-- Page Content -->
        <div id="page-content-wrapper">

            <div class="row">
                <div class="col-md-12">
                    <div class="page-header text-center">
                        <h1>Filling Out Form A <small>CES Program/Project/Activity Proposal</small></h1>
                        <h3>(<em>Concept Note</em>)</h3>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row tab-content">
                    <div>
                        
                        <?php 
                            $attributes = array('id' => 'forms');
                            echo form_open('Proposals/process_forms', $attributes);
                        ?>

                            <?php include('edit_proposal_header.php');?>

                            <?php include('edit_rationale_and_contextualization.php');?>

                            <?php include('edit_goal_objectives_and_outcomes.php');?>

                            <?php include('edit_participants_partners_and_beneficiaries.php');?>

                            <?php include('edit_outline_of_activities.php');?>
                            
                            <?php include('edit_budgetary_requirements.php');?>

                            <?php echo form_hidden('proposal_id', $this->encryption->encrypt($proposal->id) ); ?>
                            <input type="hidden" name="form_type" value="a"></input>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" align="center">
                              <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                              <button type="submit" class="btn btn-default btn-block" name="submit" value="save_a"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp SAVE & QUIT</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-success btn-block" id="submit" name="submit" value="submit_a"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
                            </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>

            <?php include('exit_modal.php');?>
            
        </div>

    </div>

    <br>
    <br>
    <?php include('application/views/footer.php');?>

</body>
</html>