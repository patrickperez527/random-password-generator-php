<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="font-family: 'Poppins', sans-serif;">
    <div class="container mt-5 text-center">
        <h1 class="h1">Random Password Generator in PHP</h1>
        <form method="POST">
            <button type="submit" name="submit" class="btn btn-dark mt-1 mb-3 px-3 py-2">Generate Password</button>
        </form>
        <?php
            if(isset($_POST['submit'])){
              $data = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+,./<>?{P}';
              $random_pass = array();
              $string_variable = strlen($data) - 1;
              for($i=0; $i<12; $i++){
                $n = rand(0,$string_variable);
                $random_pass[] = $data[$n];
              }
              echo "<h4 class='h4 fw-bold'>Password: ";
              print(implode($random_pass));
            }
        ?>
    </div>
</body>
</html>