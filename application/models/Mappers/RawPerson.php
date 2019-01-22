<?php

class Application_Model_Mappers_RawPerson{
    protected $_dbTable = null;

    public function getTable(){
        if (!isset($this->_dbTable)){
            $this->_dbTable = new Application_Model_DbTable_RawPerson();
        }
        return $this->_dbTable;
    }

    public function getModel(Zend_Db_Table_Row $row){
        $model = new Application_Model_Person();
        $model->setId($row->ID);
        $model->setFirstname($row->FIRSTNAME);
        $model->setLastname($row->LASTNAME);
        $model->setStatus($row->STATUS);
        $model->setCity($row->CITY);
        $model->setBirthday($row->BIRTHDAY);
        $model->setPhone($row->PHONE);
        $model->setGender($row->GENDER);
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

	public function fetchSinglebyFirstname($firstname){

		$select = $this->getTable()->select();
		$select->where('FIRSTNAME = "' . $firstname . '"');

		$row = $this->getTable()->fetchRow($select);

		if (is_null($row)){
			return false;
		}

		$model = $this->getModel($row);

		return $model;
    }

  public function fetchSinglebyLastname($lastname){

  	$select = $this->getTable()->select();
  	$select->where('LASTNAME = "' . $lastname . '"');

  	$row = $this->getTable()->fetchRow($select);

  	if (is_null($row)){
  		return false;
  	}

  	$model = $this->getModel($row);

  	return $model;
    }

  public function fetchSinglebyStatus($status){


  	$select = $this->getTable()->select();
  	$select->where('STATUS = "' . $status . '"');

  	$row = $this->getTable()->fetchRow($select);

  	if (is_null($row)){
    	return false;
  	}

  	$model = $this->getModel($row);

  	return $model;
    }

  public function fetchSinglebyCity($city){


		$select = $this->getTable()->select();
		$select->where('CITY = "' . $city . '"');

  	$row = $this->getTable()->fetchRow($select);

  	if (is_null($row)){
  		return false;
  	}

  	$model = $this->getModel($row);

		return $model;
    }

  public function fetchSinglebyBirthday($birthday){


    $select = $this->getTable()->select();
    $select->where('BIRTHDAY = "' . $birthday . '"');

    $row = $this->getTable()->fetchRow($select);

    if (is_null($row)){
      return false;
    }

    $model = $this->getModel($row);

    return $model;
    }
    public function fetchSinglebyPhone($phone){


      $select = $this->getTable()->select();
      $select->where('PHONE = "' . $phone . '"');

      $row = $this->getTable()->fetchRow($select);

      if (is_null($row)){
        return false;
      }

      $model = $this->getModel($row);

      return $model;
      }

    public function fetchSinglebyGender($gender){


    $select = $this->getTable()->select();
    $select->where('GENDER = "' . $gender . '"');

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
