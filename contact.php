<?php include'includes/header.php';?>
			</header>
			<figure>
				
				<div id="about_container_body">
					<div id="about_container" > 
					<p>Contact Us</p><hr />
					<?php
						
						if(isset($_POST['submit'])){
							$first_name=$_POST['first_name'];
							$last_name=$_POST['last_name'];
							$email=$_POST['email'];
							$message=$_POST['message'];
							
							$sql="INSERT INTO contact_tbl(first_name,last_name,email,message)
							VALUES('$first_name','$last_name','$email','$message')";
							$query=$db->insert($sql);
							if($query){
								echo "<span class='success'>Sent Successful!</span>";
							}else{
								
								echo "<span class='error'> Not Sent !</span>";
							}
						}
					?>
					
					<table>
						<form method="post" action="#">
							<tr>
								<td class="left_side">First Name :</td>
								<td><input name="first_name" class="input" placeholder="Enter your first name" required /></td>
							</tr>
							<tr>
								<td class="left_side">Last Name :</td>
								<td><input name="last_name" class="input" placeholder="Enter your last name" required /></td>
							</tr>
							<tr>
								<td class="left_side">Email :</td>
								<td><input name="email" class="input" placeholder="Enter your email" required /></td>
							</tr>
							<tr>
								<td class="left_side">Messege :</td>
								<td><textarea name="message" class="input" rows="5" cols="25" placeholder="Enter your messege" required ></textarea></td>
							</tr>
							<tr>
								<td></td>
								<td><input name="submit" class="input" type="submit" value="Submit"/></td>
							</tr>
						</form>
					</table>
					</div>
				</div>
			</figure>
			<?php include'includes/footer.php';?>