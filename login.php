
<?php
  require_once("masterpage.php");
?>



    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	crossorigin="anonymous"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	crossorigin="anonymous"></script>

<div class="container">
    <div class="row ybody">
      <div class="d-flex align-items-center justify-content-center" style="min-height:85vh; width:100%;">
        <div class="card login-card" style="width: 18rem; background">
          <div class="card-body">
            
            

          </div>
        </div>
      </div>
    </div>
</div>

  <div class="text-center p-3 fixed-bottom" style="background-color: rgba(190,190,190);">
    © 2020 Copyright:
    <a class="text-dark" href="#">Yummy.com</a>
  </div>
	
	<script>
    	$(document).ready(function(){
    		$(".card-body").load("loginform.php")
    	});
	</script>
	
	</body>
</html>