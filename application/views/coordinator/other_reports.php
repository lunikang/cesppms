<!DOCTYPE html>
<html lang="en">
<head>
    <title>CESDMS - Other Reports</title>
    <?php include('application/views/header.php');?>
</head> 

<body>

<div style="height:50%; width:20%; float:left; padding-right:10px; ">
<ul class="nav nav-tabs nav-stacked">
  <li><a data-toggle="tab" class="active" href="#Form_d_others">Form D<br/><small><i>(Unit's/Division's Reports)</i></small></a></li>
  <li><a data-toggle="tab" href="#Form_e_others">Form E<br/><small><i>(Unit's/Division's Reports)</i></small></a></li>
</ul>
</div>


<div style="width:80%;float:left;">
    <div class="scroll" style="overflow: scroll;  
    background-color: #FFFFFF;
    width: 100%;
    height: 500px;">
<div class="tab-content" style=" margin:5px;">
  <div id="Form_d_others" class="tab-pane fade in active">
   
<!--start FORM D table of my reports -->
 <div class="lists-table">
                    <table id="reportd" class="table table-striped table-bordered table-hover lists-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Title of Project/Program/Activity Report</th>
                            <th>Date & Time Created</th>
                            <th>School and Department</th>
                           <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                    <tbody> 
                        <?php if(empty($own_reports_d)) {?>
                            <tr>
                                <td class="text-center" colspan="4"><em>--- No Created Reports ---</em></td>
                            </tr>
                        <?php } ?>


                        <?php 
                        if ($department == 'Sciences Division Coordinator') {
        
                        foreach($own_reports_d as $sciencesdiv) {?>
                            <?php if($sciencesdiv->creators_department == $department && $sciencesdiv->creators_department == 'Biology' || $sciencesdiv->creators_department == 'Computer and Information Sciences' || $sciencesdiv->creators_department == 'Chemistry' || $sciencesdiv->creators_department == 'Mathematics' || $sciencesdiv->creators_department == 'Physics') { ?>
                                    <tr>
                                        <td><a href="<?php echo base_url() ?>/Representative/loadreportd/<?php echo $sciencesdiv->id; ?>"><?php echo $sciencesdiv->fd_title;?></a></td>
                                       
                                        <td><?php echo $sciencesdiv->datecreated;?>
                                            <br/>
                                            <input type="hidden" name="creator_id" value="<?php echo $sciencesdiv->creator_id ;?>">
                                        </td>
                                        <td><?php echo $sciencesdiv->fd_dept;?><br><p style="font-size:75%;"><?php echo $sciencesdiv->fd_school;?></p></td>




                                        <td>
                                         <?php
                                            echo form_open('Representative/deleteForm_d');?>
                                            <input class="form-control" type="hidden" name="id" value="<?php echo $sciencesdiv->id;?>" >
                                            <button class="btn btn-sm btn-danger" type="submit" name="form_submit" value="DELETE FORM" onclick="return confirm('Are you sure you want to delete this item?')"><span class="glyphicon glyphicon-trash"></button>
                                            </form> </td>
                                    </tr>
                            <?php }} }?>

                              <?php 
                        if ($department == 'Arts Division Coordinator') {
        
                        foreach($own_reports_d as $others_artsdiv) {?>
                            <?php if($others_artsdiv->creators_department == $department && $others_artsdiv->creators_department == 'Languages and Literature' || $others_artsdiv->creators_department == 'Library and Information Sciences' || $others_artsdiv->creators_department == 'Philosophy and Religious Studies' || $others_artsdiv->creators_department == 'Psychology' || $others_artsdiv->creators_department == 'Anthropology, Sociology and History') { ?>
                                    <tr>
                                        <td><a href="<?php echo base_url() ?>/Representative/loadreportd/<?php echo $others_artsdiv->id; ?>"><?php echo $others_artsdiv->fd_title;?></a></td>
                                       
                                        <td><?php echo $others_artsdiv->datecreated;?>
                                            <br/>
                                            <input type="hidden" name="creator_id" value="<?php echo $others_artsdiv->creator_id ;?>">
                                        </td>
                                        <td><?php echo $others_artsdiv->fd_dept;?><br><p style="font-size:75%;"><?php echo $others_artsdiv->fd_school;?></p></td>




                                        <td>
                                         <?php
                                            echo form_open('Representative/deleteForm_d');?>
                                            <input class="form-control" type="hidden" name="id" value="<?php echo $others_artsdiv->id;?>" >
                                            <button class="btn btn-sm btn-danger" type="submit" name="form_submit" value="DELETE FORM" onclick="return confirm('Are you sure you want to delete this item?')"><span class="glyphicon glyphicon-trash"></button>
                                            </form> </td>
                                    </tr>
                            <?php }} }?>

                    </tbody>
                    </table>

                    </div> 
                    <!-- end Form D of my reports -->


  </div>
  <div id="Form_e_others" class="tab-pane fade">
   <!--start FORM E table of my reports -->
 <div class="lists-table">
                    <table id="reportd" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Title of Project/Program/Activity Report</th>
                            <th>Date & Time Created</th>
                            <th>Action</th>
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
                        <?php if(empty($own_reports_e)) {?>
                            <tr>
                                <td class="text-center" colspan="4"><em>--- No Created Reports ---</em></td>
                            </tr>
                        <?php } ?>


                        <?php 
                         if ($department == 'Sciences Division Coordinator') {
                        foreach($own_reports_e as $sciencesdiv2) {?>
                            <?php if($sciencesdiv2->creators_department == $department && $sciencesdiv2->creators_department == 'Biology' || $sciencesdiv2->creators_department == 'Computer and Information Sciences' || $sciencesdiv2->creators_department == 'Chemistry' || $sciencesdiv2->creators_department == 'Mathematics' || $sciencesdiv2->creators_department == 'Physics') { ?>
                                    <tr>
                                        <td><a href="<?php echo base_url() ?>/Representative/loadreporte/<?php echo $sciencesdiv2->id; ?>"><?php echo $sciencesdiv2->title_of_program;?></a></td>
                                        <td><?php echo $sciencesdiv2->datecreated;?>
                                             <br/>
                                            <input type="hidden" name="creator_id" value="<?php echo $sciencesdiv2->creator_id ;?>">
                                        </td>
                                        <td><?php
                                            echo form_open('Representative/deleteForm_e');?>
                                            <input class="form-control" type="hidden" name="id" value="<?php echo $sciencesdiv2->id;?>" >
                                           <button class="btn btn-sm btn-danger" type="submit" name="form_submit" value="DELETE FORM" onclick="return confirm('Are you sure you want to delete this item?')"><span class="glyphicon glyphicon-trash"></button>
                                            </form> </td>
                                    </tr>
                            <?php }} }?>

                             <?php 
                         if ($department == 'Arts Division Coordinator') {
                        foreach($own_reports_e as $artsdiv_e) {?>
                            <?php if($artsdiv_e->creators_department == $department && $artsdiv_e->creators_department == 'Languages and Literature' || $artsdiv_e->creators_department == 'Library and Information Sciences' || $artsdiv_e->creators_department == 'Philosophy and Religious Studies' || $artsdiv_e->creators_department == 'Psychology' || $artsdiv_e->creators_department == 'Anthropology, Sociology and History') { ?>
                                    <tr>
                                        <td><a href="<?php echo base_url() ?>/Representative/loadreporte/<?php echo $artsdiv_e->id; ?>"><?php echo $artsdiv_e->title_of_program;?></a></td>
                                        <td><?php echo $artsdiv_e->datecreated;?>
                                             <br/>
                                            <input type="hidden" name="creator_id" value="<?php echo $artsdiv_e->creator_id ;?>">
                                        </td>
                                        <td><?php
                                            echo form_open('Representative/deleteForm_e');?>
                                            <input class="form-control" type="hidden" name="id" value="<?php echo $artsdiv_e->id;?>" >
                                           <button class="btn btn-sm btn-danger" type="submit" name="form_submit" value="DELETE FORM" onclick="return confirm('Are you sure you want to delete this item?')"><span class="glyphicon glyphicon-trash"></button>
                                            </form> </td>
                                    </tr>
                            <?php }} }?>

                    </tbody>
                    </table>

                    </div> 
                    <!-- end Form E of my reports -->
  </div>
 
 </div>
</div>
</div>

</body>

</html>