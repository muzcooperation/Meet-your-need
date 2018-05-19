<!doctype html>
<html>
    <head>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

        <style>
          #map {
            height: 100%;
          }
          html, body {
            height: 100%;
            margin: 0;
            padding: 0;
          }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
          <!-- Brand -->
          <a class="navbar-brand" href="#">Logo</a>

          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Link 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link 2</a>
            </li>
            <div class="dropdown mx-4">
              <select id='places' class="form-control">
                <option selected disabled>Select Place</option>
                <option value="1">University</option>
                <option value="2">Hospital</option>
                <option value="3">Hotel</option>
                <option value="4">Restranut</option>
              </select>
            </div>
          </ul>

          <form class="form-inline" action="">
            <input class="form-control mr-sm-2" type="text" placeholder="Radius">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </nav>
        
        
        @yield('content')
        
    </body>
</html>