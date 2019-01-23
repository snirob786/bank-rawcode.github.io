<?php 
	session_start();
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		include_once 'includes/dbh.inc.php';
        // Error Checker:
        $isError = false;
        $isEmpty = false;

		$errorEmptyMessage = array();
		$errorCharacterMessage = array();
		$autoGenId = $_SESSION["autoGenId"];
		/*User Data Scraper:*/
		$sql = "SELECT * FROM userdata WHERE autoGenId = '$autoGenId';";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$ownerSsn = $row['SSN'];
		//Variables that need to be inserted:
		$ownerOccupation = mysqli_real_escape_string($conn, $_POST['ownerOccupation']);
		$sfName = mysqli_real_escape_string($conn, $_POST['sfName']);
		$slName = mysqli_real_escape_string($conn, $_POST['slName']);
		$spouseSsn = mysqli_real_escape_string($conn, $_POST['spouseSsn']);
        $spouseBdate = $_POST['spouseBdate'];
		$spouseOccupation = mysqli_real_escape_string($conn, $_POST['spouseOccupation']);
		$homePhone = mysqli_real_escape_string($conn, $_POST['homePhone']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$streetAddress = mysqli_real_escape_string($conn, $_POST['streetAddress']);
		$city = mysqli_real_escape_string($conn, $_POST['city']);
		$state = mysqli_real_escape_string($conn, $_POST['state']);

		//Child Field:
		$cFName[] = $_POST['cFName'];
        $CSsn[] = $_POST['CSsn'];
        $CBdate[] = $_POST['CBdate'];

        //Child Field Error Handler:
        $isCError = false;
        $isCCounter = false;

        $errorEmptyCFName = $errorEmptyCSsn = $errorEmptyCBdate = false;
        $errorCharacterCFName = $errorCharacterCSsn = false;

        $number = count($cFName);
        for($i=0; $i<$number; $i++){
            $cFName_clean = mysqli_real_escape_string($conn,$cFName[$i]);
            $CSsn_clean = mysqli_real_escape_string($conn,$CSsn[$i]);
            $CBdate_clean = mysqli_real_escape_string($conn, $CBdate[$i]);

        }
        parse_str($cFName_clean,$newcFNameArrays);
        parse_str($CSsn_clean,$newCSsnArrays);
        parse_str($CBdate_clean,$newCBdateArrays);
        $childName = [];
        $childSsn = [];
        $childBdate = [];
        foreach ($newcFNameArrays as $newcFNameArray){
            foreach ($newcFNameArray as $key => $value){
                if (empty($value)) {
                    $errorEmptyCFName  = true;
                    $isError = true;
                    $isCError = true;
                    $isEmpty = true;
                    array_push( $errorEmptyMessage,"Child\'s Name Empty");
                }else {
                    if (!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $value)) {
                        $errorCharacterCFName = true;
                        $isError = true;
                        $isCError = true;
                        array_push($errorCharacterMessage,"Child\'s Name Miss Match");
                        $_SESSION['cFName'] = $value;
                    } else{
                        array_push($childName,$value);
                    }
                }
            }
        }

        foreach ($newCSsnArrays as $newCSsnArray){
            foreach ($newCSsnArray as $key => $value){
                if (empty($value)) {
                    $errorEmptyCSsn  = true;
                    $isError = true;
                    $isCError = true;
                    $isEmpty = true;
                    array_push( $errorEmptyMessage,"Child\'s SSN Empty");
                }else {
                    if (!preg_match("/^([1-9])(?!\1{2}-\1{2}-\1{4})[1-9]{2}-[1-9]{2}-[1-9]{4}$/", $value)) {
                        $errorCharacterCSsn = true;
                        $isError = true;
                        $isCError = true;
                        array_push($errorCharacterMessage,"Child\'s SSN Miss Match");
                        $_SESSION['CSsn'] = $value;
                    } else{
                        array_push($childSsn,$value);
                    }
                }
            }
        }
        foreach ($newCBdateArrays as $newCBdateArray){
            foreach ($newCBdateArray as $key => $value){
                if (empty($value)) {
                    $errorEmptyCBdate  = true;
                    $isError = true;
                    $isCError = true;
                    $isEmpty = true;
                    array_push( $errorEmptyMessage,"Child\'s Birthday Empty");
                }else {
                    $orderCBdate = explode('/', $value);
                    $month = $orderCBdate[0];
                    $day   = $orderCBdate[1];
                    $year  = $orderCBdate[2];
                    $date = date_create_from_format('Y-m-d',$year."-".$month."-".$day);
                    $date = date_format($date,'Y-m-d');
                        array_push($childBdate,$date);
                    }
                }
            }
        }

	if (count($childName) != count($childSsn) || count($childName) != count($childBdate) || count($childSsn) != count($childBdate)){
	    echo "<div class='error-message'>Child\'s all fields are required.</div>";
        $isCCounter = false;
    }
