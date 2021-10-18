@extends('layout')

@section('title')HandBook | Guide
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
{{-- <section class="about">
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
</section> --}}
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
<section class="about">
    <div class="container">
        <div class="row about__row">
            <div class="col-xl-12">
                <h2 class="about__title">Do you have any questions?</h2>
                
                    <div class="welcome__form">
                                <!--Login form-->

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                <div class="form">
                                    <form method="post" action="/guide/support">
                                        @csrf
                                        <div class="form__field">
                                            <input type="text" name="email" autocomplete="off"/>
                                            <label for="Email" class="form__label">
                                                <span class="form__span">Email</span>
                                            </label>
                                        </div>
                                        <div class="form__field">
                                            <input type="text" name="question" autocomplete="off"/>
                                            <label for="question" class="form__label">
                                                <span class="form__span">Question</span>
                                            </label>
                                        </div>
                                        <div class="form__button">
                                            <button type="submit" data-ca-target-id="" class="button button_full" rel="nofollow">Send</button>
                                        </div>
                                    </form>
                                </div>
                                
                    </div>
                
            </div>
        </div>
    </div>

@endsection