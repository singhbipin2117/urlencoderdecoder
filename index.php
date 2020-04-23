<!DOCTYPE html>
<html lang="en">
<title>Image To Base64 Converter</title>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script src="js/init.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <form id="urlEncoderDecoder">
          <div class="form-group">
            <label for="exampleInputEmail1">Url</label>
            <input type="url" class="form-control" id="urlText" aria-describedby="emailHelp"
              placeholder="Enter iage url">
          </div>
          <button class="encoder" type="button" data-code="encode" class="btn btn-primary">Encode</button>
          <button class="encoder" type="button" data-code="decode" class="btn btn-primary">Decode</button>
        </form>

        <div class="table table-striped container" class="files" id="previews">
        
        </div>
      </div>
    </div>
        
    
</body>

</html>