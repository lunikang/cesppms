<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESDMS - Fill Out Form A</title>
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
                        <h1>Filling Out Form A <small>CES Program/Project/Activity Proposal</small></h1>
                        <h3>(<em>Concept Note</em>)</h3>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="row tab-content">
                    <div>
                        
                        <?php 
                            // $attributes = array('id' => 'forms');
                            // echo form_open('Proposals/process_forms', $attributes);
                            echo form_open('Procedure_one/editFormAB'); //machange pa ni..SEE CONTROLLER
                        ?>
                            
                            <?php //include('proposal_header.php');?>

<!-- START proposal header of form_a1.php -->
<div class="panel panel-success" align="center">
    <div class="panel-body">
      <table width="100%">
        <tr>
           <input type="hidden" name="date_director_checked" value="<?php echo $result_ab['date_director_checked'];?>">
            <input type="hidden" name="date_reviewer_1_checked" value="<?php echo $result_ab['date_reviewer_1_checked'];?>">
            <input type="hidden" name="date_reviewer_2_checked" value="<?php echo $result_ab['date_reviewer_2_checked'];?>">


        <input type="hidden" name="approve_id" value="<?php echo $result_ab['approve_id'];?>">
        <input type="hidden" name="unitresponsible_fkid" value="<?php echo $result_ab['unitresponsible_fkid'];?>">
        <input type="hidden" name="practical_counts_fkid" value="<?php echo $result_ab['practical_counts_fkid'];?>">
        <input type="hidden" name="unitpersonnel_involved_fkid" value="<?php echo $result_ab['unitpersonnel_involved_fkid'];?>">
        <input type="hidden" name="verifdata_with_fkid" value="<?php echo $result_ab['verifdata_with_fkid'];?>">
        <input type="hidden" name="verifdata_without_fkid" value="<?php echo $result_ab['verifdata_without_fkid'];?>">
        <input type="hidden" name="social_dimension_fkid" value="<?php echo $result_ab['social_dimension_fkid'];?>">
        <input type="hidden" name="partnership_linkages_profile_fkid" value="<?php echo $result_ab['partnership_linkages_profile_fkid'];?>">
        <input type="hidden" name="request_area_fkid" value="<?php echo $result_ab['request_area_fkid'];?>">
        <input type="hidden" name="rationale_to_beneficiaries_fkid" value="<?php echo $result_ab['rationale_to_beneficiaries_fkid'];?>">
        <input type="hidden" name="Outline_of_Activities_fkid" value="<?php echo $result_ab['Outline_of_Activities_fkid'];?>">
        <input type="hidden" name="budgetary_requirements_fkid" value="<?php echo $result_ab['budgetary_requirements_fkid'];?>">
        <input type="hidden" name="nature_and_area_ofprogram_fkid" value="<?php echo $result_ab['nature_and_area_ofprogram_fkid'];?>">
        <input type="hidden" name="timeframe_to_mou_moa_fkid" value="<?php echo $result_ab['timeframe_to_mou_moa_fkid'];?>">

          <td><input type="hidden" name="id" value="<?php echo $result_ab['id'];?>">
            <label>Title:</label></td>
          <td colspan="4"><input type="text" class="form-control" name="title" data-toggle="tooltip" value="<?php echo $result_ab['title']; ?>" placeholder="Name of the Program/Project/Activity" required>

            <input type="hidden" class="form-control" name="user_id" data-toggle="tooltip" value="<?php echo $user_id?>">
             <input type="hidden" class="form-control" name="form_type" data-toggle="tooltip" value="<?php echo $result_ab['form_type']; ?>">
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><label>School:</label></td>
          <td>
            <input type="text" class="form-control" name="school" value="<?php echo $user_office?>" readonly>
            
          </td>
          <td><label>&nbsp Department:</label></td>
          <td>
          <input type="text" class="form-control" name="department" value="<?php echo $user_dept?>" readonly>
          </td>
        </tr>
        <tr>

            <td><label>Inclusive Date:</label></td>
            <td><input type="text" name="inclusive_date1" value="<?php echo $result_ab['inclusive_date1']; ?>" data-toggle="tooltip" placeholder="Date Start of Activity (mm/dd/yyyy)" class="form-control datepicker" required></td>
            <td class="text-center"><em>to</em></td>
            <td><input type="text" name="inclusive_date2" value="<?php echo $result_ab['inclusive_date2']; ?>" data-toggle="tooltip" placeholder="Date End of Activity (mm/dd/yyyy)" class="form-control datepicker" required></td>
        </tr>
        <tr>
            <td><label>Venue:</label></td>
            <td colspan="3"><input type="text" class="form-control" data-toggle="tooltip" value="<?php echo $result_ab['venue']; ?>" name="venue" placeholder="Where will the activity take place?" required></td>
            <td></td>
            <td></td>
        </tr>
      </table>
    </div>
  </div>
<!-- END of proposal header -->
                


                        <input type="hidden" name="procedure_num" value="<?php echo $result_ab['form_procedure']; ?>">

                           
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>
                                      Rationale and Contextualization &nbsp&nbsp&nbsp&nbsp;
                                      <span class="glyphicon glyphicon-question-sign pull-right" data-toggle="collapse" data-target="#info_1"></span>
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <div id="info_1" class="collapse">
                                        <div class="well well-sm">
                                          <p>
                                            This portion will serve as the justification for your proposal. Please provide the following minimum information for the rationale and introduction of your program/project/activity:
                                            <ol>
                                              <li>Current condition of the community</li>
                                              <li>Problem/need identified by the unit that you intend to address</li>
                                              <li>Data source as well as the process underwent to generate the data</li>
                                              <li>How will the unit respond to the condition? What expertise and competencies from the unit or in collaboration with others will be useful to address the identified condition?</li>
                                            </ol>
                                          </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" name="rationale_and_contextualization" data-toggle="tooltip" placeholder="Type Here..."><?php echo $result_ab['rationale_and_contextualization']; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <?php include('goal_objectives_and_outcomes_edit.php');?>

                            <?php include('participants_partners_and_beneficiaries_edit.php');?>

                         
                            <?php include('outline_of_activities_edit.php');?>
                             

                            
                            <?php include('budreq_edit.php');?>
                             

                             <?php include('form_b1_update.php');?>

                        
                            
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp; Cancel</button>
                            </div>
                          <!--   <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                              <button type="submit" class="btn btn-default btn-block" name="submit" value="save_a"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp SAVE & QUIT</button>
                            </div> -->
                           <!--  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-success btn-block" name="submit" value="next_a">Next&nbsp;<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> </button>
                            </div> -->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
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