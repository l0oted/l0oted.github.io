<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type="text/javascript" src="des.js"></script>
    <script>        
        window.onload = function getResult(){
            //待加密字符串
            var str = document.getElementById("str").value;
			//var str = document.getElementById(" <? echo $admin; ?>").innerText; 
            //第一个参数必须；第二个、第三个参数可选
            var key1 = document.getElementById("key1").innerText;  
            var key2 = document.getElementById("key2").innerText; 
            var key3 = document.getElementById("key3").innerText; 
            //加密方法      
            var  enResult = strEnc(str,key1,key2,key3);         
            //解密方法
            var deResult = strDec(enResult,key1,key2,key3);
            //展示结果
            document.getElementById("enStr").innerText = enResult; 
            document.getElementById("dnStr").innerText = deResult; 
        }
    </script>
</head>
<body>
	<?php
	foreach ($_GET as $admin)  
    ?>
	<form>
	<input type="text" maxlength="20" id="str" value="<?php echo $admin?>" /></td>
	<input type="button" value="加解密" onclick="getResult()" />
	</form>
    <table>
        <tr>          
          <td>加密key：</td>
          <td>key1=<span id="key1">c316e97c-9b6c-4f12-82d3-7b97ac21f704</span>;key2=<span id="key2">f119bd1f-577e-445a-929d-b55a083ce4fb</span>;key3=<span id="key3">4318db24-a0c7-4c79-9681-2d3d263f95b3</span></td>
        </tr>
        <tr>
          <td align="left">加密结果：</td>
          <td align="left"><label id = "enStr"></label></td>
        </tr>
        <tr>
          <td align="left">解密结果： </td>
          <td align="left"><label id = "dnStr"></label></td>
        </tr>

    </table>
</body>

</html>