<html>
<head>
<meta charset="utf-8">
<title>食堂小问卷</title>
</head>
<body>
 
<form action="note" method="post">
 @csrf
 <p>1.你最常去哪一个食堂？</p>
 <p>南一<input type="radio" value="南一" name="where" checked/>   
    南二<input type="radio" value="南二" name="where"  />
    南三<input type="radio" value="南三" name="where"  /></p>
<p>2.你选择食堂的主要标准是什么？</p>
 <p>饭菜价格<input type="radio" value="饭菜价格" name="standard" checked/>   
    地理位置<input type="radio" value="地理位置" name="standard"  />
    饭菜口味<input type="radio" value="饭菜口味" name="standard"  /></p>
<p>3.你对学校食堂的环境感觉如何？</p>
<p>非常干净<input type="radio" value="非常干净" name="env" checked/>   
    比较干净<input type="radio" value="比较干净" name="env"  />
    一般<input type="radio" value="一般" name="env"  />
    有点脏<input type="radio" value="有点脏" name="env"  /></p>
    <p>4.你对学校食堂饭菜的价格有什么看法？</p>
    <p>非常实惠<input type="radio" value="非常实惠" name="price" checked/>   
       价格正常<input type="radio" value="价格正常" name="price"  />
       有点小贵<input type="radio" value="有点小贵" name="price"  />
       价格较贵<input type="radio" value="价格较贵" name="price"  /> </p>
       <p>5.你是否在饭中吃到过杂质(如头发、虫子等)？</p>
<p>从来没有<input type="radio" value="从来没有" name="bug" checked/>   
    很少<input type="radio" value="很少" name="bug"  />
    经常<input type="radio" value="经常" name="bug"  /></p>
    <p>6.你觉得食堂饭菜的分量如何？</p>
    <p>合适，正好吃完<input type="radio" value="合适，正好吃完" name="quan" checked/>   
        偏少，不够吃<input type="radio" value="偏少，不够吃" name="quan"  />
        太多了，吃不完<input type="radio" value="太多了，吃不完" name="quan"  /></p>
        <p>7.你点外卖的频率？</p>
    <p>从不点外卖<input type="radio" value="从不点外卖" name="take" checked/>   
    较少<input type="radio" value="较少" name="take"  />
    有时<input type="radio" value="有时" name="take"  />
    经常<input type="radio" value="经常" name="take"  />
    <p>8.你觉得食堂的座位是否够用？</p>
<p>非常够用<input type="radio" value="非常够用" name="sit" checked/>   
    正好<input type="radio" value="正好" name="sit"  />
    不太够用<input type="radio" value="不太够用" name="sit"  /></p>
    <p>9.说说你对学校食堂还有哪些建议？</p>
    <p><textarea name="advice" rows="10" cols="70"> </textarea></p>
    <p><input type="submit" value="提交"></p>
</p>



</form>
 
</body>
</html>