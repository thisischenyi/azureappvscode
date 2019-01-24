<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=gb2312">
<title>获取服务器信息 New Version</title>
</head>
<body>
<?php
$sysos = $_SERVER["SERVER_SOFTWARE"];      //获取服务器标识的字串
$sysversion = PHP_VERSION;                   //获取PHP服务器版本
$remoteip = $_SERVER['REMOTE_ADDR'];
$serverip = GetHostByName($_SERVER['SERVER_NAME']);
$domain = $_SERVER["HTTP_HOST"];
$serverport =  $_SERVER['SERVER_PORT'];
$cpu = $_SERVER['PROCESSOR_IDENTIFIER'];

//以下两条获取服务器时间，中国大陆采用的是东八区的时间,设置时区写成Etc/GMT-8
date_default_timezone_set("Etc/GMT-8");
$systemtime = date("Y-m-d H:i:s",time());
/*  *******************************************************************  */
/*   以HTML表格的形式将以上获取到的服务器信息输出给客户端浏览器          */
/*  *******************************************************************  */
echo "<table align=center cellspacing=0 cellpadding=0>";
echo "<caption> <h2> <<系统信息>> </h2> </caption>";
echo "<tr> <td> Source：    </td> <td> From GitHub        </td> </tr>";
echo "<tr> <td> Web服务器：    </td> <td> $sysos        </td> </tr>";
echo "<tr> <td> PHP版本：      </td> <td> $sysversion   </td> </tr>";
echo "<tr> <td> 服务器时间：   </td> <td> $systemtime   </td> </tr>";
echo "<tr> <td> 客户端IP：   </td> <td> $remoteip   </td> </tr>";
echo "<tr> <td> 服务端IP：   </td> <td> $serverip   </td> </tr>";
echo "<tr> <td> 域名：   </td> <td> $domian   </td> </tr>";
echo "<tr> <td> 服务器端口：   </td> <td> $serverport   </td> </tr>";
echo "<tr> <td> CPU数量：   </td> <td> $cpu   </td> </tr>";
echo "</table>";
echo "author CY";
?>
<br /><br />
<div align="center" style="border:1px solid red"><br />
<a href="test.php"><button>Echo Your NAME/AGE</button></a><br /><br />
<a href="phpinfo.php"><button>PHPINFO</button></a><br /><br />
<a href="hello.php"><button>Hello World!</button></a><br /><br />
</div>
<body>
</html>