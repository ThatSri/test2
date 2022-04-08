<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link rel="stylesheet" href="css/templatemo-style.css"  />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="placeholder">
            <div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
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
                                <li class="tm-nav-li"><a href="back_end.php" class="tm-nav-link active">Bake End</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-8"><br>

                        <form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="name" class="form-label">NAME</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter menu name" required />
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">DETAIL</label>
                                <textarea type="text" class="form-control" id="detail" name="detail" placeholder="Enter detail" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">PRICE</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" required />
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">IMAGE</label>
                                <input class="form-control" id="uploadImage" type="file" accept="image/*" name="image" />
                                <div id="preview"><img src="filed.png" /></div><br>
                            </div>
                            <div class="col-auto">
                                <input class="btn btn-success" type="submit" value="Upload">
                            </div>
                        </form>
                        <div id="err"></div>
                        
                    </div>
                </div>
            </div>
        </main>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script>
            $(document).ready(function(e) {
                $("#form").on('submit', (function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: "submit_add.php",
                        type: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        beforeSend: function() {
                            //$("#preview").fadeOut();
                            $("#err").fadeOut();
                        },
                        success: function(data) {
                            if (data == 'invalid') {
                                // invalid file format.
                                $("#err").html("Invalid File !").fadeIn();
                            } else {
                                // view uploaded file.
                                $("#preview").html(data).fadeIn();
                                $("#form")[0].reset();
                                console.log(data);
                            }
                        },
                        error: function(e) {
                            $("#err").html(e).fadeIn();
                        }
                    });
                }));
            });
        </script>

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

</h
