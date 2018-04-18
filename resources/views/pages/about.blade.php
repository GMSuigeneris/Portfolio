@extends('layouts.master')
@section('contents')
<div id="wrapper1">
<div class="container-fluid paddsection" id="wrapper">
         <h4 style="text-align:center; padding:40px;">BIO</h4>
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
       <img class="profile" src="images/suigeneris3.jpg"/>
        </div>
         <div class="col-sm-3 col-md-3 col-lg-3">
          
        </div>
        <div class="col-sm-5 col-md-5 col-lg-5">
            <ul class="list-group" style="list-style:none;">
                <li class="list-group-item bio">FIRSTNAME: OLUWATOSIN</li>
                <li class="list-group-item bio">MIDDLENAME: DELE</li>
                <li class="list-group-item bio">SURNAME: AKINFOLARIN</li>
                <li class="list-group-item bio">NICKNAME: SUIGENERIS</li>
                <li class="list-group-item bio">RELIGION: CHRISTIANITY</li>
                <li class="list-group-item bio">BORN: 11<sup>th</sup>,December 1992</li>
                <li class="list-group-item bio">MARITAL STATUS: Single</li>
                <li class="list-group-item bio">Download CV as:</li>
            </ul>
              <a href="/storage/resume/akinfolarin.docx"><button  class="btn alpha">doc</button></a>
              <a href="/storage/resume/app-debug.apk"><button class="btn alpha">apk</button></a> 
              <a href="/storage/resume/akinfolarin.pdf"><button  class="btn alpha">pdf</button></a>
        </div>
    </div>
</div>

<div class="container paddsection">
         <h4 style="text-align:center; padding:40px;">EARLY LIFE</h4>
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
       <img class="profile" src="images/early.jpg"/>
        </div>
         <div class="col-sm-3 col-md-3 col-lg-3">
          
        </div>
        <div class="col-sm-5 col-md-5 col-lg-5">
           <p>I was concepted on friday, December 11, 1992 incrementing the number of my family members to six: my Dad, 
            Mom Now Late,Eldest sister, Older brothers respectively</p>
        </div>
    </div>
</div>

<div class="container paddsection">
         <h4 style="text-align:center; padding:40px;">EDUCATION</h4>
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
       <img class="profile" src="images/service.jpg"/>
        </div>
         <div class="col-sm-3 col-md-3 col-lg-3">
          
        </div>
        <div class="col-sm-5 col-md-5 col-lg-5">
            <p>My earliest education revolved around by birth place...Ibadan.<br>
                I had my primary and secondary school education at Seed of life nursery and primary school, Eleyele Ibadan
                and Methodist Grammer School, Bodija, Ibadan respectively.<br>
                I went on to obtain a Banking and finance degree at Adekunle Ajasin University and subsequently served at Nasarawa state.

        </p>
        </div>
    </div>
</div>

<div class="container paddsection">
         <h4 style="text-align:center; padding:40px;">WORKING EXPERIENCE</h4>
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
       <img class="profile" src="images/atwork.jpg"/>
        </div>
         <div class="col-sm-3 col-md-3 col-lg-3">
          
        </div>
        <div class="col-sm-5 col-md-5 col-lg-5">
          <p>
           Following my youth serice where I served in the capacity as a economics and Financial accounting facilitator at 
           Karmo Government School, I worked briefly with Acascope Limited; a start-up School Management Solution
           I also worked at BincomICT as a mobile app developer.
          </p>
        </div>
    </div>
</div>

<div class="container paddsection">
         <h4 style="text-align:center; padding:40px;">TRAINING</h4>
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
       <img class="profile" src="images/poise.jpg"/>
        </div>
         <div class="col-sm-3 col-md-3 col-lg-3">
          
        </div>
        <div class="col-sm-5 col-md-5 col-lg-5">
            <p>In a bid to complement the technical skills I acquired at the University, 
            I trained at Poise Graduate Training Academy right after my NYSC with emphasis on soft skills. 
            Learning under the relentless tutelage of professionals, I have been exposed to practical work place scenarios and etiquettes that honed my presentation, business writing, customer servicing, effective communication, problem solving, impression management,
             leadership, creative thinking, emotional intelligence, and team working skills, amongst several others. </p>
        </div>
    </div>
</div>
<div class="container paddsection">
         <h4 style="text-align:center; padding:40px;">SKILL SET</h4>
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
       <img class="profile" src="images/skillset.jpg"/>
        </div>
         <div class="col-sm-3 col-md-3 col-lg-3">
          
        </div>
        <div class="col-sm-5 col-md-5 col-lg-5">
            <p>Proficiency in the use of Microsoft words</p>
        </div>
    </div>
</div>

<div class="container paddsection">
         <h4 style="text-align:center; padding:40px;">HOBBY</h4>
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
       <img class="profile" src="images/chess.jpg"/>
        </div>
         <div class="col-sm-3 col-md-3 col-lg-3">
          
        </div>
        <div class="col-sm-5 col-md-5 col-lg-5">
            <p>I enjoy writing, reading, listening to music but i&lsquo; more passionate
            about chess.
            And I&lsquo;m a fan of Barcelona FC</p>
        </div>
    </div>
</div>
</div>
@endsection