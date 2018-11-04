<div id="news_detail">
<?php while ($row = $newsDetail->fetch_assoc()) {
		$image = $row['image'];
	?>
	<div class="news_date">
		<?php echo date('l, d-m-Y, h:i:s', strtotime($row['created']));?>
	</div>
	<div class="news_title">
		<?php echo $row['title'];?>
	</div>
	<div class="news_description">
		<?php echo $row['description'];?>
	</div>
	<div class="news_image">
		<img src="uploads/<?php echo $image;?>" alt="news 1">	
	</div>
	<div class="news_content">
		<?php echo $row['content'];?>
	</div>
<?php }?>
</div>
<div id="news_comment">
	<div class="like_button">
		<a href="#">Liked</a>
		<span>(35 nguoi da like bai nay!)</span>
	</div>
	<?php while ($row = $listComments->fetch_assoc()) {
		$avatar = $row['avatar'];
		$username = $row['name'];
	?>
	<div class="list_comment">
		<div class="user_comment_info">
			<img src="uploads/<?php echo $avatar;?>" alt="user" title = "<?php echo $username;?>">
		</div>
		<div class="content_comment">
			<?php echo $row['content'];?>
		</div>
	</div>
	<?php }
	?>
	<div class="comment">
		<form action="index.php?action=news_comment&id=<?php echo $id?>" method='post'>
			<input type="text" name="content" class="input_comment">
			<input type="submit" name="comment" value="Comment" class="button_comment">
		</form>
	</div>
</div>