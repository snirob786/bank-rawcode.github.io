<?php
    include_once 'init.php';
    include_once 'FPDF/fpdf.php';

    $pdf = new FPDF('P','mm','A4');
    $db = new DB();
    $specialId = $db->real_escape($_GET['special_id']);


    $sql = "SELECT * FROM tax_payers_data WHERE tax_payers_data_unique_ID = '$specialId'";
    $result = $db->select($sql);
    $ownder_data = $result->fetch_assoc();

    $pdf->AddPage();

//    Set font to ariel,bold,14pt
$pdf->SetFont('Times','',18);
$pdf->Cell(200,20,"HBC Tax & Accounting Inc.","0","1","C");



//    Set font to ariel,bold,14pt
$pdf->SetFont('Times','',14);
$pdf->Cell(200,20,"Taxpayer Information","0","1","C");

//    User Name Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(40,10,"Name",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(150,10,ucfirst($ownder_data['tax_payers_data_fname']).' '.ucfirst($ownder_data['tax_payers_data_mname']).' '.ucfirst  ($ownder_data['tax_payers_data_lname']),1,1,"C");


//    User SSN Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(40,10,"Soc. Sec. No.",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(150,10,get_ssn_display_dashes($ownder_data['tax_payers_data_ssn']),1,1,"C");


//    User Date of Birth Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(40,10,"Date of Birth",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(150,10,date("m/d/Y",strtotime($ownder_data['tax_payers_data_dob'])),1,1,"C");

//    User Occupation Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(40,10,"Occupation",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(150,10,ucfirst($ownder_data['tax_payers_data_ocupation']),1,1,"C");


//    User Work Phone Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(40,10,"Phone",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(150,10,$ownder_data['tax_payers_data_phone'],1,1,"C");

//    User Email Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(40,10,"Email",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(150,10,$ownder_data['tax_payers_data_email'],1,1,"C");


    //    Set font to ariel,bold,14pt
       $pdf->SetFont('Times','',14);
       $pdf->Cell(200,20," Tax Payers Address","0","1","C");
    //    Personal Details
       $pdf->SetLeftMargin(10);
       $pdf->SetTextColor(0,0,0);
       $pdf->SetFont('Arial','',10);
       $pdf->Cell(70,10,"Street Address",1,0,"C");
       $pdf->Cell(20,10,"Apt/Suite",1,0,"C");
       $pdf->Cell(60,10,"City",1,0,"C");
       $pdf->Cell(20,10,"State",1,0,"C");
       $pdf->Cell(20,10,"Zip",1,1,"C");

    //    Personal Details Data
    $pdf->Cell(70,10,ucfirst($ownder_data['tax_payers_data_street']),1,0,"C");
    $pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_apt']),1,0,"C");
    $pdf->Cell(60,10,ucfirst($ownder_data['tax_payers_data_city']),1,0,"C");
    $pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_state']),1,0,"C");
    $pdf->Cell(20,10,$ownder_data['tax_payers_data_zip'],1,1,"C");

    //    Set font to ariel,bold,14pt
    $pdf->SetFont('Times','',14);
    $pdf->Cell(200,20,"Spouse Information","0","1","C");


    //    User Wife's Name Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(40,10,"Name",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(150,10,ucfirst($ownder_data['tax_payers_data_spfname']).' '.ucfirst($ownder_data['tax_payers_data_spmname']).' '.ucfirst($ownder_data['tax_payers_data_splname']),1,1,"C");


//    User Owner's Wife SSN Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(40,10,"Soc. Sec. No.",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(150,10,get_ssn_display_dashes($ownder_data['tax_payers_data_spssn']),1,1,"C");



//    User Owner's Wife Date of Birth Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(40,10,"Date of Birth",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(150,10,date("m/d/Y",strtotime($ownder_data['tax_payers_data_spdob'])),1,1,"C");

