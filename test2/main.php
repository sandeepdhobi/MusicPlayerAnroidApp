<!DOCTYPE html>
<html>


<head>
	<title>main</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="css/footer-distributed-with-contact-form.css">

	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- for social link icon and require net when host clear the cache and one also which use api or access on fly-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"><!--for font of company logo in footer other font company logo changes-->

	<!-- for font--><link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">






</head>


<body bgcolor="#808080">
	<header>

		<nav>
			<!--	<button class="log" id="float" style="padding: 10px;margin: 10px 5px"><a href="login.html">Login</a></button>  --><!-- top right bo le-->

			<!-- signup page start from here  -->
			<div class="container" style="background-color: #808080;border-radius: 2px;width:100%;height: auto;margin-right:50px;padding-right: 0px;padding-bottom: 8px;padding-left: 0px;margin-left: 2px;">
				<div>


					<button onclick="document.getElementById('id02').style.display='block'" class="log" id="float" style="padding: 10px;margin-top: 10px;margin-right: 10px; width: auto;">Signup</button>


					<div id="id02" class="modal" style="overflow: auto;">  <!-- container class of bootstrap hide overflow :auto in modal class-->

						<form class="modal-content animate" action="register.php" method="post">
							<div class="imgcontainer">
								<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
								<img src="images.png" alt="Avatar" class="avatar">
							</div>

							<div class="container1">
								<label><b>Username</b></label>
								<input type="text" placeholder="Enter Username" name="name" class="inp" required>

								<label><b>Email</b></label>
								<input type="text" placeholder="Enter Email Id" name="email" class="inp" required>

								<label><b>Password</b></label>
								<input type="password" placeholder="Enter Password" name="password" class="inp"  required >

								<label><b>Confirm Password</b></label>
								<input type="password" placeholder="Confirm Password" name="repassword" class="inp"   required >

								<label><b>Contact</b></label>
								<input type="tel" placeholder="Enter mobile number" name="contact" class="inp"  required >

								<button type="submit" class="but"><b>Signup</b></button>

							</div>

							<div class="container1" style="background-color:#cccccc">
								<button class="but" type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" style="background-color: #ff8080;"><b>Cancel</b></button>
							</div>
						</form>
					</div>

					<!-- signup end here  -->


					<!-- login page strat from here  -->

					<button  onclick="document.getElementById('id01').style.display='block'"class="log" id="float" style="padding: 10px;margin-top: 10px;margin-right: 5px;width: auto;">Login</button>


					<div id="id01" class="modal"style="overflow: auto;">

						<form class="modal-content animate" action="login.php" method="post">
							<div class="imgcontainer">
								<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
								<img src="images.png" alt="Avatar" class="avatar">
							</div>

							<div class="container1">
								<label><b>Username</b></label>
								<input type="text" placeholder="Enter Username" name="name" required class="inp">

								<label><b>Password</b></label>
								<input type="password" placeholder="Enter Password" name="password" required class="inp">

								<button type="submit" name="submit" class="but"><b>Login</b></button>
								<br>
								<input type="checkbox" checked="checked"style="float: left; margin-top: 23px;">
								<p>    
									<br>
									<b style="margin-left: 10px;">Remember me</b></p>
								</div>

								<div class="container1" style="background-color:#cccccc">
									<button class="but" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="background-color: #ff8080;"><b>Cancel</b></button>
									<span class="psw"><a href="#">Forget password?</a></span>
								</div>
							</form>
						</div>


						<!-- upto this login page  login end here-->



						<br>
						<br>
						<br>
						<br>



<!--
	<ul class="topnav">
		<li><a href="#link1">Home</a></li><span>|</span>
		<li><a href="#link2">Year</a></li><span>|</span>
		<li><a href="#link3">Download Movie</a></li><span>|</span>
		<li><a href="#link4">Stream Movie</a></li><span>|</span>
		<li><a href="#link5">Recent Release</a></li><span>|</span>
		<li><a href="link6">Blog</a></li><span>|</span>
        <li id="r"><a href="about" float:"right">About</a></li>
	</ul>
-->
<button class="button  colr " style="margin-left: 10px;width: 125px;font-size: 18px; "><a href="#link1"><span>Home</span></a></button>
<button class="button  colr" style="width: 125px;"><a href="#link2"><span>Year</span></a></button>
<button class="button  colr" style="width: 240px;"><a href="#link3"><span>Download Movie</span></a></button>
<button class="button  colr" style="width: 220px;"><a href="#link4"><span>Stream Movie</span></a></button>
<button class="button  colr" style="width: 125px;"><a href="link6"><span>Blog</span></a></button>
<button class="button  colr" style="float: right;margin-right:10px ;width: 125px;"><a href="link7"><span>About</span></a></button>
</div>
</div>


<br>


<div style="background-color: #4d4d4d;border-radius: 2px;width:100%;height: 150px;margin-right:50px;margin-left: 2px;">
	<form action="search.php" method="post" style="padding: 10px 10px 10px 10px">

		<input type="submit" value="Search" id="search1" class="button colr inp2" style="margin: 5px 5px"></input>
		
		<input id="search" type="search" placeholder="Search any  movie..." name="search" maxlength="128" required class="button inp2 colr " id="font"  style="border: 1px solid green;background-color: #f2f2f2 ;width: 20%; text-align: left;"></input>


		
	</form>
