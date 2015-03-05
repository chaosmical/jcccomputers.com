<!--
/**
 * With this function, simply add the attribute: rel="external" to the href tag for window popups
 */
function externalLinks() {
 if (!document.getElementsByTagName) return;
 var anchors = document.getElementsByTagName("a");
 for (var i=0; i<anchors.length; i++) {
   var anchor = anchors[i];
   if (anchor.getAttribute("href") &&
     anchor.getAttribute("rel") == "external") {
     anchor.onclick = function() {return launchWindow(this.href)}
	 } else if (anchor.getAttribute("href") &&
     anchor.getAttribute("rel") == "external_image") {
     anchor.onclick = function() {return launchImageWindow(this.href)}
	 }
 }
}

/**
 * @param string href to open in new window
 */
function launchWindow(href) {
	if(href=="" || !href)
		return;
	window.open(href);
	return false;
}

/**
 * @param string href to open in new window
 */
function launchImageWindow(src) {
	if(src=="" || !src)
		return;
	var myImage = new Image();
	myImage.src = src;
	var width=0
	var height=0;
	if(myImage.width!="" && myImage.height!="") {
		width = myImage.width+20;
		height = myImage.height+20;
	}
	if(width==0 || height==0)
		return;

	window.open(src,'','width='+width+',height='+height+',location=yes,toolbar=yes,menubar=yes,scrollbars=yes,resizable=yes');
	return false;
}

/*YUI().use('node-base', 'tabview', function(Y) {
	Y.on('contentready', externalLinks, 'body');
    var tabview = new Y.TabView({srcNode: '#tabs'});
    tabview.render();
});*/

-->