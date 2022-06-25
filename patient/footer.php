<!DOCTYPE html>
<html>
<head>
<title>Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style the body */

.waviy {
  position: relative;
  -webkit-box-reflect: below -20px linear-gradient(transparent, rgba(0,0,0,.2));
  font-size: 30px;
  color: black;
  margin-bottom:10px;
}
.waviy span {
  font-family: 'Alfa Slab One', cursive;
  position: relative;
  display: inline-block;
  color: blue;
  text-transform: uppercase;
  animation: waviy 1s infinite;
  animation-delay: calc(.1s * var(--i));
  
}
@keyframes waviy {
  0%,40%,100% {
    transform: translateY(0)
  }
  20% {
    transform: translateY(-20px)
  }
}
</style>
</head>

<body>
<div class="waviy">
  Developed by :
   <span style="--i:3">Gazi</span>
   <span style="--i:4">Md.</span>
   <span style="--i:5">Shakil</span>
   <span style="--i:8">Hossain</span>

  </div>
</body>
</html>