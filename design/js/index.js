// $(function(){
// 	$("#left").click(function(){
// 		move(-1);
// 	})
// 	$("#right").click(function(){
// 		move(1);
// 	})
// });
// var width = -400;
// var index = 0;
// function move(direction){
// 	// 避免用户动作很快，导致动画效果与光标的动作不一致
// 	if($("#div1".is(":animated")){
// 		$("#div1").stop(true,true);
// 	})
// 	if(direction == -1){
// 		console.log(index);
// 		console.log(width);
// 		width = -400;
// 		index--;
// 	}else{
// 		console.log(index);
// 		console.log(width);
// 		width = 400;
// 	}
// 	//添加边界情况判断
// 	if(index < -4){
// 		width = +1200;
// 		index = 0;
// 	}else if(index > 0){
// 		width = -1200;
// 		index = -4;
// 	}
// 	$("#div1").animated({left:'+='+width+'px'},1000);
// }


$(function() {
	$("#left").click(function() {
		move(-1)
	})
	$("#right").click(function() {
		move(1)
	})
})

var width = -400 //图片的宽度
var index = 0 //当前图片的索引
function move(direction) {
	//避免用户动作很快，导致动画效果与光标的动作不一致
	if ($("#div1").is(":animated")) {
		$("#div1").stop(true, true)
	}

	if (direction == -1) {
		console.log(index)
		console.log(width)
		width = -400
		index--
	} else {
		console.log(index)
		console.log(width)
		width = 400
		index++
	}
	//添加边界情况判断
	if (index < -2) {
		width = +800;
		index = 0;
	} else if (index > 0) {
		width = -800;
		index = -2;
	}

	$("#div1").animate({
		left: '+=' + width + 'px'
	}, 1000)
}



$(function() {
	update()
	$("#div3>ul>li>a").mouseover(over)
})

var imgs = ["img/1.jpeg", "img/2.jpeg", "img/3.jpeg", "img/4.jpeg"]
var txts = ["MORE DELICIOUS 1", "MORE DELICIOUS 2", "MORE DELICIOUS 3", "MORE DELICIOUS 4"]
var index = 0
var time = null

function update() {
	$("#main").hide()
	$("#main>a>img").attr("src", imgs[index])
	$("#div2").html(txts[index])
	$("#main").fadeIn("fast")
	$("#div3>ul>li:eq(" + index + ")").addClass("over")
	$("#div3>ul>li:eq(" + index + ")").siblings().removeClass(
		"over")
	index++
	if (index == imgs.length) {
		index = 0
	}
	time = window.setTimeout("update()", 2500)
}

function over() {
	window.clearTimeout(time)
	var name = $(this).attr("name")
	index = Number(name)
	update()
}