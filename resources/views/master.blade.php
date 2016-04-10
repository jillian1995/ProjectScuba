<!DOCTYPE html>
<html>
  @extends('header')
  <body>
    <nav class="navbar navbar-default navbar-static-top ">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Scubabook</a>
        </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/post">Post Dive</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="nav_ProfileName">Username <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Profile</a></li>
                <li><a href="/post">Post Dive</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
    <div class="row">
      <div class="col-md-3">
        <!-- Left -->
      </div>
      <div class="col-md-6">
      @yield('body')
      </div> <!-- End of middle -->
      <div class="col-md-3">
        <!-- Right -->
      </div>
    </div>
  </body>
</html>
