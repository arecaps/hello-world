<?php
  
  $records = array(
    array(
      'name' => 'Aryeh',
      'address' => "9 Kew Gardens",
      'phone' => 7301373,
    ),
     array(
      'name' => 'Londinski',
      'address' => "11 Kew Gardens",
      'phone' => 7301373,
    ),
     array(
      'name' => 'Bernfeld',
      'address' => "13 Kew Gardens",
      'phone' => 7301373,
    ),
   array(
      'name' => 'BenEza',
      'address' => "7 Kew Gardens",
      'phone' => 7301373,
    ),
  );

  $addresses = array_column($records, 'address');
print_r($addresses);

?>

<?php
// Array representing a possible record set returned from a database
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);
 
$first_names = array_column($records, 'first_name');
print_r($first_names);
?>
