<!DOCTYPE html>
<html>

<body>
	<tbody>
        <tr>
          <td>
            <table class="table table-bordered" width="100%">
                   <tr><?php $nature_of_the_program= explode(' , ', $result_ab['nature_of_program']);?>
                     <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                       <div class="checkbox">
                         <label><input type="checkbox" name="nature_of_the_program[]" value="Training Program" <?php  if(in_array("Training Program", $nature_of_the_program)) { echo "checked";} ?> >Training Program <em><small>(non-degree and non-credited courses offered to the community)</small></em></label>
                       </div>
                     </td>
                     <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                       <div class="checkbox">
                         <label><input type="checkbox" name="nature_of_the_program[]" value="Community Outreach" <?php  if(in_array("Community Outreach", $nature_of_the_program)) { echo "checked";} ?> >Community Outreach <em><small>(community-based and charity driven social services)</small></em></label>
                       </div>
                     </td>
                   </tr>
                   <tr>
                     <td>
                       <div class="checkbox">
                         <label><input type="checkbox" name="nature_of_the_program[]" value="Technical Assistance" <?php  if(in_array("Technical Assistance", $nature_of_the_program)) { echo "checked";} ?> >Technical Assistance <em><small>(for agencies, organization, civic groups)</small></em></label>
                       </div>
                     </td>
                     <td>
                       <div class="checkbox">
                         <label><input type="checkbox" name="nature_of_the_program[]" value="Technology transfer and utilization" <?php  if(in_array("Technology transfer and utilization", $nature_of_the_program)) { echo "checked";} ?> >Technology transfer and utilization <em><small>(process of circulating, promoting and marketing or technologies to potential users)</small></em></label>
         	          </div>
         	        </td>
         	      </tr>
         	      <tr>
         	        <td>
         	          <div class="checkbox">
         	            <label><input type="checkbox" name="nature_of_the_program[]" value="Advisory Services" <?php  if(in_array("Advisory Services", $nature_of_the_program)) { echo "checked";} ?> >Advisory Services <em><small>(for agencies, organization, civic groups)</small></em></label>
         	          </div>
         	        </td>
         	        <td rowspan="2">
         	          <div class="checkbox">
         	            <label><input type="checkbox" name="nature_of_the_program[]" value="others" <?php  if(in_array("others", $nature_of_the_program)) { echo "checked";} ?> >Others, please specify...</label>
         	            <textarea class="form-control" rows="3" name="nature_of_the_program_others" placeholder="Type Here..." ><?php echo $result_ab['specnatprog']?></textarea>
         	          </div>
         	        </td>
         	      </tr>
         	      <tr>
         	        <td>
         	          <div class="checkbox">
         	            <label><input type="checkbox" name="nature_of_the_program[]" value="Information Services" <?php  if(in_array("Information Services", $nature_of_the_program)) { echo "checked";} ?>>Information Services <em><small>(dissemination of knowledge/information through various means)</small></em></label>
         	          </div>
         	        </td>
         	      </tr>
         	    </table>
         	  </td>
         	</tr>
       	</tbody>
	</body>
</html>