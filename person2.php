<?php
  class person {
    public $name = '';
	
	function name ($newname = null) {
	  if(!is_null($newname)) {
	    $this->name = $newname;
	  }
      Return $this->name;	  
	}
	
    }
$obj = new person;
$obj->name('Steve');
echo "Hello,{$obj->name}\n";	
	
?>	