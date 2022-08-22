
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Contact Form</title>
</head>
<body>
  <navbar class="navbar navbar-default navbar-dark bg-dark">
    <div class="container">
      <div class="navbar-header">
        <a href="#"class="navbar-brand">Yajur's Contact Form</a>
      </div>
    </div>
  </navbar>


  <form class="my-3" method="POST" action="process.php">
    <div class="container">
      <div class="form-group">
        <label>Name</label>
        <input class="form-control" type="text" name="name" require>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input class="form-control" type="text" name="email" require>
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea name="message" class="form-control"></textarea require>
      </div>
      <input type="submit" class="btn btn-dark" name="submit" value="Submit">
    </div>
  </form>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
