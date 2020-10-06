<!DOCTYPE html>
<html>
<head>
	<title>HOUSE RENTAL MANAGEMENT SYSTEM</title>
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/84b8764c65.js"></script>
	<style type="text/css">
		body{
			background: url(home3.jpg);
			background-size: cover;
			background-position: center;
			font-family: lato;
		}
		#centering{
			text-align: center;
			padding-top: 20%;
			text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
                		 0px 8px 13px rgba(0,0,0,0.1),
                		 0px 18px 23px rgba(0,0,0,0.1);
		}
		#cad{
			background-color: rgba(37, 33, 33,0.7); 
			text-align: left;
			margin-left: 10%;
			margin-right: 10%;
			padding-left: 10%;
			padding-top: 2%;
			padding-bottom: 5%;  
			
			
               }
		h1{
			font-weight: 700;
			font-size: 5em;
		}
		h2{
			text-decoration: underline;
		}
		h1,h3,h2{
			color: #aaaaaa;
		}
		hr{
			width:400px;
			border-top: 1px solid #f8f8f8;
			border-bottom:1px solid rgba(0,0,0,0.2);
		}
		label{
			color: #f8f8f8;
		}
		html{
			height: 100%;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
				<a href="#" class="navbar-brand fcolor">HOUSE RENTAL MANAGEMENT SYSTEM</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<div class="nav navbar-nav ">
					<li >
						<a href="HRMShome.html">Home</a>
					</li>
					<li>
						<a href="About.html">About</a>
					</li >
					<li class="active">
						<a href="#">Contact</a>
					</li>
				</div>

				<div class="nav navbar-nav navbar-right">
					<!-- <li>
						<a href="#">Sign Up<i class="fas fa-user-plus"></i></a>
					</li> -->
					<li>
						<a href="Login.html">Login<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
					</li>
				</div>
			</div>
			
		</div>
	</nav>

    
    
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="centering">
					<form action="connect.php" method="post">
						<h1>REGISTER</h1>
							<label for="firstname">FirstName:</label>
							<input id="firstname" type="text"  name="firstname" required>
						<label for="Lastname">LastName</label>
						<input id="Lastname" type="text" name="LastName"  required>
						<p></p>
						<label for="male">Male</label>
						<input name="gender"id="male"type="radio"  value="male">
						<label for="female">Female</label>
						<input name="gender" id="female" type="radio"value="female">
						<p></p>
						<label for="email">Email</label>
						<input name= "email"type="email"id="email" name="email" required>
						<label for="password">Password</label>
						<input id="password" type="password"name=password minlength="8">
						<label for="PHONE">CONTACT NO:</label>
							<input id="PHONE" type="text" name="PHONE" required>
						<p></p>
						<label for="birthday">Birthday</label>
						<select>
							<option>date</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
						</select>
							<select>
								<option>day</option>
							<option>monday to wednesday</option>
								<option>thursday to sunday</option>
							</select>
							<select>
								<option>year</option>
									<option>2002</option>
									<option>2003</option>
								</select>
							<P><label for="room">ROOM INTRESTED IN:</label>
								<input id="room" type="text" name="room" required></P>	
						<p>
							<input type="submit">
						</p>

							
                            </form>
                            
							
								</script>
					
						
					</div>
				</div>
			</div>
			
		</div>
	</div>
    <?php
       $firstname = htmlentities($_POST['firstname']);
	   $Lastname = htmlentities($_POST['Lastname']);
        $email = htmlentities($_POST['email']);
		$password= htmlentities($_POST['password']);
		$gender=htmlentities($_POST['gender']);
		$phone=htmlentities($_POST['PHONE']);
		$room=htmlentities($_POST['room']);

		$servername = "localhost";
      $username = "srujan";
      $password = "terala";
      $database = "hrms";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
     
        $sql = "INSERT INTO `contact` (`firstname`,`Lastname`, `email`,'gender' , `password`,'PHONE','room'`)
        VALUES (`$firstname`,`$Lastname`, `$email`,'$gender' , `$password`,'$PHONE','$room'`)";
        }
        $result = mysqli_query($conn, $sql);
	?>



	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>