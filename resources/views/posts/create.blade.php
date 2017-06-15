@extends('layouts.app')
@section('menu')
    @include('layouts.menuUserAdmin')
@endsection('menu')
@section('content')
    <form method="post"  enctype="multipart/form-data" action="{{ url('posts') }}">
        {{ csrf_field() }}
        <div class="panel panel-default">
            <div class="panel-heading text-center">Tạo danh mục</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Ảnh</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                                <input type="file" class="form-control" name="avatar" id="fileUpload">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6" id="image-holder">
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="control-label">Tên</label>
                    <input type="text" class="form-control" name="name"  value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="">Chọn cấp danh mục</label>
                            <select name="term_id" class="form-control">
                                <option value="0">Chọn cấp danh mục</option>
                                {!! APITerm::getOptionSelectBladePost($terms) !!}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Cho online</label>
                            <input type="checkbox" name="status" value="1" checked class="form-control" style="box-shadow: none;text-align: left;height: 20px;width: 30px;">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Mô tả</label>
                    <textarea type="text" class="form-control autosize" name="description">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Nội dung</label>
                    <textarea type="text" class="form-control tinymce" name="content">{{ old('content') }}</textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Keyword</label>
                    <textarea type="text" class="form-control autosize" name="keyword">{{ old('keyword') }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit"><span class="fa fa-puzzle-piece"></span>  Thêm bài viết</button> 
                </div>
            </div>
        </div>
    </form>
    <script>
        $(document).ready(function() {
            // tinmce setup
            tinymce.init({
                selector: 'textarea.tinymce',
                font_formats: 'Arial=arial,helvetica,sans-serif;',
                height:600,
                theme: 'modern',
                fontsize_formats: "8px 9px 10px 11px 12px 13px 14px 15px 16px 18px 20px 22px",
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'paste textcolor colorpicker textpattern imagetools toc responsivefilemanager'
                ],
                toolbar1: 'undo redo insert styleselect bold italic alignleft aligncenter alignright alignjustify bullist numlist outdent indent',
                toolbar2: 'print preview media forecolor backcolor fontsizeselect link image code responsivefilemanager fullscreen',
                image_advtab: true,
                external_filemanager_path:"http://chuabenhtriohanoi.com/filemanager/",
                external_plugins: { "filemanager" : "http://chuabenhtriohanoi.com/filemanager/plugin.min.js"},
                content_css: [
                    '{{ asset("public/css/app/codepen.min.css") }}'
                ],
            }); 
            // autosize textarea
            autosize($("textarea.autosize"));
            // view image avatar
            $("#fileUpload").on('change', function () {
                //Get count of selected files
                var countFiles = $(this)[0].files.length;
                var imgPath = $(this)[0].value;
                var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
                var image_holder = $("#image-holder");
                image_holder.empty();

                if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                    if (typeof (FileReader) != "undefined") {
                        //loop for each file selected for uploaded.
                        for (var i = 0; i < countFiles; i++) {

                            var reader = new FileReader();
                            reader.onload = function (e) {

                                $('<img src="'+e.target.result+'" class="img-thumbnail img-responsive" />').appendTo(image_holder);
                            }

                            image_holder.show();
                            reader.readAsDataURL($(this)[0].files[i]);
                        }

                    }else{
                        alert("This browser does not support FileReader.");
                    }
                }else{
                    alert("Please select only images");
                }
            });
        });
    </script>
@endsection('content')

