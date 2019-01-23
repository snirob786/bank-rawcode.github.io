<?php
	include_once 'header.php';
?>
<body>
	<div class="limiter">
		<div id="admin">
			<div class="container-login100">
				<div class="wrap-login100">
					<div class="login100-form validate-form">
						<span class="login100-form-title p-b-26">
							Welcome
						</span>
						<span class="login100-form-title p-b-48">
							<img class="logo" src="images/logo 2.png">
							<!-- <i class="zmdi zmdi-font"></i> -->
						</span>
						
						<div class ="form-message"></div>
						<table>
							<tr>
								<th>No.</th>
								<th>Full Name</th>
								<th>Demo</th>
								<th>SSN</th>
								<th>Statues</th>
							</tr>
							<?php
								$numRows = 0;
								$isInserted = false;
								$sql = "SELECT * FROM userdata;";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									while ( $rows = mysqli_fetch_assoc($result)) {
										$autoGenId = $rows['autoGenId'];
										$fName = $rows['fName'];
										$lName = $rows['lName'];
										$fullName = $fName . " " . $lName;
										$Ssn = $rows["SSN"];
										$isInserted = $rows['isInserted'];
										$numRows = $numRows+1;
								// echo  "xxx-xx-".$SsnExcerp." ".$fullName." ".$autoGenId."<br>";
							?>
							<script type="text/javascript">
								$(document).ready(function(){
									var isInserted = "<?php echo $isInserted;?>"
									if (isInserted!=true){
										$('a').attr('href','');
										$('a').on('hover', function () {
											$(this).tooltip('enable').tooltip('open');
										});
									}
								});
							</script>
							<tr>
								<td><?php echo $numRows; ?></td>
								<td><?php echo $fullName; ?></td>
								<td><?php echo $isInserted; ?></td>
								<td><?php echo $Ssn; ?></td>
								<td><a class="tip" href="exist-form.php?isadm=yes&aut_id=<?php echo $autoGenId;?>">More..<div>This user data was not inserted.</div></a></td>
							</tr>
							<?php
									}
								}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<!--
<div id="dropDownSelect1"></div> -->
<?php include_once 'footer.php'; ?>