<?php  include("includes/header.php") ?>

<?php  include("includes/nav.php") ?>


	<div class="jumbotron-fluid bg-light">
		<h5 class="text-right"><?php

          if(logged_in()){

           //  $email = $_SESSION['email'];
          	// echo'Logged in - '.$email;

          } else {

          	redirect("login.php");

          }

          ?></h5>
           <div class="container-flex">
              <div class="row justify-content-md-center shadow-lg p-3 mb-5  rounded" 
                    style="background-color: #FED502;"> <!--start row tag #FDE600-->
                       
                       <div class="col col-2">
                      
                            <a href="index.php"><img src="images/estavela.logo.jpg" class="img-responsive img-circle margin" style="display:inline"  width="100" height="100"/></a>
                            <h4 class="font-italic font-weight-bold" style="color: #06342D;">Estavela Ecological Engineering for GIS Environments</h4>
                       </div> 

                       <div class="col col-2"> <!-- empty col -->

                       </div> <!-- empty col -->
                       
                       <div class="col-md-auto">
                             
                                                  
                       </div>                

                       <div class="col-md-6 maps" >
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44046.34778673461!2d20.373595703090647!3d44.81842912563373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6ac98796b9b4098e!2sEstavela!5e0!3m2!1ssr!2srs!4v1540830623478" width="600" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                  
                       </div>

                 </div> <!--end row tag-->
           	 
              <!-- <h3 class="text-center">Estavela - download files</h3> -->
              <!-- <button class="btn btn-outline-light" type="button"><a href="images/bird.jpg" download>Download</a></button> -->
              <div class="row">
              	  <div class="col-md-4">
                            <h4 class="text-success">Publications</h4>
                            <ul class="list-group list-group-flush">
                                  <li class="list-group-item">monitoring_plaza04_06(pdf)<button class="btn btn-light btn-sm" type="button"><a href="downloads/monitoring04-06.pdf" download>(Download)</a></button></li>

                                  <li class="list-group-item">Clanak_Sava_Petkovic(pdf)<button class="btn btn-light btn-sm" type="button"><a href="downloads/clanak_monitoring_plaza_Sava_Petkovic.pdf" download>(Download)</a></button></li>

                                  <li class="list-group-item">Monitoring_seminar_06<button class="btn btn-light btn-sm" type="button"><a href="downloads/monitoring_seminar.pdf" download>(Download)</a></button></li>

                                  <li class="list-group-item">Presentation_2004_2005<button class="btn btn-light btn-sm" type="button"><a href="downloads/presentation_monitoring_04_05.pdf" download>(Download)</a></button></li>

                                  <li class="list-group-item">Sustainable land managment in the Lim river basin - Gordana Grujic<button class="btn btn-light btn-sm" type="button"><a href="downloads/SLM1_final.pdf" download>(Download)</a></button></li>
                            </ul>
                           
                        </div>
                        <div class="col-md-4 offset-md-4">
                        
                           <h4 class="text-success">Old pictures of beautiful beaches in Montenegro</h4>
                           <div class="list-group">
                                  <a href="downloads/mogren_1931.jpg" class="list-group-item list-group-item-action flex-column align-items-start active" download>
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Mogren 1931g</h5>
                                        <!-- <small>3 days ago</small> -->
                                      </div>
                                      <img src="downloads/mogren_1931.jpg" class="rounded"  width="265"/>
                                      <!-- <p class="mb-1" style="font-size:16px">Data  id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p> -->
                                      <small>Download</small>

                                  </a>
                                  <a href="downloads/przno_old.jpg" class="list-group-item list-group-item-action flex-column align-items-start" download>
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Przno_Montenegro</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <img src="downloads/przno_old.jpg" class="rounded"  width="265"/>
                                      <!-- <p class="mb-1" style="font-size:16px">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p> -->
                                      <small class="text-muted">Download</small>
                                  </a>
                                  <a href="downloads/petrovac_old.jpg" class="list-group-item list-group-item-action flex-column align-items-start" download>
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Petrovac_Montenegro</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <img src="downloads/petrovac_old.jpg" class="rounded"  width="265"/>
                                     <!--  <p class="mb-1" style="font-size:16px">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p> -->
                                      <small class="text-muted">Download</small>
                                  </a>
                                  <a href="downloads/mogren2_old.jpg" class="list-group-item list-group-item-action flex-column align-items-start" download>
                                   <div class="d-flex w-100 justify-content-between">
                                      <h5 class="mb-1">Mogren-Budva</h5>
                                      <!-- <small class="text-muted">3 days ago</small> -->
                                    </div>
                                    <img src="downloads/mogren2_old.jpg" class="rounded"  width="265"/>
                                    <!-- <p class="mb-1" style="font-size:16px">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p> -->
                                    <small class="text-muted">Download</small>
                                  </a>
                              </div>
                           <!-- <p style="font-size: 16px"><a href="#" class="text-success">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentium
                         </a></p> -->
                        </div>


              </div>
           </div>
	</div>





<?php  include("includes/footer.php") ?>
