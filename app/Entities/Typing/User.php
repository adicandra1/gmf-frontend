<?php namespace App\Entities\Typing;

use App\Entities\Typing\BasicInfo;
use Myth\Auth\Entities\User as UserEntity;

class User {

    public string $userId;

    public string $username;
    
    public string $email;

    public string $createdDate;

    public BasicInfo $basicInfo;

    /** @var Experience[] */
    public $experience = [];

    /** @var Education[] */
    public $educations = [];

    public AdditionalFiles $additionalFiles;

    const TABLE_METADATA = array(
        'table' => 'users',
        'column' => array(
            'id', 'username', 'email'
        )
    );

    public function __construct(UserEntity $userEntity)
    {
        $this->userId = $userEntity->id;
        $this->username = $userEntity->username;
        $this->email = $userEntity->email;
        $this->createdDate = $userEntity->created_at;
        $this->basicInfo = new BasicInfo();
        $this->additionalFiles = new AdditionalFiles();
    }
}