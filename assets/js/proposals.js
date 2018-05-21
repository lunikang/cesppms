// Check all input fields if not empty (on submit)
// $("#submit").click(function() {
//     var empty = $(this).parent().find("input").filter(function() {
//         return this.value === "";
//     });
//     if(empty.length) {
//         //At least one input is empty
//     }
// });

// insert new line on text area

// Prevent submission when Enter key is pressed
$(window).keyup(function(e) {
  if((e.which== 13) && ($(e.target)[0]!=$("textarea")[0])) {
      e.preventDefault();
      return false;
    }
});

// Departments on particular school choice
$(function(){
        $('#school').on('change', function(){
          var val = $(this).val();
          var sub = $('#department');
              sub.find('option').not(':first').hide();
              $('option', sub).filter(function() {
                  if($(this).attr('data-group') == val)
                      $(this).show();
              });
          sub.val(0);
        });
      });

// Add support from partners/beneficiaries row
$(function() {
  $("#add-partners-benefeciaries-row").click(function() {
    var list = '<tr>\
                    <table class="table table-bordered" width="100%">\
                        <tr>\
                        <th colspan="2">\
                          <div class="form-inline">\
                            <label>1. Partner/Beneficiaries:</label>\
                            &nbsp\
                            <input type="text" name="partner_beneficiaries_title[]" class="form-control" placeholder="Type Here..." style="width:80%">\
                          </div>\
                        </th>\
                        <tr>\
                          <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">\
                            <div class="checkbox form-inline">\
                              <label><input type="checkbox" name="collab[]">collaboration with other units</label>\
                              &nbsp\
                              <input type="text" name="collab_spec[]" class="form-control" placeholder="Type Here...">\
                            </div>\
                          </td>\
                          <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">\
                            <div class="checkbox form-inline">\
                              <label><input type="checkbox" name="resource_speaker[]">resource speaker/s on</label>\
                              &nbsp\
                              <input type="text" name="speaker[]" class="form-control" placeholder="Type Here...">\
                            </div>\
                          </td>\
                        </tr>\
                        <tr>\
                          <td>\
                            <div class="checkbox">\
                              <label><input type="checkbox" name="provision_formanpower[]">provision of meals and snacks for USC manpower</label>\
                            </div>\
                          </td>\
                          <td>\
                            <div class="checkbox">\
                              <label><input type="checkbox" name="provision_forpartners[]">provision of meals and snacks for partners</label>\
                            </div>\
                          </td>\
                        </tr>\
                        </tr>\
                        <tr>\
                          <td>\
                            <div class="checkbox form-inline">\
                              <label><input type="checkbox" name="transport[]">transport for</label>\
                              &nbsp\
                              <input type="number" name="transport_spec[]" class="form-control" placeholder="How Many?">\
                            </div>\
                          </td>\
                          <td>\
                            <div class="checkbox form-inline">\
                              <label><input type="checkbox" name="reg_charge[]">registration fee/charge of</label>\
                              &nbsp\
                              <input type="number" name="regcharge_spec[]" class="form-control" placeholder="Type Here...">\
                            </div>\
                          </td>\
                        </tr>\
                        <tr>\
                          <td>\
                            <div class="checkbox">\
                              <label><input type="checkbox" name="workstation[]">venue or work station/s</label>\
                            </div>\
                          </td>\
                          <td>\
                            <div class="checkbox">\
                              <label><input type="checkbox" name="formb_material[]">materials</label>\
                            </div>\
                          </td>\
                        </tr>\
                        <tr>\
                          <td>\
                            <div class="checkbox form-inline">\
                              <label><input type="checkbox" name="other_partnersbenefpart[]">Others</label>\
                              &nbsp\
                              <input type="text" name="other_partnersbenefpart_spec[]" class="form-control" placeholder="Type Here...">\
                            </div>\
                          </td>\
                          <td>\
                           <button type="button" class="rm-partners-beneficiaries-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>\
                          </td>\
                        </tr>\
                    </table>\
                </tr>';
    $(' #support-from-partner tbody').append(list);
  });
});

// Adding outline of activities row 
$(function(){
  $("#add-activity-outline-row").click(function(){
    var list = '<tr>\
                  <td><input type="text" name="tentative_date[]" data-toggle="tooltip" class="form-control datepicker" required></td>\
                  <td><input type="text" name="activities[]" data-toggle="tooltip" class="form-control" required></td>\
                  <td><input type="text" name="participants_needed[]" data-toggle="tooltip" class="form-control" required></td>\
                  <td><input type="text" name="persons_incharge[]" data-toggle="tooltip" class="form-control" required></td>\
                  <td class="text-center">\
                    <button type="button" class="rm-activity-outline-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>\
                  </td>\
                </tr>';
    $('#activity-outline tbody').append(list);
  });
});