//		echo $spouseBdate. "<br>";
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
		$isInserted = false;

		// Error Handler::
		//---------------------- Empty Field Error checker:----------------
		$errorEmptyOnOccup = $errorEmptySFName = $errorEmptySLName = $errorEmptySpSsn = $errorEmptySBdate = $errorEmptySpOccup = false;
		$errorEmptyHomePhone = $errorEmptyEmail = $errorEmptyStAddr = $errorEmptyZip = $errorEmptyCity = $errorEmptyState = false;
		$errorEmptyIsBlindOwner = $errorEmptyIsBlindSpouse = $errorEmptyIsDisableOwner = $errorEmptyIsDisableSpouse = false;

		// --------------------------------Character for name field Sanitaion-------------
		$errorCharacterSFName = $errorCharacterSLName = $errorCharacterSpSsn = $errorCharacterEmail = false;


		// ------------Occupation Field Checker:
		if (empty($ownerOccupation)) {
			$errorEmptyOnOccup = true;
			$isError = true;
			$isEmpty = true;
//			array_push( $errorEmptyMessage,"Owner Occupation Empty");
//		} else{
		    $_SESSION['ownerOccupation'] = $ownerOccupation;
        }
		// -----------------Spouse First Name field Error handler:
		if (empty($sfName)) {
			$errorEmptySFName = true;
			$isError = true;
			$isEmpty = true;
            array_push( $errorEmptyMessage,"Spouse SFN Empty");
		}else {
			if (!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $sfName)) {
				$errorCharacterSFName = true;
				$isError = true;
//				echo "Spouse SFN Didn't match";
				array_push($errorCharacterMessage,"Spouse SFN Didn't match");
//			}else{
			    $_SESSION['sfName'] = $sfName ;
            }
		}
		// -----------------Spouse Last Name field Error handler:
		if (empty($slName)) {
			$errorEmptySLName = true;
			$isError = true;
			$isEmpty = true;
//			echo "Spouse SLN Empty";
			array_push($errorEmptyMessage,"Spouse SLN Empty");
		}else {
			if (!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $slName)) {
				$errorCharacterSLName = true;
				$isError = true;
//				echo "Spouse SLN Didn't match";
				array_push($errorCharacterMessage,"Spouse SLN Didn't match");
//			} else{
                $_SESSION['slName'] = $slName ;
            }
		}
		// Spouse Social Security Number field Error handler
		if (empty($spouseSsn)) {
			$errorEmptySpSsn = true;
			$isError = true;
			$isEmpty = true;
//			echo "Spouse SSN Empty";
			array_push($errorEmptyMessage,"Spouse SSN Empty");
		}else{
			if (!preg_match("/^([1-9])(?!\1{2}-\1{2}-\1{4})[1-9]{2}-[1-9]{2}-[1-9]{4}$/", $spouseSsn)) {
                $errorCharacterSpSsn = true;
                $isError = true;
                echo "Spouse SSN Didn't match";
//            }else{
                array_push($errorCharacterMessage, "Spouse SSN Didn't match");
                $_SESSION['spouseSsn'] = $spouseSsn ;
            }
		}
		//------------------ Spouse Bdate Error Handle-----------------
        if (empty($spouseBdate)) {
            $errorEmptySBdate = true;
            $isError = true;
        }else{
            $orderdate = explode('/', $spouseBdate);
            $month = $orderdate[0];
            $day   = $orderdate[1];
            $year  = $orderdate[2];
            $date = date_create_from_format('Y-m-d',$year."-".$month."-".$day);
            $date = date_format($date,'Y-m-d');
        }


        // ----------------- Spouse Occupation field Empty Error handler:
		if (empty($spouseOccupation)) {
			$errorEmptySpOccup = true;
			$isError = true;
			$isEmpty = true;
//			echo "Spouse Occupation empty";
//		} else{
            array_push($errorEmptyMessage,"Spouse Occupation empty");
		    $_SESSION['spouseOccupation'] = $spouseOccupation;
        }
		// ----------------- Phone field Empty Error handler:
		if (empty($homePhone)) {
			$errorEmptyHomePhone = true;
			$isError = true;
			$isEmpty = true;
//			echo "Empty Home empty";
			array_push($errorEmptyMessage,"Home phone is required");
//		} else{
		    $_SESSION['homePhone'] = $homePhone;
        }
        //---------------- Email Address Validation:
		if (empty($email)) {
			$errorEmptyEmail = true;
			$isError = true;
			$isEmpty = true;
			array_push($errorEmptyMessage,"Email field is required");
		} else{
            if (!preg_match("/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/", $email)) {
                $errorCharacterEmail = true;
                $isError = true;
//                echo "Email didn't match";
//            } else
                array_push($errorCharacterMessage,"Email didn't match");
                $_SESSION['email'] = $email;
            }
        }
		// ----------------- Street Address Field Empty Error handler:
		if (empty($streetAddress)) {
			$errorEmptyStAddr = true;
			$isError = true;
			$isEmpty = true;
//			echo "Street Address empty";
//		}else{
            array_push($errorEmptyMessage,"Street Address empty");
		    $_SESSION['streetAddress'] = $streetAddress;
        }

		// ----------------- Zip Field Empty Error handler:
		if (empty($zip)) {
			$errorEmptyZip = true;
			$isError = true;
			$isEmpty = true;
//			echo "Zip empty";
//		} else{
		    $_SESSION['zip'] = $zip;
		    array_push($errorEmptyMessage,"Zip is required");
        }

		// ----------------- City Field Empty Error handler:
		if (empty($city)) {
			$errorEmptyCity = true;
			$isError = true;
			$isEmpty = true;
//			echo "City empty";
//		}else{
		    $_SESSION['city'] = $city;
		    array_push($errorEmptyMessage,"City is required");
		}

		// ----------------- State Field Empty Error handler:
		if (empty($state)) {
			$errorEmptyState = true;
			$isError = true;
			$isEmpty = true;
//			echo "State empty";
//		} else{
            array_push($errorEmptyMessage,"State is required");
		    $_SESSION['state'] = $state;
        }

        $_SESSION['errorEmptyMessage'] = $errorEmptyMessage;
		$_SESSION['errorCharacterMessage'] = $errorCharacterMessage;
		// Database connections:
		if (!$isError == true) {
			$sql = "INSERT INTO userdetails(ownerOccupation,sfName, slName, spouseSsn,sBdate,spouseOccupation, homePhone, emailAddress, streetAddress, city, state, zip, isOwnerBlind, isSpouseBlind, isOwnerDisable, isSpouseDisable, maritalStatues, isSelfEmployee, isRaisingAnimals, isRentRealEstate, isRecieveIncome, isWithdrawCheck, isForeignAccount, isProvideHome, isRecieveIRS, isAnyBirthOrDeath, isGiftHighPrice, isDebtCancelled, isBankruptcy, isRentPaid, isHeatIncluded, isInterestStudent, isPayExpenses, isChildUnearned, isPurchaseVehicle, isInstallEnergyProperty, isOwnForeignAssets, autoGenId, ownerSsn) 
				VALUES('$ownerOccupation','$sfName','$slName','$spouseSsn','$spouseBdate','$spouseOccupation','$homePhone', '$email','$streetAddress','$city','$state', '$zip','$isBlindOwner', '$isBlindSpouse', '$isDisableOwner','$isDisableSpouse','$isMarried','$isSelfEmployee','$isRaisingAnimals','$isRentRealEstate', '$isRecieveIncome','$isWithdrawWriteCheck','$isForeignAccount','$isProvideHome','$isRecieveIRS','$isAnyBirthOrDeath','$isGiftHighPrice','$isDebtCancelled','$isBankruptcy','$isRentPaid','$isHeatIncluded', '$isInterestStudent','$isPayExpenses', '$isChildUnearned', '$isPurchaseVehicle', '$isInstallEnergyProperty', '$isOwnForeignAssets' ,'$autoGenId', '$ownerSsn');";
			$result = mysqli_query($conn, $sql);
			if (mysqli_errno($conn) == "") {
                $isInserted = true;
                $sql = "UPDATE  userdata SET isInserted = '$isInserted' WHERE autoGenId = '$autoGenId';";
                $result = mysqli_query($conn, $sql);

			}


	}

	if ($isCError == false && $isCCounter ==  false){
	    for ($i= 0; $i< count($childSsn); $i++){
            $sql = "INSERT INTO childdetails(cFName, CSsn, CBdate, autoGenId, ownerSsn)
                VALUES ('$childName[$i]','$childSsn[$i]','$childBdate[$i]','$autoGenId', '$ownerSsn');";
            $result = mysqli_query($conn, $sql);
            if (mysqli_error($result) != null){
                $isInserted = true;
                $sql = "UPDATE  childdetails SET isInserted = '$isInserted' WHERE autoGenId = '$autoGenId';";
                $result = mysqli_query($conn, $sql);
            }
	    }

    }

	?>
