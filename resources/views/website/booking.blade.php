@extends('website.layouts.master')

@section('content')

<div class="container-fluid" id="contact">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h3 class=" mainTitle">حجز رحله</h3>
                        </div>
                    </div>
                    <form class="contactForm" action="{{route('booking.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">الاسم</label>
                                    <input class="form-control"  type="text" id="name" required name="name">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="name"> الهاتف</label>
                                    <input class="form-control"  type="text" id="last" name="phone" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="name"> تاريخ الرحله</label>
                                    <input class="form-control"  type="date" id="name" name="date" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="name"> الفتره</label>
                                    <input class="form-control"  type="text" id="last" placeholder="مثال: 2 يناير الى 21 يناير 2021" name="period" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="name"> الوجه</label>
                                    <select name="place_id" class="form-control" id="" style="height: 50px" required>
                                        <option value="">الوجه</option>
                                        @foreach ($places as $place)             
                                           <option value="{{$place->id}}">{{$place->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="name"> شركة الخدمه</label>
                                    <select name="company_id" class="form-control" id="" style="height: 50px" required>
                                        <option value="">الشركات</option>
                                        @foreach ($companies as $company)             
                                           <option value="{{$company->id}}">{{$company->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name"> ملاحظات</label>
                                    <textarea class="form-control"  type="text" id="name"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 mt-3">
                                <div class="form-group">
                                    <input class="btn btn-getstarted offset-4" type="submit" id="submit" value="أحجز الان">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h3 class=" mainTitle"> ملاحظات</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 note">
                            <div class="d-flex mt-5" style="">
                            
                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" .

                            </div>
                      </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--SVG Wave -->
<div>
    <div class="container-fluid svgWave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ff007a" fill-opacity="1" d="M0,96L40,122.7C80,149,160,203,240,229.3C320,256,400,256,480,245.3C560,235,640,213,720,186.7C800,160,880,128,960,149.3C1040,171,1120,245,1200,250.7C1280,256,1360,192,1400,160L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </div>
</div>
@endsection

<style>
    .form-group , .note{
        text-align: right;
    }
</style>