<?php ?>
<div>
	<?php 
		echo elgg_view("input/plaintext", array("name" => "params[custom_js]", "value" => $vars["entity"]->custom_js));
	?>
	<br />
	CAUTION: BAD JS COULD BREAK YOUR SITE
</div>