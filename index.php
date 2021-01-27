<!--index.php-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Calculate Distance App</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styling.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
 <link rel="shortcut icon" href="favicon%20(1).ico" type="image/x-icon">
    
  </head>
  <body>
    <div class="jumbotron">
      <div class="container-fluid">
        <h1>Let us calculate distance between two cities
        </h1>
          <p>Our app will help you calculate travelling distances.</p>
        <form class="form-horizontal">
          <div class="form-group">
            <label for="from" class="col-xs-2 control-label">From:</label>
              <div class="col-xs-10">
              
              <input type ="text" id ="from" placeholder="Origin" class="form-control">
              </div>
              
            </div>
          
             <div class="form-group">
            <label for="from" class="col-xs-2 control-label">To:</label>
              <div class="col-xs-10">
              
              <input type ="text" id ="to" placeholder="Destination" class="form-control">
              </div>
              
            </div>
          
          
          </form>
          
     
          <div class="col-xs-offset-2 col-xs-10">
          <button class="btn btn-info btn-lg" onclick="calcRoute();" >Submit</button>
          </div>
          
          
          <div class="container-fluid">
          
          <div id="googlemap">
             
              </div>
          </div>
          <div id="output">
          
          </div>
        </div>
      
      
      
      </div>
      <!--AIzaSyBLd0Hl7PVa0PnyZVIlLrAUipqZ6npRSYA-->
   
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLd0Hl7PVa0PnyZVIlLrAUipqZ6npRSYA&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
      <script src="javascript.js"></script>
  </body>
</html>