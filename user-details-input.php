<?php
    require_once "header.php";
    include_once "session-check.php";
?>

<div id="user-detail-input" class="container">
    <div class="form-container">
        <div class="container">
            <?php include_once 'nav-header.php';?>
        </div>
        <form id="submitinput">
    <!--        Tax Payer's Details-->

            <div class="container">
                <div class="row">
                    <div class="col s8">
                        <div id="heading" class="heading">Enter Your Full Details</div>
                    </div>
                    <div class="col s4">
                        <?php if (isset($session_id)){?>
                            <button id="logout" class="btn-large waves-effect waves-light red right" type="button"><a href="/logout.php?argument=logOut" class="white-text">Logout</a></button>
                        <?php }?>
                    </div>
                </div>
                <div id="test"></div>
                <div class="row">
                    <div class="col s12">
                        <div class="sub-heading">Taxpayer Information</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="fname" name="fname">
                            <label for="fname" class="white-text">First Name<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="mname" name="mname">
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

                    <div class="col s12 l3">
                        <div class="input-field">
                            <select name="gender">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label class="white-text">Gender</label>
                        </div>
                    </div>

                    <div class="col s12 l3">
                        <div class="input-field">
                            <input type="text" id="ssn" name="ssn" value="<?php echo $ssn_display;?>" disabled>
                            <label for="ssn" class="grey-text text-lighten-2">Social Security Number</label>
                        </div>
                    </div>

                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="dob" name="dob" class="datepicker" value="<?php echo $dob_display;?>">
                            <label for="dob" class="grey-text text-lighten-2">Date of Birth</label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="ocupation" name="ocupation">
                            <label for="ocupation" class="white-text">Occupation<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="phone" name="phone">
                            <label for="phone" class="white-text">Phone Number<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="email" name="email">
                            <label for="email" class="white-text">Email Address<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
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
                            <input type="text" id="spfname" name="spfname">
                            <label for="spfname" class="white-text">Spouse's First Name</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spmname" name="spmname">
                            <label for="spmname" class="white-text">Spouse's Middle Name</label>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="splname" name="splname" >
                            <label for="splname" class="white-text">Spouse's Last Name</label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="spssn" name="spssn" >
                            <label for="spssn" class="white-text">Spouse's Social Security Number</label>
                        </div>
                    </div>

                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="spdob" name="spdob" class="datepicker">
                            <label for="spdob" class="white-text">Spouse's Date of Birth</label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spocupation" name="spocupation">
                            <label for="spocupation" class="white-text">Spouse's Occupation</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spphone" name="spphone">
                            <label for="spphone" class="white-text">Spouse's Phone Number</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="spemail" name="spemail">
                            <label for="spemail" class="white-text">Spouse's Email Address</label>
                        </div>
                    </div>
                </div>


                <!--        Tax Payer's Wife's Details-->
                <div class="row">
                    <div class="col s12">
                        <div class="sub-heading">Address</div>
                    </div>
                </div>


                <div class="row">
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="street" name="street">
                            <label for="street" class="white-text">Street<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="apt" name="apt">
                            <label for="apt" class="white-text">Apt/Suite</label>
                        </div>
                    </div>

                    <div class="col s12 l4">
                        <div class="input-field">
                            <input type="text" id="city" name="city">
                            <label for="city" class="white-text">City<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="state" name="state">
                            <label for="state" class="white-text">State<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>

                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="zip" name="zip">
                            <label for="zip" class="white-text">Zip<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <div class="sub-heading">Personal Information</div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6">
                        <select name="isblind">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <label class="white-text">Are You Blind</label>
                    </div>

                    <div class="input-field col s12 l6">
                        <select name="isspblind">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <label class="white-text">Are Your Spouse Blind</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l6">
                        <select name="isdisable">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <label class="white-text">Are You Disable</label>
                    </div>

                    <div class="input-field col s12 l6">
                        <select name="isspdisable">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <label class="white-text">Are Your Spouse Disable</label>
                    </div>
                </div>

