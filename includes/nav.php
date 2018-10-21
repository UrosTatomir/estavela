<nav class="navbar navbar-expand navbar-dark   navbar-fixed-top" style="background-color:#06342D;">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><p style="font-family: cursive, sans-serif; font-size:40px; color: #FDE600;">Estavela</p></a>
            <!-- <a class="navbar-inline" href="#"><img src="images/estavela.jpg" class="rounded" style="display:inline" width="80" height="31"/></a> -->
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="navbar-nav">
              
              <li class="nav-item active"><a class="nav-link" href="index.php">Home<span class="sr-only"></a></li>
              <!-- <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li> -->

              <?php if(logged_in()): ?>
                          
              <!-- <li><a class="nav-link" href="download.php">Download</a></li>  -->             
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Documentation
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="gis.php">GIS</a>
                    <a class="dropdown-item" href="download.php">Download</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Newsletter</a>
                  </div>
              </li>
              <li><a class="nav-link" href="admin.php">Examples</a></li>
              <li><a class="nav-link" href="logout.php">Logout</a></li>

              <?php endif; ?>

              <?php if(!logged_in()): ?>
             
              <li><a class="nav-link" href="login.php">Login</a></li>

              <?php endif; ?>           
            </ul>
            <div class="p-2 float-right">
                 <button type="button" class="btn btn-outline-dark"><a href="index.php" class="badge badge-success">English</a></button>
                 <button type="button" class="btn btn-outline-dark"><a href="index.sr.php" class="badge badge-info">Serbian</a></button>

                 <div class="p-2 mb-2  text-light float-right" style="background-color:#06342D;">
                    <?php if(logged_in()){
                        $email = $_SESSION['email'];
                          echo $email;
                        }
                    ?>
                  </div>
            </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>