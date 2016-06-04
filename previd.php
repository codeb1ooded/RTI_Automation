<!--//On clicking previous rti id-->
<!DOCTYPE html>
<html>
<head>
	<title>ID:</title>
</head>
<body>
<?php

if(isset($_GET['id']))
	{
		$Id = $_GET['id'];
		echo "Id is:".$Id;
	}
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
<?php 
echo "<a href='modify.php?id=".$Id."'><input type=submit name=modifyentereddetails id=addqueries value=Modify_queries></a>" ;
?>
</li>
<li>
<?php
echo "<a href='submit.php?id=".$Id."'><input type=submit name=Addqueries id=addqueries value=Add_additional_queries></a>" ; 
?>
</li>
<li>
<?php
echo "<a href='reply_queries.php?id=".$Id."'><input type=submit name=Replyqueries id=replyqueries value=Reply_of_the_queries></a>" ;
?>
</li>
<li>
<?php
echo "<a href='b4reply.php?id=".$Id."'><input type=submit name=Genreply id=Genreply value=Generate_Reply></a>" ;
?>
</li>
<li>
<?php
echo "<a href='responsetoappelant3.php?id=".$Id."''><input type=submit name=Inforeply id=Inforeply value=Information-about_reply></a>" ;
?>
</li>
<li>
<?php
echo "<a href='appeal.php?id=".$Id."'><input type=submit name=appeal id=appeal value=First Appeal></li></a>" ;
?>
</ul>
</body>
</html>
