<?php

namespace App\Models;

class Character
{
    private string $name;
    private string $status;
    private string $species;
    private string $gender;
    private string $location;
    private string $image;

    public function __construct(
        string $name,
        string $status,
        string $species,
        string $gender,
        string $location,
        string $image
    )
    {

        $this->name = $name;
        $this->status = $status;
        $this->species = $species;
        $this->gender = $gender;
        $this->location = $location;
        $this->image = $image;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getSpecies(): string
    {
        return $this->species;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getImage(): string
    {
        return $this->image;
    }
}