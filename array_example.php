<?php
  $record = array('first_name' => 'Keith', 'last_name' => 'Williams');

  //print_r($record);

  $records = array();

  $records[] = $record;
  $record['first_name'] = 'Noam';
  $record['last_name'] = 'Lustiger';
  $records[] = $record;
  $record['first_name'] = 'Aryeh';
  $record['last_name'] = 'Caplan';
  $records[] = $record;
  print_r($records);
?>
