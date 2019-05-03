@php
    use App\FavoriteAd;
    use App\Message;
    use App\Ad;
@endphp

<nav class="navbar navbar-default">
  <div class="solid-div"></div>
    <div class="container">
      <div class="row" style="margin-bottom:0;">
        <div class="col-md-3 col-xs-3 col-sm-3">
            <a class="navbar-brand" href="#"><img src="/imgs/LOGO.png" alt="logo"></a>
        </div>
        <div class="col-md-8 col-xs-6 col-sm-6">
            <img class="hashtag" src="/imgs/hashtag.png" alt="hashtag">
        </div>
        <div class="col-md-1 col-xs-3 col-sm-3">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">EN <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">AR</a></li>
                </ul>
            </li>
        </div>
      </div>
      <div class="row" style="margin-bottom:0;">
          <div class="col-md-9 col-xs-12 col-sm-7">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
          
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                @if (!Auth::check())
                <ul class="nav navbar-nav">
                  <li class="active"><a href="/login">تسجيل الدخول <span class="sr-only">(current)</span></a></li>
                  <li><a href="register">التسجيل</a></li>
                </ul>
        
                  @else
                <ul class="nav navbar-nav">
                  @php
                  @endphp
                  <li class="active"><a href="/home"> HOME <span class="sr-only">(current)</span></a></li>
                  <li><a href="/users/{{auth()->user()->name}}">PROFILE</a></li>
                  <li><a href="/ads"> BROWES ALL ADS </a></li>
                  <li><a href="/AllCategories"> ALL CATEGORIES</a></li>
        
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{auth()->user()->name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li class="divider"></li>
                      <li class="divider"></li>
                      <li><a href="/settings">الإعدادات</a></li>
                      @if (auth()->user()->account_type == 'مدير')
                      <li><a href="/controlpanel">لوحة التحكم</a></li>
                      @endif
                      <li class="divider"></li>
                      <li><a href="/logout"> تسجيل الخروج</a></li>
                    </ul>
                  </li>
                </ul>
                @endif
              </div>
          </div>
          <div class="col-md-3 col-xs-12 col-sm-5">
                <form class="navbar-form navbar-left" method="get" action="../Search" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" name="search_input" placeholder="Write something here">
                  </div>
                  <button type="submit" class="btn btn-default">Search</button>
                </form>
          </div>

</div>




    </div>
  </nav>


