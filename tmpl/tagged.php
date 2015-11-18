<?php
	$tagName 	= $params->get('tag_name');
	$clientID 	= $params->get('client_id');
	$limit		= $params->get('limit');
	$columns		= $params->get('columns');
?>

<div>
	<div class="jgram tagged" data-tag="<?php echo $tagName; ?>" data-clientID="<?php echo $clientID; ?>" data-limit="<?php echo $limit; ?>">
		<!-- tagged info -->
		<h2>#<?php echo $tagName; ?></h2>
		<!-- feed display-->
		<div class="tagged-feed col-<?php echo $columns; ?> pad-<?php echo $columns; ?>">

		</div>
	</div>
</div>