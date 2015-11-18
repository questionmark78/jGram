<?php
	$tagName 	= $params->get('tag_name');
	$clientID 	= $params->get('client_id');
	$limit		= $params->get('limit');
	$columns		= $params->get('columns');
?>

<div>
	<div class="jgram search" data-tag="<?php echo $tagName; ?>" data-clientID="<?php echo $clientID; ?>" data-limit="<?php echo $limit; ?>">
		<!-- tagged info -->
		<h2></h2>
		<!-- search form -->
		<form id="jgram-search">
			<input type="text" name="search" placeholder="enter a word">
			<input id="jgram-submit" type="submit" name="submit" value="search">
		</form>
		<!-- feed display-->
		<div class="search-feed col-<?php echo $columns; ?> pad-<?php echo $columns; ?>">

		</div>
	</div>
</div>