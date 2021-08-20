<?php
    if(isset ($_POST['submit'])) {
        $name =             $_POST['name'];
        $visitor_email =    $_POST['email'];
        $message =          $_POST['msg'];
    
        //valid
    
        if(empty($name) || empty($visitor_email))
        {
            echo "Name and Email are mandatory!";
            exit;
        }
        $email_from = "osajiemeka25@gmail.com";
        $email_subject = "Work Request";
        $email_body = "You have received a new message from the user $name\n".
        "email address: $visitor_email\n".
        "Message:  \n $message".
        $to = "osajiemeka25@gmail.com";
        $headers ="From: $email_from \r\n";
        $headers .= "Reply-To: $visitor_email \r\n";
    
        mail($to,$email_subject,$email_body,$headers);
    
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
         crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    
    <title>Resume</title>

</head>
<body onload="type()">

    <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="./resources/i4g.png" alt="" class = "d-inline-block" width ="150">
        Grandpa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <h2 class="navbar-toggler-icon"></h2>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="intro" >
    <div class="avatar">        
        <img src="./resources/avatar.jpg" alt="" >
    </div>
    <h3 id="demo"></h3>
</div>
<div id="Skills">
    <div class="container">
        <div class="row">
            <div class="col-12 service">
                <h2>Skills</h2>
            </div>
            <div class="col-sm-12 col-lg-4 service">
                <h2>HTML</h2>
                <p>The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. 
                    It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript.</p>
            </div>
            <div class="col-sm-12 col-lg-4 service">
            <h2>CSS</h2>
            <p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. 
                CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.</p>
            </div>
            <div class="col-sm-12 col-lg-4 service">
            <h2>PHP</h2>
                <p>PHP is a popular general-purpose scripting language that is especially suited to web development.</p>
                <P>Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.</P>
            </div>
        </div>
    </div>
</div>

<div id="contact">
    
<div class="container">
    <div class="row">
        <h2>Contact Us</h2>
    <form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
            method="post">
        <div class="col-sm-8 col-7 text">
        <label for="name">
            Name
        </label>
        <input type="text" name="name" id=""> 
        <br>
        </div>
        <div class="col-sm-8 col-7 text">
        <label for="Email">Email</label>
        <input type="email" name="email" id=""> 
        <br>
        </div>
        <div class="col-sm-8 col-7 msg">
        <label for="msg">Message</label>
        <textarea name="msg" id="" cols="20" rows="5"></textarea>
        </div class ="btn">
        <div>
            <button type="submit" value="submit"> Contact Us</button>
        </div>
    </form>
    </div>
    <br>
</div>
    
</div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" 
         crossorigin="anonymous"></script>
</body>
<footer>

    <center class= "fixed-bottom">
    &copy;
  <script type="text/javascript">
  document.write(new Date().getFullYear());
  </script>
        Grandpa Alora
</center>

</footer>
<script>
    
const items = ['Hi', 'I am EmekaOgbor Emmanuel', 'Web Developer'];
const delSpeed = 55;
const typeSpeed = 120;
const targetElm = '.type';

// Code

let index = 0; // index of array
let charIndex = 0; // index of character in string

function typing() {
  if (index === items.length) {
    index = 0;
    setTimeout(typing, typeSpeed);
  } else if (charIndex >= items[index].length + 1) {
    setTimeout(deleteTxt, delSpeed);
  } else if (charIndex < items[index].length + 1) {
    const addChar = items[index].substr(-items[index].length, charIndex);
    document.getElementById("demo").innerHTML = addChar;
    charIndex += 1;
    setTimeout(typing, typeSpeed); 
  }
};

function deleteTxt() {
  if (charIndex >= 0) {
    const delChar = items[index].substr(-items[index].length, charIndex);
    document.getElementById("demo").innerHTML = delChar;
    charIndex -= 1;
    setTimeout(deleteTxt, delSpeed); 
  } else if (index <= items.length -1) {
    index += 1;
    typing();
  } else {
    typing();
  }
}; 

typing();
    var i = 0;
    var txt ="Hi I am EmekaOgbor Emmanuel.\n Hng Intern";
    var speed = 50;
    
    function type(){
        if(i < txt.length) {
            document.getElementById("demo").innerHTML += txt.charAt(i);
            i++;
            setTimeout(type, speed);
        }

    }
</script>
</html>