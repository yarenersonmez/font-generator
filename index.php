
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="tr-TR">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width" />
<title>Font Genereator Script on Image v1.0.1</title>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<link href="css/style.css" type="text/css" crossorigin="anonymous" rel="stylesheet" />
<link rel="stylesheet" media="screen" type="text/css" href="css/colorpicker.css" />

<script type="text/javascript" src="js/colorpicker.js"></script>
<script type="text/javascript" src="js/eye.js"></script>
<script type="text/javascript" src="js/utils.js"></script>
<script type="text/javascript" src="js/layout.js?ver=1.0.2"></script>
<script>
$(document).on("keypress", 'form', function (e) {
    var code = e.keyCode || e.which;
    console.log(code);
    if (code == 13) {
        console.log('Inside');
        e.preventDefault();
        return false;
    }
});
</script>


<script type="text/javascript">
    function setValue() {
        document.getElementById('v').value = "new value here";
    }
</script>

<style>
	body{
		background-color:#284E59;	
	}
	#urlformu input{ width:250px; line-height:28px; padding:5px; background-color:#F8F8F8; border:1px solid #300; margin-right:15px;}
	#urlformu input[type=text]{
		 background-color: #F8F8F8;
		border: 1px solid #330000;
		line-height: 28px;
		margin-right: 15px;
		padding: 5px;
		width: 250px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
	}
	#urlformu  button{cursor:pointer;}
	#response{
		margin-top:10px;
		width:95%;
		text-align:center;
		min-height:60px;
			
	}
</style>
</head>
<body>
<div id="wrapper" class="width">

<div id="sayfa">
<center>
<div id="metinalani">
<div id="yazi">
<img class="stencil-main" id="stencil-main" src="images/textarea.png" />
</div>
</div>
<div id="form">
<form id="veri-formu" action="imagecreator.php" enctype="application/x-www-form-urlencoded" method="get">

Yazı tipini görmek istediğiniz metni girin:</br>
<input id="yazi" name="text" size="15" type="textarea"  style="border: 1px solid #666666;border-radius: 2px; width: 400px;" name="text" size="15" type="textarea"  onload="this.value=''" onkeyup="document.getElementById('stencil-main').src='imagecreator.php?text='+text.value+'&size='+boyut.value+'&textcolor='+color.value+'&font='+font.value" placeholder="Bir metin yazın..."/> 

</br>

Boyut:
<div class="styled">
<select id="boyut" name="textboyut" >
<option value="20" style=" font-size: 20px;">20</option>
<option value="25" style=" font-size: 21px;">21</option>
<option value="22" style=" font-size: 22px;">22</option>
<option value="23" style=" font-size: 23px;">23</option>
<option value="24" style=" font-size: 24px;">24</option>
<option value="25" style=" font-size: 25px;">25</option>
<option value="26" style=" font-size: 26px;">26</option>
<option value="50" style=" font-size: 27px;">27</option>

</select>
</div>


	
	
</br>

Renk:

<input type="text" style="width:60px;" maxlength="6" size="6" id="color" value="00ff00" />

</br></br>
<input type="button" value="Uygula" onclick="document.getElementById('stencil-main').src='imagecreator.php?text='+text.value+'&size='+boyut.value+'&textcolor='+color.value+'&font='+font.value" />


<input type="hidden" id="font" value="fonts/comic.ttf"/>



</br>

</div>


</center>

<div id ="fontlist" >
<img src="images/master_of_break.png">
<input type="button" value="Uygula" onclick="document.getElementById('font').value='fonts/master_of_break.ttf';document.getElementById('stencil-main').src='imagecreator.php?text='+text.value+'&size='+boyut.value+'&textcolor='+color.value+'&font='+font.value" />

</div>
<div id ="fontlist">
<img src="images/Milton_One.png">
<input type="button" value="Uygula" onclick="document.getElementById('font').value='fonts/Milton_One.otf';document.getElementById('stencil-main').src='imagecreator.php?text='+text.value+'&size='+boyut.value+'&textcolor='+color.value+'&font='+font.value" />
</div>
<div id ="fontlist">
<img src="images/master_of_break.png">
</div>
<div id ="fontlist">
<img src="images/master_of_break.png">
</div>
<div id ="fontlist">
<img src="images/master_of_break.png">
</div><div id ="fontlist">
<img src="images/master_of_break.png">
</div><div id ="fontlist">
<img src="images/master_of_break.png">
</div><div id ="fontlist">
<img src="images/master_of_break.png">
</div><div id ="fontlist" class="last">
<img src="images/master_of_break.png">
</div>



</form>
</div>
<div class="footer-ghost"></div>


<footer class="width">
<center>
    <p>(c)2016 Yaren ERSÖNMEZ | <a href="http://yarenersonmez.com">www.yarenersonmez.com</a> </p>
</center>
</footer>
</div>
</body>
