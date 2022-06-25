<!DOCTYPE html>
<html>
<head>
<title>Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.header{
 background:rgba(0,0,0,0.25);
 padding:0;
 margin:0;
}

.main-header p{
text-align:center;
font-size:2rem;
color:yellow;
}
.main-header h1 {
  font-size: 20px;
  text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
      font-size: 60px;
      text-align: center;
      margin:0px;
      padding:10px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }s
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: black;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: transform .2s;
  margin-left:3px;
  border-radius:5px;
}

/* styling paragraph  */

.waviy {
  position: relative;
  text-align: center;
  padding:4px;
}
.waviy span {
  
  position: relative;
  display: inline-block;
  font-size: 20px;
  color: blue;
  text-transform: uppercase;
  animation: flip 3s infinite;
  animation-delay: calc(.3s * var(--i))
}
@keyframes flip {
  0%,80% {
    transform: rotateY(360deg) 
  }
}

/* Change color on hover */
.rainbow-1:hover{
   background-image: linear-gradient(90deg, #00C0FF 0%, #FFCF00 49%, #FC4F4F 80%, #00C0FF 100%);
   animation:slidebg 5s linear infinite;
}

.rainbow-2:hover{
  background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet, red);
  animation:slidebg 2s linear infinite;
}

.rainbow-3:hover{
  background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, red);
  animation:slidebg 2s linear infinite;
}

.rainbow-4:hover{
   background-image:     linear-gradient(
      to right, 
      #E7484F,
      #F68B1D, 
      #FCED00,
      #009E4F,
      #00AAC3,
      #732982
    );
  animation:slidebg 2s linear infinite;
}


.rainbow-5:hover{
   background-image:     linear-gradient(
      to right, 
      #E7484F,
      #E7484F 16.65%,
      #F68B1D 16.65%,
      #F68B1D 33.3%,
      #FCED00 33.3%,
      #FCED00 49.95%,
      #009E4F 49.95%,
      #009E4F 66.6%,
      #00AAC3 66.6%,
      #00AAC3 83.25%,
      #732982 83.25%,
      #732982 100%,
      #E7484F 100%
     
     
     
    );
  animation:slidebg 2s linear infinite;
}


@keyframes slidebg {
  to {
    background-position:20vw;
  }
}

.follow{
  margin-top: 40px;
}

.follow a{
  color: black;
  padding: 8px 16px;
  text-decoration: none;
}


</style>
</head>

<body>
<div class="header">
   <div class="main-header">
       <h1>Patient management   system </h1>
       <div class="waviy">
          <span style="--i:1">you</span>
          <span style="--i:2">Can</span>
          <span style="--i:3">Cusomized</span>
          <span style="--i:4">Your</span>
          <span style="--i:5">Patient</span>
          <span style="--i:6">and</span>
         <span style="--i:7">Your</span>
         <span style="--i:8">   </span>
          <span style="--i:9">Doctor</span>
          <span style="--i:10">Details</span>
          <span style="--i:11">and </span>
          <span style="--i:12">We</span>
          <span style="--i:13">Provive</span>
         <span style="--i:14">Your</span>
         <span style="--i:15">Patient</span>
          <span style="--i:16">Report</span>
      </div>
   </div>

<div class="topnav">
  <a href="home.php" class="rainbow rainbow-1">Home</a>
  <a href="view.php" class="rainbow rainbow-2"> View</a>
  <a href="search.php" class="rainbow rainbow-3">Search</a>
  <a href="insertf.php" class="rainbow rainbow-4">Insert</a>
  <a href="report.php" class="rainbow rainbow-5">Report</a>
    
</div>
 </div>

</body>
</html>