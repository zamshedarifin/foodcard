@extends('frontend.layouts.master')
@section('title', 'Home')

@push('style')
    <link rel="stylesheet" href="{{asset('admin/css/pickmeup.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
@endpush
@push('script')
    <script src="{{asset('admin/js/pickmeup.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        addEventListener('DOMContentLoaded', function () {
            pickmeup('#dob',{
                position       : 'right',
                default_date    : false
            });
        });
    </script>
@endpush
@section('frontContent')

    <div class="front-page-area-start">
        <div class="front-page-content-area">
            <div class="front-page-content-header">
                <img src="{{asset('admin/images/logo/bangladesh.svg')}}" alt="bangladesh-logo">
                <div class="front-page-header-content">
                    <h5>গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h5>
                    <h4>খাদ্য অধিদপ্তর</h4>
                    <a href="http://www.dgfood.gov.bd/">http://www.dgfood.gov.bd/</a>
                </div>
                <img src="{{asset('admin/images/logo/resize.png')}}" alt="Food-logo">
            </div>

            <div class="fornt-page-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <legend>
                            <mark>কর্মকর্তার তথ্য :- </mark>
                        </legend>
                        <div class="front-body-form">
                            <dl>
                                <dt><label for="employee_name">নাম</label> </dt>
                                <dd><span>:</span><input type="text" name="employee_name" id="employee_name" placeholder="সম্পূর্ণ নাম বাংলায় লিখুন"></dd>
                            </dl>

                            <dl>
                                <dt><label for="designation">পদবি</label> </dt>
                                <dd><span>:</span>
                                    <select name="designation" id="designation">
                                        <option value="0">পদবি নির্বাচন করুন</option>
                                        <option value="1" data-dname="মহাপরিচালক">মহাপরিচালক</option>
                                        <option value="2" data-dname="অতিরিক্ত মহাপরিচালক">অতিরিক্ত মহাপরিচালক</option>
                                        <option value="3" data-dname="আইন উপদেষ্টা">আইন উপদেষ্টা</option>
                                        <option value="140" data-dname="পরিচালক">পরিচালক</option>
                                        <option value="4" data-dname="পরিচালক">পরিচালক</option>
                                        <option value="5" data-dname="প্রধান মিলার">প্রধান মিলার</option>
                                        <option value="6" data-dname="অতিরিক্ত পরিচালক">অতিরিক্ত পরিচালক</option>
                                    </select>
                                </dd>
                            </dl>

                            <dl>
                                <dt><label for="office_place">কর্মরত অবস্থান</label></dt>
                                <dd><span>:</span>
                                    <select name="office_place" id="office_place">
                                        <option value="0">কর্মরত অবস্থান নির্বাচন করুন</option>
                                        <option value="1" data-placename="খাদ্য অধিদপ্তর">খাদ্য অধিদপ্তর</option>
                                        <option value="5" data-placename="আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর">আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর</option>
                                        <option value="6" data-placename="সাইলো">সাইলো</option>
                                        <option value="7" data-placename="জেলা খাদ্য নিয়ন্ত্রকের দপ্তর">জেলা খাদ্য নিয়ন্ত্রকের দপ্তর</option>
                                        <option value="8" data-placename="চলাচাল ও সংরক্ষণ নিয়ত্রকের কার্যালয়">চলাচাল ও সংরক্ষণ নিয়ত্রকের কার্যালয়</option>
                                    </select>
                                </dd>
                            </dl>

                            <dl>
                                <dt><label for="office_name">কার্যালয় অবস্থান</label></dt>
                                <dd><span>:</span>
                                    <select name="office_name" id="office_name">
                                        <option value="0">কার্যালয় নির্বাচন করুন</option>
                                        <option value="1" data-placename="খাদ্য অধিদপ্তর">খাদ্য অধিদপ্তর</option>
                                        <option value="5" data-placename="আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর">আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর</option>
                                        <option value="6" data-placename="সাইলো">সাইলো</option>
                                        <option value="7" data-placename="জেলা খাদ্য নিয়ন্ত্রকের দপ্তর">জেলা খাদ্য নিয়ন্ত্রকের দপ্তর</option>
                                        <option value="8" data-placename="চলাচাল ও সংরক্ষণ নিয়ত্রকের কার্যালয়">চলাচাল ও সংরক্ষণ নিয়ত্রকের কার্যালয়</option>
                                    </select>
                                </dd>
                            </dl>


                            <dl>
                                <dt><label for="blood_group">রক্তের গ্রুপ</label></dt>
                                <dd><span>:</span>
                                    <select name="blood_group" id="blood_group">
                                        <option value="0">রক্তের গ্রুপ নির্বাচন করুন</option>
                                        <option value="1" data-bname="A+">A+</option>
                                        <option value="2" data-bname="A-">A-</option>
                                        <option value="3" data-bname="B+">B+</option>
                                        <option value="4" data-bname="B-">B-</option>
                                        <option value="5" data-bname="AB+">AB+</option>
                                        <option value="6" data-bname="AB-">AB-</option>
                                        <option value="7" data-bname="O+">O+</option>
                                        <option value="8" data-bname="O-">O-</option>
                                    </select>
                                </dd>
                            </dl>

                            <dl>
                                <dt><label for="phone">মোবাইল নং</label></dt>
                                <dd><span>:</span><input type="text" name="phone" id="phone" placeholder="০১২৩৪৫৬৭৮৯"></dd>
                            </dl>

                            <dl>
                                <dt><label for="dob">জন্ম তারিখ</label></dt>
                                <dd><span>:</span> <input type="text" name="dob" id="dob" placeholder="জন্ম তারিখ প্রদান করুন"></dd>
                            </dl>

                            <dl>
                                <dt><label for="photo">ফটো আপলোড করুন</label></dt>
                                <dd><span>:</span> <input type="file" name="photo" id="photo"></dd>
                            </dl>

                            <dl>
                                <dt><label for="signature">সাক্ষর আপলোড করুন</label></dt>
                                <dd><span>:</span> <input type="file" name="signature" id="signature"></dd>
                            </dl>

                            <dl>
                                <dt></dt>
                                <dd>
                                    <button type="submit" name="submit-btn" id="submit-btn">জমা দিন</button>
                                    <button type="reset" name="reset-btn" id="reset-btn">রিসেট করুন</button>
                                    <button type="button" name="preview-btn" id="preview-btn">প্রিভিউ দেখুন</button>
                                </dd>
                            </dl>


                        </div>
                    </fieldset>
                </form>
                <div class="card-information-area">
                    <fieldset class="info">
                        <legend><mark>ফরম পূরণের আগে নির্দেশনাবলী পড়ুন :-</mark></legend>
                        <div class="card-info-body-area">
                            <ul>
                                <li>সম্পূর্ণ ফরমটি বাংলায় পূরণ করুন।</li>
                                <li>ফটোর ব্যাকগ্রাউন্ড সাদা হতে হবে।</li>
                                <li>ফটো সাইজ ২৫০ X ২৫০।</li>
                                <li>ফটোর ফাইলের সর্বনিম্ন সাইজ ৩০KB।</li>
                                <li>ফটোর ফাইলের সর্বোচ্চ সাইজ ২MB।</li>
                                <li>স্বাক্ষরের সাইজ ১৫০ X ১৫০।</li>
                                <li>স্বাক্ষর ফাইলের সর্বনিম্ন সাইজ ৩০KB।</li>
                                <li>স্বাক্ষর ফাইলের সর্বোচ্চ সাইজ ১MB।</li>
                                <li>ফটো এবং সাক্ষরের ফাইল ফরমেট .png / .jpg / .jpeg হতে পারে।</li>
                                <li> জমা দানের পূর্বে প্রিভিউ দেখে নিন।</li>
                            </ul>
                        </div>
                    </fieldset>

                    <fieldset class="help-area">
                        <legend><mark>সহযোগী লিংক সমূহ :-</mark></legend>
                        <div class="inportant-links">
                            <a href="https://www.remove.bg/upload" target="_blank">ফটোর ব্যাকগ্রাউন্ড রিমুভ করুন।</a>
                            <a href="https://tinypng.com/" target="_blank">ফাইল সাইজ ঠিক করুন।</a>
                        </div>
                    </fieldset>


                </div>
            </div>

            {{--Footer area start--}}
            <div class="front-page-footer-area">
                <p>© ২০২১ খাদ্য অধিদপ্তর কর্তৃক সর্বস্বত্ব সংরক্ষিত</p>
            </div>
            {{--Footer area end--}}
        </div>
    </div>

@endsection
