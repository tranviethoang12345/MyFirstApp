<div class="col-lg-4">
        <h4>Categories:</h4>
        <br>
        <?php 
            require_once('./dbconnector.php');
            $conn = new DBConnector();
            $sql = "SELECT * FROM category";
            $rows = $conn ->runQuery($sql);
            ?>
        <div class="list-group">
            <?php foreach ($rows as $key) { ?>
                <a href="catName.php?catId=<?= $key['catId']?>" class="list-group-item bg-secondary text-white"><?php echo $key['catName'] ?></a>
            <?php } ?>
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