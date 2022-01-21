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
    $pdf->SetFont('Times','B',20);
    $pdf->Cell(200,10,"2021 Individual Taxpayer Organizer","B","1","L");
$pdf->Ln(5);

//    Set font to ariel,bold,14pt
$pdf->SetFont('Times','B',16);
$pdf->Cell(200,7,"HBC Tax & Accounting Inc.","0","1","C");

//    Set font to ariel,bold,14pt
$pdf->SetFont('Times','',12);
$pdf->Cell(95,7,"Address:","0","0","L");

//    Set font to ariel,bold,14pt
$pdf->SetFont('Times','',12);
$pdf->Cell(95,7,"Phone: 703-942-8443, 703-890-2907","0","1","R");

//    Set font to ariel,bold,14pt
$pdf->SetFont('Times','',12);
$pdf->Cell(95,7,"200 Little Falls St, #502 Falls Church, VA 22046","0","0","L");


//    Set font to ariel,bold,14pt
$pdf->SetFont('Times','',12);
$pdf->Cell(95,7,"Website: www.hbctaxacct.com","0","1","R");

//    Set font to ariel,bold,14pt
$pdf->SetFont('Times','',12);
$pdf->Cell(95,7,"7857 Heritage Dr, #D Annandale, VA 22003","0","0","L");

//    Set font to ariel,bold,14pt
$pdf->SetFont('Times','',12);
$pdf->Cell(95,7,"Email: info@hbctaxacct.com","0","1","R");



//    Set font to ariel,bold,14pt
    $pdf->SetFont('Times','',18);
    $pdf->Cell(200,20,"Taxpayer Information","0","1","C");

//    User Name Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Name",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,ucfirst($ownder_data['tax_payers_data_fname']).' '.ucfirst($ownder_data['tax_payers_data_mname']).' '.ucfirst  ($ownder_data['tax_payers_data_lname']),1,1,"C");


//    User SSN Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Soc. Sec. No.",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,get_ssn_display_dashes($ownder_data['tax_payers_data_ssn']),1,1,"C");


//    User Date of Birth Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Date of Birth",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,get_dob_display($ownder_data['tax_payers_data_dob']),1,1,"C");

//    User IP Pin
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"IP Pin",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,$ownder_data['tax_payers_data_ip_pin'],1,1,"C");

//    User Occupation Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Occupation",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,ucfirst($ownder_data['tax_payers_data_ocupation']),1,1,"C");


//    User Work Phone Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Phone",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,$ownder_data['tax_payers_data_phone'],1,1,"C");

//    User Email Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Email",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,$ownder_data['tax_payers_data_email'],1,1,"C");

//    Driving License
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Driving License",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,$ownder_data['tax_payers_data_dl_no'],1,1,"C");

//    Driving License State
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Driving License State",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,$ownder_data['tax_payers_data_dl_state'],1,1,"C");

    //    Driving License Issue Date
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Driving License Issue Date",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,get_dob_display($ownder_data['tax_payers_data_dl_issue_date']),1,1,"C");

    //    Driving License Expire Date
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Driving License Expire Date",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,get_dob_display($ownder_data['tax_payers_data_dl_exp_date']),1,1,"C");


$pdf->Ln(10);

    //    Set font to ariel,bold,14pt
       $pdf->SetFont('Times','',18);
       $pdf->Cell(200,20," Taxpayer Address","0","1","C");
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

$pdf->Ln(10);

    //    Set font to ariel,bold,14pt
    $pdf->SetFont('Times','',18);
    $pdf->Cell(200,20,"Spouse Information","0","1","C");


    //    User Wife's Name Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Name",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,ucfirst($ownder_data['tax_payers_data_spfname']).' '.ucfirst($ownder_data['tax_payers_data_spmname']).' '.ucfirst($ownder_data['tax_payers_data_splname']),1,1,"C");


//    User Owner's Wife SSN Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Soc. Sec. No.",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,get_ssn_display_dashes($ownder_data['tax_payers_data_spssn']),1,1,"C");



//    User Owner's Wife Date of Birth Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Date of Birth",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,get_dob_display($ownder_data['tax_payers_data_spdob']),1,1,"C");

//    User IP Pin
$pdf->SetLeftMargin(10);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','',10);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(60,10,"IP Pin",1,0,"C",true);
$pdf->SetLeftMargin(10);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(130,10,$ownder_data['tax_payers_data_sp_ip_pin'],1,1,"C");

//    User Owner's Wife Occupation Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Occupation",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,ucfirst($ownder_data['tax_payers_data_spocupation']),1,1,"C");

    //    User Owner's Wife Work Phone Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Phone",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,$ownder_data['tax_payers_data_spphone'],1,1,"C");

    //    User Owner's Wife Email Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','',10);
    $pdf->SetFillColor(100,100,100);
    $pdf->Cell(60,10,"Email",1,0,"C",true);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,10,$ownder_data['tax_payers_data_spemail'],1,1,"C");

