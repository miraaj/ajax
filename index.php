<!DOCTYPE html>
<html>
<head>
  <title>Ajax PHP</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-6 col-sm-6">
      <form method="POST" id="post_data">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" id="name">
          
        </div>
        <button type="submit" class="btn btn-success">Add</button>
      </form> 
    </div>
     <div class="col-md-6 col-sm-6">
     <strong>Inserted Data</strong>
      <div id="data_fetch"></div>
    </div>
  </div>
 
</div>
<script type="text/javascript">
  $(document).ready(function(){
      displayData();
      function displayData(){
        $("#data_fetch").load('fetch.php');
      }
      $("#post_data").submit(function(event){
        event.preventDefault();
        var form = $(this);
        var data = form.serialize(); 
        console.log(data);
        request = $.ajax({
          url:"insert.php",
          type: "post",
          data: data
        });
        //ajax call back handler that will be called upon success
        request.done(function(response, textStatus, jqXHR){
           displayData();
        });

        //ajax callback handler for failure
        request.fail(function(response, textStatus, errorThrown){
          console.error("the following error occured at\n"+
            textStatus +"with"+
            errorThrown);

        });
      });
  });
</script>
</body>
</html>

