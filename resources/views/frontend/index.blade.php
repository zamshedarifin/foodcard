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
                                        <option value="1" data-designation="মহাপরিচালক">মহাপরিচালক</option>
                                        <option value="2" data-designation="অতিরিক্ত মহাপরিচালক">অতিরিক্ত মহাপরিচালক</option>
                                        <option value="3" data-designation="আইন উপদেষ্টা">আইন উপদেষ্টা</option>
                                        <option value="140" data-designation="পরিচালক">পরিচালক</option>
                                        <option value="4" data-designation="পরিচালক">পরিচালক</option>
                                        <option value="5" data-designation="প্রধান মিলার">প্রধান মিলার</option>
                                        <option value="6" data-designation="অতিরিক্ত পরিচালক">অতিরিক্ত পরিচালক</option>
                                    </select>
                                </dd>
                            </dl>

                            <dl>
                                <dt><label for="office_place">কর্মরত অবস্থান</label></dt>
                                <dd><span>:</span>
                                    <select name="office_place" id="office_place">
                                        <option value="0">কর্মরত অবস্থান নির্বাচন করুন</option>
                                        <option value="1" data-office-place="খাদ্য অধিদপ্তর">খাদ্য অধিদপ্তর</option>
                                        <option value="5" data-office-place="আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর">আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর</option>
                                        <option value="6" data-office-place="সাইলো">সাইলো</option>
                                        <option value="7" data-office-place="জেলা খাদ্য নিয়ন্ত্রকের দপ্তর">জেলা খাদ্য নিয়ন্ত্রকের দপ্তর</option>
                                        <option value="8" data-office-place="চলাচাল ও সংরক্ষণ নিয়ত্রকের কার্যালয়">চলাচাল ও সংরক্ষণ নিয়ত্রকের কার্যালয়</option>
                                    </select>
                                </dd>
                            </dl>

                            <dl>
                                <dt><label for="office_name">কর্মরত কার্যালয়</label></dt>
                                <dd><span>:</span>
                                    <select name="office_name" id="office_name">
                                        <option value="0">কর্মরত কার্যালয় নির্বাচন করুন</option>
                                        <option value="15" data-office-name="আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, ঢাকা">আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, ঢাকা</option>
                                        <option value="16" data-office-name="আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, রাজশাহী">আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, রাজশাহী</option>
                                        <option value="17" data-office-name="আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, চট্টগ্রাম">আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, চট্টগ্রাম</option>
                                        <option value="18" data-office-name="আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, খুলনা">আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, খুলনা</option>
                                        <option value="19" data-office-name="আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, সিলেট">আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, সিলেট</option>
                                        <option value="20" data-office-name="আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, বরিশাল">আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, বরিশাল</option>
                                        <option value="21" data-office-name="আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, রংপুর">আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, রংপুর</option>
                                        <option value="1417" data-office-name="আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, ময়মনসিংহ">আঞ্চলিক খাদ্য নিয়ন্ত্রকের দপ্তর, ময়মনসিংহ</option>
                                    </select>
                                </dd>
                            </dl>


                            <dl>
                                <dt><label for="blood_group">রক্তের গ্রুপ</label></dt>
                                <dd><span>:</span>
                                    <select name="blood_group" id="blood_group">
                                        <option value="0">রক্তের গ্রুপ নির্বাচন করুন</option>
                                        <option value="1" data-blood-name="A+">A+</option>
                                        <option value="2" data-blood-name="A-">A-</option>
                                        <option value="3" data-blood-name="B+">B+</option>
                                        <option value="4" data-blood-name="B-">B-</option>
                                        <option value="5" data-blood-name="AB+">AB+</option>
                                        <option value="6" data-blood-name="AB-">AB-</option>
                                        <option value="7" data-blood-name="O+">O+</option>
                                        <option value="8" data-blood-name="O-">O-</option>
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
                            <a href="https://picresize.com/" target="_blank">ফটো / সাক্ষরের সাইজ ঠিক করুন</a>
                            <a href="https://tinypng.com/" target="_blank">ফাইল সাইজ ঠিক করুন।</a>
                            <a href="https://okkhor52.com/download.html?id=_074" target="_blank">বাংলা ফন্ট ডাউনলোড করুন</a>
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

    <div class="preview-modal-area" id="preview-close" style="display: none">
        <div class="preview-modal-content">
            <div class="preview-header-content">
                <h4>প্রিভিউ ভালো ভাবে দেখে নিন</h4>

                <div class="front-body-form">
                    <dl>
                        <dt>আইডি</dt>
                        <dd><span>:</span> ০০০০০০০০০</dd>
                    </dl>
                    <dl>
                        <dt>নাম</dt>
                        <dd><span>:</span> <span id="p-name"></span></dd>
                    </dl>
                    <dl>
                        <dt>পদবি</dt>
                        <dd><span>:</span> <span id="p-designation"></span></dd>
                    </dl>
                    <dl>
                        <dt>কর্মরত অবস্থান</dt>
                        <dd><span>:</span> <span id="p-office"></span></dd>
                    </dl>
                    <dl>
                        <dt>কর্মরত কার্যালয়</dt>
                        <dd><span>:</span> <span id="p-place"></span></dd>
                    </dl>
                    <dl>
                        <dt>রক্তের গ্রুপ</dt>
                        <dd><span>:</span> <span id="p-blood-group"></span></dd>
                    </dl>
                    <dl>
                        <dt>মোবাইল নং</dt>
                        <dd><span>:</span> <span id="p-phone"></span></dd>
                    </dl>
                    <dl>
                        <dt>জন্ম তারিখ</dt>
                        <dd><span>:</span> <span id="p-dob"></span></dd>
                    </dl>
                    <dl>
                        <dt>ফটো</dt>
                        <dd><span>:</span> <img src="" id="p-photo"></dd>
                    </dl>
                    <dl>
                        <dt>সাক্ষর</dt>
                        <dd><span>:</span> <img src="" id="p-signature"></dd>
                    </dl>
                    <dl>
                        <dt></dt>
                        <dd><button id="preview-close-btn">X Close</button></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('script')
    <script>
        $(document).ready(function(){
            $('#photo').on("change", function () { readImageUrl(this, '#p-photo'); });
            $('#signature').on("change", function () { readImageUrl(this, '#p-signature'); });

           $('#preview-btn').on('click', function(){
               var data ={
                    "name"          : $('#employee_name').val(),
                    "designation"   : $('#designation').find(':selected').data('designation'),
                    "office_place"  : $('#office_place').find(':selected').data('office-place'),
                    "office_name"   : $('#office_name').find(':selected').data('office-name'),
                    "blood_group"   : $('#blood_group').find(':selected').data('blood-name'),
                    "phone"         : $('#phone').val(),
                    "dob"           : $('#dob').val(),
                };

              $('#p-name').html(data['name']);
              $('#p-designation').html(data['designation']);
              $('#p-office').html(data['office_place']);
              $('#p-place').html(data['office_name']);
              $('#p-blood-group').html(data['blood_group']);
              $('#p-phone').html(data['phone']);
              $('#p-dob').html(data['dob']);

             $('#preview-close').show();
           });

           $('#preview-close-btn').on('click', function () {
            $('#preview-close').hide();
           });


           // readImageUrl Function declare
            function readImageUrl(input, output){
                if(input.files && input.files[0]){
                    var reader = new FileReader();
                    reader.readAsDataURL(input.files[0]);
                    reader.onload = function(e){
                        var image = new Image();
                        image.src = e.target.result;
                        image.onload = function(){
                            var height = this.height;
                            var width = this.width;
                            var size = (input.files[0].size / 1024);
                            if(size > 2048 || size < 20){
                                alert("File size Minimum 20Kb and Maximum 2Mb");
                            }
                            if( 99>= width && 99 >= height){
                                alert("Minimum Image Width and Height 100x100 pixels ");
                            }else{
                                $(output).attr('src', e.target.result);
                            }
                        }

                    }
                }

            }

        });
    </script>
@endpush