//    User Owner's Wife Occupation Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(40,10,"Occupation",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(150,10,ucfirst($ownder_data['tax_payers_data_spocupation']),1,1,"C");

    //    User Owner's Wife Work Phone Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(40,10,"Phone",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(150,10,$ownder_data['tax_payers_data_spphone'],1,1,"C");

    //    User Owner's Wife Email Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(40,10,"Email",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(150,10,$ownder_data['tax_payers_data_spemail'],1,1,"C");


    //    Set font to ariel,bold,14pt
    $pdf->SetFont('Times','',14);
    $pdf->Cell(200,20," Tax Payers Spouse Address","0","1","C");
    //    Spouse Address Heading Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(60,10,"Spouse ".'\n'."Street Address",1,0,"C");
    $pdf->Cell(30,10,"Spouse Apt/Suite",1,0,"C");
    $pdf->Cell(40,10,"Spouse City",1,0,"C");
    $pdf->Cell(30,10,"Spouse State",1,0,"C");
    $pdf->Cell(30,10,"Spouse Zip",1,1,"C");

    //    Spouse Address Data
    $pdf->Cell(60,10,ucfirst($ownder_data['tax_payers_data_spstreet']),1,0,"C");
    $pdf->Cell(30,10,ucfirst($ownder_data['tax_payers_data_spapt']),1,0,"C");
    $pdf->Cell(40,10,ucfirst($ownder_data['tax_payers_data_spcity']),1,0,"C");
    $pdf->Cell(30,10,ucfirst($ownder_data['tax_payers_data_spstate']),1,0,"C");
    $pdf->Cell(30,10,$ownder_data['tax_payers_data_spzip'],1,1,"C");


    //    Alimony Heading
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(140,10,"Did you pay or receive alimony in 2021?",1,0,"C");
    $pdf->Cell(50,10,ucfirst($ownder_data['tax_payers_data_rcvalimony']),1,1,"C");

    $pdf->Cell(140,10,"Amount of the alimony",1,0,"C");
    $pdf->Cell(50,10,ucfirst($ownder_data['tax_payers_data_rcvalimonyamnt']),1,1,"C");

    $pdf->Cell(140,10,"Recipient's SSN",1,0,"C");
    $pdf->Cell(50,10,ucfirst($ownder_data['tax_payers_data_rcpntssn']),1,1,"C");

    $pdf->Cell(140,10,"Date of divorce or separation",1,0,"C");
    $pdf->Cell(50,10,ucfirst($ownder_data['tax_payers_data_doseparation']),1,1,"C");

//    Set font to ariel,bold,14pt
    $pdf->SetFont('Times','',14);
    $pdf->Cell(200,20,"Personal Information","0","1","C");
//    Personal Info Joint Header:
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(95,10,"Filing Status",1,0,"C");
    $pdf->Cell(95,10,"Spouse Death Date",1,1,"C");
    $pdf->Cell(95,10,ucwords(str_replace('_',' ',$ownder_data['tax_payers_data_marital_status'])),1,0,"C");
    $pdf->Cell(95,10,$ownder_data['tax_payers_data_spousedead'],1,1,"C");

    $pdf->Ln(5);

    $pdf->Cell(63.3,10,"",1,0,"C");
    $pdf->Cell(63.3,10,"Is Blind?",1,0,"C");
    $pdf->Cell(63.3,10,"Is Disabled?",1,1,"C");

    $pdf->Cell(63.3,10,"Tax Payer",1,0,"C");
    $pdf->Cell(63.3,10,ucfirst($ownder_data['tax_payers_data_isblind']),1,0,"C");
    $pdf->Cell(63.3,10,ucfirst($ownder_data['tax_payers_data_isdisable']),1,1,"C");

    $pdf->Cell(63.3,10,"Spouse",1,0,"C");
    $pdf->Cell(63.3,10,ucfirst($ownder_data['tax_payers_data_isspblind']),1,0,"C");
    $pdf->Cell(63.3,10,ucfirst($ownder_data['tax_payers_data_isspdisable']),1,0,"C");

    //    Dependant Information
    $pdf->Ln(10);


    //    Dependant Sub Header
    $pdf->SetFont('Times','',14);
    $pdf->Cell(200,20,"Dependant Information","0","1","C");


    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);

    $ownerSnn = $ownder_data['tax_payers_data_ssn'];
    $depSql = "SELECT * FROM tax_payers_dependants_data WHERE tax_payers_dependants_data_owner_ssn = '$ownerSnn'";
    $depResult = $db->select($depSql);

    if ($depResult->num_rows <=0){
        $pdf->Cell(190,10,"No Dependant Data Found",1,1,"C");
    } else{

        //    Dependant Header
        $pdf->Cell(47.5,10,"Name",1,0,"C");
        $pdf->Cell(47.5,10,"Relationship",1,0,"C");
        $pdf->Cell(45,10,"DOB",1,0,"C");
        $pdf->Cell(50,10,"SSN",1,1,"C");

        while ($depData = $depResult->fetch_assoc()){
            $pdf->Cell(47.5,10,ucfirst($depData['tax_payers_dependants_data_depname']),1,0,"C");
            $pdf->Cell(47.5,10,ucfirst($depData['tax_payers_dependants_data_rel']),1,0,"C");
            $pdf->Cell(45,10,date("M d, Y",strtotime($depData['tax_payers_dependants_data_depdob'])),1,0,"C");
            $pdf->Cell(50,10,get_ssn_display_dashes($depData['tax_payers_dependants_data_depssn']),1,1,"C");
        }
    }

    $pdf->Ln(5);

    $ownerSnn = $ownder_data['tax_payers_data_ssn'];
    $depSql = "SELECT * FROM tax_payers_dependants_data WHERE tax_payers_dependants_data_owner_ssn = '$ownerSnn'";
    $depResult = $db->select($depSql);

    if ($depResult->num_rows >0){
        $pdf->Cell(47.5,10,"Name",1,0,"C");
        $pdf->Cell(47.5,10,"Months Lived",1,0,"C");
        $pdf->Cell(45,10,"Is Disable",1,0,"C");
        $pdf->Cell(45,10,"Is Student",1,1,"C");

        while ($depData2 = $depResult->fetch_assoc()){
            $pdf->Cell(47.5,10,ucfirst($depData2['tax_payers_dependants_data_depname']),1,0,"C");
            $pdf->Cell(47.5,10,ucfirst($depData2['tax_payers_dependants_data_deplived']),1,0,"C");
            $pdf->Cell(45,10,ucfirst($depData2['tax_payers_dependants_data_depdsiabled']),1,0,"C");
            $pdf->Cell(45,10,ucfirst($depData2['tax_payers_dependants_data_depfullstudent']),1,1,"C");
        }
    }


