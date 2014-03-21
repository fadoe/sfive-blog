<?php

namespace Sfive\Entity;

class Author implements AuthorInterface
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $realName;

    /**
     * @var string
     */
    private $password;

    /**
     * @var boolean
     */
    private $mailComments;

    /**
     * @var boolean
     */
    private $mailTrackBacks;

    /**
     * @var string
     */
    private $eMail;

    /**
     * @var integer
     */
    private $userLevel;

    /**
     * @var boolean
     */
    private $rightPublish;

    /**
     * @var integer
     */
    private $hashType;

    /**
     * @param string $eMail
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;
    }

    /**
     * @return string
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * @param int $hashType
     */
    public function setHashType($hashType)
    {
        $this->hashType = $hashType;
    }

    /**
     * @return int
     */
    public function getHashType()
    {
        return $this->hashType;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param boolean $mailComments
     */
    public function setMailComments($mailComments)
    {
        $this->mailComments = $mailComments;
    }

    /**
     * @return boolean
     */
    public function getMailComments()
    {
        return $this->mailComments;
    }

    /**
     * @param boolean $mailTrackBacks
     */
    public function setMailTrackBacks($mailTrackBacks)
    {
        $this->mailTrackBacks = $mailTrackBacks;
    }

    /**
     * @return boolean
     */
    public function getMailTrackBacks()
    {
        return $this->mailTrackBacks;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $realName
     */
    public function setRealName($realName)
    {
        $this->realName = $realName;
    }

    /**
     * @return string
     */
    public function getRealName()
    {
        return $this->realName;
    }

    /**
     * @param boolean $rightPublish
     */
    public function setRightPublish($rightPublish)
    {
        $this->rightPublish = $rightPublish;
    }

    /**
     * @return boolean
     */
    public function getRightPublish()
    {
        return $this->rightPublish;
    }

    /**
     * @param int $userLevel
     */
    public function setUserLevel($userLevel)
    {
        $this->userLevel = $userLevel;
    }

    /**
     * @return int
     */
    public function getUserLevel()
    {
        return $this->userLevel;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

}
