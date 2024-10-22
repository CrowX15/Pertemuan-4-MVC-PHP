
<!DOCTYPE html>
    <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Pengguna</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
        <style>
            body
            {
                color: #F0EB8F;
                background-color: #944645;   
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <h2 class="mb-4">Daftar Pengguna</h2>
            <table class="table table-hover">
                <thead>
                    <tr class="table-primary">
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($user as $user){
                    ?>
                        <tr class="table-warning">
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['nama']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td>
                                <a href="index.php?aksi=detail&id=<?php echo $user['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>
    </body>
</html>    