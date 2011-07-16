// When the document loads do everything inside here ...
jQuery(document).ready(function(){
	
// Hover effect on index page
jQuery(" .first-post, .archive-post").hover(function() {
jQuery(this).animate({ backgroundColor: '#eee'},600);
},function() {
jQuery(this).animate({ backgroundColor: '#fff'},600);
});

// Hover for images
jQuery("img").hover(function() {
jQuery(this).animate({borderColor: '#555'},600);
},function() {
jQuery(this).animate({borderColor: '#ddd'},600);
});

// Menu -> Dont' touch Start
jQuery("#wrap .main-menu li, #wrap li").hover(function(){ 
jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).slideDown('fast').show();
},function(){ 
jQuery(this).find('ul:first').css({}).slideUp('fast').show();
});

jQuery("#wrap ul.sub-menu").parent().prepend("<span></span>"); 
// Menu -> Dont' touch End

// Mobile Menu -> Dont' touch Start
jQuery(".open").click(function(){
jQuery("#wrap_mobile").css({visibility:"visible", display: "block"});
});

jQuery("#wrap2 li").click(function(){
jQuery("#wrap_mobile").css({visibility:"hidden", display: "none"});
});

jQuery(".close").click(function(){
jQuery("#wrap_mobile").css({visibility:"hidden", display: "none"});
});

jQuery("#wrap_mobile").click(function(){
jQuery("#wrap_mobile").css({visibility:"hidden", display: "none"});
});
// Mobile Menu -> Dont' touch End

});