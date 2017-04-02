<!-- 11/3/2017 Bill: Start making our do test questionnaire page. -->
<div class="row">
	<div class="col-md-12 col-lg-12">
		<div class="questionnaire-intro">
			<a href="#">Do The Test</a>
		</div>
		<form name="diabetes-ques" class="questionnaire" action="/" method="post" autocomplete="off">
			<section class="question geo" data-name="geo" data-id="geo">
				<h3 class="questionnaire-header">1.Which geographical region do you belong to?</h3>
				<div class="questionnaire-content">
					<div class="col-md-12 col-lg-6">
						<select name="diabetes-ques[geo]" id="geo" required="required" aria-required="true">
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
					<span>Question 1 of 11</span>
					<a class="next-quest" href="#"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
				</div>
			</div> <!-- questionnaire-footer -->
		</form> <!-- questionnaire -->
	</div> <!-- col-md-12 col-lg-12 -->
</div> <!-- row -->