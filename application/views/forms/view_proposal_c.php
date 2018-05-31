<!DOCTYPE html>
<html>
<head>
	<title>CESPPMS - View Proposal</title>
	<?php include('application/views/header.php');?>
</head>
<body>

	<div id="wrapper">
		
		<?php include('application/views/sidebar.php');?>
		<?php include('application/views/topNav.php');?>

		<div id="page-content-wrapper">
			

			<div class="proposal-brand">
				<div class="row">
	                <div class="col-md-12">
	                    <img src="<?php echo base_url();?>assets/img/usc_logo.png">
	                    <div class="brand-text">
	                        <h4>University of San Carlos</h4>
							<h4>Community Extension Services Office</h4>
						</div>
						<img src="<?php echo base_url();?>assets/img/ces_logo.png">
	                </div>
	            </div>
			</div>

			<div class="proposal-header">
				<div class="row">
	                <div class="col-md-12">
	                    <h2>USC-CES Form C - CES Program/Project/Activity Proposal</h2>
	                    <h3>(for Requests)</h3>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-md-12">
	                	<h1><?= $proposal['title'] ?></h1>
                        <h4>Department of <?= $proposal['department'] ?></h4>
                        <h4><?= $proposal['school'] ?></h4>
                        <h5>(<?= $proposal['inclusive_date'] ?>)</h5>
	                </div>
	            </div>
            </div>

            <hr>

            <div class="proposal-sections">
            	<h4>&nbsp;I. Program/Project/Activity Profile</h4>
            	<section>
                        
            		<div class="sub-section container">
            			<h5>&nbsp;A. Requester</h5>
            			<section>

                                    <?php if (empty($proposal['requester'])) { ?>
                              <p class="text-center">--- <em>No data inputted</em> ---</p>
                        <?php } ?>

                        <?php if (isset($proposal['requester'])) { ?>
                              <?= nl2br($proposal['requester']); 
                              // // foreach($proposal['requester'] as $reqrow){
                              // //       echo $reqrow->community;
                              // //       echo $reqrow->organization;
                              // //       echo $reqrow->institution;
                              // //       echo $reqrow->unit_from_usc;
                              //  echo $proposal['requester']->community;
                              //       echo $proposal['requester']->organization;
                              //       echo $proposal['requester']->institution;
                              //       echo $proposal['requester']->unit_from_usc;



                              
                              ?>
                        <?php } ?>

            				<!-- <div class="row">
            					<div class="col-md-12">
            						<input type="checkbox" disabled>&nbsp;Community</input>
            					</div>
            				</div>
            				<div class="row">
            					<div class="col-md-12">
            						<input type="checkbox" disabled>&nbsp;Organization</input>
            					</div>
            				</div>
            				<div class="row">
            					<div class="col-md-12">
            						<input type="checkbox" disabled>&nbsp;Institution</input>
            					</div>
            				</div>
            				<div class="row">
	            				<div class="col-md-12">
	            					<input type="checkbox" disabled>&nbsp;Units from within University of San Carlos</input>
	            				</div>
	            			</div>
            				<div class="options">
	            				<div class="row">
	            					<div class="col-md-4">
	            						<input type="checkbox" disabled>&nbsp;CES Office </input>
	            					</div>
	            					<div class="col-md-4">
	            						<input type="checkbox" disabled>&nbsp;School of Arts and Sciences</input>
	            					</div>
	            					<div class="col-md-4">
	            						<input type="checkbox" disabled>&nbsp;School of Architecture, Fine Arts, and Design</input>
	            					</div>
	            				</div>
	            				<div class="row">
	            					<div class="col-md-4">
	            						<input type="checkbox" disabled>&nbsp;School of Education </input>
	            					</div>
	            					<div class="col-md-4">
	            						<input type="checkbox" disabled>&nbsp;School of Engineering</input>
	            					</div>
	            					<div class="col-md-4">
	            						<input type="checkbox" disabled>&nbsp;School of Business and Economics</input>
	            					</div>
	            				</div>
	            				<div class="row">
	            					<div class="col-md-4">
	            						<input type="checkbox" disabled>&nbsp;School of Health Care Profession </input>
	            					</div>
	            					<div class="col-md-4">
	            						<input type="checkbox" disabled>&nbsp;School of Law and Governance</input>
	            					</div>
	            					<div class="col-md-4">
	            						<input type="checkbox" disabled>&nbsp;Support Unit</input>
	            					</div>
	            				</div>
            				</div> -->
            			</section>
                            
            		</div>

            		<div class="sub-section container">
            			<h5>&nbsp;B. Mode of Request</h5>
            			<section>

                                    <?php if (empty($proposal['mode_of_request'])) { ?>
                              <p class="text-center">--- <em>No data inputted</em> ---</p>
                        <?php } ?>

                        <?php if (isset($proposal['mode_of_request'])) { ?>
                              <?= nl2br($proposal['mode_of_request']) ?>
                        <?php } ?>

            				<!-- <div class="row">
            					<div class="col-md-12">
            						<input type="checkbox" disabled>&nbsp;Letter</input>
            					</div>
            				</div>
            				<div class="row">
            					<div class="col-md-12">
            						<input type="checkbox" disabled>&nbsp;E-mail</input>
            					</div>
            				</div>
            				<div class="row">
            					<div class="col-md-12">
            						<input type="checkbox" disabled>&nbsp;Verbal</input>
            					</div>
            				</div>
            				<div class="row">
	            				<div class="col-md-12">
	            					<input type="checkbox" disabled>&nbsp;Short Message Service (SMS)</input>
	            				</div>
	            			</div>
            				<div class="row">
	            				<div class="col-md-12">
	            					<input type="checkbox" disabled>&nbsp;Others</input>
	            				</div>
	            			</div> -->
            			</section>
            		</div>

            		<div class="sub-section container">
            			<h5>&nbsp;C. Nature of the Program/Project/Activity</h5>
            			<section>

                                     <?php if (empty($proposal['nature_of_the_program'])) { ?>
                              <p class="text-center">--- <em>No data inputted</em> ---</p>
                        <?php } ?>

                        <?php if (isset($proposal['nature_of_the_program'])) { ?>
                              <?= nl2br($proposal['nature_of_the_program']) ?>
                        <?php } ?>


            				<!-- <div class="row">
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Training Program</input>
            						<small><em>(non-degree and non-credited courses offered to the community)</em></small>
            					</div>
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Community Outreach</input>
            						<small><em>(community-based and charity driven social services)</em></small>
            					</div>
            				</div>
            				<div class="row">
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Technical Assistance</input>
            						<small><em>(for agencies, organizations, civic groups)</em></small>
            					</div>
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Technology Transfer and Utilization</input>
            						<small><em>(process of circulating, promoting, and marketing or technologies to potential users)</em></small>
            					</div>
            				</div>
            				<div class="row">
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Advisory Services/input>
            						<small><em>(for agencies, organizations, civic groups)</em></small>
            					</div>
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Others</input>
            					</div>
            				</div>
            				<div class="row">
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Information Services/input>
            						<small><em>(dissemination of knowledge/information through various means)</em></small>
            					</div>
            					<div class="col-md-6"></div>
            				</div> -->
            			</section>
            		</div>

            		<div class="sub-section container">
            			<h5>&nbsp;D. Program Area</h5>
            			<section>

                                    <?php if (empty($proposal['program_area'])) { ?>
                              <p class="text-center">--- <em>No data inputted</em> ---</p>
                        <?php } ?>

                        <?php if (isset($proposal['program_area'])) { ?>
                              <?= nl2br($proposal['program_area']) ?>
                        <?php } ?>

            				<!-- <div class="row">
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Productivity-Oriented Initiatives</input>
            					</div>
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Health Advocacy and Wellness Promotion</input>
            					</div>
            				</div>
            				<div class="row">
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Literacy, Values Formation and Life-long Learning</input>
            					</div>
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Building Christian Communities</input>
            					</div>
            				</div>
            				<div class="row">
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Social Welfare Services</input>
            					</div>
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Information Sharing</input>
            					</div>
            				</div>
            				<div class="row">
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Environment Sustainability</input>
            					</div>
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Heritage Conservation</input>
            					</div>
            				</div>
            				<div class="row">
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Issue Advocacy and Rights Promotion</input>
            					</div>
            					<div class="col-md-6">
            						<input type="checkbox" disabled>&nbsp;Rural and Urban Development</input>
            					</div>
            				</div> -->
            			</section>
            		</div>
            	</section>
            </div>

            <div class="proposal-sections">
            	<h4>&nbsp;II. Rationale and Contextualization</h4>
            	<section>
            		<?php if (empty($proposal['rationale_and_contextualization'])) { ?>
                              <p class="text-center">--- <em>No data inputted</em> ---</p>
                        <?php } ?>

                        <?php if (isset($proposal['rationale_and_contextualization'])) { ?>
                              <?= nl2br($proposal['rationale_and_contextualization']) ?>
                        <?php } ?>
            	</section>
            </div>

            <div class="proposal-sections">
            	<h4>&nbsp;III. Goals, Objectives, and Outcomes</h4>
            	<section>
            		<?php if (empty($proposal['goal_objectives_and_outcomes'])) { ?>
                              <p class="text-center">--- <em>No data inputted</em> ---</p>
                        <?php } ?>

                        <?php if (isset($proposal['goal_objectives_and_outcomes'])) { ?>
                              <?= nl2br($proposal['goal_objectives_and_outcomes']) ?>
                        <?php } ?>
            	</section>
            </div>

            <div class="proposal-sections">
            	<h4>&nbsp;IV. Participants, Partners, and Beneficiaries</h4>
            	<section>
            		<?php if (empty($proposal['participants_partners_and_beneficiaries'])) { ?>
                              <p class="text-center">--- <em>No data inputted</em> ---</p>
                        <?php } ?>

                        <?php if (isset($proposal['participants_partners_and_beneficiaries'])) { ?>
                              <?= nl2br($proposal['participants_partners_and_beneficiaries']) ?>
                        <?php } ?>
            	</section>
            </div>

            <div class="proposal-sections">
            	<h4>&nbsp;V. Outline of Activities</h4>
            	<section>
            		<?php if (empty($proposal['outline_of_activities'])) { ?>
                              <p class="text-center">--- <em>No data inputted</em> ---</p>
                        <?php } ?>

                        <?php if (isset($proposal['outline_of_activities'])) { ?>
                              <table>
                                    <thead>
                                          <th>Tentative Date</th>
                                          <th>Activities</th>
                                          <th>Participants Needed</th>
                                          <th>Persons In-charge</th>
                                    </thead>
                                    <tbody>
                                          <?php foreach($proposal['outline_of_activities'] as $outline_of_activities): ?>
                                          <tr>
                                                <td><?= $outline_of_activities['tentative_date'] ?></td>
                                                <td><?= $outline_of_activities['activities'] ?></td>
                                                <td><?= $outline_of_activities['participants_needed'] ?></td>
                                                <td><?= $outline_of_activities['persons_incharge'] ?></td>
                                          </tr>
                                          <?php endforeach; ?>
                                    </tbody>
                              </table>
                        <?php } ?>
            	</section>
            </div>

            <div class="proposal-sections">
            	<h4>&nbsp;VI. Budgetary Requirements</h4>
            	<section>
            		<?php if (empty($proposal['budgetary_requirements'])) { ?>
                              <p class="text-center">--- <em>No data inputted</em> ---</p>
                        <?php } ?>

                        <?php if (isset($proposal['budgetary_requirements'])) { ?>
                              <table>
                                    <thead>
                                          <th>Particulars</th>
                                          <th>Frequency</th>
                                          <th>Quantity</th>
                                          <th>Amount</th>
                                          <th>Total</th>
                                    </thead>
                                    <tbody>
                                          <div class="bq-meals-and-snacks">
                                                <tr>
                                                      <td colspan="5"><em>A. Meals and Snacks</em></td>
                                                </tr>
                                                <tr>
                                                      <td>Lorem ipsum dolor sit amet</td>
                                                      <td>Lorem ipsum dolor sit amet</td>
                                                      <td>Lorem ipsum dolor sit amet</td>
                                                      <td>Lorem ipsum dolor sit amet</td>
                                                      <td>Lorem ipsum dolor sit amet</td>
                                                </tr>
                                          </div>
                                          <div class="bq-transportation">
                                                <tr>
                                                      <td colspan="5"><em>B. Transportation</em></td>
                                                </tr>
                                                <tr>
                                                      <td>Lorem ipsum dolor sit amet</td>
                                                      <td>Lorem ipsum dolor sit amet</td>
                                                      <td>Lorem ipsum dolor sit amet</td>
                                                      <td>Lorem ipsum dolor sit amet</td>
                                                      <td>Lorem ipsum dolor sit amet</td>
                                                </tr>
                                          </div>
                                          <div class="bq-materials">
                                                <tr>
                                                      <td colspan="5"><em>C. Materials</em></td>
                                                </tr>
                                                <tr>
                                                      <td>Lorem ipsum dolor sit amet</td>
                                                      <td>Lorem ipsum dolor sit amet</td>
                                                      <td>Lorem ipsum dolor sit amet</td>
                                                      <td>Lorem ipsum dolor sit amet</td>
                                                      <td>Lorem ipsum dolor sit amet</td>
                                                </tr>
                                          </div>
                                    </tbody>
                              </table>
                        <?php } ?>
            	</section>
            </div>

		</div>
			
		
	</div>

	<?php include('application/views/footer.php');?>
</body>
</html>