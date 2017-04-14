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
        <form name="diabetes-ques" class="questionnaire" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off">
            <ul id="progressbar">
                <li class="active">Region</li>
                <li>Gender</li>
                <li>Age</li>
                <li>Weight</li>
                <li>Height</li>
                <li>Bmi</li>
                <li>Waist</li>
                <li>Activity</li>
                <li>Food</br>Habit</li>
                <li>HBP</li>
                <li>Blood</br>Sugar</li>
                <li>Family</br>History</li>
                <li>Risk</li>
            </ul>
            <fieldset data-name="region" data-id="region1">
                <div class="row">
                <h3 id="questionnaire-header">1.What is your region in Greece?</h3>
                <div class="col-md-12 col-lg-6">
                    <select name="diabetes-ques[region]" id="region"  aria-required="true" class="selectqountry" required>
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
                    <img class="img-thumbnail img-responsive" src="images/quest-icons/question1.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="next-quest"><i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i>Next</a>
            </fieldset>
            <fieldset data-name="gender" data-id="gender2">
                <div class="row">
                <h3 id="questionnaire-header">2.Please specify your gender.</h3>
                <div class="col-md-12 col-lg-6">
                    <div class="margin-50">
                    <input  type="radio" id="gender_1" name="diabetes-ques[gender]" value="M" required="required" aria-required="true"><span class="alignment">Male</span><br>
                    <input  type="radio" id="gender_2" name="diabetes-ques[gender]" value="F" required="required" aria-required="true"><span class="alignment">Female</span><br>
                    </div>
                </div> <!-- col-md-12 col-lg-6 -->

                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive img-thumbnail" src="images/quest-icons/question2.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                </div>

                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Previous</a>
                <a class="next-quest">Next<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="age" data-id="age3">
                <div class="row">
                <h3 id="questionnaire-header">3.Please specify your age.</h3>
                <div class="col-md-12 col-lg-6">
                    <div class="margin-50">
                    <input type="radio" id="age" name="diabetes-ques[age]" value="0" required="required" aria-required="true"><span class="alignment">Younger than 45 years old.</span><br>
                    <input type="radio" id="age" name="diabetes-ques[age]" value="1" required="required" aria-required="true"><span class="alignment">Between 45-54 years old.</span><br>
                    <input type="radio" id="age" name="diabetes-ques[age]" value="2" required="required" aria-required="true"><span class="alignment">Between 55-64 years old.</span><br>
                    <input type="radio" id="age" name="diabetes-ques[age]" value="1" required="required" aria-required="true"><span class="alignment">Older than 64 years old.</span><br>
                    </div>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail" src="images/quest-icons/question3.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                </div>
                    <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Previous</a>
                <a class="next-quest">Next<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="weight" data-id="weight4">
                <div class="row">
                <h3 id="questionnaire-header">4.How much do you weigh?</h3>
                <div class="col-md-12 col-lg-6">
                    <div class="">
                    <input type="number" id="weight" name="diabetes-ques[weight]" min="1" max="300" required="required" aria-required="true">
                    </div>
                    </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive img-thumbnail margin-50" src="images/quest-icons/question4.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Previous</a>
                <a class="next-quest">Next<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="height" data-id="height5">
                <div class="row">
                <h3 id="questionnaire-header">5.What is your height?</h3>
                <div class="col-md-12 col-lg-6">
                    <div class="">
                    <input type="number" id="weight" name="diabetes-ques[height]" min="1" max="3" step="0.01" required="required" aria-required="true">
                    </div>
                    </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive img-thumbnail margin-50" src="images/quest-icons/question5.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Previous</a>
                <a class="next-quest">Next<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="bmi" data-id="bmi6">
                <div class="row">
                <h3 id="questionnaire-header">6.Bmi</h3>
                <div class="col-md-12 col-lg-6">
                    <p>Your BMI is //todo..</p>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive img-thumbnail" src="images/quest-icons/question6.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Previous</a>
                <a class="next-quest">Next<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="waist" data-id="waist7">
                <div class="row">
                <h3 id="questionnaire-header">7.What is your waist size?</h3>
                <div class="col-md-12 col-lg-6">
                    <div class="margin-50">
                    <div class="col-md-6 col-xs-6"id="donotdisplaymale"><h2 class="pad-10">Man</h2>
                        <input type="radio" id="manwaist_1" name="diabetes-ques[waist]" value="0" aria-required="true" required><span class="alignment smaller">Below 94cm</span></br>
                        <input type="radio" id="manwaist_2" name="diabetes-ques[waist]" value="3" aria-required="true" required><span class="alignment smaller">94cm-102cm</span></br>
                        <input type="radio" id="manwaist_3" name="diabetes-ques[waist]" value="4" aria-required="true" required><span class="alignment smaller">Above 102cm</span></br>
                    </div>
                    <div class="col-md-6 col-xs-6" id="donotdisplayfemale"><h2 class="pad-10">Woman</h2>

                        <input type="radio" id="womanwaist_1" name="diabetes-ques[waist]" value="0" aria-required="true" required><span class="alignment smaller">Below 80cm</span></br>
                        <input type="radio" id="womanwaist_2" name="diabetes-ques[waist]" value="3" aria-required="true" required><span class="alignment smaller">80cm-88cm</span></br>
                        <input type="radio" id="womanwaist_3" name="diabetes-ques[waist]" value="4" aria-required="true" required><span class="alignment smaller">Above 88cm</span></br>
                    </div>
                    </div>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive img-thumbnail" src="images/quest-icons/question7.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Previous</a>
                <a class="next-quest">Next<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="activity" data-id="activity8">
                <div class="row">
                <h3 id="questionnaire-header">8.Do you exercise often?</h3>
                <div class="col-md-12 col-lg-6">
                    <div class="margin-50">
                    <input type="radio" id="activity_1" name="diabetes-ques[activity]" value="Y" required="required" aria-required="true"><span class="alignment">Yes</span><br>
                    <input type="radio" id="activity_2" name="diabetes-ques[activity]" value="N" required="required" aria-required="true"><span class="alignment">No</span><br>
                    </div>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive img-thumbnail" src="images/quest-icons/question8.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Previous</a>
                <a class="next-quest">Next<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="food_habit" data-id="food_habit9">
                <div class="row">
                <h3 id="questionnaire-header">9.How often do you eat fruits or vegetables?</h3>
                <div class="col-md-12 col-lg-6">
                    <div class="margin-50">
                    <input type="radio" id="food_habit_1" name="diabetes-ques[food_habit]" value="D" required="required" aria-required="true"><span class="alignment">Daily</span><br>
                    <input type="radio" id="food_habit_2" name="diabetes-ques[food_habit]" value="ND" required="required" aria-required="true"><span class="alignment">Not Daily</span><br>
                    </div>
                    </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive img-thumbnail" src="images/quest-icons/question9.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Previous</a>
                <a class="next-quest">Next<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="hbp" data-id="hbp10">
                <div class="row">
                <h3 id="questionnaire-header">10.Have you taken high blood preasure medication?</h3>
                <div class="col-md-12 col-lg-6">
                    <div class="margin-50">
                    <input type="radio" id="hbp_1" name="diabetes-ques[hbp]" value="Y" required="required" aria-required="true"><span class="alignment">Yes</span><br>
                    <input type="radio" id="hbp_2" name="diabetes-ques[hbp]" value="N" required="required" aria-required="true"><span class="alignment">No</span><br>
                    </div>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive img-thumbnail" src="images/quest-icons/question10.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Previous</a>
                <a class="next-quest">Next<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="blood_sugar" data-id="blood_sugar11">
                <div class="row">
                <h3 id="questionnaire-header">11.Have you ever had high blood sugar levels?</h3>
                <div class="col-md-12 col-lg-6">
                    <div class="margin-50">
                    <input type="radio" id="blood_sugar_1" name="diabetes-ques[blood_sugar]" value="Y" required="required" aria-required="true"><span class="alignment">Yes</span><br>
                    <input type="radio" id="blood_sugar_2" name="diabetes-ques[blood_sugar]" value="N" required="required" aria-required="true"><span class="alignment">No</span><br>
                    </div>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive img-thumbnail" src="images/quest-icons/question11.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Previous</a>
                <a class="next-quest">Next<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="family_history" data-id="family_history12">
                <div class="row">
                <h3 id="questionnaire-header">12.Do you have a close relative with type 1 or 2 diabetes?</h3>
                <div class="col-md-12 col-lg-6">
                    <div class="margin-50">
                    <input type="radio" id="family_history_1" name="diabetes-ques[family_history]" value="N" required="required" aria-required="true"><span class="alignment">No</span><br>
                    <input type="radio" id="family_history_2" name="diabetes-ques[family_history]" value="YGUAC" required="required" aria-required="true"><span class="alignment">Yes (GrandFather - Uncle - Aunt - Cousin)</span><br>
                    <input type="radio" id="family_history_3" name="diabetes-ques[family_history]" value="YPBSC" required="required" aria-required="true"><span class="alignment">Yes (Parent - Brother - Sister or Child)</span><br>
                    </div>
                </div> <!-- col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <img class="img-responsive img-thumbnail" src="images/quest-icons/question12.png" alt="">
                </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Previous</a>
                <a class="next-quest">Next<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>
            <fieldset data-name="risk" data-id="risk13">
                <div class="row">
                <h3 id="questionnaire-header">Your result</h3>
                <div class="col-md-12 col-lg-12">
                    <p>todo</p>
                </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Previous</a>
                <a class="finish-quest"><i class="fa fa-check-circle fa-2x btn-align" aria-hidden="true"></i>Finish</a>
            </fieldset>
        </form> <!-- questionnaire -->
    </div> <!-- col-md-12 col-lg-12 -->
</div> <!-- row -->