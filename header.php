<?php
require_once "admin/object.php";
$menus=$category->getCategoryForMenu();
// print_r($menus)

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Protfolio</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>
  <body>
    <head> 
    <div class="cotainer">
      <div class="row head">
        <div class="col-md-6">
          <a href="index.php">
            <h1>Food Ordering System</h1>
          </a>
        </div>
        <div class="col-md-6">
         <nav class="navbar navbar-expand-lg navbar-light">
          <?php foreach ($menus as $menu) {?>
          <a class="navbar-brand" href="category.php?id=<?php echo $menu->id ?>"><?php echo $menu->name; ?></a>

         <?php  } ?>
          <!-- <a class="navbar-brand" href="#">Pizza</a>
          <a class="navbar-brand" href="#">Chowin</a>
          <a class="navbar-brand" href="#">MOMO</a> -->
          
          
        </nav>
        </div>
      </div>
    </head>