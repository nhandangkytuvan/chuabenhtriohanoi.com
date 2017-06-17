@extends('layouts.app')
@section('menu')
    @include('layouts.menuUserAdmin')
@endsection('menu')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading text-center">Danh sách</div>
        <table class="table table-bordered">
            <tr class="active">
                <td>ID</td>
                <td>Ảnh</td>
                <td>Tên</td>
                <td>Danh mục</td>
                <td>T.giả</td>
                <td>Ngày</td>
                <td>#</td>
            </tr>
            @foreach($posts as $key => $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>
                    @if($post->avatar)
                    <img src="{{ asset('public/upload/'.$post->avatar) }}" class="img-responsive center-block" style="max-width: 50px;">
                    @endif
                </td>
                <td>
                    <a href="{{ APIPost::getUrlByObj($post) }}">
                        {{ $post->name }}
                        @php 
                            switch($post->type){
                                case 1:
                                    $type = 'nguyên nhân';
                                    break;
                                case 2:
                                    $type = 'triệu trứng';
                                    break;
                                case 3:
                                    $type = 'tác hại';
                                    break;
                                case 4:
                                    $type = 'điều trị';
                                    break;
                                case 5:
                                    $type = 'chi phí';
                                    break;
                                default:
                                    break;
                            }
                        @endphp
                        @if(isset($type))
                            <label class="label label-success">{{ $type }}</label>
                            @php $type = null; @endphp
                        @endif
                    </a>
                </td>
                <td>{{ $post->term ? $post->term->name : '' }}</td>
                <td>{{ $post->user ? $post->user->name : '' }}</td>
                <td>{{ date("d.m",strtotime($post->created_at)) }}</td>
                <td>
                    <div class="clearfix">
                        <div class="pull-right">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-option-horizontal"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-eye-open"></span> Xem bài viết
                                        </a> 
                                    </li> 
                                    <li>
                                        <a href="{{ url('posts/'.$post->id.'/edit') }}">
                                            <span class="glyphicon glyphicon-pencil"></span> Sửa bài viết
                                        </a> 
                                    </li> 
                                    <li>
                                        <a href="#!posts/{{ $post->id }}/delete"  data-toggle="modal" data-target="#modalDestroy">
                                            <span class="glyphicon glyphicon-trash"></span> Xóa bài viết
                                        </a> 
                                    </li>
                                </ul>  
                            </div>
                        </div>
                    </div> 
                </td>
            </tr>
            @endforeach
        </table>
        <div class="panel-footer">
            {{ $posts->appends(request()->except('page'))->links() }}
        </div>
    </div>
@endsection('content')
@section('search')
    @include('posts.search')
@endsection('search')
@section('modal')
    @include('layouts.modalDestroy')
@endsection('modal')

