<?php
class account{

    public function account_table($con){
        $accountSql = mysqli_query($con, "SELECT * FROM account");

        while ($accountList = mysqli_fetch_array($accountSql)) {
            $branchSql = mysqli_query($con, "SELECT * FROM branch where id='{$accountList['branch']}'");
            $branch = mysqli_fetch_array($branchSql);
            ?>
            <tr>
                <td><?php echo $accountList['id'] ?></td>
                <td><?php echo $accountList['username'] ?></td>
                <td><?php echo $accountList['first_name'].' '.$accountList['middle_name'].' '.$accountList['last_name'] ?></td>
                <td><?php echo $accountList['address'] ?></td>
                <td><?php echo $branch['city'] ?></td>
                <td><?php echo $accountList['designation'] ?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-button">
                            <i class="fas fa-bars icon"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="update_account.php?id=<?php echo $accountList['id'] ?>">Edit</a>
                            <a href="#">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php
        }
    }

    public function account_details($con,$id){
        $id = mysqli_real_escape_string($con, $id);

        // Prepare and execute the SQL query
        $accountSql = mysqli_query($con, "SELECT 
        * FROM account WHERE id = '$id';
    
    ");

        // Check if the query was successful
        if (!$accountSql) {
            die("Query failed: " . mysqli_error($con));
        }

        // Fetch the account details as an associative array
        $accountDetail = mysqli_fetch_assoc($accountSql);

        // Check if the account was found
        if ($accountDetail === null) {
            return null; // account not found
        }

        return $accountDetail;

    }

}