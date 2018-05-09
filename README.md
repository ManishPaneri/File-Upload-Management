# File-Upload-Management
 we can upload multiple files with progress bar and stored your data in database.

Download Source code : -  https://github.com/ManishPaneri/File-Upload-Management

Video Link:-https://youtu.be/Qcy7Y83SVU0

# How To stored your data in database.

Step By Step Guide to Database Connection

Step  1:-includes/constants.php

Define database name
	define("DB_NAME", "database name");

Step 2:- upload_file.php

(1.) Inducles database connection file:
       <?php //require_once("includes/connection.php"); ?>

(2.) Write a insert query command  :
        $query="INSERT INTO `image`(`ID`, `PHOTO_NAME`) VALUES           ('$file_id_upload ','$file_name')";

(3.) Write Execute query command:
         mysql_query($query);