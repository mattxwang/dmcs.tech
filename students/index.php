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
              <div class="text-center"><a href="checkin.html" class="btn btn-lg btn-primary">Check in</a></div>
        </div>
        <div class="row">
          <div class="col-sm-4">
              <div class="well">
              <h2>Next Event:</h2>
              <h3>Club meeting this Tuesday (September 20)
              <?
                echo "testing";
              ?></h3>
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
          <div class="col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h2>Latest News</h2>
              </div>
              <div class="panel-body">
                {% for post in site.posts limit: 5 %}
                  <h3><a href="{{ post.url | prepend: site.baseurl }}">{{ post.title }} <small>{{ post.date | date: "%b %-d, %Y" }}</small></a></h3>
                {% endfor %}
              </div>
              <div class="panel-footer">
                <p>subscribe by <a href="http://eepurl.com/cffc9X ">email</a> or <a href="{{ "/feed.xml" | prepend: site.baseurl }}">RSS</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>

</html>