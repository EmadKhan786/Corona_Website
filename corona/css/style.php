<style type="text/css">
html{
	scroll-behavior: smooth;
}	
/*is used for when click to any navbar button then they show the a scroll effect*/
*{
	margin: 0;padding: 0; box-sizing: border-box;
	font-family: 'Pacifico', cursive;}
	/*.is used for class*/
.row{margin-left: 0!important; margin-right: 0!important;}

.nav_style{
	background-color: #a29bfe!important;}
	/*nav_style is used for background color of navbar*/

.nav_style a{ color: white;}


/*imp MAIN HEADER*/
.main_header{
	height: 450px;
	width: 100%;
}
.rightside h1{font-size: 3rem;}
/*3rem-root em*/

.corona_rotate img{
	animation: gocorona 3s linear infinite;
}
/*3 secound infinate loop used means continous rotating(also requried key frame to show them the work of that image animation*/

@keyframe gocorona{

	0%{transform: rotate(0);}
	100%{transform: rotate(360deg);}
}
/*from 0 to 100 rotation*/

.leftside img{animation: heartbeat 5s linear infinite;}
/*5 secound infinate loop used means continous rotating(also requried key frame to show them the work of that image animation*/
@keyframes heartbeat
{
/*  0%{transform: scale(.75);}
    20%{transform: scale(1);}
    40%{transform: scale(.75);}
    60%{transform: scale(1);}
    80%{transform: scale(.75);}
   100%{transform: scale(.75);}*/

     0%{transform: rotate(0);}
	100%{transform: rotate(360deg);}

}

/*from 0 to 100 increase*/
.corona_update{margin:0 0 30px 0;}
/*top,left,bottom,left*/

.corona_update h3{ color: #ff7675; }
.corona_update h1{ font-size: 2rem; text-align: center; }

/*         About Section Code      */
.sub_section{background-color:#fbfafd; }

.footer_style{
	background-color: #a29bfe!important;
}

.footer_style p{
	margin-bottom: 0!important;
}
.count_style{display: inline!important;
}
.count_style p{text-align: center;}
.about_res{margin-left: 0!important;}
</style>

