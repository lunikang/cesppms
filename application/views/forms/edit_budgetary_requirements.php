<!DOCTYPE html>
<html>
<body>
	<div class="panel panel-success">
        <div class="panel-heading">
            <h4>Budgetary Requirements</h4>
        </div>
        <div class="panel-body">
            <table id="budgetary" class="table table-bordered">
              <thead>
                  <th class="text-center" width="20%">Particulars</th>
                  <th class="text-center" width="20%">Frequency</th>
                  <th class="text-center" width="20%">Quantity</th>
                  <th class="text-center" width="20%">Amount</th>
                  <th class="text-center" width="20%">Subtotal</th>
                  <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
              </thead>
              <thead>
                  <th colspan="6" class="bg-success">
                    A. Meals and Snacks
                    <button type="button" id="add-meals-row" class="pull-right btn btn-success btn-sm"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button>
                  </th>
              </thead>
              <tbody>
                <div class="mealsNsnacks">
                  <?php if (isset($proposal['meals_and_snacks'])) {?>
                    <?php foreach ($proposal['meals_and_snacks'] as $meals_and_snacks): ?>
                      <tr>
                        <td><input type="text" name="a_particulars[]" id="a_particulars" data-toggle="tooltip" class="particulars form-control" value="<?= $meals_and_snacks['particulars'] ?>" required></td>
                        <td><input type="number" name="a_frequency[]" id="a_frequency" data-toggle="tooltip" class="frequency form-control" min="1" value="<?= $meals_and_snacks['frequency'] ?>"required></td>
                        <td><input type="number" name="a_quantity[]" id="a_quantity" data-toggle="tooltip" class="quantity form-control" min="1" value="<?= $meals_and_snacks['quantity'] ?>" required></td>
                        <td>
                          <div class="input-group">
                            <div class="input-group-addon">₱</div>
                            <input type="number" name="a_amount[]" id="a_amount" data-toggle="tooltip" class="amount form-control" step="0.01" min="0.25" value="<?= $meals_and_snacks['amount'] ?>"required>
                          </div>
                        </td>
                        <td>
                          <div class="input-group">
                            <div class="input-group-addon">₱</div>
                            <input type="number" name="a_subtotal[]" id="a_product" data-toggle="tooltip" class="subtotal form-control" value="<?= $meals_and_snacks['subtotal'] ?>" readonly>
                          </div>
                        </td>
                        <td class="text-center">
                          <button type="button" class="rm-meals-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  <?php } ?>
                </div>
              </tbody>
              <thead>
                  <th colspan="6" class="bg-success">
                    B. Transportation
                    <button type="button" id="add-transpo-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button>
                  </th>
              </thead>
              <tbody>
                <?php if (isset($proposal['transportation'])) {?>
                  <?php foreach ($proposal['transportation'] as $transportation): ?>
                      <tr>
                        <td><input type="text" name="b_particulars[]" id="b_particulars" data-toggle="tooltip" class="particulars form-control" value="<?= $transportation['particulars'] ?>" required></td>
                        <td><input type="number" name="b_frequency[]" id="b_frequency" data-toggle="tooltip" class="frequency form-control" min="1" value="<?= $transportation['frequency'] ?>" required></td>
                        <td><input type="number" name="b_quantity[]" id="b_quantity" data-toggle="tooltip" class="quantity form-control" min="1" value="<?= $transportation['quantity'] ?>" required></td>
                        <td>
                          <div class="input-group">
                            <div class="input-group-addon">₱</div>
                            <input type="number" name="b_amount[]" data-toggle="tooltip" class="amount form-control" step="0.25" min="1" value="<?= $transportation['amount'] ?>" required>
                          </div>
                        </td>
                        <td>
                          <div class="input-group">
                            <div class="input-group-addon">₱</div>
                            <input type="number" name="b_subtotal[]" id="b_product" data-toggle="tooltip" class="subtotal form-control" value="<?= $transportation['subtotal'] ?>" readonly>
                          </div>
                        </td>
                        <td class="text-center">
                          <button type="button" class="rm-transpo-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>
                        </td>
                    </tr>
                  <?php endforeach; ?>
                <?php } ?>
              </tbody>
              <thead>
                  <th colspan="6" class="bg-success">
                    C. Materials
                    <button type="button" id="add-materials-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button>
                  </th>
              </thead>
              <tbody>
                <?php if (isset($proposal['materials'])) {?>
                  <?php foreach ($proposal['materials'] as $materials): ?>
                    <tr>
                      <td><input type="text" name="c_particulars[]" data-toggle="tooltip" class="particulars form-control" value="<?= $materials['particulars'] ?>" required></td>
                      <td><input type="number" name="c_frequency[]" data-toggle="tooltip" class="frequency form-control" min="1" value="<?= $materials['frequency'] ?>" required></td>
                      <td><input type="number" name="c_quantity[]" data-toggle="tooltip" class="quantity form-control" min="1" value="<?= $materials['quantity'] ?>" required></td>
                      <td>
                        <div class="input-group">
                          <div class="input-group-addon">₱</div>
                          <input type="number" name="c_amount[]" data-toggle="tooltip" class="amount form-control" step="0.01" min="0.25" value="<?= $materials['amount'] ?>" required>
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <div class="input-group-addon">₱</div>
                          <input type="number" name="c_subtotal[]" id="c_product" class="subtotal form-control" value="<?= $materials['subtotal'] ?>" readonly>
                        </div>
                      </td>
                      <td class="text-center">
                        <button type="button" class="rm-materials-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="4">
                    <h4 class="text-right">Grand Total:</h4>
                  </td>
                  <td colspan="2" class="calculation">
                    <div class="input-group">
                    <div class="input-group-addon">₱</div>
                     <input type="number" id="grand-total" class="grand_total form-control text-center" name="grand_total" value="<?php if(isset($proposal['grand_total'])) echo $proposal['grand_total']?>" readonly>
                    </div>
                  </td>
                </tr>
              </tfoot>
            </table>
        </div>
    </div>
</body>
</html>