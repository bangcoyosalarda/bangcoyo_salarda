<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>

    <style>
       
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        session_start();
        include("config.php");

      
        if(isset($_GET['id'])) {
            $id = $_GET['id'];

     
            $query = "SELECT * FROM `student_information` WHERE `id` = $id";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run) > 0) {
                $row = mysqli_fetch_assoc($query_run);
               
                ?>
                <h1>Student Details</h1>
                <p><strong>ID:</strong> <?php echo $row['id']; ?></p>
                <p><strong>Student ID:</strong> <?php echo $row['student_id']; ?></p>
                <p><strong>Full Name:</strong> <?php echo $row['fname'] . ' ' . $row['mname'] . ' ' . $row['lname']; ?></p>
                <p><strong>Birthday:</strong> <?php echo $row['birthday']; ?></p>
                <p><strong>Address:</strong> <?php echo $row['address']; ?></p>
                <p><strong>Date Created:</strong> <?php echo $row['dateCreated']; ?></p>
                <a href="index.php" class="btn btn-primary">Back to Student List</a>
                <?php
            } else {
                echo "Student not found.";
                header("Location: index.php? msg=Successfully Deleted");
            }
        } else {
            echo "Invalid ID.";
        }
        ?>
    </div>
</body>
</html>
