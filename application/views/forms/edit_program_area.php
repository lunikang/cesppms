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
                                                    <label><input type="checkbox" name="program_area[]" value="Productivity-Oriented Initiatives" <?php if (isset($proposal['program_area']) && in_array("Productivity-Oriented Initiatives", $program_area)) echo 'checked="checked"' ?>>Productivity-Oriented Initiatives</label>
                                                  </div>
                                                </td>
                                                <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Health Advocacy and Wellness Promotion" <?php if (isset($proposal['program_area']) && in_array("Health Advocacy and Wellness Promotion", $program_area)) echo 'checked="checked"' ?>>Health Advocacy and Wellness Promotion</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Literacy Values Formation and Life-long Learning" <?php if (isset($proposal['program_area']) && in_array("Literacy Values Formation and Life-long Learning", $program_area)) echo 'checked="checked"' ?>>Literacy, Values Formation and Life-long Learning</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Building Christian Communities" <?php if (isset($proposal['program_area']) && in_array("Building Christian Communities", $program_area)) echo 'checked="checked"' ?>>Building Christian Communities</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Social Welfare Services" <?php if (isset($proposal['program_area']) && in_array("Social Welfare Services", $program_area)) echo 'checked="checked"' ?>>Social Welfare Services</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Information Sharing" <?php if (isset($proposal['program_area']) && in_array("Information Sharing", $program_area)) echo 'checked="checked"' ?>>Information Sharing</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Environmental Sustainability" <?php if (isset($proposal['program_area']) && in_array("Environmental Sustainability", $program_area)) echo 'checked="checked"' ?>>Environmental Sustainability</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Heritage Conservation" <?php if (isset($proposal['program_area']) && in_array("Heritage Conservation", $program_area)) echo 'checked="checked"' ?>>Heritage Conservation</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Issue Advocacy and Rights Promotion" <?php if (isset($proposal['program_area']) && in_array("Issue Advocacy and Rights Promotion", $program_area)) echo 'checked="checked"' ?>>Issue Advocacy and Rights Promotion</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="program_area[]" value="Rural and Urban Development" <?php if (isset($proposal['program_area']) && in_array("Rural and Urban Development", $program_area)) echo 'checked="checked"' ?>>Rural and Urban Development</label>
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
</body>
</html>