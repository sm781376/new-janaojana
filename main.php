<?php include'includes/header.php';?>

				
	<div id="animation_image">
		
		</div>
	</header>
	<figure>
	
		<?php
		
		$i=0;
		$page=$_GET['page'];
		if(isset($page)){
		if($page==''||$page=='1'){
			$i=1;
		}else{
			$i=($page*4)-4;
		}
		}
		?>
	
		<?php include'includes/sidebar.php';?>
		<div id="container">
		<?php
		$query= "SELECT * FROM index_tbl order by id desc limit $i,4";
		$post=$db->select($query);
		if($post){
			while($result=mysqli_fetch_array($post)){
	?>
		<div class="one_container">
			<img class='img_container' src="admin/<?php echo $result['image'];?>"/>
			<div class="title"><?php echo $result['title'];?></div>
			<div >Date:<?php echo $result['date'];?></div>
			<div class="paragraph_container"><?php echo $fm->textShorten($result['body'],350);?></div>
			<button href="post.php" class="read_button">
			<a href="post.php?postid=<?php echo $result['id'];?> " target="_blank">Read More</a></button>
		</div>
			
		<?php }} ?>
			
			
		</div>
		

<?php



$sql="SELECT * FROM index_tbl ";
$query=$db->select($sql);
$row=mysqli_num_rows($query);
$total_page=ceil($row/4);
?>
<ul class='pagination'>
	
<?php
for($i=1;$i<=$total_page;$i++){?>
	<li><a   href="index.php?page=<?php echo $i;if($i==$page){active;}?>"><?php echo $i ;?> </a></li><?php
}
?>
</ul>
	</figure>
<?php include'includes/footer.php';?>		