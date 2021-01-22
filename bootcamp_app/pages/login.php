<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="?page=authenticate&sid=<?php echo $sid;?>" method="post">
        <label>Lietotajs</label>
        <input type="text" name="username">
        <label>Parole</label>
        <input type="password" name="password">

        <button type="submit">Ieiet</button>
    </form>
</body>
</html>