<?php
/**
 * Created by PhpStorm.
 * User: Dragoness_crysta
 * Date: 21/4/2017
 * Time: 20:59
 */

require_once 'core/init.php';

    if (input::exists('post')) {

        $results=new Results();
        $results->ProcessRequest();
        if($results->isSuccessful()){
            echo "Your data is sent to the server.";
        }
        else{
            echo "Something went wrong. Please take a look";
        }

    }

?>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <fieldset data-name="result" data-id="result">
            <div class="row">
                <h1>Your risk is: <?php echo $results->calculateRisk(); ?></h1>
            </div>

        </fieldset>
    </div>
</div>
