<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
*{margin:0px auto;}
html,body{
    height:100%;
}
#content{
    padding: 10px; 
    padding-bottom:60px;
}
#container {
   position:relative;
}
#header {
   background:#aaff96;
   padding:10px;
}

#footer{
    height:50px;
    line-height:50px;
    background:#aaff96;
    position:absolute;
    bottom:0px;
    width:100%; /*biar memenuhi layar*/
}
</style>

</head>
<body>

<!-- Header -->
<!-- Image and text -->
<div id="container">
<div id="header">
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    novaa's 
  </a>
</nav>
</div>
</div>

@yield('content')

<!-- Footer

    <div id="container">
    <div id="footer">
        <p class="text-center" style="font-size: 18px; color: white">Show Us</p>
    </div>
    </div> -->




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>