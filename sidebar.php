<div class="col-lg-4">
    <h4>Categories:</h4>
    <br>
    <?php 
        require_once('./dbconnector.php');
        $sql = "SELECT * FROM category";
        $result = pg_query($connection,$sql);
        if (pg_num_rows($result) > 0) {
        // output data of each row
        while($key = pg_fetch_assoc($result)) {
            $catid = $key['catid'];
            $catname = $key['catname'];
    ?>
    <div class="list-group">
            <a href="catName.php?catId=<?= $key['catid']?>" class="list-group-item bg-secondary text-white"><?php echo $key['catname'] ?></a>
        <?php }} ?>
    </div>

    <div style="padding-top: 3rem">
        <h4>Log in:</h4>
        <br>
        <div class="card">
            <div class="card-body">
              	<p><strong>Login to our website</strong></p>
                <p>Once a week we will have a summary of the most useful news</p>
    			<?php require_once("rightnav.php") ?>
		    </div>
       </div>
    </div>
</div>