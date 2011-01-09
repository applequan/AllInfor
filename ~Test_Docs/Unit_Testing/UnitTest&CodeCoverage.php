<!-- 
Auth:Dengquanwen from khaos
Ver:1.0
-->
<html>
<head>
	<meta http-equiv="Content-Language" content="zh-CN">
	<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf8">
	<title>百讯汇测试脚本</title>
	<style type="text/css">
        body{
			text-align:center;
		}
		form{		
			text-align:left;
		}
		.main{
			margin-left:30%;
			width:400px;
			border:5px green;
			background-color:#FFCCFF;
		}
		fieldset{
			background-color:#E0E0FF;
			border:2px gray outset  ;
			padding:1em;
		}
		fieldset legend{
			background-color:white;
			border:2px outset gray;
			font-weight:bold;

		}		
		input{
		height:50px;
		background-color:CCCCCC;
		}

    </style>
</head>
<body>
<div class="main">
<div><h1>百讯汇</h1>
<h2>    单元测试及代码覆盖量脚本</h2>
</div>
<fieldset>
<legend>请选择测试： </legend>
<form action="MyCake/app/webroot/test.php" method="get">
<p>本单元测试采用SimpleTest框架，点击下方按钮后可进入对应界面，再选择相应代码可进行测试，测试后可点击“Analyze Code Coverage”查看代码覆盖量.<br/>
如果测试失败，请检查项目是否配置正确。</p>
<input type="hidden" name="show" value="cases" />
<input type="hidden" name="app" value="true" />
<label>点击选择用例进行测试:<input type="submit" value="点击进行测试"></label>
</form>

<form action="MyCake/app/webroot/test.php?group=all&app=true">
<input type="hidden" name="group" value="all" />
<input type="hidden" name="app" value="true" />
点击进行测试并查看代码覆盖量:<input type="submit" value="点击进行测试">
</form>
</fieldset>
</div>
</body>
</html>
