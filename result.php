<?php
/**
 * Created by PhpStorm.
 * User: Athanassia Oikonomou
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
                alert('You completed the test. Press Ok to see your result.');
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

<!--22/4/2017 Bill: Added result.php code-->
<div class="row">
    <div class="col-md-12 col-lg-12">
        <h1>Your points are: <?php echo $results->ShowPoints(); ?></h1><br>
        <h1>Your risk is: <?php echo $results->risk(); ?></h1><br>
        <fieldset class="risk-alert result-1" data-name="result" data-id="result1">
            <div class="row">
                <div class="col-md-2">
                    <span data-color="r1">< 7</span>
                </div>
                <div class="col-md-4  risk-text">Low Risk</div>
                <div class="col-md-6 ">
                    <p id="result-text">It is estimated that 1 in 100 people already has type 2 diabetes or will develop it in the next 10 years.</p>
                </div>
            </div>
        </fieldset>
        <fieldset class="risk-alert result-2" data-name="result" data-id="result2">
            <div class="row">
                <div class="col-md-2">
                    <span data-color="r2"> 7 - 11</span>
                </div>
                <div class="col-md-4  risk-text">Slightly Increased Risk </div>
                <div class="col-md-6">
                    <p id="result-text">It is estimated that 1 in 25 people already has type 2 diabetes or will develop it in the next 10 years.</p>
                </div>
            </div>
        </fieldset>
        <fieldset class="risk-alert result-3" data-name="result" data-id="result3">
            <div class="row">
                <div class="col-md-2">
                    <span data-color="r3">12 - 14</span>
                </div>
                <div class="col-md-4  risk-text">Moderately Increased Risk </div>
                <div class="col-md-6">
                    <p id="result-text">It is estimated that 1 in 6 people already has type 2 diabetes or will develop it in the next 10 years.</p>
                </div>
            </div>
        </fieldset>
        <fieldset class="risk-alert result-4" data-name="result" data-id="result4">
            <div class="row">
                <div class="col-md-2">
                    <span data-color="r4">15 - 20</span>
                </div>
                <div class="col-md-4  risk-text">High Risk</div>
                <div class="col-md-6">
                    <p id="result-text">It is estimated that 1 in 3 people already has type 2 diabetes or will develop it in the next 10 years.</p>
                </div>
            </div>
        </fieldset>
        <fieldset class="risk-alert result-5" data-name="result" data-id="result5">
            <div class="row">
                <div class="col-md-2">
                    <span data-color="r5">21 - 26+</span>
                </div>
                <div class="col-md-4  risk-text">Extremely High Risk</div>
                <div class="col-md-6">
                    <p id="result-text">It is estimated that 1 in 2 people already has type 2 diabetes or will develop it in the next 10 years.</p>
                </div>
            </div>
        </fieldset>
    </div>
</div>

<div class="row risk-info">
    <p>In case you find yourselves in one of the high risk zones 3, 4, or 5,
        <strong>you should contact immediately</strong> your personal physician or go
        to the nearest hospital with a Diabetes center,
        in order to undergo one of the following blood exams:</p>
    <ul>
        <li>Glycosylated Hemoglobin</li>
        <li>Fasting Plasma Glucose Test</li>
    </ul>

</div>

<div class="row">
    <div class="col-md-12 risk-info">
        <p>In the following map you will find all the available diabetic centers in Greece.</p>
    </div>
    <div class="col-md-12">
        <iframe src="https://www.google.com/maps/d/embed?mid=1SnfFXRiotlCaI1ZHJGPLLNo-e6Y" width="100%" height="700px"></iframe>
    </div>
    <div class="col-md-12 risk-info">
        <p> In case you want to download the full list of the diabetes centers in greek, click <a target="_blank" href="http://www.galinos.org.gr/portal/pdf/%CE%94%CE%B9%CE%B1%CE%B2%CE%B7%CF%84%CE%BF%CE%BB%CE%BF%CE%B3%CE%B9%CE%BA%CE%AC-%CE%95%CE%BD%CE%B4%CE%BF%CE%BA%CF%81%CE%B9%CE%BD%CE%BF%CE%BB%CE%BF%CE%B3%CE%B9%CE%BA%CE%AC%20%CE%9A%CE%AD%CE%BD%CF%84%CF%81%CE%B1.pdf">here</a></p>
    </div>
</div>

<div class="row risk-info">
    <p>If you wish to retake the test click <a href="index.php?page=do-test.php">here</a></p>
</div>

<script type="text/javascript">
        var finalRiskFactor = <?php echo $results->risk(); ?>;
</script>