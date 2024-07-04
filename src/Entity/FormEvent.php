<?php

namespace App\Entity;

use App\Repository\FormEventRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: FormEventRepository::class)]
#[UniqueEntity(fields: ['mail'], message: 'This email is already in use.')]
#[UniqueEntity(fields: ['SerialNumber'], message: 'This serial number is already in use.')]
class FormEvent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $mail = null;

    #[ORM\Column(length: 17)]
    private ?string $SerialNumber = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getSerialNumber(): ?string
    {
        return $this->SerialNumber;
    }

    public function setSerialNumber(string $SerialNumber): static
    {
        $this->SerialNumber = $SerialNumber;

        return $this;
    }
}
