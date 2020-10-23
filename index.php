<DOCTYPE html>
	<html lang="en">

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta name="description"
			content="Pensiunea vila Maria este situata in statiunea Busteni din masivul Bucegi, fiind a doua mare statiune din valea Prahova, cea mai cunoscuta si vizitata zona montana din peisajul romanesc. Pozitionata la aproximativ 122 kilometri nord de Bucuresti.">
		<meta name="author" content="Rob Web Design www.robwebdesign.ro [Florin Rob]">
		<link rel="icon" type="image/png" href="assets/img/peis-ico.png">

		<title>Vila-Maria-Busteni</title>

		<!-- external files -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<!-- Bootstrap core CSS -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Oswald' rel='stylesheet'
			type='text/css'> <!-- Google fonts -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Font-avesome icons -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.1.2.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
		<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
		
        <style>

		</style>

	</head>

	<body>
		<main>

                    <div class="center-form">
					<form class="contact-form" action="contactform.php" method="post">
						
						<label for="name" style="color:red"><strong>Nume:</strong></label>
						<input  type="text" name="name" placeholder="Numele:" id="fname" class="form-control" style="color:white; background-color:rgba(00,255,255, 0.3)" required />
						<label for="Pname" style="color:red"><strong>Prenume:</strong></label>
						<input  type="text" name="lname" placeholder="Prenumele:" id="pname" class="form-control" style="color:white; background-color:rgba(00,255,255, 0.3)" required />
						<label for="b-date" style="color:red"><strong>Data nasterii:</strong></label>
						<input style="color:white; background-color:rgba(00,255,255, 0.3)" type="text" name="b-date" id="b-date" class="form-control" required />
						<br>
						<label for="" style="color:red"><strong>Date contact:</strong></label>
						<input style="color:white; background-color:rgba(00,255,255, 0.3)" type="text" name="phone" id="phone" class="form-control" placeholder="Phone:" required />
						<input style="color:white; background-color:rgba(00,255,255, 0.3)" type="email" name="email" id="email" class="form-control" placeholder="Email:" required />
						<input style="color:white; background-color:rgba(00,255,255, 0.3)" type="text" name="address" id="address" class="form-control" placeholder="Address:" required />
						 	<textarea name="message" placeholder="Mesaj:"rows="8" cols="80"> </textarea>
					
						<div class="form-row text-center">
							<div class="col">
								<button type="submit" name="submit"><em>SEND<em></button>
							</div>
						</div>
					</form>
				</div>
        
        
        </main>
	</body>

	</html>

	<!-- Media Query breakpoints -->