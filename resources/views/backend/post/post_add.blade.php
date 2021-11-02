@extends('admin.admin_master')
@section('admin')

<!-- Content Wrapper. Contains page content -->
<div class="container-full">
    <!-- Main content -->
    <section class="content">
        <!-- Basic Forms -->
        <div class="box">
            <div class="box-header with-border">
            <h4 class="box-title">Thêm bài viết mới</h4>        
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="row">
                <div class="col">

    <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
        @csrf

<div class="row">
    <div class="col-12">     
        <div class="row"> <!--start 1st row-->
            <div class="col-md-6">
                <div class="form-group">
                    <h5>Tiêu đề bài viết <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" id="post_title" name="post_title" class="form-control" required="">
                        @error('post_title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div> <!--end col md 6 -->
            <div class="col-md-6">
                <div class="form-group">
                    <h5>Ảnh đại diện <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="file" id="post_image" name="post_image" class="form-control" required="" onChange="mainThamUrl(this)">
                        @error('post_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <img src="" id="mainThmb">
                    </div>
                </div>
            </div> <!--end col md 6 -->
        </div> <!--end 1st row-->

        <div class="row"> <!--start 2rd row-->
            <div class="col-md-12">
                <div class="form-group">
                    <h5>Nội dung bài viết <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <textarea id="editor1" name="post_content" rows="10" cols="80" required="" placeholder="Nhập nội dung bài viết tại đây..."></textarea>
                    </div>
                </div>
            </div> <!--end col md 12 -->
        </div> <!--end 2rd row-->

        <div class="row"> <!--start 3rd row-->
            <div class="col-md-6">
                <div class="form-group">                
                    <div class="controls">
                        <fieldset>
                            <input type="checkbox" id="checkbox_1" name="voucher_enabled" value="1">
                            <label for="checkbox_1">Voucher_Enabled</label>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <h5>Voucher Quantity</h5>
                    <div class="controls">
                        <input type="text" id="voucher_qty" name="voucher_qty" class="form-control">
                        @error('voucher_qty')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div><!--end 3rd row-->
        <hr>
    </div> <!--end div col-12-->
</div> <!--end row-->
<div class="text-xs-right">
    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Tạo mới bài viết">
</div>
                </form>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Để hiện thị ảnh xem trước - 01/11/2021-->
<script type="text/javascript">
    function mainThamUrl(input) {
        if(input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#mainThmb').attr('src',e.target.result).width(120).height(80);
            }
            reader.readAsDataURL(input.files['0']);
        }
    }
</script>
<!-- End - Để hiện thị ảnh xem trước - 01/11/2021-->

@endsection