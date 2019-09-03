/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-12-08 23:50:29
 * @version $Id$
 */
	var arr = new Array();
		arr[0] = "images/1.jpg";
		arr[1] = "images/2.jpg";
		arr[2] = "images/3.jpg";
		arr[3] = "images/4.jpg";
		arr[4] = "images/5.jpg";
	var index = 0;
	var time = null;

	function shownext(){
		var img1=document.getElementById("img1");
		img1.src=arr[index];
		index++;
		if (index==arr.length) {
			index=0;
		}
		time=window.setTimeout("shownext()",2000);
	}

	function next(){
		window.clearTimeout(time);
		shownext();
	}

	function showpre(){
		var img1=document.getElementById("img1");
		img1.src=arr[index];
		index--;
		if (index==-1) {
			index=arr.length-1;
		}
		time=window.setTimeout("showpre()",2000);
	}

	function pre(){
		window.clearTimeout(time);
		showpre();
	}
	
	function change(ss){
	if (ss=="top1") {
		document.getElementById("onechange").style.display="block";
		document.getElementById("twochange").style.display="none";
		document.getElementById("threechange").style.display="none";
		document.getElementById("fourchange").style.display="none";
		document.getElementById("one").className="over";
		document.getElementById("two").className="";
		document.getElementById("three").className="";
		document.getElementById("four").className="";
	}else if(ss=="top2"){
		document.getElementById("onechange").style.display="none";
		document.getElementById("twochange").style.display="block";
		document.getElementById("threechange").style.display="none";
		document.getElementById("fourchange").style.display="none";
		document.getElementById("one").className="";
		document.getElementById("two").className="over";
		document.getElementById("three").className="";
		document.getElementById("four").className="";
	}else if(ss=="top3"){
		document.getElementById("onechange").style.display="none";
		document.getElementById("twochange").style.display="none";
		document.getElementById("threechange").style.display="block";
		document.getElementById("fourchange").style.display="none";
		document.getElementById("one").className="";
		document.getElementById("two").className="";
		document.getElementById("three").className="over";
		document.getElementById("four").className="";
	}else if(ss=="top4"){
		document.getElementById("onechange").style.display="none";
		document.getElementById("twochange").style.display="none";
		document.getElementById("threechange").style.display="none";
		document.getElementById("fourchange").style.display="block";
		document.getElementById("one").className="";
		document.getElementById("two").className="";
		document.getElementById("three").className="";
		document.getElementById("four").className="over";
	}

}
