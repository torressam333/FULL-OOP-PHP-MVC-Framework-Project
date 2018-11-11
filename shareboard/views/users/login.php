<?php//Login inside of the Users folder;?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
<br>
<h4>User Login</h4>
  <div class="form-group">
    <strong><label for="exampleFormControlTextarea1">Email</label></strong>
    <input type="email" class="form-control" name="email" cols='100' rows="4" placeholder="@email.com">
  </div>
  <div class="form-group">
    <strong><label for="formGroupExampleInput2">Password</label></strong>
    <input type="password" class="form-control" name="password">
  </div>
    	<input class="btn btn-info" name="submit" type="submit" value="submit" />
    </form>
  </div>
</div>