//    Driving License
$pdf->SetLeftMargin(10);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','',10);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(60,10,"Driving License",1,0,"C",true);
$pdf->SetLeftMargin(10);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(130,10,$ownder_data['tax_payers_data_sp_dl_no'],1,1,"C");

//    Driving License State
$pdf->SetLeftMargin(10);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','',10);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(60,10,"Driving License State",1,0,"C",true);
$pdf->SetLeftMargin(10);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(130,10,$ownder_data['tax_payers_data_sp_dl_state'],1,1,"C");

//    Driving License Issue Date
$pdf->SetLeftMargin(10);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','',10);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(60,10,"Driving License Issue Date",1,0,"C",true);
$pdf->SetLeftMargin(10);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(130,10,get_dob_display($ownder_data['tax_payers_data_sp_dl_issue_date']),1,1,"C");

//    Driving License Expire Date
$pdf->SetLeftMargin(10);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','',10);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(60,10,"Driving License Expire Date",1,0,"C",true);
$pdf->SetLeftMargin(10);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(130,10,get_dob_display($ownder_data['tax_payers_data_sp_dl_exp_date']),1,1,"C");


//    Same As Tax Payers Address:
$pdf->SetLeftMargin(10);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','',10);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(60,10,"Address same as Tax Payer",1,0,"C",true);
$pdf->SetLeftMargin(10);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);

if (empty($ownder_data['tax_payers_data_same_as']) || $ownder_data['tax_payers_data_same_as'] === 'no'){
    $pdf->Cell(130,10,"No",1,1,"C");
}else{
    $pdf->Cell(130,10,"Yes",1,1,"C");
}

$pdf->Ln(10);

    //    Set font to ariel,bold,14pt
    $pdf->SetFont('Times','',18);
    $pdf->Cell(200,20,"Spouse Address","0","1","C");
    //    Spouse Address Heading Details
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(60,10,"Spouse Street Address",1,0,"C");
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


$pdf->Ln(10);
//    Set font to ariel,bold,14pt
    $pdf->SetFont('Times','',18);
    $pdf->Cell(200,20,"Personal Information","0","1","C");
//    Personal Info Joint Header:
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(95,10,"Marital Status",1,0,"C");
    $pdf->Cell(95,10,"Spouse Death Date",1,1,"C");
    $pdf->Cell(95,10,ucwords(str_replace('_',' ',$ownder_data['tax_payers_data_marital_status'])),1,0,"C");
    $pdf->Cell(95,10,get_dob_display($ownder_data['tax_payers_data_spousedead']),1,1,"C");

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
    $pdf->Ln(20);


    //    Dependant Sub Header
    $pdf->SetFont('Times','',18);
    $pdf->Cell(200,20,"Dependant Information","0","1","C");


    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);

    $ownerSnn = $ownder_data['tax_payers_data_ssn'];
    $depSql = "SELECT * FROM tax_payers_dependants_data WHERE tax_payers_dependants_data_owner_ssn = '$ownerSnn'";
    $depResult = $db->select($depSql);
    $depCount = 0;

    if ($depResult->num_rows <=0){
        $pdf->Cell(190,10,"No Dependant Data Found",1,1,"C");
    } else{

        while ($depData = $depResult->fetch_assoc()){
            $depCount++;
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(190,10,ucfirst('Dependant No. '.$depCount),1,1,"C");
            $pdf->Ln(5);

            //    Dependents Name
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(255,255,255);
            $pdf->SetFont('Arial','',10);
            $pdf->SetFillColor(100,100,100);
            $pdf->Cell(60,10,"Name",1,0,"C",true);
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(0,0,0);
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,ucfirst($depData['tax_payers_dependants_data_depname']),1,1,"C");

//    Dependents Name
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(255,255,255);
            $pdf->SetFont('Arial','',10);
            $pdf->SetFillColor(100,100,100);
            $pdf->Cell(60,10,"Relationship",1,0,"C",true);
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(0,0,0);
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,ucfirst($depData['tax_payers_dependants_data_rel']),1,1,"C");

            //    Dependents Date of Birth
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(255,255,255);
            $pdf->SetFont('Arial','',10);
            $pdf->SetFillColor(100,100,100);
            $pdf->Cell(60,10,"Date of Birth",1,0,"C",true);
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(0,0,0);
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,get_dob_display($depData['tax_payers_dependants_data_depdob']),1,1,"C");

            //    Dependents SSn
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(255,255,255);
            $pdf->SetFont('Arial','',10);
            $pdf->SetFillColor(100,100,100);
            $pdf->Cell(60,10,"SSN",1,0,"C",true);
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(0,0,0);
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,get_ssn_display_dashes($depData['tax_payers_dependants_data_depssn']),1,1,"C");

            //    Dependents IP Pin
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(255,255,255);
            $pdf->SetFont('Arial','',10);
            $pdf->SetFillColor(100,100,100);
            $pdf->Cell(60,10,"IP Pin",1,0,"C",true);
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(0,0,0);
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,$depData['tax_payers_data_dep_ip_pin'],1,1,"C");


            //    Dependents Income
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(255,255,255);
            $pdf->SetFont('Arial','',10);
            $pdf->SetFillColor(100,100,100);
            $pdf->Cell(60,10,"Income ($)",1,0,"C",true);
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(0,0,0);
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,$depData['tax_payers_data_dep_income'],1,1,"C");

            //    Dependents Month Live with
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(255,255,255);
            $pdf->SetFont('Arial','',10);
            $pdf->SetFillColor(100,100,100);
            $pdf->Cell(60,10,"Month Lived With You",1,0,"C",true);
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(0,0,0);
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,$depData['tax_payers_dependants_data_deplived'],1,1,"C");

            //    is Dependents disabled?
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(255,255,255);
            $pdf->SetFont('Arial','',10);
            $pdf->SetFillColor(100,100,100);
            $pdf->Cell(60,10,"Disabled?",1,0,"C",true);
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(0,0,0);
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,$depData['tax_payers_dependants_data_depdsiabled'],1,1,"C");

            //    is Dependents full time student?
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(255,255,255);
            $pdf->SetFont('Arial','',10);
            $pdf->SetFillColor(100,100,100);
            $pdf->Cell(60,10,"Full time student?",1,0,"C",true);
            $pdf->SetLeftMargin(10);
            $pdf->SetTextColor(0,0,0);
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(130,10,$depData['tax_payers_dependants_data_depfullstudent'],1,1,"C");
            $pdf->Ln(10);

        }
    }


    $pdf->Ln(30);

