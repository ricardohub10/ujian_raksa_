<?php
include "../koneksi.php";
$idgroup = $_GET['idgroup'];
header("Content-Type: application/vnd.msword");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=hasilekspor.doc");

?>
<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 14 (filtered)">
<style>
 /* Font Definitions */
	@font-face
		{font-family:"MS Mincho";
		panose-1:2 2 6 9 4 2 5 8 3 4;}
	@font-face
		{font-family:"MS Mincho";
		panose-1:2 2 6 9 4 2 5 8 3 4;}
	@font-face
		{font-family:Calibri;
		panose-1:2 15 5 2 2 2 4 3 2 4;}
	@font-face
		{font-family:Tahoma;
		panose-1:2 11 6 4 3 5 4 4 2 4;}
	@font-face
		{font-family:"\@MS Mincho";
		panose-1:2 2 6 9 4 2 5 8 3 4;}
	/* Style Definitions */
	p.MsoNormal, li.MsoNormal, div.MsoNormal
		{margin-top:0cm;
		margin-right:0cm;
		margin-bottom:10.0pt;
		margin-left:0cm;
		line-height:115%;
		font-size:11.0pt;
		font-family:"Calibri","sans-serif";}
	p.MsoHeader, li.MsoHeader, div.MsoHeader
		{mso-style-link:"Header Char";
		margin:0cm;
		margin-bottom:.0001pt;
		font-size:11.0pt;
		font-family:"Calibri","sans-serif";}
	p.MsoFooter, li.MsoFooter, div.MsoFooter
		{mso-style-link:"Footer Char";
		margin:0cm;
		margin-bottom:.0001pt;
		font-size:11.0pt;
		font-family:"Calibri","sans-serif";}
	p
		{margin-right:0cm;
		margin-left:0cm;
		font-size:12.0pt;
		font-family:"Times New Roman","serif";}
	p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
		{mso-style-link:"Balloon Text Char";
		margin:0cm;
		margin-bottom:.0001pt;
		font-size:8.0pt;
		font-family:"Tahoma","sans-serif";}
	p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
		{margin-top:0cm;
		margin-right:0cm;
		margin-bottom:10.0pt;
		margin-left:36.0pt;
		line-height:115%;
		font-size:11.0pt;
		font-family:"Calibri","sans-serif";}
	span.HeaderChar
		{mso-style-name:"Header Char";
		mso-style-link:Header;}
	span.FooterChar
		{mso-style-name:"Footer Char";
		mso-style-link:Footer;}
	span.BalloonTextChar
		{mso-style-name:"Balloon Text Char";
		mso-style-link:"Balloon Text";
		font-family:"Tahoma","sans-serif";}
	p.msolistparagraphcxspfirst, li.msolistparagraphcxspfirst, div.msolistparagraphcxspfirst
		{mso-style-name:msolistparagraphcxspfirst;
		margin-top:0cm;
		margin-right:0cm;
		margin-bottom:0cm;
		margin-left:36.0pt;
		margin-bottom:.0001pt;
		line-height:115%;
		font-size:11.0pt;
		font-family:"Calibri","sans-serif";}
	p.msolistparagraphcxspmiddle, li.msolistparagraphcxspmiddle, div.msolistparagraphcxspmiddle
		{mso-style-name:msolistparagraphcxspmiddle;
		margin-top:0cm;
		margin-right:0cm;
		margin-bottom:0cm;
		margin-left:36.0pt;
		margin-bottom:.0001pt;
		line-height:115%;
		font-size:11.0pt;
		font-family:"Calibri","sans-serif";}
	p.msolistparagraphcxsplast, li.msolistparagraphcxsplast, div.msolistparagraphcxsplast
		{mso-style-name:msolistparagraphcxsplast;
		margin-top:0cm;
		margin-right:0cm;
		margin-bottom:10.0pt;
		margin-left:36.0pt;
		line-height:115%;
		font-size:11.0pt;
		font-family:"Calibri","sans-serif";}
	p.msochpdefault, li.msochpdefault, div.msochpdefault
		{mso-style-name:msochpdefault;
		margin-right:0cm;
		margin-left:0cm;
		font-size:12.0pt;
		font-family:"Calibri","sans-serif";}
	p.msopapdefault, li.msopapdefault, div.msopapdefault
		{mso-style-name:msopapdefault;
		margin-right:0cm;
		margin-bottom:10.0pt;
		margin-left:0cm;
		line-height:115%;
		font-size:12.0pt;
		font-family:"Times New Roman","serif";}
	.MsoChpDefault
		{font-size:10.0pt;
		font-family:"Calibri","sans-serif";}
	.MsoPapDefault
		{margin-bottom:10.0pt;
		line-height:115%;}
	@page WordSection1
		{size:595.3pt 841.9pt;
		margin:21.3pt 72.0pt 72.0pt 42.55pt;}
	div.WordSection1
		{page:WordSection1;}
</style>

</head>

<body lang=EN-US>

