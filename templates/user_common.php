
<!-- user-report modal -->
<div>
	<div id="report-user" class="modal fade">
		<div class="modal-dialog" role="form">
			<div class="modal-content">
				<div class="modal-header">
					<a class="close" data-dismiss="modal">×</a>
					<h3 id="report-user-heading">Report user</h3>
				</div>
				<form id="user_report_f" class="" method="POST" action="report_user.php">
					<div class="modal-body">
						<div class="form-group">
						<input name="report_username" id="report-user-id" class="form-control hidden" value=<?php echo $_GET["u"]; ?> readonly="">
						</div>
						<div class="form-group">
						<textarea name="report_user_reason" id="report-user-text" class="form-control" rows="4" placeholder="Reason for reporting..."></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<input class="btn btn-default" type="submit" value="Confirm" id="report-user-btn">
						<a href="#" class="btn" data-dismiss="modal">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="btn-toolbar" style="float:right">
<?php
	if (!$self) 
	{
		echo "<a class=\"btn btn-warning soc-report\" id=\"\" href=\"\" data-toggle=\"modal\" data-target=\"#report-user\" value=\"\" style=\"float:right;\">report</a>";
	}

?>
</div>

<?php 
	$t = isset($_GET["view"]) ? $_GET["view"]:"profile";
	$pg .= "&view=";
?>

<ul class="nav nav-tabs">
	<li class=<?php echo $t=="profile" ? "active":""?>>
		<a href=<?php echo $pg."profile" ?>>
			<span class="glyphicon glyphicon-user"></span>
	  		 Profile
		</a>
	</li>
	<li class=<?php echo $t=="phist" ? "active":""?>>
		<a href=<?php echo $pg."phist" ?>>
			<span class="glyphicon glyphicon-file"></span>
			Post History
		</a>
	</li>
	<?php
		if ($self) 
		{
			echo 
				"<li class=\"".($t=="chist" ? "active":"")."\" >".
					"<a href=\"".$pg."chist"."\" >".
						"<span class=\"glyphicon glyphicon-comment\"></span>".
						" Comment History".
					"</a>".
				"</li>".
				"<li class=\"".($t=="socs" ? "active":"")."\" >".
					"<a href=\"".$pg."socs"."\" >".
						"<span class=\"glyphicon glyphicon-home\"></span>".
						"Subreddits".
					"</a>".
				"</li>";
		}
	?>
</ul>
<div class="well">
