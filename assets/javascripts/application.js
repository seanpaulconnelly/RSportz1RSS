/*jslint browser: true*/
/*global $, jQuery, moment*/
// This is a manifest file that'll be compiled into application.min.js

$(document).ready(function(){
	//Setup the default bootstrap tabs
	$('#myTab a').click(function (e) {
  		e.preventDefault();
  		$(this).tab('show');
	})

	//Start with the first tab active
	$('#myTab a:first').tab('show');
});