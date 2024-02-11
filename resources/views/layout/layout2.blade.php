<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>
      Digital Grave Memory
    </title>

   
    <style>
        *{
    box-sizing: border-box;
    margin: 0px;
    padding: 0px;
    font-family: 'Montserrat', sans-serif;
    list-style-type: none;
    color: black;
    text-decoration: none;

}

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}


html,body{
    overflow-x: hidden;
}

html {
    scroll-behavior: smooth;
  }
  img{
    width: 100%;
    height: 100%;
}


  body {
    color: black;
    -webkit-font-smoothing: antialiased;
    margin: 0 auto;
    overflow: hidden;
    max-width: 425px;
    width: 100%; 
    box-sizing: border-box;
    background-color: #F8F8F8;
}

.select_option{
    
    z-index: 3;
    cursor: pointer;
}
._active{
    color: #B99470;
    font-weight: bold;
    border-bottom: 3px solid;
}
.img_component {
    box-shadow: 0px 6px 10px -3px gray;
    border-radius: 0.3rem;
    /* height: 15rem; */
}
.img_component img{
    height: 15rem
}
    </style>


</head>

<body class="container-fluid ">

    @yield("content")
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fbadad80a0.js"></script>
</body>
</html>
