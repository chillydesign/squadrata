
(function ($, root, undefined) {

    $(function () {

        'use strict';

        var $window = $(window);
        var $body = $('body');




        // mobile menu button
        var $menu_button = $('#menu_button');
        var $nav = $('nav');
        $menu_button.on('click', function(e){
            e.preventDefault();
            $nav.toggleClass('visible');
        });

        // if press escape key, hide menu
        $(document).on('keydown', function(e){
            if(e.keyCode == 27 ){
                $nav.removeClass('visible');
            }
        })

        $('#main').on('click', function() {
            $nav.removeClass('visible');
        });



        var $projects_slider = $("#projects_slider");
        if ($projects_slider.length > 0) {
            var $slides_to_show = $projects_slider.data('slidestoshow');
            if ($slides_to_show == undefined) {
                $slides_to_show = 3;
            }
            $projects_slider.slick({

                // normal options...
                infinite: true,
                autoplay: true,
                dots: false,
                slidesToShow: $slides_to_show,

                // the magic
                responsive: [{

                    breakpoint: 992,
                    settings: {
                        slidesToShow: Math.max($slides_to_show - 1, 1),
                    }

                }, {

                    breakpoint: 568,
                    settings: {
                        slidesToShow: Math.max($slides_to_show - 2, 1)
                    }

                }]
            });

        }


        // MAP
        // MEMBERS MAP
        if (typeof map_location != 'undefined') {

            var map_theme = [{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#C5E3BF"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#D1D1B8"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#C6E2FF"}]}];

            var map_options = {
                zoom: 15,
                mapTypeControl: true,
                scrollwheel: false,
                draggable: true,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: map_theme
            };


            var location_map_container = $('#map_container');
            location_map_container.css({
                width : '100%'
            })

            var location_map = new google.maps.Map(location_map_container.get(0), map_options);
            var latlng = new google.maps.LatLng(  map_location.lat, map_location.lng   );
            var infowindow = new google.maps.InfoWindow({content: ''});
            var marker = new google.maps.Marker({
                position: latlng,
                map: location_map,
                optimized: false
            });

            marker.addListener('click', function(){
                infowindow.setContent( map_location.title );
                infowindow.open(location_map, this);
            })

            location_map.setCenter( latlng );



        };
        // END OF MAP







    });

})(jQuery, this);
