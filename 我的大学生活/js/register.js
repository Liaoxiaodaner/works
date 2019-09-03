/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-12-09 00:00:37
 * @version $Id$
 */
	function check(){
        var name=document.form1.input1.value;
    	if (name.length==0) {
    		alert("姓名不能为空");
    		return false;
    	}else if (name.length<2 || name.length>4) {
    		alert("姓名长度为2-4个字符");
    		return false;
    	}
    
    	var id=document.form1.input2.value;
    	if (id.length==0) {
    		alert("学号不能为空");
    		return false;
    	}else if (id.length!=8) {
    		alert("学号长度为8个字符");
    		return false;
    	}

    	var phone=document.form1.input3.value;
        var reg=/^1\d{10}$/;
        if (!reg.test(phone)) {
			alert("手机号码必须是1-11位数字");
    		return false;
        }

    	var email=document.form1.input4.value;
    	if (email.length==0) {
    		alert("电子邮箱地址不能为空");
    		return false;
    	}else if (email.indexOf("@",0)==-1) {
    		alert("电子邮箱地址必须包含字符“@”");
    		return false;
    	}else if (email.indexOf(".",0)==-1) {
    		alert("电子邮箱地址必须包含字符“.”");
    		return false;
    	}

        var checkbox = document.getElementById("checkbox")
        if (checkbox.checked!=true) {
            alert("必须同意遵守会员协议");
            return false;
        }

    	var birth=document.form1.input5.value;
    	if (birth.length!=10 || birth.charAt(4)!="-" || birth.charAt(7)!="-") {
    		alert("出生日期格式不正确");
    		return false;
    	}
    	var birthdays = birth.split("-");
    	year = paseInt(birthdays[0],10);
    	month = paseInt(birthdays[1],10);
    	day = paseInt(birthdays[2],10);
    	var now = new Date();
    	nowYear = now.getFullYear();
    	if (isNaN(year) || isNaN(month) || isNaN(day)) {
    		alert("出生日期不能包含字符");
    		return false;
    	}else if (year<1900 || year>nowYear) {
    		alert("出生年份输入有误");
    		return false;
    	}else if (month<=0 || month>12) {
    		alert("出生年月份输入有误");
    		return false;
    	}else if (day<=0 || day>31) {
    		alert("出生日期输入有误");
    		return false;
    	}

    }
