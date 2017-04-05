<?php

class User
{
    private $_db,
        $_data,
        $_sessionName,

        $_isLoggedIn;

    public function __construct($user = null)
    {
        $this->_db = DB::getInstance();

        $this->_sessionName = config::get('session/session_name');

        if (!$user) {
            if (Session::exists($this->_sessionName)) {
                $user = Session::get($this->_sessionName);

                if ($this->find($user)) {
                    $this->_isLoggedIn = true;
                } else {
                    //process logout
                }

            } else {
                $this->find($user);
            }

        }


    }

    public function create($fields = array())
    {
        if (!$this->_db->insert('administrators', $fields)) {
            throw new Exception('There was a problem creating your account.');
        }
    }

    public function find($user = null)
    {
        if ($user) {
            $field = (is_numeric($user)) ? 'id' : 'username';
            $data = $this->_db->get('administrators', array($field, '=', $user));

            if ($data->count()) {
                $this->_data = $data->first();
                return true;
            }
        }
        return false;
    }

    public function update($fields = array(), $id=null){

        if(!$id && $this->isLoggedIn()){
            $id=$this->data()->id;

        }

        if(!$this->_db->update('administrators', $id, $fields)){
             throw new Exception('There was a problem updating your credentials.');
        }
    }

    public function login($username = null, $password = null)
    {

        if (!$username && !$password && $this->exists()) {

            Session::put($this->_sessionName, $this->data()->id);

        } else {
            $user = $this->find($username);


            if ($user) {
                if ($this->data()->password) {
                    Session::put($this->_sessionName, $this->data()->id);

                    return true;
                }
            }
        }


        return false;
    }

    public function exists()
    {
        return (!empty($this->_data)) ? true : false;
    }

    public function logout()
    {
        //$this->_db->delete('user_session', array('user_id', '=', $this->data()->id));
        Session::delete($this->_sessionName);


    }

    public function data()
    {
        return $this->_data;
    }

    public function isLoggedIn()
    {
        return $this->_isLoggedIn;

    }


}


?>