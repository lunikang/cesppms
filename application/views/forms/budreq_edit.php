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
                    <?php 
                                                  $ms_partic= explode(' , ', $result_ab['mealsnack_particular']);
                                                  $ms_freq=explode(' , ', $result_ab['mealsnack_frequency']);
                                                  $ms_quant=explode(' , ', $result_ab['mealsnack_quantity']);
                                                  $ms_amnt=explode(' , ', $result_ab['mealsnack_amnt']);
                                                  $ms_sbtotal=explode(' , ', $result_ab['mealsnack_subtotal']);
                                                  
                                                  $meals_arrlength = count($ms_partic);
                                                  $meals_arrlength = count($ms_freq);
                                                  $meals_arrlength = count($ms_quant);
                                                  $meals_arrlength = count($ms_amnt);
                                                  $meals_arrlength = count($ms_sbtotal);

                                                  for($x = 0; $x < $meals_arrlength; $x++) {?>
                                                 
                                                     <tr>
                                                       <td><input type="text" value="<?php echo $ms_partic[$x]; ?>" name="a_particulars[]" id="a_particulars" data-toggle="tooltip" class="particulars form-control" required></td>
                                                       <td><input type="number" value="<?php echo $ms_freq[$x]; ?>" name="a_frequency[]" id="a_frequency" data-toggle="tooltip" class="frequency form-control" min="1" required></td>
                                                       <td><input type="number" value="<?php echo $ms_quant[$x]; ?>" name="a_quantity[]" id="a_quantity" data-toggle="tooltip" class="quantity form-control" min="1" required></td>
                                                       <td>
                                                         <div class="input-group">
                                                           <div class="input-group-addon">₱</div>
                                                           <input type="number" value="<?php echo $ms_amnt[$x]; ?>" name="a_amount[]" id="a_amount" data-toggle="tooltip" class="amount form-control" step="0.01" min="0.25" required>
                                                         </div>
                                                       </td>
                                                       <td>
                                                         <div class="input-group">
                                                           <div class="input-group-addon">₱</div>
                                                           <input type="number" value="<?php echo $ms_sbtotal[$x]; ?>" name="a_subtotal[]" id="a_product" data-toggle="tooltip" class="subtotal form-control" readonly>
                                                         </div>
                                                       </td>
                                                       <td class="text-center">
                                                        <button type="button" class="rm-meals-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>
                                                       </td>
                                                    </tr>
                                                  
                        <?php }?>
                </div>
              </tbody>
              <thead>
                  <th colspan="6" class="bg-success">
                    B. Transportation
                    <button type="button" id="add-transpo-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button>
                  </th>
              </thead>
              <tbody>

              <?php 
                                                  $transpo_partic= explode(' , ', $result_ab['transpo_particular']);
                                                  $transpo_freq=explode(' , ', $result_ab['transpo_frequency']);
                                                  $transpo_quant=explode(' , ', $result_ab['transpo_quantity']);
                                                  $transpo_amnt=explode(' , ', $result_ab['transpo_amnt']);
                                                  $transpo_sbtotal=explode(' , ', $result_ab['transpo_subtotal']);
                                                  
                                                  $transpo_arrlength = count($transpo_partic);
                                                  $transpo_arrlength = count($transpo_freq);
                                                  $transpo_arrlength = count($transpo_quant);
                                                  $transpo_arrlength = count($transpo_amnt);
                                                  $transpo_arrlength = count($transpo_sbtotal);

                                                  for($y = 0; $y < $transpo_arrlength; $y++) {?>
                                                  
                                                     <tr>
                                                        <td><input type="text" value="<?php echo $transpo_partic[$y]; ?>" name="b_particulars[]" id="b_particulars" data-toggle="tooltip" class="particulars form-control" required></td>
                                                        <td><input type="number" value="<?php echo $transpo_freq[$y]; ?>" name="b_frequency[]" id="b_particulars" data-toggle="tooltip" class="frequency form-control" min="1" required></td>
                                                        <td><input type="number" value="<?php echo $transpo_quant[$y]; ?>" name="b_quantity[]" id="b_quantity" data-toggle="tooltip" class="quantity form-control" min="1" required></td>
                                                        <td>
                                                          <div class="input-group">
                                                            <div class="input-group-addon">₱</div>
                                                            <input type="number" value="<?php echo $transpo_amnt[$y]; ?>" name="b_amount[]" data-toggle="tooltip" class="amount form-control" step="0.25" min="1" required>
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="input-group">
                                                            <div class="input-group-addon">₱</div>
                                                            <input type="number" value="<?php echo $transpo_sbtotal[$y]; ?>" name="b_subtotal[]" id="b_product" data-toggle="tooltip" class="subtotal form-control" readonly>
                                                          </div>
                                                        </td>
                                                        <td class="">
                                                          <button type="button" class="rm-transpo-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>
                                                        </td>
                                                    </tr>
                                                  
                        <?php }?>
                      
              </tbody>
              <thead>
                  <th colspan="6" class="bg-success">
                    C. Materials
                    <button type="button" id="add-materials-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button>
                  </th>
              </thead>
              <tbody>
              <?php 
                                                  $mat_partic= explode(' , ', $result_ab['materials_particular']);
                                                  $mat_freq=explode(' , ', $result_ab['materials_frequency']);
                                                  $mat_quant=explode(' , ', $result_ab['materials_quantity']);
                                                  $mat_amnt=explode(' , ', $result_ab['materials_quantity']);
                                                  $mat_sbtotal=explode(' , ', $result_ab['materials_subtotal']);
                                                  
                                                  $transpo_arrlength = count($mat_partic);
                                                  $transpo_arrlength = count($mat_freq);
                                                  $transpo_arrlength = count($mat_quant);
                                                  $transpo_arrlength = count($mat_amnt);
                                                  $transpo_arrlength = count($mat_sbtotal);

                                                  for($z = 0; $z < $transpo_arrlength; $z++) {?>
                                                 
                                                    <tr>
                                                        <td><input type="text" value="<?php echo $mat_partic[$z]; ?>" name="c_particulars[]" data-toggle="tooltip" class="particulars form-control" required></td>
                                                        <td><input type="number" value="<?php echo $mat_freq[$z]; ?>" name="c_frequency[]" data-toggle="tooltip"class="frequency form-control" min="1" required></td>
                                                        <td><input type="number" value="<?php echo $mat_quant[$z]; ?>" name="c_quantity[]" data-toggle="tooltip"class="quantity form-control" min="1" required></td>
                                                        <td>
                                                          <div class="input-group">
                                                            <div class="input-group-addon">₱</div>
                                                            <input type="number" value="<?php echo $mat_amnt[$z]; ?>" name="c_amount[]" data-toggle="tooltip" class="amount form-control" step="0.01" min="0.25" required>
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="input-group">
                                                            <div class="input-group-addon">₱</div>
                                                            <input type="number" value="<?php echo $mat_sbtotal[$z]; ?>" name="c_subtotal[]" id="c_product" class="subtotal form-control" readonly>
                                                          </div>
                                                        </td>
                                                        <td class="text-center">
                                                          <button type="button" class="rm-materials-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>
                                                        </td>
                                                    </tr>
                                                 
                        <?php }?>
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