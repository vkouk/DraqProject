<?php
/**
 * Created by PhpStorm.
 * User: Nassia
 * Date: 4/4/2017
 * Time: 12:36
 */

require_once 'core/init.php';

if(input::exists()){

    $validate = new Validate();
    $validation = $validate->check($_POST, array(
        'session_id'=>array(
            'required'=>true
        ),
        'region'=>array(
                'required'=>true
        ),
        'gender'=>array(
                'required'=>true
        ),
        'age'=>array(
                'required'=>true
        ),
        'weight'=>array(
            'required'=>true,
            'isint'=>true
        ),
        'height'=>array(
            'required'=>true,
            'isfloat'=>true
        ),
        'bmi'=>array(
            'required'=>true,
        ),
        'waist'=>array(
            'required'=>true
        ),
        'activity'=>array(
            'required'=>true
        ),
        'food_habit'=>array(
            'required'=>true
        ),
        'hbp'=>array(
            'required'=>true
        ),
        'blood_sugar'=>array(
            'required'=>true
        ),
        'family_history'=>array(
            'required'=>true
        ),
        'risk'=>array(
            'required'=>true
        )
    ));

    if($validation->passed()){
        $draq = new Draq();

        try{
            $draq->insertData(array(
                'session_id'=>Session::get(config::get('session/sessionName')),
                'region'=>input::get('region'),
                'gender'=>input::get('gender'),
                'age'=>input::get('age'),
                'weight'=>input::get('weight'),
                'height'=>input::get('height'),
                'bmi'=>input::get('bmi'),
                'waist'=>input::get('waist'),
                'activity'=>input::get('activity'),
                'food_habit'=>input::get('food_habit'),
                'hbp'=>input::get('hbp'),
                'blood_sugar'=>input::get('blood_sugar'),
                'family_history'=>input::get('family_history'),
                'risk'=>input::get('risk')
            ));

            echo "Testing: Your record has been saved in the database";

        } catch (Exception $e){
            die ($e->getMessage());
        }
    }
    else{
        foreach($validation->errors() as $error){
            echo "<p class='alert-p'>" . $error . '</br>' . "</p>";
        }
    }
}

?>

