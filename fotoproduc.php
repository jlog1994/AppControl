<?php require('conexion.php'); 
	  $nc=$_REQUEST['nc'];
?>

<head>
   	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
	<script src="js/jquery.mobile-1.4.5.js"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" href="docs/_assets/css/jqm-docs.css" />
	<link href="css/main.css" rel="stylesheet" type="text/css" />
	<script src="docs/_assets/js/jqm-docs.js"></script>
</head> 	

		<a href="productosL1.php" target="cont" data-role="button" data-icon="back" 
		data-iconpos="notext" data-theme="b" data-iconpos="left" data-inline="true"></a>
<div data-role="content">
                <form id="upload_form" target="cont" enctype="multipart/form-data" method="post" action="upload.php">
					 <input type="text" name="nc" value="<?php echo $nc;?>" />	   
                    <div>
                        <div><label for="image_file">Selecciona una imagen</label></div>
                        <div><input type="file" name="image_file" id="image_file" onchange="fileSelected();" /></div>
                    </div>
                    <div>
                        <input type="button" value="Upload" onclick="startUploading();" />
                    </div>
                    <div id="fileinfo">
                        <div id="filename"></div>
                        <div id="filesize"></div>
                        <div id="filetype"></div>
                        <div id="filedim"></div>
                    </div>
                    <div id="error">You should select valid image files only!</div>
                    <div id="error2">An error occurred while uploading the file</div>
                    <div id="abort">The upload has been canceled by the user or the browser dropped the connection</div>
                    <div id="warnsize">Your file is very big. We can't accept it. Please select more small file</div>

                    <div id="progress_info">
                        <div id="progress"></div>
                        <div id="progress_percent">&nbsp;</div>
                        <div class="clear_both"></div>
                        <div>
                            <div id="speed">&nbsp;</div>
                            <div id="remaining">&nbsp;</div>
                            <div id="b_transfered">&nbsp;</div>
                            <div class="clear_both"></div>
                        </div>
                        <div id="upload_response"></div>
                    </div>
                </form>

             </div> 
