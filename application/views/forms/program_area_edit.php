<!DOCTYPE html>
<html>

<body>
<tbody>
                                        <tr>
                                          <td>
                                            <table class="table table-bordered" width="100%">
                                              <tr> <?php $program_area= explode(' , ', $result_ab['program_area']);?>
                                                <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Productivity-Oriented Initiatives" <?php  if(in_array("Productivity-Oriented Initiatives", $program_area)) { echo "checked";} ?> >Productivity-Oriented Initiatives</label>
                                                  </div>
                                                </td>
                                                <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Health Advocacy and Wellness Promotion" <?php  if(in_array("Health Advocacy and Wellness Promotion", $program_area)) { echo "checked";} ?> >Health Advocacy and Wellness Promotion</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Literacy, Values Formation and Life-long Learning" <?php  if(in_array("Literacy, Values Formation and Life-long Learning", $program_area)) { echo "checked";} ?> >Literacy, Values Formation and Life-long Learning</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Building Christian Communities" <?php  if(in_array("Building Christian Communities", $program_area)) { echo "checked";} ?> >Building Christian Communities</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Social Welfare Services" <?php  if(in_array("Social Welfare Services", $program_area)) { echo "checked";} ?> >Social Welfare Services</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Information Sharing" <?php  if(in_array("Information Sharing", $program_area)) { echo "checked";} ?> >Information Sharing</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Environmental Sustainability" <?php  if(in_array("Environmental Sustainability", $program_area)) { echo "checked";} ?> >Environmental Sustainability</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Heritage Conservation" <?php  if(in_array("Heritage Conservation", $program_area)) { echo "checked";} ?> >Heritage Conservation</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Issue Advocacy and Rights Promotion" <?php  if(in_array("Issue Advocacy and Rights Promotion", $program_area)) { echo "checked";} ?> >Issue Advocacy and Rights Promotion</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Rural and Urban Development" <?php  if(in_array("Rural and Urban Development", $program_area)) { echo "checked";} ?> >Rural and Urban Development</label>
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
</body>
</html>