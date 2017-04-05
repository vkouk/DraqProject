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
        'region'=>array(),
        'gender'=>array(),
        'age'=>array(),
        'weight'=>array(),
        'height'=>array(),
        'bmi'=>array(),
        'waist'=>array(),
        'activity'=>array(),
        'food_habit'=>array(),
        'hbp'=>array(),
        'blood_sugar'=>array(),
        'family_history'=>array(),
        'risk'=>array()
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
			<section class="question geo" data-name="region" data-id="region">
				<h3 class="questionnaire-header">1.Which geographical region do you belong to?</h3>
				<div class="questionnaire-content">
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
				</div> <!-- questionnaire-content -->
			</section>
			<section class="question gender inactive" data-name="gender" data-id="gender">
				<h3 class="questionnaire-header">2.Are you a male or female?</h3>
				<div class="questionnaire-content">
					<div class="col-md-12 col-lg-6">
						 <input type="radio" id="gender_1" name="diabetes-ques[gender]" value="M" required="required" aria-required="true">Male<br>
  						 <input type="radio" id="gender_2" name="diabetes-ques[gender]" value="F" required="required" aria-required="true">Female<br>
					</div> <!-- col-md-12 col-lg-6 -->
					<div class="col-md-12 col-lg-6">
						<img class="img-responsive" src="images/quest-icons/question2.png" alt="">
					</div> <!-- col-md-12 col-lg-6 -->
				</div> <!-- questionnaire-content -->
			</section>
			<section class="question age inactive" data-name="age" data-id="age">
				<h3 class="questionnaire-header">3.How old are you?</h3>
				<div class="questionnaire-content">
					<div class="col-md-12 col-lg-6">
						 <input type="radio" id="age" name="diabetes-ques[age]" value="0" required="required" aria-required="true">Younger than 45 years old.<br>
  						 <input type="radio" id="age" name="diabetes-ques[age]" value="1" required="required" aria-required="true">Between 45-54 years old.<br>
  						 <input type="radio" id="age" name="diabetes-ques[age]" value="2" required="required" aria-required="true">Between 55-64 years old.<br>
  						 <input type="radio" id="age" name="diabetes-ques[age]" value="1" required="required" aria-required="true">Older than 64 years old.<br>
					</div> <!-- col-md-12 col-lg-6 -->
					<div class="col-md-12 col-lg-6">
						<img class="img-responsive" src="images/quest-icons/question3.png" alt="">
					</div> <!-- col-md-12 col-lg-6 -->
				</div> <!-- questionnaire-content -->
			</section>
			<div class="questionnaire-footer">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<a class="prev-quest" href="#"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
					<span></span>
					<a class="next-quest" href="#"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
				</div>
			</div> <!-- questionnaire-footer -->
		</form> <!-- questionnaire -->
	</div> <!-- col-md-12 col-lg-12 -->
</div> <!-- row -->