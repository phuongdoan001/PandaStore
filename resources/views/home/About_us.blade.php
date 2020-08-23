@extends('layout_lg_rg')
@section('content')
<style type="text/css">
	.about-section {
  padding: 50px;
  text-align: center;
  color: white;
}
</style>
	<div class="about-section bg-primary">
	  <h1>Trang Về Chúng Tôi</h1>
	  <p>Một số văn bản về chúng tôi là ai và chúng tôi làm gì.</p>
	</div>
	<div class="card mb-3 mx-auto d-block" style="max-width: 540px;margin-top: 10px;">
  <div class="row no-gutters ">
    <div class="col-md-4">
      <img src="storage/app/admin/bin24.jpg" class="card-img rounded-circle" alt="Tấn phương">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Đoàn Phan Tấn Phương</h5>
        <p class="card-text">DEVELOPER</p>
         <p class="card-text">Lập Trình WEB Laravel</p>
      </div>
    </div>
  </div>
</div>

@endsection