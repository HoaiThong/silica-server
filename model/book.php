<?php
/**
 * @author Sun
 *
 */
class Book {
    private $id;
    private $name;
    private $author;
    private $summary;
    private $tag;
    private $icon;
    private $price;
    private $scoreRating;
    private $viewQuantity;
    private $viewWeek;
    private $viewMonth;
    private $namsx;
    private $nxb;
    private $createAt;
    private $updateAt;
    
    function __construct(){
        
    }
    /**
     * @return mixed
     */
    public function getScoreRating()
    {
        return $this->scoreRating;
    }

    /**
     * @return mixed
     */
    public function getViewWeek()
    {
        return $this->viewWeek;
    }

    /**
     * @return mixed
     */
    public function getViewMonth()
    {
        return $this->viewMonth;
    }

    /**
     * @param mixed $scoreRating
     */
    public function setScoreRating($scoreRating)
    {
        $this->scoreRating = $scoreRating;
    }

    /**
     * @param mixed $viewWeek
     */
    public function setViewWeek($viewWeek)
    {
        $this->viewWeek = $viewWeek;
    }

    /**
     * @param mixed $viewMonth
     */
    public function setViewMonth($viewMonth)
    {
        $this->viewMonth = $viewMonth;
    }

    
    
    /**
     * @return mixed
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param mixed $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @return mixed
     */
    public function getViewQuantity()
    {
        return $this->viewQuantity;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getNamsx()
    {
        return $this->namsx;
    }

    /**
     * @return mixed
     */
    public function getNxb()
    {
        return $this->nxb;
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
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @param mixed $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * @param mixed $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    /**
     * @param mixed $viewQuantity
     */
    public function setViewQuantity($viewQuantity)
    {
        $this->viewQuantity = $viewQuantity;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $namsx
     */
    public function setNamsx($namsx)
    {
        $this->namsx = $namsx;
    }

    /**
     * @param mixed $nxb
     */
    public function setNxb($nxb)
    {
        $this->nxb = $nxb;
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