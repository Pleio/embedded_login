<?php

	$js_url = elgg_get_site_url() . "embedded_login";

	$site_link = elgg_view("output/url", array("text" => elgg_get_site_entity()->name, "href" => elgg_get_site_url()));

	$script_code = <<<SCRIPT
<div id="elgg-embedded-login">$site_link</div>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "$js_url";
  		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'elgg-embedded-login-js'));
</script>
SCRIPT;

	echo elgg_echo("embedded_login:settings:info");
	echo elgg_view("input/plaintext", array("value" => $script_code, "rows" => 20, "id" => "embedded-login-textarea"));

?>
<style type="text/css">
	#embedded_login-settings .elgg-button-submit {
		display: none;
	}

	#embedded-login-textarea {
		height: 170px;
	}
</style>