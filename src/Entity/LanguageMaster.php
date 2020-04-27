<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * LanguageMaster
 *
 * @ORM\Table(name="language_master")
 * @ORM\Entity
 */
class LanguageMaster
{
    /**
     * @var int
     *
     * @ORM\Column(name="language_master_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $languageMasterId;

    /**
     * @var string
     *
     * @ORM\Column(name="language_name", type="text", length=65535, nullable=false)
     */
    private $languageName;

    /**
     * @var int
     *
     * @ORM\Column(name="language_code", type="integer", nullable=false)
     */
    private $languageCode;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=0, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="is_deleted", type="string", length=0, nullable=false)
     */
    private $isDeleted;


}
