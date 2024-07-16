<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Contact
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Veuillez indiquer votre nom")
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Veuillez indiquer votre prénom")
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Veuillez indiquer votre email")
     * @Assert\Email(message="Veuillez indiquer votre email")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank(message="Veuillez indiquer votre numéro de téléphone")
     * @Assert\Regex(
     *     pattern="/\d{10}/",
     *     message="Veuillez saisir un numéro de téléphone valide"
     * )
     */
    private $phoneNumber;

    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Veuillez indiquer la raison sociale de votre entreprise")
     */
    private $companyName;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $companyConcept;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $companyWebsite;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $companyComposition;

    /**
     * @ORM\Column(type="date_immutable", nullable=true)
     * @Assert\GreaterThan("2018-01-01", message="La date de création de votre entreprise doit être comprise entre le 1er janvier 2018 et le 6 mars 2023")
     * @Assert\LessThan("2023-03-06", message="La date de création de votre entreprise doit être comprise entre le 1er janvier 2018 et le 6 mars 2023")
     */
    private $companyCreationDate;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $companyLocation;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $hasInstagram;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $instagramAccountId;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $problematic;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $motivation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $videoFilename;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $mentor1;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $mentor2;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $mentor3;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $mentor4;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $mentor5;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $futureNews;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $optinPhoneCall;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $optinEmailSMS;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $accompagnementRSE;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $parcours;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pratiqueResponsable;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCivility(): ?string
    {
        return $this->civility;
    }

    public function setCivility(string $civility): self
    {
        $this->civility = $civility;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getCompanyConcept(): ?string
    {
        return $this->companyConcept;
    }

    public function setCompanyConcept(?string $companyConcept): self
    {
        $this->companyConcept = $companyConcept;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyWebsite(): ?string
    {
        return $this->companyWebsite;
    }

    /**
     * @param string $companyWebsite
     */
    public function setCompanyWebsite(?string $companyWebsite): self
    {
        $this->companyWebsite = $companyWebsite;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompanyComposition(): ?string
    {
        return $this->companyComposition;
    }

    /**
     * @param string|null $companyComposition
     * @return $this
     */
    public function setCompanyComposition(?string $companyComposition): self
    {
        $this->companyComposition = $companyComposition;

        return $this;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getCompanyCreationDate(): ? \DateTimeImmutable
    {
        return $this->companyCreationDate;
    }

    /**
     * @param mixed $companyCreationDate
     */
    public function setCompanyCreationDate($companyCreationDate): self
    {
        $this->companyCreationDate = $companyCreationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyLocation(): ?string
    {
        return $this->companyLocation;
    }

    /**
     * @param mixed $companyLocation
     */
    public function setCompanyLocation(?string $companyLocation): self
    {
        $this->companyLocation = $companyLocation;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOptinPhoneCall(): bool
    {
        return $this->optinPhoneCall;
    }

    /**
     * @param mixed $optinPhoneCall
     */
    public function setOptinPhoneCall(?bool $optinPhoneCall): self
    {
        $this->optinPhoneCall = $optinPhoneCall;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOptinEmailSMS(): bool
    {
        return $this->optinEmailSMS;
    }

    /**
     * @param mixed $optinEmailSMS
     */
    public function setOptinEmailSMS(?bool $optinEmailSMS): self
    {
        $this->optinEmailSMS = $optinEmailSMS;

        return $this;
    }

    public function getHasInstagram(): ?bool
    {
        return $this->hasInstagram;
    }

    public function setHasInstagram(?bool $hasInstagram): self
    {
        $this->hasInstagram = $hasInstagram;

        return $this;
    }

    public function getInstagramAccountId(): ?string
    {
        return $this->instagramAccountId;
    }

    public function setInstagramAccountId(?string $instagramAccountId): self
    {
        $this->instagramAccountId = $instagramAccountId;

        return $this;
    }

    public function getProblematic(): ?string
    {
        return $this->problematic;
    }

    public function setProblematic(?string $problematic): self
    {
        $this->problematic = $problematic;

        return $this;
    }

    public function getMotivation(): ?string
    {
        return $this->motivation;
    }

    public function setMotivation(?string $motivation): self
    {
        $this->motivation = $motivation;

        return $this;
    }

    public function getVideoFilename(): ?string
    {
        return $this->videoFilename;
    }

    public function setVideoFilename(string $videoFilename): self
    {
        $this->videoFilename = $videoFilename;

        return $this;
    }

    public function getMentor1(): ?string
    {
        return $this->mentor1;
    }

    public function setMentor1(?string $mentor1): self
    {
        $this->mentor1 = $mentor1;

        return $this;
    }

    public function getMentor2(): ?string
    {
        return $this->mentor2;
    }

    public function setMentor2(?string $mentor2): self
    {
        $this->mentor2 = $mentor2;

        return $this;
    }

    public function getMentor3(): ?string
    {
        return $this->mentor3;
    }

    public function setMentor3(?string $mentor3): self
    {
        $this->mentor3 = $mentor3;

        return $this;
    }

    public function getMentor4(): ?string
    {
        return $this->mentor4;
    }

    public function setMentor4(?string $mentor4): self
    {
        $this->mentor4 = $mentor4;

        return $this;
    }

    public function getMentor5(): ?string
    {
        return $this->mentor5;
    }

    public function setMentor5(?string $mentor5): self
    {
        $this->mentor5 = $mentor5;

        return $this;
    }

    public function getFutureNews(): ?string
    {
        return $this->futureNews;
    }

    public function setFutureNews(?string $futureNews): self
    {
        $this->futureNews = $futureNews;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getAccompagnementRSE(): ?string
    {
        return $this->accompagnementRSE;
    }

    public function setAccompagnementRSE(?string $accompagnementRSE): self
    {
        $this->accompagnementRSE = $accompagnementRSE;

        return $this;
    }
    public function getParcours(): ?string
    {
        return $this->parcours;
    }

    public function setParcours(?string $parcours): self
    {
        $this->parcours = $parcours;

        return $this;
    }
    public function getPratiqueResponsable(): ?string
    {
        return $this->pratiqueResponsable;
    }

    public function setPratiqueResponsable(?string $PratiqueResponsable): self
    {
        $this->pratiqueResponsable = $PratiqueResponsable;

        return $this;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PostPersist()
     * @throws \Exception
     */
    public function updateTimestamp(): void
    {
        $dateTimeNow = new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'));
        if( $this->getCreatedAt() === null ) {
            $this->setCreatedAt($dateTimeNow);
        }
    }
}
