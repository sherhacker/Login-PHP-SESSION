
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php
require("../includes/db.php");
require "header.php";
$sql="SELECT * from productos";
$result=mysqli_query($con,$sql);

?>


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col"></th>
    </tr>
  </thead>
  </table>
 
  
<table class="table table-bordered">
<tbody>
  
  <?php
  while ($mostrar=mysqli_fetch_array($result)) {
    ?>
    
    <tr>
      <td><?php echo $mostrar['id_producto']?></td>
      <td><?php echo $mostrar['nombre_producto']?></td>
      <td><?php echo $mostrar['precio_producto']?></td>
    </tr>
  
<?php
}

    
?>
</tbody>
</table>

</head>
<body>
    
</body>
</html>