
<?php  include("includes/header.php") ?>

<?php  include("includes/nav.php")	?> 
	

	<div class="jumbotron-fluid bg-light" >
  
  <?php display_message(); ?>

         <div class="container-flex" >
                 <div class="row justify-content-md-center shadow-lg p-3 mb-5  rounded" style="background-color: #FED502;"> <!--start row tag #FDE600-->
                       
                       <div class="col col-2">
                      
                            <a href="index.php"><img src="images/estavela.logo.jpg" class="img-responsive img-circle margin" style="display:inline"  width="200" height="200"/></a>
                       </div> 

                       <div class="col col-2"> <!-- empty col -->

                       </div> <!-- empty col -->
                       
                       <div class="col-md-auto">
                             
                             <h1 class="text-center" style="font-family: Comic Sans MS,cursive, sans-serif; font-size: 70px; color:#2A65CB;">Estavela</h1>
                             <h3 class="font-weight-bold" style="color: #06342D;">Ekolosko inzenjerstvo za GIS okruzenja</h3>
                             
                            
                       </div>                

                       <div class="col col-2">
                             
                       </div>

                 </div> <!--end row tag-->

                 <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->
                 <div class="card shadow-lg p-3 mb-5 text-warning" style="background-color: #06342D;">
                       <img class="card-img" src="images/estavela_mogren_1.jpg" width="990" height="638" alt="card image">   
                      <div class="card-img-overlay">
                          <h2 class="card-title text-center font-weight-bold">Estavela  Oglasna tabla</h2>
                          <h4 class="card-text">Inzenjering za zaštitu životne sredine ,zaštitu od erozije obala, šuma i vodotoka, projektovanje i razvoj GIS okruženja.</h4>
                          <h4 class="card-text">: Last updated</h4>
                          <h4 class="card-text"><a href="gis.php" class="text-warning">- Primena GIS metoda u ekološkom inženjerstvu</h4>
                          <h4 class="card-text"><a href="info.php" class="text-warning">- Projektovanje i izrada studija</a></h4>
                          <h4 class="card-text"><a href="index.scs.php" class="text-warning">- Examples - Proracun SCS metode maksimalnog protoka primenom hidrografske jedinice dimenzije</a></h4>
                          <h4 class="card-text"><a href="info.php" class="text-warning">- Monitoring plaza u Crnoj Gori</a></h4>
                      </div>
                 </div>

                 <div class="row shadow p-3 mb-5 bg-white rounded"> <!--start row tag-->                     
                        <div class="col-md-4">
                          <h4><a href="index.phtml" class="text-success">Ekološki geografski informacioni sistem - GIS</a></h4>
                          <a href="images/estavela_gis2.jpg"><img src="images/estavela_gis2.jpg" class="rounded"  width="330" /></a>
                          <!-- <hr>                          -->
                          <p class="mb-1" style="font-size:14px"><a <?php if(logged_in()): ?> href="index.phtml" <?php endif; ?> class="text-secondary">Koncept GIS-a nije geografski nov. U prvobitnom smislu, geografi koriste ovakve sisteme već mnogo godina, ali "korake" - bez upotrebe računara. Na primer, crtanje papira i preklapanje takvih pauza je klasičan primer. Takav primer je epidemija kolere u Londonu 1854. Dr. John Snov je pronašao položaj mjesta zarazne bolesti tako što je izvlačio smrt.
                          Utvrdio je da je koncentracija oko 500 slučajeva bila u krugu od nekoliko stotina metara oko javne pumpe za vodu na Broad Streetu, Soho. Dr Snou je uspeo da dokaže sledeće: kada je ručica pumpe uklonjena, novi slučajevi nisu dijagnostikovani u toj ulici. Dokazao je da je pumpa izvor ovih slučajeva infekcije i da je izvor infekcije inficiran vodom koristeći jednostavnu analizu podataka.</a></p>

                          <h4><a <?php if(logged_in()):?> href="index.phtml" <?php endif;?> class="text-success">Prostorna analiza sa geografskim informacionim sistemom (GIS)</a></h4>
                            <ul class="list-group list-group-flush">
                                  <li class="list-group-item"><a href="index.phtml"  >Analiza podataka</a></li>
                                  <li class="list-group-item"><a   href="index.phtml" >Topografsko modelovanje</a></li>
                                  <li class="list-group-item"><a href="index.phtml">Geometrijske mreze</a></li>
                                  <li class="list-group-item"><a  href="index.phtml">Hidrolosko modeliranje</a></li>
                                  <li class="list-group-item"><a href="index.phtml">Kartografsko modeliranje</a></li>
                                  <li class="list-group-item"><a href="index.phtml">Preklapanje terena</a></li>
                            </ul>   
                        
                        </div>
                        <div class="col-md-4">
                        
                           <h4><a href="#" class="text-success">Polja primene - GIS</a></h4>
                           <div class="list-group">
                                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Geostatistika</h5>
                                        <!-- <small>3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">To je grana statistike koja se bavi prostornim podacima sa kontinuiranim indeksom. Ona pruža metode za modeliranje prostorne korelacije i predviđa vrednosti na proizvoljnim lokacijama (interpolacija).</p>
                                      <small>part 1.</small>
                                  </a>
                                  <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start">
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Adresa geokodiranja</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Geokodiranje je interpoliranje prostornih lokacija (Ks, I koordinata) sa adresnih adresa ili bilo kog drugog prostornog referenciranog podatka kao što su ZIP kodovi, parcele i adrese.</p>
                                      <small class="text-muted">Part 2.</small>
                                  </a>
                                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Obrnuto geokodiranje</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Obrnuto geokodiranje je proces vraćanja procenjenog broja adrese u ulici, jer se odnosi na datu koordinatu. Na primer, korisnik može kliknuti na temu tematske linije puta (na taj način obezbediti koordinate) i vratiti informacije koje odražavaju procenjeni kućni broj.</p>
                                      <small class="text-muted">Part 3.</small>
                                  </a>
                                    <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start">
                                     <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Izlaz podataka i kartografija</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Kartografija je dizajn i izrada mapa, odnosno vizuelnih prikaza prostornih podataka.</p>
                                      <small class="text-muted">Part 4.</small>
                                  </a>                                  
                                    <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start">
                                     <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Tehnike grafičkog prikaza</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Tradicionalne mape su apstrakcije stvarnog sveta, uzimanje uzoraka važnih elemenata prikazanih na listu papira sa simbolima koji predstavljaju fizičke objekte. Ljudi koji koriste mape moraju tumačiti ove simbole. Topografske mape pokazuju oblik površine zemlje sa konturnim linijama ili sa osenčenom reljefom.</p>
                                      <small class="text-muted">Part 5.</small>
                                  </a>
                                  <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start">
                                     <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Programi</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Implementacija GIS-a često je podstaknuta jurisdikcionim zahtevima (grad, država, ...), svrha ili aplikacija. Uopšteno govoreći, implementacija GIS-a može biti prilagođena za organizaciju. Stoga, razvijanje GIS-a  za bilo koju aplikaciju, nadležnost, preduzeće ili bilo koju svrhu moze ali i , ne mora biti interoperabilno ili kompatibilno sa GIS-om koji je razvijen za neku drugu aplikaciju, nadležnost, preduzeće ili svrhu
