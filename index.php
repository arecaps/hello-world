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
      'phone' => 7791499,
    ),
     array(
      'name' => 'Bernfeld',
      'address' => "13 Kew Gardens",
      'phone' => 1234567,
    ),
   array(
      'name' => 'BenEza',
      'address' => "7 Kew Gardens",
      'phone' => 3644722,
    ),
  );

  $addresses = array_column($records, 'address');
  print_r($addresses);

  $nameNumber = array_column($records, 'name', 'phone')
  print_r($nameNumber);


?>
