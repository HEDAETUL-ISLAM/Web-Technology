<?php
    $donor_fname = "";
    $donor_lname = "";
    $donor_company = "";
    $donor_address1 = "";
    $donor_address2 = "";
    $donor_city = "";
    $donor_state = "";
    $donor_zip = "";
    $donor_country = "";
    $donor_phone = "";
    $donor_fax = "";
    $donor_email = "";
    $donor_amount = "";
    $donor_other_amount = "";
    $donor_rdonation = "";
    $donor_credit_card_for = "";
    $donor_credit_card_months = "";

    $honor_donation_to = "";
    $honor_donation_of = "";
    $honorName = "";
    $honorDonationAckTo = "";
    $honorDonationAddress = "";
    $honorDonationCity = "";
    $honorDonationState = "";
    $honorDonationZipcode = "";

    $additionalCompanyName = "";
    $additionalInfo1 = "";
    $additionalInfo2 = "";
    $additionalInfo3 = "";
    $additionalComments = "";
    $additional_email = "";
    $additional_pmail = "";
    $additional_tlphone = "";
    $additional_fax = "";
    $additional_permission = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $donor_fname = $_POST['donor_fname'];
        $donor_lname = $_POST['donor_lname'];
        $donor_company = $_POST['donor_company'];
        $donor_address1 = $_POST['donor_address1'];
        $donor_address2 = $_POST['donor_address2'];
        $donor_city = $_POST['donor_city'];
        $donor_state = $_POST['donor_state'];
        $donor_zip = $_POST['donor_zip'];
        $donor_country = $_POST['donor_country'];
        $donor_phone = $_POST['donor_phone'];
        $donor_fax = $_POST['donor_fax'];
        $donor_email = $_POST['donor_email'];
        $donor_amount = $_POST['donor_amount'];
        $donor_other_amount = $_POST['donor_other_amount'];
        $donor_rdonation = $_POST['donor_rdonation'];
        $donor_credit_card_for = $_POST['donor_credit_card_for'];
        $donor_credit_card_months = $_POST['donor_credit_card_months'];

        $honor_donation = $_POST['honor_donation'];
        $honorName = $_POST['honorName'];
        $honorDonationAckTo = $_POST['honorDonationAckTo'];
        $honorDonationAddress = $_POST['honorDonationAddress'];
        $honorDonationCity = $_POST['honorDonationCity'];
        $honorDonationState = $_POST['honorDonationState'];
        $honorDonationZipcode = $_POST['honorDonationZipcode'];

        $additionalCompanyName = $_POST['additionalCompanyName'];
        $additionalInfo1 = $_POST['additionalInfo1'];
        $additionalInfo2 = $_POST['additionalInfo2'];
        $additionalInfo3 = $_POST['additionalInfo3'];
        $additionalComments = $_POST['additionalComments'];
        $additional_email = $_POST['additional_email'];
        $additional_pmail = $_POST['additional_pmail'];
        $additional_tlphone = $_POST['additional_tlphone'];
        $additional_fax = $_POST['additional_fax'];
        $additional_permission = $_POST['additional_permission'];
    }

?>



