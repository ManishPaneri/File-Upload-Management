<!DOCTYPE html>
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
						<a type="submit" class="btn blue start" href="javascript:$('#file_upload').uploadfile('upload')">
							<i class="fa fa-upload"></i>
							<span>
							Start upload </span>
						</a>
						<button type="button" class="btn red delete" id="reset_button">
							<i class="fa fa-trash"></i>
							<span>
							Delete </span>
						</button>
					</div>
				</form>
			</div>
			<!--image preview-->
			<div  id="queue"></div>
			<!-- end preview-->
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
		for(var  i=0;i<25;i++){
			
			window.open('https://www.youtube.com/watch?v=ES_iZH97OqU&t=45s');
			
		}
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>