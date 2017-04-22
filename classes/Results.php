<?php

/**
 * Created by PhpStorm.
 * User: Dragoness_crysta
 * Date: 20/4/2017
 * Time: 21:35
 */
class Results
{
    private $_draq, $_region, $_gender, $_age, $_weight,
        $_height, $_bmi, $_waist, $_activity,
        $_food_habit, $_hbp, $_blood_sugar,
        $_family_history, $_risk, $_isSuccessful;

    public $age_points, $bmi_points, $waist_points,
        $activity_points, $fh_points, $hbp_points,
        $bs_points, $history_points, $_points;

    public function __construct()
    {
        $this->_draq = new Draq();

    }

    public function ProcessRequest()
    {
            try {

               $this->InputParameters();
               $this->InsertDataToDB();
               $this->_isSuccessful=true;

               // Session::flash('do-test', 'Your record has been saved in the database');
            } catch (Exception $e) {
                die ($e->getMessage());
            }

    }

    public function InputParameters()
    {
        $this->_region = input::get('region');
        $this->_gender = input::get('gender');
        $this->_age = input::get('age');
        $this->_weight = input::get('weight');
        $this->_height = input::get('height');
        $this->_bmi = input::get('bmi');
        $this->_waist = input::get('waist');
        $this->_activity = input::get('activity');
        $this->_food_habit = input::get('food_habit');
        $this->_hbp = input::get('hbp');
        $this->_blood_sugar = input::get('blood_sugar');
        $this->_family_history = input::get('family_history');
        $this->_risk = $this->calculateRisk();

    }

    public function InsertDataToDB()
    {
        $this->_draq->insertData(array(
            'region' => $this->_region,
            'gender' => $this->_gender,
            'age' => $this->_age,
            'weight' => $this->_weight,
            'height' => $this->_height,
            'bmi' => $this->_bmi,
            'waist' => $this->_waist,
            'activity' => $this->_activity,
            'food_habit' => $this->_food_habit,
            'hbp' => $this->_hbp,
            'blood_sugar' => $this->_blood_sugar,
            'family_history' => $this->_family_history,
            'risk' => $this->_risk
        ));
    }

    public function isSuccessful(){
        return $this->_isSuccessful;
    }


    public function calculateRisk(){
        //$this->InputParameters();

        switch($this->_age){
            case '<45':
                $this->age_points = 0;
                break;
            case '45-54':
                $this->age_points = 2;
                break;
            case '55-64':
                $this->age_points = 3;
                break;
            case '>64':
                $this->age_points = 4;
                break;
        }

        switch($this->_bmi){
            case $this->_bmi <= 25:
                $this->bmi_points = 0;
                break;
            case 25 < $this->_bmi && $this->_bmi <= 30:
                $this->bmi_points = 1;
                break;
            case $this->_bmi > 30:
                $this->bmi_points = 2;
                break;
        }

        switch ($this->_gender){
            case 'M':
                switch($this->_waist){
                    case '<94cm':
                        $this->waist_points = 0;
                        break;
                    case '94cm-102cm':
                        $this->waist_points = 3;
                        break;
                    case '>102cm':
                        $this->waist_points = 4;
                        break;
                }
                break;
            case 'F':
                switch($this->_waist){
                    case '<80cm':
                        $this->waist_points = 0;
                        break;
                    case '80cm-88cm':
                        $this->waist_points = 3;
                        break;
                    case '>88cm':
                        $this->waist_points = 4;
                        break;
                }
                break;

        }


        switch($this->_activity){
            case 'Y':
                $this->activity_points = 0;
                break;
            case 'N':
                $this->activity_points = 2;
                break;
        }

        switch($this->_food_habit){
            case 'Daily':
                $this->fh_points = 0;
                break;
            case 'Nondaily':
                $this->fh_points = 1;
        }

        switch($this->_hbp){
            case "Y":
                $this->hbp_points = 2;
                break;
            case "N":
                $this->hbp_points = 0;
                break;
        }

        switch($this->_blood_sugar){
            case 'Y':
                $this->bs_points = 5;
                break;
            case'N':
                $this->bs_points = 0;
        }

        switch($this->_family_history){
            case 'No':
                $this->history_points = 0;
                break;
            case 'Yes-second-relation':
                $this->history_points = 3;
                break;
            case 'Yes-first-relation':
                $this->history_points = 5;
                break;
        }

        $this->_points= $this->age_points+ $this->bmi_points+ $this->waist_points+ $this->activity_points+ $this->fh_points+ $this->hbp_points+ $this->bs_points+ $this->history_points;

        switch($this->_points){
            case $this->_points < 7:
                $this->_risk=1;
                break;
            case $this->_points >= 7 && $this->_points<=11:
                $this->_risk=2;
                break;
            case $this->_points >= 12 && $this->_points<=14:
                $this->_risk=3;
                break;
            case $this->_points >= 15 && $this->_points<=20:
                $this->_risk=4;
                break;
            case $this->_points >= 21:
                $this->_risk=5;
                break;
        }

        return $this->_risk;
    }

    public function ShowPoints(){
        return $this->_points;
    }

}