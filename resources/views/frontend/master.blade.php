<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Durbar-IT</title>
    <link rel="icon" href="public/frontend/images/fav.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('public/frontend/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/modal-video.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/career.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/team.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/auth.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/mixitup.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
    

</head>

<body>

    <div id="app">
    
       

        <main-component></main-component>
        
    </div>
    <!--- footer part end -->
    <script src="{{asset('public/frontend/js/active.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/frontend/js/custom.js')}}"></script>
    <script src="{{asset('public/js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/wow.min.js')}}"></script>
    
    <script src="{{asset('public/frontend/js/jquery-modal-video.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/frontend/js/mixitup.min.js')}}" type="text/javascript"></script>
    
    
    
    <script>
        $('.openbtn').on('click', function() {
            $('#mySidebar').toggleClass('menu_show');
        });
        $('.closebtn').on('click', function() {
            $('#mySidebar').toggleClass('menu_show');
        });
        //modal video

        $(".js-modal-btn").modalVideo();
    </script>



</body>

</html>