// Adding budgetary requirements row  & totals
function addMealsRow() {
  var list = '<tr>\
               <td><input type="text" name="a_particulars[]" id="a_particulars" data-toggle="tooltip" class="particulars form-control" required></td>\
               <td><input type="number" name="a_frequency[]" id="a_frequency" data-toggle="tooltip" class="frequency form-control" min="1" required></td>\
               <td><input type="number" name="a_quantity[]" id="a_quantity" data-toggle="tooltip" class="quantity form-control" min="1" required></td>\
               <td>\
                 <div class="input-group">\
                   <div class="input-group-addon">₱</div>\
                   <input type="number" name="a_amount[]" id="a_amount" data-toggle="tooltip" class="amount form-control" step="0.01" min="0.25" required>\
                 </div>\
               </td>\
               <td>\
                 <div class="input-group">\
                   <div class="input-group-addon">₱</div>\
                   <input type="number" name="a_subtotal[]" id="a_product" data-toggle="tooltip" class="subtotal form-control" readonly>\
                 </div>\
               </td>\
               <td class="text-center">\
                <button type="button" class="rm-meals-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>\
               </td>\
            </tr>';
  $('#budgetary tbody:first').append(list);
}

function addTranspoRow() {
   var list = '<tr>\
                  <td><input type="text" name="b_particulars[]" id="b_particulars" data-toggle="tooltip" class="particulars form-control" required></td>\
                  <td><input type="number" name="b_frequency[]" id="b_particulars" data-toggle="tooltip" class="frequency form-control" min="1" required></td>\
                  <td><input type="number" name="b_quantity[]" id="b_quantity" data-toggle="tooltip" class="quantity form-control" min="1" required></td>\
                  <td>\
                    <div class="input-group">\
                      <div class="input-group-addon">₱</div>\
                      <input type="number" name="b_amount[]" data-toggle="tooltip" class="amount form-control" step="0.25" min="1" required>\
                    </div>\
                  </td>\
                  <td>\
                    <div class="input-group">\
                      <div class="input-group-addon">₱</div>\
                      <input type="number" name="b_subtotal[]" id="b_product" data-toggle="tooltip" class="subtotal form-control" readonly>\
                    </div>\
                  </td>\
                  <td class="text-center">\
                    <button type="button" class="rm-transpo-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>\
                  </td>\
              </tr>';
    $('#budgetary tbody:eq(1)').append(list);
}

function addMaterialsRow() {
  var list = '<tr>\
                  <td><input type="text" name="c_particulars[]" data-toggle="tooltip" class="particulars form-control" required></td>\
                  <td><input type="number" name="c_frequency[]" data-toggle="tooltip"class="frequency form-control" min="1" required></td>\
                  <td><input type="number" name="c_quantity[]" data-toggle="tooltip"class="quantity form-control" min="1" required></td>\
                  <td>\
                    <div class="input-group">\
                      <div class="input-group-addon">₱</div>\
                      <input type="number" name="c_amount[]" data-toggle="tooltip" class="amount form-control" step="0.01" min="0.25" required>\
                    </div>\
                  </td>\
                  <td>\
                    <div class="input-group">\
                      <div class="input-group-addon">₱</div>\
                      <input type="number" name="c_subtotal[]" id="c_product" class="subtotal form-control" readonly>\
                    </div>\
                  </td>\
                  <td class="text-center">\
                    <button type="button" class="rm-materials-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>\
                  </td>\
              </tr>';
    $('#budgetary tbody:eq(2)').append(list);
}

function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

function recalc() {
  var tt = 0;
  $("#budgetary").find('tr').each(function () {
    var f = $(this).find('input.frequency').val();
    var q = $(this).find('input.quantity').val();
    var a = $(this).find('input.amount').val();
    var dateTotal = (f * q) * a;
    $(this).find('input.subtotal').val(dateTotal ? dateTotal : "");
    tt += isNumber(dateTotal) ? dateTotal : 0;
  }); //END .each
  $("#grand_total").html(tt);
}

function calcSum() {
  var sum = 0;
  $(".subtotal").each(function () {
    if (!isNaN($(this).val())) sum += parseFloat($(this).val());
  });
  $(".grand_total").val(sum.toFixed(2));
}


$(function () {
  $("#calc").on("click", calcSum);
  $("#budgetary").on("keyup blur", ".form-control", recalc);
  $("#budgetary").on("keyup blur", ".form-control", calcSum);
  $("#add-meals-row").on("click", function() { addMealsRow() });
  $("#add-transpo-row").on("click", function() { addTranspoRow() });
  $("#add-materials-row").on("click", function() { addMaterialsRow() });
});

