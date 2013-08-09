<?php echo 'Request method: ' . $_SERVER['REQUEST_METHOD'] .  '<br>';

$form = '
<!--action tells where to send the form data, method is to specify request method-->
<FORM action="form.php" method="post">
<!--this says to put boxes around fields-->
    <fieldset>
<!--Label creates the label, then we tell it what to call this label-->
    <LABEL for="firstname">First name: </LABEL>
<!--this creates the option to input info, name must match name of label-->
              <INPUT type="text" name="firstname" id="firstname"><BR>
    <LABEL for="lastname">Last name: </LABEL>
              <INPUT type="text" name="lastname" id="lastname"><BR>
    <LABEL for="email">email: </LABEL>
              <INPUT type="text" name="email" id="email"><BR>
    <INPUT type="radio" name="sex" value="Male"> Male<BR>
    <INPUT type="radio" name="sex" value="Female"> Female<BR>
    <INPUT type="submit" value="Send"> <INPUT type="reset">
    </fieldset>
 </FORM>';

  if ($_SERVER['REQUEST_METHOD'] =='GET') {
    echo $form;
  } else {
    echo 'Thank you and this is what you sent: <br>';
//$_POST is a preset array of all the info that was inputed, for each one we 
//want to print out the result.
    foreach($_POST as $key => $value) {
      echo $key . ':' . $value . '<br>';
    }
  }

?>
<?php print_r($_POST);?>
