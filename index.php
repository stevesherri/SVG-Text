<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SVG Text</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<!--<script src="fab.min.js"></script> -->
<script src="js/fab.min.js"></script>

<style>
h1{
	color:#ffffff;
	text-align:center;
}

td{
	width:625px;
	display:table-cell;
	padding:10px;
}

body{
	background-color:#000000;
}
</style>
<link href="css/fontstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
	<table>
    	<tr>
        	<td>
            	<h1>FabricJS Canvas</h1>
                <canvas id="imageCanvas" width="525" height="725" style="margin-left:48px; float:none;">
                </canvas>
			</td>
            <td>
            	<h1>SVG as Displayed in IE</h1>
            	<img src="img/ie.jpg" style="width:525px; height:725px;">
			</td>
		</tr>
	</table>
                
</body>
</html>

<script>
var canvas = new fabric.Canvas('imageCanvas', {
    backgroundColor: 'rgb(240,240,240)'
});


var path = fabric.loadSVGFromURL('img/back.svg',function(objects, options) {
	var i = 0;
	while(obj = objects[i]){
				
		if(obj.get('type') == "text"){
			var otop = obj.get('top');
			var oleft = obj.get('left');
			var thetext = obj.get('text');
			var thefont = obj.get('fontFamily');
			var color = obj.get('fill'); 
			var fontSize = obj.get('fontSize');
			var fweight = obj.get('fontWeight');
			text1 = new fabric.IText(thetext, {top:55, left:55,  textAlign:"center", fill:color, fontFamily:thefont });
			canvas.setActiveObject(text1);
			canvas.add(text1); 
		}  else {
			obj.hasControls = true;
			canvas.add(obj);
			canvas.bringToFront(obj);
		}
		i++;
		
	}
	canvas.renderAll();
});
</script>