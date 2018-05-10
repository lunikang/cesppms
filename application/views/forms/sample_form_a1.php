<!DOCTYPE html>
<html lang="en">

<head>
<title>CESDMS - Form A</title>
    <?php include('application/views/header.php');?>
</head>

<body>

    <div id="wrapper">

          <?php include('application/views/sidebar.php');?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <?php include('application/views/topNav.php');?>
            <div class="container-fluid" style="padding-top:50px">

                <div class="row tab-content">

                   <div id="printArea">
                    <div>
                        <h1>USC-CES FORM A <small>CES Program/Project/Activity Proposal (<u>Concept Note</u>)</small></h1>
                        <hr>

<?php $resultreviewer= count($validate_prop);?>

<?php foreach ($specprop_a as $specprop) {?>
                     <div class="panel" align="center" >
                            <div class="panel-body"><p>
                                  <h2><?php echo $specprop->title;?><!-- Barangay Labangon River Clean-up --> 
                                    <?php if($resultreviewer == '3' && $specprop->vpaa == 0){?><span class="label label-pill label-primary" style="font-size: 12px;">reviewed</span><?php }?>
                                   <?php if($resultreviewer == '3' && $specprop->vpaa == 1){?><span class="label label-pill label-success" style="font-size: 12px;">Approved</span><?php }?></h2>
                                  <h3><?php echo $specprop->school;?><!-- School of Arts & Sciences --></h3>
                                  <h4><?php echo $specprop->department;?><!-- Computer and Information Sciences --></h4>
                                  <h5><?php echo $specprop->venue;?><!-- Barangay Talamban, Cebu City --></h5>
                                  
                                  <h5><?php echo date('F jS, Y',strtotime($specprop->inclusive_date1));?> to <?php echo date('F jS, Y',strtotime($specprop->inclusive_date2));?><!-- December 25, 2015 --></h5>
                                 
                                </p>
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                        
                     
                        
                     <button type="button" class="btn btn-xs btn-danger" data-toggle="collapse" data-target="#rationale_comment"><span class="glyphicon glyphicon-comment"></span>&nbsp; Show/Hide Comment&nbsp;&nbsp;<span class="label label-pill label-default"></span></button>
                        <div id="rationale_comment" class="collapse">
                          <div class="panel panel-body panel-danger">
                          <?php foreach ($comments as $comment) {
                            if($comment->comment_category == "Rationale and Contextualization"){?>
                            <label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
                            <p class="text-justify"><?php echo $comment->comment;?></p>
                            
                            <?php } }?>
                          </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>I. Rationale and Contextualization</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify"><?php echo $specprop->rationale_and_contextualization;?></p>
                            </div>
                        </div>

                        <button type="button" class="btn btn-xs btn-danger" data-toggle="collapse" data-target="#goals_comment"><span class="glyphicon glyphicon-comment"></span>&nbsp; Show/Hide Comment</button>
                        <div id="goals_comment" class="collapse">
                          <div class="panel panel-body panel-danger">
                           <?php foreach ($comments as $comment) {
                            if($comment->comment_category == "Goal, Objectives, and Outcomes"){?>
                            <label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
                            <p class="text-justify"><?php echo $comment->comment;?></p>
                            
                            <?php } } ?>
                          </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>II. Goal, Objectives, and Outcomes</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify"><?php echo $specprop->goal_objectives_and_outcomes;?></p>
                            </div>
                        </div>

                        <button type="button" class="btn btn-xs btn-danger" data-toggle="collapse" data-target="#participants_comment"><span class="glyphicon glyphicon-comment"></span>&nbsp; Show/Hide Comment</button>
                        <div id="participants_comment" class="collapse">
                          <div class="panel panel-body panel-danger">
                            <?php foreach ($comments as $comment) {
                            if($comment->comment_category == "Participants, Partners and Beneficiaries"){?>
                              
                            <label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
                            <p class="text-justify"><?php echo $comment->comment;?></p>
                            
                            <?php } } ?>
                          </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>III. Participants, Partners and Beneficiaries</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify"><?php echo $specprop->participants_partnersand_beneficiaries;?></p>
                            </div>
                        </div>

                        <button type="button" class="btn btn-xs btn-danger" data-toggle="collapse" data-target="#actoutline_comment"><span class="glyphicon glyphicon-comment"></span>&nbsp; Show/Hide Comment</button>
                        <div id="actoutline_comment" class="collapse">
                          <div class="panel panel-body panel-danger">
                            <?php foreach ($comments as $comment) {
                            if($comment->comment_category == "Outline of Activities"){?>
                            <label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
                            <p class="text-justify"><?php echo $comment->comment;?></p>
                            
                            <?php } } ?>
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
                                      <?php  $tenatives = explode(' , ', $specprop->tentativedate);
                                      $oa_acts = explode(' , ', $specprop->activityname);
                                      $participantsneeded = explode(' , ', $specprop->participants_needed);
                                      $persincharge= explode(' , ', $specprop->personincharge);
                                      $arrlength = count($tenatives);
                                      $arrlength = count($oa_acts);
                                      $arrlength = count($participantsneeded);
                                      $arrlength = count($persincharge);

                                      for($x = 0; $x < $arrlength; $x++) { ?>

                                    <tr>
                                     
                                      <td class="text-center"><?php echo $tenatives[$x];?></td>
                                    
                                      <td class="text-center"><?php echo $oa_acts[$x];?></td>
                                      <td class="text-center"><?php echo $participantsneeded[$x];?></td>
                                      <td class="text-center"><?php echo $persincharge[$x];?></td>
                                    </tr>
                                      <?php }?>
                                  </tbody>
                                </table> 
                            </div>
                        </div>
                        
                        <button type="button" class="btn btn-xs btn-danger" data-toggle="collapse" data-target="#budreq_comment"><span class="glyphicon glyphicon-comment"></span>&nbsp Show/Hide Comment</button>
                        <div id="budreq_comment" class="collapse">
                          <div class="panel panel-body panel-danger">
                           <?php foreach ($comments as $comment) {
                            if($comment->comment_category == "Budgetary Requirements"){?>
                            <label class="text-danger"><?php echo $comment->firstname?> <?php echo $comment->lastname?>- <?php echo $comment->department?> (<?php echo $comment->designation;?>)</label>
                            <p class="text-justify"><?php echo $comment->comment;?></p>
                            
                            <?php } } ?>
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
                                     <?php  
                                      $ms_partic = explode(' , ', $specprop->mealsnack_particular);
                                      $ms_freq = explode(' , ', $specprop->mealsnack_frequency);
                                      $ms_quant = explode(' , ', $specprop->mealsnack_quantity);
                                      $ms_amnt= explode(' , ', $specprop->mealsnack_amnt);
                                      $ms_sbtotal= explode(' , ', $specprop->mealsnack_subtotal);
                                      
                                      $mealsnacks = count($ms_partic);
                                      $mealsnacks = count($ms_freq);
                                      $mealsnacks = count($ms_quant);
                                      $mealsnacks = count($ms_amnt);
                                      $mealsnacks = count($ms_sbtotal);

                                      for($m = 0; $m < $mealsnacks; $m++) { ?>
                                    <tr>
                                      <td class="text-center"><?php echo $ms_partic[$m];?></td>
                                      <td class="text-center"><?php echo $ms_freq[$m];?></td>
                                      <td class="text-center"><?php echo $ms_quant[$m];?></td>
                                      <td class="text-center"><?php echo '₱ '.$ms_amnt[$m];?></td>
                                      <td class="text-center"><?php echo '₱ '.$ms_sbtotal[$m];?></td>
                                    </tr>
                                    <?php }?>
                                  </tbody>
                                  <thead>
                                      <th colspan="5" class="bg-success">B. Transportation</th>
                                  </thead>
                                  <tbody>
                                    <?php  
                                      $transpo_partic = explode(' , ', $specprop->transpo_particular);
                                      $transpo_freq = explode(' , ', $specprop->transpo_frequency);
                                      $transpo_quant = explode(' , ', $specprop->transpo_quantity);
                                      $transpo_amnt= explode(' , ', $specprop->transpo_amnt);
                                      $transpo_sbtotal= explode(' , ', $specprop->transpo_subtotal);
                                      
                                      $transpo = count($transpo_partic);
                                      $transpo = count($transpo_freq);
                                      $transpo = count($transpo_quant);
                                      $transpo = count($transpo_amnt);
                                      $transpo = count($transpo_sbtotal);

                                      for($t = 0; $t < $transpo; $t++) { ?>
                                    <tr>
                                      <td class="text-center"><?php echo $transpo_partic[$t];?></td>
                                      <td class="text-center"><?php echo $transpo_freq[$t];?></td>
                                      <td class="text-center"><?php echo $transpo_quant[$t];?></td>
                                      <td class="text-center"><?php echo '₱ '.$transpo_amnt[$t];?></td>
                                      <td class="text-center"><?php echo '₱ '.$transpo_sbtotal[$t];?></td>
                                    </tr>
                                    <?php }?>
                                  </tbody>
                                  <thead>
                                      <th colspan="5" class="bg-success">C. Materials</th>
                                  </thead>
                                  <tbody>
                                    <?php  
                                      $mat_partic = explode(' , ', $specprop->materials_particular);
                                      $mat_freq = explode(' , ', $specprop->materials_frequency);
                                      $mat_quant = explode(' , ', $specprop->materials_quantity);
                                      $mat_amnt= explode(' , ', $specprop->materials_amnt);
                                      $mat_sbtotal= explode(' , ', $specprop->materials_subtotal);
                                      
                                      $materialspart = count($mat_partic);
                                      $materialspart = count($mat_freq);
                                      $materialspart = count($mat_quant);
                                      $materialspart = count($mat_amnt);
                                      $materialspart = count($mat_sbtotal);

                                      for($mt = 0; $mt < $materialspart; $mt++) { ?>
                                    <tr>
                                      <td class="text-center"><?php echo $mat_partic[$mt];?></td>
                                      <td class="text-center"><?php echo $mat_freq[$mt];?></td>
                                      <td class="text-center"><?php echo $mat_quant[$mt];?></td>
                                      <td class="text-center"><?php echo '₱ '.$mat_amnt[$mt];?></td>
                                      <td class="text-center"><?php echo '₱ '.$mat_sbtotal[$mt];?></td>
                                    </tr>
                                    <?php }?>
                                    <tr>
                                      <td class="text-right" colspan="4"><h4>Total:</h4></td>
                                      <td class="text-center"><h4><?php echo $specprop->grand_total;?></h4></td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>

<?php include('application/views/footer.php');?>
                       </div> 
                    </div><!-- printThisArea -->
                </div><!-- rowtab content -->


              <?php } ?> <!-- close sa foreach -->
             </div><!-- container fluid -->

            
        </div> <!-- page content wrapper -->

    </div><!--  wrapper -->

   

</body>

</html>