<div class=WordSection1>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:77.75pt'>
  <td width=93 colspan=3 valign=top style='width:69.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:77.75pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><img width=77 height=89 id="Picture 4" src="xxxx_files/image001.gif"
  alt="Description: logo pptqms trans"></p>
  </td>
  <td width=562 colspan=6 valign=top style='width:421.8pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:77.75pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><img width=548 height=105 id="Picture 5" src="xxxx_files/image002.gif"></p>
  </td>
 </tr>
 <tr>
  <td width=655 colspan=9 valign=top style='width:491.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'><hr></span></b></p>
  </td>
 </tr>
 <tr>
  <td width=56 valign=top style='width:41.9pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>Nama </span></b></p>
  </td>
  <td width=19 valign=top style='width:14.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>:</span></b></p>
  </td>
  <td width=18 valign=top style='width:13.35pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=72 valign=top style='width:54.3pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=72 valign=top style='width:54.35pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=147 valign=top style='width:110.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=121 valign=top style='width:90.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>Mata Pelajaran </span></b></p>
  </td>
  <td width=36 valign=top style='width:26.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>:</span></b></p>
  </td>
  <td width=114 valign=top style='width:85.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr>
  <td width=56 valign=top style='width:41.9pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>Kelas </span></b></p>
  </td>
  <td width=19 valign=top style='width:14.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>:</span></b></p>
  </td>
  <td width=18 valign=top style='width:13.35pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=72 valign=top style='width:54.3pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=72 valign=top style='width:54.35pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=147 valign=top style='width:110.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=121 valign=top style='width:90.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>Guru Pelajaran </span></b></p>
  </td>
  <td width=36 valign=top style='width:26.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>:</span></b></p>
  </td>
  <td width=114 valign=top style='width:85.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
 </tr>
</table>


<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=655 colspan=4 valign=top style='width:491.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span lang=IN style='font-family:"Times New Roman","serif"'>I.
  Pilihlah 1 jawaban yang paling tepat dengan memberikan tanda (x) pada jawaban
  a, b, atau c</span></b></p>
  </td>
 </tr>
 <?php
	$no = 1;
	$singlechoice = mysqli_query($mysqli,"select * from soal where idgroup = '$idgroup' and jenissoal='singlechoice' ");
	while($sc = mysqli_fetch_array($singlechoice)){
 ?>
 <tr>
  <td width=32 valign=top style='width:24.3pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $no++; ?></span></p>
  </td>
  <td width=590 colspan=2 valign=top style='width:442.75pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:
  "Times New Roman","serif"'><?php echo $sc['soal']; ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=32 valign=top style='width:24.3pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=26 valign=top style='width:19.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>a.</span></p>
  </td>
  <td width=564 valign=top style='width:422.95pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:
  "Times New Roman","serif"'><?php echo $sc['pilihana']; ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=32 valign=top style='width:24.3pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=26 valign=top style='width:19.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>b.</span></p>
  </td>
  <td width=564 valign=top style='width:422.95pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'><?php echo $sc['pilihanb']; ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=32 valign=top style='width:24.3pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=26 valign=top style='width:19.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>c.</span></p>
  </td>
  <td width=564 valign=top style='width:422.95pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'><?php echo $sc['pilihanc']; ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=32 valign=top style='width:24.3pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=26 valign=top style='width:19.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>d.</span></p>
  </td>
  <td width=564 valign=top style='width:422.95pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'><?php echo $sc['pilihand']; ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=32 valign=top style='width:24.3pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=26 valign=top style='width:19.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>e.</span></p>
  </td>
  <td width=564 valign=top style='width:422.95pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'><?php echo $sc['pilihane']; ?></span></p>
  </td>
 </tr>
 <br>
 
	<?php } ?>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=655 colspan=3 valign=top style='width:491.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span lang=IN style='font-family:"Times New Roman","serif"'>II.
  Isilah titik-titik berikut ini dengan jawaban yang tepat!</span></b></p>
  </td>
 </tr>
 <?php
	$no = 1;
	$shortanswer = mysqli_query($mysqli,"select * from soal where idgroup = '$idgroup' and jenissoal='shortanswer' ");
	while($sa = mysqli_fetch_array($shortanswer)){
 ?>
 <tr>
  <td width=33 valign=top style='width:24.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=top style='width:24.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $no++; ?></span></p>
  </td>
  <td width=590 valign=top style='width:442.4pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span lang=IN style='font-size:12.0pt;line-height:150%;font-family:
  "Times New Roman","serif"'><?php echo $sa['soal']; ?></span></p>
  </td>
 </tr>
	<?php } ?>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:18.3pt'>
 <td width=655 colspan=4 valign=top style='width:491.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.3pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span lang=IN style='font-family:"Times New Roman","serif"'>II</span></b><b><span
  style='font-family:"Times New Roman","serif"'>I</span></b><b><span lang=IN
  style='font-family:"Times New Roman","serif"'>. </span></b><b><span
  style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>Isilah
  titik-titik berikut ini dengan (B) untuk jawaban benar dan (S) untuk jawaban
  salah</span></b></p>
  </td>
 </tr>
 <?php
	$no = 1;
	$truefalse = mysqli_query($mysqli,"select * from soal where idgroup = '$idgroup' and jenissoal='truefalse' ");
	while($tf = mysqli_fetch_array($truefalse)){
 ?>
 <tr>
  <td width=33 valign=top style='width:24.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=top style='width:24.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $no++; ?></span></p>
  </td>
  <td width=590 valign=top style='width:442.4pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $tf['soal']; ?></span></p>
  </td>
  <td width=43 style='width:32.55pt;padding:0cm 0cm 0cm 0cm'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:150%'><span style='font-size:12.0pt;line-height:
  150%;font-family:"Times New Roman","serif"'>.....</span></p>
  </td>
 </tr>
	<?php } ?>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=655 colspan=4 valign=top style='width:491.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>IV</span></b><b><span
  lang=IN style='font-family:"Times New Roman","serif"'>. Urutkan </span></b><b><span
  style='font-family:"Times New Roman","serif"'>soal-soal berikut </span></b><b><span
  lang=IN style='font-family:"Times New Roman","serif"'>dengan meletakkan nomor
  yang sesuai pada </span></b><b><span style='font-family:"Times New Roman","serif"'>kotak</span></b><b><span
  lang=IN style='font-family:"Times New Roman","serif"'> berikut ini!</span></b></p>
  </td>
 </tr>
 <?php
	$no = 1;
	$sorting = mysqli_query($mysqli,"select * from soal where idgroup = '$idgroup' and jenissoal='sorting' ");
	while($s = mysqli_fetch_array($sorting)){
 ?>
 <tr>
  <td width=33 valign=top style='width:24.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=top style='width:24.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $no++; ?></span></p>
  </td>
  <td width=590 colspan=2 valign=top style='width:442.4pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $s['soal']; ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=33 valign=top style='width:24.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=top style='width:24.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:27.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>.....</span></b></p>
  </td>
  <td width=554 valign=top style='width:415.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $s['pilihana']; ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=33 valign=top style='width:24.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=top style='width:24.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:27.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>.....</span></b></p>
  </td>
  <td width=554 valign=top style='width:415.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $s['pilihanb'];?></span></p>
  </td>
 </tr>
 <tr>
  <td width=33 valign=top style='width:24.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=top style='width:24.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:27.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>.....</span></b></p>
  </td>
  <td width=554 valign=top style='width:415.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $s['pilihanc']; ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=33 valign=top style='width:24.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=top style='width:24.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:27.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>.....</span></b></p>
  </td>
  <td width=554 valign=top style='width:415.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $s['pilihand']; ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=33 valign=top style='width:24.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=top style='width:24.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:27.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>.....</span></b></p>
  </td>
  <td width=554 valign=top style='width:415.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $s['pilihane']; ?></span></p>
  </td>
 </tr>
	<?php } ?>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
