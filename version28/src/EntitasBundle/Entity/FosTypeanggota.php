<?php

namespace EntitasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FosTypeanggota
 *
 * @ORM\Table(name="fos_typeanggota")
 * @ORM\Entity
 */
class FosTypeanggota
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nama_type", type="string", length=255, nullable=false)
     */
    private $namaType;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=false)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="deskripsi_type", type="string", length=255, nullable=false)
     */
    private $deskripsiType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status_display", type="boolean", nullable=false)
     */
    private $statusDisplay;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_at", type="datetime", nullable=false)
     */
    private $createAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_at", type="datetime", nullable=false)
     */
    private $updateAt;

    /**
     * @ORM\OneToMany(targetEntity="FosProfile", mappedBy="typeAnggotas")
     */
    protected $profiles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->createAt         = new \DateTime('now');
        $this->updateAt         = new \DateTime('now');
        $this->statusDisplay    = true;
        $this->profiles         = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set namaType
     *
     * @param string $namaType
     *
     * @return FosTypeanggota
     */
    public function setNamaType($namaType)
    {
        $this->namaType = $namaType;

        return $this;
    }

    /**
     * Get namaType
     *
     * @return string
     */
    public function getNamaType()
    {
        return $this->namaType;
    }

    /**
     * Set Slug
     *
     * @param string $slug
     *
     * @return FosTypeanggota
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get Slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set deskripsiType
     *
     * @param string $deskripsiType
     *
     * @return FosTypeanggota
     */
    public function setDeskripsiType($deskripsiType)
    {
        $this->deskripsiType = $deskripsiType;

        return $this;
    }

    /**
     * Get deskripsiType
     *
     * @return string
     */
    public function getDeskripsiType()
    {
        return $this->deskripsiType;
    }

    /**
     * Set statusDisplay
     *
     * @param boolean $statusDisplay
     *
     * @return FosTypeanggota
     */
    public function setStatusDisplay($statusDisplay)
    {
        $this->statusDisplay = $statusDisplay;

        return $this;
    }

    /**
     * Get statusDisplay
     *
     * @return boolean
     */
    public function getStatusDisplay()
    {
        return $this->statusDisplay;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     *
     * @return FosTypeanggota
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     *
     * @return FosTypeanggota
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Add profile
     *
     * @param \EntitasBundle\Entity\FosProfile $profile
     *
     * @return FosTypeanggota
     */
    public function addProfile(\EntitasBundle\Entity\FosProfile $profile)
    {
        $this->profiles[] = $profile;

        return $this;
    }

    /**
     * Remove profile
     *
     * @param \EntitasBundle\Entity\FosProfile $profile
     */
    public function removeProfile(\EntitasBundle\Entity\FosProfile $profile)
    {
        $this->profiles->removeElement($profile);
    }

    /**
     * Get profiles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfiles()
    {
        return $this->profiles;
    }
}
