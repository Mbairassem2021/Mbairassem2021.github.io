   <section class="container-fluid galerie">
            <h2 id="galerie">Galerie</h2>
            <hr class="separator">
        <div class="container " id="content">
            <article class="col-md-3 col-lg-3 col-sx-12 col-sm-12 img-thumbnail item-folio">
                <img src="img/p1.jpg" alt="">
            </article>
            <article class="col-md-3 col-lg-3 col-sx-12 col-sm-12 img-thumbnail item-folio">
                    <img src="img/p2.jpg" alt="">
            </article>
            <article class="col-md-3 col-lg-3 col-sx-12 col-sm-12 img-thumbnail item-folio">
                    <img src="img/p3.jpg" alt="">
            </article>
            <article class="col-md-3 col-lg-3 col-sx-12 col-sm-12 img-thumbnail item-folio">
                    <img src="img/p4.jpg" alt="">
            </article>
            <article class="col-md-3 col-lg-3 col-sx-12 col-sm-12 img-thumbnail item-folio">
                    <img src="img/p5.jpg" alt="">
            </article>
            <article class="col-md-3 col-lg-3 col-sx-12 col-sm-12 img-thumbnail item-folio">
                    <img src="img/p6.jpg" alt="">
            </article>
            <article class="col-md-3 col-lg-3 col-sx-12 col-sm-12 img-thumbnail item-folio">
                    <img src="img/p7.jpg" alt="">
            </article>
            <article class="col-md-3 col-lg-3 col-sx-12 col-sm-12 img-thumbnail item-folio">
                <img src="img/p8.jpg" alt="">
            </article>
            <article class="col-md-3 col-lg-3 col-sx-12 col-sm-12 img-thumbnail item-folio">
                    <img src="img/p9.jpg" alt="">
            </article>
            <article class="col-md-3 col-lg-3 col-sx-12 col-sm-12 img-thumbnail item-folio">
                    <img src="img/p10.jpg" alt="">
            </article>
            <article class="col-md-3 col-lg-3 col-sx-12 col-sm-12 img-thumbnail item-folio">
                    <img src="img/p11.jpg" alt="">
            </article>
            <article class="col-md-3 col-lg-3 col-sx-12 col-sm-12 img-thumbnail item-folio">
                <img src="img/p12.jpg" alt="">
            </article>
             
        </div>

        <div class="container" id="page_navigation"> </div>
        <script src="js/jquery.js"></script>
            <script>
                    var show_per_page = 4;
                    var current_page = 0;
                    
                    function set_display(first , last) {
                     $('#content').children().css('display', 'none');
                     $('#content').children().slice(first , last).css('display', 'block');
                     }
                    
                     function previous(){
                     if($('.active').prev('.page_link').length) go_to_page(current_page - 1);
                     }

                    function next(){
                    if($('.active').next('.page_link').length) go_to_page(current_page + 1);
                    }

                    function go_to_page(page_num){
                        current_page = page_num;
                        start_from = current_page * show_per_page;
                        end_on = start_from + show_per_page;
                        set_display(start_from , end_on);
                        $('.active').removeClass('active');
                        $('#id' + page_num).addClass('active');
                    }

                    $(document).ready(function() {
                        var number_of_pages = Math.ceil($('#content').children().size() / show_per_page);
                        var nav = '<ul class="pagination"><li><a href="javascript:previous();"><<</a> ';
                        var i = -1;
                        while(number_of_pages > ++i){
                        nav += '<li class="page_link'
                        if(!i) nav += 'active';
                        nav += '" id="id ' + i +'">';
                        nav += '<a href="javascript:go_to_page('+ i +')"> '+ (i+ 1) +'</a>';
                        }
                        nav += '<li><a href="javascript:next();">>></a></ul> ';
                            $('#page_navigation').html(nav);
                            set_display( 0, show_per_page);
                        });
            </script>
    </section>