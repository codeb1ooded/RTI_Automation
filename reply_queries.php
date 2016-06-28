<!doctype html>
<html>
<body>
<?php
session_start();
$con= mysqli_connect("localhost","root","","rti");

if ($con->connect_error)
    die("Connection failed: " . $conn->connect_error);

$id=$_GET['id'];
$k = "SELECT * FROM t2 WHERE id=".$id.";";
$query=mysqli_query($con,$k);
$data2=mysqli_num_rows($query);
$a=$data2;
echo "Fill the query reply for RTI ID: ".$id."<br><br>";
echo "<table>
			<tbody>
				<tr>
					<th>Query No</th>
					<th>Query</th>
					<th>Reply</th>
					<th>Section</th>
					<th>Sub-Section</th>
					<th>Date Received</th>
				</tr>";
	echo "<form action=reply_form.php method=post>";
	while( $a!=0)
	{
		$data3=mysqli_fetch_array($query);
		$qno="q_no".$a;
		$ques="ques".$a;
		$ans="ans".$a;
		$sec="sec".$a;
		$subsec="subsec".$a;
		$date_rec="date_rec".$a;
        
        $sql = "SELECT * from article_section";
        $result = $con->query($sql);
        
        $sqlFramework = "SELECT * FROM article_sub_section";
        $resultFramework = $con->query($sqlFramework);
        $rowFrameworkResult = array();
        if ($resultFramework->num_rows > 0) {
            while($rowFramework = mysqli_fetch_assoc($resultFramework)) {
                $rowFrameworkResult[] = $rowFramework;
            }
        }
?>
	<tr>
		<th><input type=text value="<?php echo $data3['q_no']?>" name="<?php echo $qno; ?>" ></th>	
		<th><input type=text name=<?php echo $ques; ?> value="<?php echo $data3['ques']?>" ></th>
		<th><input type=text name=<?php echo $ans; ?>></th>
		<th>
			<select onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value, this.name);" name=<?php echo $sec; ?>>
                <option value="">Select Section</option>
                <?php if ($result->num_rows > 0) { ?>
                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <option value="<?php echo $row['Id']; ?>"> <?php echo $row['No']; ?></option>
                    <?php } ?>
                <?php } ?>
            </select>
        </th>
        <script type='text/javascript'>
        var blah="<?php echo $subsec; ?>";
        </script>
        <th>
        <div>
            <script type="text/javascript" language="JavaScript">
                document.write('<select name="subsec" id="subsec" ><option value="">Please select sub-section</option></select>')
                document.getElementById("subsec").name=blah;
                document.getElementById("subsec").id=blah;
            </script>
            
            <noscript>
                <select name=<?php echo $subsec; ?> id=<?php echo $subsec; ?>>
                    <option value="">Please select sub-section</option>
                </select>
            </noscript>
        </div>
  
        <script language="javascript" type="text/javascript">
            var rowFrameworkResultInJs =<?php echo json_encode($rowFrameworkResult);?> ;
        </script>
        <script language="javascript" type="text/javascript">
            function dynamicdropdown(listindex,blah1)
            {	
            	var x=0;
            	for(var i=3;i<blah1.length;i++)
            	{
            		var b=blah1.charAt(i);
            		x=x*10+parseInt(b);

            	}
            	var y="subsec"+x;
            	var ele = document.getElementById(y);
            	ele.length = 0;
	            
                ele.options[0]=new Option("Please select sub-section","");
                if (listindex) {
                    var lookup = {};
                    var j = 1;
                    for (var i = 0, len = rowFrameworkResultInJs.length; i < len; i++) {
                        if (rowFrameworkResultInJs[i].sec_id == listindex) {
                            ele.options[j]=new Option(rowFrameworkResultInJs[i].No,rowFrameworkResultInJs[i].Id);
                            j = j+1;
                        }
                    }
                }
                
                return true;
            }
        </script>
      	</th>
		<th><input type=date name=<?php echo $date_rec;?> placeholder=YYYY-MM-DD></th>
	</tr>
<?php				
		$a--;
	}
	$_SESSION['oid']=$id;
	$_SESSION['quer']=$data2;
	echo "<th colspan=15></th><th><input type=submit name=save value='Save and Exit' ></th>";
	echo "</form>" ;
?>
	
</body>
</html>
