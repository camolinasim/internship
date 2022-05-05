//don't allow the user to enter anything other than a whole number
		{
		const
		intRx = /\d/,
		integerChange = (event) => {
			$("#status_area").text("");

			if (
			(event.key.length > 1) ||
			( (event.key == "-") && (!event.currentTarget.value.length) ) ||
			intRx.test(event.key)
			) return; 
			let target = event.currentTarget.id;
			$("#"+String(target)).fadeTo(100, 0.3, function() { $(this).fadeTo(500, 1.0); });
			event.preventDefault();
			$("#status_area").text("You must input a whole number");
			$("#status_area").css('color', 'red');
		};
		for (let input of document.querySelectorAll(
		'input[type="number"][step="1"]'
		)) input.addEventListener("keydown", integerChange);

		}