//  Tax Payers Other Information
    $pdf->SetFont('Times','',18);
    $pdf->Cell(200,20,"General Questionnaires","0","1","C");


    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',12);



//    Alimony Heading
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(140,10,"Did you pay or receive alimony in 2021?",1,0,"C");
    $pdf->Cell(50,10,ucwords(str_replace('_',' ',$ownder_data['tax_payers_data_rcvalimony'])),1,1,"C");

    $pdf->Cell(140,10,"Amount of the alimony",1,0,"C");
    $pdf->Cell(50,10,ucfirst($ownder_data['tax_payers_data_rcvalimonyamnt']),1,1,"C");

    $pdf->Cell(140,10,"Recipient's SSN",1,0,"C");
    $pdf->Cell(50,10,ucfirst($ownder_data['tax_payers_data_rcpntssn']),1,1,"C");

    $pdf->Cell(140,10,"Date of divorce or separation",1,0,"C");
    $pdf->Cell(50,10,get_dob_display($ownder_data['tax_payers_data_doseparation']),1,1,"C");


    $pdf->Ln(20);

//    Question 1:
    $pdf->Cell(10,10,"1.",0,0,"C");
    $pdf->Cell(160,10,"Did your name, address or marital status change during the year?",0,0,"L");
    $pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_addresschange']),0,1,"C");

//    Question 2:
    $pdf->Cell(10,10,"2.",0,0,"C");
    $pdf->Cell(160,10,"Are you being claimed as dependent on another tax return?",0,0,"L");
    $pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_claimeddependant']),0,1,"C");

//    Question 3:
    $pdf->Cell(10,10,"3.",0,0,"C");
    $pdf->Cell(160,10,"Were you notified by the IRS or STATE of a change to any prior year tax return?",0,0,"L");
    $pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_notifiedirs']),0,1,"C");

