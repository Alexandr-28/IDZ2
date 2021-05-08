<?php
    require_once 'layout/layout_header.php';
    $lg=$_POST['lg'];

    $sql="SELECT * FROM `INFOS` WHERE `Login`=:lg";
    $res=$pdo->prepare($sql);
    $res->execute(['lg'=>$lg]);
    $result=$res->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['oldName']=$lg;
?>


<div class="container col-md-6">
    <form action="inc/edit.php" method="POST">
            <div class="form-group">
                <label for="log" class="control-label col-md-4"></label>
                <div class="col-md-10">
                    <input class="form-control" placeholder="Login" name="logn" id="logn" value="<?php echo decrypt($result[0]['Login'],$private_secret_key);?>">
                </div>
            </div>
                
            <div class="form-group">
                <label for="passw" class="control-label col-md-4"></label>
                <div class="col-md-10">
                    <input class="form-control" placeholder="Password" name="passw" id="passw"  value="<?php echo decrypt($result[0]['Password'],$private_secret_key);?>">
                </div>
            </div>

            <div class="form-group">
                <label for="mail" class="control-label col-md-4"></label>
                <div class="col-md-10">
                    <input class="form-control" placeholder="Other" name='other' id="other" type="text" value="<?php echo decrypt($result[0]['Other'],$private_secret_key);?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-4"></label>
                <div class="col-md-offset-2 col-md-10">
                    <input type="submit" value="Edit" class="btn btn-success"/>
                </div>
            </div>
    </form>
</div>


<?php
    require_once 'layout/layout_footer.php';
?>