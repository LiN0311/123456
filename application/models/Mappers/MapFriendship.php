<?php

class Application_Model_Mappers_MapFriendship{
    protected $_dbTable = null;

    public function getTable(){
        if (!isset($this->_dbTable)){
            $this->_dbTable = new Application_Model_DbTable_MapFriendship();
        }
        return $this->_dbTable;
    }

    public function getModel(Zend_Db_Table_Row $row){
        $model = new Application_Model_Friendship();
        $model->setId($row->ID);
        $model->setPerson1($row->PERSON1);
        $model->setPerson2($row->PERSON2);
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

	public function fetchSinglebyPerson1($person1){


		$select = $this->getTable()->select();
		$select->where('PERSON1 = "' . $person1 . '"');

		$row = $this->getTable()->fetchRow($select);

		if (is_null($row)){
			return false;
		}

		$model = $this->getModel($row);

		return $model;
    }

    public function fetchSinglebyPerson2($person2){


      $select = $this->getTable()->select();
      $select->where('PERSON2 = "' . $person2 . '"');

      $row = $this->getTable()->fetchRow($select);

      if (is_null($row)){
        return false;
      }

      $model = $this->getModel($row);

      return $model;
      }

      public function fetchSinglebyCreatedate($createdate){


        $select = $this->getTable()->select();
        $select->where('CREATEDATE = "' . $createdate . '"');

        $row = $this->getTable()->fetchRow($select);

        if (is_null($row)){
          return false;
        }

        $model = $this->getModel($row);

        return $model;
        }

      public function fetchSinglebyUpdatedate($updatedate){


      $select = $this->getTable()->select();
      $select->where('UPDATEDATE = "' . $updatedate . '"');

      $row = $this->getTable()->fetchRow($select);

      if (is_null($row)){
        return false;
      }

      $model = $this->getModel($row);

      return $model;
        }


    public function fetchSinglebyDeletedate($deletedate){


      $select = $this->getTable()->select();
      $select->where('DELETEDATE = "' . $deletedate . '"');

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
