<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Служба поддержки</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script>
function ValidateForm1(theForm)
{
   if (theForm.Editbox1.value.length < 3)
   {
      alert("Введите Фамилию и инициалы");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox1.value.length > 30)
   {
      alert("Введите Фамилию и инициалы");
      theForm.Editbox1.focus();
      return false;
   }
   var regexp;
   if (theForm.Combobox1.selectedIndex < 0)
   {
      alert("Укажите подразделению");
      theForm.Combobox1.focus();
      return false;
   }
   if (theForm.Combobox1.selectedIndex == 0)
   {
      alert("Укажите подразделению");
      theForm.Combobox1.focus();
      return false;
   }
   regexp = /^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i;
   if (theForm.Editbox2.value.length != 0 && !regexp.test(theForm.Editbox2.value))
   {
      alert("Укажите электронную почту");
      theForm.Editbox2.focus();
      return false;
   }
   if (theForm.Editbox2.value.length < 3)
   {
      alert("Укажите электронную почту");
      theForm.Editbox2.focus();
      return false;
   }
   if (theForm.Editbox2.value.length > 30)
   {
      alert("Укажите электронную почту");
      theForm.Editbox2.focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.Editbox4.value))
   {
      alert("Укажите номер телефона");
      theForm.Editbox4.focus();
      return false;
   }
   if (theForm.Editbox4.value.length < 3)
   {
      alert("Укажите номер телефона");
      theForm.Editbox4.focus();
      return false;
   }
   if (theForm.Editbox4.value.length > 7)
   {
      alert("Укажите номер телефона");
      theForm.Editbox4.focus();
      return false;
   }   
   if (theForm.Combobox2.selectedIndex < 0)
   {
      alert("Укажите неисправность");
      theForm.Combobox2.focus();
      return false;
   }
   if (theForm.Combobox2.selectedIndex == 0)
   {
      alert("Укажите неисправность");
      theForm.Combobox2.focus();
      return false;
   }
   return true;
}
</script>
</head>
<body>
<div id="header">
	<marquee direction="left" scrolldelay="0" scrollamount="4" behavior="scroll" loop="0" id="Marquee1">
		<strong><span style="font-family:tahoma; color: red; font-size:20px; line-height:150%;text-shadow:#000000 0px 2px 2px;">По вопросам связанным с работоспособностью СВиТО обращаться через "Службу поддержки" на рабочем столе или по телефонам 719-438, 719-243</span></strong>
	</marquee>
</div>

<div id="send">
	<form name="Form1" method="post" action="scripts/form.php" enctype="multipart/form-data" accept-charset="UTF-8" id="Form1" onSubmit="return ValidateForm1(this)">
		<input type="hidden" name="formid" value="form1">
		<p id="zagolov">ОСТАВЬТЕ ЗАЯВКУ</p>
      
		<input type="text" id="Editbox1" style="position:absolute; left:188px; top:105px; width:276px; height:26px; line-height:28px;" name="username" value="">
		<select name="departament" size="1" id="Combobox1" style="position:absolute; left:188px; top:155px; width:280px; height:30px;">
			<option> </option>
			<option>Командование</option>
			<option>ГУОГГ</option>
         <option>УОД</option>
			<option>УБПиСВ</option>
			<option>УОРБиМГ</option>
         <option>УБОХР</option>
         <option>УИТ</option>
         <option>УДиАП</option>
         <option>АУ</option>
         <option>УС</option>
         <option>ГОУ</option>
         <option>ГУПК</option>
         <option>ГУВСПиКР</option>
         <option>ГУТВ</option>
         <option>ГУТ</option>
         <option>УПС</option>
         <option>УДО</option>
         <option>УИиОК</option>
         <option>УКСиР</option>
         <option>УПАиР</option>
         <option>ФПУ</option>
         <option>ЮУ</option>
         <option>ВМУ</option>
         <option>УЗГС</option>
         <option>в/ч 2026</option>
         <option>в/ч 2027</option>
      </select>
		<input type="text" id="Editbox2" style="position:absolute; left:188px; top:205px; width:276px; height:26px; line-height:28px;" name="mail" value="" maxlength="30">
		<input type="text" id="Editbox4" style="position:absolute; left:188px; top:252px; width:276px; height:26px; line-height:28px;" name="phone" value="" maxlength="3">
		<select name="problem" size="1" id="Combobox2" style="position:absolute; left:188px; top:297px; width:280px; height:30px;">
			<option> </option>
			<option>Проблема с принтером</option>
			<option>Неисправность PGP</option>
			<option>Компьютер не включается</option>
			<option>Проблема с электропитанием</option>
			<option>Отсутствие доступа к электронной почте</option>
			<option>Отсутствие доступа к ЕАСУ «Шекара»</option>
			<option>Другое</option>
		</select>
			<input type="text" id="Editbox3" style="position:absolute; left:188px; top:347px; width:276px; height:26px; line-height:27px;" name="another" value="">
			<input type="reset" id="Button1" name="" value="Очистить" style="position:absolute; left:188px; top:407px; width:109px; height:29px;">
			<input type="submit" id="Button2" name="" value="Отправить" style="position:absolute; left:359px; top:407px; width:109px; height:29px;">
			<div id="tron" style="position:absolute; left:111px; top:110px; width:67px; height:18px; text-align:left;"><span>Ф.И.О. :</span></div>
			<div id="tron" style="position:absolute; left:44px; top:159px; width:132px; height:18px; text-align:left;"><span>Подразделение :</span></div>
			<div id="tron" style="position:absolute; left:20px; top:210px; width:155px; height:18px; text-align:left;"><span>Электронная почта :</span></div>
			<div id="tron" style="position:absolute; left:97px; top:256px; width:82px; height:18px; text-align:left;"><span>Телефон :</span></div>
			<div id="tron" style="position:absolute; left:53px; top:301px; width:131px; height:18px; text-align:left;"><span>Неисправность :</span></div>
			<div id="tron" style="position:absolute; left:112px; top:352px; width:70px; height:18px; text-align:left;"><span>Другое :</span></div>

		<div id="cotackt">
			<span>По вопросам связанным с работоспособностью СВиТО обращаться через "Службу поддержки" на рабочем столе или по телефонам 719-438, 719-243</span>
		</div>
	</form>