<!-- 11/3/2017 Bill: Start making our do test questionnaire page. -->
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="questionnaire-intro">
            <a href="#">Do The Test</a>
        </div>
        <form name="diabetes-ques" class="questionnaire" action="/" method="post" autocomplete="off">
            <ul id="progressbar">
                <li class="active">Region</li>
                <li>Gender</li>
                <li>Age</li>
                <li>Weight</li>
                <li>Height</li>
                <li>Bmi</li>
                <li>Waist</li>
                <li>Activity</li>
                <li>Food Habit</li>
                <li>HBP</li>
                <li>Blood Sugar</li>
                <li>Family History</li>
                <li>Risk</li>
            </ul>
            <fieldset data-name="region" data-id="region1">
                <h3 id="questionnaire-header">1.What is your region n Greece?</h3>
                <div class="col-md-12 col-lg-6">
                    <select name="diabetes-ques[region]" id="region" required="required" aria-required="true">
                        <option value="Sterea Ellada">Sterea Ellada</option>
                        <option value="Makedonia">Makedonia</option>
                        <option value="Thraki">Thraki</option>
                        <option value="Hpeiros">Hpeiros</option>
                        <option value="Peloponnisos">Peloponnisos</option>
                        <option value="Ionian Islands">Ionian Islands</option>
                        <option value="Aegean Islands">Aegean Islands</option>
                        <option value="Thessalia">Thessalia</option>
                        <option value="Crete">Crete</option>
                    </select>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive" src="images/quest-icons/question1.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                <a class="next-quest"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="gender" data-id="gender2">
                <h3 id="questionnaire-header">2.Please specify your gender.</h3>
                <div class="col-md-12 col-lg-6">
                    <input type="radio" id="gender_1" name="diabetes-ques[gender]" value="M" required="required" aria-required="true">Male<br>
                    <input type="radio" id="gender_2" name="diabetes-ques[gender]" value="F" required="required" aria-required="true">Female<br>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive" src="images/quest-icons/question2.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
                <a class="next-quest"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="age" data-id="age3">
                <h3 id="questionnaire-header">3.Please specify your age.</h3>
                <div class="col-md-12 col-lg-6">
                    <input type="radio" id="age" name="diabetes-ques[age]" value="0" required="required" aria-required="true">Younger than 45 years old.<br>
                    <input type="radio" id="age" name="diabetes-ques[age]" value="1" required="required" aria-required="true">Between 45-54 years old.<br>
                    <input type="radio" id="age" name="diabetes-ques[age]" value="2" required="required" aria-required="true">Between 55-64 years old.<br>
                    <input type="radio" id="age" name="diabetes-ques[age]" value="1" required="required" aria-required="true">Older than 64 years old.<br>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                        <img class="img-responsive" src="images/quest-icons/question3.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
                <a class="next-quest"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="weight" data-id="weight4">
                <h3 id="questionnaire-header">4.How much do you weight?</h3>
                <div class="col-md-12 col-lg-6">
                    <input type="number" id="weight" name="diabetes-ques[weight]" min="1" max="300" required="required" aria-required="true">
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive" src="images/quest-icons/question4.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
                <a class="next-quest"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="height" data-id="height5">
                <h3 id="questionnaire-header">5.What is your height?</h3>
                <div class="col-md-12 col-lg-6">
                    <input type="number" id="weight" name="diabetes-ques[height]" min="1" max="3" required="required" aria-required="true">
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive" src="images/quest-icons/question5.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
                <a class="next-quest"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="bmi" data-id="bmi6">
                <h3 id="questionnaire-header">6.Bmi</h3>
                <div class="col-md-12 col-lg-6">
                    <p>Your BMI is //todo..</p>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive" src="images/quest-icons/question6.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
                <a class="next-quest"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="waist" data-id="waist7">
                <h3 id="questionnaire-header">7.What is your waist size?</h3>
                <div class="col-md-12 col-lg-6">
                    <p>todo - check gender</p>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive" src="images/quest-icons/question7.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
                <a class="next-quest"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="activity" data-id="activity8">
                <h3 id="questionnaire-header">8.Do you exercise often?</h3>
                <div class="col-md-12 col-lg-6">
                    <input type="radio" id="activity_1" name="diabetes-ques[activity]" value="Y" required="required" aria-required="true">Yes<br>
                    <input type="radio" id="activity_2" name="diabetes-ques[activity]" value="N" required="required" aria-required="true">No<br>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive" src="images/quest-icons/question8.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
                <a class="next-quest"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="food_habit" data-id="food_habit9">
                <h3 id="questionnaire-header">9.How often do you eat fruits or vegetables?</h3>
                <div class="col-md-12 col-lg-6">
                    <input type="radio" id="food_habit_1" name="diabetes-ques[food_habit]" value="D" required="required" aria-required="true">Daily<br>
                    <input type="radio" id="food_habit_2" name="diabetes-ques[food_habit]" value="ND" required="required" aria-required="true">Not Daily<br>
                    </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive" src="images/quest-icons/question9.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
                <a class="next-quest"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="hbp" data-id="hbp10">
                <h3 id="questionnaire-header">10.Have you taken high blood preasure medication?</h3>
                <div class="col-md-12 col-lg-6">
                    <input type="radio" id="hbp_1" name="diabetes-ques[hbp]" value="Y" required="required" aria-required="true">Yes<br>
                    <input type="radio" id="hbp_2" name="diabetes-ques[hbp]" value="N" required="required" aria-required="true">No<br>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive" src="images/quest-icons/question10.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
                <a class="next-quest"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="blood_sugar" data-id="blood_sugar11">
                <h3 id="questionnaire-header">11.Have you ever had high blood sugar levels?</h3>
                <div class="col-md-12 col-lg-6">
                    <input type="radio" id="blood_sugar_1" name="diabetes-ques[blood_sugar]" value="Y" required="required" aria-required="true">Yes<br>
                    <input type="radio" id="blood_sugar_2" name="diabetes-ques[blood_sugar]" value="N" required="required" aria-required="true">No<br>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive" src="images/quest-icons/question11.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
                <a class="next-quest"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="family_history" data-id="family_history12">
                <h3 id="questionnaire-header">12.Do you have a close relative with type 1 or 2 diabetes?</h3>
                <div class="col-md-12 col-lg-6">
                    <input type="radio" id="family_history_1" name="diabetes-ques[family_history]" value="N" required="required" aria-required="true">No<br>
                    <input type="radio" id="family_history_2" name="diabetes-ques[family_history]" value="YGUAC" required="required" aria-required="true">Yes (GrandFather - Uncle - Aunt - Cousin)<br>
                    <input type="radio" id="family_history_3" name="diabetes-ques[family_history]" value="YPBSC" required="required" aria-required="true">Yes (Parent - Brother - Sister or Child)<br>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive" src="images/quest-icons/question12.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
                <a class="next-quest"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="risk" data-id="risk13">
                <h3 id="questionnaire-header">Your result</h3>
                <div class="col-md-12 col-lg-12">
                    <p>todo</p>
                </div> <!-- col-md-12 col-lg-6 -->
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
                <a class="finish-quest"><i class="fa fa-check-circle fa-2x" aria-hidden="true"></i></a>
            </fieldset>
        </form> <!-- questionnaire -->
    </div> <!-- col-md-12 col-lg-12 -->
</div> <!-- row -->