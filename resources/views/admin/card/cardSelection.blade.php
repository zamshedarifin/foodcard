@extends('admin.layouts.app')
@section('title', 'Card Selection')

@push('style')
    <style>
        .card-back-page-content{
            position: relative;
        }
        .card-back-page-content:after{
            content: ' ';
            position: absolute;
            left: 50%;
            top: 50%;
            width: 160px;
            height: 160px;
            opacity: 0.4;
            background-image: url(http://127.0.0.1:8000/admin/images/logo/bg-none.png);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: contain;
            transform: translate(-50%, -50%);
        }
    </style>
@endpush

@section('contents')
<div class="row">
    {{--First card area start--}}
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
                        <img src="{{asset('admin/images/logo/signature.png')}}" alt="" class="signature-image">
                        <p>উপপিরচালক (সংস্থাপন) প্রশাসন বিভাগ</p>
                    </div>
                </div>

                <div class="card-front-bar">

                </div>
            </div>
            <div class="card-back-page-content card-size">
               <div class="card-instruction">
                   <div class="card-instruction-title">
                       <h4>নির্দেশাবলী</h4>
                   </div>
                   <ul class="instructions">
                       <li>এই পরিচয়পত্রটি হস্তান্তরেযাগ্য নয়।</li>
                       <li>এটি হারিয়ে গেলে পরিচয়পত্র প্রদানকারী কর্তৃপক্ষকে অবহিত করতে হবে এবং হারিয়ে যাওয়া পরিচয়পত্রটি কেহ পেলে নিকটস্থ খাদ্য অফিসে জমা দেওয়ার জন্য অনুরোধ করা হলো</li>
                       <li>অবসরগ্রহণ/মেয়াদ উত্তীর্ণের ক্ষেত্রে এটি ফেরতযোগ্য।</li>
                   </ul>
                   <p>খাদ্য অধিদপ্তর</p>
                   <span>১৬, আব্দুল গণি রোড, ঢাকা-১০০০</span>
                   <span>ফোন: +৮৮ ০২-৪১০৫০৭২৩</span>
               </div>
                <div class="card-author-info">
                    <p><span>এনআইডি</span>: ১৭৪৫৫০৭০৭৫</p>
                    <p><span>মোবাইল</span>: +৮৮০ ১৭৪৫৫০৭০৭৫</p>
                    <p><span>জন্ম তারিখ</span>: ০৬/০৭/১৯৯৫</p>
                    <p><span>ব্লাড গ্রুপ</span>: O+</p>
                    <p><span>মেয়াদ</span>: ৩১/১২/২০২৬</p>
                </div>
                <div class="author-signature">
                    <div class="author-context">
                        <img src="{{asset('admin/images/logo/signature.png')}}" alt="" class="signature-image">
                        <p>কার্ডধারীর স্বাক্ষর</p>
                    </div>
                </div>
                <div class="card-footer-area">
                    <img src="{{asset('admin/images/logo/qr-code.png')}}" alt="" class="qr-code">
                    <div class="footer-content">
                        <img src="{{asset('admin/images/logo/resize.png')}}" alt="logo">
                        <p>খাদ্য অধিদপ্তর</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--First card area end--}}

    {{--Second card area start--}}
    <div class="col-md-6 grid-margin stretch-card ">
        <div class="card p-3 rounded-0 d-flex align-items-center justify-content-center card-body-area flex-row">
            <div class="second-card-front card-front-page-content card-size" style="background: url('{{asset('admin/images/card/second-card-bg.png')}}') no-repeat scroll center center / cover">
                <div class="bangladesh-logo">
                    <img src="{{asset('admin/images/logo/bangladesh.svg')}}" alt="logo">
                </div>
                <div class="card-forn-main-title">
                    <h4>গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h4>
                    <h4 class="food-ministry-name">খাদ্য অধিদপ্তর</h4>
                    <h4>আইডি নং- ০০০০০০০০০</h4>
                    <img src="{{asset('admin/images/author/author-profile.png')}}" alt="" class="author-image">
                    <h3 class="food-card-name">আবুল হাসান মুহাম্মদ মাহাবুব</h3>
                    <h3>খাদ্য পরিদর্শক</h3>
                    <p>উপজেলা খাদ্য নিয়ন্ত্রণ কার্যালয়</p>
                    <p>রাজশাহী সদর, রাজশাহী</p>
                </div>
                <div class="card-front-footer">
                    <div class="sub-director">
                        <img src="{{asset('admin/images/logo/signature.png')}}" alt="" class="signature-image">
                        <p>উপপিরচালক (সংস্থাপন)<br> প্রশাসন বিভাগ</p>
                    </div>
                </div>
            </div>
            <div class="second-card-back card-back-page-content card-size">
                <div class="card-instruction">
                    <div class="card-instruction-title">
                        <h4>নির্দেশাবলী</h4>
                    </div>
                    <ul class="instructions">
                        <li>এই পরিচয়পত্রটি হস্তান্তরেযাগ্য নয়।</li>
                        <li>এটি হারিয়ে গেলে পরিচয়পত্র প্রদানকারী কর্তৃপক্ষকে অবহিত করতে হবে এবং হারিয়ে যাওয়া পরিচয়পত্রটি কেহ পেলে নিকটস্থ খাদ্য অফিসে জমা দেওয়ার জন্য অনুরোধ করা হলো</li>
                        <li>অবসরগ্রহণ/মেয়াদ উত্তীর্ণের ক্ষেত্রে এটি ফেরতযোগ্য।</li>
                    </ul>
                    <p>খাদ্য অধিদপ্তর</p>
                    <span>১৬, আব্দুল গণি রোড, ঢাকা-১০০০</span>
                    <span>ফোন: +৮৮ ০২-৪১০৫০৭২৩</span>
                </div>
                <div class="card-author-info">
                    <p><span>এনআইডি</span>: ১৭৪৫৫০৭০৭৫</p>
                    <p><span>মোবাইল</span>: +৮৮০ ১৭৪৫৫০৭০৭৫</p>
                    <p><span>জন্ম তারিখ</span>: ০৬/০৭/১৯৯৫</p>
                    <p><span>ব্লাড গ্রুপ</span>: O+</p>
                    <p><span>মেয়াদ</span>: ৩১/১২/২০২৬</p>
                </div>
                <div class="author-signature">
                    <div class="author-context">
                        <img src="{{asset('admin/images/logo/signature.png')}}" alt="" class="signature-image">
                        <p>কার্ডধারীর স্বাক্ষর</p>
                    </div>
                </div>
                <div class="card-footer-area">
                    <img src="{{asset('admin/images/logo/qr-code.png')}}" alt="" class="qr-code">
                    <div class="footer-content">
                        <img src="{{asset('admin/images/logo/resize.png')}}" alt="logo">
                        <p>খাদ্য অধিদপ্তর</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--Second card area end--}}

    {{--Third card area start--}}
    <div class="col-md-6 grid-margin stretch-card ">
        <div class="card p-3 rounded-0 d-flex align-items-center justify-content-center card-body-area flex-row">
            <div class="third-card-front card-front-page-content card-size" style="background: url('{{asset('admin/images/card/third-card-front.png')}}') no-repeat scroll center center / cover">
                <div class="third-card-header">
                    <img src="{{asset('admin/images/logo/bangladesh-bg.svg')}}" alt="logo">
                    <div class="third-card-header-content">
                        <h4>গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h4>
                        <h4 class="food-ministry-name">খাদ্য অধিদপ্তর</h4>
                    </div>
                </div>
                <div class="card-forn-main-title">
                    <img src="{{asset('admin/images/author/author-profile.png')}}" alt="" class="author-image">
                    <h4>আইডি নং- ০০০০০০০০০</h4>
                    <h3 class="food-card-name">আবুল হাসান মুহাম্মদ মাহাবুব</h3>
                    <h3>খাদ্য পরিদর্শক</h3>
                    <p>উপজেলা খাদ্য নিয়ন্ত্রণ কার্যালয়</p>
                    <p>রাজশাহী সদর, রাজশাহী</p>
                </div>
                <div class="card-front-footer">
                    <img src="{{asset('admin/images/logo/qr-code.png')}}" alt="" class="qr-code">
                    <div class="sub-director">
                        <img src="{{asset('admin/images/logo/signature.png')}}" alt="" class="signature-image">
                        <p>উপপিরচালক (সংস্থাপন)<br> প্রশাসন বিভাগ</p>
                    </div>
                </div>
            </div>
            <div class="third-card-back card-back-page-content card-size" style="background-image: url({{asset('admin/images/card/third-card-back.png')}})">

                <div class="card-instruction">
                    <div class="card-instruction-title">
                        <h4>নির্দেশাবলী</h4>
                    </div>
                    <ul class="instructions">
                        <li>এই পরিচয়পত্রটি হস্তান্তরেযাগ্য নয়।</li>
                        <li>এটি হারিয়ে গেলে পরিচয়পত্র প্রদানকারী কর্তৃপক্ষকে অবহিত করতে হবে এবং হারিয়ে যাওয়া পরিচয়পত্রটি কেহ পেলে নিকটস্থ খাদ্য অফিসে জমা দেওয়ার জন্য অনুরোধ করা হলো</li>
                        <li>অবসরগ্রহণ/মেয়াদ উত্তীর্ণের ক্ষেত্রে এটি ফেরতযোগ্য।</li>
                    </ul>
                    <p>খাদ্য অধিদপ্তর</p>
                    <span>১৬, আব্দুল গণি রোড, ঢাকা-১০০০</span>
                    <span>ফোন: +৮৮ ০২-৪১০৫০৭২৩</span>
                </div>
                <div class="card-author-info">
                    <p><span>এনআইডি</span>: ১৭৪৫৫০৭০৭৫</p>
                    <p><span>মোবাইল</span>: +৮৮০ ১৭৪৫৫০৭০৭৫</p>
                    <p><span>জন্ম তারিখ</span>: ০৬/০৭/১৯৯৫</p>
                    <p><span>ব্লাড গ্রুপ</span>: O+</p>
                    <p><span>মেয়াদ</span>: ৩১/১২/২০২৬</p>
                </div>
                <div class="author-signature">
                    <div class="author-context">
                        <img src="{{asset('admin/images/logo/signature.png')}}" alt="" class="signature-image">
                        <p>কার্ডধারীর স্বাক্ষর</p>
                    </div>
                </div>
                <div class="card-footer-area">
                    <div class="footer-content">
                        <img src="{{asset('admin/images/logo/resize.png')}}" alt="logo">
                        <p>খাদ্য অধিদপ্তর</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--Third card area end--}}



</div>
@endsection
