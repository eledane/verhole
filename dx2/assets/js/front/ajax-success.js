var fillForms = function() {
    var totalPrice, loanCount;

    setTimeout(function() {
        totalPrice = parseInt($('.column-left .total-price .price').html().replace(/\s+/g, ''));
        loanCount = parseInt($('#loanSlider').val().replace(/\s+/g, ''));

        $('input[name="loan_count"]').val(loanCount);
        $('input[name="total_price"]').val(totalPrice);
    }, 100);
};

var sendCollectedData = function() {
    $.post('/collector?do=collect', collect());
};

$(function() {
    $('[data-toggle="tooltip"]').tooltip();

    sendCollectedData();

    $.nette.init();

    $.nette.ext('success', {
        success: function(payload){
            initLoaderButton();

            if (typeof payload.collect != "undefined") {
                sendCollectedData();
            }

            if (typeof payload.christmasCouponSend != "undefined") {
                $('#coupon-success-message').fadeIn();
            }

            if (typeof payload.productSearchException != "undefined") {
                window.history.replaceState('kosik', 'Kosik', '#chyba-vyhledavani');
            }

            if (typeof payload.addCart != "undefined" || typeof payload.unsupportedEshop != "undefined") {
                window.history.replaceState('kosik', 'Kosik', '#success');

                $('#crawled-name-input').val($('#crawled-name').html());
                $('#crawled-price-input').val($('#crawled-price').html());

                $('#frm-priceSearchHeader-inputForm-tenor').slider();
            }

            if (typeof payload.exception != "undefined") {
                $zopim.livechat.appendNotes(" " + payload.exception);
                $zopim.livechat.sendVisitorPath();
            }

            if (typeof payload.sendAnalytics != "undefined") {
                dataLayer.push({
                    'event': payload.sendAnalytics.event,
                    'gaEventCategory': payload.sendAnalytics.category,
                    'gaEventAction': payload.sendAnalytics.action,
                    'gaEventLabel': payload.sendAnalytics.label,
                    'gaEventValue': payload.sendAnalytics.value
                });
            }

            $('.btns-for-price-start').on('click', function(){
                $('#crawled-price').prop('readonly', false);
                $('.btns-for-price').show();
                $('.btns-for-price-start').hide();
            })

            $('#crawled-price-ok').on("click", function(e){
                e.preventDefault()
                $('.btns-for-price').hide();
                $('.btns-for-price-start').show();
                $('#crawled-price').prop('readonly', true); 

                if(parseFloat($("#crawled-price").val()) < parseFloat($('#crawled-price-reset').data('val'))){
                   $('#crawled-price').val($('#crawled-price-reset').data('val'));  
                }

                if(parseFloat($("#crawled-price").val()) > 500){
                   $('#crawled-price').val(500);  
                }

                $('#crawled-price-input').val($('#crawled-price').val());
                countSearch();
            });

            $('#crawled-price-reset').on("click", function(e){
                e.preventDefault();
                $('#crawled-price').val($(this).data('val')); 
                $('.btns-for-price').hide();
                $('.btns-for-price-start').show();
                $('#crawled-price').prop('readonly', true);
            });

            $('.checkbox-enable-btn').change(function() {
              if ($(this).is(':checked')) {
                $($(this).data('btn')).prop('disabled', false);
              } else {
                $($(this).data('btn')).prop('disabled', true);
              }
            });

            $( ".custom-price" ).on('input', function() {
                $('#crawled-price').val($(this).val());
                countSearch();
            });

            countSearch();
            $('#frm-priceSearchHeader-inputForm-tenor').on("slide", countSearch);
            $('#frm-priceSearchHeader-inputForm-tenor').on("change", countSearch);


            if (typeof payload.stopLadda != "undefined") {
                window.ladda.stop();
                $("#snippet--cartItemCount .dropdown").addClass("hover");
            }


            $('.search-result .close-popup').on('click' , function(e) {
                e.preventDefault();
                $('.search-result').fadeOut();
            });

            $('#crawled-price-input').val($('#crawled-price').val());
        }
    });
});
