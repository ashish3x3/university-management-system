<table width="59%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="box_left">&nbsp;</td>
    <td width="784" id="box_mid"><table width="100%" height="31" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="5%" style="border-right:solid 1px #CC0000;"><div align="center">No</div></td>
        <td width="62%" style="border-right:solid 1px #CC0000;"><div align="center">Exam Subject</div></td>
        <td width="11%"><div align="center">Detail</div></td>
      </tr>
    </table></td>
    <td width="18" id="box_right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" id="box_border" valign="top" align="center"><div align="center">
      <table border="0" width="98%">
        <?
			$rs=mysql_query("select * from examresult where studid='nayan' order by examid desc");
			$i=1;
			while($r=mysql_fetch_array($rs))
			{
				echo"<tr><td align=center width=6%>$i</td><td align=left width=61%>&nbsp;&nbsp;<a href=./exam_detail.php?id=".$r['examid'].">".$r['examsubject']."</a></td><td align=center width=11%><a href=./exam_detail.php?id=".$r['examid']."><img src=./images/detail_item.png alt=Detail border=0></a></td></tr>";
				$i++;
			}
		?>
      </table>
    </div></td>
  </tr>
</table>
