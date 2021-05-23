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
