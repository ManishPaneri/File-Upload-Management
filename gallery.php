<!DOCTYPE html>
<?php include("includes/connection.php");
$folder_name=$_GET['name'];
?>
<html lang="en">
<!--<![endif]-->
<!-- BEGIHEAD -->
<head>
<meta charset="utf-8"/>
<title>9Cube.in</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="multiple file upload" name="description"/>
<meta content="manish paneri" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="css/darkblue.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="favicon.ico"/>

</head>
<body class="page-md page-header-fixed page-quick-sidebar-over-content " >
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<div class="page-content-wrapper">
		
	<div class="col-md-12">
		
			
			<?php 
				$folder = mysql_query("SELECT * FROM `folder_database` where folder_name='$folder_name'", $connection);
				while ($folder_record = mysql_fetch_array($folder))
				{	$file_name=array();
			$file_name=explode(".",$folder_record['file_name']);
			
					if($file_name[1]=="pdf"){
						echo'
					<a href="uploads/'.$folder_name.'/'.$folder_record['file_name'].'" target="_bank" >
					<img src="images/pdf.png" style="width:100px;margin:5px;"><span style="color:#fff;">'.$file_name[0].'</span>
					<a class="btn red btn-sm"  onclick="remove_file('.$folder_record['id'].');" style="height:100px;" >remove</a>';
					}
					else{echo'
					<a href="uploads/'.$folder_name.'/'.$folder_record['file_name'].'" target="_bank" >
					<img src="uploads/'.$folder_name.'/'.$folder_record['file_name'].'" style="width:200px;margin:5px;">
					<a class="btn red btn-sm"  onclick="remove_file('.$folder_record['id'].');" style="height:100px;" >remove</a>';
				}
			}	
			?>
				
				
			
				
			
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE PLUGINS -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script>
function remove_file(file_id){
	
	$.ajax({
			type: 'POST',	
			url: 'remove_file.php',
			data: { id: file_id},
			success: function(data) {
				console.log(data);
				window.location.reload();
			}
		});
}
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>