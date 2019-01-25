<?php  include("includes/header.php") ?>

<?php
	  if(!logged_in()) {

	       redirect("login.php");

	  }
?>

<?php  include("includes/nav.php") ?>	

<div class="jumbotron-fluid bg-light">    
    	<div class="container">

			
				<?php display_message(); ?>
	            <?php validate_user_login(); ?>
					 
		          <div class="row justify-content-md-center shadow-lg p-3 mb-5  rounded" style="background-color: #FED502;"> <!--start row tag #FDE600-->
                       
                       <div class="col col-2">
                      
                            <a href="#"><img src="images/estavela.logo.jpg" class="img-responsive img-circle margin" style="display:inline"  width="100"/></a>
                       </div> 

                       <div class="col col-2"> <!-- empty col -->

                       </div> <!-- empty col -->
                       
                       <div class="col-md-auto">
                             
                             <h1 class="text-center" style="font-family: cursive, sans-serif; font-size: 26px; color:#2A65CB;">Proračun Maksimalnog Proticaja "Metoda SCS"</h1>
                             <!-- <h3 class="font-weight-bold" style="color: #06342D;">Ecological Engineering for GIS Environments</h3> -->
                             
                            
                       </div>                

                       <div class="col col-2">
                             
                       </div>
            
                 </div> <!--end row tag-->         
           
			     <div class="row">
			     	
				    	<h4>Maksimalni proticaj oderedjene verovatnoće primenom kombinovane metode</h4>
	                             <ul style="color:#06342D;">
	                             	<li>SCS postupka za razdvajanje Pe padavina od ukupnih-bruto padavina Pbr</li>
	                             	<li>Teorija sintetičkog jediničnog hidrograma za determinisanje vršne ordinate sintetičog jediničnog hidrograma qmax</li>
	                             </ul>
	                    <h5>Maksimalni proticaji na manjim slivnim površinama A < 1000 km2 su posledica kiša čije trajanje je kraće od 24h. </h5>
	                    <p>Zbog toga potrebno je maksimalnu dnevnu kišu svesti na merodavnu Htp, odnosno količinu padavina koja dovodi do pojave maksimalnog proticaja- model Jankovića(1994).Vrednosti "C" i "n" dobijene su na osnovu obrade hidrograma sa 93 bujična sliva u Srbiji  - autor Ristić Ratko, (2000).</p>
	                    <p>Postupak optimizacije metoda SCS napisana je u PHP jeziku.Metod i ulazni parametri "CN", "k", "B","C" i "n", određeni su na osnovu metodologije iz udžbenika - Hidrologija Bujičnih tokova autora Ristić Ratka i Dragana Maloševića</p>
	                    

	                <div class="col-4">
	                    <p class="font-weight-bold font-italic">Unapred definisani koeficijenti - konstante:</p>
	                    <ul class="font-weight-bold">
	                    	<li>α = 1.0</li>
	                    	<li>A = 0.3</li>
	                    	<li>C = 0.75</li>
	                    	<li>n = 0.336</li>
	                    </ul>
                    </div>
                    <div class="col-4">
	                    <p class="font-weight-bold font-italic">Klasifikacija hidroloških tipova zemljišta</p>
	                    <table class="table table-sm">
	                    	<thead>
	                    		<tr>
	                    			<th scope="col">Tip zemljišta</th>
	                    			<th scope="col">Minimalan iznos infiltracije[mm/h]</th>                                
	                    	    </tr>
	                    	    <tr>
	                    	    	<th>A</th>
	                    	    	<th>7.62 - 11.4</th>
	                    	    <tr>
	                    	    	<th>B</th>
	                    	    	<th>3.81 - 7.61</th>
	                    	    </tr>
	                    	    <tr>
	                    	    	<th>C</th>
	                    	    	<th>1.27 - 3.80</th>
	                    	    </tr>
	                    	    <tr>
	                    	    	<th>D</th>
	                    	    	<th>0.00 - 1.26</th>
	                    	    </tr>
	                    	</thead>
	                    </table>	                	
	                </div>
	                <div class="col-4">
	                  <p class="font-weight-bold font-italic">Sintetički jedinični trougaoni hidrogram</p>
	                  <img src="images/hidrogram.jpg"  width="300" />   
	                </div>
			    </div>
		            
				<div class="panel panel-login">
					
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
							   <form action="model_index.php" id="scs-form"  method="post" role="form" style="display: block;">
									<div class="form-group">
										Naziv rečnog sliva:<input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="name" required>
									</div>
									<div class="form-group">
										Merodavno vreme trajanja kiše npr.(10,11,13,14,15,16,...):<input type="text" name="Tkh" id="Tkh" tabindex="2" class="form-control" placeholder="Tkh" required>
									</div>
									<div class="form-group">
										Koeficijent oblika hidrograma-(unos podataka celi broj ili x.y):<input type="number" name="k" step="any" id="k" tabindex="3" class="form-control" placeholder="k" required>
									</div>
									<div class="form-group">
										Dužina sliva po glavnom toku unos podataka (celi broj ili npr x.y):<input type="number"name="L" step="any"tabindex="4" class="form-control"id="L"placeholder="L" required>		
							        </div>
							        <div class="form-group">
										Rastojanje od težišta sliva do izlaznog profila (celi broj ili npr x.y):<input type="number"name="Lc" step="any"tabindex="5" class="form-control"id="Lc"placeholder="Lc" required>		
							        </div>
							        <div class="form-group">
										Uravnati pad toka (celi broj ili npr x.y):<input type="number"name="Iu" step="any"tabindex="6" class="form-control"id="Iu"placeholder="Iu" required>		
							        </div>
							        <div class="form-group">
										Površina sliva (celi broj ili npr x.y):<input type="number"name="F" step="any"tabindex="7" class="form-control"id="F"placeholder="F" required>		
							        </div>
							        <div class="form-group">
										Koeficijent B -dobija se na osnovu karte izolinija (celi broj ili npr x.y):<input type="number"name="Bm" step="any"tabindex="8" class="form-control"id="Bm"placeholder="B" required>		
							        </div>
							        <div class="form-group">
										Maksimalna dnevna kiša verovatnoće pojave 1% (celi broj ili npr x.y):<input type="number"name="H24h" step="any"tabindex="9" class="form-control"id="H24"placeholder="H24h" required>		
							        </div>
							        <div class="form-group">
										Broj krive oticaja (celi broj ili npr x.y):<input type="number"name="CN" step="any"tabindex="10" class="form-control"id="CN"placeholder="CN" required>		
							        </div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="result" id="result-scs" tabindex="11" class="form-control btn btn-login" value="Result-SCS">
											</div>
										</div>
									</div>
									
								</form>
								
							</div>
						</div>
					</div>
				</div>
			

		</div> <!--end container-flex-->
</div><!--end jumbotron-fluid-->		
<?php  include("includes/footer.php") ?>