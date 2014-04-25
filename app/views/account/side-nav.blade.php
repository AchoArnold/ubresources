@section('side-nav')
<div class="col-md-3">
<div class="list-group side-nav account-nav">
    <a href="{{URL::to('account/edit')}}" class="list-group-item
    @if (Request::is('account/edit*'))
      active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
    @else
      ">
    @endif
    Edit Profile</a>
    <a href="{{URL::to('account/password')}}" class="list-group-item
    @if (Request::is('account/password*'))
      active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
    @else
      ">
    @endif
    Change Password</a>
    <a href="{{URL::to('account/logout?_token='.csrf_token())}}" class="list-group-item
    @if (Request::is('account/logout*'))
      active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>
    @else
      ">
    @endif
    Logout</a>
    
  </div>
  </div>
@stop