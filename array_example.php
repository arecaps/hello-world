<html> 
<head><title>Arrays</title></head>
<body>
<pre>
<?php
  $record = array('first_name' => 'Keith', 'last_name' => 'Williams');

  //print_r($record);

  $records = array();
    $birthday = array(1,2,3,4,5,6,7,8);
  $records[] = $record;
  $record['first_name'] = 'Noam';
  $record['last_name'] = 'Lustiger';
  $records[] = $record;
  $record['first_name'] = 'Aryeh';
  $record['last_name'] = 'Caplan';
  $records[] = $record;
  $records[3] = "Happy Birthday";
  $records[4] = $birthday;
  print_r($records);
?>
</pre>
</body>
</html>

