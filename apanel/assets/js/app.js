$(document).ready(function() {
    if ($("#data-table")[0]) {
        $("#data-table").DataTable({
            autoWidth: !1,
            responsive: !0,
            lengthMenu: [
                [15, 30, 45, -1],
                ["15 строк", "30 строк", "45 строк", "Всё"]
            ],
            language: {
                searchPlaceholder: "Поиск"
            },
            dom: "Blfrtip",
            buttons: [{
                extend: "excelHtml5",
                title: "Export Data"
            }, {
                extend: "csvHtml5",
                title: "Export Data"
            }, {
                extend: "print",
                title: "Material Admin"
            }],
            initComplete: function(a, b) {
                $(this).closest(".dataTables_wrapper").prepend('<div class="dataTables_buttons hidden-sm-down actions"><span class="actions__item zmdi zmdi-print" data-table-action="print" /><span class="actions__item zmdi zmdi-fullscreen" data-table-action="fullscreen" /></div>')
            }
        }),
		$("body").on("click", "[data-table-action]", function(a) {
            a.preventDefault();
            var b = $(this).data("table-action");
            if ("excel" === b && $(this).closest(".dataTables_wrapper").find(".buttons-excel").trigger("click"), "csv" === b && $(this).closest(".dataTables_wrapper").find(".buttons-csv").trigger("click"), "print" === b && $(this).closest(".dataTables_wrapper").find(".buttons-print").trigger("click"), "fullscreen" === b) {
                var c = $(this).closest(".card");
                c.hasClass("card--fullscreen") ? (c.removeClass("card--fullscreen"), $("body").removeClass("data-table-toggled")) : (c.addClass("card--fullscreen"), $("body").addClass("data-table-toggled"))
            }
        })
	}
})

function toggleDisplay(selector) {
	if ($(selector).css("display") == "none") {
		$(selector).slideDown();
		return;
	}
	if ($(selector).css("display") == "block") $(selector).slideUp();
}

function copyToClipBoard(container) {
	var ta = $(container).get(0); 

	var range = document.createRange();
	range.selectNode(ta); 
	window.getSelection().addRange(range); 

	try { 
		document.execCommand('copy'); 
		showNotice("Скопировано");
		alert("Скопировано");
	} catch(err) { 
		console.log('Can`t copy, boss'); 
	} 

	window.getSelection().removeAllRanges();
}

function array_rand(array) {
	var array_length = array.length;
	var result = Math.random() * array_length;
	return Math.floor(result);
}

function rand_pass(usenums, usecaps, uselower, usesymbols, length) {
	var nums = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	var caps = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
	var lower = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
	var symbols = ["%", "*", ")", "(", "?", "@", "#", "$", "~"];
	
	var array_for_rand_pass = [];
	if (usenums) array_for_rand_pass = array_for_rand_pass.concat(nums);
	if (usecaps) array_for_rand_pass = array_for_rand_pass.concat(caps);
	if (uselower) array_for_rand_pass = array_for_rand_pass.concat(lower);
	if (usesymbols) array_for_rand_pass = array_for_rand_pass.concat(symbols);
	
	var string_result = "";
	for(var i = 0; i < length; i++) {
		string_result += array_for_rand_pass[array_rand(array_for_rand_pass)];
	}
	return string_result;
}

function genPass() {
	var res_block = document.getElementById("password-generator__result");
	res_block.innerHTML = rand_pass(true, true, true, false, 12);
}