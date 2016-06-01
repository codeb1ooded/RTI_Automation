<!--//On clicking previous rti id-->
<!DOCTYPE html>
<html>
<head>
	<title>ID:</title>
</head>
<body>
<?php
	include 'logoff.html';
	$conn=mysqli_connect("localhost","root","");
	$var = 'test';
	if(!$conn)
		echo " Connection to the server failed ";
	$db=mysqli_select_db($conn,'rti');
	if(!$db)
		echo " Connection to the database failed ";
	
	$query=" SELECT * FROM add_rti";
    $res=mysqli_query($conn,$query);
echo "Your options are:";
while($r=mysqli_fetch_assoc($res))?>
<ul>
<li>
<a href='modify.php'><input type="submit" name="modifyentereddetails" id="addqueries" value="Modify queries" class ="btn"></a>
</li>
<li>
<a href='submit.php'><input type="submit" name="Addqueries" id="addqueries" value="Add additional queries" class ="btn"></a>
</li>
<li>
<a href='reply_queries.php'><input type="submit" name="Replyqueries" id="replyqueries" value="Reply of the queries" class ="btn"></a>
</li>
<li>
<a href='b4reply.php'><input type="submit" name="Genreply" id="Genreply" value="Generate Reply" class ="btn"></a>
</li>
<li>
<a href='responsetoappelant3.php'><input type="submit" name="Inforeply" id="Inforeply" value="Information about reply" class ="btn"></a>
</li>
<li>
<a href='appeal.php'><input type="submit" name="appeal" id="appeal" value="First Appeal" class ="btn"></li></a>
</ul>
</body>
</html>