<?php

class Application_Model_Person{
	protected $_id = null;
    protected $_firstname = null;
    protected $_lastname = null;
    protected $_status = null;
    protected $_city = null;
    protected $_birthday = null;
    protected $_phone = null;
    protected $_gender = null;

    public function setId($id){
        $id = (int) $id;
        if ($id != 0){
            $this->_id = $id;
        }
    }

    public function getId(){
        return $this->_id;
    }

    public function setFirstname($value){
        if (is_string($value)){
            $this->_firstname = $value;
        }
    }

    public function getFirstname(){
        return $this->_firstname;
    }

	public function setLastname($value){
        if (is_string($value)){
            $this->_lastname = $value;
        }
    }

    public function getLastname(){
        return $this->_lastname;
    }

	public function setStatus($value){
        if (is_string($value)){
            $this->_status = $value;
        }
    }

    public function getStatus(){
        return $this->_status;
    }

	public function setCity($value){
        if (is_string($value)){
            $this->_city = $value;
        }
    }

	public function getCity(){
        return $this->_city;
    }

	public function setBirthday($value){
        if (is_string($value)){
            $this->_birthday = $value;
        }
    }

    public function getBirthday(){
        return $this->_birthday;
    }

	public function setPhone($value){
        if (is_string($value)){
            $this->_phone = $value;
        }
    }

    public function getPhone(){
        return $this->_phone;
    }

	public function setGender($value){
        if (is_string($value)){
            $this->_gender = $value;
        }
    }

    public function getGender(){
        return $this->_gender;
    }

    public function toArray(){
        $data = array(
            'user_id'					=> $this->getId(),
            'user_firstname'	=> $this->getFirstname(),
            'user_lastname'		=> $this->getLastname(),
            'user_status'			=> $this->getStatus(),
						'user_city'				=> $this->getCity(),
            'user_birthday'		=> $this->getBirthday(),
            'user_phone'			=> $this->getPhone(),
            'user_gender'			=> $this->getGender(),
        );

        return $data;
    }
}
