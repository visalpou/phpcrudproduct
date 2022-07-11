<?php
function uploadimg($file){
        // File upload path
        $targetDir = "img/";
        
        // changefile name with date
        $fileName = date('YmdHis') .'-'. basename($file["name"]);

        // targetfilepath= file trov upload to serve tov
        $targetFilePath = $targetDir. $fileName;

        // filetype = type of file
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif','pdf','jfif','webp');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($file["tmp_name"], $targetFilePath)){
                return explode('/',$targetFilePath)[1];
            }else{
                return   "Sorry, there was an error uploading your file.";
            }
        }else{
            return 'wrong file type';
        }
}

?>