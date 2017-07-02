
<div id="loading" class="flex-center loading_page"><h1>Loading..</h1></div>

<!-- Slide 1 -->
<div class="overlay" id="overlay" style="transition: all 0.5s linear;">

    <div class="flex-center" id="overlay-content-1" style="position:relative; transition:all 1s ease-out; width: 100%; height: 100%;">
        <div id="animation_wrapper" style="width:350px; transition: all 1s linear; position: absolute; left:0; right:0; margin:auto; top:30%;">

            <div class="test">
                <div class="line1"></div>
                <div class="line2"></div>
            </div>

            <div id="text">
                <p>nton</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div id="text-stage-1" style="z-index: 999;">
            <a id="skip_intro" href="#" style="position: absolute; top:30px; right:30px; color: white; z-index: 9999;">Skip Intro</a>
            <div class="flex-center" style=" text-align:center; height: 50%; width: 100%; position: absolute; top: 0; left:0;">
                <div style="display: inline-block; color: white;">
                    <h1 style="font-size: 40pt;">Hey there!</h1>
                    <h3 style="font-size: 20pt;">Welcome to my portfolio!</h3>
                    <p>
                        Let me start off by asking, what is your name?
                    </p>
                </div>
            </div>
            <div class="flex-center" style="height: 50%; width: 100%;position: absolute; bottom:0; left:0; color: white;">

                @if($toggle_paragraph)
                <div style="width: 250px; display:flex;" id="toggle_colors">
                    <input name="name" type="text" class="name">
                    <button class="overlay_button" type="submit">OK</button>
                </div>
                @endif

                <!-- Slide 3 -->
                <div id="show_colors" class="hidden" style="color: white; text-align: center;">
                    <p>Perhaps you've got a favourite color?</p>
                    <ul class="color-list">
                        @foreach($colors as $color)
                            <li class="color_btn" style="background-color: {{ $color }}" data-setup-color="{{ $color }}"></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- Slide 4 ( Last ) -->
    <div class="welcome-page" id="welcome-page">
        <p>Great! We're ready to go</p>
        <h1 style="font-size:50pt; padding: 15px;">Welcome in!</h1>
    </div>

</div>
