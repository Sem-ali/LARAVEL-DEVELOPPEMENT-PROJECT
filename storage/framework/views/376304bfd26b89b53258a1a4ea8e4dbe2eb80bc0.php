<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a test page</h1>
<p>This is a paragraph.</p>

<form action="/save" method="post">
    <?php echo csrf_field(); ?>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br>
  <input type="submit" value="Save">
</form>

</body>
</html>
<?php /**PATH D:\Users\MY UNIV DOCUMENTS\OTHERS IMPORTANTS\Laravel project\resources\views/home/test.blade.php ENDPATH**/ ?>