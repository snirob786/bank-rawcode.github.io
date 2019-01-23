 $(document).ready(function(){
    $("#submit").click(function(event){
        event.preventDefault();
        var ownerOccupation = $('#ownerOccupation').val();
        var sfName = $('#sfName').val();
        var slName = $('#slName').val();
        var spouseSsn = $('#spouseSsn').val();
        var spouseBdate = $("#spouseBdate").val();
        var spouseOccupation = $("#spouseOccupation").val();
        var homePhone = $("#homePhone").val();
        var email = $("#email").val();
        var streetAddress = $("#streetAddress").val();
        var city = $("#city").val();
        var state = $("#state").val();
        var zip = $("#zip").val();
        var isBlindOwner = $(".isBlindOwner:checked").val();
        var isBlindSpouse = $(".isBlindSpouse:checked").val();
        var isDisableOwner = $(".isDisableOwner:checked").val();
        var isDisableSpouse = $(".isDisableSpouse:checked").val();
        var isMarried = $(".isMarried:checked").val();
        var isSelfEmployee = $(".isSelfEmployee:checked").val();
        var isRaisingAnimals =$(".isRaisingAnimals:checked").val();
        var isRentRealEstate =$(".isRentRealEstate:checked").val();
        var isRecieveIncome =$(".isRecieveIncome:checked").val();
        var isWithdrawWriteChecks =$(".isWithdrawWriteChecks:checked").val();
        var isForeignAccount =$(".isForeignAccount:checked").val();
        var isProvideHome =$(".isProvideHome:checked").val();
        var isRecieveIRS = $(".isRecieveIRS:checked").val();
        var isAnyBirthOrDeath = $(".isAnyBirthOrDeath:checked").val();
        var isGiftHighPrice = $(".isGiftHighPrice:checked").val();
        var isDebtCancelled = $(".isDebtCancelled:checked").val();
        var isBankruptcy = $(".isBankruptcy:checked").val();
        var isRentPaid = $("#isRentPaid").val();
        var isHeatIncluded = $(".isHeatIncluded:checked").val();
        var isInterestStudent = $(".isInterestStudent:checked").val();
        var isPayExpenses = $(".isPayExpenses:checked").val();
        var isChildUnearned = $(".isChildUnearned:checked").val();
        var isPurchaseVehicle = $(".isPurchaseVehicle:checked").val();
        var isInstallEnergyProperty = $(".isInstallEnergyProperty:checked").val();
        var isOwnForeignAssets = $(".isOwnForeignAssets:checked").val();
        var cFName = $("input[name='Fullname[]']").serialize();
        var CSsn = $("input[name='CSsn[]']").serialize();
        var CBdate = $("input[name='CBdate[]']").serialize();
        var submit = $("#submit").val();
        $(".form-message").load("not-exist-validator.php", {
            ownerOccupation : ownerOccupation,
            sfName:sfName,
            slName:slName,
            spouseSsn: spouseSsn,
            spouseBdate : spouseBdate,
            spouseOccupation: spouseOccupation,
            homePhone: homePhone,
            email: email,
            streetAddress: streetAddress,
            city: city,
            state: state,
            zip: zip,
            isBlindOwner: isBlindOwner,
            isBlindSpouse: isBlindSpouse,
            isDisableOwner: isDisableOwner,
            isDisableSpouse : isDisableSpouse,
            isMarried: isMarried,
            isSelfEmployee: isSelfEmployee,
            isRaisingAnimals: isRaisingAnimals,
            isRentRealEstate: isRentRealEstate,
            isRecieveIncome: isRecieveIncome,
            isWithdrawWriteChecks: isWithdrawWriteChecks,
            isForeignAccount: isForeignAccount,
            isProvideHome: isProvideHome,
            isRecieveIRS: isRecieveIRS,
            isAnyBirthOrDeath: isAnyBirthOrDeath,
            isGiftHighPrice: isGiftHighPrice,
            isDebtCancelled: isDebtCancelled,
            isBankruptcy: isBankruptcy,
            isRentPaid: isRentPaid,
            isHeatIncluded: isHeatIncluded,
            isInterestStudent: isInterestStudent,
            isPayExpenses: isPayExpenses,
            isChildUnearned: isChildUnearned,
            isPurchaseVehicle: isPurchaseVehicle,
            isInstallEnergyProperty: isInstallEnergyProperty,
            isOwnForeignAssets: isOwnForeignAssets,
            cFName:cFName,
            CSsn:CSsn,
            CBdate: CBdate,
            submit: submit
        });
    });
});

