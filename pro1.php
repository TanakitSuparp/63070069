<!DOCTYPE html>
<html>


<head>
    <title>Edit</title>
</head>

<body>
    <form action="Edit.php" method="post" id="CommentForm">
        ราคาต่อหน่วย:<br>
        <textarea rows="10" cols="20" name="Price" id="idPrice" placeholder="ใส่ราคา"></textarea><br>
        ส่วนลด(%):<br>
        <textarea rows="10" cols="20" name="Discount" id="idDiscount" placeholder="ใส่ส่วนลด"></textarea><br>
        <input type="submit" id="commentBtn">
    </form>
</body>

</html>
