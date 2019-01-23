<?php 
	if (isset($_POST['register'])) {
		include_once 'includes/dbh.inc.php';
		$fName = mysqli_real_escape_string($conn, $_POST['fName']);
		$lName = mysqli_real_escape_string($conn, $_POST['lName']);
		$Ssn = mysqli_real_escape_string($conn, $_POST['Ssn']);
		$ownerBdate = $_POST['ownerBdate'];
		$SsnExcerp = $userFullName = "";
		$errorEmptyFName = false;
		$errorCharacterFName = false;
		$errorEmptyLName = false;
		$errorCharacterLName = false;
		$errorEmptySsn = false;
		$errorCharacterSsn = false;
		$errorEmptyBdate = false;
        $dateMissmatch = false;
		$autoGenId = "";


		$isError= false;
		$isExist = false;
		$signedUp = false;

		// First Name field Error handler:
		if (empty($fName)) {
			$errorEmptyFName = true;
			$isError = true;
		}else {
			if (!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $fName)) {
				$errorCharacterFName = true;
				$isError = true;
			}
		} 

		// Last Name field Error handler:
		if (empty($lName)) {
			$errorEmptyLName = true;
			$isError = true;
		}else{
			if (!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $lName)) {
				$errorCharacterLName = true;
				$isError = true;
			}
		}
		
		// Social Security Number field Error handler
		if (empty($Ssn)) {
			$errorEmptySsn = true;
			$isError = true;
		}else{
			if (!preg_match("/^([1-9])(?!\1{2}-\1{2}-\1{4})[1-9]{2}-[1-9]{2}-[1-9]{4}$/", $Ssn)) {
				$errorCharacterSsn = true;
				$isError = true;
			}
		}

		// Birthdate field Error handler
		
		if (empty($ownerBdate)) {
			$errorEmptyBdate = true;
			$isError = true;
		}else{
                $orderdate = explode('/', $ownerBdate);
                $month = $orderdate[0];
                $day   = $orderdate[1];
                $year  = $orderdate[2];
                $date = date_create_from_format('Y-m-d',$year."-".$month."-".$day);
                $date = date_format($date,'Y-m-d');
		}

		// Database connections:
		if ($isError === false) {
			$sql = "SELECT * FROM userdata WHERE SSN = '$Ssn';";
			$result = mysqli_query($conn, $sql);
			$checkResult = mysqli_num_rows($result);

			if ($checkResult > 0) {
				$isExist = true;
				$row =  mysqli_fetch_assoc($result);
				if ($date == $row['ownerBdate']){
                    $_SESSION["Ssn"] = $row["SSN"];
                    $_SESSION["fName"] = $row["fName"];
                    $_SESSION["lName"] = $row["lName"];
                    $autoGenId = $row["autoGenId"];
                } else{
				    $dateMissmatch = true;
				    $isError = true;
				    echo "Date Missmatched";
                }

			} else{
				$lastSsn = substr($Ssn, 7,4);
				$autoGenId = uniqid($lastSsn);
				$sql = "INSERT INTO userdata(autoGenId, fName, lName, SSN,ownerBdate) VALUES('$autoGenId', '$fName', '$lName', '$Ssn', '$date');";
				$result = mysqli_query($conn, $sql);
				$_SESSION["Ssn"] = $Ssn;
				$_SESSION["fName"] = $fName;
				$_SESSION["lName"] = $lName;
				$_SESSION["autoGenId"] = $autoGenId;
			}
		}
		if (isset($_SESSION["Ssn"])) {
			$SsnExcerp = substr($_SESSION["Ssn"], 7,4);
			$userFName = $_SESSION["fName"];
			$userLName = $_SESSION["lName"];
			$userFullName = $userFName. " ".$userLName;
		}
	}

?>