<!--                <div class="row">-->
<!--                    <div class="input-field col s12 l6">-->
<!--                        <select name="prescampfund">-->
<!--                            <option value="" disabled selected>Choose your option</option>-->
<!--                            <option value="yes">Yes</option>-->
<!--                            <option value="no">No</option>-->
<!--                        </select>-->
<!--                        <label class="white-text">Your Pres. Campaign Fund</label>-->
<!--                    </div>-->
<!---->
<!--                    <div class="input-field col s12 l6">-->
<!--                        <select name="spprescampfund">-->
<!--                            <option value="" disabled selected>Choose your option</option>-->
<!--                            <option value="yes">Yes</option>-->
<!--                            <option value="no">No</option>-->
<!--                        </select>-->
<!--                        <label class="white-text">Your Spouse's Pres. Campaign Fund</label>-->
<!--                    </div>-->
<!--                </div>-->

                <div class="row">
                    <div class="input-field col s12 l6">
                        <select name="marital_status" id="marital_status" >
                            <option value="" disabled selected>Choose your option</option>
                            <option value="single">Single</option>
                            <option value="married_filling_jointly">Married Filing Jointly</option>
                            <option value="married_filling_separately">Married Filing Separately</option>
                            <option value="head_of_house">Head of household</option>
                            <option value="qualifying_widow">Qualifying widow(er)</option>
                        </select>
                        <label class="white-text">Filing Status<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                    </div>
                    <div class="col s12 l6">
                        <div class="input-field">
                            <input type="text" id="spousedead" name="spousedead" class="datepicker" >
                            <label for="spousedead" class="white-text">Date of Spouse's Death (If Applicable)</label>
                        </div>
                    </div>
                </div>

                <div class="row valign-wrapper">
                    <div class="col s8">
                        <div class="sub-heading">Dependent Information</div>
                        <input id="depCount" name="depCount" type="number" value="0" class="" disabled>
                    </div>
                    <div class="col s4">
                        <a class="btn green-btn-custom white-text waves-effect waves-light right" onclick="adddependant()">Add a Dependant</a>
                    </div>
                </div>
                <div class="dependant-container-parent">

                </div>
                    <hr class="sector_devider">

                <div class="row">
                    <div class="col s12">
                        <div class="sub-heading">General Questionnaires (all <i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i>)</div>
                    </div>
                </div>

                <div id="deduction" class="row">
                    <div class="radio-btn-close">
                        <div class="col s12 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">1.</span> Did your name, address or marital status change during the year?</div>
                        </div>
                        <div class="col s12 l3">
                            <div class="right">
                                <label>
                                    <input name="addresschange" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="addresschange" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s12 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">2.</span> Are you being claimed as dependent on another tax return?</div>
                        </div>
                        <div class="col s12 l3">
                            <div class="right">
                                <label>
                                    <input name="claimeddependant" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="claimeddependant" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">3.</span> Were you notified by the IRS or STATE of a change to any prior year tax return?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="notifiedirs" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="notifiedirs" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">4.</span> Are you (or your spouse) blind or permanently disabled?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                            <label>
                                <input name="permdisabled" type="radio" class="with-gap" value="yes" checked/>
                                <span class="white-text">yes</span>
                            </label>
                            <label>
                                <input name="permdisabled" type="radio" class="with-gap" value="no"/>
                                <span class="white-text">No</span>
                            </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">5.</span> Do you have health insurance last year?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="healthinsurance" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="healthinsurance" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">6.</span> Did you receive form 1095-a from marketplace?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="marketplace" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="marketplace" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">7.</span> Did you receive rent from real estate or other property? </div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="rentfrom" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="rentfrom" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">8.</span> Do you have a foreign bank account, trust, or business? </div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="foreignbankaccount" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="foreignbankaccount" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">9.</span> Were there any births, deaths, marriages, divorces or adoptions in your immediate family?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="immediatefamilyadoptaion" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="immediatefamilyadoptaion" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">10.</span> Did you own $50,000 or more in foreign financial assets?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="moreforeignfinance" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="moreforeignfinance" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">11.</span> Do you have any foreign income, bank account, trust or business?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="foreignincome" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="foreignincome" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">12.</span> Did you receive any distribution from an IRA, profit sharing or pension plan?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="pensionplan" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="pensionplan" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">13.</span> Do you have a Medical or Health Savings Account (MSA or HAS)?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="msa_has" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="msa_has" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">14.</span> Did you buy, sell, or use any digital currency during the year?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="digitalcurrency" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="digitalcurrency" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">15.</span> Did you pay interest on a student loan for yourself, your spouse, or your dependent during the year?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="interestonstudentloan" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="interestonstudentloan" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">16.</span> Did you receive 1098 T (tuition form) for yourself, your spouse or your dependents?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="tutionform1098" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="tutionform1098" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">17.</span> Have you or your dependents taken a distribution from a qualified Tuition program (QTP) or 529 plan during the year?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="dependantqtp" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="dependantqtp" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">18.</span> Did you purchase a new alternative technology vehicle or electric vehicle?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="techvehicle" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="techvehicle" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">19.</span> Did you install any energy property to your residence such as solar water heaters, generators or fuel cells or energy efficient improvements such as exterior doors or windows, insulation, heat pumps, furnaces, central air conditioners or water heaters? </div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="energyproperty" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="energyproperty" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">20.</span> Did you purchase a new home this year?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="purchasenewhome" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="purchasenewhome" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">21.</span> Did you sale your primary or rental property this year?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="didusell" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="didusell" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">22.</span> Did you donate a to charitable organization?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="donate_charitable" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="donate_charitable" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">23.</span> Did you have any debts cancelled, forgiven, or refinanced?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="debtscancelled" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="debtscancelled" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="radio-btn-close">
                        <div class="col s8 l9">
                            <div class="white-text left left-align"><span class="teal-text text-darken-4">24.</span> Did you go through bankruptcy proceedings?</div>
                        </div>
                        <div class="col s4 l3">
                            <div class="right">
                                <label>
                                    <input name="bankruptcy" type="radio" class="with-gap" value="yes" checked/>
                                    <span class="white-text">yes</span>
                                </label>
                                <label>
                                    <input name="bankruptcy" type="radio" class="with-gap" value="no"/>
                                    <span class="white-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                <div class="radio-btn-close">
                    <div class="col s8 l9">
                        <div class="white-text left left-align"><span class="teal-text text-darken-4">25.</span> Did you receive both stimulus checks from IRS?</div>
                    </div>
                    <div class="col s4 l3">
                        <div class="right">
                            <label>
                                <input name="stimulus_irs" type="radio" class="with-gap" value="yes" checked/>
                                <span class="white-text">yes</span>
                            </label>
                            <label>
                                <input name="stimulus_irs" type="radio" class="with-gap" value="no"/>
                                <span class="white-text">No</span>
                            </label>
                        </div>
                    </div>
                </div>

                    <div class="row">
                        <div class="col s12">
                            <div class="sub-heading">Additional Note</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="additional_note"></textarea>
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
                            <button  class="btn-large waves-effect waves-light teal darken-4" type="submit" onclick="submit_input()"> Submit </button>
                    </div>
                </div>
            </form>

            </div>
    <?php include_once "footer-desclaimer.php";?>
    <!-- Materialize Container Ends Here -->
    </div>

<!--</div>-->

<?php require_once "footer.php" ?>