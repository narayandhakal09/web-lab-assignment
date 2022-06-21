<?php
$gces_Staffs =
    [
        "academics" =>

        [
            [
                "name" => "Narayan Dhakal",
                "address" => "Pokhara,Chhorepatan",
                "phoneno" => ["98469456**", "9863376***"],
                "subject" => ["html", "Css", "js"]
            ],
            [
                "name" => "Sanzgrapher",
                "address" => "Pokhara,Davisfall",
                "phoneno" => ["98469456**", "9863376***"],
                "subject" => ["C", "C++", "Java"]
            ]
        ],
        "nonacademics " =>
        [
            [
                "name" => "fernando ",
                "address" => "Pokhara,Davisfall",
                "phoneno" => ["98469456**", "9863376***"]
            ],
            [
                "name" => "narn",
                "address" => "Pokhara,Davisfall",
                "phoneno" => ["98469456**", "9863376***"]
            ]
        ]




    ];

    echo "Default <br><pre> ";
// print_r($gces_Staffs);

   echo  "</pre>";
    array_multisort($gces_Staffs);

echo "Default <br><pre> ";
// print_r($gces_Staffs);

echo  "</pre>";



$person = [
    [
        "name" => "Peter ",
        "roll" => "1",
    ],
    [
        "name" => "Clark Kent",
        "roll" => "2",
    ],
    [
        "name" => "Harry Potter",
        "roll" => "3",
    ]
    ];

sort($person);
var_dump($person)
?>