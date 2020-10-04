<style type="text/css">
	*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mulish', sans-serif; }

.nav_style{
	background-color: #a1cad5!important; 
}
.nav_style a{
color: white;
}
@media only screen and (max-width:600px){
	.navbar{
        height: 60px;
        width: 100%;
		display: inline-flex;
		padding: 10px;;
	
	}
	.nav{
        width: 100%;
	}

	.rightside{
		width: 50%;
		height: 50%;
	}
    .rightside h1{
		width: 50%;
		height: 50%;
		margin-top: -100;
		text-align: center;
	}
	.leftside img{
		margin-top: -150;
	}
	.section_header h1{
		text-align: center;
		margin-top: -10;
		padding-right: 2px;
	}
	.img.img-fluid{
		display: block;
		margin-left: auto;
		margin-right: auto;
 
	}
	.div.rightside{
		width: 50%;
	}
	
}



.main_header{
	height: 450px;
	width: 100%;
}

.rightside h1{
	font-size: 3rem;
}

.leftside img{ animation: mask 5s linear infinite; }

@keyframes mask {
	0%
	{
		transform: scale(.75);
	}
	20%
	{
		transform: scale(1);
	}
	40%
	{
		transform: scale(.75);
	}
	60%
	{
		transform: scale(1);
	}
	80%
	{
		transform: scale(.75);
	}
	100%
	{
		transform: scale(1);
	}
}
</style> 