</div>
<div id="footer">
	<p id="ssilky">
		<a href="http://10.16.68.68" target="_blank">| ИСП "Қайнар" |</a>
		<a href="http://10.16.48.5" target="_blank">|  ИСП "Шекара" |</a>
		<a href="http://10.16.68.202" target="_blank">|  ИПС "Әділет" |</a>
		<a href="http://10.16.48.22/ovr" target="_blank">|  ОВР ПС КНБ РК |</a>
		<a href="http://10.16.68.200" target="_blank">|  Ситуационный центр КНБ РК |</a>
		<a href="http://10.16.68.178" target="_blank">|  ЕИС "Беркут" |</a>
		<a href="https://www.kainar.knb/?mdl=sites&lng=rus" target="_blank">|  Портал КНБ РК |</a>
		<!--<a href="http://10.16.48.28" target="_blank">|  КСА ПС КНБ РК |</a>-->
	</p>
	<span class="copyright">ГТО &copy 2015-2016 г.</span>
</div>

<div style="z-index:0">
   <script>
     
   var snowsrc="snow.gif"
   var no = 20;

   var dx, xp, yp;
   var am, stx, sty;
   var i, doc_width = 800, doc_height = 600; 
     
   if (typeof window.innerWidth != 'undefined')
   {
      doc_width = window.innerWidth;
      doc_height = window.innerHeight;
   }
   else 
   if (typeof document.documentElement != 'undefined' && typeof document.documentElement.clientWidth != 'undefined' && document.documentElement.clientWidth != 0)
   {
      doc_width = document.documentElement.clientWidth;
      doc_height = document.documentElement.clientHeight;
   }
   else
   {
      doc_width = document.getElementsByTagName('body')[0].clientWidth;
      doc_height = document.getElementsByTagName('body')[0].clientHeight;
   }

   dx = new Array();
   xp = new Array();
   yp = new Array();
   am = new Array();
   stx = new Array();
   sty = new Array();

   for (i = 0; i < no; ++ i) 
   {  
      dx[i] = 0;
      xp[i] = Math.random()*(doc_width-50);
      yp[i] = Math.random()*doc_height;
      am[i] = Math.random()*20;
      stx[i] = 0.02 + Math.random()/10;
      sty[i] = 0.7 + Math.random();

      if (i == 0) 
      {
         document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><a href=\"http://dynamicdrive.com\"><img src='"+snowsrc+"' border=\"0\"><\/a><\/div>");
      } 
      else 
      {
         document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><img src='"+snowsrc+"' border=\"0\"><\/div>");
      }
   }

   function DoSnow() 
   {
      for (i = 0; i < no; ++ i) 
      {
         yp[i] += sty[i];
         if (yp[i] > doc_height-50) 
         {
            xp[i] = Math.random()*(doc_width-am[i]-30);
            yp[i] = 0;
            stx[i] = 0.02 + Math.random()/10;
            sty[i] = 0.7 + Math.random();
         }
         dx[i] += stx[i];
         document.getElementById("dot"+i).style.top=yp[i]+"px";
         document.getElementById("dot"+i).style.left=xp[i] + am[i]*Math.sin(dx[i])+"px";  
      }
      snowtimer=setTimeout("DoSnow()", 25);
   }

   setTimeout("DoSnow()", 500);

   </script>
</div>

</body>
</html>