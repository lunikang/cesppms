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
                <div class="mealsNsnacks"></div>
              </tbody>
              <thead>
                  <th colspan="6" class="bg-success">
                    B. Transportation
                    <button type="button" id="add-transpo-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button>
                  </th>
              </thead>
              <tbody>
              </tbody>
              <thead>
                  <th colspan="6" class="bg-success">
                    C. Materials
                    <button type="button" id="add-materials-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button>
                  </th>
              </thead>
              <tbody>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="4">
                    <h4 class="text-right">Grand Total:</h4>
                  </td>
                  <td colspan="2" class="calculation">
                    <div class="input-group">
                    <div class="input-group-addon">₱</div>
                     <input type="number" id="grand-total" class="grand_total form-control text-center" name="grand_total" readonly>
                    </div>
                  </td>
                </tr>
              </tfoot>
            </table>
        </div>
    </div>
</body>
</html>