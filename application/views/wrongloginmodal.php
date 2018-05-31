<!DOCTYPE html>
<html>
<body>
	<!-- REPORTS MODAL -->
    <div id = "shit" class="modal fade" tabindex="-1" role="dialog" id="exit">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-warning"><span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp Warning!</h4>
          </div>
          <div class="modal-body">
            Invalid Username or Passowrd! Pleast try again
          </div>
          <div class="modal-footer">s="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
              <a href="<?php echo site_url('Representative/create_proposal');?>" style="text-decoration:none">
                <button type="submit" class="btn btn-lg btn-success btn-block" name="submit" value="submit_a"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp Yes</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>