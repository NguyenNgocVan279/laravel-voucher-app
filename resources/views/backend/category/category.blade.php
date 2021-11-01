@extends('admin.admin_master')
@section('admin')

<div class="container-full">   
    <!-- Main content -->
    <section class="content">
        <div class="row">         
            <div class="col-8">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Danh sách danh mục
                            <span class="badge badge-pill badge-danger">{{ count($categories) }}</span>
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Icon</th>
                                        <th>Tên danh mục</th>
                                        <th>Danh mục con </th>
                                        <th>Hành động</th>      
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key => $category)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><span><i class="{{ $category->category_icon }}"></i></span></td>                            
                                        <td>{{ $category->category_name }}</td>
                                        <td>
                                            @foreach ($category->children as $item)
                                                {{ $item->category_name }} <br/>
                                            @endforeach
                                        </td>
                                        <td width="25%">
                                            <a href="{{route('category.edit', $category->id)}}" class="btn btn-info" title="Sửa danh mục"><i class="fa fa-pencil"></i></a>
                                            <a href="{{route('category.delete', $category->id)}}" class="btn btn-danger" title="Xoá danh mục" id="delete"><i class="fa fa-trash"></i></a>
                                        </td>              
                                    </tr>
                                    @endforeach                                     
                                </tfoot>
                            </table>
                        </div><!-- /.table-responsive -->                        
                    </div><!-- /.box-body -->                
                </div><!-- /.box -->          
            </div><!-- /.col -->

        <!---------------------Add Category------------->

            <div class="col-4">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm danh mục</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                           
    <form method="post" action="{{ route('category.store') }}">
        @csrf

        <div class="form-group">
            <h5>Tên danh mục <span class="text-danger">*</span></h5>
            <div class="controls">
                <input type="text" name="category_name" class="form-control">
                @error('category_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <h5>Danh mục cha</h5>
            <div class="controls">
                <select name="parent" id="parent" class="form-control" value="">
                    <option value="none">No Parent</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->category_name	 }}
                        </option>
                    @endforeach
                </select>
                @error('parent')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <h5>Icon đại diện <span class="text-danger">*</span></h5>
            <div class="controls">
                <input type="text" name="category_icon" class="form-control">
                @error('category_icon')
                    <span class="text-danger">{{ $message }}</span>
                @enderror 
            </div>
        </div>
                    
        <div class="text-xs-right">
            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Thêm mới">
        </div>
    </form>

                        </div><!-- /.table-responsive -->                        
                    </div><!-- /.box-body -->                
                </div><!-- /.box -->          
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div> <!-- /.container-full -->

@endsection