<!DOCTYPE html>
<html>
<body>
	<div class="panel panel-success">
        <div class="panel-heading">
            <h4>Outline of Activities</h4>
        </div>
        <div class="panel-body">
            <table id="activity-outline" class="table table-bordered">
              <thead>
                  <th class="text-center">Tentative Date</th>
                  <th class="text-center">Activities</th>
                  <th class="text-center">Participants Needed</th>
                  <th class="text-center">Person/s In-charge</th>
                  <th class="text-center"><button type="button" id="add-activity-outline-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button></th>
              </thead>
              <?php 
                                                  $tentadate= explode(' , ', $result_ab['tentativedate']);
                                                  $acts_oa=explode(' , ', $result_ab['activityname']);
                                                  $partneeded=explode(' , ', $result_ab['participants_needed']);
                                                  $personsinch=explode(' , ', $result_ab['personincharge']);
                                                  
                                                  $oa_arrlength = count($tentadate);
                                                  $oa_arrlength = count($acts_oa);
                                                  $oa_arrlength = count($partneeded);
                                                  $oa_arrlength = count($personsinch);

                                                  for($x = 0; $x < $oa_arrlength; $x++) {?>
                                                  <tbody>
                                                     <tr>
                                                      <td><input type="text" name="tentative_date[]" class="form-control datepicker" value="<?php echo $tentadate[$x]; ?>" data-toggle="tooltip"></td>
                                                      <td><input type="text" name="activities[]" value="<?php echo $acts_oa[$x]; ?>" class="form-control" data-toggle="tooltip"></td>
                                                      <td><input type="number" name="participants_needed[]" value="<?php echo $partneeded[$x]; ?>" class="form-control" data-toggle="tooltip"></td>
                                                      <td><input type="text" name="persons_incharge[]" value="<?php echo $personsinch[$x]; ?>" class="form-control" data-toggle="tooltip"></td>
                                                      <td><button type="button" class="rm-activity-outline-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button></td>
                                                    </tr>
                                                  </tbody>
                                                  <?php }?>
            </table>
        </div>
    </div>
</body>
</html>