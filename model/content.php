<?php

class ContentBook
{

    private $id;

    private $idBook;

    // số thứ tự
    private $serial;

    private $name;

    private $content;

    private $createAt;

    private $updateAt;

    function __construct()
    {}

    /**
     *
     * @return mixed
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     *
     * @param mixed $serial
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;
    }

    /**
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @return mixed
     */
    public function getIdBook()
    {
        return $this->idBook;
    }

    /**
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     *
     * @return mixed
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     *
     * @return mixed
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     *
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     *
     * @param mixed $idBook
     */
    public function setIdBook($idBook)
    {
        $this->idBook = $idBook;
    }

    /**
     *
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     *
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     *
     * @param mixed $createAt
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;
    }

    /**
     *
     * @param mixed $updateAt
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;
    }
}
?>