<?php
    require_once 'layout/layout_header.php';
    require_once 'code.php';
?>

<div class="container body-content">
    <table class="table table-striped" id="tbl">
        <tr>
            <th>Login</th>
            <th>Password</th>
            <th>Other</th>
            <th>Actions</th>
        </tr>
        
        <?php
            $sql="SELECT * FROM `INFOS`";
            $res=$pdo->query($sql);
            
                while($row=$res->fetch()){
                    echo "<tr>";
                    echo "<td>".decrypt($row["Login"],$private_secret_key)."</td>";
                    echo "<td>".decrypt($row["Password"],$private_secret_key)."</td>";
                    echo "<td>".decrypt($row["Other"],$private_secret_key)."</td>";
                    echo "<td><button class='btn btn-outline-danger' onclick='delete_click(`".decrypt($row["Login"],$private_secret_key)."`, `".$row["Login"]."`)'>Delete</button>  <form method='POST' action='editUser.php'><input name='lg' type='hidden' value='".$row['Login']."'><button type='submit' class='btn btn-outline-primary userItem'>Edit</button></form></td>";
                    echo "</tr>";
                }
            
        ?>
    </table>
</div>
    
    <div class="container col-md-6">
        <form method="POST" action="inc/adduser.php">
            <div class="form-group">
                <label for="log" class="control-label col-md-4"></label>
                <div class="col-md-10">
                    <input class="form-control" placeholder="Login" name='logn' id='logn'>
                </div>
            </div>
                
            <div class="form-group">
                <label for="passw" class="control-label col-md-4"></label>
                <div class="col-md-10">
                    <input class="form-control" placeholder="Password" name="passw" id="passw" type="password">
                </div>
            </div>

            <div class="form-group">
                <label for="mail" class="control-label col-md-4"></label>
                <div class="col-md-10">
                    <input class="form-control" placeholder="Other" name='other' id="other" type="text">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-4"></label>
                <div class="col-md-offset-2 col-md-10">
                    <input value="Add" class="btn btn-success" type="submit" />
                </div>
            </div>
        </form>
    </div>
   

<?php
    require_once 'layout/layout_footer.php';
?>

