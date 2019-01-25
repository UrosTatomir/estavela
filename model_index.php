<?php  include("includes/header.php") ?>

<?php  include("includes/nav.php")	?>

<?php require_once"hidrogram.php"; ?>

<div class="jumbotron-fluid bg-light">

    	<div class="container-flex font-weight-bold font-italic">

    		<div class="row justify-content-md-center shadow-lg p-3 mb-5  rounded" style="background-color: #FED502;"> <!--start row tag #FDE600-->
                       
                       <div class="col col-2">
                      
                            <a href="#"><img src="images/estavela.logo.jpg" class="img-responsive img-circle margin" style="display:inline"  width="100"/></a>
                       </div> 

                       <div class="col col-2"> <!-- empty col -->

                       </div> <!-- empty col -->
                       
                       <div class="col-md-auto">
                             
                             <h1 class="text-center" style="font-family: cursive, sans-serif; font-size: 26px; color:#2A65CB;">Proračun Maksimalnog Proticaja "Metoda SCS"</h1>
                            
                       </div>                
                       <div class="col col-2">                            
                       </div>           
             </div> <!--end row tag--> 
             <div class="row">
                   <div class="col-12">
						<?php
						
						//$id = $_POST["id"];
						$name = $_POST["name"];
						$Tkh = $_POST["Tkh"];
						$Tk = explode(',',$Tkh);

						$a= 120; //min -> h/2;
						$b=1440; //za 24 h p = 1% 1440 ; 12h p = 1%  770 ;
						$c=0.3;
						$k=$_POST["k"]; //koeficijent oblika hidrograma = 1
						$L=$_POST["L"];    //km;
						$Lc=$_POST["Lc"]; //km;
						$Iu=$_POST["Iu"];  // %;
						$Ap=0.3;
						$F=$_POST["F"]; //km2
						$Bm=$_POST["Bm"];  //koef. sa grafikona za date npr0.82 za podrucje Kotora uslove;
						$H24h=$_POST["H24h"]; // mm/24h;
						$CN=$_POST["CN"];


						// $servername = 'localhost';
						$username = 'root';
						$password = NULL;
						// $dbname = 'estavela_talas_db';
					
						$hidroscs = new Hidrogram();
						$hidroscs->SCS($name);
					   ?>
				 </div>
				 <div class="col-3 bg-success text-white">
				       <?php
						$hidroscs->trKi($Tk);
				       ?>
				  </div>
				  <div class="col-3">
                        <?php

						$hidroscs->vKa($L,$Lc,$Iu);
						$hidroscs->vPHi($Tk,$a,$L,$Lc,$Iu);
						$hidroscs->vOHi($Tk,$k,$a,$L,$Lc,$Iu);
						$hidroscs->bazaHi($Tk,$k,$a,$L,$Lc,$Iu);
						$hidroscs->mKiTr($Tk,$Ap,$b,$c,$Bm,$H24h);
						?>
                  </div>
                  <div class="col-3 ">
					    <?php

						$hidroscs->defV($CN);
						$hidroscs->efPad($Tk,$Ap,$b,$c,$H24h,$Bm,$CN);						
							
						$hidroscs->maxO($Tk,$F,$k,$a,$L,$Lc,$Iu); ?>	
						
                        
				  </div>
				  <div class="col-3 bg-secondary text-white">

				  	   <?php

						$r = $hidroscs->maxP($Tk,$F,$Ap,$k,$a,$b,$c,$L,$Lc,$Iu,$H24h,$Bm,$CN);


						$hidroscs->connect($username,$password,$name,$a,$b,$c,$k,$L,$Lc,$Iu,$Ap,$F,$Bm,$H24h,$CN,$r);
						?>
                  </div>
                  <div class="col-5">
                        <?php
                        echo'<br>';
                        echo'Ulazni podaci :<br>';
						echo'a = '.$a.'<br>'; //min -> h;
						echo'b = '.$b.' za 24h p = 1%<br>'; //za 24 h p = 1% 1440 ; 12h p = 1%  770 ;
						echo'c = '.$c.'<br>';
						echo'k = '.$k.'<br>';
						echo'L = '.$L.' km.<br>';    //km;
						echo'Lc = '.$Lc.' km.<br>'; //km;
						echo'Iu = '.$Iu.' %.<br>';  // %;
						echo'F = '.$F.' km2.<br>';  //km2;
						echo'Ap = '.$Ap.'<br>';
						echo'Bm = '.$Bm.' koef. za date uslove<br>'; //koef. sa grafikona za date uslove;
						echo'H24h = '.$H24h.'<br>'; // mm/24h;
						echo'CN = '.$CN.'<br>';
						echo'<br>';
						?>
				 </div>
			</div> <!--end row-->	

        </div>
</div>

<?php  include("includes/footer.php") ?>