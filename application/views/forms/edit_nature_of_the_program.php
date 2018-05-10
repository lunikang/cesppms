<!DOCTYPE html>
<html>

<body>
	<tbody>
        <tr>
          <td>
            <table class="table table-bordered" width="100%">
                   <tr>
                     <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                       <div class="checkbox">
                         <label><input type="checkbox" name="nature_of_the_program[]" value="Training Program" <?php if (isset($proposal['nature_of_the_program']) && in_array("Training Program", $nature_of_the_program)) echo 'checked="checked"' ?>>Training Program <em><small>(non-degree and non-credited courses offered to the community)</small></em></label>
                       </div>
                     </td>
                     <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                       <div class="checkbox">
                         <label><input type="checkbox" name="nature_of_the_program[]" value="Community Outreach" <?php if (isset($proposal['nature_of_the_program']) && in_array("Community Outreach", $nature_of_the_program)) echo 'checked="checked"' ?>>Community Outreach <em><small>(community-based and charity driven social services)</small></em></label>
                       </div>
                     </td>
                   </tr>
                   <tr>
                     <td>
                       <div class="checkbox">
                         <label><input type="checkbox" name="nature_of_the_program[]" value="Technical Assistance" <?php if (isset($proposal['nature_of_the_program']) && in_array("Technical Assistance", $nature_of_the_program)) echo 'checked="checked"' ?>>Technical Assistance <em><small>(for agencies, organization, civic groups)</small></em></label>
                       </div>
                     </td>
                     <td>
                       <div class="checkbox">
                         <label><input type="checkbox" name="nature_of_the_program[]" value="Technology transfer and utilization" <?php if (isset($proposal['nature_of_the_program']) && in_array("Technology transfer and utilization", $nature_of_the_program)) echo 'checked="checked"' ?>>Technology transfer and utilization <em><small>(process of circulating, promoting and marketing or technologies to potential users)</small></em></label>
         	          </div>
         	        </td>
         	      </tr>
         	      <tr>
         	        <td>
         	          <div class="checkbox">
         	            <label><input type="checkbox" name="nature_of_the_program[]" value="Advisory Services" <?php if (isset($proposal['nature_of_the_program']) && in_array("Advisory Services", $nature_of_the_program)) echo 'checked="checked"' ?>>Advisory Services <em><small>(for agencies, organization, civic groups)</small></em></label>
         	          </div>
         	        </td>
         	        <td rowspan="2">
         	          <div class="checkbox">
         	            <label><input type="checkbox" name="nature_of_the_program[]" value="others" <?php if (isset($proposal['nature_of_the_program']) && in_array("others", $nature_of_the_program)) echo 'checked="checked"' ?>>Others, please specify...</label>
         	            <textarea class="form-control" rows="3" name="nature_of_the_program_others" placeholder="Type Here..." <?php if (isset($proposal['nature_of_the_program_others'])) echo 'value="'. $proposal['nature_of_the_program_others'] .'"'?>></textarea>
         	          </div>
         	        </td>
         	      </tr>
         	      <tr>
         	        <td>
         	          <div class="checkbox">
         	            <label><input type="checkbox" name="nature_of_the_program[]" value="Information Services" <?php if (isset($proposal['nature_of_the_program']) && in_array("Information Services", $nature_of_the_program)) echo 'checked="checked"' ?>>Information Services <em><small>(dissemination of knowledge/information through various means)</small></em></label>
         	          </div>
         	        </td>
         	      </tr>
         	    </table>
         	  </td>
         	</tr>
       	</tbody>
	</body>
</html>