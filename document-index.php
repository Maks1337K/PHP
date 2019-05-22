<!DOCTYPE html>
<?php include_once('document-connection-database.php'); ?>
<?php
    include_once("document-header.php");
?>
<body>
    <?php include_once("document-navbar.php"); ?>
<div class="container">


    <h1>Home page</h1>

    <table class="table">
<?php
            //$sss = 11;
            $res = $connect->query("SELECT Id,Name,Description FROM tbl_roles");
            $num = 1;
            while ($row = $res->fetch_assoc()) {
                echo "
                        <tr>
                            <td>{$num}</td>
                            <td>" . $row['Name'] . "</td>
                            <td>{$row['Description']}</td>
                        </tr>
                        ";
                $num++;
            }
            ?>
            </table>

</div>
</body>
<?php include_once("document-footer.php"); ?>
</html>