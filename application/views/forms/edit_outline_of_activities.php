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
              <tbody>
                <?php if (isset($proposal['outline_of_activities']) && is_object($proposal['outline_of_activities'])) { ?>
                  <?php foreach ($proposal['outline of activities'] as $outline_of_activities): ?>
                    <tr>
                      <td><input type="text" name="tentative_date[]" class="form-control datepicker" data-toggle="tooltip" value="<?= $outline_of_activities['tentative_date'] ?>"></td>
                      <td><input type="text" name="activities[]" class="form-control" data-toggle="tooltip" value="<?= $outline_of_activities['activities'] ?>"></td>
                      <td><input type="text" name="participants_needed[]" class="form-control" data-toggle="tooltip" value="<?= $outline_of_activities['participants_needed'] ?>"></td>
                      <td><input type="text" name="persons_incharge[]" class="form-control" data-toggle="tooltip"  value="<?= $outline_of_activities['persons_incharge'] ?>"></td>
                      <td></td>
                    </tr>
                  <?php endforeach; ?>
                <?php } ?>
              </tbody>
            </table>
        </div>
    </div>
</body>
</html>