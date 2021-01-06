<?php
    include "validate_customer.php";
    include "header.php";
    include "customer_navbar.php";
    include "customer_sidebar.php";
    include "session_timeout.php";

    $id = $_SESSION['loggedIn_cust_id'];
    $amt = mysqli_real_escape_string($conn, $_POST["amt"]);
    $pin = mysqli_real_escape_string($conn, $_POST["pin"]);

    $sql0 = "SELECT loan_amount FROM loan".$id." ORDER BY trans_id DESC LIMIT 1";
    $result = $conn->query($sql0);
    $row = $result->fetch_assoc();
    $loan = $row["loan_amount"];

    
    $err_no = -1;

    $sql_pin = "SELECT * FROM customer WHERE cust_id=".$id." AND pin='".$pin."'";
    $result_pin = $conn->query($sql_pin);

    if (($result_pin->num_rows) > 0) {
        $final_loan = $loan + $amt;
        
             $sql1 = "INSERT INTO loan".$id." VALUES(
                        NULL,
                        NOW(),
                        'Loan Balance',
                        '$amt',
                        '$final_loan'
                    )";

            if (($conn->query($sql1) === TRUE)) {
                $err_no = 0;
            }

           else {
                $err_no = 1;
       }

   }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="action_style.css">
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <?php
            if ($err_no == -1) { ?>
                <p id="info"><?php echo "Connection Error ! Please try again later.\n"; ?></p>
            <?php } ?>

            <?php
            if ($err_no == 0) { ?>
                <p id="info"><?php echo "Request Successful !\n"; ?></p>
            <?php } ?>

            <?php
            if ($err_no == 1) { ?>
                <p id="info"><?php echo "Request Unsuccessful !\n"; ?></p>
            <?php } ?>

           
        </div>

        <div class="flex-item">
            <a href="./customer_loan.php" class="button">Go Back</a>
        </div>
    </div>

</body>
</html>
