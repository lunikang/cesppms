<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Form A and B</title>
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

<?php foreach ($specprop as $specprop) {
  ?>
                        <div class="panel" align="center" >
                            <div class="panel-body"><p>
                                  <h2><?php echo $specprop->title;?><!-- Barangay Labangon River Clean-up <span class="badge">revised</span> --></h2>
                                  <h3><?php echo $specprop->school;?><!-- School of Arts & Sciences --></h3>
                                  <h4><?php echo $specprop->department;?><!-- Computer and Information Sciences --></h4>
                                  <h5><?php echo $specprop->venue;?><!-- Barangay Talamban, Cebu City --></h5>
                                  
                                  <h5><?php echo date('F jS, Y',strtotime($specprop->inclusive_date1));?> to <?php echo date('F jS, Y',strtotime($specprop->inclusive_date2));?><!-- December 25, 2015 --></h5>
                                 
                                </p>
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->

                        
                       
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>I. Rationale and Contextualization</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify"><?php echo $specprop->rationale_and_contextualization;?></p>
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

                         
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>III. Participants, Partners and Beneficiaries</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify"><?php echo $specprop->participants_partnersand_beneficiaries;?></p>
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
                    </div>

                    <h1>USC-CES FORM B <small>CES Program/Project/Activity Proposal (<u>Details</u>)</small></h1>
                        <hr>

                        
                      
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
                                      <?php  
                                      $unitresp_radio = explode(' , ', $specprop->unitresp_chosenradio);
                                      //$unitresp_dropdown = explode(' , ', $specprop->unitresp_dropdown);
                                    
                                      $unitresp = count($unitresp_radio);
                                    
                                      

                                      for($ur = 0; $ur < $unitresp; $ur++) { ?>
                                        
                                        <ul>

                                          <?php 
                                          // if($unitresp_dropdown[$ur] == "0"){
                                          //   echo "";
                                          // }
                                          echo '<li>'.$unitresp_radio[$ur];?>
                                        <?php if($unitresp_radio[$ur] == "School of Arts and Sciences"){
                                            echo ' - '.$specprop->SAS;
                                          }
                                          if($unitresp_radio[$ur] == "School of Archetecture, Fine Arts and Design"){
                                            echo ' - '.$specprop->SAFAD;
                                          }
                                           if($unitresp_radio[$ur] == "School of Education"){
                                            echo ' - '.$specprop->SED;
                                          }
                                           if($unitresp_radio[$ur] == "School of Engineering"){
                                            echo ' - '.$specprop->SOE;
                                          }
                                           if($unitresp_radio[$ur] == "School of Business and Economics"){
                                            echo ' - '.$specprop->SBE;
                                          }
                                          if($unitresp_radio[$ur] == "School of Health Care Profession"){
                                            echo ' - '.$specprop->SHCP;
                                          }
                                          if($unitresp_radio[$ur] == "School of Law and Governance"){
                                            echo ' - '.$specprop->SLG;
                                          }
                                          if($unitresp_radio[$ur] == "Support Unit"){
                                            echo ' - '.$specprop->Supunit;
                                          }?> 
                                          <!-- <li>CES Office</li> -->
                                         <!--  <li>School of Arts and Sciences - Computer and Information Sciences</li>
                                          <li>School of Architecture, Fine Arts and Design - Fine Arts</li>
                                          <li>School of Business and Economics - Business Administration</li>
                                          <li>Support Unit - Guidance Center</li> -->
                                        </ul>
                                        <?php echo '</li>';}?>
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
                                          <li> <?php  
                                      $tf = explode(' , ', $specprop->timeframe);
                                      $tflength= count($tf);
                                      for($x = 0; $x < $tflength; $x++) { 
                                        echo $tf[$x];
                                        if($tf[$x] == "others"){ echo ' : '.$specprop->timeframe_others; }
                                        }?></li>
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
                                         <?php  
                                      $locuslead = explode(' , ', $specprop->locus_and_lead);
                                    
                                      $locus = count($locuslead);
            
                                      for($locs = 0; $locs < $locus; $locs++) { ?>
                                        <ul>
                                          <?php echo '<li>'.$locuslead[$locs]?>
                                          <?php if($locuslead[$locs] == "others:"){echo $specprop->locus_and_lead_spec;}?>
                                        <?php echo '</li>';?>
                                        </ul>
                                        <?php }?>
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
                                         <?php  
                                      $natp = explode(' , ', $specprop->nature_of_program);
                                    
                                      $ntp = count($natp);
            
                                      for($n = 0; $n < $ntp; $n++) { ?>
                                        <ul>
                                           <?php echo '<li>'.$natp[$n]?>
                                          <?php if($natp[$n] == "others:"){echo $specprop->specnatprog;}?>
                                        <?php echo '</li>';?>
                                        </ul>
                                        <?php }?>
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
                                        <?php 
                                        $progarea = explode(' , ', $specprop->program_area);
                                        $prg=count($progarea);
                                        for ($p=0; $p < $prg; $p++) { 
                                        ?>
                                        <ul>
                                         <?php echo '<li>'.$progarea[$p].'</li>'?>
                                        </ul>
                                        <?php }?>
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
                                    <label><?php echo $specprop->prelimneedassess_choice?></label>
                                    <br>
                                    <?php if($specprop->prelimneedassess_choice == "unit have done preliminary needs assessment"){?>
                                       <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Unit personnel involved in the needs assessment activity:</label>
                                      <?php $unitperson = explode(' , ', $specprop->upi_chosenradio);
                                        $personinv=count($unitperson);
                                        for ($ps=0; $ps < $personinv; $ps++) { 
                                      ?>
                                   
                                    <ul>
                                      <?php echo '<li>'.$unitperson[$ps];
                                      if($unitperson[$ps] == "others"){ echo ' : '.$specprop->upi_spec;}
                                      echo '</li>';?>
                                    
                                    </ul>
                                    <?php }}?>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label><?php echo $specprop->verifdata_choice?></label>
                                    <br>
                                    <?php if($specprop->verifdata_choice == "with existing verifiable data from the field"){?>
                                    <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Data source/s:</label>
                                    <?php $datasource = explode(' , ', $specprop->data_sources);
                                        $dsarr=count($datasource);
                                        for ($d=0; $d < $dsarr; $d++) { 
                                      ?>
                                    <ul>
                                      <?php echo '<li>'.$datasource[$d];
                                      if($datasource[$d] == "others"){ echo ' : '.$specprop->datasource_others;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php }?>
                                    <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Tools used to gather data:</label>
                                     <?php $toolsuse = explode(' , ', $specprop->tools_used_to_gather_data);
                                        $toolsusee=count($toolsuse);
                                        for ($x=0; $x < $toolsusee; $x++) { 
                                      ?>
                                    <ul>
                                       <?php echo '<li>'.$toolsuse[$x];
                                      if($toolsuse[$x] == "others"){ echo ' : '.$specprop->toolsgat_others;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php }?>
                                    <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Means employed to verify the data:</label>
                                    <?php $meansemp = explode(' , ', $specprop->means_employed_to_verify_data);
                                        $ms=count($meansemp);
                                        for ($x=0; $x < $ms; $x++) { 
                                      ?>
                                    <ul>
                                     <?php echo '<li>'.$meansemp[$x];
                                      if($meansemp[$x] == "others"){ echo ' : '.$specprop->meansemp_others;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php }?>
                                    <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Who collected the data:</label>
                                     <?php $whocoll = explode(' , ', $specprop->who_collected_the_data);
                                        $ms=count($whocoll);
                                        for ($x=0; $x < $ms; $x++) { 
                                      ?>
                                    <ul>
                                      <?php echo '<li>'.$whocoll[$x];
                                      if($whocoll[$x] == "others"){ echo ' : '.$specprop->whocollect_others;}
                                      echo '</li>';?>
                                    </ul>
                                      <?php }?>
                                    <?php }
                                    elseif ($specprop->verifdata_choice == "without data from the field") {?>
                                     <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Enumerate bases for proposing the P/P/A:</label>
                                     <br/>
                                     <div style="margin-left:10px; margin-right:20px; padding:5px; border: 0.5px solid #C0C0C0;">
                                     <?php echo $specprop->bases_for_proposing_program?>
                                     </div>
                                     <br/>
                                     <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp What are the means employed to ensure the responsiveness of the P/P/A to the local condition?</label>
                                     <br/>
                                     <div style="margin-left:10px; margin-right:20px; padding:5px; border: 0.5px solid #C0C0C0;">
                                     <?php echo $specprop->means_employed_ensure_resposiveness?>
                                     </div>
                                    <?php }?>
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
                                    <?php $productivity_dim = explode(' , ', $specprop->productivity_dimension);
                                        $pd=count($productivity_dim);
                                        for ($x=0; $x < $pd; $x++) { 
                                      ?>
                                    <ul>
                                     <?php echo '<li>'.$productivity_dim[$x];
                                      if($productivity_dim[$x] == "others"){ echo ' : '.$specprop->productivity_dimension_spec;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php }?>
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
                                      <?php $econ_dim = explode(' , ', $specprop->economic_dimension);
                                        $econn=count($econ_dim);
                                        for ($x=0; $x < $econn; $x++) { 
                                      ?>
                                    <ul>
                                      <?php echo '<li>'.$econ_dim[$x];
                                      if($econ_dim[$x] == "employability of partners at"){ echo ' : '.$specprop->econdim_employpart;}
                                      if($econ_dim[$x] == "others"){ echo ' : '.$specprop->economic_dimension_spec;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php }?>
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
                                      <table class="table table-bordered" width="100%">
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->household?></strong> No. of households
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->youthmale?></strong> No. of youth (male) <i>[13 to 30 years old]</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->localgovunit?></strong> No. of Local Government Units
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->youthfemale?></strong> No. youth (female) <i>[13 to 30 years old]</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->orgs_assocs?></strong> No. of Organizations/Associations
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->childboy?></strong> No. of children (boy) <i>[6 to 12 years old]</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->seniorcitizen_male?></strong> No. senior citizens (male) <i>[at least 60 years old]</i>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->childgirl?></strong> No. of children (girl) <i>[6 to 12 years old]</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->seniorcitizen_female?></strong> No. of senior citizens (female) <i>[at least 60 years old]</i></td>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->infants_boy?></strong> No. of infants (boy) <i>[0 to 5 years old]</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->adults_male?></strong> No. of adults (male) <i>[31 to 59 years old]</i>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->infants_girl?></strong> No. of infants (girl) <i>[0 to 5 years old]</i>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->adults_female?></strong> No. of adults (female) <i>[31 to 59 years old]</i>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <?php if ($specprop->socdim_othersname != NULL) {?>
                                          <strong><?php echo $specprop->socdim_otherscount?></strong> <?php echo $specprop->socdim_othersname?>
                                         <?php }?>
                                        </td>
                                      </tr>
                                    </table> 
                       
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
                                     <?php $envidims = explode(' , ', $specprop->environmental_dimension);
                                        $envi=count($envidims);
                                        for ($e=0; $e < $envi; $e++) { 
                                      ?>
                                    <ul>
                                      <?php echo '<li>'.$envidims[$e];
                                      if($envidims[$e] == "others"){ echo ' : '.$specprop->environmental_dimension_spec;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php }?>
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
                                    <?php $govdims = explode(' , ', $specprop->governance_dimension);
                                        $gov=count($govdims);
                                        for ($gg=0; $gg < $gov; $gg++) { 
                                      ?>
                                    <ul>
                                      <?php echo '<li>'.$govdims[$gg];
                                      if($govdims[$gg] == "others"){ echo ' : '.$specprop->governance_dimension_spec;}
                                      echo '</li>';?>
                                    </ul>
                                    <?php }?>
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
                                          <strong><?php echo $specprop->manhours_prepare?></strong> No. of man hours needed to prepare the P/P/A
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->manhours_comp?></strong> No. of man hours needed to complete the P/P/A
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->facultyinv?></strong> No. of faculty members who will be involved
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->coursebasedstud?></strong> No. of course-based students who will be involved
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->studorg?></strong> No. of Student Organization members who will be involved
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->staffinv?></strong> No. of staff who will be involved
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->matproduced?></strong> No. of Information and Education Campaign materials to be produced
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->matimproved?></strong> No. of Information and Education Campaign materials to be improved/enhanced
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->curricprogdev?></strong> No. of curricular programs to be developed</td>
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->curricprogimp?></strong> No. of curricular programs to be improved/enhanced
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->propdev?></strong> No. of proposals to be developed
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->paperspres?></strong> No. of papers to be presented
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->paperspub?></strong> No. of papers to be published
                                        </td>
                                        <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <strong><?php echo $specprop->policiesadv?></strong> No. of policies to be advocated
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
                                            <p class="text-justify"><?php echo $specprop->preparation_expertise_needed_faculty?></p>
                                          </td>
                                          <td>
                                            <p class="text-justify"><?php echo $specprop->preparation_expertise_needed_students?></p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Roles/tasks</td>
                                          <td>
                                            <p class="text-justify"><?php echo $specprop->preparation_roles_faculty?></p>
                                          </td>
                                          <td>
                                            <p class="text-justify"><?php echo $specprop->preparation_roles_students?></p>
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
                                            <p class="text-justify"><?php echo $specprop->implementation_expertise_needed_faculty?></p>
                                          </td>
                                          <td>
                                            <p class="text-justify"><?php echo $specprop->implementation_expertise_needed_students?></p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Roles/tasks</td>
                                          <td>
                                            <p class="text-justify"><?php echo $specprop->implementation_roles_faculty?></p>
                                          </td>
                                          <td>
                                            <p class="text-justify"><?php echo $specprop->implementation_roles_students?></p>
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

                         <!-- Institutional and Support Part gidelete for the meantime diri-->
                       
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h4>V. Partnership and Linkage Profile</h4>
                          </div>
                          <div class="panel-body">
                            <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                              

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                              <thead>
                                <th class="bg-success">Nature of Linkage/Partnership: <em>please specify:</em></th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <p><?php echo $specprop->moa_mou_choice?></p>
                                    <?php if ($specprop->moa_mou_choice == "with memorandum of understanding/memorandum of agreement") {?>
                                    <label>Date Signed:</label> <u><?php echo $specprop->date_signed?></u>
                                    <br>
                                    <label>Signatories for USC:</label> <u><?php echo $specprop->signatories_for_usc?></u>
                                    <br>
                                    <label>Signatories for Partner:</label> <u><?php echo $specprop->signatories_for_partner?></u>
                                    <br>
                                    <label>Enumerate the Major duties of USC/Unit:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify"><?php echo $specprop->major_duties_of_usc_unit?></p>
                                    </div>
                                    <label>Enumerate the Major duties of Partner/s:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify"><?php echo $specprop->major_duties_of_partners?></p>
                                    </div>
                                  <?php } elseif ($specprop->moa_mou_choice == "without memorandum of understanding/memorandum of agreement") {?>
                                     <label>Since when is the linkage:</label> <u><?php echo $specprop->when_is_linkage?></u>
                                    <br>
                                    <label>Who initiated the linkage:</label> <u><?php echo $specprop->who_initiated_linkage?></u>
                                    <br>
                                    
                                    <label>Enumerate the activities already done:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify"><?php echo $specprop->activities_already_done; }?></p>
                                    </div>


                                    <label>Enumerate the opportunities identified:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify"><?php echo $specprop->opportunities_identified?></p>
                                    </div>
                                    <label>Enumerate the challenges/problems encountered:</label>
                                    <div class="panel panel-default panel-body">
                                      <p class="text-justify"><?php echo $specprop->challenges_encountered?></p>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>


                        <?php $prop_id = $specprop->id; } ?>
                        <?php include('application/views/footer.php');?>
                  </div> <!-- iya open is above USC-CES FORM A na h1 -->


 

 
      </div> <!-- printThisArea -->
      

     
              </div> <!-- rowtab content -->

            
             
        

        <div style="position:fixed; top:8%; right:2%;">
        <?php if($role == "CES Director" && $specprop->vpaa == 1 && $specprop->date_vpaa_checked != NULL){?>
        <button type="submit" class="btn btn-primary btn-md btn-block" onclick="printDiv('printArea')" ><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp Print</button>
        <?php } if($role == "Representative" && $specprop->vpaa == 1 && $specprop->date_vpaa_checked != NULL ){?>
        <button type="submit" class="btn btn-primary btn-md btn-block" onclick="printDiv('printArea')" ><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp Print</button>
        <?php } elseif ($role == "Vice-President for Academic Affairs"){ ?>
        <?php echo form_open('Proposals/vpaaApproveProposal');?>
        <input type="hidden" name="prop_id" value="<?php echo $specprop->id;?>">
        <?php if (is_null($specprop->vpaa) && $specprop->director_decision == "Approve" && $specprop->reviewer1_decision == "Approve" && $specprop->reviewer2_decision == "Approve") {?>
          <button type="submit" class="btn btn-primary btn-md btn-block"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp; Approve Proposal</button>
        <?php form_close();?>
        <?php }?>
        
        <?php }?>

<?php if ($user_id == $specprop->reviewer_1 || $user_id == $specprop->reviewer_2 || $user_id == 2) {?>
         <div style="float:left; padding:2px; padding-top:10px;">
                         <?php echo form_open('Proposals/decisionmaking');
                         
                         ?>
                        <input class="form-control" type="hidden" name="id" 
                               value="<?php echo $specprop->id; ?>">
                     <input class="form-control" type="hidden" name="user_id" 
                               value="<?php echo $user_id; ?>">
                      <input class="form-control" type="hidden" name="reviewer_1" 
                               value="<?php echo $specprop->reviewer_1; ?>">
                      <input class="form-control" type="hidden" name="reviewer_2" 
                               value="<?php echo $specprop->reviewer_2; ?>">
                      <input class="form-control" type="hidden" name="role" 
                               value="<?php echo $role; ?>">

                        <?php if ($specprop->revisions == 1) {?>
                        <button type="submit" class="btn btn-danger btn-md" name="decision" value="DisapproveProposal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp; Dissaprove</button>
                        
                         <button type="submit" class="btn btn-primary btn-md" name="decision" value="ApproveProposal"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp; Approve</button>
                         <?php }?>
                         <?php form_close();?>
            </div>
            <?php }?>
        </div>

 
                     
            </div><!-- container fluid -->

            
        </div> <!-- page content wrapper -->

    </div><!--  wrapper -->


     

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