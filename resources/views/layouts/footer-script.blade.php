        <!-- JAVASCRIPT -->
        <script src="{{ URL::asset('libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ URL::asset('libs/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('libs/metismenu/metismenu.min.js')}}"></script>
        <script src="{{ URL::asset('libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ URL::asset('libs/node-waves/node-waves.min.js')}}"></script>

        @yield('script')

        <!-- App js -->
        <script src="{{ URL::asset('js/app.min.js')}}"></script>

        <script type="text/javascript">
                $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                        });
                        $(document).ready(function() {
                            $('select[name="medium_id"]').on('change', function() {
                                var mediumID = $(this).val();
                                if(mediumID) {
                                    $.ajax({
                                        url: '/myform/ajax/'+mediumID,
                                        type: "GET",
                                        dataType: "json",
                                        success:function(data) {                    
                                        //     alert(data);
                                            $('select[name="standard_id"]').empty();
                                            $.each(data, function(key, value) {
                                                $('select[name="standard_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                                            });                    
                    
                                        }
                                    });
                                }else{
                                    $('select[name="standard_id"]').empty();
                                    // $('select[name="standard_id"]').append('<option value="''">'+ Select Standard +'</option>');
                                }
                            });
                        });
                    </script>

                    <script type="text/javascript">
                        $.ajaxSetup({
                                headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                                });
                                $(document).ready(function() {
                                    $('select[name="standard_id"]').on('change', function() {
                                        var standardID = $(this).val();
                                        if(standardID) {
                                            $.ajax({
                                                url: '/myform/getsubject/'+standardID,
                                                type: "GET",
                                                dataType: "json",
                                                success:function(data) {                    
                                                //     alert(data);
                                                    $('select[name="subject_id"]').empty();
                                                    $.each(data, function(key, value) {
                                                        $('select[name="subject_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                                                    });                    
                            
                                                }
                                            });
                                        }else{
                                            $('select[name="subject_id"]').empty();
                                        //     $('select[name="chapter_id"]').append('<option value="''">'+ Select Chapter +'</option>');
                                        }
                                    });
                                });
                            </script>

                        
<script type="text/javascript">
    $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $(document).ready(function() {
                $('select[name="subject_id"]').on('change', function() {
                    var subjectID = $(this).val();
                    if(subjectID) {
                        $.ajax({
                            url: '/myform/getchapter/'+subjectID,
                            type: "GET",
                            dataType: "json",
                            success:function(data) {                    
                            //     alert(data);
                                $('select[name="chapter_id"]').empty();
                                $.each(data, function(key, value) {
                                    // $('select[name="chapter_id"]').append('<option value="''">'+ Select Chapter +'</option>');
                                    $('select[name="chapter_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                                });                    
        
                            }
                        });
                    }else{
                        $('select[name="chapter_id"]').empty();
                    //     $('select[name="chapter_id"]').append('<option value="''">'+ Select Chapter +'</option>');
                    }
                });
            });
        </script>

<script>
    $(document).ready(function()
             {
             $('#add_more_btn').click(function()
                 {
                     $("#add_div").append(' <div class="form-group row"><label class="col-md-4 col-form-label"> Sub Image </label><div class="col-md-4"><input type="file" name="product_image[]"></div><div class="col-md-4"><a href="javascript:void(0);" id="remCF1" class="remCF2 btn btn-danger float-right">Remove</a></div></div>');
                 });
 
                 $('#add_div').on('click','.remCF2',function() 
                 {
                     //alert("!!");
                     $(this).parent().parent().remove();
                 });
 
             });
 </script>

        @yield('script-bottom')