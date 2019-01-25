
<?php  include("includes/header.php") ?>

<?php  include("includes/nav.php")	?> 
	

	<div class="jumbotron-fluid bg-light" >
  
  <?php display_message(); ?>

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
                             
                             <!-- <h1 class="text-center" style="font-family: Comic Sans MS,cursive, sans-serif; font-size: 70px; color:#2A65CB;">Estavela</h1> -->
                             <!-- <h5 class="font-weight-bold" style="color: #06342D;">Ecological Engineering for GIS Environments</h5> -->                           
                       </div>                

                       <div class="col-md-6 maps" >
                       	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44046.34778673461!2d20.373595703090647!3d44.81842912563373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6ac98796b9b4098e!2sEstavela!5e0!3m2!1ssr!2srs!4v1540830623478" width="600" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
         					
                       </div>

                 </div> <!--end row tag-->
          <div class="row shadow p-3 mb-5 bg-white rounded">   <!--start row div-->
               <div class="col-sm-4">
                  <a href="images/estavela_profil1.jpg"><img src="images/estavela_profil1.jpg" class="rounded"  width="320"/></a>
                  <h4>A project for monitoring erosion processes on beaches in Montenegro, beaches period 2004 - 2011</h4>
                  <p class="font-italic" style="font-size: 14px"><a <?php if(logged_in()): ?>  href="downloads/monitoring04-06.pdf" <?php endif;?> class="text-success">
                      A project for monitoring erosion processes on beaches in Montenegro, Mogren, Przno, Sveti Stefan and Petrovac beaches period 2004 - 2011   
                  </a></p>
                  <ul class="font-italic text-success" style="font-size: 14px">
                     <li><a class="text-success" <?php if(logged_in()): ?> href="downloads/monitoring_seminar.pdf" <?php endif; ?>>Preparation of a manual for the implementation of a beach monitoring project in Montenegro</a></li>

                     <li><a class="text-success" <?php if(logged_in()): ?> href="downloads/clanak_monitoring_plaza_Sava_Petkovic.pdf" <?php endif; ?>>Collection of available data on climate characteristics, winds, waves and other relevant natural factors along the Montenegro coast</a></li>

                     <li><a class="text-success" <?php if(logged_in()): ?>href="downloads/presentation_monitoring_04_05.pdf" <?php endif; ?>>Collection of data on current research of the characteristics of erosion processes and stability of Montenegrin beaches</a></li>

                     <li><a class="text-success" <?php if(logged_in()): ?> href="downloads/mogren_1931.jpg" <?php endif; ?>>Collection of all available backgrounds, data, old maps and photos about the former appearance of Montenegrin beaches</a></li>

                     <li><a class="text-success" href="index.phtml">Creation of a database of measurement results and observations of changes on selected beaches</a></li>

                     <li><a class="text-success" href="index.phtml">Creation of periodic reports</a></li>
                  </ul>
               </div>
               <div class="col-sm-4">
                  <!-- <a href="#"><img src="images/steve-halama-770717-resize.jpg" class="img-responsive img-circle margin"  width="320" height="213"/></a> -->

                  <h4><a href="index.phtml">Development of projects within the of ecological engineering environment</a></h4>
                
                  <ul class="font-italic text-success" style="font-size: 14px">
                      <li>ecological engineering</li>
                      <li>regulation of floods</li>
                      <li>protection against erosion and melioration of forest and agricultural areas</li>
                      <li>protection against erosion of the coast and river sides</li>
                      <li>forests and waters</li> 
                      <li>rehabilitation of torrent banks</li>
                      <li>environmental protection</li>
                      <li>secondary breakwater</li>
                      <li>feasibility study of coastal - flood regulation</li>
                      <li>forest protection projects</li>
                      <li>land erosion</li>
                      <li>degradation of forest habitats</li>
                      <li>reduction of fires, afforestation</li>
                      <li>conservation of soil</li>
                          
                 </ul>

               </div>

               <div class="col-sm-4">
                  <!-- <a href="#"><img src="images/tomas-yates-770192-resize.jpg" class="img-thumbnail"  width="320" height="210"/></a> -->

                  <h4 class="text-primary">Projects Estavela:</h4>
                  
                  <ul class="font-italic" style="font-size: 14px">
                      <li><a href="index.phtml" class="text-success">Budva Catastre Project for JP Morsko Dobro Budva</a></li>
                      <li><a href="index.phtml" class="text-success">Coastal belt forest protection projects from land erosion and degradation of forest habitats</a></li>
                      <li><a href="index.phtml" class="text-success">Reviewed by Dukley Marina Budva</a></li>
                      <li><a href="index.phtml" class="text-success">Reduction of fires, afforestation, conservation of soil</a></li>
                      <li><a href="index.phtml" class="text-success">Projects for planned exploitation of forest land in the coastal zone</a></li>
                      <li><a href="index.phtml" class="text-success">Preparation of the Study for the preparation of changes to the Main Project will be carried out by Kacema Municipality of Ulcinj</a></li>
                      <li><a href="index.phtml" class="text-success">Study for the rehabilitation of the specific torrent farm  ( municipality of Kotor )</a></li>                     
                      <li><a href="index.phtml" class="text-success">Study on the possibilities of improving water circulation in the bay ( was done in Tivat, Pržno beach )</a></li>
                      <li><a href="index.phtml" class="text-success">Arranging the coast and building a coastal wall on the beach ( Pržno ) </a></li>
                      <li><a href="index.phtml" class="text-success">Building project and construction of city marina in Herceg Novi- secondary breakwater </a></li>
                      <li><a href="index.phtml" class="text-success">Design for beach nourishment on beach Zavala - Budva</a></li>
                      <li><a href="index.phtml" class="text-success">Coastal regulation in Lipci - Kotor and construction of small pocket beach</a></li>
                      <li><a href="index.phtml" class="text-success">Conceptual design for the coast in the bay of Kamenovo</a></li>
                      <li><a href="index.phtml" class="text-success">Preparation of the Ananlise Study of the planned docking solution in Čanje Municipality Bar</a></li>                    
                           
                  </ul>
               </div>

         </div> <!-- end row div-->

    </div> <!-- end container-flex tag-->
 </div> <!--end jumbotron tag-->

 <?php include("includes/footer.php") ?>	
