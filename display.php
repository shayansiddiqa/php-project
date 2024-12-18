<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <!-- Button to redirect to another page -->
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light"> ADD GUESST</a></button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">id</th>
      <th scope="col"> name</th>
      <th scope="col">email</th>
      <th scope="col">Comment</th>
      <th scope="col">Operation</th>
      

    </tr>
  </thead>
  <tbody>
  <?php
// Establish connection (make sure this is correct in your code)
include 'connect.php'; 

$sql = "SELECT * FROM `crud`";  
$result = mysqli_query($con, $sql);  // Execute query

// Check if query returns rows
if ($result) {
    // Fetch the first row from the result set
    
    while ($row = mysqli_fetch_assoc($result)) {
        $id= $row["id"];
        $name= $row["name"];
        $email= $row["email"];
        $comment= $row["comment"];
        echo'<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$id.'</td>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$comment.'</td>
      <td><button class ="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button></td>
    </tr>';
    }
    

} 
?>


    
  </tbody>
</table>



    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.js"></script>
</body>
</html>
