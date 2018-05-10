<!DOCTYPE html>
<html>
<body>

	<?php if ($this->session->flashdata('success_msg')) { ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">
            &times;</span></button>
           <?php echo $this->session->flashdata("success_msg");?>
        </div>
    <?php } ?>

    <?php if ($this->session->flashdata('error_msg')) { ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">
            &times;</span></button>
           <?php echo $this->session->flashdata("error_msg");?>
        </div>
    <?php } ?>

</body>
</html>