<?php
include_once 'header.php';
include_once 'includes/dbh.inc.php';
$emptySFName = false;
$autoGenId = "";
$autoGenId =$_SESSION["autoGenId"];
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $_SESSION["autoGenId"]= $autoGenId;
    $Ssn = "";
    $sql = "SELECT * FROM userdata WHERE autoGenId = '$autoGenId';";
    $result = mysqli_query($conn, $sql);
    $checkResult = mysqli_num_rows($result);
    if ($checkResult>0) {
        $row =  mysqli_fetch_assoc($result);
        $userFullName = $row["fName"]. " ".$row["lName"];
        $Ssn = $row["SSN"];
    }

    $ownerOccupation = $sfName = $slName = $spouseSsn = $spouseOccupation = $homePhone = $email = "";
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
        $spouseSsn = $detailsRow['spouseSsn'];
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
    }
}
?>
<script type="text/javascript">
    $(document).ready(function() {
        $(".logo").width('10%');
        if ( $("input").val !="" ) {
            $("label").css("top","-20px");  
        }
        if ( $("input").val =="") {
            $("label").css("top","0"); 
        }
        $(".inputOccupation").val("<?php echo $ownerOccupation; ?>");
        $(".spSsn-value").val("<?php  echo $spouseSsn;?>");
        $(".inputsfName-value").val("<?php echo $sfName; ?>");
        $(".inputslName-value").val("<?php echo $slName; ?>");
        $(".inputSpouseOccupation-value").val("<?php echo $spouseOccupation; ?>");
        $(".homePhone-value").val("<?php echo $homePhone; ?>");
        $(".inputEmail-value"). val("<?php echo $email; ?>");
        $(".streetAddress-value").val("<?php echo $streetAddress; ?>");
        $(".city-value").val("<?php echo $city; ?>");
        $(".state-value").val("<?php echo $state; ?>");
        $(".inputzip-value").val("<?php echo $zip; ?>");
        $('input:radio[name=isBlindOwner][value="<?php echo $isBlindOwner;?>"]').prop("checked",true);
        $('input:radio[name=isBlindSpouse][value="<?php echo $isBlindSpouse;?>"]').prop("checked",true);
        $('input:radio[name=isDisableOwner][value="<?php echo $isDisableOwner;?>"]').prop("checked",true);
        $('input:radio[name=isDisableSpouse][value="<?php echo $isDisableSpouse;?>"]').prop("checked",true);
        $('input:radio[name=isMarried][value="<?php echo $isMarried; ?>"]').prop("checked",true);
        $('input:radio[name=isSelfEmployee][value="<?php echo $isSelfEmployee;?>"]').prop("checked",true);
        $('input:radio[name=isRaisingAnimals][value="<?php echo $isRaisingAnimals;?>"]').prop("checked",true);
        $('input:radio[name=isRentRealEstate][value="<?php echo $isRentRealEstate;?>"]').prop("checked",true);
        $('input:radio[name=isRecieveIncome][value="<?php echo $isRecieveIncome;?>"]').prop("checked",true);
        $('input:radio[name=isWithdrawWriteCheck][value="<?php echo $isWithdrawWriteCheck;?>"]').prop("checked",true);
        $('input:radio[name=isForeignAccount][value="<?php echo $isForeignAccount;?>"]').prop("checked",true);
        $('input:radio[name=isProvideHome][value="<?php echo $isProvideHome;?>"]').prop("checked",true);
        $('input:radio[name=isRecieveIRS][value="<?php echo $isRecieveIRS;?>"]').prop("checked",true);
        $('input:radio[name=isAnyBirthOrDeath][value="<?php echo $isAnyBirthOrDeath;?>"]').prop("checked",true);
        $('input:radio[name=isGiftHighPrice][value="<?php echo $isGiftHighPrice;?>"]').prop("checked",true);
        $('input:radio[name=isDebtCancelled][value="<?php echo $isDebtCancelled;?>"]').prop("checked",true);
        $('input:radio[name=isBankruptcy][value="<?php echo $isBankruptcy;?>"]').attr("checked",true);
        $('.inputRentPaid-value').val("<?php echo $isRentPaid;?>");
        $('input:radio[name=isHeatIncluded][value="<?php echo $isHeatIncluded;?>"]').prop("checked",true);
        $('input:radio[name=isInterestStudent][value="<?php echo $isInterestStudent;?>"]').prop("checked",true);
        $('input:radio[name=isPayExpenses][value="<?php echo $isPayExpenses;?>"]').prop("checked",true);
        $('input:radio[name=isChildUnearned][value="<?php echo $isChildUnearned;?>"]').prop("checked",true);
        $('input:radio[name=isPurchaseVehicle][value="<?php echo $isPurchaseVehicle;?>"]').prop("checked",true);
        $('input:radio[name=isInstallEnergyProperty][value="<?php echo $isInstallEnergyProperty;?>"]').prop("checked",true);
        $('input:radio[name=isOwnForeignAssets][value="<?php echo $isOwnForeignAssets;?>"]').prop("checked",true);
        $(".wrap-login100").width('50%');
        $(".form-message").html("You are welcome. <br>We got your data into our server. <br>Please have a look and edit if needed.");
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
            <div class="wrap-login100 update-wrap">
                <!-- -------------------------Need to be think later: ----------------------------------------------->
                <form class="login100-form validate-form">
                 
                    <div>
                        <div id="efUpdate" class="efUpdate"></div>
                            <div class="wrap-inputName validate-input" data-validate = "Enter valid Occupation">
                                <input id="ownerOccupation" class="inputOccupation" type="text" name="ownerOccupation" >
                                <label>Occupation</label>
                            </div>
                            <div class="wrap-inputName validate-input" data-validate = "Enter valid Name">
                                <input id="sfName" class="inputsfName-value" type="text" name="sfName" >
                                <label>Spouse First Name</label>
                                <!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
                            </div>
                            <div class="wrap-inputName validate-input" data-validate = "Enter valid Name">
                                <input id="slName" class="inputslName-value" type="text" name="slName" >
                                <label>Spouse Last Name</label>
                                <!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
                            </div>
                            <div class="wrap-inputSsn validate-input" data-validate = "Enter valid SSN">
                                <input id="spouseSsn" class="spSsn-value" type="text" name="spouseSsn" >
                                <label>Spouse Social Security Number</label>
                                <!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
                            </div>
                            <!-- -------------------Date will be solved later------------------- -->
                            <div class="input-group date" data-provide="datepicker">
                                <input class="form-control" id="spouseBdate" name="spouseBdate" placeholder="Enter your spouse Bday" type="text" data-date-end-date="0d" autocomplete="off" />
                                <label class="ownerBdayLabel">Enter your spouse's Birthday</label>
                                <div class="input-group-addon">
                                    <span class="zmdi zmdi-calendar"></span>
                                </div>
                            </div>
                            <div class="wrap-inputName validate-input" data-validate = "Enter valid Occupation">
                                <input id="spouseOccupation" class="inputSpouseOccupation-value" type="text" name="spouseOccupation" >
                                <label>Enter Spouse Occupation</label>
                                <!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
                            </div>
                            <div class="wrap-inputName validate-input" data-validate = "Enter valid Occupation">
                                <input id="homePhone" class="homePhone-value" type="number" name="homePhone" >
                                <label>Enter Home Phone</label>
                                <!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
                            </div>
                            <div class="wrap-inputName validate-input" data-validate = "Enter valid Email">
                                <input id="email" class="inputEmail-value" type="email" name="email" required="">
                                <label>Enter your email address</label>
                                <!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
                            </div>
                            <div class="wrap-inputName validate-input" data-validate = "Enter valid Address">
                                <input id="streetAddress" class="streetAddress-value" type="text" name="streetAddress" >
                                <label>Enter Street address</label>
                                <!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
                            </div>
                            <div class="wrap-inputName validate-input" data-validate = "Enter valid City">
                                <input id="city" class="city-value" type="text" name="city" >
                                <label>Enter City</label>
                                <!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
                            </div>
                            <div class="wrap-inputName validate-input" data-validate = "Enter valid State">
                                <input id="state" class="state-value" type="text" name="state" >
                                <label>Enter State</label>
                                <!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
                            </div>
                            <div class="wrap-inputName validate-input" data-validate = "Enter valid Zip">
                                <input id="zip" class="inputzip-value" type="text" name="zip" >
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
                                <div class="wrap-inputName no-border float-left custom-radio-group" >
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
                                        <input id="widow" class="isMarried" type="radio" name="isMarried" value="widow" >
                                        <span class="custom-radio-text">Widow</span>
                                    </div>
                                    <!-- -------------------------Date will be solved later---------------------------- -->
                                    <div id="dateBlock" class="input-group date marriageDate" data-provide="datepicker">
                                        <input id="spouseDeathDate" class="form-control"  name="spouseDeathDate" placeholder="mm/dd/yyyy" type="text" data-date-end-date="0d" autocomplete="off" />
                                        <div class="input-group-addon">
                                            <span class="zmdi zmdi-calendar"></span>
                                        </div>
                                    </div>
                                    <!-- <span class="focus-inputSsn" data-placeholder="Social Security Number"></span> -->
                                </div>
                            </div>
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
                            <div id="isRecieveIRS">
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
                                        <input id="isRentPaid" class="inputRentPaid-value" type="text" name="isRentPaid" >
                                        <label id="radio-input-label">13. (a)If you paid rent, how much did you pay?</label>
                                    </div>
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
                        </div>
                        <div class="container-submit-form-btn save-update-container">
                            <div class="wrap-login100-form-btn update-container">
                                <div class="login100-form-bgbtn"></div>
                                <button id="update" class="login100-form-btn update" name="update">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="js/updater.js"></script>
<?php include_once 'footer.php'; ?>