<html>
<head>
<title>Control</title>
</head>
<body>
<h3> Information </h3>

<script type="text/javascript">
function Check() 
{
  var Op = document.getElementById("Op1");
  var Text = document.getElementById("F1");
  if (Op.checked == true)
  {
  Text.disabled=false;
  Text.focus();           
  }
}
</script>
<form >
<input type="text" name="first name" id="F1" disabled >
<br> <br>
<input type="password" name="key" >
<br>
<p>Select Option?</p>
<ul>
<li><input type="radio" id="Op1"  name="option" onclick="Check()" > First</li>
<li><input type="radio" id="Op2" name="option" > Second</li>
<li><input type="radio" id="Op2" name="option" > Third</li>
</ul>
</form>
</body>
</html>