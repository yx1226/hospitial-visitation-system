<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">L.A.N.G</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="color: white" href="index.php">L.A.N.G</a>
    </div>
 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Group Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Create Group</a></li>
            <li><a href="#">View Authorized Group</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Choose Image</a></li>
            <li><a href="#">Edit Image</a></li>
            <li><a href="#">Message</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li>
         <a href="logout.php?logout=true"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout</a>
         </li>
      </ul>

      <ul class="nav navbar-nav navbar-right" >
         <li><a><label style="color: white;">
          Welcome, 
            <?php
                  require_once("class.user.php");

                  $login = new USER();
                  if($login->is_loggedin()!="")
                    print($_SESSION['user_session'])

                  ?>
           </label></a>
         </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>