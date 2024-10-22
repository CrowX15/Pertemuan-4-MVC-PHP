<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

    <style>
        body {
            display: flex;
            justify-content: center; 
            align-items: center;    
            height: 100vh;         
            margin: 0;             
            background-color: #05284e; 
        }
    </style>

  </head>
  <body>
    
    <div class="container mt-5"style="max-width: 1000px; 
  border: 2px solid #D0C05B; padding: 20px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
   background-color: #D0C05B;  color: #05284e;" justify-content: center;>
          <h2 class="mb-4">User Details</h2>
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"><?php echo $user['nama']; ?></h5>
                  <p class="card-text">ID: <?php echo $user['id']; ?></p>
                  <p class="card-text">Email: <?php echo $user['email']; ?></p>
                 <center><a href="index.php" class="btn btn-primary">Kembali</a></center>
              </div>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
  </body>
</html>