$(document).ready(function(){
    $("#sort").click(function(filter, value) {
        if($('#filter_icon').hasClass('fa-chevron-down')){
            $('#sort').html('<i class="fa-solid fa-chevron-up" id="filter_icon"></i>')
            $filter = "ASC"
        }
        else{
            $('#sort').html('<i class="fa-solid fa-chevron-down" id ="filter_icon"></i>')
            $filter = "DESC"
        }
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '/filter',
            data: {
                'filter': $filter
            },
            success:function(data){
            $('tbody').html(data);
            }
        });
    })
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

    $("#sort_date").click(function() {
        if($('#filter_date').hasClass('fa-chevron-down')){
            $('#sort_date').html('<i class="fa-solid fa-chevron-up" id="filter_date"></i>')
            $filter = "ASC"
        }
        else{
            $('#sort_date').html('<i class="fa-solid fa-chevron-down" id ="filter_date"></i>')
            $filter = "DESC"
        }
        $.ajax({
            type: 'get',
            url: '/filter',
            data: {
                'date': $filter
            },
            success:function(data){
            $('tbody').html(data);
            }
        });
    })
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

    $(".filter_delivery_icon").click(function() {
        if($('#filter_delivery_date').hasClass('fa-chevron-down')){
            $('#sort_delivery .filter_delivery_icon').html('<i class="fa-solid fa-chevron-up" id="filter_delivery_date"></i>')
            $("#filter_delivery_dropdown").hide();
        }
        else{
            $('#sort_delivery .filter_delivery_icon').html('<i class="fa-solid fa-chevron-down" id ="filter_delivery_date"></i>')
            $("#filter_delivery_dropdown").show();
        }
    })

    $(".filter_delivery_select_year").change(function() {
        $.ajax({
            type: 'get',
            url: '/getMonth',
            data: {
                'year': $(this).val()
            },
            // success:function(data){
            // $('tbody').html(data);
            // }
        });
    })
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
});