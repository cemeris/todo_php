<?php include "../bootcamp_app/components/head.php"; ?>
<title>Uzdevumu saraksts - test request</title>
<form action="<?php get_url("?page=request") ?>" method="post" >
    <input type="text" name="todos">
    <select name="action">
        <option value="get">Dabūt datus</option>
        <option value="update">Nosūtīt datus</option>
    </select>

    <button>Nosūtīt</button>
</form>