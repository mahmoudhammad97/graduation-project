	// Initial state
	var scrollPos = 0;
	// adding scroll event
	window.addEventListener('scroll', function()
	{	// detects new state and compares it with the new one
	  	if ((document.body.getBoundingClientRect()).top > scrollPos)
  		{
			document.getElementById("bar").style.top = "0px";
			document.getElementById("interface").style.marginTop = "45px";
		}
		else
		{
			document.getElementById("bar").style.top = "-45px";
			document.getElementById("interface").style.marginTop = "0px";
		}
		// saves the new position for iteration.
		scrollPos = (document.body.getBoundingClientRect()).top;
	});
