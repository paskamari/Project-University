// JavaScript Document

/*===..:: Google Search ::..===*/

function googleSearch() {
	var searchTerm = "http://www.google.com/search?q=" + document.getElementById('search_field').value + " site:asrarcollege.ir";
	window.open(searchTerm);
}
/*===..:: START CHECKING FIELD ::..===*/

function require(field){
	if(field.value=="" || field.value==null){
		return false;
	}else{
		return true;
	};
};

function checknumber(field){
	if(field.value=="" || field.value==null || isNaN(field.value)){
		return false;
	}else{
		return true;
	};
};

function tennumber(field){
	if(field.value.length != 10){
		return false;
	}else{
		return true;
	};
};
	
function checkEmail(field){
	var email=field.value.length;
	var atsayn=field.value.indexOf('@');
	var dot=field.value.lastIndexOf('.');
	
	if(atsayn>0 && dot>atsayn+2 && email-dot>2){
		return true;
	}else{
		return false;
	};
};

function checkcontactus (targetForm){
	
	if(require(targetForm.firstname)==false){
				
		document.getElementById('err-contact').innerHTML = "قسمت نام پر نشده است";
		return false;
		
	};
	
	if (require(targetForm.youremail)==false || checkEmail(targetForm.youremail)==false){
		
		document.getElementById('err-contact').innerHTML = "پست الکترونیکی را صحیح وارد کنید";
		return false;
		
	};
	
	if(require(targetForm.subject)==false){
		
		document.getElementById('err-contact').innerHTML = "قسمت موضوع خالی است";
		return false;
		
	};
	
	if(require(targetForm.message)==false){
		
		document.getElementById('err-contact').innerHTML = "پیغام خود را وارد کنید";
		return false;
		
	};
	
	return true;
	
};

function checklogin (targetForm){
	
	if(require(targetForm.userlogin)==false ||  checknumber(targetForm.userlogin) == false ||tennumber(targetForm.userlogin)==false){
		
		document.getElementById('err-login').innerHTML = "شماره دانشجویی را وارد کنید";
		return false;
		
	};
	
	if(require(targetForm.passlogin)==false){
		
		document.getElementById('err-login').innerHTML = "قسمت رمز عبور پر نشده است";
		return false;
		
	};

};

function checkregister (targetForm){
	
	if(require(targetForm.userreg)==false ||  checknumber(targetForm.userreg) == false ||tennumber(targetForm.userreg)==false){
		
		document.getElementById('err-register').innerHTML = "شماره دانشجویی را وارد کنید";
		return false;
		
	};
	
	if(require(targetForm.passreg)==false){
		
		document.getElementById('err-register').innerHTML = "قسمت رمز عبور پر نشده است";
		return false;
		
	};
	
	if(require(targetForm.repeatpassreg)==false){
		
		document.getElementById('err-register').innerHTML = "رمز عبور را تکرار کنید";
		return false;
		
	};
	
	if (require(targetForm.emailreg)==false || checkEmail(targetForm.emailreg)==false){
		
		document.getElementById('err-register').innerHTML = "پست الکترونیکی را صحیح وارد کنید";
		return false;
		
	};
	
	if(require(targetForm.fnamereg)==false){
		document.getElementById('err-register').innerHTML = "قسمت نام پر نشده است";
		return false;
		
	};
	
	if(require(targetForm.lnamereg)==false){
		document.getElementById('err-register').innerHTML = "نام خانوادگی تان را وارد کنید";
		return false;
		
	};
	if(targetForm.passreg.value != targetForm.repeatpassreg.value){
		
		document.getElementById('err-register').innerHTML = "رمز عبور وارد شده با تکرارش همخوانی ندارد";
		return false;
	}
	if(require(targetForm.nationalreg)==false || checknumber(targetForm.nationalreg) == false ||tennumber(targetForm.nationalreg)==false){
		document.getElementById('err-register').innerHTML = "لطفا کد ملی تان را وارد کنید";
		return false;
		
	};
		
	return true;
	
};

function checkforgotpass (targetForm){
	
	if(require(targetForm.userforgot)==false ||  checknumber(targetForm.userforgot) == false ||tennumber(targetForm.userforgot)==false){
		document.getElementById('err-forgot').innerHTML = "شماره دانشجویی را وارد کنید";
		return false;
		
	};
	
	if(require(targetForm.nationalforgot)==false || checknumber(targetForm.nationalforgot) == false ||tennumber(targetForm.nationalforgot)==false){
		document.getElementById('err-forgot').innerHTML = "لطفا کد ملی تان را وارد کنید";
		return false;
	};
	
	if (require(targetForm.emailforgot)==false || checkEmail(targetForm.emaiforgot)==false){
		document.getElementById('err-forgot').innerHTML = "پست الکترونیکی را صحیح وارد کنید";
		return false;
		
	};
	
};

function checkpersonaledit (targetForm){
	
	if(require(targetForm.nationalpro)==false || checknumber(targetForm.nationalpro)==false ||tennumber(targetForm.nationalpro)==false){
		document.getElementById('err-personaledit').innerHTML = "لطفا کد ملی تان را وارد کنید";
		return false;
	};
	
	if (require(targetForm.emailpro)==false || checkEmail(targetForm.emailpro)==false){
		document.getElementById('err-personaledit').innerHTML = "پست الکترونیکی را صحیح وارد کنید";
		return false;
	};
	
	if(require(targetForm.fnamepro)==false){
		document.getElementById('err-personaledit').innerHTML = "قسمت نام پر نشده است";
		return false;
	};
	
	if(require(targetForm.lnamepro)==false){
		document.getElementById('err-personaledit').innerHTML = "نام خانوادگی تان را وارد کنید";
		return false;
	};	
	
	return true;
	
};

/*===..:: END CHECKING FIELD ::..===*/