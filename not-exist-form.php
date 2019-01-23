<?php
	include_once 'header.php';
	if ($_SERVER['REQUEST_METHOD'] === 'GET'){
		$autoGenId = "";
		$autoGenId =$_GET["aut_id"];
		$_SESSION["autoGenId"]= $autoGenId;
		$Ssn = "";
		$sql = "SELECT * FROM userdata WHERE autoGenId = '$autoGenId';";
		$result = mysqli_query($conn, $sql);
		$checkResult = mysqli_num_rows($result);
        $isSuccess = '';
		if ($checkResult>0) {
			$row =  mysqli_fetch_assoc($result);
			$userFullName = $row["fName"]. " ".$row["lName"];
			$Ssn = $row["SSN"];
        }
	}
?>
<script type="text/javascript">
	$(document).ready(function() {
	$(".logo").width('10%');
	$(".ssn-value").html("<?php echo $Ssn;?>");
	$(".name-value").html("<?php echo $userFullName;?>");
	$(".wrap-login100").width('50%');
	$(".form-message").html("You are welcome. <br>Please fill up the form below");
	$(".inputOccupation").html("<?php $inputOccupation;?>");
	$(".inputsfName").html("<?php $inputsfName;?>");
	$(".inputslName").html("<?php $inputslName;?>");
	$(".inputSpouseSsn").html("<?php $inputSpouseSsn;?>");
	$(".spouseBdate").html("<?php $spouseBdate;?>");
	$(".inputSpouseOccupation").html("<?php $inputSpouseOccupation;?>");
	$(".inputHomePhone").html("<?php $inputHomePhone;?>");
	$(".inputEmail").html("<?php $inputEmail;?>");
	$(".inputStreetAddress").html("<?php $inputStreetAddress;?>");
	$(".inputCity").html("<?php $inputCity;?>");
	$(".inputZip").html("<?php $inputZip;?>");
	$(".inputState").html("<?php $inputState;?>");
	$("#widow").click(function () {
        $("#dateBlock").removeClass("marriageDateHidden");
    });
    $("#married,#single").click(function () {
        $("#dateBlock").addClass("marriageDateHidden");
    });
    $("#married[checked]").each( function(){
            $("#dateBlock").addClass("marriageDateHidden");
    });

});
</script>
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
					<div class="nxt-form-main">
						<div class="nxt-form-header">
							<!-- final page for user: -->
							<div class="parent-div validate-input">
								<div class="float-left">Account Holder's Name:</div>
								<div class="child-value name-value float-left"><?php echo $userFullName;?></div>
							</div>
							<div class="parent-div validate-input">
								<div class="float-left">Social Security Number:</div>
								<div class="child-value ssn-value float-left"><?php echo $row["SSN"];?></div>
							</div>
						</div>
						<div class="wrap-inputName validate-input" data-validate = "Enter valid Occupation">
							<input id="ownerOccupation" class="inputOccupation" type="text" name="ownerOccupation" required="" >
							<label>Occupation</label>
							<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
						</div>
						<div class="wrap-inputName validate-input" data-validate = "Enter valid Name">
							<input id="sfName" class="inputsfName" type="text" name="sfName" >
							<label>Spouse First Name</label>
							<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
						</div>
						<div class="wrap-inputName validate-input" data-validate = "Enter valid Name">
							<input id="slName" class="inputslName" type="text" name="slName" >
							<label>Spouse Last Name</label>
							<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
						</div>
						<div class="wrap-inputSsn validate-input" data-validate = "Enter valid SSN">
							<input id="spouseSsn" class="inputSpouseSsn" type="text" name="spouseSsn" >
							<label>Spouse Social Security Number</label>
							<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
						</div>
						<!-- -------------------Date will be solved later------------------- -->
						<div class="input-group date" data-provide="datepicker">
							<input class="form-control spouseBdate" id="spouseBdate" name="spouseBdate" placeholder="Enter your spouse Bday" type="text" data-date-end-date="0d" autocomplete="off" />
							<label class="ownerBdayLabel">Enter your spouse's Birthday</label>
							<div class="input-group-addon">
								<i class="far fa-calendar-alt"></i>
							</div>
						</div>
						<div class="wrap-inputName validate-input" data-validate = "Enter valid Occupation">
							<input id="spouseOccupation" class="inputSpouseOccupation" type="text" name="spouseOccupation" >
							<label>Enter Spouse Occupation</label>
							<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
						</div>
						<div class="wrap-inputName validate-input" data-validate = "Enter valid Occupation">
							<input id="homePhone" class="inputHomePhone" type="number" name="homePhone" >
							<label>Enter Home Phone</label>
							<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
						</div>
						<div class="wrap-inputName validate-input" data-validate = "Enter valid Email">
							<input id="email" class="inputEmail" type="email" name="email" >
							<label>Enter your email address</label>
							<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
						</div>
						<div class="wrap-inputName validate-input" data-validate = "Enter valid Address">
							<input id="streetAddress" class="inputStreetAddress" type="text" name="streetAddress" >
							<label>Enter Street address</label>
							<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
						</div>
						<div class="wrap-inputName validate-input" data-validate = "Enter valid City">
							<input id="city" class="inputCity" type="text" name="city" >
							<label>Enter City</label>
							<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
						</div>
						<div class="wrap-inputName validate-input" data-validate = "Enter valid State">
							<input id="state" class="inputState" type="text" name="state" >
							<label>Enter State</label>
							<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
						</div>
						<div class="wrap-inputName validate-input" data-validate = "Enter valid Zip">
							<input id="zip" class="inputZip" type="text" name="zip" >
							<label>Enter Zip</label>
							<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
						</div>
						<div id="isBlind">
							<div class="custom-radio-group-header">Are you blind or not?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group" >
								<label class="custom-radio-label">Account Holder: </label>
								<input class="isBlindOwner" type="radio" name="isBlindOwner" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isBlindOwner" type="radio" name="isBlindOwner" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
							<div class="wrap-inputName no-border float-left custom-radio-group" >
								<label class="custom-radio-label">Spouse: </label>
								<input class="isBlindSpouse" type="radio" name="isBlindSpouse" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isBlindSpouse" type="radio" name="isBlindSpouse" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isDisable">
							<div class="custom-radio-group-header">Are you disable or not?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group">
								<label class="custom-radio-label">Account Holder: </label>
								<input class="isDisableOwner" type="radio" name="isDisableOwner" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isDisableOwner" type="radio" name="isDisableOwner" value="no" checked>
								<span class="custom-radio-text">No</span>
                                <!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
							<div class="wrap-inputName no-border float-left custom-radio-group" >
								<label class="custom-radio-label">Spouse: </label>
								<input class="isDisableSpouse" type="radio" name="isDisableSpouse" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isDisableSpouse" type="radio" name="isDisableSpouse" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isMarried">
							<div class="custom-radio-group-header">Are you Married?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<div class="input-radio-options">
									<input id="married" class="isMarried" type="radio" name="isMarried" value="married" checked>
									<span class="custom-radio-text" checked="checked">Married</span>
								</div>
								<div class="input-radio-options">
									<input id="single" class="isMarried" type="radio" name="isMarried" value="single" >
									<span class="custom-radio-text">Single</span>
								</div>
								<div class="input-radio-options">
									<input id="widow" class="isMarried widow" type="radio" name="isMarried" value="widow" >
									<span class="custom-radio-text">Widow</span>
								</div>
								<!-- -------------------------Date will be solved later---------------------------- -->
								<div id="dateBlock" class="input-group date marriageDate marriageDateHidden" data-provide="datepicker">
									<input id="spouseDeathDate" class="form-control"  name="spouseDeathDate" placeholder="mm/dd/yyyy" type="text" data-date-end-date="0d" autocomplete="off" />
									<div class="input-group-addon">
										<span class="zmdi zmdi-calendar"></span>
									</div>
								</div>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>

                        <div id="childData">
                            <div id="childDataContainer">
                                <div id="rowNum">1.</div>
                                <div class="wrap-inputName validate-input" data-validate = "Valid Name is required">
                                    <input id="fullName" class="inputName inputCFName" type="text" name="Fullname[]" required="">
                                    <label>Child's Full Name</label>
                                    <!-- <span class="focus-inputName" data-placeholder="First Name"></span> -->
                                </div>
                                <div class="wrap-inputSsn validate-input" data-validate = "Enter valid SSN">
                                    <input id="CSsn" class="inputCSsn" type="text" name="CSsn[]" required="">
                                    <label>Child's SSN</label>
                                    <!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
                                </div>

                                <div class="input-group date validate-input" data-provide="datepicker" data-validate = "">
                                    <input class="form-control inputCBdate" id="ChildsBdate" name="CBdate[]"  type="text" data-date-end-date="0d" autocomplete="off"  required=""/>
                                    <label class="ChildsBdate">Birthday</label>
                                    <div class="input-group-addon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                </div>
                                <div id="addButton">
                                    <img id="addImg" src="images/plus-square-solid.png" alt="Add Button">
                                </div>
                            </div>
                        </div>

