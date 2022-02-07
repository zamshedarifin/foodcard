@extends('admin.layouts.app')
@section('title', 'Card Selection')
@section('contents')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card ">
        <div class="card p-3 rounded-0 d-flex align-items-center justify-content-center card-body-area flex-row">
            <div class="card-front-page-content card-size">
                <div class="bangladesh-logo">
                    <img src="{{asset('admin/images/logo/bangladesh.svg')}}" alt="logo">
                </div>
                <div class="card-forn-main-title">
                    <h4>গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h4>
                    <h4 class="food-ministry-name">খাদ্য অধিদপ্তর</h4>
                    <h4>আইডি নং- ০০০০০০০০০</h4>
                    <h3 class="food-card-name">আবুল হাসান মুহাম্মদ মাহাবুব</h3>
                    <h3>খাদ্য পরিদর্শক</h3>
                    <p>উপজেলা খাদ্য নিয়ন্ত্রণ কার্যালয়</p>
                    <p>রাজশাহী সদর, রাজশাহী</p>
                </div>
                <div class="card-front-footer">
                    <img src="{{asset('admin/images/author/author-profile.png')}}" alt="" class="author-image">
                    <div class="sub-director">
                        <img src="" alt="">
                        <p>উপপিরচালক (সংস্থাপন) প্রশাসন বিভাগ</p>
                    </div>
                </div>
            </div>
            <div class="card-back-page-content card-size">
                back
            </div>
        </div>
    </div>
</div>
@endsection
