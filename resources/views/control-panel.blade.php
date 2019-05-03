@extends('index')
@section('content')
<h1 class="title">لوحة التحكم</h1>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="box-part text-center">
                <a href="users">
                    <i class="fa fa-users fa-3x" aria-hidden="true"></i>
                    <h4>الأعضاء</h4>
                    <div class="text">
                        <span>التحكم بالإعضاء ، حظر عضو ، ترقية عضو والمزيد</span>
                    </div>      
                </a> 
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="box-part text-center">
                <a href="categories">
                    <i class="fa fa-folder-open fa-3x" aria-hidden="true"></i>
                    <h4>الأقسام</h4>
                    <div class="text">
                        <span>جميع الأقسام ، إضافة قسم ، تعديل وحذف الأقسام </span>
                    </div>      
                </a> 
            </div>
        </div> 
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="box-part text-center">
                <a href="PendingAds">
                    <i class="fa fa-pause fa-3x" aria-hidden="true"></i>
                    <h4>الإعلانات المعلقة <span>({{$pending_ads_count}})</span></h4>
                    <div class="text">
                        <span>مراجعة الإعلانات قبل الإضافة لقائمة الاعلانات</span>
                    </div>      
                </a> 
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="box-part text-center">
                <a href="PublishedAds">
                    <i class="fa fa-check fa-3x" aria-hidden="true"></i>
                    <h4>الإعلانات المنشورة <span>({{$published_ads_count}})</span></h4>
                    <div class="text">
                        <span>التحكم بالإعلانات المنشورة بالاقسام المختلفة </span>
                    </div>      
                </a> 
            </div>
        </div>
    </div>
</div>       

      
@endsection
