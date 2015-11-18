<?php
	$userID 		= $params->get('user_id');
	$accessToken 	= $params->get('access_token');
	$limit			= $params->get('limit');
	$columns		= $params->get('columns');
	$hideProfile    = $params->get('profile_display');
?>
<?php if($hideProfile === "yes"){ ?>
	<style>.profile-pic, .user-info{display: none;}</style>
<?php } ?>
<div>
	<div class="jgram user" data-accessToken="<?php echo $accessToken; ?>" data-userID="<?php echo $userID; ?>" data-limit="<?php echo $limit; ?>">
		<!-- profile pic -->
		<div class="profile-pic">
			<img src="" />
		</div>
		<!-- user info -->
		<div class="user-info">
			<h2 class="username"></h2>
			<p><strong><span class="fullname"></span></strong> <span class="tagline"></span></p>
			<a href="" class="website"></a>
			<ul>
				<li class="posts"></li>
				<li class="followers"></li>
				<li class="following"></li>
			</ul>
		</div>
		<!-- user feed-->
		<div class="user-feed col-<?php echo $columns; ?> pad-<?php echo $columns; ?>">

		</div>
	</div>
</div>