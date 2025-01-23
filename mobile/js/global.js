/*
var storageKey		= "bmlzaWdwczE=";
var localAccount 	= "monitoreo";
var plataformaLink  = "http://142.93.185.141:8080/monitoreo/Track?";
var bannerLink  	= "http://142.93.185.141:8080/monitoreo/images/banner";
var googleKey   	= "AIzaSyBEPCRDO0w_ELCdi8JmvdmGF3VbZS6SPqA";
*/

function lg(msg){
    root.console.log("%cLog: " + "%c"+msg, "color:#BF04A5", "color:#3276b1");
};

function doAnimation(codDiv, animation) {
	// Requiere animatecss.com
    $(codDiv).removeClass(function(){
    	return $( this ).prev().attr("class")
    }).addClass('animated '+ animation).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
    	//toLog("doAnimation: " + codDiv + "," + animation);
    	if (animation === "bounceOut"){
    		$(codDiv).hide();
    	}
    	$(codDiv).removeClass('animated ' + animation);
    });
};

/*
var storageData 	= {
	accountID:          "",
	userID: 			"",
	password: 			"",
	description:        "",
	isActive: 			0,
    groupID:        	"",
};

*/
