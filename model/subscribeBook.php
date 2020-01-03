<?php

class SubcribeBook
{
    private $id;
    private $idCustomer;
    private $idBook;
    private $topic;
    private $createAt;
    
    
    function __construct(){
        
    }
    /**
     * @return mixed
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * @param mixed $createAt
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;
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
    public function getTopic()
    {
        return $this->topic;
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
     * @param mixed $topic
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
    }

    
}
?>