<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MMC\FosUserBundle\Entity\User as BaseUser;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */

class User extends BaseUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="trello_id", type="string", nullable=true)
     */
    private $trello_id;

    protected $trelloAccessToken;

    /**
     * @return string
     */
    public function getTrelloId()
    {
        return $this->trello_id;
    }

    /**
     * @param string $trelloId
     */
    public function setTrelloId($trello_id)
    {
        $this->trello_id = $trello_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrelloAccessToken()
    {
        return $this->trelloAccessToken;
    }

    /**
     * @param string $trelloAccessToken
     */
    public function setTrelloAccessToken($trelloAccessToken)
    {
        $this->trelloAccessToken = $trelloAccessToken;
        return $this;
    }
}
