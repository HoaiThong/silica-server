<?php
class Customer{
    
    private $id;
    private $idFacebook;
    private $idGoogle;
    private $idAccoutKit;
    private $nameFaceBook;
    private $nameGoogle;
    private $firstName;
    private $secondName;
    private $linkFaceBook;
    private $phone;
    private $phoneFacebook;
    private $emailFacebook;
    private $emailGoogle;
    private $address;
    private $sex;
    private $dateOfBirth;
    private $idTokenFcm;
    private $job;
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
    public function getIdFacebook()
    {
        return $this->idFacebook;
    }

    /**
     * @return mixed
     */
    public function getIdGoogle()
    {
        return $this->idGoogle;
    }

    /**
     * @return mixed
     */
    public function getIdAccoutKit()
    {
        return $this->idAccoutKit;
    }

    /**
     * @return mixed
     */
    public function getNameFaceBook()
    {
        return $this->nameFaceBook;
    }

    /**
     * @return mixed
     */
    public function getNameGoogle()
    {
        return $this->nameGoogle;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * @return mixed
     */
    public function getLinkFaceBook()
    {
        return $this->linkFaceBook;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getPhoneFacebook()
    {
        return $this->phoneFacebook;
    }

    /**
     * @return mixed
     */
    public function getEmailFacebook()
    {
        return $this->emailFacebook;
    }

    /**
     * @return mixed
     */
    public function getEmailGoogle()
    {
        return $this->emailGoogle;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getIdTokenFcm()
    {
        return $this->idTokenFcm;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
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
     * @param mixed $idFacebook
     */
    public function setIdFacebook($idFacebook)
    {
        $this->idFacebook = $idFacebook;
    }

    /**
     * @param mixed $idGoogle
     */
    public function setIdGoogle($idGoogle)
    {
        $this->idGoogle = $idGoogle;
    }

    /**
     * @param mixed $idAccoutKit
     */
    public function setIdAccoutKit($idAccoutKit)
    {
        $this->idAccoutKit = $idAccoutKit;
    }

    /**
     * @param mixed $nameFaceBook
     */
    public function setNameFaceBook($nameFaceBook)
    {
        $this->nameFaceBook = $nameFaceBook;
    }

    /**
     * @param mixed $nameGoogle
     */
    public function setNameGoogle($nameGoogle)
    {
        $this->nameGoogle = $nameGoogle;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $secondName
     */
    public function setSecondName($secondName)
    {
        $this->secondName = $secondName;
    }

    /**
     * @param mixed $linkFaceBook
     */
    public function setLinkFaceBook($linkFaceBook)
    {
        $this->linkFaceBook = $linkFaceBook;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param mixed $phoneFacebook
     */
    public function setPhoneFacebook($phoneFacebook)
    {
        $this->phoneFacebook = $phoneFacebook;
    }

    /**
     * @param mixed $emailFacebook
     */
    public function setEmailFacebook($emailFacebook)
    {
        $this->emailFacebook = $emailFacebook;
    }

    /**
     * @param mixed $emailGoogle
     */
    public function setEmailGoogle($emailGoogle)
    {
        $this->emailGoogle = $emailGoogle;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @param mixed $idTokenFcm
     */
    public function setIdTokenFcm($idTokenFcm)
    {
        $this->idTokenFcm = $idTokenFcm;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job)
    {
        $this->job = $job;
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