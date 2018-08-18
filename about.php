<?php include'includes/header.php';?>
			</header>
			<figure>
				<?php 
					$sql="select * from about_tbl where id='1'";
					$query=$db->select($sql);
					if($query=mysqli_fetch_array($query)){
				
				?>
				<div id="about_container_body">
					<div id="about_container" ><p> <?php echo $query['content'];?></p>
					</div>
				</div>
					<?php } ?>
			</figure>
			<?php include'includes/footer.php';?>