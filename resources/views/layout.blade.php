<!DOCTYPE html>
<html lang="ru">
<head>
    <!--<meta http-equiv="Refresh" content="3" />-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon-handbook.png" />
    <script src="/js/date-script.js" defer></script>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>
</head>
<body>
@yield('main_content')
<footer>
    <div class="footer">
        <div class="container">
            <div class="row footer__row">
                <div class="col-xl-6">
                    <a href="/"><img src="/images/logo-handbook-wt.png" href="/" alt="HandBook" class="logo"></a>
                </div>
                <div class="col-xl-6 align-self-center">
                    <div class="d-flex align-items-end flex-column">
                        <div class="wrapper__button"><a class="button button_special">Sing in</a></div>
                        <div class="d-flex align-items-end flex-row"><div class="wrapper__button"><a href="/guide" class="button button_full">Guide</a></div><div class="wrapper__button"><a class="button button_full">Support</a></div></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="footer-line">
        <div class="container">
            <div class="row footer-line__row">
                <div class="col-xl-12">
                    <p class="footer-line__text float-left">©HandBook</p>

                    <p id="footer-line__day" class="footer-line__text float-left"></p>
                    <p id="footer-line__counter" class="footer-line__text float-right"></p>

                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

