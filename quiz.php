<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style2.css">
<title>Cuộc thi hương</title>
<body>
    <div class="quizContainer container-fluid well well-lg">
        <div id="quiz1" class="text-center">
			<h3>CUỘC THI HƯƠNG</h3>
			<center><img class="img-responsive" height="180" width="180" src="images/luuhuong.jpg" style="border-radius: 10%;"></center>
			<h4 class="hidden-xs hidden-md" style="color:#FF0000;position:absolute;left:70%;top:30%;" align="center" ><span id="iTimeShow" >Time Remaining: </span><br/><span id='timer' style="font-size:25px;"></span></h4>
			<h2>Good luck!</h2>
		</div>
		
        <div class="question"></div>
        <ul class="choiceList"></ul>
        <div class="quizMessage"></div>
        <div class="result"></div>
		<button class="preButton">Previous Question</button>
        <button class="nextButton">Next Question</button>
    </div>
</body>
</html>
<?php include('footer.php'); ?>