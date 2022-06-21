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
                "name" => "Sanzgrapher",
                "address" => "Pokhara,Davisfall",
                "phoneno" => ["98469456**", "9863376***"]
            ],
            [
                "name" => "Sanzgrapher",
                "address" => "Pokhara,Davisfall",
                "phoneno" => ["98469456**", "9863376***"]
            ]
        ]




    ];
    
foreach ($gces_Staffs as $keys => $v1) {
    echo $keys . " <br><br>";
    foreach ($v1 as $v2 => $v3) {
        foreach ($v3 as $v4 => $v5) {

            if (is_array($v5)) {
                
                echo $v4 . " = " ;
                foreach ($v5 as $v6 => $v7) {
                   
                    echo "/" . $v7  ;
                }
                echo "<br>";
            } else {

                echo " $v4  = $v5  <br>";
            }
        }
        echo "<br>";
    }
    echo "<br>";
}


echo "<pre>";
print_r($gces_Staffs);
echo "<pre>";















// for ($i = 0; $i < count($gces_Staffs); $i++) {

    // for ($j = 0; $j < count($gces_Staffs[$i][$i]); $j++){
    //    foreach ($gces_Staffs[$i][""] as $casr => $price) {
        // echo "The price  is  ." . '<br>';
    // }

// var_dump($gces_Staffs[$i]);

    // }

    // foreach ($gces_Staffs[$i] as $casr => $price) {
    //     echo "The price $casr is  ." . '<br>';
    // }



//     //      foreach ($yourArray as $subAray){
//     //         echo $subAray['address'];
//     //      }
//     for ($i = 0; $i < count($gces_Staffs["$i"]); $i++) {
//     }

//     //     //  $value = $addresses[$i]; echo "$value\n";
// }
