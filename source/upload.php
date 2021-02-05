<?php

class FileUploader
{
    public function handle($data, $name)
    {
        if ($data['size'] > 1000000) {
            throw new Exception('Filesize too large.');
        }

        $fileParts = explode('.', $data['name']);

        $fileExtesion = strtolower(end($fileParts));

        if (!in_array($fileExtesion, ['jpg', 'png'])){
            throw new Exception('File type not allowed.');
        }

        if (!move_uploaded_file($data['tmp_name'], __DIR__ . '/uploaded_files/' . $name)) {
            throw new Exception('Could not upload File');
        }
    }
}

try{
  $file = new FileUploader();
  $file->handle($_FILES["avatar"], substr(md5($_FILES["avatar"]["name"]), 0 , 14));
  echo "File uploaded";
}catch(\Exception $exception){
  echo "Sorry! file was not uploaded";
}

