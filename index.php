<?php
	include_once 'header.php';
?>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<img class="logo" src="images/logo 2.png">
						<!-- <i class="zmdi zmdi-font"></i> -->
					</span>
					
					<div class ="form-message"></div>
					<div class="first-form">
						<div class="wrap-inputName validate-input" data-validate = "Valid Name is required">
							<input id="fName" class="inputName inputFName" type="text" name="Fname" required="">
							<label>First Name</label>
							<!-- <span class="focus-inputName" data-placeholder="First Name"></span> -->
						</div>
						<div class="wrap-inputName validate-input" data-validate = "Valid Name is required">
							<input id="lName" class="inputName inputLName" type="text" name="Lname" required="">
							<label>Last Name</label>
							<!-- <span class="focus-inputName" data-placeholder="Last Name"></span> -->
						</div>
						<div class="wrap-inputSsn validate-input" data-validate = "Enter valid SSN">
							<input id="Ssn" class="inputSsn" type="text" name="Ssn" required="">
							<label>Social Security Number (SSN)</label>
							<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
						</div>
						<div class="input-group date validate-input" data-provide="datepicker" data-validate = "">
							<input class="form-control ownerBdate" id="ownerBdate" name="ownerBdate"  type="text" data-date-end-date="0d" autocomplete="off"  required=""/>
							<label class="ownerBdayLabel">Birthday</label>
							<div class="input-group-addon">
								<i class="far fa-calendar-alt"></i>
							</div>
						</div>
						<div id="bdate-notifications"></div>
						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button id="register" class="login100-form-btn">Register</button>
							</div>
						</div>
					</div>
					
					
				</form>
			</div>
		</div>
	</div>
</div>
</body>
<!--
<div id="dropDownSelect1"></div> -->
<?php include_once 'footer.php'; ?>