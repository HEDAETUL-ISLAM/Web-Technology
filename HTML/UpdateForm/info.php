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
    <title>Information</title>
    <body>
        <div style="margin-left:20%;margin-right:20%">
            <h1 style="color:red" >Donor Information</h1><hr/>
            <label>First Name: <?php echo $donor_fname; ?></label><br>
            <label>Last Name: <?php echo $donor_lname; ?></label><br>
            <label>Company Name: <?php echo $donor_company; ?></label><br>
            <label>Address1 Name: <?php echo $donor_address1; ?></label><br>
            <label>Address2 Name: <?php echo $donor_address2; ?></label><br>
            <label>City Name: <?php echo $donor_city; ?></label><br>
            <label>State: <?php echo $donor_state; ?></label><br>
            <label>Zip: <?php echo $donor_zip; ?></label><br>
            <label>Country: <?php echo $donor_country; ?></label><br>
            <label>Phone: <?php echo $donor_phone; ?></label><br>
            <label>Fax: <?php echo $donor_fax; ?></label><br>
            <label>Email: <?php echo $donor_email; ?></label><br>
            <label>Donation Amount: <?php echo $donor_amount; ?></label><br>
            <label>Other Amount: <?php echo $donor_other_amount; ?></label><br>
            <label><?php echo $donor_rdonation; ?></label><br>
            <label>Monthly Credit card: </label>
            <label>For: <?php echo $donor_credit_card_for; ?></label>
            <label>Month: <?php echo $donor_credit_card_months; ?></label>

            <h1 style="color:red">Honorarium Memorial Donation Information</h1><hr/>
            <label>I would like to make this donation: <?php echo $honor_donation; ?> </label><br>
            <label>Name: <?php echo $honorName; ?></label><br>
            <label>Acknowledge Donation to: <?php echo $honorDonationAckTo; ?></label><br>
            <label>Address: <?php echo $honorDonationAddress; ?></label><br>
            <label>City: <?php echo $honorDonationCity; ?></label><br>
            <label>State: <?php echo $honorDonationState; ?></label><br>
            <label>Zip: <?php echo $honorDonationZipcode; ?></label><br>

            <h1 style="color:red">Additional Information</h1><hr/>
            <label>Company name: <?php echo $additionalCompanyName; ?></label><br>
            <label><?php echo $additionalInfo1; ?></label><br>
            <label><?php echo $additionalInfo2; ?></label><br>
            <label><?php echo $additionalInfo3; ?></label><br>
            <label>Comments: <?php echo $additionalComments; ?></label><br>
            <label>How may we contact you ? <?php echo $additional_email; ?></label><br>
            <label><?php echo $additional_pmail; ?></label><br>
            <label><?php echo $additional_tlphone; ?></label><br>
            <label><?php echo $additional_fax; ?></label><br>
            <label><?php echo $additional_permission; ?></label><br>
        </div>
    </body>
</html>