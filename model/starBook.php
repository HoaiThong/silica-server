<?php

class StarBook
{

    private $id;

    private $idCustomer;

    private $idBook;

    private $valueStar;

    private $createAt;

    private $updateAt;
    
    function __construct(){
        
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * @return mixed
     */
    public function getIdBook()
    {
        return $this->idBook;
    }

    /**
     * @return mixed
     */
    public function getValueStar()
    {
        return $this->valueStar;
    }

    /**
     * @return mixed
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * @return mixed
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $idCustomer
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;
    }

    /**
     * @param mixed $idBook
     */
    public function setIdBook($idBook)
    {
        $this->idBook = $idBook;
    }

    /**
     * @param mixed $valueStar
     */
    public function setValueStar($valueStar)
    {
        $this->valueStar = $valueStar;
    }

    /**
     * @param mixed $createAt
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;
    }

    /**
     * @param mixed $updateAt
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;
    }

    
    
}
?>