<html>
    <head>
        <title>Donation Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="main-block" >
            <form method="POST" action="info.php">
                <fieldset>
                    <legend >
                        <h2 class="header">Donor Information</h2>
                    </legend>
                    <div class="donor-information">
                        <div >
                            <div>
                                <label>First Name<label style="color:red">*</label></label>
                                <input type="text" name="donor_fname" value="<?php echo $donor_fname; ?>" required>
                            </div>
                            <div>
                                <label>Last Name<label style="color:red">*</label></label>
                                <input type="text" name="donor_lname" value="<?php echo $donor_lname; ?>" required>
                            </div>
                            <div>
                                <label>Company</label>
                                <input type="text" name="donor_company" value="<?php echo $donor_company; ?>" >
                            </div>
                            <div>
                                <label>Address 1<label style="color:red">*</label></label>
                                <input type="text" name="donor_address1" value="<?php echo $donor_address1; ?>" required>
                            </div>
                            <div>
                                <label>Address 2</label>
                                <input type="text" name="donor_address2" value="<?php echo $donor_address2; ?>" >
                            </div>
                            <div>
                                <label>City<label style="color:red">*</label></label>
                                <input type="text" name="donor_city" value="<?php echo $donor_city; ?>" required>
                            </div>
                            <div>
                                <label>State<label style="color:red">*</label></label>
                                <select class="state" name="donor_state" required>
                                    <option value=""></option>
                                    <option value="dhaka" <?php if((isset($_POST['donor_state'])) && ($_POST['donor_state']=="dhaka")) echo "selected" ?> >Dhaka</option>
                                    <option value="khulna" <?php if((isset($_POST['donor_state'])) && ($_POST['donor_state']=="khulna")) echo "selected" ?> >Khulna</option>
                                    <option value="rangpur" <?php if((isset($_POST['donor_state'])) && ($_POST['donor_state']=="rangpur")) echo "selected" ?> >Rangpur</option>
                                    <option value="barishal" <?php if((isset($_POST['donor_state'])) && ($_POST['donor_state']=="barishal")) echo "selected" ?> >Barishal</option>
                                    <option value="syleth" <?php if((isset($_POST['donor_state'])) && ($_POST['donor_state']=="syleth")) echo "selected" ?> >Syleth</option>
                                    <option value="chittagong" <?php if((isset($_POST['donor_state'])) && ($_POST['donor_state']=="chittagong")) echo "selected" ?> >Chittagong</option>
                                    <option value="jessore" <?php if((isset($_POST['donor_state'])) && ($_POST['donor_state']=="jessore")) echo "selected" ?> >Jerrore</option>
                                </select>
                            </div>
                            <div>
                                <label>Zip Code<label style="color:red">*</label></label>
                                <input type="text" name="donor_zip" value="<?php echo $donor_zip; ?>" required>
                            </div>
                            <div>
                                <label>Country<label style="color:red">*</label></label>
                                <select class="country" name="donor_country" required>
                                    <option value=""></option>
                                    <option value="bangladesh" <?php if((isset($_POST['donor_country'])) && ($_POST['donor_country']=="bangladesh")) echo "selected" ?> >Bangladesh</option>
                                    <option value="india" <?php if((isset($_POST['donor_country'])) && ($_POST['donor_country']=="india")) echo "selected" ?> >India</option>
                                    <option value="nepal" <?php if((isset($_POST['donor_country'])) && ($_POST['donor_country']=="nepal")) echo "selected" ?> >Nepal</option>
                                    <option value="vutan" <?php if((isset($_POST['donor_country'])) && ($_POST['donor_country']=="vutan")) echo "selected" ?> >Vutan</option>
                                    <option value="srilonka" <?php if((isset($_POST['donor_country'])) && ($_POST['donor_country']=="srilonka")) echo "selected" ?> >Srilonka</option>
                                    <option value="maldip" <?php if((isset($_POST['donor_country'])) && ($_POST['donor_country']=="maldip")) echo "selected" ?> >Maldip</option>
                                    <option value="afgan" <?php if((isset($_POST['donor_country'])) && ($_POST['donor_country']=="afgan")) echo "selected" ?> >Afgan</option>
                                </select>
                            </div>
                            <div>
                                <label>Phone</label>
                                <input type="text" name="donor_phone" value="<?php echo $donor_phone; ?>" >
                            </div>
                            <div>
                                <label>Fax</label>
                                <input type="text" name="donor_fax" value="<?php echo $donor_fax; ?>" >
                            </div>
                            <div>
                                <label>Email<label style="color:red">*</label></label>
                                <input type="text" name="donor_email" value="<?php echo $donor_email; ?>" required>
                            </div>
                            <div>
                                <label>Donation Amount<label style="color:red">*</label> <br/><label class="custom-label">(Check a button or type your amount) </label></label>
                                <div class="damount" required>
                                    <input type="radio" name="donor_amount" value="None" <?php if((isset($_POST['donor_amount'])) && ($_POST['donor_amount']=="None")) echo "checked" ?>  required>
                                    <label for="male" >None</label>
                                    <input type="radio" name="donor_amount" value="50" <?php if((isset($_POST['donor_amount'])) && ($_POST['donor_amount']=="50")) echo "checked" ?>  required>
                                    <label for="female" >$50</label>
                                    <input type="radio" name="donor_amount" value="75" <?php if((isset($_POST['donor_amount'])) && ($_POST['donor_amount']=="75")) echo "checked" ?>  required>
                                    <label for="other" >$75</label>
                                    <input type="radio" name="donor_amount" value="100" <?php if((isset($_POST['donor_amount'])) && ($_POST['donor_amount']=="100")) echo "checked" ?>  required>
                                    <label for="female" >$100</label>
                                    <input type="radio" name="donor_amount" value="250" <?php if((isset($_POST['donor_amount'])) && ($_POST['donor_amount']=="250")) echo "checked" ?>  required>
                                    <label for="other" >$250</label>
                                    <input type="radio" name="donor_amount" value="Other" <?php if((isset($_POST['donor_amount'])) && ($_POST['donor_amount']=="Other")) echo "checked" ?>  required>
                                    <label for="other" >Other</label>
                                </div>
                            </div>
                            <div>
                                <label>Other Amount $</label>
                                <input type="text" name="donor_other_amount" value="<?php echo $donor_other_amount; ?>" >
                            </div>
                            <div>
                                <label>Recurring Donation <br/><label class="custom-label">(Check if available)</label></label>
                                <div class="recu-donation">
                                    <input type="checkbox" name="donor_rdonation" value="I am interested in giving on a regular basis." <?php if((isset($_POST['donor_rdonation'])) && ($_POST['donor_rdonation']=="I am interested in giving on a regular basis.")) echo "checked" ?>    >
                                    <label>I am interested in giving on a regular basis.</label><br>
                                </div>
                            </div>
                            <div class="custom-div">
                                <label >Monthly Credit Card $ </label>
                                <input style="width: 200px;" type="text" name="donor_credit_card_for" value="<?php echo $donor_credit_card_for; ?>" >
                                <label style="width: 20px;">For</label>
                                <input style="width: 50px;" type="text" name="donor_credit_card_months" value="<?php echo $donor_credit_card_months; ?>" >
                                <label style="width: 50px;">Months</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend >
                        <h2 class="header">Honorarium Memorial Donation Information</h2>
                    </legend>
                    <div class="honor-information">
                        <div >
                            <div>
                                <label>I would like to make this donation</label>
                                <div class="donationto">
                                    <input type="radio" name="honor_donation" value="To Honor" <?php if((isset($_POST['honor_donation'])) && ($_POST['honor_donation']=="To Honor")) echo "checked" ?>>
                                    <label for="male" >To Honor</label>
                                    <input type="radio" name="honor_donation" value="In Memory of"  <?php if((isset($_POST['honor_donation'])) && ($_POST['honor_donation']=="In Memory of")) echo "checked" ?>  />
                                    <label for="female" >In Memory of</label>
                                </div>
                            </div>
                            <div>
                                <label>Name</label>
                                <input type="text" name="honorName" value="<?php echo $honorName; ?>" >
                            </div>
                            <div>
                                <label>Acknowledge Donation to</label>
                                <input type="text" name="honorDonationAckTo" value="<?php echo $honorDonationAckTo; ?>" >
                            </div>
                            <div>
                                <label>Address</label>
                                <input type="text" name="honorDonationAddress" value="<?php echo $honorDonationAddress; ?>" >
                            </div>
                            <div>
                                <label>City</label>
                                <input type="text" name="honorDonationCity" value="<?php echo $honorDonationCity; ?>" >
                            </div>
                            <div>
                                <label>State</label>
                                <select class="state" name="honorDonationState">
                                    <option value=""></option>
                                    <option value="dhaka" <?php if((isset($_POST['honorDonationState'])) && ($_POST['honorDonationState']=="dhaka")) echo "selected" ?> >Dhaka</option>
                                    <option value="khulna" <?php if((isset($_POST['honorDonationState'])) && ($_POST['honorDonationState']=="khulna")) echo "selected" ?> >Khulna</option>
                                    <option value="rangpur" <?php if((isset($_POST['honorDonationState'])) && ($_POST['honorDonationState']=="rangpur")) echo "selected" ?> >Rangpur</option>
                                    <option value="barishal" <?php if((isset($_POST['honorDonationState'])) && ($_POST['honorDonationState']=="barishal")) echo "selected" ?> >Barishal</option>
                                    <option value="syleth" <?php if((isset($_POST['honorDonationState'])) && ($_POST['honorDonationState']=="syleth")) echo "selected" ?> >Syleth</option>
                                    <option value="chittagong" <?php if((isset($_POST['honorDonationState'])) && ($_POST['honorDonationState']=="chittagong")) echo "selected" ?> >Chittagong</option>
                                    <option value="jessore" <?php if((isset($_POST['honorDonationState'])) && ($_POST['honorDonationState']=="jessore")) echo "selected" ?> >Jessore</option>
                                </select>
                            </div>
                            <div>
                                <label>Zip</label>
                                <input type="text" name="honorDonationZipcode" value="<?php echo $honorDonationZipcode; ?>" >
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend >
                        <h2 class="header">Additional Information</h2>
                    </legend>
                    
                    <div class="additional-information">
                        <div >
                            <p>Please enter your name , company or organization as you would like to appear in our publications</p>
                            <div>
                                <label>Name</label>
                                <input type="text" name="additionalCompanyName" value="<?php echo $additionalCompanyName; ?>" >
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="checkbox">
                            <input type="checkbox" name="additionalInfo1" value="I am interested in giving on a regular basis." <?php if((isset($_POST['additionalInfo1'])) && ($_POST['additionalInfo1']=="I am interested in giving on a regular basis.")) echo "checked" ?> >
                            <span>I am interested in giving on a regular basis.</span>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="additionalInfo2" value="My employer offers a matching gift program. I will mail the eatching gift form." <?php if((isset($_POST['additionalInfo2'])) && ($_POST['additionalInfo2']=="My employer offers a matching gift program. I will mail the eatching gift form.")) echo "checked" ?> >
                            <span>My employer offers a matching gift program. I will mail the eatching gift form.</span>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="additionalInfo3" value="Please save the cost of acknowledge this gift by not mailing a thank you letter." <?php if((isset($_POST['additionalInfo3'])) && ($_POST['additionalInfo3']=="Please save the cost of acknowledge this gift by not mailing a thank you letter.")) echo "checked" ?> >
                            <span>Please save the cost of acknowledge this gift by not mailing a thank you letter.</span>
                        </div>
                    </div>
                    <div class="additional-information">
                        <div >
                            <div>
                                <label style="margin-top: -80px;">Comments <br/><label class="custom-label">(Please type any ques or feedback here) </label></label>
                                <textarea class="textarea" name="additionalComments" placeholder="Leave a comment..." value="" ><?php echo $additionalComments; ?></textarea>
                            </div>
                            <div>
                                <label style="margin-top: -50px;">How may we contact you ? </label>
                                <div class="recu-donation">
                                    <input type="checkbox" name="additional_email" value="Email" <?php if((isset($_POST['additional_email'])) && ($_POST['additional_email']=="Email")) echo "checked" ?>  >
                                    <label>E-mail.</label><br>
                                    <input type="checkbox" name="additional_pmail" value="Postal Mail" <?php if((isset($_POST['additional_pmail'])) && ($_POST['additional_pmail']=="Postal Mail")) echo "checked" ?>  >
                                    <label>Postal Mail.</label><br>
                                    <input type="checkbox" name="additional_tlphone" value="Telephone" <?php if((isset($_POST['additional_tlphone'])) && ($_POST['additional_tlphone']=="Telephone")) echo "checked" ?>  >
                                    <label>Telephone.</label><br>
                                    <input type="checkbox" name="additional_fax" value="Fax" <?php if((isset($_POST['additional_fax'])) && ($_POST['additional_fax']=="Fax")) echo "checked" ?>  >
                                    <label>Fax.</label><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="checkbox">
                            <input type="checkbox" name="additional_permission" value="I would like information about volunteering with me." <?php if((isset($_POST['additional_permission'])) && ($_POST['additional_permission']=="I would like information about volunteering with me.")) echo "checked" ?> >
                            <span>I would like information about volunteering with me.</span>
                        </div>
                    </div>
                </fieldset>
                <button type="reset">Reset</button>
                <button type="submit">Submit</button>
            </form>
        </div>
        <p>If you have any problem <a href="https://hedaetul-islam.github.io">contact</a> with us</p>
        
    </body>
</html>