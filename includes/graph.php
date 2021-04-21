<head>
<style>
	body{background:#798E9E}
	canvas{
		background:white;
		margin: auto;
		display: block;
		filter: drop-shadow(1px 1px 2px black);
	}
</style>
</head>
<body>
<canvas id="sales" width="525" height="350">
Your browser does not support the HTML canvas tag.
</canvas>
	<script>
	getData();
	function main(data)
	{
		let splitData = 
		{
			"Cyber Contacts" : [],
			"Augmented Arms" : [],
			"Exosuit" : [],
		};
		for (let x of data)
		{
			if (x['product_name'] == "Cyber Contacts")
			{
				splitData['Cyber Contacts'].push(x['date']);
			} else if (x['product_name'] == "Augmented Arms")
			{
				splitData['Augmented Arms'].push(x['date']);
			} else if (x['product_name'] == "Exosuit")
			{
				splitData['Exosuit'].push(x['date']);
			}
		}
		var occurrences = { };
		for (var i = 0, j = splitData['Exosuit'].length; i < j; i++) {
		   occurrences[splitData['Exosuit'][i]] = (occurrences[splitData['Exosuit'][i]] || 0) + 1;
		}
		let values = Object.values(occurrences);
		graph(values);
	}
	function getData()// Async function so its the function that starts the chain to avoid weird desync
	{
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() 
		{
			if (this.readyState == 4 && this.status == 200) 
			{
				main(JSON.parse(this.responseText));
			}
		};
		xmlhttp.open("GET", "retrieveData.php", true);
		xmlhttp.send();
	}
	function getMax(arr)
	{
		var largest= 0;
		for (i=0; i<=arr.length;i++){
		    if (arr[i]>largest) {
			largest=arr[i];
		    }
		}
		return largest;
	}
	function graph(input)
	{
		//sphaghetti
		const c = document.getElementById("sales");
		const ctx = c.getContext("2d");
		ctx.beginPath();
		const rowSize = [25,25];
		const chartSize = [500,325];
		const max = getMax(input);
		ctx.lineWidth = 0.25;
		let i = 0;
		while (i <= chartSize[1])
		{
			//y lines
			ctx.moveTo(0,i+25);
			ctx.lineTo(chartSize[0], i+25);
			//y label
			if(i<325)
			{
				ctx.fillText((max)-((i/25)*(max/(chartSize[1]/rowSize[1]))),505,i+25);
			}
			i += rowSize[1];
		}
		i = 0;
		while (i <= chartSize[0])
		{
			i += rowSize[0];
			//use mouseX to get mouse coord then translate to integer datapoint
			
		}
		//y label
		ctx.stroke();
		ctx.beginPath();
		ctx.lineWidth = 1;
		let x = 0;
		i = input.length - (chartSize[0]/rowSize[0]);
		//extra noodly spaghetti
		let oldcord = chartSize[1] * ((max-input[i])/max)+25;
		while(x<=chartSize[0])
		{
			let y = chartSize[1] * ((max-input[i])/max)+25;
			ctx.moveTo(oldcord[0],oldcord[1]);
			ctx.lineTo(x, y);
			oldcord = [x,y]
			x+=rowSize[0];
			i++;
		}
		ctx.strokeStyle="red";
		ctx.stroke();
	}		
	function getMousePosition(canvas, event) 
	{
		let rect = canvas.getBoundingClientRect();
		let mouseX = event.clientX - rect.left;
        }
      
        let canvasElem = document.querySelector("canvas");
          
        canvasElem.addEventListener("mousemove", function(e)
        {
            getMousePosition(canvasElem, e);
        });		
	graph();
	</script>
</body>
