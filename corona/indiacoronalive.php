<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- link is given by the link folder(connected) -->
	<?php include 'link/links.php'; ?>
	<!-- link is given by the link folder(connected) -->
	<?php include 'css/style.php'; ?>
	<!-- link is given by the css folder(connected) -->

</head>
<body>
	<!-- Nav Bar from bootstrap-->
<nav class="navbar navbar-expand-lg navbar-light bg-light nav_style p-3">
	<!--checkit out onces this above line and cut to nav_style p-3-->
  <!--p-3 is used for padding-->
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <!--pl-5 is used for padding-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize"><!-- ml(margin left) & mr(margin right) pr(padding right upto 5 meter,text-capitalize used for captial the stating word-->
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      	<a class="
      	nav-link" href="#aboutid">about</a>
      </li>

       <li class="nav-item">
      	<a class="
      	nav-link" href="#symptomsid">symptoms</a>
      </li>

       <li class="nav-item">
      	<a class="
      	nav-link" href="#preventionid">prevention</a>
      </li>

      <li class="nav-item">
      	<a class="
      	nav-link" href="indiacoronalive.php">indiacoronalive</a>

       <li class="nav-item">
      	<a class="
      	nav-link" href="#contactid">contact</a>
      </li>
      </li>
    </ul>
  </div>
</nav>


<!--------------- below code is about corona latest update---------------->
<section class="corona_update container-fluid">
  <div class="my-5">
    <!--my-5(margin top and margin bottom) is used for get space of navbar-->
    <h3 class="text-center text-uppercase">Covid-19 Of India</h3>
  </div>

<div class="table-responsive">
  <!--the first table is for api to strech the table in the screen-->
  <table class=" table table-border table-striped text-center">
    <tr>
      <!--tr(table row) th(table data)-->
      <th>Country</th>
      <th>State</th>
      <th>confirm</th>
      <th>active</th>
      <th>recovered</th>
      <th>death</th>
    </tr>
  
    

   

  </table>
</div>


  </div>

</section>


<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myButton">
    <!--fa fa-arrow-up(font auwsome thing)-->
  </i>
  
</div>

<!-------------------- below code Footer--------------------->
<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>Devloped By Mr.Khan</p>
  </div>
</footer>

</body>
</html>
