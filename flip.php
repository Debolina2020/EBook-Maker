<?php
 include "./includes/common.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Youth Reader</title>
        <!--link of minified css-->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >-->
        <!--jquery library-->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
        <!--for flip-->
        <!--<script type=”text/javascript” src=”./modernizr.2.5.3.min.js”></script>-->
        <!--minified javascript-->
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
	margin:0;
	pading:0;
	height:100vh;
	display:flex;
	justify-content:center;
	align-items:center;
	font-family: "sans-serif";
	background:linear-gradient(90deg, #fff 50%, #4a1010 50%);
}
input{
	display: none;
}
img{
	width: 100%;
	height: 100%;
}
.book{
	display: flex;
}
#cover{
	width: 250px;
	height: 400px;
}
.flip-book{
	width: 250px;
	height: 400px;
	position: relative;
	perspective: 1500px;
}
.flip{
	width:100%;
	height:100%;
	position: absolute;
	top:0;
	left: 0;
	transform-origin:left;
	transform-style: preserve-3d;
	transform: rotateY(0deg);
	transition: .5s;
	color: #000;
}
p{
	font-size:14px;
	line-height: 24px;
}
.front{
	position: absolute;
	width:100%;
	height: 100%;
	top: 0;
	left:0;
	background-color:#fff;
	box-sizing: border-box;
	padding: 0 13px;
	box-shadow: inset 20px 0 50px rgba(0,0,0,0.5) 0 2px 5px rgba(0,0,0,0.5);
}
.back{
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	z-index: 99;
	transform: rotateY(180deg);
	backface-visibility: hidden;
	background-color: #000;
}
.next-btn{
	position: absolute;
	bottom: 13px;
	right: 13px;
	cursor: pointer;
	color:#000;
}
.back-btn{
	position: absolute;
	bottom: 13px;
	right: 13px;
	cursor: pointer;
	color:#fff;
}
#p1{
	z-index:3;
}
#p2{
	z-index:2;
}
#p3{
	z-index:1;
}
#c1:checked ~ .flip-book #p1{
	transform: rotateY(-180deg);
	z-index: 1;
}
#c2:checked ~ .flip-book #p2{
	transform: rotateY(-180deg);
	z-index: 2;
}
#c3:checked ~ .flip-book #p3{
	transform: rotateY(-180deg);
	z-index: 3;
}


        </style>
</head>
<body>
        <div class="book">
	<input type="checkbox" id="c1">
	<input type="checkbox" id="c2">
	<input type="checkbox" id="c3">
        <div id="cover"><img src="img/1.jpg"></div>
		<div class="flip-book">
			<div class="flip" id="p1">
				<div class="back">
                                    <img src="img/2.jpg">
					<label class="back-btn" for="c1">Back</label>
				</div>
				<div class="front">
					<h2>Apple</h2>
					<p>This book is now in its fifth edition. Each edition has corresponded to a different phase in the way computer networks were used. When the first edition appeared in 1980, networks were an academic curiosity. When the second edition
                                            appeared in 1988, networks were used by universities and large businesses.</p><a href="C:\Users\ACER\Downloads\SDAH SUBURBAN.pdf">learn more...</a>
                                        <label class="next-btn" for="c1">Next</label>
				</div>
			</div>
			<div class="flip" id="p2">
				<div class="back">
                                    <img src="img/3.jpg">
					<label class="back-btn" for="c2">Back</label>
				</div>
				<div class="front">
					<h2>Pineapple</h2>
					<p>This book is now in its fifth edition. Each edition has corresponded to a different phase in the way computer networks were used. When the first edition appeared in 1980, networks were an academic curiosity. When the second edition
                                            appeared in 1988, networks were used by universities and large businesses.</p><a href="">learn more...</a>
					<label class="next-btn" for="c2">Next</label>
				</div>
			</div>
			<div class="flip" id="p3">
				<div class="back">
					<label class="back-btn" for="c3">Back</label>
				</div>
				<div class="front">
					<h2>Mango</h2>
					<p>This book is now in its fifth edition. Each edition has corresponded to a different phase in the way computer networks were used. When the first edition appeared in 1980, networks were an academic curiosity. When the second edition
                                            appeared in 1988, networks were used by universities and large businesses.</p><a href="">learn more...</a>
					<label class="next-btn" for="c3">Next</label>
				</div>
			</div>
		</div>
	</div>
    </body>
</html>
