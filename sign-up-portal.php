<!DOCTYPE html>
<html lang="en" dir="ltr">

   <head>
      <meta charset="utf-8">
      <title>SUMMER SKY | Team Pogi</title>
	  <link rel="icon" type="image/x-icon" href="ss.ico">
      <link rel="stylesheet" href="login-portal.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>

   <style>
  #background-video {
  width: 100vw;
  height: 100vh;
  object-fit: cover;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
}
	</style>
	
 <audio src="bg-song-full.mp3" id="my_audio" loop="loop"></audio>
  <script type="text/javascript">
    window.onload=function(){
      document.getElementById("my_audio").play();
    }
  </script>
  
   <body>

		<div class="bg-img">
		<video id="background-video" autoplay loop muted>
		<source src="char-portal.mp4" type="video/mp4">
		</video>
			<div class="content">
				<header>REGISTER</header>

				<form action="sign-up-process.php" method="POST">
				<div class="field">
					<span class="fa fa-user"></span>
					<input type="email" required placeholder="Email" name="email">
				</div>

				<div class="field space">
					<span class="fa fa-lock"></span>
					<input type="password" class="pass-key" required placeholder="Password" name="password">
					<span class="show">SHOW</span>
				</div>
 
                <div class="field space">
					<span class="fa fa-lock"></span>
					<input type="password" class="pass-key" required placeholder="Confirm Password" name="password1">
			
				</div>


				<div class="field space">
					<span class="fas fa-id-badge"></span>
					<input type="text" required placeholder="First Name" name="first">
				</div>

         
				<div class="field space">
					<span class="fas fa-portrait"></span>
					<input type="text" required placeholder="Last Name" name="last">
				</div>
				
				
			<br><br><br>

				<div class="field">
					<input type="submit" value="SIGN UP">
				</div>
				</form>
			
				<div class="signup">
				Already have an account?
				<a href="login-portal.php">Log-in Now!</a>
				</div>
			</div>
		</div>
		<script>

 
			const pass_field = document.querySelector('.pass-key');
			const showBtn = document.querySelector('.show');
			showBtn.addEventListener('click', function(){
			if(pass_field.type === "password"){
				pass_field.type = "text";
				showBtn.textContent = "HIDE";
				showBtn.style.color = "#3498db";
			}else{
				pass_field.type = "password";
				showBtn.textContent = "SHOW";
				showBtn.style.color = "#222";
			}
			});

           

		</script>




   </body>
</html>