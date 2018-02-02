
<?php
ini_set("display_errors", 0);

function createArray($specialKey) {
    return [
        0 => "first",
        1 => "second",
        2 => "third",
        $specialKey => "forth"
    ];
}

function createFamilyMember($firstName, $secondName, $age) {
    return [
        "first" => $firstName,
        "family" => $secondName,
        "age" => $age,
    ];
}
$bart = createFamilyMember("bart", "simpson", 12);
unset($bart["family"]);

$bart[0] = "andersson";

// print_r("My family is:");
print_r( $bart );
// print_r( createFamilyMember("lisa", "simpson", 7) );
// print_r( createFamilyMember("homer", "simpson", 44) );