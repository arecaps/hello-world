<?php  

  $obj = new debitcreditform();

  //$obj->displayform();

  $transaction = new transaction();

  $transaction->type = 'debit';
  $transaction->amount  = 100;
  $transaction->source = 'Walmart';

  $transactions = new transactions();

  class transactions {
    public $transactions =  array

      public function addTransactions($transaction) {
        $this->transactions[]
      }
  }

  print_r($transactions);

  class transaction()  {
    public $type;
    public $amount;
    public $source;
  }

  $transaction = array();
  $transaction['type'] = $_POST['trans_type'];
  $transaction['amount'] = $_POST['amount'];
  $_SESSION['transactions'][] = $transaction;
}

print_r($_SESSION);

    $form = '
      <FORM action="form2.php" method="post">
      <fieldset>
      <LABEL for="amount">Amount: </LABEL>
        <INPUT type="text" name="amount" id="lastname"><BR>
        <INPUT type="radio" name="trans_type" value="debt"> Debit<BR>
        <INPUT type="radio" name="trans_type" value="credit"> Credit<BR>
        <INPUT type="submit" value="Send"> <INPUT type="reset">
      </fieldset>
      </FORM>';

  if($_SERVER['REQUEST_METHOD'] == 'GET') {
     echo $form;
  } else {

     echo 'Thank you and this is what you sent: <br>';
     foreach($_POST as $key => $value) {
        echo $key . ': ' . $value . '<br>';
     }   
  }

?>














