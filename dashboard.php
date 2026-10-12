
<?php
include'db.php';

$photo = $conn->query("select photographs.*, users.id from photographs join users on photographs.user_id = users.id");


?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
           <nav
            class="navbar navbar-expand-sm navbar-light bg-light"
           >
            <div class="container">
                <a class="navbar-brand" href="#"> 
                    <?php if (isset($_SESSION['uid'])) {
                        echo "HELLO ". strtoupper($_SESSION['uname']);
                    }
                    else{
                        echo "HELLO";
                    }?>
                </a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" aria-current="page"
                                >Home
                                <span class="visually-hidden">(current)</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Add Photograph</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#">Manage Photograph</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#">User Management</a>
                        </li>
                        
                    </ul>
                    <form action="" class="mx-2">
                        <input
                            class="form-control me-sm-2"
                            type="text"
                            placeholder="Search"
                        />
                    </form>
                    <form action="">
                        <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="#"
                            role="button"
                            >CSV</a
                        >
                        <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="#"
                            role="button"
                            >PDF</a
                        >
                        
                        
                    </form>
                    <form class="d-flex my-2 mx-2 my-lg-0">
                        
                        <button
                            class="btn btn-outline-success my-2 my-sm-0"
                            type="submit"
                        >
                            Logout
                        </button>
                    </form>
                </div>
            </div>
           </nav>
           
        </header>
        <main>
<h3 class="text-center my-4">Photographs Dashboard</h3>
        <div
            class="container my-4"
        >
            <div class="row  align-items-center g-3" >
                <?php while ($row = $photo->fetch_assoc()) {?>
                <div class="card col-4 p-1" >
                    <img class="card-img-top" src="uploads/" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">Title:-. <?=  $row['photo_title']?></h4>
                        <small>Photographer Name:- . <?=  $row['photographer_name']?></small>
                        <p class="card-text">Description:- .<?=  $row['description']?></p>
                    </div>
                </div>
                <?php  } ?>
                
            </div>
        </div>
        
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
