<!DOCTYPE html>
<html>
<head>
	<title>Web Camera</title>
	<meta charset="utf-8">
	<title>Webcam Stream</title>
	<style type="text/css">
		#container{
		margin: 0px auto;
		width: 900px;
		height: 700px;
		border: 10px #333 solid;
	}
	#videoElement{
		width: 900px;
		height: 700px;
		background-color: #666;
	}
	</style>
</head>
<body bgcolor="skyblue">
	<div id="container">
		<video autoplay="true" id="videoElement"></video>
	</div>
<script>
var video=document.querySelector("#videoElement");
navigator.getUserMedia=navigator.getUserMedia||navigator.webkitGetUserMedia||navigator.mozGetUserMedia||navigator.msGetUserMedia||navigator.oGetUserMedia;
if(navigator.getUserMedia){
navigator.getUserMedia({video:true},handleVideo,videoError);
}
function handleVideo(stream){
video.srcObject = stream;
}
function videoError(e){ 
}
</script>
</body>
</html>