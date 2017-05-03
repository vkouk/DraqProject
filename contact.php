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
            echo "Something went wrong. Please try again!";
        } finally {
            echo '<p>Message Sent. Thank you for contacting us.</p>';
        }

    } else {

        foreach ($validation->erros() as $error) {
            echo "<p>" . $error . '</br>' . "</p>";
        }


    }


}

?>


<div class="row">
    <div class="col-md-6">
        <p>If you wish to contact us, send us an email at contact@draqmed.eu</p>
    </div>
    <div class="col-md-6">
        <form action="contact.php" method="post">
            <div class="form-group input-group">
                <div class="input-group-addon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                <input type="text" class="form-control"name="InputName" id="InputName" placeholder="Name">
           </div>
            <div class="form-group input-group">
                <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <input type="email" class="form-control" name="InputEmail" id="InputEmail" placeholder="Email">
                                
            </div>
            <div class="form-group input-group">
                <div class="input-group-addon"><i class="fa fa-comments" aria-hidden="true"></i></div>
                <textarea class="form-control" name="InputComments" id="InputComments" placeholder="Comments" rows="3"></textarea>
            </div>
            <div class="form-group input-group">
                <button type="submit" class="btn btn-lg btn-login"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Send</button>
            </div>
        </form>   
    </div>	
</div> <!-- row -->