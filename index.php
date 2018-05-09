<!DOCTYPE html>
<?php include("includes/connection.php");?>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>9Cube.in</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="multiple file upload" name="description"/>
<meta content="manish paneri" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="css/darkblue.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/uploadfile.css">
<link rel="shortcut icon" href="favicon.ico"/>
<style>
	#uploadfile-file_upload{
		width:120px !important;
		height: 35px !important;
		line-height: 35px !important;
		padding: 0;
		background-color:green;
	}
</style>
<style type="text/css">
.thumbimage {
    float:left;
    width:200px;
	height:200px;
    position:relative;
    padding:5px;
}
</style>
</head>
<body class="page-md page-header-fixed page-quick-sidebar-over-content " >
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<div class="page-content-wrapper">
		<div class="col-md-12">
			<div  id="wrapper" class="row fileupload-buttonbar">
				<form action="" method="POST" enctype="multipart/form-data">
					
					<div class="col-lg-7">
					<!-- The fileinput-button span is used to style the file input field as button -->	
										
						<span id="upload">
							<input id="file_upload"  type="file" name="files[]" multiple >
						</span>
						<a type="submit" class="btn blue start" onclick="formfiledataupload();">
							<i class="fa fa-upload"></i>
							<span>
							Start upload </span>
						</a>
						<button type="button" class="btn red delete" id="reset_button">
							<i class="fa fa-trash"></i>
							<span>
							Delete </span>
						</button>
						<span >
							<input id="folder_name" class="form-control" type="text" name="folder_name" placeholder="Enter Folder Name" style="height:27px;">
						</span>
					</div>
				</form>
			</div>
			<!--image preview-->
			<div  id="queue"></div>
			<!-- end preview-->
		</div>
	<div class="col-md-12">
		<div class="portlet box blue-steel">
			<div class="portlet-body">
			<div  style="width:100px;" >
			<?php 
				$folder = mysql_query("SELECT DISTINCT(folder_name) FROM `folder_database`", $connection);
				while ($folder_record = mysql_fetch_array($folder))
				{	
					echo'<a href="gallery.php?name='.$folder_record["folder_name"].'" >
					<img src="images/No_image.png" style="width:100px;">
					<span class="btn blue btn-sm">'.$folder_record["folder_name"].'</span></a>
				';
				}	
			?>
				</div>
				
			
				
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE PLUGINS -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/jquery.uploadfile.min.js"></script>
<script type="text/javascript">
//reset  gallery image modal 
 $('#reset_button').click(function(){
	 	var image_holder = $("#queue");
		image_holder.empty();
 });
</script>
<script type="text/javascript">
		// gallery image add function
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadfile({
				'auto'             : false,
				'checkScript'      : 'check-exists.php',
				'formData'         : {
									   'timestamp' : '<?php echo $timestamp;?>',
									   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                     },
				'queueID'          	: 'queue',
				'buttonText'   		: 'Add File',
				'buttonClass'  		: 'btn btn-success',
				'uploadScript'     	: 'upload_file.php',
				'onUploadComplete' 	: function(file, data) { console.log(data);
						if(data=="success"){
							// action defined success Msg  ;
							window.location.reload();
						}
					}
				});
		});
 function formfiledataupload(){
	var folder_name=$("#folder_name").val();
	$('#file_upload').data('uploadfile').settings.formData = 
					{	'timestamp' : '<?php echo $timestamp;?>',
						'token': 	   '<?php echo md5('unique_salt' . $timestamp);?>',
						'folder_name' : folder_name,
					};
		$('#file_upload').uploadfile('upload');
	}
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>