@extends('admin.admin_master')
@section('admin')

<div class="container-full">
    <!-- Main content -->
    <section class="content">
        <div class="row">          
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Danh sách bài viết
                            <span class="badge badge-pill badge-danger">{{ count($posts) }}</span>
                        </h3>                       
                        <a href="{{ route('add.post') }}" class="btn btn-success" style="float: right;"><i class="fa fa-plus" style="background:red; margin-right:5px; border-radius:50%; padding: 5px;"></i>Add New Post</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Hình đại diện</th>
                                        <th>Tiêu đề</th>
                                        <th>Thuộc danh mục</th>
                                        <th>Hành động</th>      
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $item)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($item->post_image) }}" style="height: 50px; width: 90px;"> 
                                        </td>
                                        <td>
                                            {{ $item->post_title }}
                                        </td>
                                        <td>---</td>
                                        <td width="15%">
                                            <a href="{{ route('post.edit', $item->id) }}" class="btn btn-info" title="Sửa vài viết"><i class="fa fa-pencil"></i></a>
                                            <a href="{{ route('post.delete', $item->id) }}" class="btn btn-danger" title="Xoá bài viết" id="delete"><i class="fa fa-trash"></i></a>
                                        </td>              
                                    </tr>
                                    @endforeach                                     
                                </tfoot>
                            </table>
                        </div><!-- /.table-responsive -->                        
                    </div><!-- /.box-body -->                
                </div><!-- /.box -->          
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div> <!-- /.container-full -->

@endsection