</div>
</nav>

<br>
</header>

<!-- <a href="https://dowmov/years/2016-1926/page/1/">1</a>-->


<section>
	

	<div class="container mov">


		<div>
			<ul class="pagination">
				<li><a href="#"><</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">></a></li>
			</ul>
		</div>

		<div class="movie_list" id="namesearch">
			<?php
			include "connect.php";
			$q="select * from movies";
			$query=mysqli_query($connect,$q);
			if($query){
				$mov="";
				while($row=mysqli_fetch_array($query)){
					$mov.='
					<article class="img-item">
						<figure>
							<a href="" target="_blank"><img  
								onmouseout="hide()" mv-name="'.$row[2].'" class="poster-thumb" src="F:\photooo\din.jpeg" width="190" height="220" alt="dinasaur"> 
							</a>
							<figcaption>
								<h3>
									<a class="movielink" href="https://movie/sparrows-1926-720p/">'.$row[1].'</a>
								</h3>
							</figcaption>
						</figure>
					</article>';
				}

			}else{
				 	//error
			}
			echo $mov;
			?>





		</div>
	</div>


	<video id="vidd" class="vidcontent animate"  controls type="video/mp4">
		<!-- <source id="vi" src="E:\movie\The Good Dinosaur (2015) [1080p] [YTS.AG]\The.Good.Dinosaur.2015.1080p.BluRay.x264-[YTS.AG].mp4" type="video/mp4"> -->
	</video>

	<br>



</section>


<footer class="footer-distributed">

	<div class="footer-left">

		<h3>Company<span>logo</span></h3>

		<p class="footer-links">
			<a href="#">Home</a>
			·
			<a href="#">Blog</a>
			·
			<a href="#">Pricing</a>
			·
			<a href="#">About</a>
			·
			<a href="#">Faq</a>
			·
			<a href="#">Contact</a>
		</p>

		<p class="footer-company-name">Company Name &copy; 2015</p>

		<div class="footer-icons">
			<a href="https://plus.google.com/110719107842608714365"><i class="fa fa-google-plus"></i></a>
			<a href="https://www.facebook.com/sandeep.dhobi.54?ref=search"><i class="fa fa-facebook"></i></a>
			<a href="https://twitter.com/sandeepdhobi"><i class="fa fa-twitter"></i></a>
			<a href="http://www.instagram.com/dhobisandeep"><i class="fa fa-instagram"></i></a>

			<a href="#"><i class="fa fa-linkedin"></i></a>
			

		</div>

	</div>

	<div class="footer-right">

		<p>Contact Us</p>

		<form action="#" method="post">

			<input type="text" name="email" placeholder="Email" />
			<textarea name="message" placeholder="Message"></textarea>
			<button>Send</button>

		</form>

	</div>

</footer>





<script>
// Get the modal
var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');
var box =document.getElementById('vidd');

//var im=document.getElementsByTagName('img')
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal1) {
		modal1.style.display = "none";
	}
	else if (event.target == modal2) {
		modal2.style.display = "none";
	}

}
$('#search').on('input', function(){
	var key=$('#search').val();
	console.log("input block");
	$.ajax({
		url: 'http://localhost/movie%20site/search.php?key='+key,
		method: 'POST',

		success: function(data){
			//alert(JSON.stringify(data));
			console.log(JSON.stringify(data));
			
			//$('#namesearch').html("<h1>hh<h1>");
			$('#vidd').html('<source  src="'+data+'" type="video/mp4">');

		},
		error: function(e){
			alert(e);
		}
	})
})


var box =document.getElementById('vidd');
var ele=document.getElementsByClassName('poster-thumb');                                     /*document.getElementsByTagName('img');*/
for (var i =0; i < ele.length; i++) {
	box.src="";
	ele[i].onmouseover=function(){
		var source=this.getAttribute("mv-name");
		box.style.display="block";
		box.src=source;
		box.play();
	//alert(ele[i]+" "+source)
	console.log(source);
};
}


/*function show()
{	/*box.pause();
	box.src="E:\movie\The Good Dinosaur (2015) [1080p] [YTS.AG]\The.Good.Dinosaur.2015.1080p.BluRay.x264-[YTS.AG].mp4";
	box.load();***
	box.play();
	box.style.display="block";
	

}  */

function hide()
{
	
	box.pause();
	box.style.display="none";
	

}

/*

document.getElementById('mm').getElementsByTagName('img').onmouseout = function(event)
{
	
	box.pause();
	box.style.display="none";

}
document.getElementById('mm').getElementsByTagName('article').getElementsByTagName('figure').getElementsByTagName('a').getElementsByTagName('img').onmouseover = function(event)
{
	
	box.play();
	box.style.display="block";

}

*/


/*

function getElementsById(id) {
    const elementsWithId = []
    const allElements = document.getElementsByTagName('*')
    for(let key in allElements) {
        if(allElements.hasOwnProperty(key)) {
            const element = allElements[key]
            if(element.id === id) {
                elementsWithId.push(element)
            }        
        }
    }
    return elementsWithId
}

*/
/*document.getElementById('im'||'imm').onmouseout = function(event)
{
	
	box.pause();
	box.style.display="none";

}
document.getElementById('im'||'imm').onmouseover = function(event)
{
	
	box.play();
	box.style.display="block";

}


*/


</script>



</body>


</html>