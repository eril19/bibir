<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>
      @yield('Judul')
    </title>
  </head>
  <body>
    <section>
        <div class="header text-center bg-dark " style="font-size: 50px; color: white ">
            Happy Book Store
        </div>
    </section>

    <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container" >
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto" >
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/Category" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="/horror">Horror</a></li>
                      <li><a class="dropdown-item" href="/romance">Romance</a></li>
                      <li><a class="dropdown-item" href="/scifi">Sci-fi</a></li>
                      <li><a class="dropdown-item" href="/mystery">Mystery</a></li>
                      <li><a class="dropdown-item" href="/thriller">Thriller</a></li>
                      <li><a class="dropdown-item" href="/action">Action</a></li>
                      <li><a class="dropdown-item" href="/comedy">Comedy</a></li>
                      <li><a class="dropdown-item" href="/drama">Drama</a></li>
                      <li><a class="dropdown-item" href="/history">History</a></li>
                      <li><a class="dropdown-item" href="/fantasy">Fantasy</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Contact">Contact</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
    </section>

    <section>
        <div class="container" style="margin-top: 20px;">
            <div class="row" style="justify-content: center">
            <div class="col-md-6" style="background-color: black; color: white">
                <h1>Book List</h1>
            </div>
            <div class="col-md-2 ms-2" style="background-color:black; color: white">
                <h1>Category</h1>
            </div>
        </div>
        <div class="row" style="justify-content: center">
            <div class="col-md-6">
              @yield('isiTabel')
            </div>
            <div class="col-md-2 ms-2">
                <ul class="baris" style="list-style-type: none">
                    <li><a href="/horror">Horror</a></li>
                    <li><a href="/romance">Romance</a></li>
                    <li><a href="/scifi">Sci-fi</a></li>
                    <li><a href="/mystery">Mystery</a></li>
                    <li><a href="/thriller">Thriller</a></li>
                    <li><a href="/action">Action</a></li>
                    <li><a href="/comedy">Comedy</a></li>
                    <li><a href="/drama">Drama</a></li>
                    <li><a href="/history">History</a></li>
                    <li><a href="/fantasy">Fantasy</a></li>
                </ul>
            </div>
        </div>
        </div>
    </section>
    

    <section>
      
        <div class="footer bg-dark" style="color: white; margin-top: 222px; padding: 10px 0; display: flex; justify-content: center">
          
            &copy; Happy Book Store 2021
          
        </div>
      
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>