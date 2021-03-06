<?php include ("$_SERVER[DOCUMENT_ROOT]\cms\include\header.php");?>
<style>
	@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #2d3319; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #2d3319, #2d3329);
  background: -moz-linear-gradient(right, #2d3319, #2d3329);
  background: -o-linear-gradient(right, #2d3319, #2d3329);
  background: linear-gradient(to left, #2d3319, #2d3329);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; 
	
}
	.statusMessage, .errorMessage {
  font-size: .8em;
  padding: .5em;
  margin: 2em 0;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px; 
  -moz-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  -webkit-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  -box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
}
 
.statusMessage {
  background-color: #2b2;
  border: 1px solid #080;
  color: #fff;
}
 
.errorMessage {
  background-color: #f22;
  border: 1px solid #800;
  color: #fff;
}
</style>
<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>


<div class="login-page">
  <div class="form">
<form action="admin.php?action=login" method="post"  class="login-form">
        <input type="hidden" name="login" value="true" />
 
<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>
 
        
 
         
           
            <input type="text" name="username" id="username" placeholder="Your admin username" required autofocus maxlength="20" />
          
 
          
            <input type="password" name="password" id="password" placeholder="Your admin password" required maxlength="20" />
          
 
      
	<button type="submit" name="login" value="Login" >Login</button>
      <p class="message">For Administrators Only</a></p>    
        </div>
      
    </form>
    
  </div>
</div>
 <div style="float:left"><a href="www.meghalaya-live.com">Return to Home Page</a></div>
<?php include "$_SERVER[DOCUMENT_ROOT]\cms\include\Footer.php" ?>