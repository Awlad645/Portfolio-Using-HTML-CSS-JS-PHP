<?php

$conn = mysqli_connect('localhost','root','','portfolio') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>


<!DOCTYPE html> 
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>My resume</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <nav>
    <div class="navbar">
      <div class="logo"><a href="#">AwladHossen</a></div>
      <ul class="menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <!-- <li><a href="#info">Personal Informations</a></li> -->
        <li><a href="#Education">Education</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#work">My Work</a></li>
        <li><a href="#project">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
        <div class="cancel-btn">
          <i class="fas fa-times"></i>
        </div>
      </ul>
      <div class="media-icons">
        <a href="https://www.facebook.com/profile.php?id=100009299260568"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/awlad_rony"><i class="fab fa-twitter"></i></a>
        <a href="https://github.com/Awlad645"><i class="fab fa-github-alt"></i></a>
        <a href="https://www.instagram.com/awlad.hossen/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/awlad-hossen-16b27a178/"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://t.me/awladhossenrony"><i class="fab fa-telegram"></i></a>
      </div>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>

  <section class="home" id="home">
    <div class="home-content">
      <div class="text">
        <div class="text-one">Hello,</div>
        <div class="text-two">I'm Awlad Hossen Rony</div>
        <div class="text-three">Researcher | Machine Learning | Deep learning | Pythonist</div>
        <div class="text-four">From Bangladesh</div>
      </div>
    </div>
  </section>

  <section class="about" id="about">
    <div class="content">
      <div class="title"><span>About Me</span></div>
      <div class="about-details">
        <div class="left">
          <img src="Awlad.png" alt="Awlad Hossen">
        </div>
        <div class="right">
          <div class="topic">#Explorar</div>
          <p>I am  Awlad Hossen. I am a problem solver and loves to work with smart teams. I am proficient in Python, Data Structure, Database, algorithms, 
            Machine Learning, Deep Learning. I am always open to new challenges and opportunities.</p><br>
            <h2>
              Personal Information
            </h2>
            <ul>
              <li>Father's Name : Md. Alamgir Hossen</li>
              <li>Mother's Name : Mrs. Shahenoor Alam</li>
              <li>Date of Birth : 03 / 06 /1999</li>
              <li>Nationality : Bangladeshi (by birth)</li>
              <li>Blood Group : B+ </li>
              <li>Religion : Islam</li>
              <li>Marital Status : Single</li>
              <li>Sex : Male</li>
            </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="Education" id="Education">
      <div class="content">
        <div class="title"><span>Education</span></div>
        <div class="resume">
          <div class="colum2">
            <ul>
              <li><h3>B.Sc Hon's</h3></li>
              <li>Subject : Computer Science and Engineering </li>
              <li>Institution Name : Daffodil International University</li>
              <li> Passing year : Running</li>
              <li>Result : A (3.95) </li>
            </ul>
          </div>

          <div class="colum3">
            <ul>
              <li><h3>Higher Secondary Certificate (H.S.C)</h3></li>
              <li>Subject : Science </li>
              <li>Institution Name : Shahid Begum Sheikh Fazilatun Nessa Mujib Govt. College</li>
              <li> Passing year : 2017</li>
              <li>Result : A  </li>
            </ul>
          </div>

          <div class="colum1">
            <ul>
              <li><h3>Secondary School Certificate (S.S.C)</h3></li>
              <li>Subject : Science </li>
              <li>Institution Name : Ashrafabhad High School</li>
              <li> Passing year : 2015</li>
              <li>Result : A+ </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

  <section class="skills" id="skills">
    <div class="content">
      <div class="title"><span>My Skills</span></div>
      <div class="skills-details">
        <div class="text">
          <div class="topic">Skills Reflects Our Knowledge</div>
          <p>Life is all about learning new things. In addition to that, professional life's success also depends on learning new skills.
             Adapting new skills in professional life gives you a sense of accomplishment. Along with you, know your worth and the work 
             you can do. Your new opportunities are created, it makes you feel important, it motivates you and anyone can improve 
             themselves for the better</p>
        </div>
        <div class="boxes">
          <div class="box"><div class="per">Python</div></div>
          <div class="box"><div class="per">ML</div></div>
          <div class="box"><div class="per">Research</div></div>
          <div class="box"><div class="per">DL</div></div>
        </div>
      </div>
    </div>
  </section>

  <section class="work" id="work">
    <div class="content">
      <div class="title"><span>My Work</span></div>
      <h2 >Publications</h2><br>
      <ol type="1">
        <li><a href="https://ieeexplore.ieee.org/abstract/document/9579889">A Multi-attribute Decision Making Approach for Trauma Center Site Selection</a></li>
        <li><a href="https://ieeexplore.ieee.org/abstract/document/9689914">BottleNet18: Deep Learning-Based Bottle Gourd Leaf Disease Classification</a></li>
      </ol>
    </div>
  </section>


  <section class="project" id="project">
    <div class="content">
      <div class="title"><span>Project</span></div>
      
      <div class="pro1">
      <div class="p1"> <center><a href="http://localhost/awlad_portfolio/login/" style="color: white;"><h2>login system</h2></a> </center></div>
      <div class="p2"><center><a href="fv\from.html" style="color: white;"><h2>From validation</h2> </a></center> </div>
      <div class="p3"><center><a href="lp\Leap year.html" style="color: white;"><h2>Leap Year</h2></a></center> </div>
      <div class="p4"><center><a href="fact\factorial.html" style="color: white;"><h2>Factorial</h2></a></center> </div>

    </div>
  </section>

  <section class="contact" id="contact">
    <div class="max-width">
      <div class="title"><span>Contact Me</span></div>
            <div class="column right">
                <div class="text">Send Me Your Feedback</div>
                <form action="" method="post">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" placeholder="Name" name="name" required>
                        </div>
                        <div class="field email">
                            <input type="email" placeholder="Email" name="email" required>
                        </div>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Number" name="number" required>
                    </div>
                    <div class="field textarea">
                       <textarea  name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
                    </div>
                    <div class="button-area">
                        <button type="submit" name="send" >Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>
  
  <section class="contact1" id="contact1">
  
  <div class="cbox">

        <div class="box1" >
          <center>
          <i class="fas fa-phone"></i>
           <h2>phone</h2>
           <p>+880 1634409794</p>
          </center>
           
        </div>
  
        <div class="box2" >
          <center>
          <i class="fas fa-envelope"></i>
           <h2>email</h2>
           <p>awlad15-12208@diu.edu.bd</p>
          </center>
        </div>
  
        <div class="box3">
          <center>
          <i class="fas fa-map-marker-alt"></i>
           <h2>address</h2>
           <p>House #86, Madbor Bari, Madbor Bazar,<br> Kamrangirchar,Dhaka</p>
          </center>
           
        </div>
  
  
    </div>
  </section>
<br>

  <footer>
    <div class="text">
      <span>Created By &copy AwladHossen</span>
    </div>
  </footer>
  <script src="script.js"></script>
</body>
</html>


