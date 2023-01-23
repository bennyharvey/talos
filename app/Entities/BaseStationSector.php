<?php

declare(strict_types=1);

namespace App\Entities;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: "base_station_sector")]
class BaseStationSector
{
    #[Id, Column(), GeneratedValue()]
    private int $id;

    #[Column(nullable: false)]
    private int $num;

    #[Column(nullable: false)]
    private string $name;

    #[ManyToOne(targetEntity: BaseStation::class, inversedBy: 'sectors')]
    private BaseStation $baseStation;

    public function __construct()
    {
    }
}
