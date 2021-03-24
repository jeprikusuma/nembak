<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Response</title>
</head>
<body>
    <div class="container">
        <h1 class="text-primary mt-5 mb-4">
            Response
        </h1>
        <?php foreach($data['res'] as $res): ?>
        <div class="d-flex flex-column mb-3">
            <div class="card shadow-sm rounded">
                <div class="card-body">
                  <h5 class="card-title"><?= $res['name'] ?></h5>
                  <p><?= $res['trying'] ?> kali mencoba ga mau</p>
                </div>
              </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>