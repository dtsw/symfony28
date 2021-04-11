<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GoShortcut
 *
 * @ORM\Table(name="go_shortcut")
 * @ORM\Entity()
 */
class GoShortcut
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="shortcut", type="string", length=160)
     */
    private $shortcut;

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=512)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=512, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetime")
     */
    private $createDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="create_user_id", type="integer")
     */
    private $createUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=512, nullable=true)
     */
    private $comments;

    /**
     * @var int
     *
     * @ORM\Column(name="access_counter", type="integer")
     */
    private $accessCounter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_accessed", type="datetime", nullable=true)
     */
    private $lastAccessed;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set shortcut
     *
     * @param string $shortcut
     *
     * @return GoShortcut
     */
    public function setShortcut($shortcut)
    {
        $this->shortcut = $shortcut;

        return $this;
    }

    /**
     * Get shortcut
     *
     * @return string
     */
    public function getShortcut()
    {
        return $this->shortcut;
    }

    /**
     * Set target
     *
     * @param string $target
     *
     * @return GoShortcut
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return GoShortcut
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return GoShortcut
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return GoShortcut
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createUserId
     *
     * @param integer $createUserId
     *
     * @return GoShortcut
     */
    public function setCreateUserId($createUserId)
    {
        $this->createUserId = $createUserId;

        return $this;
    }

    /**
     * Get createUserId
     *
     * @return int
     */
    public function getCreateUserId()
    {
        return $this->createUserId;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return GoShortcut
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set accessCounter
     *
     * @param integer $accessCounter
     *
     * @return GoShortcut
     */
    public function setAccessCounter($accessCounter)
    {
        $this->accessCounter = $accessCounter;

        return $this;
    }

    /**
     * Get accessCounter
     *
     * @return int
     */
    public function getAccessCounter()
    {
        return $this->accessCounter;
    }

    /**
     * Set lastAccessed
     *
     * @param \DateTime $lastAccessed
     *
     * @return GoShortcut
     */
    public function setLastAccessed($lastAccessed)
    {
        $this->lastAccessed = $lastAccessed;

        return $this;
    }

    /**
     * Get lastAccessed
     *
     * @return \DateTime
     */
    public function getLastAccessed()
    {
        return $this->lastAccessed;
    }
}

