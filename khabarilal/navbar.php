<nav class="navbar navbar-expand-md bg-light bsb-navbar bsb-navbar-hover bsb-navbar-caret fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <!-- <img src="./assets/img/bsb-logo.svg" alt="KHABRILAL Logo" width="135" height="44"> -->

      <p style="    font-size: -webkit-xxx-large;
   color:lightgrey;
    text-shadow:2px 3px grey">खबरीलाल</p>
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
      </svg>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#business" onclick="newsChanger('business')">बिज़नेस</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#education" onclick="newsChanger('education')">एजुकेशन</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#entertenment" onclick="newsChanger('entertenment')">मनोरंजन</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#viralNews" onclick="newsChanger('viralNews')">वायरल न्यूज</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">लाइफस्टाइल </a>
            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="accountDropdown">
              <li><a class="dropdown-item" href="#travell" onclick="newsChanger('travell')">ट्रैवल</a></li>
              <li><a class="dropdown-item" href="#fashion" onclick="newsChanger('fashion')">फैशन</a></li>
              <li><a class="dropdown-item" href="#food" onclick="newsChanger('food')">फूड</a></li>

              <!-- <li>
                <hr class="dropdown-divider">
              </li> -->
              <li><a class="dropdown-item" href="#health-bewty" onclick="newsChanger('health')">हैल्थ & ब्यूटी</a></li>
            </ul>
          </li>
          
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#!" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">अन्य</a>
            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="servicesDropdown">
              <li><a class="dropdown-item" href="#national" onclick="newsChanger('national')">राष्टीय समाचार</a></li>
              <li><a class="dropdown-item" href="#regional" onclick="newsChanger('regional')">प्रादेशिक</a></li>
              <li><a class="dropdown-item" href="#politics" onclick="newsChanger('politics')">राजनिती</a></li>
              <li><a class="dropdown-item" href="#automobile" onclick="newsChanger('automobile')">ऑटोमोबाइल</a></li>
              <li><a class="dropdown-item" href="#technology" onclick="newsChanger('technology')">टेक्नोलॉजी</a></li>
              <li><a class="dropdown-item" href="#religion" onclick="newsChanger('religion')">धर्म</a></li>
              <li><a class="dropdown-item" href="#crime" onclick="newsChanger('crime')">जुर्म</a></li>
              <li><a class="dropdown-item" href="#world" onclick="newsChanger('world')">वर्ल्ड</a></li>
              <li><a class="dropdown-item" href="#sports" onclick="newsChanger('sports')">स्पोर्ट्स</a></li>
              <li><a class="dropdown-item" href="#agriculture" onclick="newsChanger('agriculture')">कृषि</a></li>
              <li><a class="dropdown-item" href="#horoscope" onclick="newsChanger('horoscope')">राशिफल</a></li>
              <li><a class="dropdown-item" href="#science" onclick="newsChanger('science')">साइंस</a></li>



            </ul>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#contact" onclick="pageChanger('contact')">संपर्क</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>