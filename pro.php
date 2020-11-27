<!DOCTYPE html>
<html>


<head>
    <title></title>
</head>

<body>
    <form action="Edit.php" method="post" id="CommentForm">
        ชื่อสินค้า:<br>
        <input type="text" name="Product" id="idProduct" placeholder="ใส่ชื่อสินค้า"> <br>
        ราคาต่อหน่วย:<br>
        <textarea rows="10" cols="20" name="Price" id="idPrice" placeholder="ใส่ราคา"></textarea><br>
        ส่วนลด(%):<br>
        <textarea rows="10" cols="20" name="Discount" id="idDiscount" placeholder="ใส่ส่วนลด"></textarea><br>
        ราคาหลังลด:<br>
        <textarea rows="10" cols="20" name="Total" id="idTotal" placeholder="ใส่ราคาจริง"></textarea><br>
        <input type="submit" id="commentBtn">
    </form>
</body>

</html>
