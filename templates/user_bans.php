
<script>
	$(document).ready(function() {
		$('#user_bans').DataTable();
		$('#user_bans_wrapper').css({"padding":"75px"});
	} );
</script>

<?php

	// ban form
	$fdiv = div(div(par("Ban a user"), "panel-heading"), "panel panel-danger");
	$form = make_form("admin_panel.php?view=bans", "post", "form-inline");
	$form = add_field($form, "user_to_ban", "Username", true, "form-control");
	$form = add_field($form, "ban_reason", "Reason for ban", true, "form-control");
	$form = add_button($form, "Ban", "btn btn-default");
	$fdiv["children"][] = div(div($form, "form-group"), "panel-body");
	
	echo to_html($fdiv);

	// unban form
	$fdiv = div(div(par("Unban a user"), "panel-heading"), "panel panel-success");
	$form = make_form("admin_panel.php?view=bans", "post", "form-inline");
	$form = add_field($form, "user_to_unban", "Username", true, "form-control");
	$form = add_field($form, "unban_reason", "Reason for unbanning", true, "form-control");
	$form = add_button($form, "Unban", "btn btn-default");
	$fdiv["children"][] = div(div($form, "form-group"), "panel-body");
	
	echo to_html($fdiv);

	// banned users list
	$table = div(div(par("Banned Users"), "panel-heading"), "panel panel-info");
	$table["children"][] = make_table($bans, ["username", "banned by", "time", "reason"], "table", "user_bans", [0, 1]);

	echo to_html($table);

?>
