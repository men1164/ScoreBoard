<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<style>
    body {
	margin: 48px;
	background: #FFF;
}

.clear {
	clear: both;
}

.display-container.display-size-12 {
	margin-bottom: 24px;
}


.display-container {
	position: relative;
	margin-right: 24px;
	float: left;
}

.display-container div.segment-x,
.display-container div.segment-y {
	position: absolute;
}

.display-container span.segment-border {
	display: block;
	position: absolute;
}

.display-container.display-size-12 {
	width: 122px;
	height: 220px;
}

.display-container.display-size-12 .segment-x {
	width: 72px;
	left: 13px;
	border-bottom: 12px solid #000;
	border-left: 12px solid transparent;
	border-right: 12px solid transparent;
}

.display-container.display-size-12 .segment-x .segment-border {
	top: 12px;
	left: -12px;
	right: -12px;
	border-top: 12px solid #000;
	border-left: 12px solid transparent;
	border-right: 12px solid transparent;
}

.display-container.display-size-12 .segment-y {
	height: 72px;
	width: 0;
	border-right: 12px solid #000;
	border-top: 12px solid transparent;
	border-bottom: 12px solid transparent;
}

.display-container.display-size-12 .segment-y .segment-border {
	position: relative;
	left: 12px;
	height: 72px;
	margin-top: -12px;
	border-left: 12px solid #000;
	border-top: 12px solid transparent;
	border-bottom: 12px solid transparent;
}

.display-container.display-size-12 .segment-a { /*บน*/
	top: 0;
}

.display-container.display-size-12 .segment-b { /*ขวาบน*/
	top: 13px;
	left: 98px;
}

.display-container.display-size-12 .segment-c { /*ขวาล่าง*/
	top: 111px;
	left: 98px;
}

.display-container.display-size-12 .segment-d { /*ล่าง*/
	top: 196px;
}

.display-container.display-size-12 .segment-e { /*ซ้ายล่าง*/
	top: 111px;
	left: 0px;
}

.display-container.display-size-12 .segment-f { /*ซ้ายบน*/
	top: 13px;
	left: 0px;
}

.display-container.display-size-12 .segment-g { /*กลาง*/
	top: 98px;
}

.display-no-1 .segment-a,
.display-no-1 .segment-d,
.display-no-1 .segment-e,
.display-no-1 .segment-f,
.display-no-1 .segment-g {
	/*display: none;*/
	opacity: 0.1;
	filter: alpha(opacity=10);
}

.display-no-2 .segment-c,
.display-no-2 .segment-f {
	/*display: none;*/
	opacity: 0.1;
}

.display-no-3 .segment-e,
.display-no-3 .segment-f {
	/*display: none;*/
	opacity: 0.1;
}

.display-no-4 .segment-a,
.display-no-4 .segment-d,
.display-no-4 .segment-e {
	/*display: none;*/
	opacity: 0.1;
}

.display-no-5 .segment-b,
.display-no-5 .segment-e {
	/*display: none;*/
	opacity: 0.1;
}

.display-no-6 .segment-b {
	/*display: none;*/
	opacity: 0.1;
}

.display-no-7 .segment-d,
.display-no-7 .segment-e,
.display-no-7 .segment-f,
.display-no-7 .segment-g {
	/*display: none;*/
	opacity: 0.1;
}

.display-no-8 {}

.display-no-9 .segment-e {
	/*display: none;*/
	opacity: 0.1;
}

.display-no-0 .segment-g {
	/*display: none;*/
	opacity: 0.1;
}

/* clock */

#display-2, #display-4 {
	margin-right: 60px;
}

#vertical-center {
	position: absolute;
	height: 0;
	top: 50%;
	left: 50%
}

#clock-container {
	margin-top: -110px;
	margin-left: -462px;
	width: 924px;
	height: 220px;
}

#clock-container .display-container:last-child {
	margin: 0;
}

#clock-container:after {
	display: block;
	content: '.';
	visibility: hidden;
	clear: both;
} 
</style>
<body>
    <div id="vertical-center"> 
		<button onclick="myFunction()">Click Me</button>   
        <div id="clock-container">
            <div id="display-1" class="display-container display-size-12 <?php echo "$d"; ?>">
                <div class="segment-x segment-a"><span class="segment-border"></span></div>
                <div class="segment-y segment-b"><span class="segment-border"></span></div>
                <div class="segment-y segment-c"><span class="segment-border"></span></div>
				<div class="segment-x segment-d"><span class="segment-border"></span></div>
			    <div class="segment-y segment-e"><span class="segment-border"></span></div>
                <div class="segment-y segment-f"><span class="segment-border"></span></div>
				<div class="segment-x segment-g"><span class="segment-border"></span></div>
			</div>
		</div>	
    </div>
</body>
<script>


function myFunction(){
	
    <?php
        for($x=0 ; $x < 10 ; $x++)
        {
            $d = "display-no-$x";
        }
    ?>
}

setInterval(setdisplays, 1000);
setdisplays();


</script>
</html>