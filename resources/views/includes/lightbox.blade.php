<div id="myModal" class="modal">

    <div class="modal-content">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="mySlides">
            <div class="numbertext">1 / 8</div>
            <img src="{{asset('img/project-school (1).jpg')}}" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 8</div>
            <img src="{{asset('img/project-streetlight (1).jpg')}}" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 8</div>
            <img src="{{asset('img/project-borehole (1).jpg')}}" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 8</div>
            <img src="{{asset('img/project (13).jpg')}}" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">5 / 8</div>
            <img src="{{asset('img/project-aged widows (3).jpg')}}" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">6 / 8</div>
            <img src="{{asset('img/project-empowerment-of-100 (4).jpg')}}" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">7 / 8</div>
            <img src="{{asset('img/project-farmers-empowerment (1).jpg')}}" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">8 / 8</div>
            <img src="{{asset('img/project-health-intervention (1).jpg')}}" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <div class="d-flex justify-content-center">
            <div class="column">
                <img class="demo cursor" src="{{asset('img/project-school (1).jpg')}}" style="width:100%" onclick="currentSlide(1)" alt="A block of 6 classroom at Muslim Grammar School, Iseyin Local Government, Iseyin.">
            </div>
            <div class="column">
                <img class="demo cursor" src="{{asset('img/project-streetlight (1).jpg')}}" style="width:100%" onclick="currentSlide(2)" alt="Street Light at Kara Road, Koso Iseyin Local Government, Iseyin.">
            </div>
            <div class="column">
                <img class="demo cursor" src="{{asset('img/project-borehole (1).jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="1 of the 18 Boreholes built across the federal constituency after the election.">
            </div>
            <div class="column">
                <img class="demo cursor" src="{{asset('img/project (13).jpg')}}" style="width:100%" onclick="currentSlide(4)" alt="Multifaceted Toilet, Otu, Itesiwaju local government">
            </div>
            <div class="column">
                <img class="demo cursor" src="{{asset('img/project-aged widows (3).jpg')}}" style="width:100%" onclick="currentSlide(5)" alt="Support for Aged and widows.">
            </div>
            <div class="column">
                <img class="demo cursor" src="{{asset('img/project-empowerment-of-100 (4).jpg')}}" style="width:100%" onclick="currentSlide(6)" alt="First Ever Town Hall Feedback Meeting/Empowerment of Over 100 people">
            </div>
            <div class="column">
                <img class="demo cursor" src="{{asset('img/project-farmers-empowerment (1).jpg')}}" style="width:100%" onclick="currentSlide(7)" alt="Empowerment of over one thousand, five hundred farmers in his constituency with mechanised farming equipment worth millions of naira.">
            </div>
            <div class="column">
                <img class="demo cursor" src="{{asset('img/project-health-intervention (1).jpg')}}" style="width:100%" onclick="currentSlide(8)" alt="Donation of ambulances and other vital medical equipment to health centers across the four local governments areas of his constituency.">
            </div>
        </div>
    </div>
</div>
