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

$(document).ready( function() {
	share_on_facebook($('#fb_share'));
	share_on_twitter($('#tw_share'));
});