<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="css/templatemo-style.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->

<style>
    .container-fluid {
        padding-left: 0px;
        padding-right: 0px;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>


<body>

    <div class="container-fluid">
        <!-- Top box -->
        <!-- Logo & Site Name -->
        <div class="placeholder">
            <div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
                <div class="tm-header">
                    <div class="row tm-header-inner">
                        <div class="col-md-6 col-12">
                            <img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" />
                            <div class="tm-site-text-box">
                                <h1 class="tm-site-title">Simple House</h1>
                                <h6 class="tm-site-description">new restaurant template</h6>
                            </div>
                        </div>
                        <nav class="col-md-6 col-12 tm-nav">
                            <ul class="tm-nav-ul">
                                <li class="tm-nav-li"><a href="index.html" class="tm-nav-link active">Home</a></li>
                                <li class="tm-nav-li"><a href="about.html" class="tm-nav-link">About</a></li>
                                <li class="tm-nav-li"><a href="contact.html" class="tm-nav-link">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <main>
            <div class="row">
                <div class="col-3" style="margin-bottom: 60px;">
                    <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                        <figure style="cursor: pointer;"><img src="uploads/261065kaiphakrons.png" alt="Image" class="img-fluid tm-gallery-img">
                            
                        </figure>
                    </article>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <h2>Topic</h2>
                            <span id="name"></span>
                        </div>
                        <div class="col-12">
                            <h4>Details</h4>
                            <span id="detail"></span>
                        </div>
                        <div class="col-12">
                            <h4>Price</h4>
                            <span id="price"></span>
                        </div>
                        <div class="col-12">
                            <h4>Quantity</h4>
                            <input type="number" />
                        </div>
                        <div class="col-12">
                            <h4>Total</h4>
                            <span id="total"></span>
                        </div>
                </div>
            </div>
            


            <!-- <div class="row" id="rin" style="padding-left : 50px"></div> -->
        </main>
        <!-- <footer class="tm-footer text-center">
            <p>Copyright &copy; 2020 Simple House

                | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
        </footer> -->
    </div>
</body>

</html>


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

        load_data();
    });

    function load_data() {
        $.ajax({
            url: "load_menu.php",
            type: "POST",
            // data: new FormData(this),
            // contentType: false,
            // cache: false,
            // processData: false,
            // beforeSend: function() {
            //     //$("#preview").fadeOut();
            //     $("#err").fadeOut();
            // },
            success: function(data) {
                $('#rin').html(data);
            },
            error: function(e) {
                alert("error");
            }
        });
    }

    function select() {

        modal.style.display = "block";
    }

    // span.onclick = function() {
    // 	modal.style.display = "none";
    // }
</script>