<script>
$(document).ready(function () {
    //variables:
    var numRows = 2;
    //Add functions:
    $('#addButton').on('click',function (e) {
        if (numRows<=8){
        var inputFields = '<div id="childDataContainer"><div id="rowNum">'+numRows+'.</div><div class="wrap-inputName validate-input" data-validate = "Valid Name is required"> <input id="fullName" placeholder="Input child\'s name" class="inputName inputCFName" type="text" name="Fullname[]" required=""> </div> <div class="wrap-inputSsn validate-input" data-validate = "Enter valid SSN"> <input id="CSsn" placeholder="Input child\'s SSN" class="inpuCSsn" type="text" name="CSsn[]" required=""></div> <div class="input-group date validate-input" data-provide="datepicker" data-validate = ""> <input class="form-control inputCBdate" id="ChildsBdate" placeholder="Birthday" name="CBdate[]"  type="text" data-date-end-date="0d" autocomplete="off"  required=""/> <div class="input-group-addon"> <i class="fas fa-calendar-alt"></i> </div> </div> <div id="removeButton"> <img id="removeImg" src="images/cross-square-solid.png" alt="Remove Button"></div></div>';


           numRows++;
           $('#childData').append(inputFields);

       }
   });
    //remove functions
   $('#childData').on('click','#removeButton',function (e) {
       e.preventDefault();
       $(this).parent('div').fadeOut(500);
       numRows--;
   });

});
</script>

						<div id="isSelfEmployee">
							<div class="custom-radio-group-header">1. Are you Self Employeed or not?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isSelfEmployee" type="radio" name="isSelfEmployee" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isSelfEmployee" type="radio" name="isSelfEmployee" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isRaisingAnimals">
							<div class="custom-radio-group-header">2. Did you recieve income from raising animals or crops?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input  class="isRaisingAnimals" type="radio" name="isRaisingAnimals" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isRaisingAnimals" type="radio" name="isRaisingAnimals" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isRentRealEstate">
							<div class="custom-radio-group-header">3. Did you recieve rent from real estate or other property?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isRentRealEstate" type="radio" name="isRentRealEstate" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isRentRealEstate" type="radio" name="isRentRealEstate" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isRecieveIncome">
							<div class="custom-radio-group-header">4. Did you recieve income from gravel, timber, minerals, oil, gas, copyrights, patents?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isRecieveIncome" type="radio" name="isRecieveIncome" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isRecieveIncome" type="radio" name="isRecieveIncome" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isWithdrawWriteChecks">
							<div class="custom-radio-group-header">5. Did you withdraw or write checks from a mutual funds?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isWithdrawWriteChecks" type="radio" name="isWithdrawWriteChecks" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isWithdrawWriteChecks" type="radio" name="isWithdrawWriteChecks" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isForeignAccount">
							<div class="custom-radio-group-header">6. Do you have a foreign bank account, trust or business?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isForeignAccount" type="radio" name="isForeignAccount" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isForeignAccount" type="radio" name="isForeignAccount" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isProvideHome">
							<div class="custom-radio-group-header">7. Do you provide a home for or help support anyone?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isProvideHome" type="radio" name="isProvideHome" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isProvideHome" type="radio" name="isProvideHome" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isReceiveIRS">
							<div class="custom-radio-group-header">8. Did you recieve any correspondence from IRS or State Department of Taxation?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isRecieveIRS" type="radio" name="isRecieveIRS" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isRecieveIRS" type="radio" name="isRecieveIRS" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isAnyBirthOrDeath">
							<div class="custom-radio-group-header">9. Were there any births, deaths, marriages, divorces or adoptions in your immediate family?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isAnyBirthOrDeath" type="radio" name="isAnyBirthOrDeath" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isAnyBirthOrDeath" type="radio" name="isAnyBirthOrDeath" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isGiftHighPrice">
							<div class="custom-radio-group-header">10. Did you give a gift of more than $13,000 to one or more people?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isGiftHighPrice" type="radio" name="isGiftHighPrice" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isGiftHighPrice" type="radio" name="isGiftHighPrice" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isDebtCancelled">
							<div class="custom-radio-group-header">11. Did you any debt cancelled, forgiven or refinanced?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isDebtCancelled" type="radio" name="isDebtCancelled" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isDebtCancelled" type="radio" name="isDebtCancelled" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>


						<div style="visibility: visible;">
							<div class="custom-radio-group-header">12. Did you go through a bankruptcy proceedings?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isBankruptcy" type="radio" name="isBankruptcy" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isBankruptcy" type="radio" name="isBankruptcy" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						
						<div>
							<div id="isHeatIncluded">
							<div class="wrap-inputName validate-input" data-validate = "">
									<input id="isRentPaid" class="inputRentPaid" type="text" name="isRentPaid" >
									<label id="radio-input-label">13. (a)If you paid rent, how much did you pay?</label>
							</div>
							<!-- <div class="wrap-inputName validate-input" data-validate="Enter valid Phone"> -->
								<!-- <input id="isRentPaid" class="inputRentPaid" type="text" name="isRentPaid" >
								<label>13. (a)If you paid rent, how much did you pay?</label> -->
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							<!-- </div> -->
							<div class="custom-radio-group-header">(b)Was heat included?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isHeatIncluded" type="radio" name="isHeatIncluded" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isHeatIncluded" type="radio" name="isHeatIncluded" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						</div>
						<div id="isInterestStudent">
							<div class="custom-radio-group-header">14. Did you pay interest on a student loan for yourself, your spouse or your dependent during this year?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isInterestStudent" type="radio" name="isInterestStudent" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isInterestStudent" type="radio" name="isInterestStudent" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isPayExpenses">
							<div class="custom-radio-group-header">15. Did you pay expenses for yourself, your spouse or your dependent to attend classes beyond high school?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isPayExpenses" type="radio" name="isPayExpenses" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isPayExpenses" type="radio" name="isPayExpenses" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isChildUnearned">
							<div class="custom-radio-group-header">16. Did you have any children under the age of 19 or 19 to 23 year old students with unearned income of more than $950?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isChildUnearned" type="radio" name="isChildUnearned" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isChildUnearned" type="radio" name="isChildUnearned" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isPurchaseVehicle">
							<div class="custom-radio-group-header">17. Did you purchase a new alternative technology vehicle or electric vehicle?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isPurchaseVehicle" type="radio" name="isPurchaseVehicle" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isPurchaseVehicle" type="radio" name="isPurchaseVehicle" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isInstallEnergyProperty">
							<div class="custom-radio-group-header">18. Did you install any energy property to your residence such as solar water heaters, generators or fuel cells
							or energy efficient improvements such as exterior doors or windows, insulation, heat pumps, furnaces, central air conditioners or water heaters?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isInstallEnergyProperty" type="radio" name="isInstallEnergyProperty" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isInstallEnergyProperty" type="radio" name="isInstallEnergyProperty" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div id="isOwnForeignAssets">
							<div class="custom-radio-group-header">19. Did you own $50,000 or more in foreign financial assets?</div>
							<div class="wrap-inputName no-border float-left custom-radio-group marital-status" >
								<!-- <label class="custom-radio-label">Account Holder: </label> -->
								<input class="isOwnForeignAssets" type="radio" name="isOwnForeignAssets" value="yes" >
								<span class="custom-radio-text">Yes</span>
								<input class="isOwnForeignAssets" type="radio" name="isOwnForeignAssets" value="no" checked>
								<span class="custom-radio-text">No</span>
								<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
							</div>
						</div>
						<div class="container-submit-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button id="submit" class="login100-form-btn" name="submit">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
<?php include_once 'footer.php'; ?>