@extends('layouts.master')

@section('title') User List @endsection
@section('css')

    <!-- DataTables -->
    <link href="{{ URL::asset('/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('common-components.breadcrumb')
         @slot('title') @if($page_title)  {{$page_title}} @endif @endslot
         {{-- @slot('li_1') Tables  @endslot --}}
     @endcomponent

                    

     <div class="row">
    @if($flag == 1)
        @include('Admin.components/admin_list')
    @elseif($flag == 2)
        @include('Admin.components/user_list')
        @elseif($flag == 3) 
        @include('Admin.components/banner_list')
    @elseif($flag == 4) 
        @include('Admin.components/add_banner')
    @elseif($flag == 5) 
        @include('Admin.components/edit_banner')
    @elseif($flag == 6) 
        @include('Admin.components/categories_list')
    @elseif($flag == 7) 
        @include('Admin.components/add_categories')
    @elseif($flag == 8) 
        @include('Admin.components/edit_categories')
    @elseif($flag == 9) 
        @include('Admin.components/sub_categories_list')
    @elseif($flag == 10) 
        @include('Admin.components/add_sub_categories')
    @elseif($flag == 11) 
        @include('Admin.components/edit_sub_categories')
    @elseif($flag == 12) 
        @include('Admin.components/blogs_list')
    @elseif($flag == 13) 
        @include('Admin.components/add_blogs')
    @elseif($flag == 14) 
        @include('Admin.components/edit_blogs')
    @elseif($flag == 15) 
        @include('Admin.components/plans_list')
    @elseif($flag == 16) 
        @include('Admin.components/add_plans')
    @elseif($flag == 17) 
        @include('Admin.components/edit_plans')
    @endif
    </div>
                    <!-- end row -->

    @endsection

@section('script')

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('/libs/pdfmake/pdfmake.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('/js/pages/datatables.init.js')}}"></script>
    <script src="{{URL::asset('/libs/tinymce/tinymce.min.js')}}"></script>
    <!-- Summernote js -->
    <script src="{{URL::asset('/libs/summernote/summernote.min.js')}}"></script>
    <!-- init js -->
    <script src="{{URL::asset('/js/pages/form-editor.init.js')}}"></script>

@endsection