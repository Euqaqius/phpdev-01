<?php


class Army
{
    private string $name;

    private array $units;

    public function __construct(string $name, array $units)
    {
        $this->name = $name;
        $this->units = $units;
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

    public function getUnits(): array
    {
        return $this->units;
    }
}