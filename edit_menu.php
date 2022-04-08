<?php
require("connect_db.php");

$sql = "SELECT * FROM menu WHERE ID='" . $_GET["menu_id"] . "'";
$rs = mysqli_query($conn, $sql);
$menu = mysqli_fetch_assoc($rs);

?>
<form action="submit_edit_menu.php" method="post">
    <input type="hidden" name="id" value="<?php print($_GET["menu_id"]); ?>">
    <?php
    print("ID :" . $menu['menu_id'] . "<br>");
    print("");

    print("Name : <input type=text name=name value='" . $menu['n_menu'] . "'><br>");
    print("Details : <input type=text name=name value='" . $menu['detail'] . "'><br>");
    print("Price : <input type=text name=name value='" . $menu['price'] . "'><br>");
    ?>

    </select><br>
    <input type="submit">
</form>