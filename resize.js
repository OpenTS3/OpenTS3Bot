function Resize() {
this.init();
}
Resize.prototype = {
init: function() {
var userAgent = new String(navigator.userAgent).toLowerCase();

if (userAgent.indexOf("msie", 0) > 0) {//Only call it on IE
Event.observe(window, 'load', this.resizeIFrame.bindAsEventListener(this)); //This is where the magic happens
}
},

resizeIFrame: function() {  
var frame = $('iframe');  
var renderedDocumentHeight = frame.contentWindow.document.body.scrollHeight;  

if (renderedDocumentHeight < 600) {       
renderedDocumentHeight = 600;//Set a minimum height in case the document is really small
}  
frame.height = renderedDocumentHeight;
}
}