<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Soledad</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
    function sayHello() 
    {alert("Created Sucessfully") } 
    </script>
  </head>
  <body>
    <nav>
        <i><label class="Logo">CAUGARS</label></i>
        <ul>
            <li><a href="#Home">Home</a></li>
            <li><a href="#Portfolio">Portfolio</a></li>
            <li><a href="#About-us">About Us</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>

    <div class="Home" id="Home">
        <div class="wrapper">
          <Div class="logo">
          <img src="pictures/Logo-S.png">
          </Div>
          <div class="form-container">
            <div class="slide-controls">
              <input type="radio" name="slide" id="login" checked>
              <input type="radio" name="slide" id="signup">
              <label for="login" class="slide login">Login</label>
              <label for="signup" class="slide signup">Signup</label>
              <div class="slider-tab"></div>
            </div>
           <div class="form-inner">
              <form action="log.php" method="post" class="login">
                <div class="field">
                  <input type="text" name="Uname"placeholder="Username" required>
                </div>
                <div class="field">
                  <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="pass-link"><a href="#">Forgot password?</a></div>
                <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Login">
                </div> 
                <div class="signup-link">Create Account? <a href="">Signup now</a></div>
              </form>
    
              <form action="regis.php" method="post" class="signup">
                <div class="field">
                  <input type="text" name="Fname" placeholder="Fullname" required>
                </div>
                <div class="field">
                  <input type="text" name="Uname" placeholder="Username" required>
                </div>
                <div class="field">
                  <input type="password" name="Pass" placeholder="Password" required>
                </div>
                <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit"  onclick="sayHello()" value="Signup">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
        <div class="Portfolio" id="Portfolio"></br>
          <h1>This is our Portfolio</h1>
          <h1>San Jose Partido youth Movement Soledad Chapter</h1>
          <div class="container">
            <div class="box">
              <img src="pictures/p1.jpg" width="250" height="230">
            </div>
            <div class="box">
              <img src="pictures/p2.jpg" width="250" height="230">
            </div>
            <div class="box">
              <img src="pictures/p3.jpg" width="250" height="230">
            </div>
            <div class="box">
              <img src="pictures/p4.jpg" width="250" height="230">
            </div>
            <div class="box">
              <img src="pictures/p5.jpg" width="250" height="230">
            </div>
          </div>
        
          <h1>Barangay Healthcare Worker</h1>
          <div class="container">
            <div class="box">
              <img src="pictures/b1.jpg" width="250" height="220">
            </div>
            <div class="box">
              <img src="pictures/b2.jpg" width="250" height="220">
            </div>
            <div class="box">
              <img src="pictures/b3.jpg" width="250" height="220">
            </div><br/><br/>
            </div><br/><br/>
          </div>
        </div>
      
        <div class="about" id="About-us"><br/>
          <h1>About Us</h1><br/><br/><br/>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7752.696160639812!2d123.50496712443014!3d13.697355961530773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a1c39ecf149cf5%3A0x79646272341a1add!2sSoledad%20(Pob.)%2C%20Camarines%20Sur!5e0!3m2!1sen!2sph!4v1666831496297!5m2!1sen!2sph" 
          width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <h3>Soledad</h3><br/>
          <p> formerly Poblacion, is a barangay in the municipality of San Jose,<br/>
            in the province of Camarines Sur. Its population as determined by <br/>
            the 2020 Census was 1,351. This represented 3.07% of the total population of San Jose.</p><br/>
            
           <h3>Location</h3><br/>
           <P>Soledad is situated at approximately 13.7005, 123.5156, in the island of Luzon. <br/>
             Elevation at these coordinates is estimated at 32.8 meters or 107.6 feet above mean sea level.</P><br/>
           
         </div>
         
         <div class="contact" id="contact">
           <h1>Contact Us</h1>
             <div class="abox">
               <a href="https://www.facebook.com/sksoledad2018"><img src="Pictures/Facebook.png"></a></img>&nbsp;&nbsp;&nbsp;
         
               <a href="https://www.instagram.com/accounts/login/?"><img src="Pictures/instagram.png"></a></img>&nbsp;&nbsp;&nbsp;
         
               <a href="https://accounts.google.com/v3/signin/identifier?dsh=S-83074950%3A1663597289947019&continue=https%3A%2F%2Faccounts.google.com%2F&followup=https%3A%2F%2Faccounts.google.com%2F&passive=1209600&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AQDHYWoET0UGEopTJZQYmgBsYmIl0LycB5TwYy4XwmN2xDQU7TZajcqSJ5wtDDDH-oPKLN6KreXN-Q"><img src="Pictures/email.png"></a></img>&nbsp;&nbsp;&nbsp;
             </div>
         </div>
      
         <!-- Footer -->
      <footer>
        <div class="foot">
          <div class="topic">
            <img src="RPlogo-removebg-preview.png" height="110">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <p>REPUBLIC OF THE PHILIPPINES<br/><br/>
              All content is in the public domain unless <br/>
              otherwise stated.<br/><br/><br/><br/><br/>
            </p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;
        
            <p>ABOUT GOVPH<br/><br/>
              Learn more about the Philippine government, its structure,<br/>
              how government works and the people behind it.<br/><br/>
              <br/><br/><br/>
            </p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <p>GOVERNMENT LINKS<br/><br/>
              <a href="https://op-proper.gov.ph/">Office of the President</a><br/>
              <a href="https://ovp.gov.ph/">Office of the Vice President</a><br/>
              <a href="http://legacy.senate.gov.ph/">Office of the Senate of the Philippinest</a><br/>
              <a href="https://www.congress.gov.ph/">House of Representatives</a><br/>
              <a href="https://sc.judiciary.gov.ph/">Supreme Court</a><br/>
              <a href="https://ca.judiciary.gov.ph/">Court of Appeals</a>
            </p>
          </div>
        </div>
        
        </footer>
      
        <script>
          const loginText = document.querySelector(".title-text .login");
          const loginForm = document.querySelector("form.login");
          const loginBtn = document.querySelector("label.login");
          const signupBtn = document.querySelector("label.signup");
          const signupLink = document.querySelector("form .signup-link a");
          signupBtn.onclick = (()=>{
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
          });
          loginBtn.onclick = (()=>{
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
          });
          signupLink.onclick = (()=>{
            signupBtn.click();
            return false;
          });
        </script>
    
      </body>
    </html>