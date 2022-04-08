<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<style>
    /* .body {
        font-family: 'Open Sans', Arial, sans-serif;
        font-size: 17px;
        background-color: #ccc;
        overflow-x: hidden;
    } */
    .container-fluid{
        padding-left:0px;
        padding-right:0px;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="placeholder">
            <div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
                <!-- style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -385px; left: 0px; height: 1200px; width: 1200px; max-width: none;" -->
                <div class="tm-header">
                    <div class="row tm-header-inner">
                        <div class="col-md-6 col-12">
                            <img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" />
                            <div class="tm-site-text-box">
                                <h1 class="tm-site-title">KFC Delivery</h1>
                                <h6 class="tm-site-description">Add New Menu</h6>
                            </div>
                        </div>
                        <nav class="col-md-6 col-12 tm-nav">
                            <ul class="tm-nav-ul">
                                <li class="tm-nav-li"><a href="add_menu.php" class="tm-nav-link active">Add Menu</a></li>
                                <li class="tm-nav-li"><a href="status.php" class="tm-nav-link active">Confirm Status </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <main>
            <?php
            require("connect_db.php");
            $sql = "SELECT * FROM menu";
            $rs = mysqli_query($conn, $sql);
            ?>

            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>
                            <center>ID</center>
                        </th>
                        <th>
                            <center>Image</center>
                        </th>
                        <th>
                            <center>Name</center>
                        </th>
                        <th>
                            <center>Details</center>
                        </th>
                        <th>
                            <center>Price</center>
                        </th>
                        <th>
                            <center>Edit</center>
                        </th>
                        <th>
                            <center>Delete</center>
                        </th>
                    </tr>
                </thead>
                <?php
                while ($row = mysqli_fetch_assoc($rs)) {
                    echo ("<tr>");
                    echo ("<td>" . $row["menu_id"] . "</td>");
                    echo ("<td align=center>" . "<img src=" . $row["image"] . " style='width: 60%'>" . "</td>");
                    echo ("<td>" . $row["n_menu"] . "</td>");
                    echo ("<td>" . $row["detail"] . "</td>");
                    echo ("<td style='width: 53px;'>" . $row["price"] . " ฿" . "</td>");
                    echo ("<td><a href=edit_menu.php?ID=" . $row["menu_id"] . " class='btn btn-warning btn-xs'>edit</a></td> ");
                    echo ("<td><a href=delete_menu.php?ID=" . $row["menu_id"] . " onclick=\"return confirm('Are you sure?')\"class='btn btn-danger btn-xs'>Delete</a></td>");
                    echo ("</tr>\n");
                }
                ?>
            </table>
        </main>



        <footer class="tm-footer text-center">
            <p>Copyright &copy; 2020 Simple House

                | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
        </footer>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle click on paging links
            $('.tm-paging-link').click(function(e) {
                e.preventDefault();

                var page = $(this).text().toLowerCase();
                $('.tm-gallery-page').addClass('hidden');
                $('#tm-gallery-page-' + page).removeClass('hidden');
                $('.tm-paging-link').removeClass('active');
                $(this).addClass("active");
            });
        });
    </script>
</body>

</html>