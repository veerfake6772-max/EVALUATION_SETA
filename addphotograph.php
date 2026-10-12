<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $userid =$_SESSION['uid'];
    $title = $_POST["title"];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $image_name = $_FILES["image"]["name"]; 
    $description = $_POST['description'];
    move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/$image_name");

    $sql = $conn->prepare("insert into photographs(user_id, photo_title,photographer_name, category, description,image)values(?,?,?,?,?,?) ");

    $sql->bind_param('isssss',$userid,$title,$name, $category,$description,$image_name);
    if ($sql->execute()) {
        header("location:dashboard.php");
    }
}

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
          <h3 class="text-center"> Add Photograph</h3>
        </header>
        <main>
            <div
                class="container col-5"
            >
               <form method="POST" enctype="multipart/form-data" >
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Title</label>
            </div>
            

            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="category"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Category</label>
            </div>
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="description"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Description</label>
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Choose file</label>
                <input
                    type="file"
                    class="form-control"
                    name="image"
                    id=""
                    placeholder=""
                    aria-describedby="fileHelpId"
                />
                
            </div>
            
            <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>
            

               </form>
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
