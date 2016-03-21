FancyUI.sidebar = function(){
	$('.sidebar li').removeClass('active');
	$('.sidebar li a[href="'+document.location.href+'"]').parents('li').addClass('active');
}


FancyUI.hideSidebar = function(){
	if($('.left-side').hasClass('collapse-left')) return;
	
	this.toggleSidebar();
}

FancyUI.showSidebar = function(){
	if(!$('.left-side').hasClass('collapse-left')) return;
	
	FancyUI.toggleSidebar();
}

FancyUI.toggleSidebar = function(){
	//default
	//If window is small enough, enable sidebar push menu
	if ($(window).width() <= 992) {
	    $('.row-offcanvas').toggleClass('active');
	    $('.left-side').removeClass("collapse-left");
	    $(".right-side").removeClass("strech");
	    $('.row-offcanvas').toggleClass("relative");
	} else {
	    //Else, enable content streching
	    $('.left-side').toggleClass("collapse-left");
	    $(".right-side").toggleClass("strech");
	}

	console.log('toggling');
}

// $(".header").mouseover(FancyUI.showSidebar, null);