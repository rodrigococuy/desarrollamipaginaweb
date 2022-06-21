<!DOCTYPE html>
<html>


<?php
    $intent = # ... Fetch or create the PaymentIntent;
?>
...
<input id="card-name" type="text">
<!-- placeholder for Elements -->
<div id="card-element"></div>
<button id="card-button" data-secret="<?= $intent->client_secret ?>">
    Submit Payment
</button>
...

</html>