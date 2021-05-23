
<?php
			 
echo '
	 <div class="div-table">
                <div class="div-table-col" align="center" style="width: 50px;">COIN</div>
                <div  class="div-table-col" style="width: 50px;">N</div>
                <div  class="div-table-col" style="width: 80px;">Bought for</div>
                <div  class="div-table-col" style="width: 60px;">Price now</div>
                <div  class="div-table-col" style="width: 60px;">Profit</div>
                <div  class="div-table-col" style="width: 60px;">Profit %</div>
             </div>
			 ';
			 
$i = 0;
foreach(file("logs/profit.csv") as $line) {
	
	$linearray = explode(";", $line);
	//echo "<div style='border-width: 2px;'><td width=30>$linearray[1]<td>$linearray[2]<td>$linearray[3]<td>$linearray[4]</table>";
	if($linearray[6] > 100){
		$bgcolor = '#22dd22';
	}
	else if($linearray[3] == 0){
		$bgcolor = '#aaaaaa';
	}
	else{
		$bgcolor = '#cc2222';
	}
	if($i != 0){
		if($linearray[0] != "TOTAL"){
		echo "
				<div class='div-table-row'>
					  <div class='div-table-col' style='width: 50px; background-color: $bgcolor;'>$linearray[1]</div>
					<div class='div-table-col' style='width: 50px; background-color: $bgcolor;'>$linearray[2]</div>
					<div class='div-table-col' style='width: 80px; background-color: $bgcolor;'>$linearray[3]</div>
					<div class='div-table-col' style='width: 60px; background-color: $bgcolor;'>$linearray[4]</div>
					<div class='div-table-col' style='width: 60px; background-color: $bgcolor;'>$linearray[5]</div>
					<div class='div-table-col' style='width: 60px; background-color: $bgcolor;'>$linearray[6]</div>
				</div>
				";
		}
		else{
			if($linearray[5] > 100){
				$textcolor = '#11aa11';
			}
			else{
				$textcolor = '#aa1111';
			}
			echo "

<br>
				<div class='div-text'>
				Bought for: $linearray[3] USD<br>
				Price now: $linearray[4] USD<br>
				Profit: $linearray[6] USD (<span style='color: $textcolor;'>$linearray[5]</span>)<br>
				</div>
				";
		}
	}
	$i++;
}
 ?>
