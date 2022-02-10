<?php


class Unit implements UnitInterface
{
    private string $name;
    private int $health;
    private int $armor;
    private int $damage;

    public function __construct(string $name, int $health, int $armor, int $damage)
    {
        $this->name = $name;
        $this->health = $health;
        $this->armor = $armor;
        $this->damage = $damage;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getHealth(): string
    {
        return $this->health;
    }

    public function setHealth(int $health): self
    {
        $this->health = $health;

        return $this;
    }

    public function getArmor(): string
    {
        return $this->armor;
    }

    public function setArmor(int $armor): self
    {
        $this->armor = $armor;

        return $this;
    }

    public function getDamage(): string
    {
        return $this->damage;
    }

    public function setDamage(int $damage): self
    {
        $this->damage = $damage;

        return $this;
    }
}