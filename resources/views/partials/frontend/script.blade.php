<script src="{{ asset('assets/frontend/scripts/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/frontend/scripts/chosen.min.js') }}"></script>
<script src="{{ asset('assets/frontend/scripts/slick.min.js') }}"></script>
<script src="{{ asset('assets/frontend/scripts/rangeslider.min.js') }}"></script>
<script src="{{ asset('assets/frontend/scripts/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/scripts/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/frontend/scripts/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/frontend/scripts/mmenu.js') }}"></script>
<script src="{{ asset('assets/frontend/scripts/tooltips.min.js') }}"></script>
<script src="{{ asset('assets/frontend/scripts/color_switcher.js') }}"></script>
<script src="{{ asset('assets/frontend/scripts/jquery_custom.js') }}"></script>
<script src="{{ asset('assets/frontend/scripts/typed.js') }}"></script>



@yield('js')

<script>
    function initAutocomplete() {
        var input = document.getElementById('autocomplete-input');
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }
        });

        if ($('.main-search-input-item')[0]) {
            setTimeout(function(){
                $(".pac-container").prependTo("#autocomplete-container");
            }, 300);
        }
    }
</script>
<!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
<script src="{{ asset('assets/frontend/scripts/moment.min.js') }}"></script>
<script src="{{ asset('assets/frontend/scripts/daterangepicker.js') }}"></script>


<script>
    $(function() {

        var start = moment().subtract(0, 'days');
        var end = moment().add(2, 'days');

        function cb(start, end) {
            $('#booking-date-search').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        cb(start, end);
        $('#booking-date-search').daterangepicker({
            "opens": "right",
            "autoUpdateInput": true,
            "alwaysShowCalendars": true,
            startDate: start,
            endDate: end
        }, cb);

        cb(start, end);

    });

    // Calendar animation and visual settings
    $('#booking-date-search').on('show.daterangepicker', function(ev, picker) {
        $('.daterangepicker').addClass('calendar-visible calendar-animated bordered-style');
        $('.daterangepicker').removeClass('calendar-hidden');
    });
    $('#booking-date-search').on('hide.daterangepicker', function(ev, picker) {
        $('.daterangepicker').removeClass('calendar-visible');
        $('.daterangepicker').addClass('calendar-hidden');
    });

    $(window).on('load', function() {
        $('#booking-date-search').val('');
    });


</script>
@yield('script')