.</p>
                                      <small class="text-muted">Part 6.</small>
                                  </a>
                              </div>
                           
                          
                        </div>
                        <div class="col-md-4 ">
                        
                           <h4><a href="index.phtml" class="text-success">Korišćenje vektorskih podataka</a></h4>
                           <a href="images/estavela_gis3.jpg"><img src="images/estavela_gis3.jpg" class="rounded"  width="330" /></a>
                           <!-- <hr> -->
                           <p style="font-size: 14px"><a href="index.phtml" class="text-secondary">Vektorski modeli su tačke, linije i
                            poligone. Vektorski podaci nisu sastavljeni od mreže piksela. Umesto toga, vektorska grafika se sastoji od vertikala i staza.
                            Tri osnovna tipa simbola za vektorske podatke su tačke, linije i poligoni (oblasti). Pošto kartografi koriste ove simbole da predstavljaju stvarne karakteristike na mapama, oni često moraju da odluče na osnovu nivoa detalja na mapi.
                         </a></p>
                         <!-- <hr> -->
                           <a href="images/estavela_gis4.jpg"><img src="images/estavela_gis4.jpg" class="rounded"  width="330" /></a>
                          <!-- <hr> -->
                           <p style="font-size: 14px"><a href="index.phtml" class="text-secondary">U Geografskom informacionom sistemu, zajednička svrha je donošenje odluka u upravljanju nekim prostornim aktivnostima, tako da se GIS može definisati kao IS u svrhu sakupljanja, obrade, upravljanja, analize, prikazivanja i održavanja prostorno orijentisanih informacija.</a></p>

                        </div>
                        

                 </div> <!-- end row tag-->
                 
                 <div class="row shadow p-3 mb-5 bg-white rounded"> <!--start row tag-->

                        <div class="col-md-4">
                            <h4><a href="index.phtml" class="text-success">Prenos podataka u GIS</a></h4>
                            <a href="images/estavela_gis5.jpg"><img src="images/estavela_gis5.jpg" class="rounded"  width="330"/></a> 
                            <!-- <hr> -->
                            <h5 style="font-size: 16px"><a href="index.phtml">Podaci sa kojima radimo u GIS-u podeljeni su u dve grupe:</a></h5>
                               <ol class="list-group-item-active" style="font-size: 14px">
                                <li class="list-group-item-active">- Graficki(
                                 mape,satelitski snimci, aero-fotografije,itd.)</li>                         
                                <li class="list-group-item-active">- Alfanumerički (tekstualni podaci i 
                                  brojni formati)</li>
                              </ol>
                            
                             <!-- <hr> -->
                             <h5 style="font-size: 16px" ><a href="index.phtml">Osnovni podaci u GIS su:</a></h5>
                             <ol class="list-group-item-active" style="font-size: 14px">
                                <li class="list-group-item-active">- Unos podataka</li>
                                <li class="list-group-item-active">- Skladištenje podataka</li>
                                <li class="list-group-item-active">- Upravljanje i održavanje podataka</li>
                                <li class="list-group-item-active">- Analiza podataka</li>
                                <li class="list-group-item-active">- Prikazivanje podataka</li>
                             </ol>
                         
                        </div>

                        <div class="col-md-4">
                            <h4><a href="index.phtml" class="text-success">GPS Sistem</a></h4>
                            <a href="images/estavela_gis7.jpg"><img src="images/estavela_gis7.jpg" class="rounded"  width="330"/></a> 
                            <!-- <hr> -->
                            <h5 style="font-size: 16px"><a href="index.phtml">Sistem GPS se sastoji od tri komponente:</a></h5>
                            <ol class="list-group-item-active"style="font-size: 14px">                                                          
                               <li class="list-group-item-active">- Komponente u svemiru</li>
                               <li class="list-group-item-active">- Kontrolne komponente</li>
                               <li class="list-group-item-active">- Korisnicke komponente</li>
                            </ol>
                            <!-- <hr> -->
                            <a href="images/estavela_gis8.jpg"><img src="images/estavela_gis8.jpg" width="330" /></a>
                         
                        </div>

                        <div class="col-md-4 ">
                            <h4><a href="index.phtml" class="text-success">Mape</a></h4>
                            <ol class="list-group-item-action" style="font-size: 16px;">
                                  <li class="list-group-item-active"><a <?php if(logged_in()): ?> href="index.phtml" <?php endif; ?>>Definicija karte</a></li>
                                  <li class="list-group-item-active"><a <?php if(logged_in()): ?> href="index.phtml" <?php endif; ?>>Elementi karte</a></li>
                                  <li class="list-group-item-active"><a <?php if(logged_in()): ?> href="index.phtml" <?php endif; ?>>Geodetske osnove mapiranja</a></li>
                                  <li class="list-group-item-active"><a <?php if(logged_in()): ?> href="index.phtml" <?php endif; ?>>Kartografske projekcije</a></li>
                                  <li class="list-group-item-active"><a <?php if(logged_in()): ?> href="index.phtml" <?php endif; ?>>Deformacije površine Zemlje</a></li>
                                  <li class="list-group-item-active"><a <?php if(logged_in()): ?> href="index.phtml" <?php endif; ?>>Državni koordinatni sistem</a></li>
                                  <li class="list-group-item-active"><a <?php if(logged_in()): ?> href="index.phml" <?php endif; ?>>Merenje</a></li>
                                  <li class="list-group-item-active"><a <?php if(logged_in()): ?> href="index.phtml" <?php endif; ?>>Distribucija mapa prema sadržaju</a></li>
                                  <li class="list-group-item-active"><a <?php if(logged_in()): ?> href="index.phtml" <?php endif; ?>>Okvir mape</a></li>
                            </ol> 
                            <!-- <hr> -->
                            <a href="images/estavela_gis9.jpg"><img src="images/estavela_gis9.jpg" width="330"/></a>
                            
                        </div>

                 </div> <!-- end row tag-->

                 <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->
                 
                 <div class="row card shadow p-3 mb-5 bg-white rounded"> <!--start row tag--> 
                        <img class="card-img" src="images/estavela_layers.jpg" class="rounded"  width="990" alt="card image" /> 
                        <div class="card-img-overlay">
                            <h3 class="text-center" style="font-family: cursive, sans-serif; color: #2A65CB;">Organizacija podataka u GIS-u</h3>

                            
                            <h3 class="card-text"> Geometrijske jedinice</h3>
                            <ul>
                                <li><h4 class="font-weight-bold"><a <?php if(logged_in()): ?> href="index.phtml" <?php endif; ?>>Tacke</a></h4></li>

                             <li><h4 class="font-weight-bold"><a <?php if(logged_in()):?> href="index.phtml" <?php endif; ?>>Linije</a></h4></li>

                             <li><h4 class="font-weight-bold"><a <?php if(logged_in()):?> href="index.phtml" <?php endif; ?>>Poligoni</a></h4></li>
                                
                            </ul>
                                
                            <h3 class="card-text">Kartografske jedinice</h3>
                            <ul>
                             <li><h4 class="font-weight-bold"><a <?php if(logged_in()): ?> href="index.phtml" <?php endif; ?>>Podaci o atributima</a></h4></li>

                             <li><h4 class="font-weight-bold"><a <?php if(logged_in()): ?> href="index.phtml" <?php endif; ?>>Graficki podaci</a></h4></li>

                             <li><h4 class="font-weight-bold"><a <?php if(logged_in()): ?> href="index.phtml" <?php endif; ?>>Geometrijski podaci</a></h4></li>
                           </ul>
                                                      
                              
                        </div>

                  </div> <!-- end row tag-->

                  <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->
                 
                   <div class="row shadow p-3 mb-5 bg-white rounded"> <!--start row tag-->

                       <div class="col-12 card text-center" style="background-color: #FED502;">

                           <h3 class="text-center"><a href="#">Digitalni model terena DEM</a></h3>
                           <img class="card-img" src="images/estavela_gisDEM.jpg" width="990" alt="DEM"/>
                           
                       </div>

                       <div class="col-4" style="background-color:lavenderblush;">

                           <h4 class="text-success text-center">Metapodaci</h4>
                              <p style="font-size: 14px">Metapodaci su set atributa potrebnih za opis podataka o resursima. Na primer, metapodaci se koriste u bibliotekama kako bi opisali knjige, tako da katalog biblioteke sadrži kratak opis svake knjige (ime autora, naslov, kratak opis, mesto na polici ...). Postoje dva načina za čuvanje podataka i metapodataka:</p>
                            <ul>
                                 <li>metapodaci i podaci su odvojeni, (kao u slučaju kataloga biblioteke)
                                 </li>
                                 <li>metapodaci su postavljeni sa samim podacima (pri štampanju knjiga, 
                                     gde se informacije stavljaju u samu knjigu)</li>
                            </ul>


                        </div>
                       
                        <div class="col-8" style="background-color:lavender;">

                          
                                <h4 class="text-success">Model digitalnog terena (DEM) - predstavlja trodimenzionalni oblik površine Zemlje u digitalnom obliku. Za tu svrhu, tačke moraju imati sve tri koordinate i mogu biti:
                                </h4>
                                <ul>
                                   <li>predstavljeni kroz mrezu trouglova (TIN)</li>
                                   <li>prikazana u tačnoj kvadratnoj ili pravougaonoj mreži (GRID)</li>
                                </ul>

                               <p class="text-success" style="font-size: 16px">Za ovu svrhu tačke mogu biti prikazane na jedan od sledećih načina:</p>
                               <ul>
                                   <li>Direktno merenje u polju;</li>
                                   <li>Fotogrametrijsko istraživanje;</li>
                                   <li>Georeferenciranje satelitskih podataka i snimaka;</li>
                                   <li>Digitizacija iz tačnih mapa ili izohipsa.</li>
                               </ul>
                                <p class="text-success" style="font-size: 16px">Kao rezultat, model digitalnog terena dobija:</p>
                               <ul>
                                   <li>Prikaz na mapi pomoću izohipsa;</li>
                                   <li>Trodimenzionalni prikaz terena koristeći profile, kvadrate i senke
                                  .</li>
                               </ul>
                            

                        </div> <!--end col-8-->
                 </div> <!--end row tag-->
                
         </div> <!--end container flex tag-->

         <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->

         <div class="container-fluid text-center shadow-lg p-3 mb-5 rounded" style="background-color: #06342D"> <!--#606721-->
             <div class="row">
                <div class="col-12">
                    <h4 style="color: #FED502;">Raster, vektor, koordinatni sistemi, atributi, baze podataka, softver</h4>
                    <!-- <p style="font-size: 16px">Lorem ipsum dolor sit amet, eu pro idque petentium. Id hinc atqui duo, sit ea mucius petentium.</p> -->
                </div>
                <div class="col">
                    <h4 style="color: #FED502;">raster + DEM + vector => layers</h4>
                   <img  src="images/estavela_layers2.jpg" style="display:inline" alt="Bird" width="400"/>
                    <h4 style="color: #FED502;">raster + vector(poligoni,linije,tacke) => layers</h4> 
                   <img src="images/estavela_card.jpg" style="display:inline" alt="estavela_card" width="400"/>
                    
                </div>
                <div class="col-5">
                    <h4 style="color: #FED502;">Objašnjenje raster-vektor (format)</h4>
                    <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">U digitalnom formatu, digitalni podaci se mogu podeliti na vektorske i rasterske formate.

                      Raster se sastoji od pravougaone mreže istih dimenzija (piksela), gde svaki pravougaonik ima svoju vrijednost. Vektorski format koristi jednostavne geometrijske oblike kao što je tačka, segment linije i poligon. Najveća prednost nad rasterskim formatom je to što zauzima manje memorijskog prostora.</p> 
                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Kao primer, može se pokazati krug u dvodimenzionalnom prostoru. Definicija kruga po raster formatu je gotovo nemoguća (postojaće beskonačan broj piksela), dok je samo nekoliko podataka dovoljno za definisanje kruga u vektorskom formatu: poluprečnik i koordinate centra.</p>

                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Prostorni podaci imaju određene karakteristike koje se mogu opisati po terminama: formi, lokaciji i odnosu prema drugim prostornim podacima (ili geometriji, položaju i topologiji). Takođe je važno modelirati podatke iz stvarnog sveta (kao što su putevi ili zgrade) u smislu geografskog predstavljanja.</p>

                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Na primer, putanja se može prikazati linijom, a zgrada može biti poligon na mapi. Ova svojstva (linija, poligon) zapravo su modeli realnih pojava realnog sveta. Ponekad se ovi modeli zovu objekti ili entiteti. Još jedan važan aspekt prostornih podataka je taj što oni često sadrže informacije o atributima. To znači da se opis događaja (npr. Vremena) čuva u nekom obliku. Opis može biti ime ili vrsta puta (A, B, autoput), a objekat bi bio segment linije.</p>

                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Drugi primer može biti trigonometrijski, koji se može predstaviti geometrijskim oblikom tačke, a atribut može biti visina. Jezera mogu biti predstavljena geometrijskom obliku poligona, sa nazivom atributa. Najčešće se isti objekti grupišu u slojeve, tako da se svi trigonometri mogu grupisati u jedan sloj, sva jezera u drugom sloju, sve putanje u trećem sloju i tako dalje.</p>   
                </div>
                
                <div class="col-7">
                      <h4 style="color: #FED502;">Database</h4>
                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Nakon prikupljanja i prilagođavanja geografskih podataka sistemu, neophodno je sačuvati ih u geografskom informacionom sistemu zaduženom za čuvanje geografskih podataka - baze podataka. Podaci se organizuju u bazi podataka (što je jedna od prednosti informacionih sistema uopšte). Prostorne baze podataka treba koristiti u prostornim podacima.</p>
                </div>
                <div class="col-5">
                      <h4 style="color: #FED502;">Spatialdatabase</h4>
                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Danas se prostorni podaci sakupljaju u određenom koordinatnom sistemu i vizualizuju se u određenoj kartografskoj projekciji. Podaci o prikupljanju podataka se prikupljaju u jednom sistemu, a informacioni sistem koristi drugi koordinatni sistem, podaci moraju biti prilagođeni procesom konverzije.</p>
                </div>
                <div class="col-12 text-center">
                     <h4 style="color: #FED502;">Software</h4>
                </div>
                <div class="col-7 text-center">
                      
                     <h4 class="font-weight-bold font-italic" style="font-size: 14px; color: #FED502;">LPS (Leica Photogrammetry Suite), eCognition, ESRI ...</h4>
                      <img src="images/erdas.jpg" style="display:inline" alt="erdas" width="400"/>
                      <h4 class="font-weight-bold font-italic" style="font-size: 14px; color: #FED502;">erdas image 2</h4>
                     <img src="images/otago.jpg" style="display:inline" alt="otago" width="400"/>
                     <h4 class="font-weight-bold font-italic" style="font-size: 14px; color: #FED502;">Qgis open source software koristi se za vektore.</h4>
                     <img src="images/qgis.jpg" style="display:inline" alt="qgis" width="400"/>

                </div>
                <div class="col-5 text-left">
                     
                     <p class="font-italic text-left" style="color: #FED502;">Na osnovu prethodnog teksta može se zaključiti da se softver koji se koristi u GIS može podeliti na:</p>
                     <ul class="font-italic" style="font-size: 14px; color: #FED502;">
                         <li>Software za rastersku obradu.</li>
                             <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Očekuje se da će softver za retke radove podržavati rad sa različitim koordinatnim sistemima, raditi s različitim rasterskim formatima koji se koriste u GIS-u (GeoTiff, Erdas Imagine format, ESRI Grid format) i digitalnu obradu slike uopšte. Bilo bi poželjno omogućiti obradu satelitskih slika, rad sa modelom digitalnog terena itd. Najpopularniji softverski paketi koji se koriste za tu svrhu su:</p>
                             <p class="font-weight-bold text-left" style="font-size: 14px; color: #FED502;">LPS (Leica Photogrammetry Suite), eCognition, ESRI ...</p>
                         <li>Software za rad sa vektorima.</li>
                             <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Vektorski softver se takođe očekuje da podržava rad sa različitim koordinatnim sistemima i radi sa različitim vektorskim formatima koji se koriste u GIS-u (shapefile, mapinfo, dkf). Rad sa vektori treba da uključuje uređivanje različitih tipova objekata (tačke, linije, poligone) i mogućnost povezivanja sa prostornim bazama podataka. Najpoznatiji programi za rad sa vektori su:</p>
                             <p class="font-weight-bold text-left" style="font-size: 14px; color: #FED502;">Mapinfo, Qgis,ESRI, uDig, GlobalMapper ...</p>
                         <li>(Prostorne) baze podataka</li>
                            <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">MySQL, PostgreSQL, Oracle, MS SQL su najčešće korišćene baze podataka. Naravno, oni imaju podršku za prostorne podatke. Najpoznatiji takav GIS softver je PostGIS, koji se razvija kao prostorna podrška za objektno-relacionu bazu podataka PostgreSQL.</p>
                     </ul>
                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Uglavnom postoje softverski paketi koji uključuju sve tri funkcije.</p>
                      <h4 class="font-weight-bold text-left" style="font-size: 14px; color: #FED502;">Qgis</h4>
                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;"> Prvenstveno radi sa formatom oblika, ili se datoteke čuvaju u tom formatu. Shapefile je set od najmanje tri datoteke sa SHP, SXH i DBF ekstenzijama, i trenutno je najčešće korišćeni vektorski format u GIS-u razvijen zbog interoperabilnosti od strane ESRI. Shapefile sastoji se od geometrijskih oblika (tačka, linije ili poligona) i odgovarajućih tabela. Ova tabela sadrži atribute geometrijskih oblika.</p>

                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Naravno, Qgis vam omogućava da pregledate druge vektorske formate. Pored toga, pruža i pregled različitih formata rastera.</p>

                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Svi podaci su organizovani slojevima i svaka datoteka je u vektorskom ili rasterskom formatu kao jedan sloj. Kada dodaju slojeve, oni su uređeni jedan iznad drugog, ali je moguće promeniti njihov izgled, kao i svojstva prikaza (zavisno od vrste sloja, tj. Da li je to raster ili vektor). Moguće je snimiti trenutno stanje (laiout laiout i njihova svojstva) u datoteku koja se zove projekat, i ima ekstenziju .Qgis. Naravno, za svaki sloj i projekat definirana je odgovarajuća projekcija.</p>

                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Vektorski slojevi sadrže predmete koji su istog tipa tj. tačke ili linije ili poligone i odgovarajuće atribute. Ovi slojevi se mogu uređivati (dodati / modifikovati / brisati objekte ili operacije koje se mogu izvršiti u zavisnosti od vrste predmeta koje sloj sadrži, tj. Da li su objekti, linije ili poligoni objekti).</p>
                      <p class="font-italic text-left" style="font-size: 14px; color: #FED502;">Alati su podeljeni u nekoliko grupa:</p>
                      <ul class="font-italic text-left" style="font-size: 14px; color: #FED502;">
                           <li>Navigation tools - such as zooming (+/-), shifting, and the like</li>
                           <li>Alati za digitalizaciju - kreirajte nove objekte, brišite ih, promenite 
                               ih. Svaka uređivanje počinje odabirom naredbe za početak uređivanja, a takođe se završava sa naredbom za kraj uređaja kada se registruje novo stanje.</li>
                           <li>Alatke atributa - Omogućava vam da izaberete objekte, promenite atribute,
                               identifikovati objekte i tako daljes.</li>
                           <li>Alati za upravljanje slojevima - omogućavaju vam da dodate nove vektorske 
                               i rasterske slojeve,kreirati nove vektorske slojeve, povezati se sa prostornom bazom podataka itd.</li>
                     </ul>
                  

                </div>
             </div> <!-- end row div-->
         </div> <!-- end container fluid div-->
        

         <div class="container-fluid text-center shadow-lg p-3 mb-5 rounded" style="background-color: #06342D;"> <!-- #91D798-->
           
         <h3><a <?php if(logged_in()): ?> href="index.phtml" <?php endif; ?> style="color: #FED502;">ABOUT ESTAVELA PAGE</a></h3>

              
         </div> <!--end container-fluid-->

         <div class="row shadow p-3 mb-5 bg-white rounded">   <!--start row div-->
               <div class="col-sm-4">
                  <a href="images/estavela_profil1.jpg"><img src="images/estavela_profil1.jpg" class="rounded"  width="320"/></a>
                  <h4>Projekat monitoringa erozionih procesa na plažama u Crnoj Gori</h4>
                  <p class="font-italic" style="font-size: 14px"><a class="text-success" <?php if(logged_in()): ?> href="downloads/monitoring04-06.pdf" <?php endif; ?>>
                      Projekat monitoringa erozionih procesa na plažama u Crnoj Gori, plažama Mogren, Przno, Sveti Stefan i Petrovac od 2004. do 2011. godine</a></p>

                  <ul class="font-italic text-success" style="font-size: 14px">

                     <li><a class="text-success" <?php if(logged_in()): ?> href="downloads/monitoring_seminar.pdf" <?php endif; ?>>Izrada priručnika za sprovođenje projekta praćenja plaže u Crnoj Gori</a></li>

                     <li><a class="text-success" <?php if(logged_in()): ?> href="downloads/clanak_monitoring_plaza_Sava_Petkovic.pdf"> <?php endif; ?>Prikupljanje raspoloživih podataka o klimatskim karakteristikama, vetrovima, talasima i drugim relevantnim prirodnim faktorima duž crnogorskog primorja</a></li>

                     <li><a class="text-success" <?php if(logged_in()): ?> href="downloads/presentation_monitoring_04_05.pdf" <?php endif; ?>>Prikupljanje podataka o dosadašnjim istraživanjima karakteristika erozionih procesa i stabilnosti crnogorskih plaža</a></li>

                     <li><a class="text-success" <?php if(logged_in()): ?>href="downloads/mogren_1931.jpg" <?php endif; ?>>Prikupljanje svih raspolozivih podloga, podataka, starih mapa i fotografija o nekadašnjem pojavljivanju crnogorskih plaža</a></li>
                     <li><a class="text-success" href="index.phtml">Izrada baze podataka rezultata merenja i osmatranja promena na odabranim plažama</a></li>
                     <li><a class="text-success" href="index.phtml">Izrada periodičnih izveštaja</a></li>
                  </ul>
               </div>
               <div class="col-sm-4">
                  <!-- <a href="#"><img src="images/steve-halama-770717-resize.jpg" class="img-responsive img-circle margin"  width="320" height="213"/></a> -->

                  <h4><a href="index.phtml">Razvoj projekata u okviru ekološkog inženjerskog okruženja</a></h4>
                
                  <ul class="font-italic text-success" style="font-size: 14px">
                      <li>ekoloski inzenjering</li>
                      <li>regulisanje poplava</li>
                      <li>zaštitu od erozije i melioracije šuma i poljoprivrednih površina</li>
                      <li>zaštita od erozije morske obale i vodnih tela</li>
                      <li>forests and waters</li> 
                      <li>regulacija bujicnih vodotokova</li>
                      <li>zaštita životne sredine</li>
                      <li>sekundarni lukobrani</li>
                      <li>studija izvodljivosti pri regulaciji priobalja i velikih voda</li>
                      <li>projekti zaštite šuma</li>
                      <li>erozija zemljista</li>
                      <li>degradacija šumskih staništa</li>
                      <li>protiv-pozarna zastita, pošumljavanje</li>
                      <li>konzervacijazemljista</li>
                          
                 </ul>

               </div>

               <div class="col-sm-4">
                  <!-- <a href="#"><img src="images/tomas-yates-770192-resize.jpg" class="img-thumbnail"  width="320" height="210"/></a> -->

                  <h4 class="text-primary">Projekti Estavela :</h4>
                  
                  <ul class="font-italic" style="font-size: 14px">
                      <li><a href="index.phtml" class="text-success">Katastar Bujicnih vodotoka za JP Morsko Dobro Budva</a></li>
                      <li><a href="index.phtml" class="text-success">Projekti zaštite priobalnog pojaseva od erozije zemljišta i degradacije šumskih staništa</a></li>
                      <li><a href="index.phtml" class="text-success">Recenzija za Dukley Marinu Budva</a></li>
                      <li><a href="index.phtml" class="text-success">protupozarni projekti,pošumljavanje, očuvanje zemljišta</a></li>
                      <li><a href="index.phtml" class="text-success">Projekti za plansku eksploataciju šumskog zemljišta u priobalnoj zoni</a></li>
                      <li><a href="index.phtml" class="text-success">Izrada Studije za pripremu izmena Glavnog projekta lucice Kacema Opština Ulcinj</a></li>
                      <li><a href="index.phtml" class="text-success">Studija regulacije vodnih tela(opština Kotor)</a></li>
                      
                      <li><a href="index.phtml" class="text-success">
                      Studija o mogućnostima poboljšanja cirkulacije vode u zalivu ( Pržno plaza )</a></li>
                      <li><a href="index.phtml" class="text-success">Studija zastite obale i izgradnja obalnog zida na plaži (Pržno)</a></li>
                      <li><a href="index.phtml" class="text-success">Projekt izgradnje i gradske marine u Herceg Novom - sekundarna lukobran Herceg Novi</a></li>
                      <li><a href="index.phtml" class="text-success">Projekat prihranjivanja peska na plaži Zavala - Budva</a></li>
                      <li><a href="index.phtml" class="text-success">regulacija obale u Lipcima-Kotor i izgradnja male džepne plaže</a></li>
                      <li><a href="index.phtml" class="text-success">Konceptualni dizajn za obalu u zalivu Kamenovo</a></li>
                      <li><a href="index.phtml" class="text-success">Studija analiza planskog rešenja za pristanista u Čanju - Bar</a></li>                    
                           
                  </ul>
               </div>

         </div> <!-- end row div-->

         
            
  </div> <!-- end jumbotron div -->


<?php  include("includes/footer.php") ?>

