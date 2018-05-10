<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESDMS - Logs</title>
    <?php include('application/views/header.php');?>
</head>

<body>

    <div id="wrapper">

        <?php include('application/views/sidebar.php');?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            
            <?php include('application/views/topNav.php');?>

            <div class="row" style="padding-top:25px;">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>&nbsp; Proposal Log</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row tab-content">

                  
                      
                  <div id="printArea">
                  <div class="container">
                    <div class="row">
<?php foreach($cycle as $retprops){?>
                  <table class="table table-bordered text-center">
                        <thead>
                        <?php foreach($cycle as $retprops) : ?>
                          <tr>
                            <th colspan="2" class="text-center">
                                  <h2><?php echo $retprops->title;?></h2>
                                  <h3><?php echo $retprops->school;?></h3>
                                  <h4><?php echo $retprops->department;?></h4>
                                  <h5><?php echo $retprops->venue;?></h5>
                                  
                                  <h5><?php echo date('F jS, Y',strtotime($retprops->inclusive_date1));?> to <?php echo date('F jS, Y',strtotime($retprops->inclusive_date2));?></h5>
                                 
                            </th>
                          </tr>
                          <tr>
                            <th class="text-center" width="20%">Date & Time</th>
                            <th class="text-center">Log Details</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <td></td>
                            <td></td>
                          </tr>
                        </tfoot>

                <?php if ($retprops->revisions == 1) {?>
                   <?php if ($retprops->vpaa == "1") {?>
                        <tr>
                          <td>
                            <i><?php echo date('F j, Y H:ia',strtotime($retprops->date_vpaa_checked));?></i>
                          </td>
                          <td>
                            Vice President of Academic Affairs approved your proposal.
                          </td>
                        </tr>
                   <?php } if (is_null($retprops->reviewer1_decision) == false && is_null($retprops->reviewer2_decision) == false && is_null($retprops->director_decision) == false && is_null($retprops->vpaa) == true) {?>
                        <tr>
                          <td>
                            <i><?php echo date('F j, Y H:ia',strtotime($retprops->director_decision_date));?></i>
                          </td>
                          <td>
                            CES Director is recommending approval.
                          </td>
                        </tr>
                    <?php } if ($retprops->school_dean == "1" || $retprops->school_dean == "0") {?>
                        <tr>
                          <td>
                            <i><?php echo date('F j, Y H:ia',strtotime($retprops->date_dean_checked));?></i>
                          </td>
                          <td>
                            It is endorsed by School Dean.
                          </td>
                        </tr>
                    <?php } if ($retprops->school_dean == "returned") {?>
                        <tr>
                          <td>
                            <i><?php echo date('F j, Y H:ia',strtotime($retprops->date_dean_checked));?></i>
                          </td>
                          <td>
                            School Dean returned the document.
                          </td>
                        </tr>
                    <?php } if ($retprops->school_coordinator == "1" || $retprops->school_coordinator == "0") {?>
                        <tr>
                          <td>
                            <i><?php echo date('F j, Y H:ia',strtotime($retprops->date_coordinator_checked));?></i>
                          </td>
                          <td>
                            School Coordinator is recommending endorsement.
                          </td>
                        </tr>
                    <?php } if ($retprops->school_coordinator == "returned") {?>
                        <tr>
                          <td>
                            <i><?php echo date('F j, Y H:ia',strtotime($retprops->date_coordinator_checked));?></i>
                          </td>
                          <td>
                            School Coordinator returned the document.
                          </td>
                        </tr>
                    <?php } if ($retprops->department_chair == "1" || $retprops->department_chair == "0") {?>
                        <tr>
                          <td>
                            <i><?php echo date('F j, Y H:ia',strtotime($retprops->date_chair_checked));?></i>
                          </td>
                          <td>
                            It is noted by Department Chairman.
                          </td>
                        </tr>
                    <?php } if ($retprops->department_chair == "returned") {?>
                        <tr>
                          <td>
                            <i><?php echo date('F j, Y H:ia',strtotime($retprops->date_chair_checked));?></i>
                          </td>
                          <td>
                            Department Chairman returned the document.
                          </td>
                        </tr>
                    <?php } ?>
              <?php } ?> <!-- if revision is 1 -->



              <?php if (is_null($retprops->date_reviewer_1_checked) == false && is_null($retprops->date_reviewer_2_checked) == false && is_null($retprops->date_director_checked) == false) {?>
                    <tr>
                      <td></td>
                      <td>View scores and remarks for revision</td>
                    </tr>
                    <?php } if (is_null($retprops->date_reviewer_1_checked) == false || is_null($retprops->date_reviewer_2_checked) == false || is_null($retprops->date_director_checked) == false) {?>
                    <tr>
                      <td>
                        <?php echo date('F j, Y H:ia',strtotime($retprops->date_reviewer_1_checked));?>
                      </td>
                      <td>
                        Proposal is being reviewed...
                      </td>
                    </tr>
                    <?php } ?>


              <?php if ($retprops->revisions == 0) {?>
                    <?php if ($retprops->school_dean == "1" || $retprops->school_dean == "0") {?>
                        <tr>
                          <td>
                            <i><?php echo date('F j, Y H:ia',strtotime($retprops->date_dean_checked));?></i>
                          </td>
                          <td>
                            It is endorsed by School Dean.
                          </td>
                        </tr>
                    <?php } if ($retprops->school_dean == "returned") {?>
                        <tr>
                          <td>
                            <i><?php echo date('F j, Y H:ia',strtotime($retprops->date_dean_checked));?></i>
                          </td>
                          <td>
                            School Dean returned the document.
                          </td>
                        </tr>
                    <?php } if ($retprops->school_coordinator == "1" || $retprops->school_coordinator == "0") {?>
                        <tr>
                          <td>
                            <i><?php echo date('F j, Y H:ia',strtotime($retprops->date_coordinator_checked));?></i>
                          </td>
                          <td>
                            School Coordinator is recommending endorsement.
                          </td>
                        </tr>
                    <?php } if ($retprops->school_coordinator == "returned") {?>
                        <tr>
                          <td>
                            <i><?php echo date('F j, Y H:ia',strtotime($retprops->date_coordinator_checked));?></i>
                          </td>
                          <td>
                            School Coordinator returned the document.
                          </td>
                        </tr>
                    <?php } if ($retprops->department_chair == "1" || $retprops->department_chair == "0") {?>
                        <tr>
                          <td>
                            <i><?php echo date('F j, Y H:i a',strtotime($retprops->date_chair_checked));?></i>
                          </td>
                          <td>
                            Noted by Department Chairman.
                          </td>
                        </tr>
                    <?php } if ($retprops->department_chair == "returned") {?>
                        <tr>
                          <td>
                            <i><?php echo date('F j, Y H:i a',strtotime($retprops->date_chair_checked));?></i>
                          </td>
                          <td>
                            Department Chairman returned the document.
                          </td>
                        </tr>
                    <?php } ?>
              <?php } ?> <!-- if revision is 0 -->

                        <tr>
                          <td>
                            <i><?php echo date('F j, Y h:i a', strtotime($retprops->datetime_created));?></i>
                          </td>
                          <td>
                           <?php echo $retprops->title;?> document was made.
                          </td>
                        </tr>


                        <?php endforeach; ?>
                      </table>
                    
                </div>

                    </div>
                  </div>


                </div> <!-- printThisArea -->

<div style="position:fixed; top:8%; right:2%;">
                
        <button type="submit" class="btn btn-primary btn-md btn-block" onclick="printDiv('printArea')" ><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp Print</button>
        
      </div>
      <br>

               <div style="width:20%; float:left;">
                         <?php if ($retprops->form_type == "A&B") {?>
                                           <a href="<?php echo base_url() ?>/Representative/loadspecificproposal/<?php echo $retprops->id; ?>">
                                        <?php }?>
                                        <?php if ($retprops->form_type == "A") {?>
                                           <a href="<?php echo base_url() ?>/Representative/loadspecificproposal_a/<?php echo $retprops->id; ?>">
                                        <?php }?>
                                        <button type="submit" class="btn .btn-default btn-md btn-block" ><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span>&nbsp; Back to Document</button>
                        </div>
                <?php }?>
            </div>


        </div>

    </div>

    <?php include('application/views/footer.php');?>

    <!-- FOR Printing Form -->
     <script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
  }

    </script>

  

</body>

</html>