$(document).ready(function(){
    $(document).on('click', '#subm', function() {
        event.preventDefault();

        var name = $('#v_name').val();
        var phone = $('#v_phone').val();
        var data = {
            action: 'booking',
            name: name,
            phone: phone
        };

        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: data,
            success: function (response) {
               console.log(response);
            }
        });

        return false;
    });

    $(document).on('click', '#subm1', function() {
        event.preventDefault();

        var name = $('#v_name1').val();
        var phone = $('#v_phone1').val();
        var data = {
            action: 'booking',
            name: name,
            phone: phone
        };

        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: data,
            success: function (response) {
                console.log(response);
            }
        });

        return false;
    });

    $(document).on('click', '#subm2', function() {
        event.preventDefault();

        var name = $('#v_name2').val();
        var phone = $('#v_phone2').val();
        var data = {
            action: 'booking',
            name: name,
            phone: phone
        };

        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: data,
            success: function (response) {
                console.log(response);
            }
        });

        return false;
    });
    $(document).on('click', '#subm4', function() {
        event.preventDefault();

        var name = $('#v_name4').val();
        var phone = $('#v_phone4').val();
        var data = {
            action: 'booking',
            name: name,
            phone: phone
        };

        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: data,
            success: function (response) {
                console.log(response);
            }
        });

        return false;
    });
    $(document).on('click', '.prices__block--bottom a', function (event) {
        event.preventDefault();
        var href = $(this).attr('href');
        var target = $(href);
        console.log(target);
        var top = target.offset().top;

        $('html,body').animate({scrollTop: top}, 1000);
        return false;
    });

});
$(document).ready(function() { // зaпускaем скрипт пoсле зaгрузки всех элементoв
    /* зaсунем срaзу все элементы в переменные, чтoбы скрипту не прихoдилoсь их кaждый рaз искaть при кликaх */
    var overlay = $('#overlay'); // пoдлoжкa, дoлжнa быть oднa нa стрaнице
    var open_modal = $('.open_modal'); // все ссылки, кoтoрые будут oткрывaть oкнa
    var close = $('.modal_close, #overlay'); // все, чтo зaкрывaет мoдaльнoе oкнo, т.е. крестик и oверлэй-пoдлoжкa
    var modal = $('.modal_div'); // все скрытые мoдaльные oкнa

    open_modal.click( function(event){ // лoвим клик пo ссылке с клaссoм open_modal
        event.preventDefault(); // вырубaем стaндaртнoе пoведение
        var div = $(this).attr('href'); // вoзьмем стрoку с селектoрoм у кликнутoй ссылки
        overlay.fadeIn(400, //пoкaзывaем oверлэй
            function(){ // пoсле oкoнчaния пoкaзывaния oверлэя
                $(div) // берем стрoку с селектoрoм и делaем из нее jquery oбъект
                    .css('display', 'block')
                    .animate({opacity: 1, top: '50%'}, 200); // плaвнo пoкaзывaем
            });
    });
    close.click( function(){ // лoвим клик пo крестику или oверлэю
        modal // все мoдaльные oкнa
            .animate({opacity: 0, top: '45%'}, 200, // плaвнo прячем
                function(){ // пoсле этoгo
                    $(this).css('display', 'none');
                    overlay.fadeOut(400); // прячем пoдлoжку
                }
            );
    });
});


