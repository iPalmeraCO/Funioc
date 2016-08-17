( function($) {
    $('.motopress-share-buttons a').click(function(){
        var thisOne = $(this),
            thisName = thisOne.attr('title'),
            thisLink = null,
            pageLink = encodeURIComponent(document.URL);

        if (thisName === 'Facebook') {
            thisLink = 'https://www.facebook.com/sharer/sharer.php?u=';
        }else if (thisName === 'Twitter') {
            thisLink = 'https://twitter.com/share?url=';
        }else if (thisName ==='Google +' ) {
            thisLink = 'https://plus.google.com/share?url=';
        }else if (thisName === 'Pinterest') {
            thisLink = '//www.pinterest.com/pin/create/button/?url=';
        }

        motoOpenShareWindow(thisLink+pageLink, thisName);

        return false;
    });
    function motoOpenShareWindow(link, name) {
        var leftvar = (screen.width-640)/2;
        var topvar = (screen.height-480)/2;
        openWindow = window.open(link, name, 'width=640,height=480,left='+leftvar+',top='+topvar+',status=no,toolbar=no,menubar=no,resizable=yes');
    }

} )(jQuery);