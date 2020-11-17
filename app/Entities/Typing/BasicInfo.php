<?php namespace App\Entities\Typing;

use DateTime;

class BasicInfo {

    public ?string $fullName = null;

    public ?string $profilePicture = null;

    public ?string $contact = null;

    public ?string $nationality = null;

    public ?DateTime $dateOfBirth = null;

    public ?string $address = null;

    const TABLE_METADATA = array(
        'table' => 'basic_info',
        'column' => array(
            'fullName', 'profilePicture', 'contact', 'nationality', 'dateOfBirth', 'address'
        )
    );

    //public const classVariables = get_object_vars($this);

    public function __construct(?array $fromArray = null)
    {
        $this->classVariables = get_object_vars($this);

        foreach ($this->classVariables as $key => $value) {
            $this->$key = $fromArray[$key] ?? null;
        }
    }
}