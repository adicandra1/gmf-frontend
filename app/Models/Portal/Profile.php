<?php namespace App\Models\Portal;

class Profile {

    public function __construct()
    {
        
    }

    public function skillRepo(string $keyword) : string {
        //TODO: return skill list by keyword
        $dummyData = [
            "results" => [
                [
                    "id"=> 1,
                    "text"=> "Option 1"
                ],
                [
                    "id"=> 2,
                    "text"=> "Option 2",
                    "selected" => true
                ]
            ]
        ];
        return json_encode($dummyData);
    }
}