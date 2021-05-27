<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 작성</title>
</head>
<body>
    <h1>게시물 작성</h1>
    <hr>
    <div>
        <form method = "POST" action="doWrite.php">
            <p> 제목 : <input required type="text" name = "title"></p>
            <p> 내용 : </p>
            <p><textarea required name="body" cols="30" rows="10"></textarea></p>
            <input type="submit">
        </form>
    </div>
</body>
</html>