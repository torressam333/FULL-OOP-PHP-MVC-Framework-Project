<?php//Add inside of the Shares folder?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
<br>
<h3>What would you like to share?</h3>
  <div class="form-group pt-3">
    <strong><label for="formGroupExampleInput">Share Title</label></strong>
    <input type="text" class="form-control" name="title" placeholder="Your Title Here">
  </div>
  <div class="form-group">
    <strong><label for="exampleFormControlTextarea1">Share Body</label></strong>
    <textarea class="form-control" name="body" cols='100' rows="4" placeholder="What's on your mind?"></textarea>
  </div>
  <div class="form-group">
    <strong><label for="formGroupExampleInput2">Link</label></strong>
    <input type="text" class="form-control" name="link">
  </div>
    	<input class="btn btn-primary" name="submit" type="submit" value="submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </form>
  </div>
</div>

