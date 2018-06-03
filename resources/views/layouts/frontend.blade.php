<!doctype html>
<html>
    <head>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

        <style>
          #map {
            height: 60%;
            width: 100%;            
          }
          html, body {
            height: 100%;
            margin: 0;
            padding: 0;
          }

          .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0;
            background-color: #fff;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
          }

          .home-div {
            margin-top: 80px;
          }

          @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
          }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
            <a class="navbar-brand" href="#">Meet A Need</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav">
                <div class="dropdown mx-4">
                  <select id='places' class="form-control">
                    <option selected disabled>Select Place</option>
                    <option value="1">University</option>
                    <option value="2">Hospital</option>
                    <option value="3">Hotel</option>
                    <option value="4">Restaurant</option>
                  </select>
                </div>
              </ul>

              <div class="form-inline">
                <button onclick="searchNearByLocations()" class="btn btn-success" type="submit">Search</button>
              </div>

              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        
        
        @yield('content')
      
      <footer class="container-fluid">
        <nav class="navbar fixed-bottom bg-dark">
          <p class="text-center text-white">
            &copy; Meet A Need
          </p>
        </nav>
      </footer> 
    </body>
</html>