<script type="text/javascript">
	
    var errorEmptyFName = "<?php echo $errorEmptyFName; ?>";
    var errorCharacterFName = "<?php echo $errorCharacterFName; ?>";
    var errorEmptyLName = "<?php echo $errorEmptyLName; ?>";
    var errorCharacterLName = "<?php echo $errorCharacterLName; ?>";
    var errorEmptySsn = "<?php echo $errorEmptySsn; ?>";
    var errorCharacterSsn = "<?php echo $errorCharacterSsn; ?>";
    var errorEmptyBdate = "<?php echo $errorEmptyBdate; ?>";
    var autoGenId = "<?php echo $autoGenId?>";
    var isError = "<?php echo $isError; ?>";
    var isExist = "<?php echo $isExist; ?>";
    var signedUp = "<?php echo $signedUp; ?>";
    var dateMissmatch = "<?php echo $dateMissmatch; ?>";

    var inputFName =$('.validate-input .inputFName');
    var inputLName =$('.validate-input .inputLName');
    var inputSsn =$('.validate-input .inputSsn');
    var inputBdate = $('.validate-input #ownerBdate');

    var errorChecker = false;

    if (errorEmptyFName == true) {
        var thisAlert = $(inputFName).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Name is required.");
        errorChecker = true;
    } else if(errorCharacterFName == true){
        var thisAlert = $(inputFName).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Name can take only letters and empty space");
        errorChecker = true;
    }

    /*======================== Last name error visibility =====================*/

    if (errorEmptyLName == true) {
        var thisAlert = $(inputLName).parent();
        $(thisAlert).addClass("alert-validate");
        errorChecker = true;
        $(thisAlert).attr("data-validate","Name is required.");
    } else if(errorCharacterLName == true){
        var thisAlert = $(inputLName).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","Only takes letters & empty space");
        errorChecker = true;
    }

    /*======================== social security number error visibility =====================*/
    if (errorEmptySsn == true) {
        var thisAlert = $(inputSsn).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","SSN is required.");
        errorChecker = true;
    } else if(errorCharacterSsn == true){
        var thisAlert = $(inputSsn).parent();
        $(thisAlert).addClass("alert-validate");
        $(thisAlert).attr("data-validate","SSN: xxx-xx-xxxx");
        errorChecker = true;
    }
        /*======================== Birthday error visibility =====================*/
        if (errorEmptyBdate == true) {
            var thisAlert = $(inputBdate).parent();
            $(thisAlert).addClass("alert-validate");
            $(thisAlert).attr("data-validate","Date is required.");
            errorChecker = true;
        }

        /*======================== hide error message on focus =====================*/
        $(inputFName).focus(function(){
            var thisAlert = $(inputFName).parent();
            $(thisAlert).removeClass("alert-validate");
        });

        $(inputLName).focus(function(){
            var thisAlert = $(inputLName).parent();
            $(thisAlert).removeClass("alert-validate");
        });

        $(inputSsn).focus(function(){
            var thisAlert = $(inputSsn).parent();
            $(thisAlert).removeClass("alert-validate");
        });

        $(inputBdate).focus(function(){
            var thisAlert = $(inputBdate).parent();
            $(thisAlert).removeClass("alert-validate");
        });

        /*Data existance handler and decision maker:*/
        if (isError == true){
            if ( dateMissmatch == true) {
                $(".form-message").addClass('error-message');
            }
        }
        else {
            $(".wrap-login100").addClass("wrap-login100-nxtPage");
            $(".first-form").addClass("content-hidden");
            $(".nxt-form-main").removeClass("content-hidden");
            $(".logo").width('10%');
            $(".ssn-value").html("<?php echo "xxx-xx-".$SsnExcerp;?>");
            $(".name-value").html("<?php echo $userFullName;?>");
            $(".wrap-login100-nxtPage").css("margin-top", 0);
            if (isExist == true) {
               window.location = 'exist-form.php?aut_id='+autoGenId;
            }
            else{
               window.location = 'not-exist-form.php?aut_id='+autoGenId;
            }
        }
 
</script>