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
                <td>Số bài</td>
                <td>#</td>
            </tr>
            @foreach($terms as $key => $term)
            @php $orther = json_decode($term->orther,true);@endphp
            <tr {!! $term->term_id == 0 ? 'class="active"' : '' !!}>
                <td>{{ $term->id }}</td>
                <td>
                    @if($term->avatar)
                    <img src="{{ asset('public/upload/'.$term->avatar) }}" class="img-responsive center-block" style="max-width: 50px;">
                    @endif
                </td>
                <td>
                    <a href="{{ APITerm::getUrlByObj($term) }}" >{{ $term->name }}</a>
                    @if(isset($orther['meta']))
                    <span class="glyphicon glyphicon-pushpin pull-right" 
                        data-toggle="tooltip" data-placement="top" title="{{ isset($orther['meta']) ? $orther['meta'] : '' }}"></span>
                    @endif
                </td>
                <td>{{ $term->post()->count() }}</td>
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
                                            <span class="glyphicon glyphicon-eye-open"></span> Xem danh mục
                                        </a> 
                                    </li> 
                                    <li>
                                        <a href="{{ url('terms/'.$term->id.'/edit') }}">
                                            <span class="glyphicon glyphicon-pencil"></span> Sửa danh mục
                                        </a> 
                                    </li> 
                                    <li>
                                        <a href="#!terms/{{ $term->id }}/delete"  data-toggle="modal" data-target="#modalDestroy">
                                            <span class="glyphicon glyphicon-trash"></span> Xóa danh mục
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
    </div>
    <script>
        $(document).ready(function($) {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection('content')

@section('modal')
    @include('layouts.modalDestroy')
@endsection('modal')