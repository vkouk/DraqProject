<?php

/**
 * Created by PhpStorm.
 * User: Athanassia Oikonomou
 * Date: 4/4/2017
 * Time: 11:42
 */

require_once 'core/init.php';

if (input::exists()) {

    $validate = new Validate();

    $validation = $validate->check($_POST, array(
        'InputName' => array('required' => true),
        'InputEmail' => array('required' => true),
        'InputComments' => array('required' => true)
    ));

    if ($validation->passed()) {
        $name = input::get('InputName');
        $email = input::get('InputEmail');
        $message = input::get('InputComments');

        $from = 'draqmed.eu';
        $subject = "New email from draqmed.eu";
        $email_body = "New Message from $name \n" ." Here is the following message: \n" . $message;

        $to = "contact@draqmed.eu";
        $headers = "From: " . $from . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";

        try {
            mail($to, $subject, $email_body, $headers);


        } catch (Exception $e) {
            echo $e->getMessage();
            echo "Ωπ.. Κάτι πήγε στραβά. Παρακαλώ προσπαθήστε ξανά.";
        } finally {
            echo '<p>Το μήνυμα σας στάλθηκε. Ευχαριστούμε που επικοινωνήσατε μαζί μας.</p>';
        }

    } else {

        foreach ($validation->erros() as $error) {
            echo "<p>" . $error . '</br>' . "</p>";
        }


    }


}

?>

<!--14/3/2017 Bill: Added contact form-->
<div class="row">
    <div class="col-md-6">
        <p>Εάν θέλετε να επικοινωνήσετε μαζί μας, στείλτε μας μήνυμα στην ηλεκτρονική διεύθυνση contact@draqmed.eu</p>
    </div>
    <div class="col-md-6">
        <form action="contact.php" method="post">
            <div class="form-group input-group">
                <div class="input-group-addon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                <input type="text" class="form-control" id="InputName" placeholder="Ονοματεπώνυμο">
           </div>
            <div class="form-group input-group">
                <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <input type="email" class="form-control" id="InputEmail" placeholder="Ηλεκτρονικό Ταχυδρομείο">
                                
            </div>
            <div class="form-group input-group">
                <div class="input-group-addon"><i class="fa fa-comments" aria-hidden="true"></i></div>
                <textarea class="form-control" name="InputComments" id="InputComments" placeholder="Σχόλια" rows="3"></textarea>
            </div>
            <div class="form-group input-group">
                <button type="submit" class="btn btn-lg btn-login"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Αποστολή</button>
            </div>
        </form>   
    </div>	
</div> <!-- row -->