@extends('layouts.app')
@section('menu')
    @include('layouts.menuUserAdmin')
@endsection('menu')
@section('content')
    <form method="post"  enctype="multipart/form-data" action="{{ url('posts/'.$post->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="panel panel-default">
            <div class="panel-heading text-center">Sửa bài viết</div>
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
                        @if($post->avatar)
                        <img src="{{ asset('public/upload/'.$post->avatar) }}" class="img-responsive center-block">
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Tên</label>
                    <input type="text" class="form-control" name="name" value="{{ $post->name }}">
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="">Chọn danh mục</label>
                            <select name="term_id" class="form-control">
                                <option value="0">Chọn cấp danh mục</option>
                                {!! APITerm::getOptionSelectBladePost($terms,$post->term_id) !!}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Cho online</label>
                            <div class="checkbox">
                                <input id="checkboxStatus" type="checkbox" name="status" value="1" {{ $post->status==1 ? 'checked' : '' }} >
                                <label for="checkboxStatus">Cho online</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Loại bài</label>
                    <select name="type" class="form-control">
                        <option value="0">---Chọn---</option>
                        <option value="1" {{ $post->type==1 ? 'selected' : '' }}>Nguyên nhân</option>
                        <option value="2" {{ $post->type==2 ? 'selected' : '' }}>Triệu chứng</option>
                        <option value="3" {{ $post->type==3 ? 'selected' : '' }}>Tác hại</option>
                        <option value="4" {{ $post->type==4 ? 'selected' : '' }}>Điều trị</option>
                        <option value="5" {{ $post->type==5 ? 'selected' : '' }}>Chi phí</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Mô tả</label>
                    <textarea type="text" class="form-control autosize" name="description">{{ $post->description }}</textarea>
                </div>
                @php $orther = json_decode($post->orther,true);@endphp
                <div class="form-group">
                    <label class="control-label">Nội dung</label>
                    <textarea type="text" class="form-control tinymce" name="content">{!! $post->content !!}</textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Keyword</label>
                    <textarea type="text" class="form-control autosize" name="keyword">{{ isset($orther['keyword']) ? $orther['keyword'] : '' }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit"><span class="fa fa-puzzle-piece"></span>  Sửa bài viết</button> 
                </div>
            </div>
        </div>
    </form>
    <script>
        $(document).ready(function() {
            // tinymce setup
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
@section('search')
    <div class="panel panel-default">
        <div class="panel-heading">Thông tin</div>
        <ul class="list-group">
            <li class="list-group-item">
                Tác giả : {{ $post->user->name }}
            </li>
            <li class="list-group-item">
                Ngày viết : {{ $post->created_at }}
            </li>
            <li class="list-group-item">
                Chuyên mục : {{ $post->term ? $post->term->name : '' }}
            </li>
            <li class="list-group-item">
                Trạng thái : {{ $post->status == 1 ? 'Đã đăng' : 'Chưa đăng' }}
            </li>
            <li class="list-group-item">
            </li>
        </ul>
    </div>
    <a href="{{ APIPost::getUrlByObj($post) }}" class="btn btn-success btn-block" target="_blank">Xem bài trên website</a>
    @include('layouts.notifi')
@endsection('search')
