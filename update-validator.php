<?php 
	session_start();
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		include_once 'includes/dbh.inc.php';
		$autoGenId = $_SESSION["autoGenId"];
		/*User Data Scraper:*/
		$sql = "SELECT * FROM userdata WHERE autoGenId = '$autoGenId';";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$ownerSsn = $row['SSN'];
		/*Variables that need to be inserted:*/
		$ownerOccupation = mysqli_real_escape_string($conn, $_POST['ownerOccupation']);
		$sfName = mysqli_real_escape_string($conn, $_POST['sfName']);
		$slName = mysqli_real_escape_string($conn, $_POST['slName']);
		$spouseSsn = mysqli_real_escape_string($conn, $_POST['spouseSsn']);
		$spouseOccupation = mysqli_real_escape_string($conn, $_POST['spouseOccupation']);
		$homePhone = mysqli_real_escape_string($conn, $_POST['homePhone']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$streetAddress = mysqli_real_escape_string($conn, $_POST['streetAddress']);
		$city = mysqli_real_escape_string($conn, $_POST['city']);
		$state = mysqli_real_escape_string($conn, $_POST['state']);
		$zip = mysqli_real_escape_string($conn, $_POST['zip']);
		$isBlindOwner = $_POST['isBlindOwner'];
		$isBlindSpouse = $_POST['isBlindSpouse'];
		$isDisableOwner = $_POST['isDisableOwner'];
		$isDisableSpouse = $_POST['isDisableSpouse'];
		$isMarried = $_POST['isMarried'];
		$isSelfEmployee = $_POST['isSelfEmployee'];
		$isRaisingAnimals = $_POST['isRaisingAnimals'];
		$isRentRealEstate = $_POST['isRentRealEstate'];
		$isRecieveIncome = $_POST['isRecieveIncome'];
		$isWithdrawWriteCheck = $_POST['isWithdrawWriteChecks'];
		$isForeignAccount = $_POST['isForeignAccount'];
		$isProvideHome = $_POST['isProvideHome'];
		$isRecieveIRS = $_POST['isRecieveIRS'];
		$isAnyBirthOrDeath = $_POST['isAnyBirthOrDeath'];
		$isGiftHighPrice = $_POST['isGiftHighPrice'];
		$isDebtCancelled = $_POST['isDebtCancelled'];
		$isBankruptcy = $_POST['isBankruptcy'];
		$isRentPaid = $_POST['isRentPaid'];
		$isHeatIncluded = $_POST['isHeatIncluded'];
		$isInterestStudent = $_POST['isInterestStudent'];
		$isPayExpenses = $_POST['isPayExpenses'];
		$isChildUnearned = $_POST['isChildUnearned'];
		$isPurchaseVehicle =  $_POST['isPurchaseVehicle'];
		$isInstallEnergyProperty = $_POST['isInstallEnergyProperty'];
		$isOwnForeignAssets = $_POST['isOwnForeignAssets'];

		$sql = "UPDATE userdetails SET ownerOccupation = '$ownerOccupation', sfName = '$sfName', slName = '$slName', spouseSsn = '$spouseSsn', spouseOccupation = '$spouseOccupation', homePhone = '$homePhone', emailAddress = '$email', streetAddress = '$streetAddress', city = '$city', state = '$state', zip = '$zip', isOwnerBlind = '$isBlindOwner', isSpouseBlind = '$isBlindSpouse', isOwnerDisable = '$isDisableOwner', isSpouseDisable = '$isDisableSpouse', maritalStatues =  '$isMarried', isSelfEmployee = '$isSelfEmployee', isRaisingAnimals = '$isRaisingAnimals', isRentRealEstate = '$isRentRealEstate', isRecieveIncome = '$isRecieveIncome', isWithdrawCheck = '$isWithdrawWriteCheck', isForeignAccount = '$isForeignAccount', isProvideHome = '$isProvideHome', isRecieveIRS = '$isRecieveIRS', isAnyBirthOrDeath = '$isAnyBirthOrDeath', isGiftHighPrice = '$isGiftHighPrice', isDebtCancelled = '$isDebtCancelled', isBankruptcy ='$isBankruptcy', isRentPaid = '$isRentPaid', isHeatIncluded = '$isHeatIncluded', isInterestStudent = '$isInterestStudent', isPayExpenses = '$isPayExpenses', isChildUnearned = '$isChildUnearned', isPurchaseVehicle = '$isPurchaseVehicle', isInstallEnergyProperty = '$isInstallEnergyProperty', isOwnForeignAssets = '$isOwnForeignAssets' 
			WHERE autoGenId = '$autoGenId';";
		$result = mysqli_query($conn, $sql);

	}
?>
 
<script type="text/javascript">
	var autoGenId = '<?php echo $autoGenId; ?>';
	window.location = 'exist-form.php?aut_id='+autoGenId+'&is_update=true';
</script>