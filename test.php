<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"	
"Http://www.w3.org/TR/xhtml1/DVD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Contrnt-type" content="text/html; charset=utf-8"/>
 <title>あいさつ</title>
</head>
<body>
  <?php  $hour = date('H'); // 現在の時を$hour変数に格納 ?>

  <?php if (5 <= $hour && $hour < 10): // ５時から１０時までの間 ?>
  <P>おはようございます</P>
  <?php elseif (10 <= $hour && $hour < 18): // １０時から１８時までの間 ?>
  <p>こんにちは。</p>
  <?php else: // それ以外 ?>
  <P>こんばんは。</P>
  <?php endif; ?>
  
  <p>現在<?php echo $hour; ?>時です。</p>
  
  </body>
</html>