<?php
    require_once "header.php";
    include_once "session-check.php";
?>


<div id="user-detail-update" class="container">
    <div class="form-container">
        <div class="container">
            <?php include_once 'nav-header.php';?>
        </div>

        <form id="updateInput">
            <!--        Tax Payer's Details-->

            <div class="container">
                <div class="row">
                    <div class="col s8">
                        <div id="heading" class="heading">Please Check Your Personal Information</div>
                    </div>
                    <div class="col s4">
                        <?php if (isset($session_id)){?>
                            <button id="logout" class="btn-large waves-effect waves-light red right" type="button"><a href="/logout.php?argument=logOut" class="white-text">Logout</a></button>
                        <?php }?>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="sub-heading">Taxpayer Information</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <h5 id="test"></h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="fname" name="fname" value="<?php echo $data['tax_payers_data_fname'];?>">
                            <label for="fname" class="white-text">First Name<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="mname" name="mname" value="<?php echo $data['tax_payers_data_mname'];?>">
                            <label for="mname" class="white-text">Middle Initial</label>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="lname" name="lname" value="<?php echo $data['tax_payers_data_lname'];?>">
                            <label for="lname" class="grey-text text-lighten-2">Last Name<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="ssn" name="ssn" value="<?php echo $ssn_display;?>" disabled>
                            <label for="ssn" class="grey-text text-lighten-2">Social Security Number</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="dob" name="dob" class="datepicker" value="<?php echo $dob_display;?>">
                            <label for="dob" class="grey-text text-lighten-2">Date of Birth</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="ip_pin" name="ip_pin" value="<?php echo $data['tax_payers_data_ip_pin'];?>">
                            <label for="ip_pin" class="grey-text text-lighten-2">IP Pin</label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="ocupation" name="ocupation" value="<?php echo $data['tax_payers_data_ocupation'];?>">
                            <label for="ocupation" class="white-text">Occupation<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="phone" name="phone" value="<?php echo $data['tax_payers_data_phone'];?>">
                            <label for="phone" class="white-text">Phone Number<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="email" name="email" value="<?php echo $data['tax_payers_data_email'];?>">
                            <label for="email" class="white-text">Email Address<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l3">
                        <div class="input-field">
                            <input type="text" id="dl_no" name="dl_no" value="<?php echo $data['tax_payers_data_dl_no'];?>">
                            <label for="dl_no" class="white-text">Driving License</label>
                        </div>
                    </div>

                    <div class="col s12 l3">
                        <div class="input-field">
                            <input type="text" id="dl_state" name="dl_state" value="<?php echo $data['tax_payers_data_dl_state'];?>">
                            <label for="dl_state" class="white-text">Driving License State</label>
                        </div>
                    </div>

                    <div class="col s12 l3">
                        <div class="input-field">
                            <input type="text" id="dl_issue_date" name="dl_issue_date" class="datepicker" value="<?php echo get_dob_display($data['tax_payers_data_dl_issue_date']);?>">
                            <label for="dl_issue_date" class="white-text">Driving License Issue Date</label>
                        </div>
                    </div>
                    <div class="col s12 l3">
                        <div class="input-field">
                            <input type="text" id="dl_exp_date" name="dl_exp_date" class="datepicker" value="<?php echo get_dob_display($data['tax_payers_data_dl_exp_date']);?>">
                            <label for="dl_exp_date" class="white-text">Driving License Expire Date</label>
                        </div>
                    </div>
                </div>

                <!--        Tax Payer's Address Details-->
                <div class="row">
                    <div class="col s12">
                        <div class="sub-heading">Taxpayer's Address</div>
                    </div>
                </div>


                <div class="row">
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="street" name="street" value="<?php echo $data['tax_payers_data_street'];?>">
                            <label for="street" class="white-text">Street<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="apt" name="apt" value="<?php echo $data['tax_payers_data_apt'];?>">
                            <label for="apt" class="white-text">Apt/Suite</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="city" name="city" value="<?php echo $data['tax_payers_data_city'];?>">
                            <label for="city" class="white-text">City<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="state" name="state" value="<?php echo $data['tax_payers_data_state'];?>">
                            <label for="state" class="white-text">State<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>

                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="zip" name="zip" value="<?php echo $data['tax_payers_data_zip'];?>">
                            <label for="zip" class="white-text">Zip<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>

                </div>





                <!--        Tax Payer's Wife's Details-->
                <div class="row">
                    <div class="col s12">
                        <div class="sub-heading">Spouse Information</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spfname" name="spfname" value="<?php echo $data['tax_payers_data_spfname'];?>">
                            <label for="spfname" class="white-text">First Name</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spmname" name="spmname" value="<?php echo $data['tax_payers_data_spmname'];?>">
                            <label for="spmname" class="white-text">Middle Initial</label>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="splname" name="splname" value="<?php echo $data['tax_payers_data_splname'];?>">
                            <label for="splname" class="white-text">Last Name</label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spssn" name="spssn" value="<?php echo $data['tax_payers_data_spssn'];?>">
                            <label for="spssn" class="white-text">Social Security Number</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spdob" name="spdob" class="datepicker" value="<?php echo $spdob_display;?>">
                            <label for="spdob" class="white-text">Date of Birth</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="sp_ip_pin" name="sp_ip_pin" value="<?php echo $data['tax_payers_data_sp_ip_pin'];?>">
                            <label for="sp_ip_pin" class="white-text">IP Pin</label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spocupation" name="spocupation" value="<?php echo $data['tax_payers_data_spocupation'];?>">
                            <label for="spocupation" class="white-text">Occupation</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spphone" name="spphone" value="<?php echo $data['tax_payers_data_spphone'];?>">
                            <label for="spphone" class="white-text">Phone Number</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spemail" name="spemail" value="<?php echo $data['tax_payers_data_spemail'];?>">
                            <label for="spemail" class="white-text">Email Address</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 l3">
                        <div class="input-field">
                            <input type="text" id="sp_dl_no" name="sp_dl_no" value="<?php echo $data['tax_payers_data_sp_dl_no'];?>">
                            <label for="sp_dl_no" class="white-text">Driving License</label>
                        </div>
                    </div>

                    <div class="col s12 l3">
                        <div class="input-field">
                            <input type="text" id="sp_dl_state" name="sp_dl_state" value="<?php echo $data['tax_payers_data_sp_dl_state'];?>">
                            <label for="sp_dl_state" class="white-text">Driving License State</label>
                        </div>
                    </div>

                    <div class="col s12 l3">
                        <div class="input-field">
                            <input type="text" id="sp_dl_issue_date" name="sp_dl_issue_date" class="datepicker" value="<?php echo get_dob_display($data['tax_payers_data_sp_dl_issue_date']);?>">
                            <label for="sp_dl_issue_date" class="white-text">Driving License Issue Date</label>
                        </div>
                    </div>
                    <div class="col s12 l3">
                        <div class="input-field">
                            <input type="text" id="sp_dl_exp_date" name="sp_dl_exp_date" class="datepicker" value="<?php echo get_dob_display($data['tax_payers_data_sp_dl_exp_date']);?>">
                            <label for="sp_dl_exp_date" class="white-text">Driving License Expire Date</label>
                        </div>
                    </div>
                </div>


                <!--        Tax Payer's Spouse Address Details-->

                <div class="row">
                    <div class="col s12">
                        <div class="sub-heading">Spouse Address</div>
                    </div>
                </div>

                <div class="row">
                    <br>
                    <div class="col s12" style="display: flex; align-items: center; justify-content: flex-start;">
                        <label>
                            <?php checkbox_toggler($data['tax_payers_data_same_as'],'same_as');?>
                            <span class="white-text"><b>Same as Taxpayer's address</b></span>
                        </label>
                    </div>
                    <br><br>
                </div>
                <div id="spaddresscontainer">
                    <div class="row">
                        <div class="col s12 l4">
                            <div class="input-field">
                                <input type="text" id="spstreet" name="spstreet" value="<?php echo $data['tax_payers_data_spstreet'];?>">
                                <label for="street" class="white-text">Spouse Street</label>
                            </div>
                        </div>

                        <div class="col s12 l4">
                            <div class="input-field">
                                <input type="text" id="spapt" name="spapt" value="<?php echo $data['tax_payers_data_spapt'];?>">
                                <label for="apt" class="white-text">Spouse Apt/Suite</label>
                            </div>
                        </div>

                        <div class="col s12 l4">
                            <div class="input-field">
                                <input type="text" id="spcity" name="spcity" value="<?php echo $data['tax_payers_data_spcity'];?>">
                                <label for="city" class="white-text">Spouse City</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 l6">
                            <div class="input-field">
                                <input type="text" id="spstate" name="spstate" value="<?php echo $data['tax_payers_data_spstate'];?>">
                                <label for="state" class="white-text">Spouse State</label>
                            </div>
                        </div>

                        <div class="col s12 l6">
                            <div class="input-field">
                                <input type="text" id="spzip" name="spzip" value="<?php echo $data['tax_payers_data_spzip'];?>">
                                <label for="zip" class="white-text">Spouse Zip</label>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 l6">
                        <select name="isblind">
                            <?php option_selector($matcher,$data['tax_payers_data_isblind'])?>
                        </select>
                        <label class="white-text">Are You Blind<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                    </div>

                    <div class="input-field col s12 l6">
                        <select name="isspblind">
                            <?php option_selector($matcher,$data['tax_payers_data_isspblind'])?>
                        </select>
                        <label class="white-text">Are Your Spouse Blind<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6">
                        <select name="isdisable">
                            <?php option_selector($matcher,$data['tax_payers_data_isdisable'])?>
                        </select>
                        <label class="white-text">Are You Disable<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                    </div>

                    <div class="input-field col s12 l6">
                        <select name="isspdisable">
                            <?php option_selector($matcher,$data['tax_payers_data_isspdisable'])?>
                        </select>
                        <label class="white-text">Are Your Spouse Disable<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6">
                        <select name="marital_status" id="marital_status" >
                            <?php option_selector_marital($matcher_marriage,$data['tax_payers_data_marital_status']);?>
                        </select>
                        <label class="white-text">Marriage Status<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                    </div>
                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="spousedead" name="spousedead" class="datepicker" value="<?php echo $data['tax_payers_data_spousedead'];?>" >
                            <label for="spousedead" class="white-text">Date of Spouse's Death</label>
                        </div>
                    </div>

                </div>

                <div class="row valign-wrapper">
                    <div class="col s8">
                        <div class="sub-heading">Child/Other Dependents Information</div>
                        <div id="depCounterParent" class="input-field">
                            <input id="depCount" name="depCount" type="number" value="<?php echo $depcount;?>" class="" disabled>
                            <label for="depCount" class="white-text">Dependant Counter</label>
                        </div>
                    </div>
                    <div class="col s4">
                        <a class="btn green-btn-custom white-text waves-effect waves-light right" onclick="adddependantupdate()">Add a Dependant</a>
                    </div>
                </div>
                <div class="dependant-container-parent">
                    <?php require 'dependant-view.php';?>

                </div>

                <div class="row">
                    <div class="col s12">
                        <div class="sub-heading">General Questionnaires (all <i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i>)</div>
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s12 l6">
                        <select name="rcvalimony">
                            <?php custom_paid_select($array_datas,$data['tax_payers_data_rcvalimony']);?>
                        </select>
                        <label class="white-text">Did you pay or receive alimony in 2021?</label>
                    </div>

                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="rcvalimonyamnt" name="rcvalimonyamnt" value="<?php echo $data['tax_payers_data_rcvalimonyamnt'];?>" >
                            <label for="rcvalimonyamnt" class="white-text">Amount of the recieved alimony ($)</label>
                        </div>
                    </div>

                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="rcpntssn" name="rcpntssn" value="<?php echo $data['tax_payers_data_rcpntssn'];?>" >
                            <label for="rcpntssn" class="white-text">Recipient's SSN</label>
                        </div>
                    </div>
                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="doseparation" name="doseparation" class="datepicker" value="<?php echo $doseparation;?>" >
                            <label for="doseparation" class="white-text">Date of divorce or separation</label>
                        </div>
                    </div>
                </div>

                <div id="deduction" class="row">
                    <div class="radio-btn-close">
                        <div class="col s12 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">1.</span> Did your name, address or marital status change during the year?</div>
                        </div>
                        <div class="col s12 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_addresschange'],'addresschange');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s12 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">2.</span> Are you being claimed as dependent on another tax return?</div>
                        </div>
                        <div class="col s12 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_claimeddependant'],'claimeddependant');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">3.</span>Were you notified by the IRS or STATE of a change to any prior year tax return?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_notifiedirs'],'notifiedirs');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">5.</span> Do you have health insurance last year?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_healthinsurance'],'healthinsurance');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">6.</span> Did you receive form 1095-a from marketplace?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_marketplace'],'marketplace');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">7.</span> Did you receive rent from real estate or other property? </div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_rentfrom'],'rentfrom');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">8.</span> Do you have a foreign bank account, trust, or business? </div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_foreignbankaccount'],'foreignbankaccount');?>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">10.</span> Did you own $50,000 or more in foreign financial assets?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_moreforeignfinance'],'moreforeignfinance');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">11.</span> Do you have any foreign income, bank account, trust or business?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_foreignincome'],'foreignincome');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">12.</span> Did you receive any distribution from an IRA, profit sharing or pension plan?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_pensionplan'],'pensionplan');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">13.</span> Do you have a Medical or Health Savings Account (MSA or HAS)?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_msa_has'],'msa_has');?>
                            </div>
                        </div>
                    </div>



                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">15.</span> Did you pay interest on a student loan for yourself, your spouse, or your dependent during the year?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_interestonstudentloan'],'interestonstudentloan');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">16.</span> Did you receive 1098 T (tuition form) for yourself, your spouse or your dependents?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_tutionform1098'],'tutionform1098');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">17.</span> Have you or your dependents taken a distribution from a qualified Tuition program (QTP) or 529 plan during the year?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_dependantqtp'],'dependantqtp');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">18.</span> Did you purchase a new alternative technology vehicle or electric vehicle?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_techvehicle'],'techvehicle');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">19.</span> Did you install any energy property to your residence such as solar water heaters, generators or fuel cells or energy efficient improvements such as exterior doors or windows, insulation, heat pumps, furnaces, central air conditioners or water heaters? </div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_energyproperty'],'energyproperty');?>
                            </div>
                        </div>
                    </div>


                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">20.</span> Did you purchase or sell a main home during the year</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_purchasenewhome'],'purchasenewhome');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">21.</span> Did you sell or transfer any stock or sell rental or investment property?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_didusell'],'didusell');?>
                            </div>
                        </div>
                    </div>
                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">22.</span> Did you make any charitable contributions in 2021?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_donate_charitable'],'donate_charitable');?>
                            </div>
                        </div>
                    </div>
                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">23.</span> Did you have any debts cancelled, forgiven, or refinanced??</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_debtscancelled'],'debtscancelled');?>
                            </div>
                        </div>
                    </div>
                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">24.</span> Are you involved in bankruptcy, foreclosure, repossession, or had any debt (including credit cards) cancelled?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_bankruptcy'],'bankruptcy');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">25.</span> Did you receive both stimulus checks from IRS?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_stimulus_irs'],'stimulus_irs');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">26.</span> Did you purchase health insurance through a public exchange?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_purchase_health'],'purchase_health');?>
