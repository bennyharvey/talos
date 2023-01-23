<?php
namespace App\Entities;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: "city")]
class City
{
    #[Id, Column(type: Types::INTEGER), GeneratedValue()]
    private $id;
    #[Column(type: Types::STRING, unique: true, nullable: false)]
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
