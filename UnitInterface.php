<?php

interface UnitInterface
{
    public function __construct(string $name, int $health, int $armor, int $damage);

    public function getName(): string;

    public function setName(string $name): self;

    public function getHealth(): string;

    public function setHealth(int $health): self;

    public function getArmor(): string;

    public function setArmor(int $armor): self;

    public function getDamage(): string;

    public function setDamage(int $damage): self;
}
