


     $(document).ready(function() {
            var slider = $("#slider");
            var thumb = $("#thumb");
            var slidesPerPage = 4; //globaly define number of elements per page
            var syncedSecondary = true;
            slider.owlCarousel({
                items: 1,
                slideSpeed: 2000,
                nav: false,
                autoplay: false, 
                dots: false,
                loop: true,
                responsiveRefreshRate: 200
            }).on('changed.owl.carousel', syncPosition);
            thumb
                .on('initialized.owl.carousel', function() {
                    thumb.find(".owl-item").eq(0).addClass("current");
                })
                .owlCarousel({
                    items: slidesPerPage,
                    dots: false,
                    nav: true,
                    item: 4,
                    smartSpeed: 200,
                    slideSpeed: 500,
                    slideBy: slidesPerPage, 
                    navText: ['<svg width="18px" height="18px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="25px" height="25px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
                    responsiveRefreshRate: 100
                }).on('changed.owl.carousel', syncPosition2);
            function syncPosition(el) {
                var count = el.item.count - 1;
                var current = Math.round(el.item.index - (el.item.count / 2) - .5);
                if (current < 0) {
                    current = count;
                }
                if (current > count) {
                    current = 0;
                }
                thumb
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = thumb.find('.owl-item.active').length - 1;
                var start = thumb.find('.owl-item.active').first().index();
                var end = thumb.find('.owl-item.active').last().index();
                if (current > end) {
                    thumb.data('owl.carousel').to(current, 100, true);
                }
                if (current < start) {
                    thumb.data('owl.carousel').to(current - onscreen, 100, true);
                }
            }
            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    slider.data('owl.carousel').to(number, 100, true);
                }
            }
            thumb.on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).index();
                slider.data('owl.carousel').to(number, 300, true);
            });


          
        });


jQuery(document).ready(function () {

    let personQty = [];

    function children(v,rel){
        $('#'+rel).html(v);
        $('#'+rel).data('href',v);
    }
    
    
    $(document).on('click','.children_qtyplus',function(){
        let childrenqty = parseInt($('#' + $(this).attr('rel')).html());
        if ($(this).data('target') > childrenqty) {
            childrenqty += 1;
        }
        
        children(childrenqty,$(this).attr('rel'));
        getPerson();
        getTotalPrice();
    })


    $(document).on('click','.children_qtymins',function(){
        let childrenqty = parseInt($('#' + $(this).attr('rel')).html());
       
        if(childrenqty > $(this).data('href')){
            childrenqty -= 1;
        }
        children(childrenqty,$(this).attr('rel'));

        getPerson();
        getTotalPrice();

    })

    
    function getPerson(){
        personQty =	$(".children_qty").map(function(v) {
            return $(this).text();
        }).get();
        return personQty;
    }

    getPerson();
    
//  ----------------- Date ------------------//

    let facilities = [];
    let extra_price = 0.00;
   
    let startDate = '';
    let endDate = '';
    let duration = $('#tourDoration').val();
    duration = parseInt(duration) ;

    $(document).on('change','.date_check',function(){

        startDate    = new Date($(this).val());
        var newdate = new Date($(this).val());
        newdate.setDate(newdate.getDate() + (duration -1));
        var ndd = startDate.getDate();
        var nmm = startDate.getMonth() + 1;
        var ny = startDate.getFullYear();


        var dd = newdate.getDate();
        var mm = newdate.getMonth() + 1;
        var y = newdate.getFullYear();
        startDate = ndd + '/' + nmm + '/' + ny;
        endDate = dd + '/' + mm + '/' + y;
        dateshow(1);
        booking();
        getTotalPrice();
    });


//  ----------------- Date ------------------//


$(document).on('click','.tour_extra_prices',function(){

    if(endDate){
        if ($(this).is(":checked")) {
            facilities.push($(this).val());
            extra_price += parseFloat($(this).attr('data-href'));
        }else{
            facilities.splice( $.inArray($(this).val(), facilities), 1 );
            extra_price -= parseFloat($(this).attr('data-href'));
        }
        getTotalPrice();

    }else{
        $(this).attr("checked",false);
        $.notify('Please Select Your Booking Date');
    }
       
    })


    function getTotalPrice()
    {
        let total = 0;
        let person = 0;
        $('.children_qty').map(function(key,val){
                let qty = $(this).data('href');
                let price = $(this).data('target');
                let x = parseInt(qty) * parseFloat(price);
                $(this).attr('data-price',x);
                person += parseFloat($(this).attr('data-price')); 
        })


        
        let upprice = parseFloat($('#tourMainPrice').val()).toFixed(2);
        total += parseFloat(upprice) + parseFloat(person) + parseFloat(extra_price);
        $('.total_price').html(parseFloat(total).toFixed(2));
        dateshow(1);
    }

    function dateshow(e){
        if(e == 1){
            $('.date_show').removeClass('d-none');
            $('.start_date_show').html(startDate);
            $('.end_date_show').html(endDate);
        }else{
            $('.date_show').addClass('d-none');
            $('.start_date_show').html('')
            $('.end_date_show').html('')
        }
    }



    $(document).on('click','.book_button',function(){
        let formData = new FormData();

        if(!endDate){
            $('.book_button').attr('disabled',true);
        }else{
            $('.book_button').attr('disabled',false);
        }

        if (parseInt($('#tourMaxPeapule').val()) < parseInt(personQty[0]) + parseInt(personQty[1])) {
            $.notify(lang.maxsize + ' '+ parseInt($('#tourMaxPeapule').val()),'werning');
        } else {
            
            formData.append('night', duration);
            formData.append('start_date', startDate);
            formData.append('end_date', endDate);
            formData.append('tour_id', $('#tourId').val());
            formData.append('facilities', facilities);
            formData.append('person_type', personQty);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: mainurl + '/tour/book/store',
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.login) {
                        window.location.href = data.login;
                    }
                    if (data.error) {
                        $.notify(data.error);
                    }
                    if (data.success) {
                        window.location.href = data.success;
                    }
                    
                }
            });
        }

        
    })

   
if(!endDate){
    $('.book_button').attr('disabled',true);
}else{
    $('.book_button').attr('disabled',false);
}

function booking (){
    if(!endDate){
    $('.book_button').attr('disabled',true);
    }else{
        $('.book_button').attr('disabled',false);
    }
}





});

