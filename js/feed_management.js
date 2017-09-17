function selected(row){
	var d = document.getElementById(row);
	d.classList.toggle("selected");
}

$("input[type='checkbox']").on("change", function() {
	$('input[type="checkbox"]').not(this).prop("checked", false);
	removeColors();
});

/*	for LOADING POSTS	*/
$("#load_post").on("click", function() {
	var counter = 0;
	$(":checkbox").each(function() {
		var isChecked = $(this).is(":checked");
		if (isChecked) {
			counter++;
		}
	});

	// if a checkbox is selected, execute below
	if (counter > 0) {
		var checkBox = "";
		$(":checkbox").each(function() {
			var isChecked = $(this).is(":checked");

			if (isChecked) {
				checkBox = $(this).val();
			}
		});

		$.ajax({
			url: "php/feedManagement.php",
			method: "POST",
			data: {
				value: checkBox,
				condition: "load"},
			success: function(data) {
				$("#post_preview").html(data);
			}
		});
	}
});


/*	For REMOVING posts	*/
$("#delete_post").on("click", function() {
	var checkBox = "";
	$(":checkbox").each(function() {
		var isChecked = $(this).is(":checked");

		if (isChecked) {
			checkBox = $(this).val();
		}
	});

	$.ajax({
		url: "php/feedManagement.php",
		method: "POST",
		data: {
			value: checkBox,
			condition: "delete"},
		success: function(data) {
			$("#post_list").html(data);
		}
	});
});


/*	For REMOVING post comment(s)	*/
$("#delete_comment").on("click", function() {
	var checkBox = "";
	var counter = 0;
	$(".commentBoxes").each(function() {
		var isChecked = $(this).is(":checked");

		if (isChecked) {
			checkBox = $(this).val();
		}
	});

	$(".commentBoxes").each(function() {
		var isChecked = $(this).is(":checked");

		if (isChecked) {
			counter++;
		}
	});

	if (counter > 0) {
			$.ajax({
			url: "php/feedManagement.php",
			method: "POST",
			data: {delete: checkBox},
			success: function(data) {
				$("#post_comments").html(data);
			}
		});
	}
});

function removeColors() {
	$("td tr").each(function() {
		tr.removeClass("selected");
	});
}