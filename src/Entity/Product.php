<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $calories;

    /**
     * @ORM\Column(type="float")
     */
    private $carbohydrates;

    /**
     * @ORM\Column(type="float")
     */
    private $proteins;

    /**
     * @ORM\Column(type="float")
     */
    private $grease;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCalories(): ?int
    {
        return $this->calories;
    }

    public function setCalories(int $calories): self
    {
        $this->calories = $calories;

        return $this;
    }

    public function getCarbohydrates(): ?float
    {
        return $this->carbohydrates;
    }

    public function setCarbohydrates(float $carbohydrates): self
    {
        $this->carbohydrates = $carbohydrates;

        return $this;
    }

    public function getProteins(): ?float
    {
        return $this->proteins;
    }

    public function setProteins(float $proteins): self
    {
        $this->proteins = $proteins;

        return $this;
    }

    public function getGrease(): ?float
    {
        return $this->grease;
    }

    public function setGrease(float $grease): self
    {
        $this->grease = $grease;

        return $this;
    }
}
