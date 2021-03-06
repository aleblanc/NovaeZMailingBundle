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

namespace Novactive\Bundle\eZMailingBundle\Core\Processor;

use Novactive\Bundle\eZMailingBundle\Core\Mailer\Mailing as MailingMailer;
use Novactive\Bundle\eZMailingBundle\Entity\Mailing;

/**
 * Class SendMailing.
 */
class TestMailing extends Processor
{
    /**
     * @var MailingMailer
     */
    private $mailingMailer;

    /**
     * SendMailingCommand constructor.
     *
     * @param MailingMailer $mailingMailer
     */
    public function __construct(MailingMailer $mailingMailer)
    {
        $this->mailingMailer = $mailingMailer;
    }

    /**
     * @param Mailing $mailing
     * @param string  $email
     */
    public function execute(Mailing $mailing, string $email): void
    {
        $this->mailingMailer->sendMailing($mailing, $email);
    }
}