//    Question 4:
$pdf->Cell(10,10,"4.",0,0,"C");
$pdf->Cell(160,10,"Did you buy, sell, or use any digital currency during the year?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_digitalcurrency']),0,1,"C");

//    Question 5:
$pdf->Cell(10,11,"5.",0,0,"C");
$pdf->Cell(160,10,"Did you receive both stimulus checks from IRS?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_stimulus_irs']),0,1,"C");

//    Question 6:
$pdf->Cell(10,11,"6.",0,0,"C");
$pdf->Cell(160,10,"Did you purchase health insurance through a public exchange?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_purchase_health']),0,1,"C");

//    Question 7:
$pdf->Cell(10,11,"7.",0,0,"C");
$pdf->Cell(160,10,"Did you receive any advance Child Tax Credit payment?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_child_tax_credit']),0,1,"C");


//    Question 8:
    $pdf->Cell(10,10,"8.",0,0,"C");
    $pdf->Cell(160,10,"Did you receive form 1095-a from marketplace?",0,0,"L");
    $pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_marketplace']),0,1,"C");
//    Question 9:
    $pdf->Cell(10,10,"9.",0,0,"C");
    $pdf->Cell(160,10,"Did you receive rent from real estate or other property?",0,0,"L");
    $pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_rentfrom']),0,1,"C");
//    Question 10:
    $pdf->Cell(10,10,"10.",0,0,"C");
    $pdf->Cell(160,10,"Do you have a foreign bank account, trust, or business?",0,0,"L");
    $pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_foreignbankaccount']),0,1,"C");



//    Question 11:
    $pdf->Cell(10,10,"11.",0,0,"C");
    $pdf->Cell(160,10,"Did you own $50,000 or more in foreign financial assets?",0,0,"L");
    $pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_moreforeignfinance']),0,1,"C");

//    Question 12:
$pdf->Cell(10,10,"12.",0,0,"C");
$pdf->Cell(160,10,"Do you have any foreign income, bank account, trust or business?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_foreignincome']),0,1,"C");

//    Question 13:
$pdf->Cell(10,10,"13.",0,0,"C");
$pdf->Cell(160,10,"Did you receive any distribution from an IRA, profit sharing or pension plan?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_pensionplan']),0,1,"C");

//    Question 14:
$pdf->Cell(10,10,"14.",0,0,"C");
$pdf->Cell(160,10,"Do you have a Medical or Health Savings Account (MSA or HAS)?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_msa_has']),0,1,"C");


//    Question 15:

$string = "Did you pay interest on a student loan for yourself, your spouse, or your dependent during the year?";
pdf_call_function($pdf,$string,"15.",pdf_option_toggle($ownder_data['tax_payers_data_interestonstudentloan']));


//    Question 16:
$pdf->Cell(10,10,"16.",0,0,"C");
$pdf->Cell(160,10,"Did you receive 1098 T (tuition form) for yourself, your spouse or your dependents?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_tutionform1098']),0,1,"C");

//    Question 17:
$string = "Have you or your dependents taken a distribution from a qualified Tuition program (QTP) or 529 plan during the year?";
pdf_call_function($pdf,$string,"17.",pdf_option_toggle($ownder_data['tax_payers_data_dependantqtp']));

//    Question 18:
$pdf->Cell(10,10,"18.",0,0,"C");
$pdf->Cell(160,10,"Did you purchase a new alternative technology vehicle or electric vehicle?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_techvehicle']),0,1,"C");

//    Question 19:
    $string = "Did you install any energy property to your residence such as solar water heaters, generators or fuel cells or energy efficient improvements such as exterior doors or windows, insulation, heat pumps, furnaces, central air conditioners or water heaters?";
    pdf_call_function($pdf,$string,"19.",pdf_option_toggle($ownder_data['tax_payers_data_energyproperty']));



//    Question 20:
    
    $pdf->Cell(10,11,"20.",0,0,"C");
    $pdf->Cell(160,10,"Did you purchase or sell a main home during the year",0,0,"L");
    $pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_purchasenewhome']),0,1,"C");

//    Question 21:
    $pdf->Cell(10,11,"21.",0,0,"C");
    $pdf->Cell(160,10,"Did you sell or transfer any stock or sell rental or investment property?",0,0,"L");
    $pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_didusell']),0,1,"C");

//    Question 22:
    $pdf->Cell(10,11,"22.",0,0,"C");
    $pdf->Cell(160,10,"Did you make any charitable contributions in 2021?",0,0,"L");
    $pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_donate_charitable']),0,1,"C");

//    Question 23:
    $pdf->Cell(10,11,"23",0,0,"C");
    $pdf->Cell(160,10,"Did you have any debts cancelled, forgiven, or refinanced?",0,0,"L");
    $pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_debtscancelled']),0,1,"C");


//    Question 24:

$string = "Are you involved in bankruptcy, foreclosure, repossession, or had any debt (including credit cards) cancelled?";
pdf_call_function($pdf,$string,"24.",pdf_option_toggle($ownder_data['tax_payers_data_bankruptcy']));

//    Question 25:

$string = "Will there be any significant changes in income or deductions next year, such as retirement?";
pdf_call_function($pdf,$string,"25.",pdf_option_toggle($ownder_data['tax_payers_data_ded_retirement']));


//    Question 26:
$pdf->Cell(10,11,"26.",0,0,"C");
$pdf->Cell(160,10,"Did you pay anyone for domestic services in your home?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_pay_domestic']),0,1,"C");


//    Question 27:
$pdf->Cell(10,11,"27.",0,0,"C");
$pdf->Cell(160,10,"Are you a member of the military?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_mem_military']),0,1,"C");

//    State of residency:
$pdf->Cell(160,10,"State of residency",1,0,"C");
$pdf->Cell(30,10,ucfirst($ownder_data['tax_payers_data_stateofresidency']),1,1,"C");

//    Question 28:
$pdf->Cell(10,11,"28.",0,0,"C");
$pdf->Cell(160,10,"Were you a citizen of or lived in a foreign country?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_lived_foreign']),0,1,"C");

//    Foreign country:
$pdf->Cell(160,10,"Foreign country",1,0,"C");
$pdf->Cell(30,10,ucfirst($ownder_data['tax_payers_data_foreigncountryname']),1,1,"C");

//    Question 29:
$pdf->Cell(10,11,"29.",0,0,"C");
$pdf->Cell(160,10,"Were any children born or adopted in 2021?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_adopted_child']),0,1,"C");


//    Question 30:
$pdf->Cell(10,11,"30.",0,0,"C");
$pdf->Cell(160,10,"Do you have any children who have unearned income of $1,100 or more?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_unearned_children']),0,1,"C");

//    Question 31:
$pdf->Cell(10,11,"31.",0,0,"C");
$pdf->Cell(160,10,"Did you roll over any amounts from a retirement account in 2021?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_rollover_retirement_acnt']),0,1,"C");

//    Question 32:
$pdf->Cell(10,11,"32.",0,0,"C");
$pdf->Cell(160,10,"Did you receive any income from an installment sale?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_installmentsale']),0,1,"C");

//    Question 33:
$string = "Did you have any investments become worthless or were you a victim of investment theft in 2021?";
pdf_call_function($pdf,$string,"33.",pdf_option_toggle($ownder_data['tax_payers_data_investment_theft']));


//    Question 34:
$pdf->Cell(10,11,"34.",0,0,"C");
$pdf->Cell(160,10,"Were you granted, or did you exercise, any employee stock options during 2021?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_employee_stock']),0,1,"C");

//    Question 35:
$string = "Did you receive, sell, send, exchange, or otherwise dispose of any financial interest in any virtual currency?";
pdf_call_function($pdf,$string,"35.",pdf_option_toggle($ownder_data['tax_payers_data_dispose_financial_interest']));

//    Question 36:
$pdf->Cell(10,11,"36.",0,0,"C");
$pdf->Cell(160,10,"Did you receive income from a sharing/gig economy activity (e.g. Airbnb, Uber, etc.)?",0,0,"L");
$pdf->Cell(20,10,pdf_option_toggle($ownder_data['tax_payers_data_income_sharing_economy']),0,1,"C");

//    Question 37:
$string = "Do you own a business or an interest in a partnership, corporation, LLC, farming activities, or other venture?";
pdf_call_function($pdf,$string,"37.",pdf_option_toggle($ownder_data['tax_payers_data_interest_part_venture']));



//    Question 38:
$string = "If you sold a home, did you claim the First-Time Homebuyer Credit when it was purchased?";
pdf_call_function($pdf,$string,"38.",pdf_option_toggle($ownder_data['tax_payers_data_homebuyer_credit']));

//    Question 39:
$string = "Did you refinance a mortgage or take a home equity loan?";
pdf_call_function($pdf,$string,"39.",pdf_option_toggle($ownder_data['tax_payers_data_refinance_mortgage']));

//    Question 40:
$string = "Did you make any new energy-efficient improvements to your home?";
pdf_call_function($pdf,$string,"40.",pdf_option_toggle($ownder_data['tax_payers_data_energy_efficient_improvements']));

//    Question 41:
$string = "Were any children attending college?";
pdf_call_function($pdf,$string,"41.",pdf_option_toggle($ownder_data['tax_payers_data_child_attending_college']));

$pdf->Ln(10);

// Year of attending college
$pdf->Cell(140,10,"Year in college",1,0,"C");
$pdf->Cell(50,10,ucfirst($ownder_data['tax_payers_data_atnd_clg_year']),1,1,"C");

// Payments by the Tax Payer
$pdf->Cell(47.5,10,"Paid by you",1,0,"C");
$pdf->Cell(47.5,10,"Tution Fees",1,0,"C");
$pdf->Cell(47.5,10,"Student Loan Interest",1,0,"C");
$pdf->Cell(47.5,10,"Books Bought",1,1,"C");
$pdf->Cell(47.5,10,"$",1,0,"C");
$pdf->Cell(47.5,10,ucfirst($ownder_data['tax_payers_data_atnd_clg_you_tution']),1,0,"C");
$pdf->Cell(47.5,10,ucfirst($ownder_data['tax_payers_data_atnd_clg_you_loan']),1,0,"C");
$pdf->Cell(47.5,10,ucfirst($ownder_data['tax_payers_data_atnd_clg_you_books']),1,1,"C");


// Payments by the Student
$pdf->Cell(47.5,10,"Paid by Student",1,0,"C");
$pdf->Cell(47.5,10,"Tution Fees",1,0,"C");
$pdf->Cell(47.5,10,"Student Loan Interest",1,0,"C");
$pdf->Cell(47.5,10,"Books Bought",1,1,"C");
$pdf->Cell(47.5,10,"$",1,0,"C");
$pdf->Cell(47.5,10,ucfirst($ownder_data['tax_payers_data_atnd_clg_student_tution']),1,0,"C");
$pdf->Cell(47.5,10,ucfirst($ownder_data['tax_payers_data_atnd_clg_student_loan']),1,0,"C");
$pdf->Cell(47.5,10,ucfirst($ownder_data['tax_payers_data_atnd_clg_student_books']),1,1,"C");

$pdf->Ln(5);

//    Question 42:
$string = "Did you pay for child or dependent care so you could work or go to school? (add statement if needed)";
pdf_call_function($pdf,$string,"42.",pdf_option_toggle($ownder_data['tax_payers_data_depcare']));

$pdf->Ln(15);
// Dependent Care Statement
$pdf->Cell(95,10,"Provider Name",1,0,"C");
$pdf->Cell(95,10,"Provider SSN",1,1,"C");
$pdf->Cell(95,10,ucfirst($ownder_data['tax_payers_data_depcare_prov']),1,0,"C");
$pdf->Cell(95,10,ucfirst($ownder_data['tax_payers_data_depcare_prov_ssn']),1,1,"C");
$pdf->Cell(95,10,"Provider Address",1,0,"C");
$pdf->Cell(95,10,"Amount Paid ($)",1,1,"C");
$pdf->Cell(95,10,ucfirst($ownder_data['tax_payers_data_depcare_prov_add']),1,0,"C");
$pdf->Cell(95,10,ucfirst($ownder_data['tax_payers_data_depcare_prov_amnt']),1,1,"C");


$pdf->Ln(10);

 //    Set font to ariel,bold,14pt
 $pdf->SetFont('Times','',20);
 $pdf->SetFillColor(100,100,100);
$pdf->SetTextColor(255,255,255);
 $pdf->Cell(190,20,"Estimated Tax Payments - Tax Year 2021",0,1,"C",'F');
// Estimated payment
$pdf->SetFont('Times','',14);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(50,10,"Installment",1,0,"C");
$pdf->Cell(35,10,"Date Paid",1,0,"C");
$pdf->Cell(35,10,"Federal ($)",1,0,"C");
$pdf->Cell(35,10,"Date Paid",1,0,"C");
$pdf->Cell(35,10,"State ($)",1,1,"C");

$pdf->Cell(50,10,"First",1,0,"C");
$pdf->Cell(35,10,get_dob_display($ownder_data['tax_payers_data_first_install_fed_date']),1,0,"C");
$pdf->Cell(35,10,ucfirst($ownder_data['tax_payers_data_first_install_fed']),1,0,"C");
$pdf->Cell(35,10,get_dob_display($ownder_data['tax_payers_data_first_install_state_date']),1,0,"C");
$pdf->Cell(35,10,ucfirst($ownder_data['tax_payers_data_first_install_state']),1,1,"C");

$pdf->Cell(50,10,"Second",1,0,"C");
$pdf->Cell(35,10,get_dob_display($ownder_data['tax_payers_data_second_install_fed_date']),1,0,"C");
$pdf->Cell(35,10,ucfirst($ownder_data['tax_payers_data_second_install_fed']),1,0,"C");
$pdf->Cell(35,10,get_dob_display($ownder_data['tax_payers_data_second_install_state_date']),1,0,"C");
$pdf->Cell(35,10,ucfirst($ownder_data['tax_payers_data_second_install_state']),1,1,"C");

$pdf->Cell(50,10,"Third",1,0,"C");
$pdf->Cell(35,10,get_dob_display($ownder_data['tax_payers_data_third_install_fed_date']),1,0,"C");
$pdf->Cell(35,10,ucfirst($ownder_data['tax_payers_data_third_install_fed']),1,0,"C");
$pdf->Cell(35,10,get_dob_display($ownder_data['tax_payers_data_third_install_state_date']),1,0,"C");
$pdf->Cell(35,10,ucfirst($ownder_data['tax_payers_data_third_install_state']),1,1,"C");

$pdf->Cell(50,10,"Fourth",1,0,"C");
$pdf->Cell(35,10,get_dob_display($ownder_data['tax_payers_data_fourth_install_fed_date']),1,0,"C");
$pdf->Cell(35,10,ucfirst($ownder_data['tax_payers_data_fourth_install_fed']),1,0,"C");
$pdf->Cell(35,10,get_dob_display($ownder_data['tax_payers_data_fourth_install_state_date']),1,0,"C");
$pdf->Cell(35,10,ucfirst($ownder_data['tax_payers_data_fourth_install_state']),1,1,"C");

$pdf->Cell(50,10,"2020 overpay amount?",1,0,"C");
$pdf->Cell(35,10,"",1,0,"C");
$pdf->Cell(35,10,ucfirst($ownder_data['tax_payers_data_overpay_install_fed']),1,0,"C");
$pdf->Cell(35,10,"",1,0,"C");
$pdf->Cell(35,10,ucfirst($ownder_data['tax_payers_data_overpay_install_state']),1,1,"C");


$total_fed = intval($ownder_data['tax_payers_data_first_install_fed']) + intval($ownder_data['tax_payers_data_second_install_fed'])+ intval($ownder_data['tax_payers_data_third_install_fed'])+ intval($ownder_data['tax_payers_data_fourth_install_fed'])+intval($ownder_data['tax_payers_data_overpay_install_fed']);

$total_state = intval($ownder_data['tax_payers_data_first_install_state']) + intval($ownder_data['tax_payers_data_second_install_state'])+ intval($ownder_data['tax_payers_data_third_install_state'])+ intval($ownder_data['tax_payers_data_fourth_install_state'])+intval($ownder_data['tax_payers_data_overpay_install_state']);

$pdf->Cell(50,10,"Total",1,0,"C");
$pdf->Cell(35,10,"",1,0,"C");
$pdf->Cell(35,10,$total_fed,1,0,"C");
$pdf->Cell(35,10,"",1,0,"C");
$pdf->Cell(35,10,$total_state,1,1,"C");


$pdf->Ln(30);

//    Set font to ariel,bold,14pt
$pdf->SetFont('Times','',20);
$pdf->SetFillColor(100,100,100);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(190,20,"Advance Child Tax Credit Payments Received",0,1,"C","F");

// Advance child payment details
$pdf->SetFont('Times','',14);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(95,10,"Payment Date",1,0,"C");
$pdf->Cell(95,10,"Amount Received",1,1,"C");

$pdf->Cell(95,10,"July 15, 2021",1,0,"C");
$pdf->Cell(95,10,$ownder_data['tax_payers_data_pay_rec_july'],1,1,"C");
$pdf->Cell(95,10,"Septebmer 15, 2021",1,0,"C");
$pdf->Cell(95,10,$ownder_data['tax_payers_data_pay_rec_sept'],1,1,"C");
$pdf->Cell(95,10,"November 15, 2021",1,0,"C");
$pdf->Cell(95,10,$ownder_data['tax_payers_data_pay_rec_nov'],1,1,"C");
$pdf->Cell(95,10,"August 15, 2021",1,0,"C");
$pdf->Cell(95,10,$ownder_data['tax_payers_data_pay_rec_august'],1,1,"C");
$pdf->Cell(95,10,"October 15, 2021",1,0,"C");
$pdf->Cell(95,10,$ownder_data['tax_payers_data_pay_rec_oct'],1,1,"C");
$pdf->Cell(95,10,"December 15, 2021",1,0,"C");
$pdf->Cell(95,10,$ownder_data['tax_payers_data_pay_rec_dec'],1,1,"C");

$pdf->Ln(10);

//    Set font to ariel,bold,14pt
$pdf->SetFont('Times','',20);
$pdf->SetFillColor(100,100,100);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(190,20,"Tax Preparation Checklist",1,1,"C",'F');
$pdf->Ln(5);
//    Consent:
$pdf->SetFont('Times','',14);
$pdf->SetTextColor(0,0,0);
    $string = 'All Forms W-2 (wages), 1099-INT (interest), 1099-DIV (dividends), 1099-B (proceeds from broker or barter transactions), 1099-R (pensions and IRA distributions), Schedules K-1 from partnerships, S corporations, estates and trusts, and other income reporting statements, including all copies provided from the payer.';
    pdf_check_generator($pdf,$string,$ownder_data['tax_payers_data_w2_form']);
    $pdf->Ln(5);

    $string = 'Form 1095-A (for health insurance purchased through a public exchange), Form 1095-B (for health insurance purchased outside of a public exchange), or Form 1095-C (for employer-provided health insurance coverage).';
    pdf_check_generator($pdf,$string,$ownder_data['tax_payers_data_a1095_form']);
    $pdf->Ln(5);

    $string = 'If you are a new client, provide copies of last year tax returns.';
    pdf_check_generator($pdf,stripslashes($string),$ownder_data['tax_payers_data_new_client_last_copy']);
    $pdf->Ln(5);

    $string = 'The completed Individual Income Tax Organizer. Note: If you choose not to fill out the organizer, you must at least answer the Yes or No questions under Questions All Taxpayers.';
    pdf_check_generator($pdf,$string,$ownder_data['tax_payers_data_not_to_fill_out_org']);
    $pdf->Ln(5);

    $string = 'Copy of the closing statement if you bought or sold real estate.';
    pdf_check_generator($pdf,$string,$ownder_data['tax_payers_data_copy_closing_state']);
    $pdf->Ln(5);

    $string = 'Mileage figures for any automobile expenses claimed, including total mileage, commuting mileage, and business mileage.';
    pdf_check_generator($pdf,$string,$ownder_data['tax_payers_data_mile_fig_auto']);
    $pdf->Ln(5);

    $string = 'Detail of estimated tax payments made, if any.';
    pdf_check_generator($pdf,$string,$ownder_data['tax_payers_data_detail_any_tax_made']);
    $pdf->Ln(5);

    $string = 'Income and deductions categorized on a separate sheet for business or rental activities.';
    pdf_check_generator($pdf,$string,$ownder_data['tax_payers_data_inc_ded_cat']);
    $pdf->Ln(5);

    $string = 'List of itemized deductions categorized on a separate sheet for medical, taxes, interest, charitable, and miscellaneous deductions.';
    pdf_check_generator($pdf,$string,$ownder_data['tax_payers_data_list_item_ded_cat']);
    $pdf->Ln(5);

    $string = 'Copy of all acknowledgement letters received from charitable organizations for contributions made in 2021.';
    pdf_check_generator($pdf,$string,$ownder_data['tax_payers_data_copy_all_acknow']);
    $pdf->Ln(5);

    $string = 'IRS Letter #6745 for Stimulus check payment.';
    pdf_check_generator($pdf,$string,$ownder_data['tax_payers_data_copy_all_acknow']);
    $pdf->Ln(5);

    $string = 'IRS Letter #6419 for Advance Child tax credit payment.';
    pdf_check_generator($pdf,$string,$ownder_data['tax_payers_data_advance_child_tax_credit_payment']);
    $pdf->Ln(20);


    //  Tax Payer Information
    $pdf->SetFont('Times','',20);
    $pdf->SetFillColor(100,100,100);
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(190,20,"Taxpayer Responsibilities",0,1,"C",'F');
    $pdf->Ln(5);

    $pdf->SetFont('Times','',14);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',12);

    $string = 'You agree to provide us all income and deductible expense information. If you receive additional information after we begin working on your return, you will contact us immediately to ensure your completed tax returns contain all relevant information.';
    pdf_multicellblt($pdf,chr(149),$string);
    $pdf->Ln(5);

    $string = 'You affirm that all expenses or other deduction amounts are accurate and that you have all required supporting written records. In some cases, we will ask to review your documentation.';
    pdf_multicellblt($pdf,chr(149),$string);
    $pdf->Ln(5);

    $string = 'You must be able to provide written records of all items included on your return if audited by either the IRS or state tax authority. We can provide guidance concerning what evidence is acceptable.';
    pdf_multicellblt($pdf,chr(149),$string);
    $pdf->Ln(5);

    $string = 'You must review the return carefully before signing to make sure the information is correct.';
    pdf_multicellblt($pdf,chr(149),$string);
    $pdf->Ln(5);

    $string = 'Fees must be paid before your tax return is delivered to you or filed for you. If you terminate this engagement before completion, you agree to pay a fee for work completed. A retainer is required for preparation of late returns.';
    pdf_multicellblt($pdf,chr(149),$string);
    $pdf->Ln(5);

    $string = 'You should keep a copy of your tax return and any related tax documents. You may be assessed a fee if you request a copy in the future.';
    pdf_multicellblt($pdf,chr(149),$string);
    $pdf->Ln(5);




 $pdf->Write(5,"Signatures. By signing below, you acknowledge that you have read, understand, and accept your obligations and responsibilities. For a joint return, both taxpayers must sign.");

    $pdf->Ln(10);

    $pdf->Cell(63,10,"Taxpayer Name",1,0,"C");
    $pdf->Cell(63,10,"Spouse Name",1,0,"C");
    $pdf->Cell(64,10,"Date",1,1,"C");

    $pdf->Cell(63,10,ucfirst($ownder_data['tax_payers_data_tax_initial_sig']),1,0,"C");
    $pdf->Cell(63,10,ucfirst($ownder_data['tax_payers_data_tax_sp_initial_sig']),1,0,"C");
    $pdf->Cell(64,10,get_dob_display($ownder_data['tax_payers_data_sign_date']),1,1,"C");

    $pdf->Ln(60);

    //  Tax Payer Information
    $pdf->SetFont('Times','',20);
    $pdf->SetFillColor(100,100,100);
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(190,20,"Privacy Policy",0,1,"C",'F');
    $pdf->Ln(5);

    $pdf->SetFont('Times','',14);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetLeftMargin(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10);
    $pdf->MultiCell(190,5,'The nature of our work requires us to collect certain nonpublic information. We collect financial and personal information from applications, worksheets, reporting statements, and other forms, as well as interviews and conversations with our clients and affiliates. We may also review banking and credit card information about our clients in the performance of receipt of payment. Under our policy, all information we obtain about you will be provided by you or obtained with your permission.',0,"L");
    $pdf->Ln(3);
    $pdf->MultiCell(190,5,'Our firm has procedures and policies in place to protect your confidential information. We restrict access to your confidential information to those within our firm who need to know in order to provide you with services. We will not disclose your personal information to a third party without your permission, except where required by law. We maintain physical, electronic, and procedural safeguards in compliance with federal regulations that protect your personal information from unauthorized access.',0,"L");
$pdf->Ln(5);



    //  Additional Information
    $pdf->SetFont('Times','',20);
    $pdf->SetFillColor(100,100,100);
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(190,20,"Additional Note",0,1,"C",'F');

    $pdf->SetFont('Times','',14);
    $pdf->SetTextColor(0,0,0);
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
    $pdf->setFillColor(0,0,0);
    $pdf->SetDrawColor(255,255,255);
    $pdf->SetLineWidth(5);
    $pdf->Cell(5,7,'','T',0,"C",true);
    $pdf->SetLineWidth(0.2);
    $pdf->SetDrawColor(0,0,0);
    $pdf->setFillColor(255,255,255);
    $pdf->Cell(165,10,'I declare all the above information is correct (Name initials will be saved as your consent): '.substr($ownder_data['tax_payers_data_fname'],0,1).substr($ownder_data['tax_payers_data_mname'],0,1).substr  ($ownder_data['tax_payers_data_lname'],0,1),0,1,"C");

    
    $pdf->Output('D',$specialId.'.pdf',true);