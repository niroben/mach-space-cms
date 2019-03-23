<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Dashboard - Mach-space website admin tools</title>
</head>
<body>
<!-- NAVIGATION -->
    <div style="height: 10px; background: #ffffff;"></div>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a href="#" class="navbar-brand">MACH SPACE</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapseCMS">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarcollapseCMS">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link"><i class="fas fa-chart-line text-success"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="categories.php" class="nav-link"><i class="fas fa-bookmark text-success"></i> Categories</a>
                </li>
                <li class="nav-item">
                    <a href="posts.php" class="nav-link"><i class="fas fa-pen text-success"></i> Posts</a>
                </li>
                <li class="nav-item">
                    <a href="comments.php" class="nav-link"><i class="fas fa-comments text-success"></i> Comments</a>
                </li>
                <li class="nav-item">
                    <a href="settings.php" class="nav-link"><i class="fas fa-cog text-success"></i> Settings</a>
                </li>
                <li class="nav-item">
                    <a href="adminuser.php" class="nav-link"><i class="fas fa-user text-success"></i> My Account</a>
                </li>
                <li class="nav-item">
                    <a href="blog.php?page=1" class="nav-link"><i class="fas fa-globe text-success"></i> Live Blog</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt text-danger"></i> Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
<!-- NAVIGATION END -->
<!---HEADER--->
    <header class="bg-dark text-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1>Dashboard</h1>
                </div>
            </div>
        </div>
    </header>




<!---HEADER END--->
    <div style="height: 10px; background: #ffffff;"></div>
<!-- FOOTER -->
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">Mach Space Ltd. &copy; <span id="currentyear"></span></p>
                </div>
            </div>

        </div>
    </footer>
<!-- FOOTER END -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script>
        $('#currentyear').text(new Date().getUTCFullYear());
    </script>

</body>


</html>


