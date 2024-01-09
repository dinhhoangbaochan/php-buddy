<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Blog</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

  <div class="">
    <header>
      <h1>Welcome to My Blog!</h1>
    </header>

    <nav>
      <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>

        <?php if ( Auth::isLoggedIn() ) : ?>
          <li class="nav-item"><a class="nav-link" href="/">Admin</a></li>
          <li class="nav-item"><a class="nav-link" href="/">Logout</a></li>
        <?php else : ?>
          <li class="nav-item"><a class="nav-link" href="/">Login</a></li>
        <?php endif; ?>

        <li class="nav-item"><a class="nav-link" href="/">Contact</a></li>
      </ul>
    </nav>
  </div>