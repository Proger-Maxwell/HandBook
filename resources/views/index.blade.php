@extends('layout')

@section('title')HandBook
@endsection

@section('main_content')
<header class="header">
    <div class="container">
        <div class="row header__row">
            <div class="col-xl-6 align-self-center">
                <a href="/"><img src="/images/logo-handbook.png" alt="HandBook" class="logo"></a>
            </div>
            <div class="col-xl-6 align-self-center">
                <div class="d-flex flex-column">
                    <div class="wrapper__button">
                    <a class="button button_empty">Language</a>
                    <a class="button button_full">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="welcome">
    <div class="container">
        <div class="row welcome__row">
            <div class="col-xl-6">
                <div class="welcome__form">
                            
                            <div class="form__checker">
                                <a href="/" data-ca-target-id="" class="active" rel="nofollow">Login</a>
                                <a href="/" data-ca-target-id="" class="disable" rel="nofollow">Sing Up</a>
                            </div>
                            <!--Login form-->
                            <div class="form">
                                <form method="post" action="">
                                <div class="form__field">
                                    <input type="text" name="login" autocomplete="off" required/>
                                    <label for="login" class="form__label">
                                        <span class="form__span">Login</span>
                                    </label>
                                </div>
                                <div class="form__field">
                                    <input type="password" name="password" autocomplete="off" required/>
                                    <label for="login" class="form__label">
                                        <span class="form__span">Password</span>
                                    </label>
                                </div>
                                <div class="form__button">
                                    <a href="/depositary" data-ca-target-id="" class="main-btn" rel="nofollow">Login</a>
                                </div>
                                </form>
                            </div>

                            
                            <!--Sing Up form-->
                            <div class="form hidden">
                                <form method="post" action="">
                                <div class="form__field">
                                    <input type="text" name="Email" autocomplete="off" required/>
                                    <label for="Email" class="form__label">
                                        <span class="form__span">Email</span>
                                    </label>
                                </div>
                                <div class="form__field">
                                    <input type="password" name="password" autocomplete="off" required/>
                                    <label for="login" class="form__label">
                                        <span class="form__span">Password</span>
                                    </label>
                                </div>
                                <div class="form__button">
                                    <a href="/" data-ca-target-id="" class="main-btn" rel="nofollow">Login</a>
                                </div>
                            </form>
                            </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="welcome__content">
                    <h1 class="welcome__title">Start planning your life</h1>
                    <p class="welcome__text">Take just <span class="">10 minutes and remember</span><br>always
                        and everything</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="row about__row">
            <div class="col-xl-12">
                <h2 class="about__title">Why do I need all this?</h2>
                <p class="about__text">Imagine a <span class="">place where</span> absolutely
                    everything in <span class="">your daily life is recorded</span><br>
                    The recording is <span class="">made instantly, and the alerts come unmistakably</span></p>
                <img src="/images/block-img-mac.png" alt="" class="about__img">
            </div>
        </div>
    </div>
</section>
<section class="advantages">
    <div class="container">
        <div class="row advantages__row">
                <div class="advantages__block col-xl-4">

                    <img src="/images/plugin-ico.png" alt="Special calendars" class="advantages__img">
                    <h3 class="advantages__title">Special calendars</h3>  <!-- сюда модификатор advantages__title(размер) -->
                    <p class="advantages__text">Display your sports activities
                        monthly cycles, etc. in the settings.</p>
                </div>

                <div class="advantages__block col-xl-4">
                    <img src="/images/annual-ico.png" alt="Annual celebrations" class="advantages__img">
                    <h3 class="advantages__title">Annual celebrations</h3>
                    <p class="advantages__text">Do not forget about the important
                        annual days of your family and friends.</p>
                </div>

                <div class="advantages__block col-xl-4">
                    <img src="/images/link-ico.png" alt="Link call" class="advantages__img">
                    <h3 class="advantages__title">Link call</h3>
                    <p class="advantages__text">Reminder will be created
                        for everyone who follows it.</p>
                </div>
        </div>
    </div>
</section>

@endsection