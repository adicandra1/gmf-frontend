<?php namespace App\Entities\Typing;

use DateTime;

class Vacancy {
    public string $logoImage;

    public string $role;

    public string $company;

    public string $location;

    public string $type;

    public ?string $rate = null;

    public DateTime $dateCreated;

    public $tags;

    public function __construct(
        string $logoImage,
        string $role,
        string $company,
        string $location,
        string $type,
        ?string $rate = null,
        DateTime $dateCreated
    )
    {
        $this->logoImage = $logoImage;
        $this->role = $role;
        $this->company = $company;
        $this->location = $location;
        $this->type = $type;
        $this->rate = $rate;
        $this->dateCreated = $dateCreated;
    }

    

    public static function withMockData() : Vacancy {
        return new Vacancy(
            "logoImagePlaceholder",
            "rolePlaceholder",
            "companyPlaceholder",
            "locationPlaceholder",
            "typePlaceholder",
            "ratePlaceholder",
            new DateTime()
        );
    }

}