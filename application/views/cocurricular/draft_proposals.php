 <!DOCTYPE html>
<html>
<body>

<div class="container">
    <div class="row">
                    <table id="draft_proplist" class="table table-striped table-bordered table-hover lists-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Title of Project/Program/Activity Proposal</th>
                            <th>Date & Time Created</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                    <tbody>
                    
                        <?php if(empty($proplist)) {?>
                            <tr>
                                <td class="text-center" colspan="4"><em>--- No Created Proposals ---</em></td>
                            </tr>
                        <?php } ?>
                   
                        <?php foreach($proplist as $proposal) {?>
                            <?php if($proposal->user_fkid == $user_id && $proposal->form_completeness == 0 && is_null($proposal->date_chair_checked) == true) { ?>
                                    <tr>
                                        <td><a href="<?php echo base_url() ?>/Representative/loadspecificproposal/<?php echo $proposal->id; ?>"><?php echo $proposal->title;?></a></td>
                                      
                                        <td><?php echo date('F jS, Y h:i:s a', strtotime($proposal->datetime_created));?>
                                           <!--  <br/>
                                            <input type="hidden" name="user_id" value="<?php echo $proposal->firstname ;?>"> -->
                                        </td>
                                        


                                        <td>
                                              <?php if(is_null($proposal->department_chair)){?>
                                            <p><font color="red">Pending to Department Chairman</font></p>
                                            <?php //} elseif ($proposal->department_chair == "1") {?>
                                                <!-- <p><font color="#0000ff">Passed to Coordinator</font></p> -->
                                            <?php } elseif ($proposal->department_chair == "1" && $proposal->school_coordinator== "1" && $proposal->school_dean == "1" && $proposal->director == "1") {?>
                                                <p><font color="#0000ff"><i>Proposal is being reviewed</i></font></p>
                                             <?php } elseif ($proposal->department_chair == "1" && $proposal->school_coordinator== "1" && is_null($proposal->school_dean) && is_null($proposal->director)) {?>
                                                <p><font color="#0000ff">Passed to Dean</font></p>
                                            <?php } elseif ($proposal->department_chair == "1" && is_null($proposal->school_coordinator) || $proposal->school_coordinator == "0" && is_null($proposal->school_dean) || $proposal->school_dean == "0" && is_null($proposal->director)) {?>
                                                <p><font color="#0000ff">Passed to Coordinator</font></p>
                                            <?php } elseif ($proposal->school_coordinator == "1" && is_null($proposal->school_dean) || $proposal->school_dean == "0" && is_null($proposal->reviewer_1) || is_null($proposal->reviewer_2)) {?>
                                                <p><font color="#0000ff">Passed to Dean</font></p>
                                            <?php } elseif ($proposal->reviewer_1 != NULL && $proposal->reviewer_2 != NULL) {?>
                                                <p><font color="#0000ff"><i>Proposal is being reviewed...</i></font></p>

                                           <?php } else{?>
                                           <p><font color="#515A5A">Read Comments</font></p>
                                           <?php }?>
                                        
                                        </td>

                                       
                                    </tr>
                            <?php }} ?>
                      
                    </tbody>
                    </table>
            </div>
      </div>      
</body>
</html>