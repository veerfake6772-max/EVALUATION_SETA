
<?php
include'db.php';

$user = $conn->query("select * from users");


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
            <h3 class="text-center my-4">Registered Users</h3>
        </header>
        <main>
            <div
                class="container"
            >
               <div
                class="table-responsive"
               >
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">PHOTO ID</th>
                            <th scope="col">TITLE</th>
                            <th scope="col"> PHOTOGRAPHER NAME</th>
                           
                            <th scope="col"> ACTION</th>
                            <th scope="col"> ACTION</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $user->fetch_assoc()) {?>
                        <tr class="">
                            <td scope="row"> <?= $row['id'] ?></td>
                       
                            <td><?= $row['full_name'] ?></td>
                            <td><?= $row['email'] ?></td>
                           
                            <td>
                                <a
                                    name=""
                                    id=""
                                    class="btn btn-primary"
                                    href="#"
                                    role="button"
                                    >EDIT</a
                                >
                               
                                
                                
                            </td>
                            <td> <a
                                    name=""
                                    id=""
                                    class="btn btn-primary"
                                    href="#"
                                    role="button"
                                    >Delete</a
                                ></td>
                        </tr>
                       
                        <?php }?>
                    </tbody>
                </table>
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
