
<!-- 11/3/2017 Bill: Start making our do test questionnaire page. -->
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="questionnaire-intro">
            <a href="#">Do The Test</a>
        </div>
        <form action="index.php?page=result.php" method="POST" name="diabetes-ques" class="questionnaire" autocomplete="off">
            <ul id="progressbar">
                <li class="active">Region</li>
                <li>Gender</li>
                <li>Age</li>
                <li>Weight</li>
                <li>Height</li>
                <li>Bmi</li>
                <li>Waist</li>
                <li>Activity</li>
                <li>Food<br>Habit</li>
                <li>HBP</li>
                <li>Blood<br>Sugar</li>
                <li>Family<br>History</li>
            </ul>

            <fieldset data-name="region" data-id="region1">
                <div class="row">
                    <h3 id="questionnaire-header">1.What is your region in Greece?</h3>
                    <div class="col-md-12 col-lg-6">
                        <select name="region" id="region" class="selectqountry" aria-required="true" required>
                            <option value="none">Please select a region</option>
                            <option value="Attica">Attica</option>
                            <option value="Central Greece">Central Greece</option>
                            <option value="Central Macedonia">Central Macedonia</option>
                            <option value="Crete">Crete</option>
                            <option value="Eastern Macedonia and Thrace">Eastern Macedonia and Thrace</option>
                            <option value="Epirus">Epirus</option>
                            <option value="Ionian Islands">Ionian Islands</option>
                            <option value="North Aegean Islands">North Aegean Islands</option>
                            <option value="Peloponnese">Peloponnese</option>
                            <option value="South Aegean Islands">South Aegean Islands</option>
                            <option value="Thessaly">Thessaly</option>
                            <option value="Western Greece">Western Greece</option>
                            <option value="Western Macedonia">Western Macedonia</option>
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
                            <input type="radio" id="gender" name="gender" value="M" required="required"
                                   aria-required="true"/><span class="alignment">Male</span><br>
                            <input type="radio" id="gender" name="gender" value="F" required="required"
                                   aria-required="true"/><span class="alignment">Female</span>

                        </div>
                    </div> <!-- col-md-12 col-lg-6 -->

                    <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail" src="images/quest-icons/question2.png" alt="">
                    </div> <!-- col-md-12 col-lg-6 -->
                </div>

                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Previous</a>
                <a class="next-quest checkGender">Next<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>

            <fieldset data-name="age" data-id="age3">
                <div class="row">
                    <h3 id="questionnaire-header">3.Please specify your age.</h3>
                    <div class="col-md-12 col-lg-6">
                        <div class="margin-50">
                            <input type="radio" id="age" name="age" value="<45" required="required"
                                   aria-required="true"/><span class="alignment">Younger than 45 years old.</span><br>
                            <input type="radio" id="age" name="age" value="45-54" required="required"
                                   aria-required="true"/><span class="alignment">Between 45-54 years old.</span><br>
                            <input type="radio" id="age" name="age" value="55-64" required="required"
                                   aria-required="true"/><span class="alignment">Between 55-64 years old.</span><br>
                            <input type="radio" id="age" name="age" value=">64" required="required"
                                   aria-required="true"/><span class="alignment">Older than 64 years old.</span><br>
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
                            <input type="number" id="weight" name="weight" min="1" max="300" required="required"
                                   aria-required="true"/>
                        </div>
                    </div> <!-- col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail margin-50" src="images/quest-icons/question4.png"
                             alt="">
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
                            <input type="number" id="height" name="height" min="1" max="3" step="0.01"
                                   required="required" aria-required="true"/>
                        </div>
                    </div> <!-- col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail margin-50" src="images/quest-icons/question5.png"
                             alt="">
                    </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Previous</a>
                <a class="next-quest calculatebmi">Next<i class="fa fa-arrow-right fa-2x btn-align"
                                                          aria-hidden="true"></i></a>
            </fieldset>

            <fieldset data-name="bmi" data-id="bmi6">
                <div class="row">
                    <h3 id="questionnaire-header">6.Body Mass Index</h3>
                    <div class="col-md-12 col-lg-6">

                        <h5 class="margin-50">Based on your weight and height measurements,</br> your BMI
                            is</h5>

                        <input type="text" id="bmi" name="bmi" class="margin-50">

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
                            <div class="col-md-6 col-xs-6 donotdisplaymale"><h2 class="pad-10">Man</h2>
                                <input type="radio" id="manwaist_1" name="waist" value="<94cm" aria-required="true"
                                       required/><span class="alignment smaller">Below 94cm</span></br>
                                <input type="radio" id="manwaist_2" name="waist" value="94cm-102cm" aria-required="true"
                                       required/><span class="alignment smaller">94cm-102cm</span></br>
                                <input type="radio" id="manwaist_3" name="waist" value=">102cm" aria-required="true"
                                       required/><span class="alignment smaller">Above 102cm</span></br>
                            </div>
                            <div class="col-md-6 col-xs-6 donotdisplayfemale"><h2 class="pad-10">Woman</h2>

                                <input type="radio" id="womanwaist_1" name="waist" value="<80cm" aria-required="true"
                                       required/><span class="alignment smaller">Below 80cm</span></br>
                                <input type="radio" id="womanwaist_2" name="waist" value="80-88cm" aria-required="true"
                                       required/><span class="alignment smaller">80cm-88cm</span></br>
                                <input type="radio" id="womanwaist_3" name="waist" value=">88cm" aria-required="true"
                                       required/><span class="alignment smaller">Above 88cm</span></br>
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
                    <h3 id="questionnaire-header">8.Do you exercise often, approximately 30 minutes per day?</h3>
                    <div class="col-md-12 col-lg-6">
                        <div class="margin-50">
                            <input type="radio" id="activity_1" name="activity" value="Y" required="required"
                                   aria-required="true"/><span class="alignment">Yes</span><br>
                            <input type="radio" id="activity_2" name="activity" value="N" required="required"
                                   aria-required="true"/><span class="alignment">No</span><br>
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
                            <input type="radio" id="food_habit_1" name="food_habit" value="Daily" required="required"
                                   aria-required="true"/><span class="alignment">Daily</span><br>
                            <input type="radio" id="food_habit_2" name="food_habit" value="Nondaily" required="required"
                                   aria-required="true"/><span class="alignment">Not Daily</span><br>
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
                    <h3 id="questionnaire-header">10.Have you taken high blood pressure medication?</h3>
                    <div class="col-md-12 col-lg-6">
                        <div class="margin-50">
                            <input type="radio" id="hbp_1" name="hbp" value="Y" required="required"
                                   aria-required="true"/><span class="alignment">Yes</span><br>
                            <input type="radio" id="hbp_2" name="hbp" value="N" required="required"
                                   aria-required="true"/><span class="alignment">No</span><br>
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
                    <h3 id="questionnaire-header">11.Have you ever had high blood sugar levels <br>
                        (ex. during a health exam or during pregnancy)?</h3>
                    <div class="col-md-12 col-lg-6">
                        <div class="margin-50">
                            <input type="radio" id="blood_sugar_1" name="blood_sugar" value="Y" required="required"
                                   aria-required="true"/><span class="alignment">Yes</span><br>
                            <input type="radio" id="blood_sugar_2" name="blood_sugar" value="N" required="required"
                                   aria-required="true"/><span class="alignment">No</span><br>
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
                            <input type="radio" id="family_history_1" name="family_history" value="No"
                                   required="required" aria-required="true"/><span class="alignment">No</span><br>
                            <input type="radio" id="family_history_2" name="family_history" value="Yes-second-relation"
                                   required="required" aria-required="true"/><span class="alignment">Yes (GrandFather - Uncle - Aunt - Cousin)</span><br>
                            <input type="radio" id="family_history_3" name="family_history" value="Yes-first-relation"
                                   required="required" aria-required="true"/><span class="alignment">Yes (Parent - Brother - Sister or Child)</span><br>
                        </div>
                    </div> <!-- col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail" src="images/quest-icons/question12.png" alt="">
                    </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Previous</a>
                <input type="submit" name="submit" value="Submit" class="btn btn-info"/>
            </fieldset>
        </form> <!-- questionnaire -->
    </div> <!-- col-md-12 col-lg-12 -->
</div> <!-- row -->