<html>
<head>
<meta charset="utf-8">
<title>食堂小问卷</title>
</head>
<body>
 
<form action="exam1" method="post">
    @csrf
<p>名字: <input type="text" name="name"></p>
<p>学号：<input type="text" name="number"></p>
<p>专业：<input type="text" name="major"></p>
<p>邮箱：<input type="email" name="email"></p>
<p>性别：男<input type="radio" value="male" name="gender" />   
女<input type="radio" value="female" name="gender" checked /></p>
<p>年级：大一<input type="radio" value="大一" name="class" checked/>   
    大二<input type="radio" value="大二" name="class" />
    大三<input type="radio" value="大三" name="class" />
    大四<input type="radio" value="大四" name="class" /></p>
<p><input type="submit" value="提交"></p>
</form>
 
</body>
</html>