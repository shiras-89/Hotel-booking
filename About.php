<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <?php include("Assets.php"); ?>
	<style>
		body{
			
			background: url("images/3.jpg")no-repeat center center fixed;
		}
	</style>
</head>

<body>
    <?php $page = "about";
    include('Header.php'); ?>
    <br> <br>
    <center>
        <div class="container">

            <h4> About </h4>
            <hr>

            <p>The story of Souther Pearl Hotel Colombo which opened its doors in 2004 is a splendid tale of continual improvement of product and the highest standards of quality in hospitality.
Having embraced over 3 decades of expertise in hospitality our vision and beliefs are firmly grounded in extending a true personalized service to all our guests, laced with an unforgettable luxury hotel experience.
The brand has enticed many elite personalities from around the world including heads of government, prime ministers of leading nations, royalty, well known sports and entertainment personalities and many more.</p>

            <br>

            <div class="card mb-3" style="max-width: 540px; background-color:#9a9a9a ; text-align:left">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="images/sha.jpg" class="card-img img-fluid">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="margin:10% 10% 10% 0%">
                            <h4 class="card-title">Shiras Shahee</h4>
                            <p class="card-text" style="margin-top:-12px">(Chairman)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <br><br><br><br>
    <?php include('Footer.php') ;?>
</body>

</html>