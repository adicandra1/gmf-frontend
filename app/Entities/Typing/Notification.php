<?php namespace App\Entities\Typing;

class Notification {

    public int $type;
    public string $content;

    const TYPE_0 = 0;

    public function __construct(array $fromArray)
    {
        
    }
}