<!--                                Here tax_payers_data_stimulus_irs db table need to be changed -->

                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">27.</span> Will there be any significant changes in income or deductions next year, such as retirement?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_ded_retirement'],'ded_retirement');?>

                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">28.</span> Did you pay anyone for domestic services in your home?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_pay_domestic'],'pay_domestic');?>

                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">30.</span> Are you a member of the military?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_mem_military'],'mem_military');?>
                            </div>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="input-field">
                            <input type="text" id="stateofresidency" name="stateofresidency" value="<?php echo $data['tax_payers_data_stateofresidency'];?>" >
                            <label for="stateofresidency" class="white-text">State of residency</label>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">31.</span> Were you a citizen of or lived in a foreign country?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_lived_foreign'],'lived_foreign');?>
                            </div>
                        </div>
                    </div>

                    <div class="col s12">
                        <div class="input-field">
                            <input type="text" id="foreigncountryname" name="foreigncountryname" value="<?php echo $data['tax_payers_data_foreigncountryname'];?>" >
                            <label for="foreigncountryname" class="white-text">Name of the Foreign country</label>
                        </div>
                    </div>


                    <div class="row" style="margin-top: 50px; margin-bottom: 0 !important;">
                        <div class="col s12 l6">
                            <div class="input-field">
                                <input type="text" id="impactpayments" name="impactpayments" value="<?php echo $data['tax_payers_data_impactpayments'];?>" >
                                <label for="impactpayments" class="white-text">impact payments amount</label>
                            </div>
                        </div>

                        <div class="col s12 l6">
                            <div class="input-field" style="margin-bottom: 0 !important;">
                                <input type="text" id="impactpaymentsdate" name="impactpaymentsdate" class="datepicker" value="<?php echo $impactpaymentsdate;?>">
                                <label for="impactpaymentsdate" class="grey-text text-lighten-2">Date of Birth</label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">33.</span> Were any children born or adopted in 2021?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_adopted_child'],'adopted_child');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">34.</span> Did you receive any advance Child Tax Credit payment?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_child_tax_credit'],'child_tax_credit');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">35.</span> Do you have any children who have unearned income of $1,100 or more?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_unearned_children'],'unearned_children');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">36.</span> Did you roll over any amounts from a retirement account in 2021?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_rollover_retirement_acnt'],'rollover_retirement_acnt');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">37.</span> Did you receive any income from an installment sale?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_installmentsale'],'installmentsale');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">38.</span> Did you have any investments become worthless or were you a victim of investment theft in 2021?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_investment_theft'],'investment_theft');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">39.</span> Were you granted, or did you exercise, any employee stock options during 2021?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_employee_stock'],'employee_stock');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">40.</span> Did you receive, sell, send, exchange, or otherwise dispose of any financial interest in any virtual currency?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_dispose_financial_interest'],'dispose_financial_interest');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">45.</span> Did you receive income from a sharing/gig economy activity (e.g. Airbnb, Uber, etc.)?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_income_sharing_economy'],'income_sharing_economy');?>
                            </div>
                        </div>
                    </div>


                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">46.</span> Do you own a business or an interest in a partnership, corporation, LLC, farming activities, or other venture?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_interest_part_venture'],'interest_part_venture');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">47.</span> If you sold a home, did you claim the First-Time Homebuyer Credit when it was purchased?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_homebuyer_credit'],'homebuyer_credit');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">48.</span> Did you refinance a mortgage or take a home equity loan?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_refinance_mortgage'],'refinance_mortgage');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">50.</span> Did you make any new energy-efficient improvements to your home?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_energy_efficient_improvements'],'energy_efficient_improvements');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">51.</span> Were any children attending college?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_substantially_improve_home'],'child_attending_college');?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 l3">
                                <div class="input-field">
                                    <input type="text" id="atnd_clg_year" name="atnd_clg_year" value="<?php echo $data['tax_payers_data_atnd_clg_year'];?>" >
                                    <label for="atnd_clg_year" class="white-text">Year of attending college</label>
                                </div>
                        </div>
                        <div class="col s12">
                            <div class="col s12 l4">
                                <div class="input-field">
                                    <input type="text" id="atnd_clg_you_tution" name="atnd_clg_you_tution" value="<?php echo $data['tax_payers_data_atnd_clg_you_tution'];?>" >
                                    <label for="atnd_clg_you_tution" class="white-text">Tution paid by you ($)</label>
                                </div>
                            </div>
                            <div class="col s12 l4">
                                <div class="input-field">
                                    <input type="text" id="atnd_clg_you_loan" name="atnd_clg_you_loan" value="<?php echo $data['tax_payers_data_atnd_clg_you_loan'];?>" >
                                    <label for="atnd_clg_you_loan" class="white-text">Student interest loan paid by you ($)</label>
                                </div>
                            </div>
                            <div class="col s12 l4">
                                <div class="input-field">
                                    <input type="text" id="atnd_clg_you_books" name="atnd_clg_you_books" value="<?php echo $data['tax_payers_data_atnd_clg_you_books'];?>" >
                                    <label for="atnd_clg_you_books" class="white-text">Books paid by you ($)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="col s12 l4">
                                <div class="input-field">
                                    <input type="text" id="atnd_clg_student_tution" name="atnd_clg_student_tution" value="<?php echo $data['tax_payers_data_atnd_clg_student_tution'];?>" >
                                    <label for="atnd_clg_student_tution" class="white-text">Tution paid by student ($)</label>
                                </div>
                            </div>
                            <div class="col s12 l4">
                                <div class="input-field">
                                    <input type="text" id="atnd_clg_student_loan" name="atnd_clg_student_loan" value="<?php echo $data['tax_payers_data_atnd_clg_student_loan'];?>" >
                                    <label for="atnd_clg_you_loan" class="white-text">Student interest loan paid by student ($)</label>
                                </div>
                            </div>
                            <div class="col s12 l4">
                                <div class="input-field">
                                    <input type="text" id="atnd_clg_student_books" name="atnd_clg_student_books" value="<?php echo $data['tax_payers_data_atnd_clg_student_books'];?>" >
                                    <label for="atnd_clg_student_books" class="white-text">Books paid by student ($)</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 l4">
                            <div class="input-field">
                                <input type="text" id="tution_for_private_stud" name="tution_for_private_stud" value="<?php echo $data['tax_payers_data_tution_for_private_stud'];?>" >
                                <label for="tution_for_private_stud" class="white-text">Dependent student name</label>
                            </div>
                        </div>
                        <div class="col s12 l4">
                            <div class="input-field">
                                <input type="text" id="tution_for_private_amount" name="tution_for_private_amount" value="<?php echo $data['tax_payers_data_tution_for_private_amount'];?>" >
                                <label for="tution_for_private_amount" class="white-text">Dependent student amount paid</label>
                            </div>
                        </div>
                        <div class="col s12 l4">
                            <div class="input-field">
                                <input type="text" id="tution_for_private_schl" name="tution_for_private_schl" value="<?php echo $data['tax_payers_data_tution_for_private_schl'];?>" >
                                <label for="tution_for_private_schl" class="white-text">Dependent student school's name and address</label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">53.</span> Did you pay for child or dependent care so you could work or go to school? (add statement if needed)</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_depcare'],'depcare');?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 l6">
                            <div class="input-field">
                                <input type="text" id="depcare_prov" name="depcare_prov" value="<?php echo $data['tax_payers_data_depcare_prov'];?>" >
                                <label for="depcare_prov" class="white-text">Name of provider</label>
                            </div>
                        </div>
                        <div class="col s12 l6">
                            <div class="input-field">
                                <input type="text" id="depcare_prov_ssn" name="depcare_prov_ssn" value="<?php echo $data['tax_payers_data_depcare_prov_ssn'];?>" >
                                <label for="depcare_prov_ssn" class="white-text">Provider's EIN/SSN</label>
                            </div>
                        </div>
                        <div class="col s12 l6">
                            <div class="input-field">
                                <input type="text" id="depcare_prov_add" name="depcare_prov_add" value="<?php echo $data['tax_payers_data_depcare_prov_add'];?>" >
                                <label for="tution_for_private_schl" class="white-text">Provider's address</label>
                            </div>
                        </div>
                        <div class="col s12 l6">
                            <div class="input-field">
                                <input type="text" id="depcare_prov_amnt" name="depcare_prov_amnt" value="<?php echo $data['tax_payers_data_depcare_prov_amnt'];?>" >
                                <label for="depcare_prov_amnt" class="white-text">Amount paid to provider</label>
                            </div>
                        </div>
                    </div>

                    <hr class="sector_devider margin-top-60" style="color: transparent !important;">

                    <div class="row">
                        <div class="col s12">
                            <div class="section-header">
                                <h5>Estimated Tax Payments — Tax Year 2021</h5>
                                <hr class="sector_devider">
                            </div>
                        </div>

                        <div class="col s12">
                            <table class="responsive-table">
                                <thead>
                                <tr>
                                    <th>Installment</th>
                                    <th>Date Paid</th>
                                    <th>Federal ($)</th>
                                    <th>Date Paid</th>
                                    <th>State ($)</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>First</td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="first_install_fed_date" name="first_install_fed_date" class="datepicker" value="<?php echo get_dob_display($data['tax_payers_data_first_install_fed_date']);?>" placeholder="Enter the date">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="first_install_fed" name="first_install_fed" value="<?php echo $data['tax_payers_data_first_install_fed'];?>" placeholder="0">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="first_install_state_date" name="first_install_state_date" class="datepicker" value="<?php echo get_dob_display($data['tax_payers_data_first_install_state_date']);?>" placeholder="Enter the date">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="first_install_state" name="first_install_state" value="<?php echo $data['tax_payers_data_first_install_state'];?>" placeholder="0">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Second</td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="second_install_fed_date" name="second_install_fed_date" class="datepicker" value="<?php echo get_dob_display($data['tax_payers_data_second_install_fed_date']);?>" placeholder="Enter the date">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="second_install_fed" name="second_install_fed" value="<?php echo $data['tax_payers_data_second_install_fed'];?>" placeholder="0">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="second_install_state_date" name="second_install_state_date" class="datepicker" value="<?php echo get_dob_display($data['tax_payers_data_second_install_state_date']);?>" placeholder="Enter the date">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="second_install_state" name="second_install_state" value="<?php echo $data['tax_payers_data_second_install_state'];?>" placeholder="0">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Third</td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="third_install_fed_date" name="third_install_fed_date" class="datepicker" value="<?php echo get_dob_display($data['tax_payers_data_third_install_fed_date']);?>" placeholder="Enter the date">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="third_install_fed" name="third_install_fed" value="<?php echo $data['tax_payers_data_third_install_fed'];?>" placeholder="0">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="third_install_state_date" name="third_install_state_date" class="datepicker" value="<?php echo get_dob_display($data['tax_payers_data_third_install_state_date']);?>" placeholder="Enter the date">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="third_install_state" name="third_install_state" value="<?php echo $data['tax_payers_data_third_install_state'];?>" placeholder="0">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Fourth</td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="fourth_install_fed_date" name="fourth_install_fed_date" class="datepicker" value="<?php echo get_dob_display($data['tax_payers_data_fourth_install_fed_date']);?>" placeholder="Enter the date">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="fourth_install_fed" name="fourth_install_fed" value="<?php echo $data['tax_payers_data_fourth_install_fed'];?>" placeholder="0">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="fourth_install_state_date" name="fourth_install_state_date" class="datepicker" value="<?php echo get_dob_display($data['tax_payers_data_fourth_install_state_date']);?>" placeholder="Enter the date">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="fourth_install_state" name="fourth_install_state" value="<?php echo $data['tax_payers_data_fourth_install_state'];?>" placeholder="0">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Amount applied from 2020 overpayment?</td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="overpay_install_fed_dis" class="datepicker" disabled>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="overpay_install_fed" name="overpay_install_fed" value="<?php echo $data['tax_payers_data_overpay_install_fed'];?>" >
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="overpay_install_state_dis" disabled>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="overpay_install_state" name="overpay_install_state" value="<?php echo $data['tax_payers_data_overpay_install_state'];?>" >
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="total_install_fed_dis" disabled>
                                        </div>
                                    </td>
                                    <td class="total_data_parent">
                                        <div class="total_data">
                                            <p><?php echo total_calc($data,'fed');?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <input type="text" id="total_install_state" disabled>
                                        </div>
                                    </td>
                                    <td class="total_data_parent">
                                        <div class="total_data">
                                        <p><?php echo total_calc($data,'state');?></p>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col s12">
                                <div class="section-header">
                                    <h5>Advance Child Tax Credit Payments Received</h5>
                                    <hr class="sector_devider">
                                </div>
                            </div>

                            <div class="col s12">
                                <table class="responsive-table">
                                    <thead>
                                    <tr>
                                        <th>Payment date</th>
                                        <th>Amount received</th>
                                        <th>Payment date</th>
                                        <th>Amount received</th>
                                        <th>Payment date</th>
                                        <th>Amount received</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>
                                            <p>July 15, 2021</p>
                                        </td>
                                        <td>
                                            <div class="input-field">
                                                <input type="text" id="pay_rec_july" name="pay_rec_july" value="<?php echo $data['tax_payers_data_pay_rec_july'];?>" placeholder="0">
                                            </div>
                                        </td>
                                        <td><p>September 15, 2021</p></td>
                                        <td>
                                            <div class="input-field">
                                                <input type="text" id="pay_rec_sept" name="pay_rec_sept" value="<?php echo $data['tax_payers_data_pay_rec_sept'];?>" placeholder="0">
                                            </div>
                                        </td>
                                        <td><p>November 15, 2021</p></td>
                                        <td>
                                            <div class="input-field">
                                                <input type="text" id="pay_rec_nov" name="pay_rec_nov" value="<?php echo $data['tax_payers_data_pay_rec_nov'];?>" placeholder="0">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>August 15, 2021</p>
                                        </td>
                                        <td>
                                            <div class="input-field">
                                                <input type="text" id="pay_rec_august" name="pay_rec_august" value="<?php echo $data['tax_payers_data_pay_rec_august'];?>" placeholder="0">
                                            </div>
                                        </td>
                                        <td><p>October 15, 2021</p></td>
                                        <td>
                                            <div class="input-field">
                                                <input type="text" id="pay_rec_oct" name="pay_rec_oct" value="<?php echo $data['tax_payers_data_pay_rec_oct'];?>" placeholder="0">
                                            </div>
                                        </td>
                                        <td><p>December 15, 2021</p></td>
                                        <td>
                                            <div class="input-field">
                                                <input type="text" id="pay_rec_dec" name="pay_rec_dec" value="<?php echo $data['tax_payers_data_pay_rec_dec'];?>" placeholder="0">
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row checklist">
                            <div class="col s12">
                                <div class="section-header">
                                    <h5>Tax Preparation Checklist</h5>
                                    <hr class="sector_devider">
                                    <P>Please provide the following documentation:</P>
                                </div>
                            </div>
                            <div class="col s12">
                                <label>
                                    <?php checkbox_toggler($data['tax_payers_data_w2_form'],'w2_form');?>
                                    <span class="white-text">All Forms W-2 (wages), 1099-INT (interest), 1099-DIV (dividends), 1099-B (proceeds from broker or barter transactions), 1099‑R
