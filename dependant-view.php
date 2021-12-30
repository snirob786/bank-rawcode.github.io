<?php
$i=1;
while ($result_dep_array = $result_dep->fetch_assoc()){
?>


    <div class="dependant-container<?php echo $i;?>">
        <div class="row valign-wrapper">
            <div class="col s12">
                <h6 class="left">Dependant <?php echo $i;?></h6>
            </div>
            <div class="col s4">
                <input type="text" id="depId" value="<?php echo $i;?>" disabled>
                <a class="btn red white-text waves-effect waves-light right"  id="removeDependant" onclick="removeDependant(<?php echo $i;?>)">-</a>
            </div>
        </div>
        <div class="row">
            <div class="col s12 l4">
                <div class="input-field">
                    <input type="text" id="depname" name="<?php echo 'depname'.$i;?>" value="<?php echo $result_dep_array['tax_payers_dependants_data_depname'];?>">
                    <label for="depname" class="white-text">Full Name</label>
                </div>
            </div>

            <div class="col s12 l4">
                <div class="input-field">
                    <input type="text" id="deprel" name="<?php echo 'deprel'.$i;?>" value="<?php echo $result_dep_array['tax_payers_dependants_data_rel'];?>">
                    <label for="deprel" class="white-text">Relationship</label>
                </div>
            </div>

            <div class="col s12 l4">
                <div class="input-field">
                    <input type="text" id="depdob" name="<?php echo 'depdob'.$i;?>" class="datepicker" value="<?php echo get_dob_display($result_dep_array['tax_payers_dependants_data_depdob']);?>">
                    <label for="depdob" class="white-text">Date of Birth</label>
                </div>
            </div>
            <div class="col s12 l4">
                <div class="input-field">
                    <input type="text" id="depgender" name="<?php echo 'depgender'.$i;?>" value="<?php echo $result_dep_array['tax_payers_dependants_data_gender'];?>">
                    <label for="depgender" class="white-text">Gender</label>
                </div>
            </div>
            <div class="col s12 l4">
                <div class="input-field">
                    <input type="text" id="depssn" name="<?php echo 'depssn'.$i;?>" value="<?php echo $result_dep_array['tax_payers_dependants_data_depssn'];?>">
                    <label for="depssn" class="white-text">SSN</label>
                </div>
            </div>
            <div class="col s12 l4">
                <div class="input-field">
                    <input type="text" id="deplived" name="<?php echo 'deplived'.$i;?>" value="<?php echo $result_dep_array['tax_payers_dependants_data_deplived'];?>">
                    <label for="deplived" class="white-text">Month Lived With You</label>
                </div>
            </div>
        </div>

        <div class="row valign-wrapper">
            <div class="col s12 l12">
                <div class="radio-btn-close radio-btn-close1">
                    <div class="white-text left">Is the dependant Disabled?</div>
                    <div class="right">
                        <?php option_checked($matcher,$result_dep_array['tax_payers_dependants_data_depdsiabled'],'depdsiabled'.$i);?>
                    </div>
                </div>

                <div class="radio-btn-close radio-btn-close2">
                    <div class="white-text left">Is the dependant full time student?</div>
                    <div class="right">
                        <?php option_checked($matcher,$result_dep_array['tax_payers_dependants_data_depfullstudent'],'depfullstudent'.$i);?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$i++;
}
?>