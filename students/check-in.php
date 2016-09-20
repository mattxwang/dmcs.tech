---
layout: default
---

<div class="container">
	<?php if ($_GET["failed"]){ ?>
	<div class="alert alert-danger" role="alert">
		<strong>Oh No!</strong> Wrong code, please try again.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	</div>
	<?php } ?>
	  <h1 class="page-heading">Check in</h1>
	  <div class="row">
	  	<div class="col-md-4 col-sm-12">
		  <form action="checkin.php" method="post">
		    <label alt="Your UCC email">Email: </label><input class="form-control" type="email" name="email">

		    <br>

		    <label alt="The code on the board">Code: </label><input class="form-control" type="text" name="code">

		    <br>

		    <button class="btn btn-primary" type="submit">Submit</button>
		  </form>
	  	</div>
  	</div>
  	<br><br><br><br>
	<p>Want to delete your account? Email <a href="mailto:jack.sarick@ucc.on.ca">Jack</a> from your UCC email about it.</p>
</div>
