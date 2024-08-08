@extends('layouts.app')

@section('content')


<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>{{ $job->job_title }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

@if (\Session::has('save'))
    <div class="alert alert-success">
        <p>{!! \Session::get('save') !!}</p>
    </div>
@endif

    <div class="job_details_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="job_details_header">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="{{ asset ('assets/images/logo/'.$job->image.'') }}" alt="" style="width: 100px; height: 100px;">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="#"><h4 style="padding-left: 15px;">{{ $job->job_title }}</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i>{{ $job->job_region }}</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i>{{ $job->job_type }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="descript_wrap white-bg">
                        <div class="single_wrap">
                            <h4>Job description</h4>
                            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                            <p>Variations of passages of lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p> -->
                            <p>{{ $job->job_description }}</p>
                        </div>
                        <div class="single_wrap">
                            <h4>Responsibility</h4>
                            <!-- <ul>
                                <li>The applicants should have experience in the following areas.
                                </li>
                                <li>Have sound knowledge of commercial activities.</li>
                                <li>Leadership, analytical, and problem-solving abilities.</li>
                                <li>Should have vast knowledge in IAS/ IFRS, Company Act, Income Tax, VAT.</li>
                            </ul> -->
                            <p>{{ $job->responsibilities }}</p>
                        </div>
                        <div class="single_wrap">
                            <h4>Qualifications</h4>
                            <!-- <ul>
                                <li>The applicants should have experience in the following areas.
                                </li>
                                <li>Have sound knowledge of commercial activities.</li>
                                <li>Leadership, analytical, and problem-solving abilities.</li>
                                <li>Should have vast knowledge in IAS/ IFRS, Company Act, Income Tax, VAT.</li>
                            </ul> -->
                            <!-- <p>{{ $job->job_qualifications }}</p> -->
                            <p>{{ $job->responsibilities }}</p>
                        </div>
                        <div class="single_wrap">
                            <h4>Benefits</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                            <!-- <p>{{ $job->job_benefits }}</p> -->
                        </div>
                    </div>

                    <div class="apply_job_form white-bg">
                        <h4>Save this job</h4>
                        <form action="{{ route('save.job') }}" method="POST">
                            @csrf
                                <input name="job_id" type="hidden" value="{{ $job->id }}">
                                <input name="user_id" type="hidden" value="{{ Auth::user()->id }}">
                                <input name="company" type="hidden" value="{{ $job->company }}">
                                <input name="job_region" type="hidden" value="{{ $job->job_region }}">
                                <input name="job_type" type="hidden" value="{{ $job->job_type }}">
                                <input name="image" type="hidden" value="{{ $job->image }}">
                                <input name="job_title" type="hidden" value="{{ $job->job_title }}">
                        
                            <div class="col-md-12">
                                <div class="submit_btn">
                                    @if($savedJob > 0)
                                        <button class="boxed-btn3 w-100" style="background-color: red;" disabled>You saved this job</button>
                                    @else
                                        <button class="boxed-btn3 w-100" type="submit">Save Job</button>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="apply_job_form white-bg">
                        <h4>Apply for the job</h4>
                        <!-- <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input_field">
                                        <input type="text" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input_field">
                                        <input type="text" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input_field">
                                        <input type="text" placeholder="Website/Portfolio link">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <button type="button" id="inputGroupFileAddon03"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                          </button>
                                        </div>
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                                          <label class="custom-file-label" for="inputGroupFile03">Upload CV</label>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input_field">
                                        <textarea name="#" id="" cols="30" rows="10" placeholder="Coverletter"></textarea>
                                    </div>
                                </div> -->
                                <div class="col-md-12">
                                    <div class="submit_btn">
                                        <button class="boxed-btn3 w-100" type="submit">Apply Now</button>
                                    </div>
                                </div>
                            <!-- </div>
                        </form> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="job_sumary">
                        <div class="summery_header">
                            <h3>Job Summery</h3>
                        </div>
                        <div class="job_content">
                            <ul>
                                <li class='fs-4'>Published on: <span>{{ $job->created_at->format('M d, Y') }}</span></li>
                                <li class='fs-4'>Deadline: <span>{{ $job->application_deadline }}</span></li>
                                <li class='fs-4'>Vacancy: <span>{{ $job->vacancy }} positions</span></li>
                                <li class='fs-4'>Salary: <span>{{ $job->salary }}</span></li>
                                <li class='fs-4'>Location: <span>{{ $job->job_region }}</span></li>
                                <li class='fs-4'>Job Type: <span>{{ $job->job_type }}</span></li>
                                <li class='fs-4'>Job Nature: <span>{{ $job->job_location }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="share_wrap d-flex">
                        <span>Share at:</span>
                        <ul>
                            <li><a href="#"> <i class="fa fa-facebook"></i></a> </li>
                            <li><a href="#"> <i class="fa fa-google-plus"></i></a> </li>
                            <li><a href="#"> <i class="fa fa-twitter"></i></a> </li>
                            <li><a href="#"> <i class="fa fa-envelope"></i></a> </li>
                        </ul>
                    </div>
                    <div class="job_location_wrap">
                        <div class="job_lok_inner">
                            <div id="map" style="height: 200px;">

                            </div>                            
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection