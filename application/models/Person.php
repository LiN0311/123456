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
		protected $_createdate = null;
		protected $_updatedate = null;
		protected $_deletedate = null;

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

		public function setCreatedate($value){
	        if (is_string($value)){
	            $this->_createdate = $value;
	        }
	    }

	    public function getCreatedate(){
	        return $this->_createdate;
	    }

		public function setUpdatedate($value){
	        if (is_string($value)){
	            $this->_updatedate = $value;
	        }
	    }

	    public function getUpdatedate(){
	        return $this->_updatedate;
	    }

		public function setDeletedate($value){
	        if (is_string($value)){
	            $this->_deletedate = $value;
	        }
	    }

	    public function getDeletedate(){
	        return $this->_deletedate;
	    }


    public function toArray(){
        $data = array(
            'person_id'					=> $this->getId(),
            'person_firstname'	=> $this->getFirstname(),
            'person_lastname'		=> $this->getLastname(),
            'person_status'			=> $this->getStatus(),
						'person_city'				=> $this->getCity(),
            'person_birthday'		=> $this->getBirthday(),
            'person_phone'			=> $this->getPhone(),
            'person_gender'			=> $this->getGender(),
						'person_createdate'	=> $this->getCreatedate(),
            'person_updatedate'	=> $this->getUpdatedate(),
            'person_deletedate'	=> $this->getDeletedate(),
        );

        return $data;
    }
}
