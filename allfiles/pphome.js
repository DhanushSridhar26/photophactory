
var pre=window.pageYOffset;
window.onscroll=function() {
var cur=window.pageYOffset;
if (pre>cur) {	
	document.getElementById('headv').style.top='0px';
}
else {document.getElementById('headv').style.top='-100px';
}
pre=cur;
}