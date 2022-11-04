<?php

namespace App\Entity;

use App\Repository\FahrtkostenRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FahrtkostenRepository::class)]
class Fahrtkosten
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $vorname = null;

    #[ORM\Column(length: 30)]
    private ?string $Nachname = null;

    #[ORM\Column(length: 60)]
    private ?string $Abteilung = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Datum_Reise = null;

    #[ORM\Column(length: 60)]
    private ?string $Reisestart = null;

    #[ORM\Column(length: 60)]
    private ?string $Reiseziel = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $Kilometer = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $Ausbezahlt = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVorname(): ?string
    {
        return $this->vorname;
    }

    public function setVorname(string $vorname): self
    {
        $this->vorname = $vorname;

        return $this;
    }

    public function getNachname(): ?string
    {
        return $this->Nachname;
    }

    public function setNachname(string $Nachname): self
    {
        $this->Nachname = $Nachname;

        return $this;
    }

    public function getAbteilung(): ?string
    {
        return $this->Abteilung;
    }

    public function setAbteilung(string $Abteilung): self
    {
        $this->Abteilung = $Abteilung;

        return $this;
    }

    public function getDatumReise(): ?\DateTimeInterface
    {
        return $this->Datum_Reise;
    }

    public function setDatumReise(\DateTimeInterface $Datum_Reise): self
    {
        $this->Datum_Reise = $Datum_Reise;

        return $this;
    }

    public function getReisestart(): ?string
    {
        return $this->Reisestart;
    }

    public function setReisestart(string $Reisestart): self
    {
        $this->Reisestart = $Reisestart;

        return $this;
    }

    public function getReiseziel(): ?string
    {
        return $this->Reiseziel;
    }

    public function setReiseziel(string $Reiseziel): self
    {
        $this->Reiseziel = $Reiseziel;

        return $this;
    }

    public function getKilometer(): ?string
    {
        return $this->Kilometer;
    }

    public function setKilometer(string $Kilometer): self
    {
        $this->Kilometer = $Kilometer;

        return $this;
    }

    public function getAusbezahlt(): ?string
    {
        return $this->Ausbezahlt;
    }

    public function setAusbezahlt(?string $Ausbezahlt): self
    {
        $this->Ausbezahlt = $Ausbezahlt;

        return $this;
    }



}
