<?php include'includes/header.php';?>
	</header>
	<figure>
	<?php
		if(isset($_GET['postid'])){
			
			$id=$_GET['postid'];
		}
	?>
		
<div id="about_container_body">
	<div id="about_container" >
	<?php
		$sql="SELECT * FROM index_tbl WHERE id='$id'";
		$query=$db->select($sql);
		if($query){
		while($result=mysqli_fetch_array($query)){
		
	?>
		<img class="post_img" src="admin/<?php echo $result['image'];?>"/>
		<div id="post_title"><?php echo $result['title'];?></div>
		<div >Date:<?php echo $result['date'];?></div>
		<div class="post_paragraph">
		<?php echo $result['body'];?></div>
		<?php?>
		
	</div>
	<div>
		<div id="related_title">
			Related Posts
		</div>
		<?php
			$catid=$result['category'];
			$sql="SELECT * FROM index_tbl WHERE category='$catid'";
			$query=$db->select($sql);
			if($query){
			while($result=mysqli_fetch_array($query)){
			
		?>
		<div class="related">
			<a href="post.php?postid=<?php echo $result['id'];?>">
			<img class="related_photo" src="<?php echo $result['image'];?>"/></a>
			<div class="related_post"> <a class="latest_articles" href="post.php?postid=<?php echo $result['id'];?>">
			<?php echo $result['title'];?></a></div>
		</div>
			<?php }}}}?>
		
	</div>
	
</div>
</figure>
<?php include'includes/footer.php';?>