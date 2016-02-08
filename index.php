
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="tr-TR">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width" />
<meta content="width=1000" name="viewport">
<title>Font Genereator Script on Image v1.0.1</title>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<link href="css/style.css" type="text/css" crossorigin="anonymous" rel="stylesheet" />

<link rel="stylesheet" media="screen" type="text/css" href="css/sizefunc.css" />

<script type="text/javascript" src="jscolor.js"></script>

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
<div id="logo">
	<h1>Font Generator Script</h1>

</div>

<div id="sayfa">

<div id="metinalani">
<div id="yazi">
<img class="stencil-main" id="stencil-main" src="images/textarea.png" />
</div>
</div>
<div id="form">
<form id="veri-formu" action="imagecreator.php" enctype="application/x-www-form-urlencoded" method="get">

Yazı tipini görmek istediğiniz metni girin:</br>
<input id="yazi" name="text" size="15" type="textarea" class="textarea"  name="text" size="15" type="textarea"  onload="this.value=''" onkeyup="document.getElementById('stencil-main').src='imagecreator.php?text='+text.value+'&boyut='+size.value+'&textcolor='+color.value+'&font='+font.value" placeholder="Bir metin yazın..."/> 





       

       <div id="size">
       Boyut:     </div>
<div class="col-lg-4">
      

      <div class="input-group">
        <div class="input-group-btn">
          <button class="btn btn-primary" type="button" onclick="size_dec()"><span class="glyphicon glyphicon-minus"></span></button>
        </div>
        <input style="width:55px;height: 28px;" type="number" id="boyut" class="form-control" value="40">
        <div class="input-group-btn" style="
    float: left;
">
          <button class="btn btn-primary" type="button" onclick="size_inc()"><span class="glyphicon glyphicon-plus"></span></button>
        </div>
      </div> 
  
    </div>


	
	


Renk:
</br>
<input class="jscolor" type="text" style="width:60px;" maxlength="6" size="6" id="color" value="f5395e" />

</br></br>
<input type="button" value="Uygula" onclick="document.getElementById('stencil-main').src='imagecreator.php?text='+text.value+'&size='+boyut.value+'&textcolor='+color.value+'&font='+font.value" />


<input type="hidden" id="font" value="fonts/comic.ttf"/>


</br>

</div>



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
<script type="text/javascript">function size_inc(){
  var el = $('#boyut');
  var s = parseInt(el.val());
  el.val(s+1);
}
function size_dec(){
  var el = $('#boyut');
  var s = parseInt(el.val());
  if (s<2)s=2;
  el.val(s-1);
}</script>




</body>
