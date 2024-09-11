<?php

namespace App\Entity;

use App\Repository\ColorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ColorRepository::class)]
class Color
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, Sneaker>
     */
    #[ORM\OneToMany(targetEntity: Sneaker::class, mappedBy: 'color')]
    private Collection $sneakers;

    public function __construct()
    {
        $this->sneakers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Sneaker>
     */
    public function getSneakers(): Collection
    {
        return $this->sneakers;
    }

    public function addSneaker(Sneaker $sneaker): static
    {
        if (!$this->sneakers->contains($sneaker)) {
            $this->sneakers->add($sneaker);
            $sneaker->setColor($this);
        }

        return $this;
    }

    public function removeSneaker(Sneaker $sneaker): static
    {
        if ($this->sneakers->removeElement($sneaker)) {
            // set the owning side to null (unless already changed)
            if ($sneaker->getColor() === $this) {
                $sneaker->setColor(null);
            }
        }

        return $this;
    }
}
