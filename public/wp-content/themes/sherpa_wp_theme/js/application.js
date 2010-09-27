/* ----------------------------------------- */
/*    Share: FB, Twiter, Delicious, Digg     */ 
/* ----------------------------------------- */
function share_on_facebook($anchor)	{
	$anchor.attr('onclick', 'return false;');
	$anchor.click( function() {
		var u = escape(document.location.href);
		var t = escape(document.title);
		var s = 'http://www.facebook.com/sharer.php?t=' + t + '&u=' + u;
		var newwindow = window.open(s,'Share on Facebook','height=350, width=550');
		if (window.focus) 
			newwindow.focus();
		
	})
}
function share_on_twitter($anchor) {
	$anchor.attr('onclick', 'return false;');
	$anchor.click( function() {
		var u = escape(document.location.href);
		var t = escape(document.title);
		var v = '';
		var s = 'http://twitter.com/share?url=' + u + '&text=' + t + '&via=' + v;
		var newwindow = window.open(s,'Share on Twitter','height=350, width=550');
		if (window.focus) 
			newwindow.focus();
			
	})	
}


/* ----------------------------------------- */
/*           Show / Hide Sub Nav             */ 
/* ----------------------------------------- */
function sub_nav() {
	var is_hovering_navSub = true;			
	function show_nav_sub($anchor) {
		var $dropDown = $anchor.siblings('ul')
		if(!($dropDown.length)) {
		} else {
			$(this).attr('onclick', 'return false;')
			$dropDown.show();					

		}
	}

	// EVENTS
	$('#nMain > ul > li a').hover( function() {
		show_nav_sub($(this));

	}, function() {
		if (is_hovering_navSub == false) {
			$('.nSub').hide();

		}					
	})
	
	

	$('#nMain li').mousedown( function() {
		show_nav_sub($(this));

	})

	$('#nMain li').focus( function() {
		show_nav_sub($(this));

	})

	$('.nSub').hover( function() {
		is_hovering_navSub = true;
		$('.nSub').show();
	}, function() {
		is_hovering_navSub = false;
		$('.nSub').hide();

	})
	
}

$(document).ready( function() {
	share_on_facebook($('#fb_share'));
	share_on_twitter($('#tw_share'));
	sub_nav();
});