<!DOCTYPE html>  
<html>  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
    <title>Exract Zip And Upload File - www.dewankomputer.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand text-white" href="index.php">
      Dewan Komputer
    </a>
  </nav>
  <div class="container">
      <h3 align="center" class="mb-3 mt-3">Exract Zip And Upload File pada Php</h3>

      <form method="post" action="upload.php" enctype="multipart/form-data">
        <label>Pilih Zip File</label>
        <input type="file" name="zip_file" class="form-control" required/>
        <input type="submit" name="btn_zip" class="btn btn-info mt-5" value="Upload" />
      </form>
  </div>
</body>
</html>