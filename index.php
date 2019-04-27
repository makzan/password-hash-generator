<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
        margin: 0;
        padding: 1em;
    }
    input {
        width: 100%;
        padding: .5em;
    }
    input[name='password'] {
        color: #efefef;
    }
    textarea {
        width: 100%;
        min-height: 200px;
        font-size: 1.5em;
        color: grey;
    }
</style>
<form action='' method='post'>
    <input autofocus name='password' value=<?=$_POST['password']??""?>>
    <input type='submit' value='Generate'>
</form>
<textarea><?php
  echo(hash('sha256', $_POST['password']??""));
?>
</textarea>
<p>
  <small>SHA256 Generator</small>
</p>
