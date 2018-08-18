<?php include'includes/header.php';?>
				
</header>
<figure>
<!--Start Side Bar-->
		<div id="sidebar">
			<p>Latest Articles</p>
			
			<?php
			$query= "SELECT * FROM index_tbl WHERE category='1' order by id desc limit 3";
			$post=$db->select($query);
			if($post){
			while($result=mysqli_fetch_array($post)){
			?>
			<div id="onesidebar"><a  href="post.php?postid=<?php echo $result['id'];?>">
				<img class='photo' src="<?php echo $result['image'];?>"/></a>
				<div id="title"><a class="latest_articles" href="post.php?postid=<?php echo $result['id'];?>"><?php echo $result['title'];?></a></div>
			
				<p ><?php echo $fm->textShorten($result['body'],50);?></p>
				</div>
			
			<?php }} ?>
		</div>
<!--End Side Bar-->
<div id="container">
		<?php
			if(isset($_GET['search'])){
				$key=$_GET['search'];
				$query= "SELECT * FROM index_tbl where title LIKE '%$key%' OR body LIKE '%$key%' ";
				$post=$db->select($query);
				if($post){
					while($result=mysqli_fetch_array($post)){
			
				
			?>
			<div class="one_container">
					<img class='img_container' src="<?php echo $result['image'];?>"/>
					<div class="title"><?php echo $result['title'];?></div>
					<div >Date:<?php echo $result['date'];?></div>
					<div class="paragraph_container"><?php echo $fm->textShorten($result['body'],350);?></div>
					<button href="post.php" class="read_button"><a href="post.php?postid=<?php echo $result['id'];?>" target="_blank">Read More</a></button>
				</div>
				
			<?php }} }?>
		
	</div>
</figure>
	<?php include'includes/footer.php';?>