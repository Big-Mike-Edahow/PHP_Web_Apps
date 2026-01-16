<?php
# delete.php

# Process delete operation after confirmation.
if(isset($_POST["user_id"]) && !empty($_POST["user_id"])){
    # Include config file.
    require_once "config.php";
    
    # Prepare a delete statement.
    $sql = "DELETE FROM employees WHERE user_id = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        # Bind variables to the prepared statement as parameters.
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        # Set parameters.
        $param_id = trim($_POST["user_id"]);
        
        # Attempt to execute the prepared statement.
        if(mysqli_stmt_execute($stmt)){
            # Records deleted successfully. Redirect to landing page.
            header("Location: index.php?status=success");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    # Close statement.
    mysqli_stmt_close($stmt);
    
    # Close connection.
    mysqli_close($conn);
}
