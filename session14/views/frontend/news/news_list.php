<div id="news_list">
<?php 
if(count($listNews)){
	while ($row = $listNews->fetch_assoc()) {
	      $id = $row['id'];
	      $image = $row['image'];
?>
	<div class="news">
		<h3><a href="index.php?action=news_detail&id=<?php echo $id?>"><?php echo $row['title']?></a></h3>
		<div class="image_news">
			<a href="index.php?action=news_detail&id=<?php echo $id?>">
				<img src="uploads/<?php echo $image; ?>" alt="news1">
			</a>
		</div>
		<div class="des_news">
			<?php echo $row['description']?>
		</div>
	</div>
<?php }
}
?>
	<div class="pagination">
		<div class="number_page">
			<a href="#"> 3 </a>
		</div>
		<div class="number_page">
			<a href="#"> 2 </a>
		</div>
		<div class="number_page">
			<a href="#"> 1 </a>
		</div>
	</div>
</div>