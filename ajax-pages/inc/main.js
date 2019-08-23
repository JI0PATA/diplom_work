jQuery($ => {

    $.ajaxSetup({cache:false});

    $('#content').addClass('page-opened');

    $(".menu-item a, .site-title a").click(function(e){

        $('#content').removeClass('page-opened');

        setTimeout(() => {
            let pageurl = $(this).attr('href');

            if(pageurl !== window.location) {
                window.history.pushState({path: pageurl}, '', pageurl);
            }

            $('.site-content-contain').load(pageurl + ' #content');

            setTimeout(() => {
                $('#content').addClass('page-opened');
            }, 500);
        }, 500);

        return false;
    });
});


// jQuery($ => {
//
//     $.ajaxSetup({ cache:false });
//     pageOpened();
//
//     $(".menu-item a").click(function(e) {
//         hidePage();
//         setTimeout(loadPageByAjax.bind(this), 500);
//
//         return false;
//     });
//
//     function loadPageByAjax() {
//         let pageurl = $(this).attr('href');
//
//         changeURL(pageurl);
//
//         $('.site-content-contain').load(pageurl + ' #content');
//
//         setTimeout(pageOpened, 500);
//     }
//
//     function changeURL(pageurl) {
//         if(pageurl !== window.location) {
//             window.history.pushState({path: pageurl}, '', pageurl);
//         }
//     }
//
//     function hidePage() {
//         $('#content').removeClass('page-opened');
//     }
//
//     function pageOpened() {
//         $('#content').addClass('page-opened');
//     }
// });