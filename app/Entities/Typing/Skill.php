<?php namespace App\Entities\Typing;

class Skill {
    public string $id;

    public string $name;

    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}