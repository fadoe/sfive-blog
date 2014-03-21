<?php
/**
 * Created by PhpStorm.
 * User: falk
 * Date: 26.02.14
 * Time: 16:04
 */
namespace Sfive\Entity;

interface AuthorInterface
{
    /**
     * @return boolean
     */
    public function getRightPublish();

    /**
     * @return boolean
     */
    public function getMailTrackBacks();

    /**
     * @param int $id
     */
    public function setId($id);

    /**
     * @param string $eMail
     */
    public function setEMail($eMail);

    /**
     * @return string
     */
    public function getPassword();

    /**
     * @return string
     */
    public function getUsername();

    /**
     * @return boolean
     */
    public function getMailComments();

    /**
     * @param string $password
     */
    public function setPassword($password);

    /**
     * @param int $hashType
     */
    public function setHashType($hashType);

    /**
     * @return string
     */
    public function getEMail();

    /**
     * @return string
     */
    public function getRealName();

    /**
     * @param boolean $mailTrackBacks
     */
    public function setMailTrackBacks($mailTrackBacks);

    /**
     * @return int
     */
    public function getUserLevel();

    /**
     * @return int
     */
    public function getHashType();

    /**
     * @param string $username
     */
    public function setUsername($username);

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $userLevel
     */
    public function setUserLevel($userLevel);

    /**
     * @param string $realName
     */
    public function setRealName($realName);

    /**
     * @param boolean $rightPublish
     */
    public function setRightPublish($rightPublish);

    /**
     * @param boolean $mailComments
     */
    public function setMailComments($mailComments);
}
