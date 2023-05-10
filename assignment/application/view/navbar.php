<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Footer</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar_coca_cola">
        <div class="container-fluid">
          <!-- Logo brand -->
          <div class="logo">
            <a class="home_button navbar-brand" href="#">
              <h1>1</h1>
              <h1>oca</h1>
              <h2>Cola</h2>
              <h3>Revitalize</h3>
              <p>Feel the taste, taste the feeling</p>
            </a>
          </div>

          <!-- Collapsible Navbar Menu Icon -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Link Menu item button -->
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <!-- Links -->
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <div class="form-check form-switch m-2">
                  <input onclick="toggleDarkMode(checked)" class="form-check-input" type="checkbox" role="switch" id="dark_mode_switch">
                  <label for="dark_mode_switch">Dark Mode</label>
                </div>
              </li>
              <li class="nav-item">
                <a class="home_button nav-link" href="#">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="home_button nav-link" href="#about">
                  About
                </a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" role="button" data-bs-toggle="collapse" href="#collapseDrinks">
                  Drinks
                </a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <!-- Drinks selection dropdown -->
    <div class="collapse" id="collapseDrinks">
        <div class="drink_selection">
          <!-- Drink selection -->
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><div id="selection_cola"></div></li>
            <li class="list-group-item"><div id="selection_diet_cola"></div></li>
            <li class="list-group-item"><div id="selection_drpepper"></div></li>
            <li class="list-group-item"><div id="selection_fanta"></div></li>
            <li class="list-group-item"><div id="selection_oasis"></div></li>
            <li class="list-group-item"><div id="selection_sprite"></div></li>
          </ul>
        </div>
    </div>
</body>

</html>