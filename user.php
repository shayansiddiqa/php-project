<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // Correct SQL query: Remove the single quotes around the table name
    $sql = "INSERT INTO crud (id, name, email, comment) VALUES ('$id', '$name', '$email', '$comment')";

    // Execute the query
    $result = mysqli_query($con, $sql);

    // Check if the query was successful
    if ($result) {
       // echo "Data is inserted successfully.";
       header('location:display.php');
    } else {
        // Display the error message if the query fails
        die("Inserting failed: " . mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Use CDN for Bootstrap CSS for simplicity -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.css">
    <!-- Use MDB (Material Design for Bootstrap) CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.css">
    <!-- Custom styles, if any -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>GUESST BOOK</h2>
    <div class="container my-5">
    <form method="post">
        
       
          <div class="form-group">
            <label >ID</label>
            <input type="text" class="form-control"  placeholder="enter id" name="id" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control"placeholder="Name placeholder" name ="name"autocomplete="off">
          </div>


          <div class="form-group">
          <label>Email address</label>
          <input type="email" class="form-control"  placeholder="enter email" name="email" autocomplete="off">
        </div>
          
        
        
        <div class="form-group">
          <label >Comment</label>
          <textarea class="form-control" rows="3" name="comment" autocomplete="off"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        

      </form> 

    </div>
      
      <script src="https://code.jquery.com/jquery-3.5.1.slim.js"></script>
    <!-- Use Popper.js (required for dropdowns and tooltips) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.js"></script>
    <!-- Use Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.js"></script>
    <!-- Use MDB JS (Material Design Bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.js"></script>
</body>
</html>