(pensions and IRA distributions), Schedules K-1 from partnerships, S corporations, estates and trusts, and other income reporting
statements, including all copies provided from the payer.</span>
                                </label>
                            </div>
                            <div class="col s12">
                                <label>
                                    <?php checkbox_toggler($data['tax_payers_data_a1095_form'],'a1095_form');?>
                                    <span class="white-text">Form 1095-A (for health insurance purchased through a public exchange), Form 1095-B (for health insurance purchased outside
of a public exchange), or Form 1095-C (for employer-provided health insurance coverage).</span>
                                </label>
                            </div>
                            <div class="col s12">
                                <label>
                                    <?php checkbox_toggler($data['tax_payers_data_new_client_last_copy'],'new_client_last_copy');?>
                                    <span class="white-text">If you are a new client, provide copies of last year’s tax returns.</span>
                                </label>
                            </div>
                            <div class="col s12">
                                <label>
                                    <?php checkbox_toggler($data['tax_payers_data_not_to_fill_out_org'],'not_to_fill_out_org');?>
                                    <span class="white-text">The completed Individual Income Tax Organizer. Note: If you choose not to fill out the organizer, you must at least answer
the “Yes” or “No” questions under “Questions — All Taxpayers.”</span>
                                </label>
                            </div>
                            <div class="col s12">
                                <label>
                                    <?php checkbox_toggler($data['tax_payers_data_copy_closing_state'],'copy_closing_state');?>
                                    <span class="white-text">Copy of the closing statement if you bought or sold real estate.</span>
                                </label>
                            </div>
                            <div class="col s12">
                                <label>
                                    <?php checkbox_toggler($data['tax_payers_data_mile_fig_auto'],'mile_fig_auto');?>
                                    <span class="white-text">Mileage figures for any automobile expenses claimed, including total mileage, commuting mileage, and business mileage.</span>
                                </label>
                            </div>
                            <div class="col s12">
                                <label>
                                    <?php checkbox_toggler($data['tax_payers_data_detail_any_tax_made'],'detail_any_tax_made');?>
                                    <span class="white-text">Detail of estimated tax payments made, if any.</span>
                                </label>
                            </div>
                            <div class="col s12">
                                <label>
                                    <?php checkbox_toggler($data['tax_payers_data_inc_ded_cat'],'inc_ded_cat');?>
                                    <span class="white-text">Income and deductions categorized on a separate sheet for business or rental activities.</span>
                                </label>
                            </div>
                            <div class="col s12">
                                <label>
                                    <?php checkbox_toggler($data['tax_payers_data_list_item_ded_cat'],'list_item_ded_cat');?>
                                    <span class="white-text">List of itemized deductions categorized on a separate sheet for medical, taxes, interest, charitable, and miscellaneous deductions.</span>
                                </label>
                            </div>
                            <div class="col s12">
                                <label>
                                    <?php checkbox_toggler($data['tax_payers_data_copy_all_acknow'],'copy_all_acknow');?>
                                    <span class="white-text">Copy of all acknowledgement letters received from charitable organizations for contributions made in 2021.</span>
                                </label>
                            </div>
                        </div>

                        <div class="row responsibilities_list">
                            <div class="col s12">
                                <div class="section-header">
                                    <h5>Taxpayer Responsibilities</h5>
                                    <hr class="sector_devider">
                                </div>
                            </div>

                            <div class="col s12">
                                <ul>
                                    <li>You agree to provide us all income and deductible expense information. If you receive additional information after we begin
                                        working on your return, you will contact us immediately to ensure your completed tax returns contain all relevant information.</li>
                                    <li>You affirm that all expenses or other deduction amounts are accurate and that you have all required supporting written records.
                                        In some cases, we will ask to review your documentation.</li>
                                    <li>You must be able to provide written records of all items included on your return if audited by either the IRS or state tax authority.
                                        We can provide guidance concerning what evidence is acceptable.</li>
                                    <li>You must review the return carefully before signing to make sure the information is correct.</li>
                                    <li>Fees must be paid before your tax return is delivered to you or filed for you. If you terminate this engagement before completion,
                                        you agree to pay a fee for work completed. A retainer is required for preparation of late returns.</li>
                                    <li>You should keep a copy of your tax return and any related tax documents. You may be assessed a fee if you request a copy in the
                                        future.</li>
                                </ul>

                                <span style="text-align: left"><p><b>Signatures.</b> By signing below, you acknowledge that you have read, understand, and accept your obligations and responsibilities.
                                        For a joint return, both taxpayers must sign.</p></span>
                            </div>
                            <div class="col s12 l4">
                                <div class="input-field">
                                    <input type="text" id="tax_initial_sig" name="tax_initial_sig" value="<?php echo $data['tax_payers_data_tax_initial_sig'];?>" >
                                    <label for="tax_initial_sig" class="white-text">Taxpayer initials</label>
                                </div>
                            </div>
                            <div class="col s12 l4">
                                <div class="input-field">
                                    <input type="text" id="tax_sp_initial_sig" name="tax_sp_initial_sig" value="<?php echo $data['tax_payers_data_tax_sp_initial_sig'];?>" >
                                    <label for="tax_sp_initial_sig" class="white-text">Taxpayer's spouse initials</label>
                                </div>
                            </div>
                            <div class="col s12 l4">
                                <div class="input-field">
                                    <input type="text" id="sign_date" name="sign_date" class="datepicker" value="<?php echo get_dob_display($data['tax_payers_data_sign_date']);?>">
                                    <label for="sign_date" class="grey-text text-lighten-2">Date</label>
                                </div>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col s12">
                            <div class="section-header">
                                <h5>Privacy Policy</h5>
                                <hr class="sector_devider">
                            </div>
                        </div>
                        <div class="col s12">
                            <p class="left-align" style="margin-bottom: 5px">The nature of our work requires us to collect certain nonpublic information. We collect financial and personal information from
                                applications, worksheets, reporting statements, and other forms, as well as interviews and conversations with our clients and
                                affiliates. We may also review banking and credit card information about our clients in the performance of receipt of payment.
                                Under our policy, all information we obtain about you will be provided by you or obtained with your permission.</p>
                            <p class="left-align">Our firm has procedures and policies in place to protect your confidential information. We restrict access to your confidential
                                information to those within our firm who need to know in order to provide you with services. We will not disclose your personal
                                information to a third party without your permission, except where required by law. We maintain physical, electronic, and
                                procedural safeguards in compliance with federal regulations that protect your personal information from unauthorized access.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <div class="section-header">
                                <h5>Additional Note</h5>
                                <hr class="sector_devider">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="additional_note"><?php echo $data['tax_payers_data_additional_note'];?></textarea>
                            <label for="textarea1" class="white-text">Additional notes if any</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <div class="section-header">
                                <h5>Taxpayer Consent</h5>
                                <hr class="sector_devider">
                            </div>
                        </div>
                    </div>

                    <p>
                        <label>
                            <input type="checkbox" id="consentConf" name="consentConf"/>
                            <span class="white-text">I declare all the above information is correct (Name initials will be saved as your consent)  <i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i> Check Mark</span>
                        </label>
                    </p>

                </div>

                <div class="row">
                    <div class="col s6 l12">
                        <button  class="btn-large waves-effect waves-light teal darken-4" type="submit" onclick="update_input()"> Update </button>
                    </div>
                </div>
        </form>

    </div>
    <?php include_once "footer-desclaimer.php";?>
    <!-- Materialize Container Ends Here -->
</div>

<?php require_once "footer.php" ?>
