<?php


class Node implements NodeInterface
{

    public function __construct(string $name)
    {
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getChildren(): array
    {
        // TODO: Implement getChildren() method.
    }

    public function addChild(Node $node): NodeInterface
    {
        // TODO: Implement addChild() method.
    }
}