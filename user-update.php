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
                            <label for="mname" class="white-text">Middle Name</label>
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
                            <select name="gender">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label class="white-text">Gender</label>
                        </div>
                    </div>

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

                <!--        Tax Payer's Address Details-->
                <div class="row">
                    <div class="col s12">
                        <div class="sub-heading">Tax Payer's Address</div>
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
                            <label for="spfname" class="white-text">Spouse's First Name</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spmname" name="spmname" value="<?php echo $data['tax_payers_data_spmname'];?>">
                            <label for="spmname" class="white-text">Spouse's Middle Name</label>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="splname" name="splname" value="<?php echo $data['tax_payers_data_splname'];?>">
                            <label for="splname" class="white-text">Spouse's Last Name</label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col s12 l4">
                        <div class="input-field">
                            <select name="spgender">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label class="white-text">Gender</label>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spssn" name="spssn" value="<?php echo $data['tax_payers_data_spssn'];?>">
                            <label for="spssn" class="white-text">Spouse's Social Security Number</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spdob" name="spdob" class="datepicker" value="<?php echo $spdob_display;?>">
                            <label for="spdob" class="white-text">Spouse's Date of Birth</label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spocupation" name="spocupation" value="<?php echo $data['tax_payers_data_spocupation'];?>">
                            <label for="spocupation" class="white-text">Spouse's Occupation</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spphone" name="spphone" value="<?php echo $data['tax_payers_data_spphone'];?>">
                            <label for="spphone" class="white-text">Spouse's Phone Number</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spemail" name="spemail" value="<?php echo $data['tax_payers_data_spemail'];?>">
                            <label for="spemail" class="white-text">Spouse's Email Address</label>
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
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spstreet" name="spstreet" value="<?php echo $data['tax_payers_data_street'];?>">
                            <label for="street" class="white-text">Spouse Street<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spapt" name="spapt" value="<?php echo $data['tax_payers_data_apt'];?>">
                            <label for="apt" class="white-text">Spouse Apt/Suite</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spcity" name="city" value="<?php echo $data['tax_payers_data_city'];?>">
                            <label for="city" class="white-text">Spouse City<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="spstate" name="spstate" value="<?php echo $data['tax_payers_data_state'];?>">
                            <label for="state" class="white-text">Spouse State<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>

                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="spzip" name="spzip" value="<?php echo $data['tax_payers_data_zip'];?>">
                            <label for="zip" class="white-text">Spouse Zip<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="input-field col s12 l6">
                        <select name="isblind">
                            <?php option_selector($matcher,$data['tax_payers_data_isblind'])?>
                        </select>
                        <label class="white-text">Are You Blind</label>
                    </div>

                    <div class="input-field col s12 l6">
                        <select name="isspblind">
                            <?php option_selector($matcher,$data['tax_payers_data_isspblind'])?>
                        </select>
                        <label class="white-text">Are Your Spouse Blind</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6">
                        <select name="isdisable">
                            <?php option_selector($matcher,$data['tax_payers_data_isdisable'])?>
                        </select>
                        <label class="white-text">Are You Disable</label>
                    </div>

                    <div class="input-field col s12 l6">
                        <select name="isspdisable">
                            <?php option_selector($matcher,$data['tax_payers_data_isspdisable'])?>
                        </select>
                        <label class="white-text">Are Your Spouse Disable</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6">
                        <select name="marital_status" id="marital_status" >
                            <?php option_selector($matcher_marriage,$data['tax_payers_data_marital_status'])?>
                        </select>
                        <label class="white-text">Filing Status<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
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
                        <div class="sub-heading">Taxpayer Child/Dependents Information</div>
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
                            <option value="" disabled selected>Choose your option</option>
                            <option value="paid">Paid</option>
                            <option value="received">Received</option>
                        </select>
                        <label class="white-text">Did you pay or receive alimony in 2021?</label>
                    </div>

                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="rcvalimonyamnt" name="rcvalimonyamnt" value="<?php echo $data['tax_payers_data_spousedead'];?>" >
                            <label for="rcvalimonyamnt" class="white-text">Amount of the recieved alimony ($)</label>
                        </div>
                    </div>

                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="rcpntssn" name="rcpntssn" value="<?php echo $data['tax_payers_data_spousedead'];?>" >
                            <label for="rcpntssn" class="white-text">Recipient's SSN</label>
                        </div>
                    </div>
                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="doseparation" name="doseparation" class="datepicker" value="<?php echo $data['tax_payers_data_spousedead'];?>" >
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
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">4.</span> Are you (or your spouse) blind or permanently disabled?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_permdisabled'],'permdisabled');?>
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
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">9.</span> Were there any births, deaths, marriages, divorces or adoptions in your immediate family?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_immediatefamilyadoptaion'],'immediatefamilyadoptaion');?>
                            </div>
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
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">14.</span> Did you buy, sell, or use any digital currency during the year?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_digitalcurrency'],'digitalcurrency');?>
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
                                <?php option_checked($matcher,$data['tax_payers_data_stimulus_irs'],'purchase_health');?>
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
                                <?php option_checked($matcher,$data['tax_payers_data_stimulus_irs'],'ded_retirement');?>

                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">28.</span> Did you pay anyone for domestic services in your home?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_stimulus_irs'],'pay_domestic');?>

                            </div>
                        </div>
                    </div>


                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">29.</span> Did you purchase a new energy-efficient car, truck, or van?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_stimulus_irs'],'pur_new_energy');?>

                            </div>
                        </div>
                    </div>
                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">30.</span> Are you a member of the military?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_stimulus_irs'],'mem_military');?>
                            </div>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="input-field">
                            <input type="text" id="stateofresidency" name="stateofresidency" value="<?php echo $data['tax_payers_data_spousedead'];?>" >
                            <label for="stateofresidency" class="white-text">State of residency</label>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">31.</span> Were you a citizen of or lived in a foreign country?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_stimulus_irs'],'lived_foreign');?>
                            </div>
                        </div>
                    </div>

                    <div class="col s12">
                        <div class="input-field">
                            <input type="text" id="foreigncountryname" name="foreigncountryname" value="<?php echo $data['tax_payers_data_spousedead'];?>" >
                            <label for="foreigncountryname" class="white-text">Name of the Foreign country</label>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">32.</span> Did you receive any economic impact payments (stimulus payments) during 2021?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_stimulus_irs'],'rcv_ecn_impact');?>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 50px; margin-bottom: 0 !important;">
                        <div class="col s12 l6">
                            <div class="input-field">
                                <input type="text" id="impactpayments" name="impactpayments" value="<?php echo $data['tax_payers_data_spousedead'];?>" >
                                <label for="impactpayments" class="white-text">impact payments amount</label>
                            </div>
                        </div>

                        <div class="col s12 l6">
                            <div class="input-field" style="margin-bottom: 0 !important;">
                                <input type="text" id="impactpaymentsdate" name="impactpaymentsdate" class="datepicker" value="<?php echo $dob_display;?>">
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
                                <?php option_checked($matcher,$data['tax_payers_data_stimulus_irs'],'adopted_child');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">34.</span> Did you receive any advance Child Tax Credit payment?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_stimulus_irs'],'child_tax_credit');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">35.</span> Do you have any children who have unearned income of $1,100 or more?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_stimulus_irs'],'unearned_children');?>
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
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">41.</span> Did you, or do you plan to, contribute money before April 18, 2022 to an HSA for 2021?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_contributee_hsa'],'contributee_hsa');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">42.</span> Did you pay any interest on a loan for a boat or RV that has living quarters?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_interest_loan_rv'],'interest_loan_rv');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">43.</span> Did you pay sales taxes on a major purchase in 2021, such as a vehicle, boat, or home?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_taxes_major_purchase'],'taxes_major_purchase');?>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">44.</span> Did you work from a home office or use your car for business?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_work_from_home'],'work_from_home');?>
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
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">49.</span> Did you use any mortgage loan proceeds for purposes other than to buy, build, or substantially improve your home?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <?php option_checked($matcher,$data['tax_payers_data_substantially_improve_home'],'substantially_improve_home');?>
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

                    <hr class="sector_devider margin-top-custom">


                    <div class="row">
                        <div class="col s12">
                            <div class="sub-heading">Additional Note</div>
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
                            <div class="sub-heading">Taxpayer Consent</div>
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
