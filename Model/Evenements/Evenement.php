<?php
namespace App\Model\Evenements;

class Evenement
{
    public function __construct(
        public readonly string $title,
        public readonly \DateTime $date,
        public readonly string $description,
        public readonly ?\DateTime $dateEnd = null,
        public readonly ?string $link = null,
    ){}
}