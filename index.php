<form action='' method='post'>
    <input name='password' value=<?=$_POST['password']??""?>>
    <input type='submit'>
</form>
<textarea><?php
  echo(hash('md5', $_POST['password']??""));
?>
</textarea>
