<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TechnologyMapPositionRepository")
 */
class TechnologyMapPosition
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $amount;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TechnologyMap")
     * @ORM\JoinColumn(nullable=false)
     */
    private $technology_map;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Material")
     * @ORM\JoinColumn(nullable=false)
     */
    private $material;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getTechnologyMap(): ?TechnologyMap
    {
        return $this->technology_map;
    }

    public function setTechnologyMap(?TechnologyMap $technology_map): self
    {
        $this->technology_map = $technology_map;

        return $this;
    }

    public function getMaterial(): ?Material
    {
        return $this->material;
    }

    public function setMaterial(?Material $material): self
    {
        $this->material = $material;

        return $this;
    }
}