150%'><b><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
150%'><b><span lang=IN style='font-family:"Times New Roman","serif"'>&nbsp;&nbsp;</span></b><span
style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=655 colspan=4 valign=top style='width:491.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><b><span style='font-family:"Times New Roman","serif"'>V</span></b><b><span
  lang=IN style='font-family:"Times New Roman","serif"'>. </span></b><b><span
  style='font-family:"Times New Roman","serif"'>Berilah tanda x pada jawaban
  yang cocok dengan soal-soal berikut ini !</span></b></p>
  </td>
 </tr>
 <?php
	$no = 1;
	$multipleanswer = mysqli_query($mysqli,"select * from soal where idgroup = '$idgroup' and jenissoal='multipleanswer' ");
	while($ma = mysqli_fetch_array($multipleanswer)){
 ?>
 <tr>
  <td width=33 valign=top style='width:24.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $no++; ?></span></p>
  </td>
  <td width=590 colspan=2 valign=top style='width:442.4pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $ma['soal']; ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=33 valign=top style='width:24.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:27.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"MS Mincho"'>&#9744;</span></p>
  </td>
  <td width=554 valign=top style='width:415.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $ma['pilihana']; ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=33 valign=top style='width:24.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:27.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"MS Mincho"'>&#9744;</span></p>
  </td>
  <td width=554 valign=top style='width:415.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $ma['pilihanb']; ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=33 valign=top style='width:24.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:27.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"MS Mincho"'>&#9744;</span></p>
  </td>
  <td width=554 valign=top style='width:415.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $ma['pilihanc']; ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=33 valign=top style='width:24.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:27.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"MS Mincho"'>&#9744;</span></p>
  </td>
  <td width=554 valign=top style='width:415.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $ma['pilihand']; ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=33 valign=top style='width:24.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
  </td>
  <td width=36 valign=top style='width:27.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"MS Mincho"'>&#9744;</span></p>
  </td>
  <td width=554 valign=top style='width:415.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  150%'><span style='font-family:"Times New Roman","serif"'><?php echo $ma['pilihane']; ?></span></p>
  </td>
 </tr>
	<?php } ?>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
150%'><span style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>

</div>

</body>

</html>
