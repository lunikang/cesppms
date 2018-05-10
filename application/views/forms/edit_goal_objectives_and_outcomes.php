<!DOCTYPE html>
<html>
<body>
	<div class="panel panel-success">
        <div class="panel-heading">
            <h4>
              Goal, Objectives, and Outcomes &nbsp&nbsp&nbsp
              <span class="glyphicon glyphicon-question-sign pull-right" data-toggle="collapse" data-target="#info_2"></span>
            </h4>
        </div>
        <div class="panel-body">
            <div id="info_2" class="collapse">
              <div class="well well-sm">
                <p>
                  This section must enumerate the following items:
                  <ol>
                    <li>Over-all goal of the proposed program/project/activity</li>
                    <li>The specific objectives that will be useful in achieving the goal (be sure they are SMART)</li>
                    <li>What are the expected outcomes after implementing the program/project/activity</li>
                  </ol>
                </p>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="5" name="goal_objectives_and_outcomes" data-toggle="tooltip" placeholder="Type Here..." <?php if (isset($proposal['goal_objectives_and_outcomes'])) { echo'value=" ' . nl2br($proposal['goal_objectives_and_outcomes']).'"'; } ?>"></textarea>  
            </div>
        </div>
    </div>
</body>
</html>