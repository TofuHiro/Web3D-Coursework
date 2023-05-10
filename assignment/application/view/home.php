<!doctype html>
<html lang="en">
  <head>
    <title>Coca Cola Revitalize</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/x3dom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="assets/fonts/LOKICOLA.TTF" rel="stylesheet">
    <link href="assets/fonts/Open_Sans/OpenSans-VariableFont_wdth,wght.ttf" rel="stylesheet">
    <link href="assets/fonts/Oswald/Oswald-VariableFont_wght.ttf" rel="stylesheet">
    <script src="assets/fonts/fontawesome-free-6.2.1-web/js/fontawesome.js"></script>
    <script src="assets/fonts/fontawesome-free-6.2.1-web/js/brands.js"></script>
  </head>

  <body>
    <!-- Navigation bar -->
    <div id ="navbar"><?php include "navbar.php" ?></div>


    <!-- Main Content -->
    <!-- Home --> 
    <div id="home_content" class="container-fluid main_contents">
      <!-- Background Image --> 
      <img id="home_image" src=<?php echo $home_background_image ?> class="rellax img-fluid" data-rellax-speed="-10" alt="...">
      <!-- Intro Text --> 
      <div class="row">
        <div class="col-sm-12">
          <div id="main_text" class="col-xs-12 col-sm-4">
            <h2><?php echo $brand_title ?></h2>
            <h3><?php echo $brand_foundery ?></h3>
            <p><?php echo $brand_intro_text ?></p>
          </div> 
        </div>
      </div>
    </div>

    <!-- Image Display -->
    <div id="image_display" class="container-fluid main_contents">
      <div class="row">
        <img src=" " alt="..." class="rellax" data-rellax-speed="-8">
        <!-- Gradient Overlay -->
        <div class="overlay w-100"></div>
      </div>
      <!-- Carousel Gallery Button -->
      <?php include "carouselButton.php" ?>
    </div>

    <!-- X3D Model Display -->
    <div id="x3d_model_display" class="container-fluid model_display">
      <div class="card w-100 h-100">
        <x3d id="x3d"> 
          <scene>
            <!-- Models to be loaded -->
            <switch id="modelswitcher" whichChoice="0">
              <inline id="model_cocacola" nameSpaceName="cola" mapDEFToID="true" url=""> </inline> 
              <inline id="model_dietcoke" nameSpaceName="diet" mapDEFToID="true" url=""> </inline> 
              <inline id="model_drpepper" nameSpaceName="pepper" mapDEFToID="true" url=""> </inline> 
              <inline id="model_fanta" nameSpaceName="fanta" mapDEFToID="true" url=""> </inline> 
              <inline id="model_oasis" nameSpaceName="oasis" mapDEFToID="true" url=""> </inline> 
              <inline id="model_sprite" nameSpaceName="sprite" mapDEFToID="true" url=""> </inline> 
            </switch>
            <!-- Model Cam and Lights -->
            <!-- Load a seperate instance of Lights and Cams to prevent multiple from each model file -->
            <inline id="scene_config" nameSpaceName="scene" mapDEFToID="true" url="assets/models/x3d/scene_config.x3d"> </inline> 
          </scene> 
        </x3d>  
        <!-- Carousel Gallery Button -->
        <?php include "carouselButton.php" ?>
      </div>
    </div>

    <!-- glTF Model Display -->
    <div id="glTF_model_display" class="container-fluid model_display">
      <div class="card">
        <model-viewer alt="..." src="" exposure="1" skybox-image="" ar shadow-intensity="1" camera-controls touch-action="pan-y"></model-viewer>
        <!-- Carousel Gallery Button -->
        <?php include "carouselButton.php" ?>
      </div>
    </div>
    
    
    <!-- Info Content -->
    <!-- About Info -->
    <section id="about">
      <!-- Down Arrow -->
      <a class="down_button" href="#about">↓</a>

      <hr>
      <!-- About Info -->
      <div class="row">
        <div class="card shadow">
          <div class="card-body">
            <h3><?php echo $about_title ?></h3>
            <p><?php echo $about_text ?></p>
          </div>
        </div>
      </div>
    
      <hr>
      <!-- Drinks Brief Info -->
      <div id="about_cola"></div>
      <hr class="border">
      <div id="about_diet_cola"></div>
      <hr class="border">
      <div id="about_drpepper"></div>
      <hr class="border">
      <div id="about_fanta"></div>
      <hr class="border">
      <div id="about_oasis"></div>
      <hr class="border">
      <div id="about_sprite"></div>
    </section>

    <!-- Drink Information Section -->
    <section id="drink_info">
      
      <hr>
      <!-- Image Info -->
      <div id="image_panel" class="row">
        <div class="card shadow">
          <div class="card-body">
            <!-- Drink Name --> 
            <h3></h3>
            <!-- Image Info --> 
            <p></p>
            <!-- Switches to Model view --> 
            <a href="#" class="x3d_button float-end btn btn-danger mx-1">To X3D Model</a>
            <a href="#" class="glTF_button float-end btn btn-danger mx-1">To glTF Model</a>
          </div>
        </div>
      </div>
      <!-- Model Info -->
      <div id="x3d_model_panel">
        <!-- Controls --> 
        <div class="card shadow">
          <div class="row card-body">
            <h3>Model Controls</h3>
            <!-- Lights --> 
            <div class="row col">  
              <!-- Top Lights --> 
              <div class="col">
                <h5>Top Lights</h5>
                <!-- North West --> 
                <div class="form-check form-switch">
                  <input onclick="toggleLight('LA_Top_NW', checked)" class="form-check-input" type="checkbox" role="switch" id="light_TNW" checked>
                  <label for="light_TNW">North West</label>
                </div>
                <!-- North East --> 
                <div class="form-check form-switch">
                  <input onclick="toggleLight('LA_Top_NE', checked)" class="form-check-input" type="checkbox" role="switch" id="light_TNE" checked>
                  <label for="light_TNE">North East</label>
                </div>
                <!-- South East --> 
                <div class="form-check form-switch">
                  <input onclick="toggleLight('LA_Top_SE', checked)" class="form-check-input" type="checkbox" role="switch" id="light_TSE" checked>
                  <label for="light_TSE">South East</label>
                </div>
                <!-- South West --> 
                <div class="form-check form-switch">
                  <input onclick="toggleLight('LA_Top_SW', checked)" class="form-check-input" type="checkbox" role="switch" id="light_TSW" checked>
                  <label for="light_TSW">South West</label>
                </div>
              </div>
              <!-- Bottom Lights --> 
              <div class="col">
                <h5>Bottom Lights</h5>
                <!-- North West --> 
                <div class="form-check form-switch">
                  <input onclick="toggleLight('LA_Bot_NW', checked)" class="form-check-input" type="checkbox" role="switch" id="light_BNW" checked>
                  <label for="light_BNW">North West</label>
                </div>
                <!-- North East --> 
                <div class="form-check form-switch">
                  <input onclick="toggleLight('LA_Bot_NE', checked)" class="form-check-input" type="checkbox" role="switch" id="light_BNE" checked>
                  <label for="light_BNE">North East</label>
                </div>
                <!-- South East --> 
                <div class="form-check form-switch">
                  <input onclick="toggleLight('LA_Bot_SE', checked)" class="form-check-input" type="checkbox" role="switch" id="light_BSE" checked>
                  <label for="light_BSE">South East</label>
                </div>
                <!-- South West --> 
                <div class="form-check form-switch">
                  <input onclick="toggleLight('LA_Bot_SW', checked)" class="form-check-input" type="checkbox" role="switch" id="light_BSW" checked>
                  <label for="light_BSW">South West</label>
                </div>
              </div>
            </div>
            
            <div class="row col">
              <!-- Render Modes --> 
              <div class="col">
                <h5>Render Mode</h5>
                <div class="form-check">
                  <input onclick="changeRender(0)" class="form-check-input" type="radio" name="renderRadios" id="renderRadios1" value="option1" checked>
                  <label class="form-check-label" for="renderRadios1">
                    Normal
                  </label>
                </div>
                <div class="form-check">
                  <input onclick="changeRender(1)" class="form-check-input" type="radio" name="renderRadios" id="renderRadios2" value="option2">
                  <label class="form-check-label" for="renderRadios2">
                    Vertices
                  </label>
                </div>
                <div class="form-check">
                  <input onclick="changeRender(2)" class="form-check-input" type="radio" name="renderRadios" id="renderRadios3" value="option3">
                  <label class="form-check-label" for="renderRadios3">
                    Wireframe
                  </label>
                </div>
              </div>
              
              <div class="col">
                <!-- Animation --> 
                <button class="btn btn-success d-block m-1 disabled">Play Animation</button>
                <!-- Camera Views --> 
                <div class="btn-group d-block m-1">
                  <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Camera View
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" onclick="changeView('Front')" href="#">Front</a></li>
                    <li><a class="dropdown-item" onclick="changeView('Right')" href="#">Right</a></li>
                    <li><a class="dropdown-item" onclick="changeView('Back')" href="#">Back</a></li>
                    <li><a class="dropdown-item" onclick="changeView('Left')" href="#">Left</a></li>
                    <li><a class="dropdown-item" onclick="changeView('Top')" href="#">Top</a></li>
                    <li><a class="dropdown-item" onclick="changeView('Bot')" href="#">Bottom</a></li>
                  </ul>
                </div>
                <!-- glTF Model --> 
                <a href="#" class="glTF_button btn btn-danger m-1">To glTF Model</a>
                <!-- Switches to Image view --> 
                <a href="#" class="drink_button btn btn-danger m-1">To Image</a>
              </div>
            </div>
          </div>
          
        </div>  
          
        <br>
        <!-- Info -->
        <div class="card">
          <div id="x3d_model_info" class="row card-body">
            <h3>Creation Method</h3>
            <p></p>
          </div>
        </div>
      </div>

      <!-- glTF Model Info -->
      <div id="glTF_model_panel">
        <div class="card shadow">
          <!-- Model Controls -->
          <div class="row card-body">
            <h3>Model Controls</h3>
            <div class="row col">
              <div class="col">
                <!-- Shadow Intensity Slider -->
                <label for="shadow_intensity_slider" class="form-label">Shadow Intensity</label>
                <input type="range" class="form-range" min="0" max="1" value="1" step="0.05" id="shadow_intensity_slider">
                <!-- Shadow Softness Slider -->
                <label for="shadow_softness_slider" class="form-label">Shadow Softness</label>
                <input type="range" class="form-range" min="0" max="1" value="1" step="0.05" id="shadow_softness_slider">
                <!-- Exposure Slider -->
                <label for="exposure_slider" class="form-label">Exposure</label>
                <p id="exposure_label"></p>
                <input type="range" class="form-range" min="0" max="10" value="1" step="0.02" id="exposure_slider">
                <!-- Background select -->
                <label for="background_select" class="form-label">Background</label>
                <select id="background_select" onchange="swapBackground(value);" class="form-select" aria-label="Default select example">
                  <option value="0" selected>None</option>
                  <option value="1">Room</option>
                  <option value="2">Skies</option>
                  <option value="3">Night City</option>
                  <option value="4">Lounge</option>
                </select>
              </div>
              <div class="col">
                <!-- Scale Slider -->
                <label for="scale_slider" class="form-label">Scale</label>
                <input type="range" class="form-range" min="0.1" max="1" value="1" step="0.02" id="scale_slider">
                <!-- Time scale Slider -->
                <label for="time_scale_slider" class="form-label">Time Scale</label>
                <p id="time_scale_label"></p>
                <input type="range" class="form-range" min="-2" max="2" value="1" step="0.25" id="time_scale_slider">
                <!-- Animation --> 
                <button onclick="playAnimation()" class="btn btn-success d-block m-1">Play Animation</button>
                <!-- To X3D Model --> 
                <a href="#" class="x3d_button btn btn-danger m-1">To X3D Model</a>
                <!-- Switches to Image view --> 
                <a href="#" class="drink_button btn btn-danger m-1">To Image</a>
              </div>
            </div>
          </div>
          
        </div>

        <br>
        <!-- Info -->
        <div class="card">
          <div id="glTF_model_info" class="row card-body">
            <h3>Creation Method</h3>
            <p></p>
          </div>
        </div>
      </div>
        
      <br>

      <!-- Main Info Body -->
      <div class="container-fluid">
        <div class="row">
          <!-- Nutrition Info --> 
          <div class="col-xs-12 col-sm-4">
            <div class="card">
              <div class="card-body"><p id="nutrition"></p></div>
            </div>
          </div>
          <!-- Main Info --> 
          <div class="col-xs-12 col-sm-8">
            <div class="card">
              <div class="card-body"><p id="info"></p></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <br>

    <!-- Image Modal -->
    <div id="modal">
      <span id="close_modal">&times;</span>
      <img id="modal_content" src="">
    </div>

    <!-- 3D App footer -->
    <?php include "footer.php"?>

    <!-- JavaScript -->
    <script src="js/jquery-3.6.3.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/x3dom-full.js"></script>
    <script src="js/rellax.min.js"></script>
    <script>var rellax = new Rellax('.rellax');</script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.1.1/model-viewer.min.js"></script>

    <!-- Custom Scripts -->
    <script src="scripts/generators/about_drink_generator.js"></script>
    <script src="scripts/generators/drink_selection_generator.js"></script>
    <script src="scripts/generators/model_loader.js"></script>
    <script src="scripts/scrollfade.js"></script>
    <script src="scripts/image_modal.js"></script>
    <script src="scripts/content_swapper.js"></script>
    <script src="scripts/drink_swapper.js"></script>
    <script src="scripts/model_controls.js"></script>
    <script src="scripts/dark_mode.js"></script>
  </body>
</html>