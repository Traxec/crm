@extends('home.layouts.default')

@section('title','个人身份认证')

@section('content')
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>我的账户信息</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>表单验证 <small>Form validation </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <form class="form-horizontal form-label-left" action="{{Route('persons.update',1)}}" method="post" >
              {{ method_field('PUT') }}
              {{ csrf_field() }}

              <p>---修改时请仔细核对您的信息，以免信息出错
              </p>
              <span class="section">修改个人信息</span>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">账户ID <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="number" id="number" name="number" required="required" data-validate-minmax="600000,699999" class="form-control col-md-7 col-xs-12" value="600001" disabled>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">姓名 <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="0,3" name="name" placeholder="(请输入您的真实姓名 例如:李达康)" required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">性别 <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="gender" class="btn-group" data-toggle="buttons" style="height:34px">
                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="male"> &nbsp; 男 &nbsp;
                    </label>
                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="female"> &nbsp; 女 &nbsp;
                    </label>
                  </div>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">身份证 <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="IDCard" id="IDCard" name="IDCard" required="required" class="form-control col-md-7 col-xs-12" placeholder="(请输入您的电话 例如:13203836651@163.com)">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">身份证有效时间 <span class="required">*</span>
                </label>
                  <div class="col-md-4">
                    <fieldset>
                      <div class="control-group">
                        <div class="controls">
                          <div class="input-prepend input-group">
                            <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                            <input type="text" style="width: 200px" name="reservation" id="reservation" class="form-control" value="01/01/2016 - 01/25/2016" />
                          </div>
                        </div>
                      </div>
                    </fieldset>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">身份证<span class="required">*</span>
                </label>
                <div class="dropz dropzone"></div>

              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <button id="send" type="submit" class="btn btn-success"> 提 交 </button>
                  <button type="submit" class="btn btn-primary"> 取 消 </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- jQuery -->
<script src="{{asset('bootcss/home/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Dropzone.js -->
<script src="{{asset('bootcss/home/vendors/dropzone/dist/dropzone.js')}}"></script>

<script>
    $(".dropz").dropzone({
        url: "{{Route('persons.update',1)}}",
    });
    Dropzone.options.dropz= {
      // Prevent Dropzone from auto discovering this element:
      // Dropzone.options.dropz= false;
      // This is useful when you want to create the
      // Dropzone programmatically later

      // Disable auto discover for all elements:
      // Dropzone.autoDiscover = false;

      createImageThumbnails: "false",
      paramName: "file", // The name that will be used to transfer the file
      maxFilesize: 0.001, // MB
      accept: function(file, done) {
        if (file.name == "justinbieber.jpg") {
          done("Naha, you don't.");
        }
        else { done(); }
      }
    };
</script>
@endsection
