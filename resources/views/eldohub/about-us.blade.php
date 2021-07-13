@extends('layouts.app')

@section('content')

<div class="container" >
    <div class="row d-flex align-items-center">
        <div class="col text-center">
            <p class="intro-line">We empower and support young people to solve problems identified in their communities by leveraging technology.</p>
            <p class="tag-line">Technology <span class="slash">|</span> Innovation <span class="slash">|</span> Entrepreneurship</p>
        </div>
        <div class="col">
            <img src="/img/team-meeting.png" alt="" class="img">
        </div>
    </div>

    <div class="text-center">
        <h2 class="section-title pb-2">Who We Are</h2>
        <p class="about-us">EldoHub is an education technology platform targeting youth and women, with an aim of preparing them to benefit from the opportunities the emerging ICT industry offers and close the skills gap in Africa’s job market. We provide STEM education, job matching and digital work. We also run entrepreneurship development programs for them, as well as incubate startups to bring their ideas to life.</p>
    </div>

    <div id="row2-about-us" class="row d-flex align-items-center m-5 p-2">
        <div class="col text-center">
            <h3 class="section-title">Our Mission</h3>
            <p>Equip the African youth with employable tech skills and provide them with access to jobs.</p>
            <h3 class="section-title">Our Vision</h3>
            <p>To become a more sustainable business/social enterprise in supporting youth and women to gain meaningful employment through employability skills in ICT and pre-vetted for job matching with a goal to impact over 6000 youth and women in the next 5 years in Kenya.</p>
        </div>
        <div class="col">
            <h3 class="section-title text-center">Our Values</h3>
            <ul class="value">
                <li>Empower the people who are doing so much of the teaching to teach in circumstances that are conducive to effective teaching.</li>
                <li>Provide educators with support necessary to allow them to invest in their students, their institution, and themselves.</li>
                <li>Championing learning technologies to support learning</li>
                <li>Teamwork</li>
                <li>Commitment and Passion</li>
                <li>Partnership: Partnering with development agencies, entrepreneurs, education institution and trainers</li>
            </ul>
        </div>
    </div>
</div>

<div class="team text-center pt-5 pb-5 bg-white">
    <h2 class="section-title pb-2">Team</h2>
    <div class="container mb-5">
        <div class="row d-flex justify-content-between">
            <div class="team-img">
                <img src="https://res.cloudinary.com/dlbuuppr8/image/upload/ar_1:1,bo_5px_solid_rgb:ffffff,c_fill,g_auto,r_max,w_1000/v1625816731/team/chep_mhcnep.jpg" alt="">
                <h5>Chepkemoi Magdaline</h5>
                <p>Founder & Executive Director</p>
            </div>
            <div class="team-img">
                <img src="https://res.cloudinary.com/dlbuuppr8/image/upload/ar_1:1,bo_5px_solid_rgb:ffffff,c_fill,g_auto,r_max,w_1000/v1625816731/team/khadija_ksxnfy.jpg" alt="">
                <h5>Khadija Ibrahim</h5>
                <p>Monitoring & Evaluation</p>
            </div>
            <div class="team-img">
                <img src="https://res.cloudinary.com/dlbuuppr8/image/upload/ar_1:1,bo_5px_solid_rgb:ffffff,c_fill,g_auto,r_max,w_1000/v1625816731/team/purity_igfvwv.jpg" alt="">
                <h5>Purity Kosgei</h5>
                <p>Communications Lead</p>
            </div>
            <div class="team-img">
                <img src="https://res.cloudinary.com/dlbuuppr8/image/upload/ar_1:1,bo_5px_solid_rgb:ffffff,c_fill,g_auto,r_max,w_1000/v1625816731/team/kemboi_yc4bii.jpg" alt="">
                <h5>Joshua Kemboi</h5>
                <p>Partnerships & Resource Mobilization</p>
            </div>
            <div class="team-img">
                <img src="https://res.cloudinary.com/dlbuuppr8/image/upload/ar_1:1,bo_5px_solid_rgb:ffffff,c_fill,g_auto,r_max,w_1000/v1625816731/team/azron_npshgv.jpg" alt="">
                <h5>Azron Brian</h5>
                <p>Operations Manager</p>
            </div>
        </div>
    </div>
</div>
    
@endsection