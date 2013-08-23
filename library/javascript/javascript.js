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
				
		document.getElementById('err-contact').innerHTML = "please insert your firstname.";
		return false;
		
	};
	
	if (require(targetForm.youremail)==false || checkEmail(targetForm.youremail)==false){
		
		document.getElementById('err-contact').innerHTML = "your email is not true!";
		return false;
		
	};
	
	if(require(targetForm.subject)==false){
		
		document.getElementById('err-contact').innerHTML = "please insert your subject.";
		return false;
		
	};
	
	if(require(targetForm.message)==false){
		
		document.getElementById('err-contact').innerHTML = "please insert your message.";
		return false;
		
	};
	
	return true;
	
};

function checklogin (targetForm){
	
	if(require(targetForm.userlogin)==false ||  checknumber(targetForm.userlogin) == false ||tennumber(targetForm.userlogin)==false){
		
		document.getElementById('err-login').innerHTML = "please insert the Collegian.No.";
		return false;
		
	};
	
	if(require(targetForm.passlogin)==false){
		
		document.getElementById('err-login').innerHTML = "please insert the password.";
		return false;
		
	};

};

function checkregister (targetForm){
	
	if(require(targetForm.userreg)==false ||  checknumber(targetForm.userreg) == false ||tennumber(targetForm.userreg)==false){
		
		document.getElementById('err-register').innerHTML = "please insert the Collegian.No.";
		return false;
		
	};
	
	if(require(targetForm.passreg)==false){
		
		document.getElementById('err-register').innerHTML = "please insert the password.";
		return false;
		
	};
	
	if(require(targetForm.repeatpassreg)==false){
		
		document.getElementById('err-register').innerHTML = "Repeat password is empty";
		return false;
		
	};
	
	if (require(targetForm.emailreg)==false || checkEmail(targetForm.emailreg)==false){
		
		document.getElementById('err-register').innerHTML = "your email is not true!";
		return false;
		
	};
	
	if(require(targetForm.fnamereg)==false){
		document.getElementById('err-register').innerHTML = "Insert your Firstname.";
		return false;
		
	};
	
	if(require(targetForm.lnamereg)==false){
		document.getElementById('err-register').innerHTML = "Insert your Lastname.";
		return false;
		
	};
	if(targetForm.passreg.value != targetForm.repeatpassreg.value){
		
		document.getElementById('err-register').innerHTML = "Repeat password != password";
		return false;
	}
	if(require(targetForm.nationalreg)==false || checknumber(targetForm.nationalreg) == false ||tennumber(targetForm.nationalreg)==false){
		document.getElementById('err-register').innerHTML = "Insert National.No";
		return false;
		
	};
		
	return true;
	
};

function checkforgotpass (targetForm){
	
	if(require(targetForm.userforgot)==false ||  checknumber(targetForm.userforgot) == false ||tennumber(targetForm.userforgot)==false){
		document.getElementById('err-forgot').innerHTML = "please insert the Collegian.No.";
		return false;
		
	};
	
	if(require(targetForm.nationalforgot)==false || checknumber(targetForm.nationalforgot) == false ||tennumber(targetForm.nationalforgot)==false){
		document.getElementById('err-forgot').innerHTML = "Insert National.No";
		return false;
	};
	
	if (require(targetForm.emailforgot)==false || checkEmail(targetForm.emaiforgot)==false){
		document.getElementById('err-forgot').innerHTML = "your email is not true!";
		return false;
		
	};
	
};

function checkpersonaledit (targetForm){
	
	if(require(targetForm.nationalpro)==false || checknumber(targetForm.nationalpro)==false ||tennumber(targetForm.nationalpro)==false){
		document.getElementById('err-personaledit').innerHTML = "Insert National.No";
		return false;
	};
	
	if (require(targetForm.emailpro)==false || checkEmail(targetForm.emailpro)==false){
		document.getElementById('err-personaledit').innerHTML = "your email is not true!";
		return false;
	};
	
	if(require(targetForm.fnamepro)==false){
		document.getElementById('err-personaledit').innerHTML = "Insert your Firstname.";
		return false;
	};
	
	if(require(targetForm.lnamepro)==false){
		document.getElementById('err-personaledit').innerHTML = "Insert your Lastname.";
		return false;
	};	
	
	return true;
	
};

/*===..:: END CHECKING FIELD ::..===*/