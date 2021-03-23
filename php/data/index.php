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
	<script type="text/javascript" src="sales.json"></script>
	<script>
		//sphaghetti
		const c = document.getElementById("sales");
		const ctx = c.getContext("2d");
		ctx.beginPath();
		const rowSize = [25,25];
		const chartSize = [500,325];
		ctx.lineWidth = 0.25;
		let i = 25;
		while (i <= chartSize[1]){
			//y lines
			ctx.moveTo(0,i);
			ctx.lineTo(chartSize[0], i);
			//y label
			if(i<325){
				ctx.fillText(325-i +"k",505,i);
			} else{
				ctx.fillText(325-i,505,i);
			}
			i += rowSize[1];
		}
		i = 0;
		while (i <= chartSize[0]){
			//x lines
			//ctx.moveTo(i,0);
			//ctx.lineTo(i, chartSize[1]);
			//x label
			
			i += rowSize[0];
		}
		//y label
		ctx.stroke();
		ctx.beginPath();
		ctx.lineWidth = 1;
		let x = 0;
		i = 0;
		//extra noodly spaghetti
		let oldcord = [0,chartSize[1]-sales[0].sales/100];
		while(x<=chartSize[0]){
			let y = chartSize[1] - sales[i].sales/100;
			ctx.moveTo(oldcord[0],oldcord[1]);
			ctx.lineTo(x, y);
			oldcord = [x,y]
			x+=rowSize[0];
			i++;
		}
		ctx.strokeStyle="red";
		ctx.stroke();
	</script>
</body>
