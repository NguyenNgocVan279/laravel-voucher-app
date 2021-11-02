@extends('admin.admin_master')
@section('admin')

<div class="container-full">
    <!-- Main content -->
    <section class="content">
        <div class="row"> 
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm danh mục cho bài viết</h3> 
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">

                                <div class="col-md-9">
                                    <b>Tiêu đề: {{$post->post_title}}</b> <br/><br/>
                                    @if($post->categories->count() > 0)
                                        <b>Danh mục đã thêm:</b> (Click để loại bỏ)
                                        <p>
                                            @foreach($post->categories as $category)
                                                <a href="{{ route('post.detach_category',[$post->id,$category->id]) }}"><span class="badge badge-{{ $category->style }}">{{ $category->category_name }}</span></a>
                                            @endforeach
                                        </p>
                                    @endif
                    
                                    @if($availableCategories->count() > 0)
                                        <b>Danh mục có sẵn:</b> (Click để thêm danh mục)
                                        <p>
                                            @foreach($availableCategories as $category)
                                                <a href="{{ route('post.attach_category',[$post->id,$category->id]) }}"><span class="badge badge-{{ $category->style }}">{{ $category->category_name }}</span></a>
                                            @endforeach
                                        </p>
                                    @endif
                                </div>

                            </table>
                        </div><!-- /.table-responsive -->                        
                    </div><!-- /.box-body -->                
                </div><!-- /.box -->          
            </div><!-- /.col -->
            
            
            
        </div><!-- /.row -->

        
        <div class="mt-2">
            <a class="btn btn-primary btn-sm" href="{{ route('list.post') }}">Trở về Danh sách bài viết</a>
        </div>

    </section><!-- /.content -->
</div> <!-- /.container-full -->

@endsection