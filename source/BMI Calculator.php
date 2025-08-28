<?php include ("langconfig.php");?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>BMI Calculator - Health Journal </title>
		<link rel="icon" href="images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="navigation.css">
		<link rel="stylesheet" href="bmi.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		
		
	</head>
	<body>
		<?php
		include ("header.php");
		?>
			<div id="main">
				<div class="container-fluid">
					<h2 class="heading" style="text-align:left;"> <?php echo $lang['bmi calculator']; ?> </h2>
					<p style="background-color:#37B482; border-radius:10px; padding:20px;"> <?php echo $lang['bmi text']; ?> </p>
						<br></br>
						<form>
							<div class="adiv">
							<h3 style="font-size:19px;"> <?php echo $lang['input weight']; ?> </h3>
							<input type="text" id="weight" class="bmi" placeholder= "<?php echo $lang['weight']; ?>" />
							<br></br>
							<h3 style="font-size:19px;"> <?php echo $lang['input height']; ?> </h3>
							<input type="text" id="height" class="bmi" placeholder=" <?php echo $lang['height']; ?>" /><br></br>
							<button id="calc" class="button" onclick="calculate('<?php echo $_SESSION['lang'];?>'); return false;"> <?php echo $lang['calculate']; ?> </button><br></br>
							</div>
							<span id="res"></span>
							<br></br>
							<p id="desc" style="padding:30px;"></p>
						</form>
				</div>
			</div>
			
		<?php
		include ("footer.php");
		?>
	</body>
	
	<script src="script.js"></script>
	<script>
		function calculate(lang){
			w = document.getElementById("weight").value;
			h = document.getElementById("height").value/100;
			var bmi = Math.round(w/(h**2)*10)/10;
			var category=''; 
			var text='';
            if(lang=='en'){
                if(bmi<18.5){
                    category = 'underweight';
                    text='Consult your doctor. It is possible there is a disruption in your metabolism.';
                }
                else if(bmi<25){
                    category = 'normal weight';
                    text= 'Low chances for heart diseases, make sure to maintain your weight.';
                }
                else if(bmi<30){
                    category = 'overweight';
                    text= 'Risk of hypertension, coronary heart disease and type 2 diabetes. Make sure to not put more weight.';
                }
                else if(bmi<40){
                    category = 'obese';
                    text= 'Serious risk of hypertension, coronary heart disease and type 2 diabetes. You need to consult your doctor.';
                }
                else {
                    category = 'extremely obese';
                    text= "Extremely high risk of hypertension, coronary heart disease and type 2 diabetes. Consult a doctor immediately if you haven't already.";
                }
                if(bmi>0){
                    document.getElementById("res").innerHTML = 'Your BMI is ' + bmi + ', that means you are ' + category + '.';
                    document.getElementById("desc").innerHTML = text;
                }
                else{
                document.getElementById("res").innerHTML= 'Incorrect input, please try again.'
                text='';
                document.getElementById("desc").innerHTML = text;
                }
			}
			else{
                if(bmi<18.5){
                    category = 'λιποβαρής';
                    text='Συμβουλευτείτε το γιατρό σας. Είναι πιθανό να υπάρχει διαταραχή στον μεταβολισμό σας.';
                    }
                    else if(bmi<25){
                        category = 'κανονικό βάρος';
                        text= 'Χαμηλές πιθανότητες καρδιακών παθήσεων, φροντίστε να διατηρήσετε το βάρος σας.';
                    }
                    else if(bmi<30){
                        category = 'υπέρβαρος/η';
                        text= 'Κίνδυνος υπέρτασης, στεφανιαίας νόσου και διαβήτη τύπου 2. Φροντίστε να μην βάλετε περισσότερο βάρος.';
                    }
                    else if(bmi<40){
                        category = 'παχύσαρκος/η';
                        text= 'Σοβαρός κίνδυνος υπέρτασης, στεφανιαίας νόσου και διαβήτη τύπου 2. Πρέπει να συμβουλευτείτε το γιατρό σας.';
                    }
                    else {
                        category = 'εξαιρετικά παχύσαρκος/η';
                        text= "Εξαιρετικά υψηλός κίνδυνος υπέρτασης, στεφανιαίας νόσου και διαβήτη τύπου 2. Συμβουλευτείτε αμέσως έναν γιατρό εάν δεν το έχετε κάνει ήδη.";
                    }
                    if(bmi>0){
                        document.getElementById("res").innerHTML = 'Ο ΔΜΣ σας είναι ' + bmi + ', αυτό σημαίνει πως είστε ' + category + '.';
                        document.getElementById("desc").innerHTML = text;
                    }
                    else{
                    document.getElementById("res").innerHTML= 'Λανθασμένη εισαγωγή, παρακαλούμε προσπαθήστε ξανά.'
                    text='';
                    document.getElementById("desc").innerHTML = text;
                    }
			}
		}
	</script>
</html>