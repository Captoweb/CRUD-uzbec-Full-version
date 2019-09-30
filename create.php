<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Tasks</h1>
                 
                  <form action="store.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="title">
                        </div>

                        <div class="form-group">
                            <textarea name="content" id="" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                  </form>
                  
            </div>
        </div>
    </div>
</body>
</html>



