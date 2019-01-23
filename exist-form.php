<?php
	include_once 'header.php';
	$emptySFName = false;
    $isUpdate = "";
	if ($_SERVER['REQUEST_METHOD'] === 'GET'){
		$autoGenId = "";
		$autoGenId =$_GET["aut_id"];
		if(!empty($_GET["is_update"])) {
            $isUpdate = $_GET["is_update"];
        }
		$_SESSION["autoGenId"]= $autoGenId;
		$Ssn = "";
		$sql = "SELECT * FROM userdata WHERE autoGenId = '$autoGenId';";
		$result = mysqli_query($conn, $sql);
		$checkResult = mysqli_num_rows($result);
        $isSuccess = '';
        if(!empty($_GET['is_success'])){
            $isSuccess = $_GET['is_success'];
        }
		if ($checkResult>0) {
			$row =  mysqli_fetch_assoc($result);
			$userFullName = $row["fName"]." ".$row["lName"];
			$Ssn = $row["SSN"];
			$SsnExcerp = substr($Ssn, 7,4);
		}
		
		$ownerOccupation = $spouseName= $sfName = $slName = $spouseSsn = $spouseOccupation = $homePhone = $email = "";
		$streetAddress = $city = $state = $zip = $isBlindOwner = $isBlindSpouse = $isDisableOwner = "";
		$isDisableSpouse = $isMarried = $isSelfEmployee = $isRaisingAnimals = $isRentRealEstate = "";
		$isRecieveIncome = $isWithdrawWriteCheck = $isForeignAccount = $isProvideHome = $isRecieveIRS = "";
		$isAnyBirthOrDeath = $isGiftHighPrice = $isDebtCancelled = $isBankruptcy = $isRentPaid = $isHeatIncluded = "";
		$isInterestStudent = $isPayExpenses = $isChildUnearned = $isPurchaseVehicle = $isInstallEnergyProperty = $isOwnForeignAssets = "";
		$sql2 = "SELECT * FROM userdetails WHERE autoGenId = '$autoGenId';";
		$result2 = mysqli_query($conn, $sql2);
		if (mysqli_num_rows($result2)>0) {
			$detailsRow = mysqli_fetch_assoc($result2);
			$ownerOccupation = $detailsRow['ownerOccupation'];
			$sfName = $detailsRow['sfName'];
			$slName = $detailsRow['slName'];
			$spouseSsn = substr($detailsRow['spouseSsn'], 7,4);
			$spouseOccupation = $detailsRow['spouseOccupation'];
			$homePhone = $detailsRow['homePhone'];
			$email = $detailsRow['emailAddress'];
			$streetAddress = $detailsRow['streetAddress'];
			$city = $detailsRow['city'];
			$state = $detailsRow['state'];
			$zip = $detailsRow['zip'];
			$isBlindOwner = $detailsRow['isOwnerBlind'];
			$isBlindSpouse = $detailsRow['isSpouseBlind'];
			$isDisableOwner = $detailsRow['isOwnerDisable'];
			$isDisableSpouse = $detailsRow['isSpouseDisable'];
			$isMarried = $detailsRow['maritalStatues'];
			$isSelfEmployee = $detailsRow['isSelfEmployee'];
			$isRaisingAnimals = $detailsRow['isRaisingAnimals'];
			$isRentRealEstate = $detailsRow['isRentRealEstate'];
			$isRecieveIncome = $detailsRow['isRecieveIncome'];
			$isWithdrawWriteCheck = $detailsRow['isWithdrawCheck'];
			$isForeignAccount = $detailsRow['isForeignAccount'];
			$isProvideHome = $detailsRow['isProvideHome'];
			$isRecieveIRS = $detailsRow['isRecieveIRS'];
			$isAnyBirthOrDeath = $detailsRow['isAnyBirthOrDeath'];
			$isGiftHighPrice = $detailsRow['isGiftHighPrice'];
			$isDebtCancelled = $detailsRow['isDebtCancelled'];
			$isBankruptcy = $detailsRow['isBankruptcy'];
			$isRentPaid = $detailsRow['isRentPaid'];
			$isHeatIncluded = $detailsRow['isHeatIncluded'];
			$isInterestStudent = $detailsRow['isInterestStudent'];
			$isPayExpenses = $detailsRow['isPayExpenses'];
			$isChildUnearned = $detailsRow['isChildUnearned'];
			$isPurchaseVehicle =  $detailsRow['isPurchaseVehicle'];
			$isInstallEnergyProperty = $detailsRow['isInstallEnergyProperty'];
			$isOwnForeignAssets = $detailsRow['isOwnForeignAssets'];
			$spouseName = $sfName." ".$slName;
		} else{
		if ($_GET['isadm']=='') {
		header('Location: not-exist-form.php?aut_id=' . $autoGenId);
		} elseif ($_GET['isadm']=='yes'){
echo "<style>";
echo ".wrap-login100{";
echo "width: 63% !important;";
echo "}";
echo "</style>";
}
}
?>
<script type="text/javascript">
	$(document).ready(function() {
		$(".logo").width('10%');
		$(".ssn-value").html("<?php echo 'xxx-xx-'.$SsnExcerp;?>");
		$(".name-value").html("<?php echo $userFullName;?>");
		$(".ownerOccupation-value").html("<?php echo $ownerOccupation; ?>");
		$(".sFullName-value").html("<?php echo $spouseName; ?>");
		$(".spSsn-value").html("<?php echo 'xxx-xx-'.$spouseSsn; ?>");
		$(".spOccup-value").html("<?php echo $spouseOccupation; ?>");
		$(".homePhone-value").html("<?php echo $homePhone; ?>");
		$(".email-value").html("<?php echo $email; ?>");
		$(".streetAddress-value").html("<?php echo $streetAddress; ?>");
		$(".city-value").html("<?php echo $city; ?>");
		$(".state-value").html("<?php echo $state; ?>");
		$(".zip-value").html("<?php echo $zip; ?>");
		$(".isBlindOwner-value").html("<?php echo $isBlindOwner; ?>");
		$(".isBlindSpouse-value").html("<?php echo $isBlindSpouse; ?>");
		$(".isDisableOwner-value").html("<?php echo $isDisableOwner; ?>");
		$(".isDisableSpouse-value").html("<?php echo $isDisableSpouse; ?>");
		$(".isMarried-value").html("<?php echo $isMarried; ?>");
		$(".isSelfEmployee-value").html("<?php echo $isSelfEmployee; ?>");
		$(".isRaisingAnimals-value").html("<?php echo $isRaisingAnimals; ?>");
		$(".isRentRealEstate-value").html("<?php echo $isRentRealEstate; ?>");
		$(".isRecieveIncome-value").html("<?php echo $isRecieveIncome; ?>");
		$(".isWithdrawWriteCheck-value").html("<?php echo $isWithdrawWriteCheck; ?>");
		$(".isForeignAccount-value").html("<?php echo $isForeignAccount; ?>");
		$(".isProvideHome-value").html("<?php echo $isProvideHome; ?>");
		$(".isRecieveIRS-value").html("<?php echo $isRecieveIRS; ?>");
		$(".isAnyBirthOrDeath-value").html("<?php echo $isAnyBirthOrDeath; ?>");
		$(".isGiftHighPrice-value").html("<?php echo $isGiftHighPrice; ?>");
		$(".isDebtCancelled-value").html("<?php echo $isDebtCancelled; ?>");
		$(".isBankruptcy-value").html("<?php echo $isBankruptcy; ?>");
		$(".isRentPaid-value").html("<?php echo $isRentPaid; ?>");
		$(".isHeatIncluded-value").html("<?php echo $isHeatIncluded; ?>");
		$(".isInterestStudent-value").html("<?php echo $isInterestStudent; ?>");
		$(".isPayExpenses-value").html("<?php echo $isPayExpenses; ?>");
		$(".isChildUnearned-value").html("<?php echo $isChildUnearned; ?>");
		$(".isPurchaseVehicle-value").html("<?php echo $isPurchaseVehicle; ?>");
		$(".isInstallEnergyProperty-value").html("<?php echo $isInstallEnergyProperty; ?>");
		$(".isOwnForeignAssets-value").html("<?php echo $isOwnForeignAssets; ?>");
		$(".wrap-login100").width('50%');
		$(".form-message").html("You are welcome. <br>We got your data into our server. <br>Please have a look and edit if needed.");
		$("#update-btn").click(function () {
			var autoGenId = '<?php  echo $autoGenId;?>'
			window.location = 'updater.php?aut_id='+autoGenId;
		});
		var isUpdate = "<?php echo $isUpdate;?>";
		if (isUpdate == "true") {
            $("#successMessage").fadeIn('slow').delay(2000).fadeOut('slow');
            $('#savePanel').css('display','none');
        }
	});
</script>
<body>
	<div id="successMessage">Your information has been updated successfully.</div>
    <div id="unsuccessMessage">An error occurred during update.</div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<span class="login100-form-title p-b-26">
					Welcome
				</span>
				<span class="login100-form-title p-b-48">
					<img class="logo" src="images/logo 2.png">
					<!-- <i class="zmdi zmdi-font"></i> -->
				</span>
				<div class ="form-message"></div>
				<div class="form-message-2"></div>
				<div class="nxt-form-main">
					<div class="nxt-form-header">

						<!-- <div class="container-submit-form-btn save-update-container"> -->
							<div id="update-btn-wrap" class="wrap-login100-form-btn save-container">
								<div class="login100-form-bgbtn"></div>
								<button id="update-btn" class="login100-form-btn save" name="submit">Update</button>
							</div>
						<!-- </div> -->
						<!-- final page for user: -->
						<div class="parent-div validate-input show-page-boxing">
							<div class="float-left">Account Holder's Name:</div>
							<div class="child-value name-value float-left"></div>
						</div>
						<div class="parent-div validate-input show-page-boxing">
							<div class="float-left">Social Security Number:</div>
							<div class="child-value ssn-value float-left"></div>
						</div>
					</div>
					<!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
				</div>
				<div class="parent-div validate-input show-page-boxing">
					<div class="float-left">Occupation:</div>
					<div class="child-value ownerOccupation-value float-left"></div>
				</div>
				<div class="parent-div validate-input show-page-boxing">
					<div class="float-left">Spouse Name:</div>
					<div class="child-value sFullName-value float-left"></div>
				</div>
				<div class="parent-div validate-input show-page-boxing">
					<div class="float-left">Spouse SSN:</div>
					<div class="child-value spSsn-value float-left"></div>
				</div>
				<div class="parent-div validate-input show-page-boxing">
					<div class="float-left">Spouse Occupation:</div>
					<div class="child-value spOccup-value float-left"></div>
				</div>
				<div class="parent-div validate-input show-page-boxing">
					<div class="float-left">Home Phone:</div>
					<div class="child-value homePhone-value float-left"></div>
				</div>
				<div class="parent-div validate-input show-page-boxing">
					<div class="float-left">Email Address:</div>
					<div class="child-value email-value float-left"></div>
				</div>
				<div class="parent-div validate-input show-page-boxing">
					<div class="float-left">Street Address:</div>
					<div class="child-value streetAddress-value float-left"></div>
				</div>
				<div class="parent-div validate-input show-page-boxing">
					<div class="float-left">City:</div>
					<div class="child-value city-value float-left"></div>
				</div>
				<div class="parent-div validate-input show-page-boxing">
					<div class="float-left">State:</div>
					<div class="child-value state-value float-left"></div>
				</div>
				<div class="parent-div validate-input show-page-boxing">
					<div class="float-left">Zip:</div>
					<div class="child-value zip-value float-left"></div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">Are you blind or not?:</div>
					<div id="parent-container">
						<div class="float-left">Account Holder: </div>
						<div class="child-value isBlindOwner-value float-left capitalize"></div>
						<div class="float-left">Spouse: </div>
						<div class="child-value isBlindSpouse-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">Are you disable or not?:</div>
					<div id="parent-container">
						<div class="float-left">Account Holder: </div>
						<div class="child-value isDisableOwner-value float-left capitalize"></div>
						<div class="float-left">Spouse: </div>
						<div class="child-value isDisableSpouse-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">Are you Married?:</div>
					<div id="parent-container">
						<!-- <div class="float-left">Account Holder: </div> -->
						<div class="child-value isMarried-value float-left capitalize"></div>
						<!-- <div class="float-left">Spouse: </div>
						<div class="child-value isDisableSpouse-value float-left"></div> -->
					</div>
				</div>

<!--                Child's Data Sector:-->
                <table>
                    <tr>
                        <th>No.</th>
                        <th>Child's Name</th>
                        <th>Child's SSN No.</th>
                        <th>Child's Birthday</th>
                    </tr>
                <!--   Child's Data grabber: -->
                <?php
                    $sql = "SELECT * FROM childdetails WHERE autoGenId = '$autoGenId';";
                    $result = mysqli_query($conn, $sql);
                    $cDataRows = mysqli_fetch_assoc($result);
                    print_r($cDataRows);
                    for ($i = 0; $i <= mysqli_num_rows($result); $i++){ ?>

                        <tr>
                            <td><?php echo ($i+1).'.' ?></td>
                            <td><?php echo $cDataRows['cFName']?></td>
                            <td><?php echo $cDataRows['CSsn']?></td>
                            <td><?php echo date("m-d-Y", strtotime($cDataRows['CBdate']));?></td>
                        </tr>
                   <?php

                    }
                ?>
                </table>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">1. Are you Self Employeed or not?:</div>
					<div id="parent-container">
						<div class="child-value isSelfEmployee-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">2. Did you receive income from raising animals or crops?:</div>
					<div id="parent-container">
						<div class="child-value isRaisingAnimals-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">3. Did you receive rent from real estate or other property?:</div>
					<div id="parent-container">
						<div class="child-value isRentRealEstate-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">4. Did you receive income from gravel, timber, minerals, oil, gas, copyrights, patents?:</div>
					<div id="parent-container">
						<div class="child-value isRecieveIncome-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">5. Did you withdraw or write checks from a mutual funds?:</div>
					<div id="parent-container">
						<div class="child-value isWithdrawWriteCheck-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">6. Do you have a foreign bank account, trust or business?:</div>
					<div id="parent-container">
						<div class="child-value isForeignAccount-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">7. Do you provide a home for or help support anyone?:</div>
					<div id="parent-container">
						<div class="child-value isProvideHome-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">8. Did you receive any correspondence from IRS or State Department of Taxation?:</div>
					<div id="parent-container">
						<div class="child-value isRecieveIRS-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">9. Were there any births, deaths, marriages, divorces or adoptions in your immediate family?:</div>
					<div id="parent-container">
						<div class="child-value isAnyBirthOrDeath-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">10. Did you give a gift of more than $13,000 to one or more people?:</div>
					<div id="parent-container">
						<div class="child-value isGiftHighPrice-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">11. Did you any debt cancelled, forgiven or refinanced?:</div>
					<div id="parent-container">
						<div class="child-value isDebtCancelled-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">12. Did you go through a bankruptcy proceedings?:</div>
					<div id="parent-container">
						<div class="child-value isBankruptcy-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">13. (a)If you paid rent, how much did you pay?:</div>
					<div id="parent-container">
						<div class="child-value isRentPaid-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">(b)Was heat included?:</div>
					<div id="parent-container">
						<div class="child-value isHeatIncluded-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">14. Did you pay interest on a student loan for yourself, your spouse or your dependent during this year?:</div>
					<div id="parent-container">
						<div class="child-value isInterestStudent-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">15. Did you pay expenses for yourself, your spouse or your dependent to attend classes beyond high school?:</div>
					<div id="parent-container">
						<div class="child-value isPayExpenses-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">16. Did you have any children under the age of 19 or 19 to 23 year old students with unearned income of more than $950?:</div>
					<div id="parent-container">
						<div class="child-value isChildUnearned-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">17. Did you purchase a new alternative technology vehicle or electric vehicle?:</div>
					<div id="parent-container">
						<div class="child-value isPurchaseVehicle-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">18. Did you install any energy property to your residence such as solar water heaters, generators or fuel cells
					or energy efficient improvements such as exterior doors or windows, insulation, heat pumps, furnaces, central air conditioners or water heaters?:</div>
					<div id="parent-container">
						<div class="child-value isInstallEnergyProperty-value float-left capitalize"></div>
					</div>
				</div>
				<div class="parent-div validate-input clear-both show-page-boxing">
					<div class="float-left">19. Did you own $50,000 or more in foreign financial assets?:</div>
					<div id="parent-container">
						<div class="child-value isOwnForeignAssets-value float-left capitalize"></div>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>
<?php include_once 'footer.php'; }?>