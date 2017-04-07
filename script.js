currentimage = 0;
gallery();

function gallery(direction)
{
	document.getElementById("gallery" + currentimage).style.display = "none";
	if (direction == "forward")
	{
		currentimage++;
		if (currentimage > maximage)
		{
			currentimage = 0;
		}
	}

	if (direction == "back")
	{
		currentimage--;
		if (currentimage < 0)
		{
			currentimage = maximage;
		}
	}
	document.getElementById("gallery" + currentimage).style.display = "initial";
}