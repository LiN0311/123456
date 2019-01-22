<?php

class Application_Model_User{
	protected $_id = null;
    protected $_person1 = null;
    protected $_person2 = null;
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


	public function setPerson1($value){
        if (is_string($value)){
            $this->_person1 = $value;
        }
    }

    public function getPerson1(){
        return $this->_person1;
    }

		public function setPerson2($value){
					if (is_string($value)){
							$this->_person2 = $value;
					}
			}

			public function getPerson2(){
					return $this->_person2;
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
            'friendship_id'					=> $this->getId(),
            'friendship_person1'		=> $this->getPerson1(),
            'friendship_person2'		=> $this->getPaerson2(),
            'user_createdate'				=> $this->getCreatedate(),
            'user_updatedate'				=> $this->getUpdatedate(),
            'user_deletedate'				=> $this->getDeletedate(),
        );

        return $data;
    }
}
