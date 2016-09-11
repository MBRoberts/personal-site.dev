// see:
// http://ejohn.org/blog/javascript-micro-templating/

// Simple JavaScript Templating
// John Resig - http://ejohn.org/ - MIT Licensed
(function(){
	var cache = {};

	this.tmpl = function tmpl(str, data){
		// Figure out if we're getting a template, or if we need to
		// load the template - and be sure to cache the result.
		var fn = !/\W/.test(str) ?
			cache[str] = cache[str] ||
			tmpl(document.getElementById(str).innerHTML) :

		// Generate a reusable function that will serve as a template
		// generator (and which will be cached).
		new Function("obj",
			"var p=[],print=function(){p.push.apply(p,arguments);};" +

			// Introduce the data as local variables using with(){}
			"with(obj){p.push('" +

			// Convert the template into pure JavaScript
			str
				.replace(/[\r\t\n]/g, " ")
				.split("<%").join("\t")
				.replace(/((^|%>)[^\t]*)'/g, "$1\r")
				.replace(/\t=(.*?)%>/g, "',$1,'")
				.split("\t").join("');")
				.split("%>").join("p.push('")
				.split("\r").join("\\'")

			+ "');}return p.join('');");

		// Provide some basic currying to the user
		return data ? fn( data ) : fn;
	};
})();

// Data 
$(function() {

	var dataObject = {
		contacts:[
			{	
				id : 0,
				name : "Bob",
				email : "bob@email.com",
				phone : "123-123-1234"
			}, {
				id : 1,
				name : "Sarah",
				email : "sarah@email.com",
				phone : "123-123-1234"
			}, {
				id : 2,
				name : "George",
				email : "george@email.com",
				phone : "987-987-8765"
			}
		]
	};
	
	$.localStorage.set("dataObject", dataObject);
	insertTable();

});


$('#btn-new').click(function(e) {

	e.preventDefault();

	var dataObject = $.localStorage.get("dataObject");
	var newContact = {
		
		id : (dataObject.contacts.length + 1),
		name : $('#input-new-name').val(),
		email : $('#input-new-email').val(),
		phone : $('#input-new-phone').val()

	};

	dataObject.contacts.push(newContact);
	$.localStorage.set("dataObject", dataObject);
	$(".form-control").val("");
	insertTable();

});

$('#btn-clear').click(function(e) {
	$(".form-control").val("");
});

$('#btn-search').click(function(e) {
	$.each($("#results").children("tr"), function() {
        if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1){
			$(this).hide();
		} else {
            $(this).show();
        }
    });
})


function insertTable() {

	var dataObject = $.localStorage.get("dataObject");
	var results = document.getElementById("results");

	results.innerHTML = tmpl("item_tmpl", dataObject);
	editBtnListeners();

}


function editBtnListeners() {

	$('.btn-edit').click(function(e) {

		var btnData = $(this).data('tablerow');
		var tableRow = $('#' + btnData);
		var tableDataName = $(tableRow).children()[0];
		var tableDataEmail = $(tableRow).children()[1];
		var tableDataPhone = $(tableRow).children()[2];

		$('#input-edit-name').val(tableDataName.innerText);
		$('#input-edit-email').val(tableDataEmail.innerText);
		$('#input-edit-phone').val(tableDataPhone.innerText);
		
		$('#btn-save').on('click', function(e) {
			
			e.preventDefault();

			var dataObject = $.localStorage.get("dataObject");

			dataObject.contacts[(btnData)].name = $('#input-edit-name').val();
			dataObject.contacts[(btnData)].email = $('#input-edit-email').val();
			dataObject.contacts[(btnData)].phone = $('#input-edit-phone').val();

			$.localStorage.set("dataObject", dataObject);

			$('#btn-save').off('click');

			insertTable();

		});
	});
};







































