jQuery(document).ready(function() {

var d = new Date();
var $mobile = jQuery('#storeLocatorInfobox .store-tel a');
var $ssfemail = jQuery('#storeLocatorInfobox .store-email a');

//console.log("cookie"+getCookie('gdpraccept'));
if(ssf_gdpr=='true' && ssfGetCookie('gdpraccept')!='yes'){
jQuery('.ssf-main-content').css('display','none');
jQuery('#ssf-gdpr').css('display','block');
} 

jQuery('#ssf-gdpr #applyFilterOptions').on('click', function(e) { 


	jQuery('.ssf-main-content').css('display','block');
	jQuery('#ssf-gdpr').css('display','none');
	ssfSetCookie('gdpraccept','yes',365);

});

jQuery('#storeLocatorInfobox .store-tel,#mobileStoreLocatorInfobox .store-tel').on('click', function(e) { 


	var location = jQuery('.store-locator__infobox--main .store-location').html();
	jQuery.ajax({
		type: "POST",
		url: ssf_wp_base + '/tracking.php?t='+d.getTime(),
		data: {ssf_store_name: location},
		cache: false,
		success: function (html){
		}
  });

});

jQuery('#storeLocatorInfobox .store-email, #mobileStoreLocatorInfobox .store-email').on('click', function(e) { 


	var location = jQuery('.store-locator__infobox--main .store-location').html();
	jQuery.ajax({
		type: "POST",
		url: ssf_wp_base + '/tracking.php?t='+d.getTime(),
		data: {ssf_email_name: location},
		cache: false,
		success: function (html){
		}
  });

});



var typingTimer;               
var doneTypingInterval = 3000;  
var $input = jQuery('#storeLocator__searchBar');

//on keyup, start the countdown
$input.on('keyup', function () {
  clearTimeout(typingTimer);
  typingTimer = setTimeout(doneTyping, doneTypingInterval);
});

//on keydown, clear the countdown 
$input.on('keydown', function () {
  clearTimeout(typingTimer);
});

function doneTyping () {
  var searchPlace = jQuery('#storeLocator__searchBar').val();
  if(searchPlace!=''){
	jQuery.ajax({
		type: "POST",
		url: ssf_wp_base + '/tracking.php?t='+d.getTime(),
		data: {ssf_wp_track_add: searchPlace},
		cache: false,
		success: function (html){
		}
  });
  }
}

function ssfSetCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function ssfGetCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}


});