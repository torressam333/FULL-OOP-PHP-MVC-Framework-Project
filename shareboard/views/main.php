<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shareboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"  href="assests/css/bootstrap.css">
    <link rel="stylesheet" type="text/css"  href="assests/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-info">
      <a class="navbar-brand" href="#">Shareboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li><a class="nav-link" href= "<?php echo ROOT_URL; ?>">Home</a></li>
            <li><a class="nav-link" href= "<?php echo ROOT_URL; ?>shares">Shares</a></li>
        </ul>

        <ul class="navbar-nav navbar-right">
            <?php if(isset($_SESSION['is_logged_in'])) :  ?>
            <li><a class="nav-link" href= "<?php echo ROOT_URL; ?>">Welcome, <?php echo $_SESSION['user_data']["name"]; ?></a></li>
            <li><a class="nav-link" href= "<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
            <?php else : ?>             
            <li><a class="nav-link" href= "<?php echo ROOT_URL; ?>users/login">Login</a></li>
            <li><a class="nav-link" href= "<?php echo ROOT_URL; ?>users/register">Register</a></li>
           <?php endif; ?>
        </ul>
      
      </div>
    </nav>

    <main role="main" class="container">

     <div class="row">
     <?php Messages::display(); ?>
         <?php require($view);?>
     </div>

    </main><!-- /.container -->

    
</body>
</html>