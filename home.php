<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/sfast-1.0.0-Beta/sfast.min.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/images/favicon.png' />
    <title>Encryptor AES 192</title>

  </head>
  <body>


  <style>

  html {
    height: 100%;
    overflow: hidden;
  }
  body {
    color: #fff;
    margin:0;
    padding:0;
  	-webkit-perspective: 1px;
  	perspective: 1px;
  	-webkit-transform-style: preserve-3d;
  	transform-style: preserve-3d;
    height: 100%;
    overflow-y: scroll;
    overflow-x: hidden;
  }
  header {
    box-sizing: border-box;
    min-height: 40vw;
    padding: 30vw 0 5vw;
    position: relative;
    -webkit-transform-style: inherit;
    transform-style: inherit;
    width: 100vw;
  }
  header, header:before {
    background: 50% 50% / cover;
  }
  header::before {
    bottom: 0;
    content: "";
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
  	display: block;
  	background-color: #8a8;
    background-image: url(assets/images/2.png);
    background-size: cover;
    -webkit-transform-origin: center center 0;
    -webkit-transform: translateZ(-1px) scale(2);
    transform-origin: center center 0;
    transform: translateZ(-1px) scale(2);
    z-index: -1;
    min-height: 100vh;
  }
  header * {
    font-weight: normal;
    letter-spacing: 0.2em;
    text-align: center;
    margin: 0;
  	padding: 1em 0;
  }
  header p {
    background-color: hsla(0, 0%, 100%,0.1);
  }
  main {
    background-color: hsl(60, 10%, 10%);
    line-height: 1.7;
    max-width: 50%;
    padding: 5%;
    box-shadow: 1px 4px 5px black;
    position: relative;
    z-index: 2;
    transition: 1s;
  }
  main:hover{
    box-shadow: 3px 7px 15px black;
    transition: 1s;
  }
</style>

<header>
  <h1>Encryptor</h1>
  <p>Encrypt all your messages with just a click.</p>
</header>
<main>
	  <h4>Hello world, welcome to encryptor. below are tips on how to use encryptor</h4>
	  <p>1. Encrypt your message first on the left side then decrypt on the right side.</p>
    <p>2. Make sure you enter the encryption key correctly while decrypting else the result wont be positive</p>
    <hr>
    <h3>Enjoy!</h3>
</main>

  <style media="screen">
  .container .row{
    margin-bottom: 10%;
  }
  body {
background-color: #eeeeee;
}
.holder * {
border: 0;
border-bottom: solid silver 1px;
}

.holder {
width: 20em;
height: 20em;
min-height: 200px;
min-width: 200px;
margin: 50px auto 0;
padding: 20px;
box-shadow: 0px 0px 24px rgba(0, 0, 0, .3);
background-color: white;
/* the magic happens hereunder*/
resize: both;
display: flex;
flex-direction: column;
overflow: hidden;
}

.holder textarea {
flex: 1;
resize: none;
}
.holder textarea,
.holder input {
padding: 5px;
background: white no-repeat;
background-image: linear-gradient(to bottom, #2196F3, #2196F3);
background-position: 0 100%, 100% 100%;
background-size: 0 2px, 100% 1px;
transition: background-size 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
}

.holder textarea:focus,
.holder input:focus {
background-size: 100% 2px, 100% 1px;
}


</style>



<div class="container">
    <div class="row">
        <div class="column column-6">

          <form class="" action="encrypt.php" method="post">
              <div class="holder">
              	<p>Encryption</p>
                  	<textarea name="message" cols="30" rows="1" placeholder="Pain text..." required></textarea><br/>
                    <input name="encryptkey" type="text" placeholder="Encryption key..." required/><br/>
                    <button type="submit" class="btn btn-success" > Encrypt</button>
              </div>
          </form>
        </div>

        <div class="column column-6">

          <form class="" action="decrypt.php" method="post">
              <div class="holder">
              	<p>Decryption</p>
                  	<textarea name="message" cols="30" rows="1" placeholder="Cipher text..." required></textarea><br/>
                    <input name="encryptkey" type="text" placeholder="Decryption key..." required/><br/>
                    <button type="submit" class="btn btn-primary">Decrypt</button>
              </div>
          </form>

        </div>
    </div>
</div>

<style media="screen">
/* Team Member CSS
===========================*/

h1.team-h1 {
margin: 0;
position: absolute;
top: -16px;
text-align: center;
left: 40%;
font-family: georgia;
font-style: italic;
background-color: white;
padding: 0px 20px;
color: #222;
}

.cf:before,
.cf:after {
  content: " "; /* 1 */
  display: table; /* 2 */
}

.cf:after {
  clear: both;
}

/**
* For IE 6/7 only
* Include this rule to trigger hasLayout and contain floats.
*/
.cf {
  *zoom: 1;
}

.team-container {
max-width: 1000px;
margin: auto;
border-top: 1px #e9e9e9 solid;
border-bottom: 1px #e9e9e9 solid;
padding-top: 5em;
padding-bottom: 5em;
margin-top: 3em;
position: relative;
}

.team-member {
width: 16%;
float: left;
text-align: center;
margin-left: -3%;
}

.team-member:last-child {margin-right: 0;}


.team-member span,
.team-member h3 {
max-width: 200px;
font-family: sans-serif;
letter-spacing: -1px;
}

.team-member h3 {
color: #1CA3A3;
}

.email {
color: #EA2678;

}

.team-member span {
display: block;
color: black;

}
.team-photo {
border-radius: 50%;
text-align: center;
margin: auto;
max-width: 100%;
height: auto;
transition: 0.1s transform ease-in-out;
}


.team-photo:hover {
transform: scale(0.9);
cursor: pointer;
}


/* code for phone layout */
@media (max-width:850px){
.team-member {
  width:25%;
  margin-left: 4%;
  margin-right: 4%;
  margin-bottom: 40px;

}

}



@media (max-width:650px){
.team-member {
  float: none;
  display: block;
  margin: 50px auto;
  width: 100%;
  text-align: center;
}

.team-member h3,
.team-member span {
  margin: 15px auto;
}
}

/* ENDS Team Member CSS
===========================*/
</style>
<!-- this section wraps the team members as a container-->

<section class="cf team-container">
  <h1 class="team-h1">Group members</h1>

    <!-- member-->
    <div class="team-member">
      <img class="team-photo" src="assets/images/fotie.jpg">
      <h3>Fotie M. Constant</h3>
      <span>Full-stack web developer and designer.</span>
      <button type="button" class="btn btn-primary" name="Email">Contact</button>
    </div>


    <!-- member-->
    <div class="team-member">
    <img class="team-photo" src="assets/images/jaures.jpg">
      <h3>Nanfack Jaures</h3>
      <span>Programmer, Web developer</span>
      <button type="button" class="btn btn-primary" name="Email">Contact</button>
    </div>


    <!-- member-->
    <div class="team-member">
    <img class="team-photo" src="assets/images/paul.jpg">
      <h3>Fantcho Paul</h3>
      <span>Programmer, Web developer and project leader</span>
      <button type="button" class="btn btn-primary" name="Email">Contact</button>
    </div>

 </section>


<style>
footer{
    text-align: center;
    color: black;
  }
</style>

<footer>
Copyright Group 7, 2018 - 2019

</footer>



  </body>
</html>
