<?php defined("APP") or die ("Access denied");?>
<div class="rating">
<?php
if(isset($_SESSION['auth']['id'])){
	$userid = $_SESSION['auth']['id'];
}
$movie_id = $item['id'];
$type = -1;

// Checking user status
$status_query = "SELECT count(*) as cntStatus,type FROM rating WHERE user_id = ".$userid." and movie_id = ".$movie_id;
$status_result = mysqli_query($connection, $status_query);
$status_row = mysqli_fetch_array($status_result);
$count_status = $status_row['cntStatus'];
if($count_status > 0){
    $type = $status_row['type'];
}
// Count post total likes and unlikes
$like_query = "SELECT COUNT(*) AS cntLikes FROM rating WHERE type = 1 and movie_id = ".$movie_id;
$like_result = mysqli_query($connection, $like_query);
$like_row = mysqli_fetch_array($like_result);
$total_likes = $like_row['cntLikes'];

$unlike_query = "SELECT COUNT(*) AS cntUnlikes FROM rating WHERE type = 0 and movie_id = ".$movie_id;
$unlike_result = mysqli_query($connection, $unlike_query);
$unlike_row = mysqli_fetch_array($unlike_result);
$total_unlikes = $unlike_row['cntUnlikes'];

?>
<?php if(isset($_SESSION['auth'])): ?>

	<input type="button" value="Like" id="like_<?php echo $movie_id; ?>" class="like" style="<?php if($type == 1){ echo "color: #ffa449;"; } ?>" />&nbsp;(<span id="likes_<?php echo $movie_id; ?>"><?php echo $total_likes; ?></span>)&nbsp;

	<input type="button" value="Unlike" id="unlike_<?php echo $movie_id; ?>" class="unlike" style="<?php if($type == 0){ echo "color: #ffa449;"; } ?>" />&nbsp;(<span id="unlikes_<?php echo $movie_id; ?>"><?php echo $total_unlikes; ?></span>)

<?php else: ?>
	зарегестрируйтесь!!!
<?php endif; ?>

</div>