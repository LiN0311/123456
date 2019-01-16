<?php

class Application_Model_Mappers_RawUser{
    protected $_dbTable = null;

    public function getTable(){
        if (!isset($this->_dbTable)){
            $this->_dbTable = new Application_Model_DbTable_RawUser();
        }
        return $this->_dbTable;
    }

    public function getModel(Zend_Db_Table_Row $row){
        $model = new Application_Model_User();
        $model->setId($row->ID);
        $model->setFirstname($row->FIRSTNAME);
        $model->setLastname($row->LASTNAME);
        $model->setEmail($row->EMAIL);
        $model->setPassword($row->PASSWORD);
        $model->setCreatedate($row->CREATEDATE);
        $model->setUpdatedate($row->UPDATEDATE);
        $model->setDeletedate($row->DELETEDATE);

        return $model;
    }

    public function fetchSinglebyId($id){


		$select = $this->getTable()->select();
		$select->where('ID = "' . (int) $id . '"');
		//$select->where('LOCKED IS NULL');

		$row = $this->getTable()->fetchRow($select);

		if (is_null($row)){
			return false;
		}

		$model = $this->getModel($row);

		return $model;
    }

	public function fetchSinglebyEmail($email){


		$select = $this->getTable()->select();
		$select->where('EMAIL = "' . $email . '"');

		$row = $this->getTable()->fetchRow($select);

		if (is_null($row)){
			return false;
		}

		$model = $this->getModel($row);

		return $model;
    }

    public function fetchList(){

		$select = $this->getTable()->select();
		//$select->where('LOCKED IS NULL');
		$select->where('DELETEDATE IS NULL');
		// $select->where('UNIX_TIMESTAMP(`DELETEDATE`) = 0');
			$select->order('LASTNAME ASC');

		$rows = $this->getTable()->fetchAll($select);

		$list = array();

		foreach ($rows as $row){
			$model = $this->getModel($row);

			$list[] = $model;
		}


		return $list;
    }

	public function create(array $data){
		$inputData = array(
			'FIRSTNAME'		=> $data['user_firstname'],
			'LASTNAME'		=> $data['user_lastname'],
			'EMAIL'			=> $data['user_email'],
			'PASSWORD'		=> $data['user_password'],
			'CREATEDATE'	=> date('Y-m-d H:i:s'),
		);

		$row = $this->getTable()->createRow($inputData);

		$row->save();

		return $row->ID;
	}

	public function update($id, array $data){
		$inputData = array(
			'FIRSTNAME'		=> $data['user_firstname'],
			'LASTNAME'		=> $data['user_lastname'],
			'PASSWORD'		=> $data['user_password'],
			'UPDATEDATE'	=> date('Y-m-d H:i:s'),
		);

		$row = $this->getTable()->find($id)->current();
		$row->setFromArray($inputData);
		$row->save();

	}

	public function delete($id){
		/* $row = $this->getTable()->find($id)->current();
		$row->delete();
		*/

		// do not delete, but set deletion date
		$inputData = array(
			'DELETEDATE'	=> date('Y-m-d H:i:s'),
		);

		$row = $this->getTable()->find($id)->current();
		$row->setFromArray($inputData);
		$row->save();

	}

	public function login($id){
		/*
		$inputData = array(
			'LOGINDATE'		=> date('Y-m-d H:i:s')
		);

		$row = $this->getTable()->find($id)->current();
		$row->setFromArray($inputData);
		$row->save();
		*/
	}
}