// Remove Table Row 
$(document).on('click', 'button.rm-meals-row,.rm-transpo-row, .rm-materials-row,.rm-activity-outline-row, .rm-activityrep-outline-row, .rm-goals-outline-row, .rm-intra-outline-row, .rm-extra-outline-row', function () {
  $(this).closest('tr').remove();
  calcSum();
  return false;
});

// Form_B Collapse Radio Inputs
$('input[name="prelimasschoice_contextdimension[]"]').change( function() {
    if ($('#unitdone').is(":checked")) {
      $('#prelim1').collapse('show');
    } else {  
      $('#prelim1').collapse('hide');
    }    
    if ($('#unitnotdone').is(":checked")) {
      $('#prelim1').collapse('hide');
    }
});

$('input[name="verifdatachoice[]"]').change( function() {
    if ($('#withdata').is(":checked")) {
      $('#data1').collapse('show');
      $('#data2').collapse('hide');
    }    
    if ($('#withoutdata').is(":checked")) {
      $('#data2').collapse('show');
      $('#data1').collapse('hide');      
    }
});



$('input[name="term"]').change( function() {    
    if ($('#shortterm').is(":checked")) {
      $('#short_term').collapse('show');
      $('#medium_term').collapse('hide');
      $('#long_term').collapse('hide');
    }
    if ($('#medterm').is(":checked")) {
      $('#medium_term').collapse('show');
      $('#short_term').collapse('hide');
      $('#long_term').collapse('hide');      
    }
    if ($('#longterm').is(":checked")) {
      $('#long_term').collapse('show');
      $('#short_term').collapse('hide');
      $('#medium_term').collapse('hide');      
    }
});

// Adding activities in reports row 
$(function(){
  $("#add-activity-reports-row").click(function(){
    var actreplist = '<tr>\
                  <td><input type="text" name="act_title[]" class="form-control"></td>\
                  <td><input type="text" name="incdate[]" class="form-control"></td>\
                  <td><input type="text" name="totalhours[]" class="form-control"></td>\
                  <td class="text-center">\
                    <button type="button" class="rm-activityrep-outline-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>\
                  </td>\
                </tr>';
    $('#activity-reports tbody').append(actreplist);
  });
});

// Adding goals in reports row 
$(function(){
  $("#add-goals-outline-row").click(function(){
    var goal_list = '<tr>\
                  <td><input type="text" name="goal_title[]" class="form-control"></td>\
                  <td><input type="text" name="spec_obj[]" class="form-control"></td>\
                  <td><input type="text" name="spec_act[]" class="form-control"></td>\
                  <td><input type="text" name="outputs[]" class="form-control"></td>\
                  <td class="text-center">\
                    <button type="button" class="rm-goals-outline-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>\
                  </td>\
                </tr>';
    $('#goals-outline tbody').append(goal_list);
  });
});

// Adding INTRA-collabs in reports row 
$(function(){
  $("#add-intra-collabs-row").click(function(){
    var intralist = '<tr>\
                  <td><input type="text" name="intraname[]" class="form-control"></td>\
                  <td><input type="text" name="intracontribs[]" class="form-control"></td>\
                  <td class="text-center">\
                    <button type="button" class="rm-intra-outline-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>\
                  </td>\
                </tr>';
    $('#intra-collabs tbody').append(intralist);
  });
});


// Adding EXTRA-collabs in reports row 
$(function(){
  $("#add-extra-collabs-row").click(function(){
    var extralist = '<tr>\
                  <td><input type="text" name="extraname[]" class="form-control"></td>\
                  <td><input type="text" name="extracontribs[]" class="form-control"></td>\
                  <td class="text-center">\
                    <button type="button" class="rm-extra-outline-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>\
                  </td>\
                </tr>';
    $('#extra-collabs tbody').append(extralist);
  });
});

//SHORT TERM TO LONG TERM ENABILITY of Button to be saved to db
$(document).ready(function(){
    $("#shortterm").click(function(){
        $("#sem1").attr('enabled', false);
        $("#sem2").attr('enabled', false);
    });
    $("#medterm").click(function(){
        $("#sem3").attr('enabled', false);
        $("#sem4").attr('enabled', false);
    });
     $("#longterm").click(function(){
        $("#sem5").attr('enabled', false);
        $("#sem6").attr('enabled', false);
        $("#sem_others").attr('enabled', false);
       
        
    });
});

// $('input[type=text]').prop('disabled',true);
// $('input[name=radioknof]').on('click', function(){            
//     $(this).next().prop('disabled',false).siblings('input[type=text]').prop('disabled',true);
// });