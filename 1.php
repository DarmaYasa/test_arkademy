<?php

function createJSON() {
  $data = array(
    "name" => "Darma",
    "address" => "Jl. Bakung no. 18",
    "hobbies" => ["Ngegame", "Belajar Tutorial", "Ngoding"],
    "is_married" => false,
    "school" => ["highSchool"=>"SMK Dwijendra Denpasar", "university"=>"STMIK Primakara"],
    "skills" => [   
                  ["name"=>"php", "score" => 70],
                  ["name"=>"c++", "score" => 70]
                ]
  );

  $jsonfile = json_encode($data, JSON_PRETTY_PRINT);

  file_put_contents('data.json', $jsonfile);
}

createJSON();
  