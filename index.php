<?php error_reporting(0);
?>
<head>
   <meta charset="utf-8" />
   <title>E-mail Marketing</title>
   <link href='styles/notification.css' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="styles/font-awesome.min.css">
</head>
    <!-- <style type="text/css"></style> -->
<body>
    <h1>Hello world</h1>
    <div class="container"> 
        <form>
            <textarea name="content1">   </textarea>
            <textarea name="content2">   </textarea>
        </form>
    </div>

    <script src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content1');
        CKEDITOR.replace('content2');
    </script>
    </body>
</html>
