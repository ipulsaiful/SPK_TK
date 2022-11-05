
<!DOCTYPE html>
<html>
<body>

	<?php
	//session_start();
	include("koneksi.php");
    $sql = mysqli_query($db, "SELECT * FROM data_tk");
    $result = array();
    
    while ($row = mysqli_fetch_assoc($sql)) {
        $data[] = $row;
    }
	$phpArray = array(["ayam","burung"], ["kambing","sapi"]);

	?>
	<a href="hasil.php">hasil</a>
	<script src="plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript">

//JSON.stringify(jsArray); USE THIS  AND THEN USE json_decode(array) 

$(document).ready(function(){
	
	var jsArray = <?php echo json_encode($data); ?>;
//	console.log(jsArray);
var mydata = 55;
var myname = "syed ali";
var userdata = {'id':mydata,'name':myname};

var d = JSON.stringify(jsArray);
$.ajax({
			url: 'hasil.php',
            type: 'post',
            data:{data:jsArray},
            success: function(data){
            	console.log(data);
            	window.location.href="admin.php";
            }

        });


});


    </script>
</body>
</html>