//  Tax Payers Other Information
    $pdf->SetFont('Times','',14);
    $pdf->Cell(200,20,"General Questionnaires","0","1","C");


    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',12);


//    Question 1:
    $pdf->Cell(10,10,"1.",0,0,"C");
    $pdf->Cell(160,10,"Did you name, address or marital status change during the year?",0,0,"L");
    $pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_addresschange']),0,1,"C");

//    Question 2:
    $pdf->Cell(10,10,"2.",0,0,"C");
    $pdf->Cell(160,10,"Are you being claimed as dependent on another tax return?",0,0,"L");
    $pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_claimeddependant']),0,1,"C");

//    Question 3:
    $pdf->Cell(10,10,"3.",0,0,"C");
    $pdf->Cell(160,10,"Were you notified by the IRS or STATE of a change to any prior year tax return?",0,0,"L");
    $pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_notifiedirs']),0,1,"C");
//    Question 4:
    $pdf->Cell(10,10,"4.",0,0,"C");
    $pdf->Cell(160,10,"Are you (or your spouse) blind or permanently disabled?",0,0,"L");
    $pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_permdisabled']),0,1,"C");

//    Question 5:
    $pdf->Cell(10,10,"5.",0,0,"C");
    $pdf->Cell(160,10,"Do you have health insurance last year?",0,0,"L");
    $pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_healthinsurance']),0,1,"C");

//    Question 6:
    $pdf->Cell(10,10,"6.",0,0,"C");
    $pdf->Cell(160,10,"Did you receive form 1095-a from marketplace?",0,0,"L");
    $pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_marketplace']),0,1,"C");
//    Question 7:
    $pdf->Cell(10,10,"7.",0,0,"C");
    $pdf->Cell(160,10,"Did you receive rent from real estate or other property?",0,0,"L");
    $pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_rentfrom']),0,1,"C");
//    Question 8:
    $pdf->Cell(10,10,"8.",0,0,"C");
    $pdf->Cell(160,10,"Do you have a foreign bank account, trust, or business?",0,0,"L");
    $pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_foreignbankaccount']),0,1,"C");


//    Question 9:
$string = "Were there any births, deaths, marriages, divorces or adoptions in your immediate family?";
pdf_call_function($pdf,$string,"9.",ucfirst($ownder_data['tax_payers_data_immediatefamilyadoptaion']));


