<?php
	include('access.php');	
	$sql = 'insert into dept_locations(dnumber, dlocation) values ('
			.$_POST['dnumber'].', "'
			.$_POST['dlocation'].'");';
	$result = mysql_query($sql);
	if (!$result) {
		echo '<p>There was a problem inserting. Please try again.</p>';
	} else {
        echo '<p>Inserted Successfully</p>';
	}
?>
<html>
  <body>
    <form action='InsertDepartment_location.php' method='post'>
   	  <label for="fname">Department Number:</label>
      <input type='text' name='dnumber' />
      <br>
   	  <label for="fname">Department Location:</label>
      <input type='text' name='dlocation' />
      <br>
      <input type='submit' />
    </form>
  </body>
</html>
