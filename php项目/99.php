<?php
  echo '<table width="800" height="200" border="1">';
  for($i=1;$i<=9;$i++)
  {  echo'<tr>';
	  for($j=1;$j<=$i;$j++)
	  {
		  echo '<td>'.$j.'*'.$i.'='.$j*$i.'<td/>';
	  }
	  echo'<tr/>';
  }