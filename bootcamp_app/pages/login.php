<?php include "../bootcamp_app/components/head.php"; ?>
<title>Uzdevumu saraksts - login</title>

<form action="?page=authenticate&sid=<?php echo $sid;?>" method="post">
    <label>Lietotajs</label>
    <input type="text" name="username">
    <label>Parole</label>
    <input type="password" name="password">

    <button type="submit">Ieiet</button>
</form>