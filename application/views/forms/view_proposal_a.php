<!DOCTYPE html>
<html>
<head>
	<title>CESDMS - View Proposal</title>
	<?php include('application/views/header.php');?>
</head>
<body>

	<div id="wrapper">
		
		<?php include('application/views/sidebar.php');?>
		<?php include('application/views/topNav.php');?>

		<div id="page-content-wrapper">
			<?php //var_dump($proposal); ?>

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
	                    <h2>USC-CES Form A - CES Program/Project/Activity Proposal</h2>
	                    <h3>(Concept Note)</h3>
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
            	<h4>&nbsp;I. Rationale and Contextualization</h4>
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
            	<h4>&nbsp;II. Goals, Objectives, and Outcomes</h4>
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
            	<h4>&nbsp;III. Participants, Partners, and Beneficiaries</h4>
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
            	<h4>&nbsp;IV. Outline of Activities</h4>
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
            	<h4>&nbsp;V. Budgetary Requirements</h4>
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