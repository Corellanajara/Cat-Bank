
<html>
<head>
<title>Ejemplo de pago mediante la API de PayPal</title>
</head>
<body>
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_xclick">
  <input type="hidden" name="business" value="marcelochris0@gmail.com">
  <input type="hidden" name="item_name" value="catbank pago">
  <input type="hidden" name="item_number" value="1881">
  <input type="hidden" name="currency_code" value="USD">
  <input type="hidden" value="1" name="no_note"/>
  <input type="hidden" value="1" name="no_shipping"/>
  <input type="hidden" name="amount" value="PRECIO">
  <input type="hidden" name="return" value="RETURN_URL">
  <input type="hidden" name="cancel_return" value="CANCEL_URL">
  <input type="hidden" name="notify_url" value="STATUS_URL">
  </form>
<script type='text/javascript'>
    document.formTpv.submit();
</script>
</body>
</html>
