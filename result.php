<?php
/**
 * Created by PhpStorm.
 * User: Nassia
 * Date: 4/4/2017
 * Time: 12:36
 */

require_once 'core/init.php';

//For debugging. Only temporary!!! Do not remove yet!! Only comment!!
//print "CONTENT_TYPE: " . $_SERVER['CONTENT_TYPE'] . "<BR />";
//$data = file_get_contents('php://input');
//print "DATA: <pre>";
//var_dump($data);
//var_dump($_POST);
//print "</pre>";
$results = new Results();

if ($results->isInSession()) {
    if (input::exists()) {

        $results->ProcessRequest();
        if ($results->isSuccessful()) {
            echo "<script type='text/javascript'>
                alert('Your data is sent to the server');
                </script>";
            $results->finishSession();
        } else {
            echo "<script type='text/javascript'>
                alert('Something went wrong.');
                </script>";
        }
    }
}
?>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <fieldset class="risk-alert" data-name="result" data-id="result1">
            <div class="col-md-6">
                <span data-id="r1">< 7</span>
            </div>
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum delectus est iusto nam, nemo neque nobis numquam ullam velit.</p>
            </div>
        </fieldset>
        <fieldset class="risk-alert" data-name="result" data-id="result2">
            <div class="col-md-6">
                <span data-id="r2"> 7 - 11</span>
            </div>
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum delectus est iusto nam, nemo neque nobis numquam ullam velit.</p>
            </div>
        </fieldset>
        <fieldset class="risk-alert" data-name="result" data-id="result3">
            <div class="col-md-6">
                <span data-id="r3">12 - 14</span>
            </div>
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum delectus est iusto nam, nemo neque nobis numquam ullam velit.</p>
            </div>
        </fieldset>
        <fieldset class="risk-alert" data-name="result" data-id="result4">
            <div class="col-md-6">
                <span data-id="r4">15 - 20</span>
            </div>
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum delectus est iusto nam, nemo neque nobis numquam ullam velit.</p>
            </div>
        </fieldset>
        <fieldset class="risk-alert" data-name="result" data-id="result5">
            <div class="col-md-6">
                <span data-id="r5">21 - 26+</span>
            </div>
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum delectus est iusto nam, nemo neque nobis numquam ullam velit.</p>
            </div>
        </fieldset>
        <!--<h1>Your risk is: <?php /*echo $results->calculateRisk(); */?></h1>-->
        <h2>If you wish to retake the test, click <a href="index.php?page=do-test.php">here</a></h2>
    </div>
</div>