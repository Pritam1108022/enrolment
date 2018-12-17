@extends('layout')

@php
   function convert_department($value){
  $values=[
		1=>'BBA',
		2=>'MBA',
		3=>'CSE',
		4=>'EEE',
		5=>'ECE',

	];

	return $values[$value];
}
	
@endphp

@section('content')

        
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($student_description_profile->student_image)}}">
                  <p class="name">{{$student_description_profile->student_name}}</p>
                  <p class="designation">{{$student_description_profile->student_roll}}</p>
                  <a class="email" href="#">{{$student_description_profile->student_email}}</a>
                  <a class="number" href="#">{{$student_description_profile->student_phone}}</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                    <h2 style="color: maroon; font-family: cursive; font-weight: bolder;">Comilla University</h2>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>The total information of student is given below.</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon">Father Name:</i>
                      <span style="font-family: vernada; font-size: 15px;" >{{$student_description_profile->student_fathername}}</span>
                    </a>
                     <a class="website">
                      <i class="icon-globe icon">Mother Name:</i>
                      <span style="font-family: vernada; font-size: 15px;" >{{$student_description_profile->student_mothername}}</span>
                    </a>
                     <a class="website">
                      <i class="icon-globe icon">Address:</i>
                      <span style="font-family: vernada; font-size: 15px;" >{{$student_description_profile->student_address}}</span>
                    </a>
                     <a class="website">
                      <i class="icon-globe icon">Department:</i>
                      <span style="font-family: vernada; font-size: 15px;" >{{convert_department($student_description_profile->student_department)}}</span>
                    </a>
                     <a class="website">
                      <i class="icon-globe icon">Admission Year:</i>
                      <span style="font-family: vernada; font-size: 15px;" >{{$student_description_profile->student_admissionyear}}</span>
                    </a>
                    

                    
                  </div>
                </div>
              </div>
            </div>
  
          </div>
        

@endsection