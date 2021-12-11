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
        @include('Admin.components.Products.view_product')
    @elseif($flag == 2) 
        @include('Admin.components.Products.add_product')
    @elseif($flag == 3) 
        @include('Admin.components.Products.edit_product')
    @elseif($flag == 4)
        @include('Admin.components.Products.view_product_attribute')
    @elseif($flag == 5) 
        @include('Admin.components.Products.add_product_attribute')
    @elseif($flag == 6) 
        @include('Admin.components.Products.edit_product_attribute')
    @elseif($flag == 7) 
        @include('Admin.components.Products.view_product_images')
    @elseif($flag == 8) 
        @include('Admin.components.Products.add_product_images')
    @elseif($flag == 9) 
        @include('Admin.components.Products.edit_product_images')
    @elseif($flag == 10) 
        @include('Admin.components.Products.view_order')
    @elseif($flag == 11) 
        @include('Admin.components.Products.view_order_details')
    @elseif($flag == 12) 
        @include('Admin.components.Report.sell_report')
    @elseif($flag == 13) 
        @include('Admin.components.Report.user_subscription_report')
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
       <!--tinymce js-->
<script src="{{URL::asset('/libs/tinymce/tinymce.min.js')}}"></script>
<!-- Summernote js -->
<script src="{{URL::asset('/libs/summernote/summernote.min.js')}}"></script>
<!-- init js -->
<script src="{{URL::asset('/js/pages/form-editor.init.js')}}"></script>

@endsection