//    Question 10:
$pdf->Cell(10,10,"10.",0,0,"C");
$pdf->Cell(160,10,"Did you own $50,000 or more in foreign financial assets?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_moreforeignfinance']),0,1,"C");

//    Question 11:
$pdf->Cell(10,10,"11.",0,0,"C");
$pdf->Cell(160,10,"Do you have any foreign income, bank account, trust or business?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_foreignincome']),0,1,"C");

//    Question 12:
$pdf->Cell(10,10,"12.",0,0,"C");
$pdf->Cell(160,10,"Did you receive any distribution from an IRA, profit sharing or pension plan?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_pensionplan']),0,1,"C");

//    Question 13:
$pdf->Cell(10,10,"13.",0,0,"C");
$pdf->Cell(160,10,"Do you have a Medical or Health Savings Account (MSA or HAS)?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_msa_has']),0,1,"C");

//    Question 14:
$pdf->Cell(10,10,"14.",0,0,"C");
$pdf->Cell(160,10,"Did you buy, sell, or use any digital currency during the year?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_digitalcurrency']),0,1,"C");

//    Question 15:

$string = "Did you pay interest on a student loan for yourself, your spouse, or your dependent during the year?";
pdf_call_function($pdf,$string,"15.",ucfirst($ownder_data['tax_payers_data_interestonstudentloan']));


//    Question 16:
$pdf->Cell(10,10,"16.",0,0,"C");
$pdf->Cell(160,10,"Did you receive 1098 T (tuition form) for yourself, your spouse or your dependents?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_tutionform1098']),0,1,"C");

//    Question 17:
$string = "Have you or your dependents taken a distribution from a qualified Tuition program (QTP) or 529 plan during the year?";
pdf_call_function($pdf,$string,"17.",ucfirst($ownder_data['tax_payers_data_dependantqtp']));

//    Question 18:
$pdf->Cell(10,10,"18.",0,0,"C");
$pdf->Cell(160,10,"Did you purchase a new alternative technology vehicle or electric vehicle?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_techvehicle']),0,1,"C");

//    Question 19:
$string = "Did you install any energy property to your residence such as solar water heaters, generators or fuel cells or energy efficient improvements such as exterior doors or windows, insulation, heat pumps, furnaces, central air conditioners or water heaters?";
pdf_call_function($pdf,$string,"19.",ucfirst($ownder_data['tax_payers_data_energyproperty']));


//    Question 20:
    
    $pdf->Cell(10,11,"20.",0,0,"C");
    $pdf->Cell(160,10,"Did you purchase or sell a main home during the year",0,0,"L");
    $pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_purchasenewhome']),0,1,"C");

//    Question 21:
    $pdf->Cell(10,11,"21.",0,0,"C");
    $pdf->Cell(160,10,"Did you sell or transfer any stock or sell rental or investment property?",0,0,"L");
    $pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_didusell']),0,1,"C");

//    Question 22:
    $pdf->Cell(10,11,"22.",0,0,"C");
    $pdf->Cell(160,10,"Did you make any charitable contributions in 2021?",0,0,"L");
    $pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_donate_charitable']),0,1,"C");

//    Question 23:
    $pdf->Cell(10,11,"23.",0,0,"C");
    $pdf->Cell(160,10,"Did you have any debts cancelled, forgiven, or refinanced?",0,0,"L");
    $pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_debtscancelled']),0,1,"C");


//    Question 24:
    $pdf->Cell(10,11,"24.",0,0,"C");
    $pdf->Cell(160,10,"Are you involved in bankruptcy, foreclosure, repossession, or had any debt (including credit cards) cancelled?",0,0,"L");
    $pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_bankruptcy']),0,1,"C");

//    Question 25:
$pdf->Cell(10,11,"25.",0,0,"C");
$pdf->Cell(160,10,"Did you receive both stimulus checks from IRS?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_stimulus_irs']),0,1,"C");

//    Question 26:
$pdf->Cell(10,11,"26.",0,0,"C");
$pdf->Cell(160,10,"Did you purchase health insurance through a public exchange?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_purchase_health']),0,1,"C");

//    Question 27:
$pdf->Cell(10,11,"27.",0,0,"C");
$pdf->Cell(160,10,"Will there be any significant changes in income or deductions next year, such as retirement?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_ded_retirement']),0,1,"C");

//    Question 28:
$pdf->Cell(10,11,"28.",0,0,"C");
$pdf->Cell(160,10,"Did you pay anyone for domestic services in your home?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_pay_domestic']),0,1,"C");

//    Question 29:
$pdf->Cell(10,11,"29.",0,0,"C");
$pdf->Cell(160,10,"Did you purchase a new energy-efficient car, truck, or van?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_pur_new_energy']),0,1,"C");

//    Question 30:
$pdf->Cell(10,11,"30.",0,0,"C");
$pdf->Cell(160,10,"Are you a member of the military?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_mem_military']),0,1,"C");

//    State of residency:
$pdf->Cell(160,10,"State of residency",1,0,"L");
$pdf->Cell(30,10,ucfirst($ownder_data['tax_payers_data_stateofresidency']),1,1,"C");

//    Question 31:
$pdf->Cell(10,11,"31.",0,0,"C");
$pdf->Cell(160,10,"Were you a citizen of or lived in a foreign country?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_lived_foreign']),0,1,"C");

//    Foreign country:
$pdf->Cell(160,10,"Foreign country",1,0,"L");
$pdf->Cell(30,10,ucfirst($ownder_data['tax_payers_data_foreigncountryname']),1,1,"C");

//    Question 32:
$pdf->Cell(10,11,"32.",0,0,"C");
$pdf->Cell(160,10,"Did you receive any economic impact payments (stimulus payments) during 2021?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_rcv_ecn_impact']),0,1,"C");

//    Impact payments amount:
$pdf->Cell(160,10,"Impact payments amount",1,0,"L");
$pdf->Cell(30,10,ucfirst($ownder_data['tax_payers_data_impactpayments']),1,1,"C");

//    Payment received date:
$pdf->Cell(160,10,"Payment received date",1,0,"L");
$pdf->Cell(30,10,ucfirst($ownder_data['tax_payers_data_impactpaymentsdate']),1,1,"C");

//    Question 33:
$pdf->Cell(10,11,"33.",0,0,"C");
$pdf->Cell(160,10,"Were any children born or adopted in 2021?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_adopted_child']),0,1,"C");

//    Question 34:
$pdf->Cell(10,11,"34.",0,0,"C");
$pdf->Cell(160,10,"Did you receive any advance Child Tax Credit payment?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_child_tax_credit']),0,1,"C");

//    Question 35:
$pdf->Cell(10,11,"35.",0,0,"C");
$pdf->Cell(160,10,"Do you have any children who have unearned income of $1,100 or more?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_unearned_children']),0,1,"C");

//    Question 36:
$pdf->Cell(10,11,"36.",0,0,"C");
$pdf->Cell(160,10,"Did you roll over any amounts from a retirement account in 2021?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_rollover_retirement_acnt']),0,1,"C");

//    Question 37:
$pdf->Cell(10,11,"37.",0,0,"C");
$pdf->Cell(160,10,"Did you receive any income from an installment sale?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_installmentsale']),0,1,"C");

//    Question 38:
$pdf->Cell(10,11,"38.",0,0,"C");
$pdf->Cell(160,10,"Did you have any investments become worthless or were you a victim of investment theft in 2021?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_investment_theft']),0,1,"C");

//    Question 39:
$pdf->Cell(10,11,"39.",0,0,"C");
$pdf->Cell(160,10,"Were you granted, or did you exercise, any employee stock options during 2021?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_employee_stock']),0,1,"C");

//    Question 40:
$pdf->Cell(10,11,"40.",0,0,"C");
$pdf->Cell(160,10,"Did you receive, sell, send, exchange, or otherwise dispose of any financial interest in any virtual currency?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_dispose_financial_interest']),0,1,"C");

//    Question 41:
$pdf->Cell(10,11,"41.",0,0,"C");
$pdf->Cell(160,10,"Did you, or do you plan to, contribute money before April 18, 2022 to an HSA for 2021?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_contributee_hsa']),0,1,"C");

//    Question 42:
$pdf->Cell(10,11,"42.",0,0,"C");
$pdf->Cell(160,10,"Did you pay any interest on a loan for a boat or RV that has living quarters?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_interest_loan_rv']),0,1,"C");

//    Question 43:
$pdf->Cell(10,11,"43.",0,0,"C");
$pdf->Cell(160,10,"Did you pay sales taxes on a major purchase in 2021, such as a vehicle, boat, or home?",0,0,"L");
$pdf->Cell(20,10,ucfirst($ownder_data['tax_payers_data_taxes_major_purchase']),0,1,"C");


    $pdf->Ln(5);

    //  Additional Information
    $pdf->SetFont('Times','',14);
    $pdf->Cell(200,20,"Additional Note","0","1","C");

    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    if (empty($ownder_data['tax_payers_data_additional_note'])){
        $pdf->Cell(190,10,"No Additonal Note Here",1,1,"C");
    }else{
        $pdf->Cell(190,50,$ownder_data['tax_payers_data_additional_note'],1,1,"C");
    }


    $pdf->Ln(5);
//    Consent:
   //    Consent:
    $pdf->setFillColor(0,0,0);
    $pdf->SetDrawColor(255,255,255);
    $pdf->SetLineWidth(5);
    $pdf->Cell(5,7,'','T',0,"C",true);
    $pdf->SetLineWidth(0.2);
    $pdf->SetDrawColor(0,0,0);
    $pdf->setFillColor(255,255,255);
    $pdf->Cell(165,10,'I declare all the above information is correct (Name initials will be saved as your consent): '.substr($ownder_data['tax_payers_data_fname'],0,1).substr($ownder_data['tax_payers_data_mname'],0,1).substr  ($ownder_data['tax_payers_data_lname'],0,1),0,1,"C");

    
    $pdf->Output('D',$specialId.'.pdf',true);