<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="zh-TW">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>蔡孟潔簡介</title>
	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:blue; font-size:60px;}
		h2 {color:#33ff33; font-size:40px;}
	</style>
	<script>
		function change1() {
  			document.getElementById("pic").src = "me.jpg";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h2text").innerText = "mjie";
		}
	</script>


</head>
<body>
<table width="70%">
<tr>
<td>
<img src="cliff.jpg"width="110%id="pic" onmouseover="change1()" onmouseout="change2()"></img>
</td>>
<td>

<h1>蔡孟潔<h1>
<h2 id="h2text">mjie</h2>
</td>
</tr>
</table>

<table width="70%" border="1">
<tr>
<td>

<h4>mis相關工作<h4>
mis相關工作:<a href="管理導論.html">點我進入</a><br>

</td>

<td>

大象席地而坐電影配樂<br>
	<audio controls>
		<source src="elephant.mp3" type="audio/mP3">
	</audio><br>
</td>
<td>


不要去臺灣<br>


	<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
</td>
</tr>
</table>
	<?php echo date("Y-m-d") ?>

</body>
</html>