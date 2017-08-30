---
title: DMCS Club
---
<!DOCTYPE html>
<html lang="en">

  {% include head.html %}

  <body>

    {% include header.html %}
    <div class="container">
      <div class="jumbotron">
        <h1>DMCS Club</h1>
        <h2><small><span id="quote"></span></small></h2>
        <p class="lead">
          Welcome to the <b>D</b>igital <b>M</b>edia and <b>C</b>omputer <b>S</b>cience
        </p>
        <?php if (!$_GET["checkedin"]){ ?>
          <div class="text-center"><a href="check-in.php" class="btn btn-lg btn-primary">Check in</a></div>
        <?php } else { ?>
          Checked in!
        <?php } ?>
      </div>
      <div class="row">
        <div class="col-sm-4">
            <div class="well">
            <h2>Next Event:</h2>
            <p>Club hasn't started yet; wait until clubs fair!</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <h2>Want more problems?</h2>
            <p>
              Try out some problems at:
              <div class="text-center"><a href="challenger" class="btn btn-lg btn-primary">Challenger</a></div>
            </p>
          </div>
        </div>
      </div>
    </div>
    {% include footer.html %}
  </body>
</html>
