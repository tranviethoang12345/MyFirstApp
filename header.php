<header>
	<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
      	<div class="container">
	        <a class="navbar-brand text-white" href="homepage.php">
	          <strong>Viet Hoang Max</strong>
	        </a>

	        <div class="collapse navbar-collapse bg-secondary" id="navbarNav">
		        <ul class="nav nav-pills card-header-pills">
		            <li class="nav-item">
		              	<a class="nav-link active" href="homepage.php">Home <span class="sr-only">(current)</span></a>
		            </li>

		            <li class="nav-item">
		              	<a class="nav-link bg-secondary text-white" href="">Blogs</a>
		            </li>

		            <li class="nav-item">
		              	<a class="nav-link bg-secondary text-white" href="">About</a>
		            </li>

		            <li class="nav-item dropdown">
		              	<a class="nav-link dropdown-toggle bg-secondary text-white" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More info</a>
		              	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		                	<a class="dropdown-item" href="">Contact</a>
		                	<a class="dropdown-item" href="">Billing address</a>
		                	<a class="dropdown-item" href="">Discounts</a>
		                	<div class="dropdown-divider"></div>
		                	<a class="dropdown-item" href="admin.php">Something else here ~~Admin~~</a>
		              	</div>
		            </li>

		            <li class="nav-item">
		              	<a class="nav-link bg-secondary text-white" href="">FeedBack</a>
		            </li>
		        </ul>
	    	</div>

        <!-- <form class="form-inline waves-effect waves-light" action="search.php" method="GET">
          	<input class="form-control" type="text" placeholder="Search" name="keyword" pattern="^[a-zA-Z ]+$">
        </form> -->

        <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword" pattern="^[a-zA-Z ]+$">
            <button class="btn btn-outline-success my-2 my-sm-0" style="margin-right: 10px " type="submit">Search</button>
		</form>
      	</div>
      </div>
	</nav>
	<!-- navbar -->
</header>