<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <div class="panel panel-default">
            <div class="panel-heading">Panel Heading</div>
            <div class="panel-body">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 " >
    <h1>Details Information</h1>
    <p></p>
      <table id="example1" class="table table-bordered table-striped" align="center">
                <thead>
                  <tr>
                    <th width="80px;">S.No.</th>
                    <th>Link</th>
                    <th width="100px;">Action</th>
                   </tr>
                </thead>
                <tbody>
                 <tr>
                    <td style="text-transform: capitalize;"></td>
                    <td style="text-transform: capitalize;"></td>
                    <td><a href="update.html">Edit</a> | <a onclick="return confirm('Delete this Team?')" href="#">Delete</a></td>
                 </tr>
                </tbody>
            </table>
    </div>
   </div>
   </div>
  </div>
</div>
    
</body>
</html>