<script type="text/javascript">
    var errorEmptyCFName = "<?php echo $errorEmptyCFName; ?>";
    var errorEmptyCSsn = "<?php echo $errorEmptyCSsn; ?>";
    var errorEmptyCBdate = "<?php echo $errorEmptyCBdate; ?>";
    var errorCharacterCFName = "<?php echo $errorCharacterCFName; ?>";
    var errorCharacterCSsn = "<?php echo $errorCharacterCSsn; ?>";

    var errorEmptyOnOccup = "<?php echo $errorEmptyOnOccup; ?>";
    var sfNameError = "<?php echo $errorEmptySFName; ?>";
    var slNameError = "<?php echo $errorEmptySLName; ?>";
    var spouseSsnError = "<?php echo $errorEmptySpSsn; ?>";
    var spouseBdateError = "<?php echo $errorEmptySBdate; ?>";
    var spouseOccupationError = "<?php echo $errorEmptySpOccup; ?>";
    var homePhoneError = "<?php echo $errorEmptyHomePhone; ?>";
    var emailError = "<?php echo $errorEmptyEmail; ?>";
    var streetError = "<?php echo $errorEmptyStAddr; ?>";
    var cityError = "<?php echo $errorEmptyCity; ?>";
    var stateError = "<?php echo $errorEmptyState; ?>";
    var zipError = "<?php echo $errorEmptyZip;?>";
    var autoGenId = "<?php echo $autoGenId; ?>";
    var isInserted = "<?php echo $isInserted; ?>";

    var inputCName = $(".validate-input .inputCFName");
    var inputCSsn = $(".validate-input .inputCSsn");
    var inputCBdate = $(".validate-input .inputCBdate");

    var inputOccupation = $(".validate-input .inputOccupation");
    var inputsfName = $(".validate-input .inputsfName");
    var inputslName = $(".validate-input .inputslName");
    var inputSpouseSsn = $(".validate-input .inputSpouseSsn");
    var inputSpouseBdate = $(".validate-input .spouseBdate");
    var inputSpouseOccupation = $(".validate-input .inputSpouseOccupation");
    var inputHomePhone = $(".validate-input .inputHomePhone");
    var inputEmail = $(".validate-input .inputEmail");
    var inputStreetAddress = $(".validate-input .inputStreetAddress");
    var inputCity = $(".validate-input .inputCity");
    var inputZip = $(".validate-input .inputZip");
    var inputState = $(".validate-input .inputState");

    if (errorEmptyCFName == true){
        var thisAlert = $(inputCName).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Child\'s Name is required.");
    }if (errorEmptyCSsn == true){
        var thisAlert = $(inputCSsn).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Child\'s SSN is required.");
    }if (errorEmptyCBdate == true){
        var thisAlert = $(inputCBdate).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Child\'s Birthday is required.");
    }if (errorCharacterCFName == true){
        var thisAlert = $(inputCName).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Child\'s Name is not matched.");
    }
    if (errorCharacterCSsn == true){
        var thisAlert = $(inputCSsn).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Child\'s SSN is not matched.");
    }

    if (errorEmptyOnOccup == true) {
        var thisAlert = $(inputOccupation).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Occupation is required.");
        errorChecker = true;
    }
    if (sfNameError == true) {
        var thisAlert = $(inputsfName).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","First Name is required.");
        errorChecker = true;
    }
    if (slNameError == true) {
        var thisAlert = $(inputslName).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Last Name is required.");
        errorChecker = true;
    }
    if (spouseSsnError == true) {
        var thisAlert = $(inputSpouseSsn).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Spouse SSN is required.");
        errorChecker = true;
    }
    if (spouseBdateError == true) {
        var thisAlert = $(inputSpouseBdate).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Spouse Birthday is required.");
        errorChecker = true;
    }
    if (spouseOccupationError == true) {
        var thisAlert = $(inputSpouseOccupation).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Spouse Occupation is required.");
        errorChecker = true;
    }
    if (homePhoneError == true) {
        var thisAlert = $(inputHomePhone).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Home Phone is required.");
        errorChecker = true;
    }
    if (emailError == true) {
        var thisAlert = $(inputEmail).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Email is required.");
        errorChecker = true;
    }
    if (streetError == true) {
        var thisAlert = $(inputStreetAddress).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Street is required.");
        errorChecker = true;
    }
    if (cityError == true) {
        var thisAlert = $(inputCity).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","City is required.");
        errorChecker = true;
    }
    if (stateError == true) {
        var thisAlert = $(inputState).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","State is required.");
        errorChecker = true;
    }
    if (zipError == true) {
        var thisAlert = $(inputZip).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Zip is required.");
        errorChecker = true;
    }

    /*======================== hide error message on focus =====================*/
    $(inputOccupation).focus(function () {
        var thisAlert = $(inputOccupation).parent();
        $(thisAlert).removeClass("alert-validate");
    });
    $(inputsfName).focus(function () {
        var thisAlert = $(inputsfName).parent();
        $(thisAlert).removeClass("alert-validate");
    });
    $(inputslName).focus(function () {
        var thisAlert = $(inputslName).parent();
        $(thisAlert).removeClass("alert-validate");
    });
    $(inputSpouseSsn).focus(function () {
        var thisAlert = $(inputSpouseSsn).parent();
        $(thisAlert).removeClass("alert-validate");
    });
    $(inputSpouseBdate).focus(function () {
    var thisAlert = $(inputSpouseBdate).parent();
    $(thisAlert).removeClass("alert-validate");
    });

    $(inputSpouseOccupation).focus(function () {
        var thisAlert = $(inputSpouseOccupation).parent();
        $(thisAlert).removeClass("alert-validate");
    });
    $(inputHomePhone).focus(function () {
        var thisAlert = $(inputHomePhone).parent();
        $(thisAlert).removeClass("alert-validate");
    });
    $(inputEmail).focus(function () {
        var thisAlert = $(inputEmail).parent();
        $(thisAlert).removeClass("alert-validate");
    });
    $(inputStreetAddress).focus(function () {
        var thisAlert = $(inputStreetAddress).parent();
        $(thisAlert).removeClass("alert-validate");
    });
    $(inputCity).focus(function () {
        var thisAlert = $(inputCity).parent();
        $(thisAlert).removeClass("alert-validate");
    });
    $(inputState).focus(function () {
        var thisAlert = $(inputState).parent();
        $(thisAlert).removeClass("alert-validate");
    });
    $(inputZip).focus(function () {
        var thisAlert = $(inputZip).parent();
        $(thisAlert).removeClass("alert-validate");
    });

    if (isInserted==true){
        window.location = 'exist-form.php?aut_id='+autoGenId+'&is_update=true';
    }

    </script>
