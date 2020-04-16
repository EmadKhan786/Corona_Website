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
	<!-------------------------- Nav Bar from bootstrap----------------------------->


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
<!------------------------ Nav Bar from bootstrap----------------------------------->


<div class="main_header">
	<div class="row w-100 h-100">
		<!-- w-width & h-height-->
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-item-center">
				<!-- all the above contant is img to make a side form left of image of westand.jfif -->
				<img src="images/coronaicon.png" width="300" height="300">
			</div>
		</div>
		<!-- its is used for the heder -->

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1"></div>
		<div class="rightside w-100 h-00 d-flex justify-content-center align-item-center">
		</div>
		<!--h-100 was edited by me-->
			<h1>Let's Stay Safe & Fight Together Against Cor <span class="corona_rotate"><img scr="images/coronaicon.png"> </span> na Virus</h1>
			<!--check out the span section of the image is not comming
			-->
			<!-- span is used to break the word and add the img in that word by giving img path-->
		</div>
		
		</div>
	</div>

</div>

<!------------------- below code is about corona latest update--------------------->

<section class="corona_update container-fluid">
	<div class="mb-3">
		<h3 class="text-center text-uppercase">Covid-19 update</h3>
	</div>
<!--1part
	<div class="d-flex justify-content-around align-item-center count_style">
--1part>

		<!--count-style is used for mobile view in which the num data comes in center-->
		<!--d-flex(diplay)
			-->
			<!-------above code is very important for the below containt come center with 1 by 1 formate
			-------->
<!--2part
		<div>
			<h1 class="count">1,00,000</h1>
			<p>At airpot</p>
		</div>
		<div>
			<h1 class="count">1,000</h1>
			<p>Active case</p>
		</div>
		<div>
			<h1 class="count">1,00</h1>
			<p>Discharge</p>
		</div>
		<div>
			<h1 class="count">10</h1>
			<p>Dead</p>
		</div>
2part-->

<div class="table-responsive">
	<!--the first table is for api to strech the table in the screen-->
	<table class=" table table-border table-striped text-center" id="tablevalue">
		<tr>
			<!--tr(table row) th(table data)-->
			<th>Country</th>
			<th>TotalConfirm</th>
			<th>TotalRecovered</th>
		    <th>TotalDeaths</th>
		    <th>NewConfirm</th>
		    <th>NewRecovered</th>
		    <th>NewDeath</th>
		</tr>

	</table>
</div>


	</div>
</section>

<!------------------------------ below code is about Section------------------------>

<!--pt(padding top) & pb(padding bottom)-->
<div class="container-fluid sub_section pt-5 pb-3" id="aboutid">
	<!--id is used on navbar when user click then it's goes to that page-->
	<div class="section_header text-center mb-5 mt-4">
		<h1> About COVID-19</h1>
	</div>
	
	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
			<img src="images/corona.jpg" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2></h2>
				<p>Coronaviruses are a group of related viruses that cause diseases in mammals and birds. In humans, coronaviruses cause respiratory tract infections that can range from mild to lethal.</p>
				<p>. Mild illnesses include some cases of the common cold, while more lethal varieties can cause SARS, MERS, and COVID-19.</p>
				<p>Symptoms in other species vary: in chickens, they cause an upper respiratory tract disease, while in cows and pigs they cause diarrhea. There are yet to be vaccines or antiviral drugs to prevent or t
See more on en.wikipedia.org </p>
			</div>
		</div>
</div>


<!--------------------------- below code is Corona Symptoms------------------------->
<div class="container-fluid  pt-5 pb-3" id="symptomsid">
	<!--id is used on navbar when user click then it's goes to that page-->
	<div class="section_header text-center mb-5 mt-4">
		<h1> Corona Symptoms</h1>
	</div>

	<div class="container">
		<div class="row">
