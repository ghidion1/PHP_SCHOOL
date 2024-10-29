<?php
try{
$dsn ="mysql:host=localhost;dbname=papp_lectia5";
$username="root";
$password= "";
$option = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
$pdo =new PDO($dsn, $username, $password, $option);
$sql="SELECT * FROM users";
$stmt = $pdo->query($sql);

$users=$stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">>
    <title>Document</title>
</head>
<body>
<div class="col-6 m-auto">
    <form method="POST">
        <div class="mb-3">
            <label for="nume_prenume">Nume</label>
            <input type="text" nume="nume_prenume" id="nume_prenume" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" nume="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="data_nasterii">Data Nasterii</label>
            <input type="date" nume="data_nasterii" id="data_nasterii" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password">PAssword</label>
            <input type="password" nume="password" id="password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="descriere">descriere</label>
            <textarea nume="descriere" id="descriere" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-dark btn-sm">Save</button>
    </form>
</div>
  <div class="row">
    <div class="col-md-12">
        <h4>Lista Utilizatorilor</h4>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nume Prneume</th>
      <th scope="col">Email</th>
      <th scope="col">Data Nasterii</th>
      <th scope="col">Password</th>
      <th scope="col">Descriere</th>
      <th scope="col">Optiunu</th>
    </tr>
  </thead>

  <tbody>
          <?php foreach($users as $user): ?>
            <tr>
                <td><?=$user['id']?></td>
                <td><?=$user['nume_prenume']?></td>
                <td><?=$user['email']?></td>
                <td><?=$user['data_nasterii']?></td>
                <td><?=$user['parola']?></td>
                <td><?=$user['descriere']?></td>

            </tr>
          <?php endforeach?>
  </tbody>
</table>
    </div>
  </div>  
</body>
</html>

