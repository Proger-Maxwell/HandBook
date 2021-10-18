@extends('layout')
@section('title')HandBook | Depositary
@endsection

@section('main_content')



<header class="header">
    <div class="container">
        <div class="row header__row">
            <div class="col-xl-6 align-self-center">
                <div class="wrapper__main-info">
                    <p><span>Hand</span><span class="bold">Book </span><span>21.10.2021 09.23</span></p>
                    <p class="main-text"><span>Yavorskiy </span><span class="bold">Maxim </span><span class="priorite-text">#ym2890</span></p>
                </div>
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
<section class="tab">
    <div class="container">
        <div class="row tab__row">
            <div class="col-xl-12">
                <div class="tab__content">
                    <h1 class="tab__title">Profile <i class="fa fa-edit"></i></h1>
                    <div class="tab__tabs">
                        <a class="button button_full_blue button__tab">Important</a>
                        <a class="button button_full_blue button__tab">Mail</a>
                        <a class="button button_full_blue button__tab">Tasks</a>
                    </div>
                    <p class="tab__text">Your upcoming important <span class="semibold">affairs</span> and <span class="semibold">events</span> are <span class="semibold">collected here.</span><br>
                        <span class="semibold">Hints can be turned off</span> in the block settings</p>
                </div>
            </div>
        </div>

        <div class="row blocks__row">
            <div class="blocks__block">
                <h3>The nearest task</h3>
                <div class="block">
                    <p class="block__title"><span class="priorite-text bold">21.10.2021</span> 09:00 <span class="semibold"> Today</span></p>
                    <p class="block__text">Pick up clothes from repair Needle</p>
                    <div class="block__position">
                        <span><i class="fa fa-edit"></i>Nagorny lane, 13/2</span>
                        <i class="fa fa-edit"></i>
                    </div>
                    {{-- <p><i class="fa fa-map-marker-alt"></i>Nagorny lane, 13/2</p> --}}
                </div>
            </div>      
             
            
        </div>
        
    </div>
</section>
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
</section> --}}
<div class="wrapper__sticky">
    <div class="sticky">
        <a class="priorite-text bold">P</a>
        <a class="priorite-text bold">W</a>
        <a class="priorite-text bold">L</a>
        <a class="priorite-text bold">C</a>
    </div>
</div>
@endsection