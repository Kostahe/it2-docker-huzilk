<?php

class User
{
    private string $name;

    /**
     * @param String $name
     */
    public function __construct(string $name)
    {
        $this->name = ucfirst(strtolower($name));
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}