<!DOCTYPE html>
     <html lang="en">
     <head>
     <title>Home Page</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     </head>
     <body>
     <div class="container">
     <h1>Insert Data</h1>
     <form action="<?php echo site_url('User/insert');?>" method="post">
     <div class="form-group">
         <label for="name">Name:</label>
         <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
     </div>
     <div class="form-group">
         <label for="email">Email:</label>
         <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
     </div>
     <div class="form-group">
         <label for="pwd">Password:</label>
         <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
     </form>
     </div>
     </body>
     </html>