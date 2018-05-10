<!DOCTYPE html>
<html>
<body>
	<!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- DataTables Javascript -->
    <script src="<?php echo base_url();?>assets/datatable/datatables.min.js"></script>

    <!-- Custom Script -->
    <script src="<?php echo base_url();?>assets/js/global.js"></script>
    <script src="<?php echo base_url();?>assets/js/proposals.js"></script>

    <script type="text/javascript">
            $('#proposal_list').DataTable({
                "pagingType": "full_numbers"
            });
    </script>
</body>
</html>