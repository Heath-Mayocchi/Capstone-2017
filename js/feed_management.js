function selected(row){
	var d = document.getElementById(row);
	d.classList.toggle("selected");
}


$("input[type='checkbox']").on("change", function() {
	$('input[type="checkbox"]').not(this).prop("checked", false);
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


/**********************************************/
/*	Searching post */
$("#filter_post_btn").on("click", function() {
	var inputVal = $("#user_keyword").val();			// search value
	var fDate = $("#from_date").val();					// from date
	var tDate = $("#to_date").val();					// to date

	// If user is only searching and not using the dates
	if ((inputVal.length > 0) && (fDate.length <= 0 && tDate.length <= 0)) {
		$.ajax({
			url: "php/feedManagement.php",
			method: "POST",
			data: {keyword: inputVal},
			success: function(data) {
				$("#post_preview").html("");
				$("#post_list").html(data);		
			}
		});

	// If user is filtering posts based on dates and NOT using the search form 
	} else if ((fDate.length > 0 && tDate.length > 0) && (inputVal.length <= 0)) {
		$.ajax({
			url: "php/feedManagement.php",
			method: "POST",
			data: {
				fDate: fDate,
				tDate: tDate
			},
			success: function(data) {
				$("#post_preview").html("");
				$("#post_list").html(data);			
			}
		});

	// If user is using both the search form and the dates to search posts
	} else if ((inputVal.length > 0) && (fDate.length > 0 && tDate.length > 0)) {
		$.ajax({
			url: "php/feedManagement.php",
			method: "POST",
			data: {
				sKeyword: inputVal,
				sfDate: fDate,
				stDate: tDate
			},
			success: function(data) {
				$("#post_preview").html("");
				$("#post_list").html(data);		
			}
		});
	}
});