<!--a single row only display the img-->
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<!--mt(margin top-->
				<figure class="text-center">
				<img src="images/cough.png" class="img-fluid" width="120" height="120">
				<figcaption>cough</figcaption>
				</figure>
			</div>

			<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<!--mt(margin top-->
				<figure class="text-center">
				<img src="images/breath.jpg" class="img-fluid" width="120" height="120">
				<figcaption>breathing</figcaption>
				</figure>
			</div>

			<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<!--mt(margin top-->
				<figure class="text-center">
				<img src="images/fever.jfif" class="img-fluid" width="120" height="120">
				<figcaption>fever</figcaption>
				</figure>
			</div>

			<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<!--mt(margin top-->
				<figure class="text-center">
				<img src="images/headache.png" class="img-fluid" width="120" height="120">
				<figcaption>headache</figcaption>
				</figure>
			</div>

			<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<!--mt(margin top-->
				<figure class="text-center">
				<img src="images/sweat.jfif" class="img-fluid" width="120" height="120">
				<figcaption>sweat</figcaption>
				</figure>
			</div>

			<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<!--mt(margin top-->
				<figure class="text-center">
				<img src="images/tired.png" class="img-fluid" width="120" height="120">
				<figcaption>tired</figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>

<!------------------------ below code is Prevansion Section-------------------------->

<div class="container-fluid sub_section pt-5 pb-3" id="preventionid">
	<!--sub_section is used in css and about section of the page-->
	<!--id is used on navbar when user click then it's goes to that page-->

	<div class="section_header text-center mb-5 mt-4">
		<h1> Prevansion Agains Corona Virus</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<!--again row section is used for the add the img and information both-->

					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/facemask.png" class="img-fluid" width="90" height="90">
				</figure>
						
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<p>
							When-ever go Outside ware a face-mask always.face-mask is nessary for every one to protect your self from virus.
						</p>
					</div>
					</div>
				</div>
			

			<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/boiled.jfif" class="img-fluid" width="90" height="90">
				</figure>
						
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<p>
							Always Cook the Food Properly or Boiled Food Properly to protect your self from virus intering in the body.
						</p>
					</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/sanitizer.png" class="img-fluid" width="90" height="90">
				</figure>
						
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<p>
							Whenever u come from outside then santized your hand properly to protect your self from virus.
						</p>
					</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/stayhome.jfif" class="img-fluid" width="90" height="90">
				</figure>
						
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<p>
							Stay-home. don't go anyware when-ever it is not nessary to protect your self from virus.
						</p>
					</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/washhand.jfif" class="img-fluid" width="90" height="90">
				</figure>
						
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<p>
							Wash your Hand Properly for atleast for 20-secound properly to protect your self from virus.
						</p>
					</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/handshake.png" class="img-fluid" width="90" height="90">
				</figure>
						
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<p>
							Avoid the Hand-Shake to Any one and make a distance to person when-ever you are Talking to protect your self from virus.
						</p>
					</div>
					</div>
				</div>
            </div>
        </div>
		
	</div>
</div>


<!--------------------------below code Form Section---------------------------------->

<div class="container-fluid pt-5 pb-3" id="contactid">
	<!--sub_section is used in css and about section of the page-->
	<!--id is used on navbar when user click then it's goes to that page-->


	<div class="section_header text-center mb-5 mt-4">
		<h1> Give Your Detail </h1>
	</div>
<div class="container">
	<div class="row">
		<div class="col-lg-8 offset-lg-2 col-12">
		<!--offset is used for the form is come in center-->

<!----------------The Below Form Code is Copy By Bootstap--------------------------->	
		
		<form action="databaseconnection.php" method="POST">
		<!--Mension Database name-->
  <div class="form-group">
    <label>username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>
  
  <div class="form-group">
    <label>email</label>
    <input type="text" class="form-control" name="email" placeholder="name@Example.com" required autocomplete="off">
  </div>

  <div class="form-group">
    <label>mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" required autocomplete="off" required>
  </div>


<!-----------------------Below code is checkbox section---------------------------->


  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasymtom[]" value="cold">
  <label class="custom-control-label" for="customcheckbox1">
    cold
  </label>
</div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasymtom[]" value="fever">
  <label class="custom-control-label" for="customcheckbox2">
    fever
  </label>
</div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasymtom[]" value="Breath">
  <label class="custom-control-label" for="customcheckbox3">
    Diffculty in Breath
  </label>
</div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasymtom[]" value="weakness">
  <label class="custom-control-label" for="customcheckbox4">
    felling weak
  </label>
</div>
<!----------------------------Above code is checkbox section end--------------------->

  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
  </div>
  <!--The below code is button code copy by bootstrap-->
 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
		</div>
	</div>
</div>

</div>

<!--------------------- below code top cursor---------------------------------------->
<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myButton">
		<!--fa fa-arrow-up(font auwsome thing)-->
	</i>
	
</div>

<!-------------------------- below code Footer--------------------------------------->
<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
  	<p>Devloped By Mr.Khan</p>
  </div>
</footer>



<script type="text/javascript">
	function fetch(){
		$.get("https://api.covid19api.com/summary",
			function (data){
				var tablevalue = document.getElementById('tablevalue');
				for (var i =1; i<(data['Countries'].length); i++) {
                       var x= tablevalue.insetRow();
                       x.insertCell(0);
                       tablevalue.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                       tablevalue.rows[i].cells[0].style.background = '#7a4a91';
                        tablevalue.rows[i].cells[0].style.color = '#fff';

                       x.insertCell(1);
                        tablevalue.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirm'];
                       tablevalue.rows[i].cells[1].style.background = '#4bb7d8';


                        x.insertCell(2);
                        tablevalue.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                       tablevalue.rows[i].cells[2].style.background = '#4bb7d8';


                        x.insertCell(3);
                        tablevalue.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                       tablevalue.rows[i].cells[3].style.background = '#4bb7d8';


                        x.insertCell(4);
                        tablevalue.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                       tablevalue.rows[i].cells[4].style.background = '#4bb7d8';


                        x.insertCell(5);
                        tablevalue.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                       tablevalue.rows[i].cells[5].style.background = '#4bb7d8';


                        x.insertCell(6);
                        tablevalue.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeath'];
                       tablevalue.rows[i].cells[6].style.background = '#4bb7d8';
				}
			}
			);
	}

</script>
</body>
</html>
<!--Delete all the data base file-->




