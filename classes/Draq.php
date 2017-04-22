<?php

/**
 * Created by PhpStorm.
 * User: Nassia
 * Date: 4/4/2017
 * Time: 11:42
 */
class Draq
{
    private $_db,
        $_data,
        $_sessionName,
        $_isInSession;


    public function __construct($userSession = null)
    {
        $this->_db = DB::getInstance();

//        $this->_sessionName = config::get('session/session_name');
//
//        if (!$userSession) {
//            if (Session::exists($this->_sessionName)) {
//                Session::put($this->_sessionName, $userSession);
//
//                if ($this->find($userSession)) {
//                    $this->_isInSession = true;
//                } else {
//                    //user not in session.
//                }
//            }
//        } else {
//            $this->find($userSession);
//        }

    }

    public function insertData($fields = array())
    {
        if (!$this->_db->insert('diabdata', $fields)) {
            throw new Exception('There was a problem submitting your data');
        }
    }

    public function find($number)
    {

            $field = 'unique_id';
            $data = $this->_db->get('diabdata', array($field, '=', $number));

            if ($data->count()) {
                $this->_data = $data->first();
                return true;
            }

    }


    public function exists()
    {
        return (!empty($this->_data)) ? true : false;
    }

    public function deleteData(){
        $this->_db->delete('diabdata', array('session_id,', '=', $this->data()->session_id));
    }

//    public function isInSession(){
//        return $this->_isInSession;
//    }

    public function data(){
        return $this->_data;
    }
//
//    public function finishSession(){
//
//        Session::delete($this->_sessionName);
//    }


}