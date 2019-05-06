<style>
  #navbar {
  background-color: #333; /* Black background color */
  position: fixed; /* Make it stick/fixed */
  top: -100px; /* Hide the navbar 50 px outside of the top view */
  width: 100%; /* Full width */
  transition: top 0.5s; /* Transition effect when sliding down (and up) */
  font-size: 30px;
}

/* Style the navbar links */
#navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 4px 10px 4px 10px;
  text-decoration: none;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}
</style>

<div id="navbar">
  <div class="container">
  <a href="#home"></a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  </div>
</div>

<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
}
</script>