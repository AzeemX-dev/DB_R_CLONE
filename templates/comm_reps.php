<script type="text/javascript">
  $(document).ready(function () {
    $('#creps').DataTable();
    $('#creps_wrapper').css({"padding":"75px"});
  });
</script>

<?php

	// user reports
	$table = div(div(par("Reports about posts"), "panel-heading"), "panel panel-info");
	$table["children"][] = make_table($reps, ["COMMENT TEXT", "REPORTED BY", "TIME", "REASON"], "table", "creps");

	echo to_html($table);
	
?>
