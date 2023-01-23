<?php

declare(strict_types=1);

namespace App\Entities;

use App\Exceptions\Validation\ValidationException;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\PrePersist;
use Doctrine\ORM\Mapping\PreUpdate;
use Doctrine\ORM\Mapping\Table;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[Entity]
#[Table(name: "base_station")]
#[UniqueEntity()]
class BaseStation
{
    #[Id, Column(), GeneratedValue()]
    private int $id;


    #[Column(nullable: false, options: ["default" => false])]
    private bool $active = false;

    #[OneToMany(targetEntity: BaseStationSector::class, mappedBy: 'baseStation')]
    private $sectors;

    public function __construct(
        #[Column(unique: true, nullable: false)]
        private string $name
    ){
        $this->sectors = new ArrayCollection();
    }

    #[PrePersist, PreUpdate]
    public function validate(): void
    {
        if (!$this->name) {
            throw new ValidationException('BS with this name already exists');
        }
    }

    public function getSectors()
    {
        return $this->sectors;
    }

    public function activate()
    {
        $this->active = true;
    }

    public function isActive()
    {
        return $this->active;
    }

    public function getName()
    {
        return $this->name;
    }
}
