      <html>
      <head>

<style>
<?php include 'superstyle.css'; ?>
</style>
      <meta charset="utf-8" />
      <title>Infosajt</title>

<script src="Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.7.0/d3.min.js"></script>
      </head>
      <body>
<!-- <div style="height:500px; background-color: black; width: 600px;">-->
<div class="smallSector"> Infosajt
</div>
<div class="smallSector"> 

<div class="searchform">
	<form method="get" id="ddgSearch" action="https://duckduckgo.com/">

		<input class="ddginput" type="text" name="q" placeholder="Search…" aria-label="Search  on DuckDuckGo"/>
		<button class="ddgbutton" type="submit">Search DDG</button>
	</form>
</div>

<div class="searchform">
	<form action="https://store.steampowered.com/search/" id="advsearchform" name="advsearchform" onsubmit="AjaxSearchResults(); return false;" method="GET">
			<input class="steaminput" type="text" class="text" id="term" name="term">
				<button type="submit" class="steambutton" data-gpnav="item">
				<span>Steam search</span>
				</button>
	</form>
</div>

<div class="searchform">
	<form action="https://gg.deals/games/?view=list" method="GET">
			<input class="gginput" type="text" class="text" id="title" name="title">
				<button type="submit" class="ggbutton">
				<span>GG.deals search</span>
				</button>
	</form>
</div>

<br>

<br>




</div>
<div class="smallSector">
<div class="searchform">xyzzzzzzzzzz</div>
<div class="searchform">xyzzzzzzzzzz</div>
<div class="searchform">xyzzzzzzzzzz</div>
<!--- <iframe src="https://duckduckgo.com/search.html?prefill=Search DuckDuckGo" style="border-radius: 10px; overflow:hidden;margin:0;padding:0;width:300px;height:25px; font-size: 12px;" frameborder="0"></iframe>-->


</div>





                            
						




<div class="standardSector">
<?php include 'history.php'; ?>
</div>

<div class="standardSector">
<?php include 'profit.php'; ?>
</div>

<div class="textSector">
<?php include 'profittext.php'; ?>
</div>

<div class="standardSector">
<?php include 'ram.php'; ?>
</div>

<div class="standardSector">
<?php include 'uptime.php'; ?>
</div>

<div class="standardSector">
<?php include 'disk.php'; ?>
</div>

<div class="standardSector">
<?php include 'swap.php'; ?>
</div>

<div class="standardSector">
<?php include 'ping.php'; ?>
</div>

<div class="standardSector">
<?php include 'command.php'; ?>
</div>

      </body>
      </html>
