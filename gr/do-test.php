
<!-- 11/3/2017 Bill: Start making our do test questionnaire page in greek. -->
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="questionnaire-intro">
            <a href="#">Καντε το Τεστ</a>
        </div>
        <form action="index.php?page=result.php" method="POST" name="diabetes-ques" class="questionnaire" autocomplete="off">
            <ul id="progressbar">
                <li class="active">Περιοχή</li>
                <li>Φυλο</li>
                <li>Ηλικια</li>
                <li>Βαρος</li>
                <li>Υψος</li>
                <li>ΔΜΣ</li>
                <li>Περιφερεια</li>
                <li>Δρ/ητα</li>
                <li>Διατροφη</li>
                <li>Υπερταση</li>
                <li>Ζαχαρο</li>
                <li>Ιστορικο</li>
            </ul>

            <fieldset data-name="region" data-id="region1">
                <div class="row">
                    <h3 id="questionnaire-header">1.Ποιο είναι το γεωγραφικό σας διαμέρισμα;</h3>
                    <div class="col-md-12 col-lg-6">
                        <select name="region" id="region" class="selectqountry" aria-required="true" required>
                            <option value="none">Επιλέξτε διαμέρισμα</option>
                            <option value="Attica">Αττική</option>
                            <option value="Central Greece">Στερεά Ελλάδα</option>
                            <option value="Central Macedonia">Κεντρική Μακεδονία</option>
                            <option value="Crete">Κρήτη</option>
                            <option value="Eastern Macedonia and Thrace">Ανατολική Μακεδονία και Θράκη</option>
                            <option value="Epirus">Ήπειρος</option>
                            <option value="Ionian Islands">Ιόνια Νησιά</option>
                            <option value="North Aegean Islands">Νησιά Βορείου Αιγαίου</option>
                            <option value="Peloponnese">Πελοπόννησος</option>
                            <option value="South Aegean Islands">Νησιά Νοτίου Αιγαίου</option>
                            <option value="Thessaly">Θεσσαλία</option>
                            <option value="Western Greece">Δυτική Ελλάδα</option>
                            <option value="Western Macedonia">Δυτική Μακεδονία</option>
                        </select>
                    </div> <!-- col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <img class="img-thumbnail img-responsive" src="images/quest-icons/question1.png" alt="">
                    </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="next-quest"><i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i>Επόμενο</a>
            </fieldset>

            <fieldset data-name="gender" data-id="gender2">
                <div class="row">
                    <h3 id="questionnaire-header">2.Προσδιορίστε το φύλο σας.</h3>
                    <div class="col-md-12 col-lg-6">
                        <div class="margin-50">
                            <input type="radio" id="gender" name="gender" value="M" required="required"
                                   aria-required="true"/><span class="alignment">Άντρας</span><br>
                            <input type="radio" id="gender" name="gender" value="F" required="required"
                                   aria-required="true"/><span class="alignment">Γυναίκα</span>

                        </div>
                    </div> <!-- col-md-12 col-lg-6 -->

                    <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail" src="images/quest-icons/question2.png" alt="">
                    </div> <!-- col-md-12 col-lg-6 -->
                </div>

                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Προηγούμενο</a>
                <a class="next-quest checkGender">Επόμενο<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>

            <fieldset data-name="age" data-id="age3">
                <div class="row">
                    <h3 id="questionnaire-header">3.Προσδιορίστε την ηλικία σας.</h3>
                    <div class="col-md-12 col-lg-6">
                        <div class="margin-50">
                            <input type="radio" id="age" name="age" value="<45" required="required"
                                   aria-required="true"/><span class="alignment">Νεότερος/η των 45 ετών.</span><br>
                            <input type="radio" id="age" name="age" value="45-54" required="required"
                                   aria-required="true"/><span class="alignment">Μεταξύ 45 και 54 ετών.</span><br>
                            <input type="radio" id="age" name="age" value="55-64" required="required"
                                   aria-required="true"/><span class="alignment">Μεταξύ 55 και 64 ετών.</span><br>
                            <input type="radio" id="age" name="age" value=">64" required="required"
                                   aria-required="true"/><span class="alignment">Μεγαλύτερος/η των 64 ετών.</span><br>
                        </div>
                    </div> <!-- col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail" src="images/quest-icons/question3.png" alt="">
                    </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Προηγούμενο</a>
                <a class="next-quest">Επόμενο<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>

            <fieldset data-name="weight" data-id="weight4">
                <div class="row">
                    <h3 id="questionnaire-header">4.Προσδιορίστε το βάρος σας σε κιλά.</h3>
                    <div class="col-md-12 col-lg-6">
                        <div class="">
                            <input type="number" id="weight" name="weight" value="0" min="1" max="300" required="required"
                                   aria-required="true"/>
                        </div>
                    </div> <!-- col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail margin-50" src="images/quest-icons/question4.png"
                             alt="">
                    </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Προηγούμενο</a>
                <a class="next-quest">Επόμενο<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>

            <fieldset data-name="height" data-id="height5">
                <div class="row">
                    <h3 id="questionnaire-header">5.Προσδιορίστε το ύψος σας σε μέτρα.</h3>
                    <div class="col-md-12 col-lg-6">
                        <div class="">
                            <input type="number" id="height" name="height" value="0" min="1" max="3" step="0.01" required="required" aria-required="true"/>
                            <p class="height-warning">π.χ. 1,65</p>
                        </div>
                    </div> <!-- col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail margin-50" src="images/quest-icons/question5.png"
                             alt="">
                    </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Προηγούμενο</a>
                <a class="next-quest calculatebmi">Επόμενο<i class="fa fa-arrow-right fa-2x btn-align"
                                                          aria-hidden="true"></i></a>
            </fieldset>

            <fieldset data-name="bmi" data-id="bmi6">
                <div class="row">
                    <h3 id="questionnaire-header">6.Δείκτης μάζας σώματος.</h3>
                    <div class="col-md-12 col-lg-6">

                        <h5 class="margin-50">Με βάση το βάρος και το ύψος σας,</br> ο ΔΜΣ σας είναι:</h5>

                        <input type="text" id="bmi" name="bmi" class="margin-50">

                    </div> <!-- col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail" src="images/quest-icons/question6.png" alt="">
                    </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Προηγούμενο</a>
                <a class="next-quest">Επόμενο<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>

            <fieldset data-name="waist" data-id="waist7">
                <div class="row">
                    <h3 id="questionnaire-header">7.Προσδιορίστε την περιφέρεια μέσης.</h3>
                    <div class="col-md-12 col-lg-6">
                        <div class="margin-50">
                            <div class="col-md-6 col-xs-6 donotdisplaymale"><h2 class="pad-10">Άντρας</h2>
                                <input type="radio" id="manwaist_1" name="waist" value="<94cm" aria-required="true"
                                       required/><span class="alignment smaller">Κάτω από 94cm.</span></br>
                                <input type="radio" id="manwaist_2" name="waist" value="94cm-102cm" aria-required="true"
                                       required/><span class="alignment smaller">94cm - 102cm.</span></br>
                                <input type="radio" id="manwaist_3" name="waist" value=">102cm" aria-required="true"
                                       required/><span class="alignment smaller">Πάνω από 102cm.</span></br>
                            </div>
                            <div class="col-md-6 col-xs-6 donotdisplayfemale"><h2 class="pad-10">Γυναίκα</h2>

                                <input type="radio" id="womanwaist_1" name="waist" value="<80cm" aria-required="true"
                                       required/><span class="alignment smaller">Κάτω από 80cm.</span></br>
                                <input type="radio" id="womanwaist_2" name="waist" value="80-88cm" aria-required="true"
                                       required/><span class="alignment smaller">80cm - 88cm.</span></br>
                                <input type="radio" id="womanwaist_3" name="waist" value=">88cm" aria-required="true"
                                       required/><span class="alignment smaller">Πάνω από 88cm.</span></br>
                            </div>
                        </div>
                    </div> <!-- col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail" src="images/quest-icons/question7.png" alt="">
                    </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Προηγούμενο</a>
                <a class="next-quest">Επόμενο<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>

            <fieldset data-name="activity" data-id="activity8">
                <div class="row">
                    <h3 id="questionnaire-header">8.Συνήθως ασχολείστε με σωματική δραστηριότητα <br>επί 30 λεπτά στη δουλεία ή/και στον ελεύθερο χρόνο σας;</h3>
                    <div class="col-md-12 col-lg-6">
                        <div class="margin-50">
                            <input type="radio" id="activity_1" name="activity" value="Y" required="required"
                                   aria-required="true"/><span class="alignment">Ναι</span><br>
                            <input type="radio" id="activity_2" name="activity" value="N" required="required"
                                   aria-required="true"/><span class="alignment">Όχι</span><br>
                        </div>
                    </div> <!-- col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail" src="images/quest-icons/question8.png" alt="">
                    </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Προηγούμενο</a>
                <a class="next-quest">Επόμενο<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>

            <fieldset data-name="food_habit" data-id="food_habit9">
                <div class="row">
                    <h3 id="questionnaire-header">9.Πόσο συχνά τρώτε λαχανικά και φρούτα;</h3>
                    <div class="col-md-12 col-lg-6">
                        <div class="margin-50">
                            <input type="radio" id="food_habit_1" name="food_habit" value="Daily" required="required"
                                   aria-required="true"/><span class="alignment">Καθημερινά</span><br>
                            <input type="radio" id="food_habit_2" name="food_habit" value="Nondaily" required="required"
                                   aria-required="true"/><span class="alignment">Όχι καθημερινά</span><br>
                        </div>
                    </div> <!-- col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail" src="images/quest-icons/question9.png" alt="">
                    </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Προηγούμενο</a>
                <a class="next-quest">Επόμενο<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>

            <fieldset data-name="hbp" data-id="hbp10">
                <div class="row">
                    <h3 id="questionnaire-header">10.Έχετα πάρει πότε τακτικά αντιϋπερτασικά φάρμακα;</h3>
                    <div class="col-md-12 col-lg-6">
                        <div class="margin-50">
                            <input type="radio" id="hbp_1" name="hbp" value="Y" required="required"
                                   aria-required="true"/><span class="alignment">Ναι</span><br>
                            <input type="radio" id="hbp_2" name="hbp" value="N" required="required"
                                   aria-required="true"/><span class="alignment">Όχι</span><br>
                        </div>
                    </div> <!-- col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail" src="images/quest-icons/question10.png" alt="">
                    </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Προηγούμενο</a>
                <a class="next-quest">Επόμενο<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>

            <fieldset data-name="blood_sugar" data-id="blood_sugar11">
                <div class="row">
                    <h3 id="questionnaire-header">11.Είχατε παρατηρήσει ποτέ υψηλά επίπεδα γλυκόζης<br>
                        (π.χ. σε κάποια εξέταση ή κατά τη διάρκεια εγκυμοσύνης);</h3>
                    <div class="col-md-12 col-lg-6">
                        <div class="margin-50">
                            <input type="radio" id="blood_sugar_1" name="blood_sugar" value="Y" required="required"
                                   aria-required="true"/><span class="alignment">Ναι</span><br>
                            <input type="radio" id="blood_sugar_2" name="blood_sugar" value="N" required="required"
                                   aria-required="true"/><span class="alignment">Όχι</span><br>
                        </div>
                    </div> <!-- col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail" src="images/quest-icons/question11.png" alt="">
                    </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Προηγούμενο</a>
                <a class="next-quest">Επόμενο<i class="fa fa-arrow-right fa-2x btn-align" aria-hidden="true"></i></a>
            </fieldset>

            <fieldset data-name="family_history" data-id="family_history12">
                <div class="row">
                    <h3 id="questionnaire-header">12.Έχετε κάποιο στενό ή άλλο συγγενή <br>με διαβήτη (τύπου 1 ή 2);</h3>
                    <div class="col-md-12 col-lg-6">
                        <div class="margin-50">
                            <input type="radio" id="family_history_1" name="family_history" value="No"
                                   required="required" aria-required="true"/><span class="alignment">Όχι</span><br>
                            <input type="radio" id="family_history_2" name="family_history" value="Yes-second-relation"
                                   required="required" aria-required="true"/><span class="alignment">Ναι (Παππού - Θείο - Θεία - Πρώτο ξάδελφο)</span><br>
                            <input type="radio" id="family_history_3" name="family_history" value="Yes-first-relation"
                                   required="required" aria-required="true"/><span class="alignment">Ναι (Γονέα - αδελφό - αδελφή - παιδί)</span><br>
                        </div>
                    </div> <!-- col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <img class="img-responsive img-thumbnail" src="images/quest-icons/question12.png" alt="">
                    </div> <!-- col-md-12 col-lg-6 -->
                </div>
                <a class="prev-quest"><i class="fa fa-arrow-left fa-2x btn-align" aria-hidden="true"></i>Προηγούμενο</a>
                <input type="submit" name="submit" value="Submit" class="btn btn-info"/>
            </fieldset>
        </form> <!-- questionnaire -->
    </div> <!-- col-md-12 col-lg-12 -->
</div> <!-- row -->