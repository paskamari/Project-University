// JQUERY Document

$(document).ready(function() {
	$('a.pics').fancybox({
		openEffect  : 'elastic',
		closeEffect : 'elastic'
	});
	/*===..:: START ANIMATION MENU ::..===*/
	var timer=400;	
	$('#navigation a').each(function(){
		$(this).stop().animate({'marginTop':'-80px'},timer+=150);
	});

	$('#navigation > li').hover(
		function () {
			$('a',$(this)).stop().animate({'marginTop':'-2px'},300);
		},
		function () {
			$('a',$(this)).stop().animate({'marginTop':'-80px'},300);
		}
	);
	/*===..:: END ANIMATION MENU ::..===*/
	/*===..:: START ECHO MESSAGE ::..===*/
	$('.print-session').animate({opacity: 1}, 30000);
	$('.print-session').fadeOut('slow');
	$('.print-session').click(function(){
		$(this).stop().animate({'opacity':0},500,function(){
			$(this).css({'display':'none'});
		});
	});
	/*===..:: END ECHO MESSAGE ::..===*/
	/*===..:: START AJAX LOADER ::..===*/
	$(".footer").load("library/txt-style-form/footer.html");
	
	$(".form-con").load("library/txt-style-form/login.html");
	
	$(".form-con").ajaxStart(function(){
		$(".waiting").css("display","block");
	});
	
	$(".form-con").ajaxComplete(function(){
		$(".waiting").css("display","none");
	});
	
	$(".home").click(function(){
		$(".form-con").stop().animate({'opacity':0},500,function(){
			$(".form-con").load("library/txt-style-form/login.html",function(){
				$(".form-con").delay(800).animate({'opacity':1},600);
			});
		});
	});
	
	$(".about").click(function(){
		$(".form-con").stop().animate({'opacity':0},500,function(){
			$(".form-con").load("library/txt-style-form/about.html",function(){
				$(".form-con").delay(800).animate({'opacity':1},600);
			});
		});
	});
	
	$(".contact").click(function(){
		$(".form-con").stop().animate({'opacity':0},500,function(){
			$(".form-con").load("library/txt-style-form/contact.html",function(){
				$(".form-con").delay(800).animate({'opacity':1},600);
			});
		});
	});
	
	$(".register").click(function(){
		$(".form-con").stop().animate({'opacity':0},500,function(){
			$(".form-con").load("library/txt-style-form/register.html",function(){
				$(".form-con").delay(800).animate({'opacity':1},600);
			});
		});
	});
	
	$(".search").click(function(){
		$(".form-con").stop().animate({'opacity':0},500,function(){
			$(".form-con").load("library/txt-style-form/search.html",function(){
				$(".form-con").delay(800).animate({'opacity':1},600);
			});
		});
	});
	
	/*===..:: END AJAX LOADER ::..===*/
	/*===..:: START PROFILE SETTING ::..===*/
	$('.profile').click(function(){
		$('#bodylock').css({"display":"block"});
		$('#screenprofile').css({"display":"block"});
		$('#bodyprofileform').animate({"opacity":1},1500);			
	});
	
	$('#btn-profile-close').click(function(){
		$('#bodyprofileform').animate({"opacity":0},1200,function(){
			$('#screenprofile').css({"display":"none"});
			$('#bodylock').css({"display":"none"});
		});
	});
	
	$('.txt-profile').click(function(){
		$('.txt-profile').animate({"opacity":0},500,function(){
			$('.txt-profile').css({"display":"none"});
			$('.txt-profile-edit').css({"display":"block"});
			$('.txt-profile-edit').animate({"opacity":1},500);
		});
	});
	
	$('.open-table-personaledit').click(function(){
		$(this).stop().animate({"opacity":0},500,function(){
			$(this).css({"display":"none"});
			$('.close-table-personaledit').css({"display":"block"});
			$('.close-table-personaledit').stop().animate({"opacity":1},500);
			$('#form-table-personaledit').show(500,function(){
				$('#personaledit').stop().animate({"opacity":1},500);
			});
		});
	});
	
	$('.close-table-personaledit').click(function(){
		$(this).stop().animate({"opacity":0},500,function(){
			$(this).css({"display":"none"});
			$('.open-table-personaledit').css({"display":"block"});
			$('.open-table-personaledit').stop().animate({"opacity":1},500);
			$('#personaledit').stop().animate({"opacity":0},200,function(){
				$('#form-table-personaledit').hide(400);
				
			});	
		});
	});
	
	$('.open-table-password').click(function(){
		$(this).stop().animate({"opacity":0},500,function(){
			$(this).css({"display":"none"});
			$('.close-table-password').css({"display":"block"});
			$('.close-table-password').stop().animate({"opacity":1},500);
			$('#form-table-chengepassword').show(500,function(){
				$('#chengepassword').stop().animate({"opacity":1},500);
			});
		});
	});
	
	$('.close-table-password').click(function(){
		$(this).stop().animate({"opacity":0},500,function(){
			$(this).css({"display":"none"});
			$('.open-table-password').css({"display":"block"});
			$('.open-table-password').stop().animate({"opacity":1},500);
			$('#chengepassword').stop().animate({"opacity":0},200,function(){
				$('#form-table-chengepassword').hide(400);
				
			});	
		});
	});
	
	$('.open-table-upload').click(function(){
		$(this).stop().animate({"opacity":0},500,function(){
			$(this).css({"display":"none"});
			$('.close-table-upload').css({"display":"block"});
			$('.close-table-upload').stop().animate({"opacity":1},500);
			$('#form-table-uploadpicture').show(500,function(){
				$('#uploadpicture').stop().animate({"opacity":1},500);
			});
		});
	});
	
	$('.close-table-upload').click(function(){
		$(this).stop().animate({"opacity":0},500,function(){
			$(this).css({"display":"none"});
			$('.open-table-upload').css({"display":"block"});
			$('.open-table-upload').stop().animate({"opacity":1},500);
			$('#uploadpicture').stop().animate({"opacity":0},200,function(){
				$('#form-table-uploadpicture').hide(400);
				
			});	
		});
	});
	/*===..:: END PROFILE SETTING ::..===*/
	
	/*===..:: START ANIMATION PICTURE ::..===*/
	
	$('div.images div').hover(function(){
		$('div.images div').stop().animate({'width':'100px'},400);
		$(this).stop().animate({'width':'348px'},400);
	},function(){
		$('div.images div').stop().animate({'width':'150px'},400);
	});
	
	/*===..:: END ANIMATION PICTURE ::..===*/	
});