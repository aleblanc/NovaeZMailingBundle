<?php
/**
 * NovaeZMailingBundle Bundle.
 *
 * @package   Novactive\Bundle\eZMailingBundle
 *
 * @author    Novactive <s.morel@novactive.com>
 * @copyright 2018 Novactive
 * @license   https://github.com/Novactive/NovaeZMailingBundle/blob/master/LICENSE MIT Licence
 */
declare(strict_types=1);

namespace Novactive\Bundle\eZMailingBundle\Core\DataHandler;

use Doctrine\Common\Collections\ArrayCollection;
use Novactive\Bundle\eZMailingBundle\Entity\MailingList;
use Novactive\Bundle\eZMailingBundle\Entity\User;

/**
 * Class Unregistration.
 */
class Unregistration
{
    /**
     * @var User
     */
    private $user;

    /**
     * @var MailingList[]
     */
    private $mailingLists;

    /**
     * Registration constructor.
     */
    public function __construct()
    {
        $this->mailingLists = new ArrayCollection();
    }

    /**
     * @return User
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User $user
     *
     * @return $this
     */
    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return MailingList[]|mixed
     */
    public function getMailingLists()
    {
        return $this->mailingLists;
    }

    /**
     * @param MailingList[] $mailingLists
     *
     * @return $this
     */
    public function setMailingLists($mailingLists): self
    {
        $this->mailingLists = $mailingLists;

        return $this;
    }
}
