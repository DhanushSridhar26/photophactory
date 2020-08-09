var sl=1;
function nxt() {
	
if (sl>4) {
sl=1;
}
else if (sl==1) {
document.getElementById('imgc').src='galimg/img1.JPG';
sl++;
}
else if (sl==2) {
document.getElementById('imgc').src='galimg/img30.jpg';
sl++;
}
else if (sl==3) {
document.getElementById('imgc').src='galimg/img40.jpg';
sl++;
}
else if (sl==4) {
document.getElementById('imgc').src='galimg/img4.JPG';
sl++;
}
}