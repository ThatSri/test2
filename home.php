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
            <header class="row tm-welcome-section">
                <h2 class="col-12 text-center tm-section-title">Welcome to Simple House</h2>
                <p class="col-12 text-center">Total 3 HTML pages are included in this template. Header image has a parallax effect. You can feel free to download, edit and use this TemplateMo layout for your commercial or non-commercial websites.</p>
            </header>

            <div class="tm-paging-links">
                <nav>
                    <ul>
                        <li class="tm-paging-item"><a href="#" class="tm-paging-link active" onclick="load_data();">KFC</a></li>
                        <li class="tm-paging-item"><a href="#" class="tm-paging-link">EGGTART</a></li>
                        <li class="tm-paging-item"><a href="#" class="tm-paging-link">DRINK</a></li>
                    </ul>
                </nav>
            </div>

            <div class="row" id="rin" style="padding-left : 50px"></div>
        </main>
        <footer class="tm-footer text-center">
            <p>Copyright &copy; 2020 Simple House

                | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
        </footer>
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

    function basket() {

        var win=window.open('http://localhost/project_kfc/basket_kfc.php','_blank');
        if(win){
            win.focus();
        }
    }

    // span.onclick = function() {
    // 	modal.style.display = "none";
    // }
</script>