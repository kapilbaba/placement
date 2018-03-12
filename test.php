<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="category">Select catagory:</label>
        <?php
        include 'core/database/connection_db.php';
        $query = $conn->query("SELECT * FROM job_category");

        $rowCount = $query->num_rows;
        ?>
        <select name="usercategory" class="form-control" id="category">
            <option value="">select category</option>
            <?php
            if($rowCount > 0){
                while($row = $query->fetch_assoc()){
                    echo '<option value="'.$row['job_categoryid'].'">'.$row['job_categoryname'].'</option>';
                }
            }else{
                echo '<option value="">Catrgory not available</option>';
            }
            ?>

        </select>
    </div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="usersubcategory">Select sub catagory:</label>
        <select name="user-sub-category" class="form-control" id="sub-category">
            <option value="">select sub category</option>

        </select>
    </div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="special">Specialization :</label>
        <select name="userspecial" class="form-control" id="special">
            <option  value="">select specialty</option>

        </select>
    </div>
</div>