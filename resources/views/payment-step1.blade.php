@extends('layouts.app2')
@section('content')

<div class="container mt-3">
<div class="row top">
<div class="col-12">
<h3><strong>購票流程</strong></h3>
</div>
</div>
</div>

<div class="container">
<ul class="nav nav-tabs nav-justified" style="margin-top:20px;">
  <li class="active col-4">
    <a class="nav-link active" data-toggle="tab" href="#home">確認票卷</a>
  </li>
  <li class="col-4">
    <a class="nav-link disabled" data-toggle="tab" href="#menu1">付款方式</a>
  </li>
  <li class="col-4">
    <a class="nav-link disabled" data-toggle="tab" href="#menu2">購票完成</a>
  </li>
</ul>
    
<div class="tab-content">
<div id="home" class="container tab-pane active">
<div class="card">
  <h5 class="card-header">
    @foreach($act as $program)
    <strong>{{$program->prog_name}}</strong>
    @endforeach
  </h5>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text" font size="5">活動時間：{{$program->prog_date}}</p>
    <p class="card-text">場地：{{$program->site_name}}</p>
    <p class="card-text">活動主辦：{{$program->prog_organizer}}</p>
  </div>
</div>
<img src="img/座位表.jpg" height="500" style="display:block; margin:auto;">
<form method="get" action="payment">
<table class="table table-striped">
　<tr>
　<th>票券類別</th>
　<th>請選擇區域</th>
　</tr>
<tr>
　<td>全票</td>
　<td>
    <form method="get" action="payment">
    <p>
      <select name="section">
        @for($i = 0; $i < $sectionSize; $i++)
        <option value="{{ $sections[$i] }}">{{ $sections[$i] }}</option>
        @endfor
      </select>
    </p>
  </td> 
</tr>
</table>
<div align="center">
    <button type="submit" class="btn btn-outline-danger">下一步</button>
    <input type="text" name="prog_id" value="{{ $prog_id }}" style="display:none">
  </form>
</div>
</div>
<div id="menu1" class="tab-pane fade"><h3><strong>請完成先前步驟</strong></h3></div>
<div id="menu2" class="tab-pane fade"><h3><strong>請完成先前步驟</strong></h3></div>
</div>
</div>
<!-- <form method="post" action="payment" style="display:none"><input type="text" name="ticket_id"></form> -->
<!-- footer -->
<hr>
<div class=" text-white bg-dark p-4">
          <div class="row text-center col-12">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12">
            <ul class="nav">
    <li class="nav-item col-2 col-md-2 col-lg-2">
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
      <a class="nav-link" href="">購票流程說明</a>
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
      <a class="nav-link" href="{{url('clause')}}">服務條款</a>
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
      <a class="nav-link" href="#">隱私權政策</a>
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
      <a class="nav-link" href="#">加入我們</a>
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
    </li>
  </ul>
          </div>
      </div>
<br>
      <div class="row text-center">
        <div class="col-4 col-md-4 col-lg-4">
          <a data-toggle="tooltip" data-placement="bottom" title="關於我們" target="_blank" href="#"><strong>ETicket票務平台</strong></a>
        </div>
        <div class="col-4 col-md-4 col-lg-4">
          <span data-toggle="tooltip" data-placement="bottom" title="(Mon-Fri 9:30am–8:00pm Sat.11:00am-7:00pm)">客服專線: 02-22227777</span>
        </div>
        <div class="col-4 col-md-4 col-lg-4">
            <a data-toggle="tooltip" data-placement="bottom" title="send now!" target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=ETicket@gmail.com">客服信箱: ETicket@gmail.com</a>
        </div>
        </div>
    <br>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>CopyrightcETicket Corporation. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>  
    </div>
@endsection