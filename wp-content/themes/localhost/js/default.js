$(document).ready(function(){
	form_contato();
	slick_banner();
});

function form_contato(){
    $('#contactForm').validate({
        rules: {
            'name': { required: true},
            'budget': { required: true},
            'email': { required: true, email: true},
            'msg_subject': { required: true},
            'message': { required: true}
        },
        messages: {
            'name': { required: 'Digite seu nome' },
            'budget': { required: 'Digite seu telefone' },
            'email': { required: 'Digite seu e-mail', email: 'E-mail inv&aacute;lido' },
            'msg_subject': { required: 'Digite o assunto' },
            'message': { required: 'Digite sua mensagem' }
        },
        submitHandler: function (form) {
            var options = {
                beforeSubmit: showRequest,
                success: showResponse,
                resetForm: true
            };
            $(form).ajaxSubmit(options);
            return false;
        },
        errorLabelContainer: $('.msgs-contact')
    });
    function showRequest(formData, jqForm, options) {
        $('.msgs-contact').html('<label class="sucess">Enviando...</label>');
        $('.msgs-contact').show();
    }
    function showResponse(data, jqForm) {
        switch ($.trim(data)) {
            case 'true':
                $('.lds-css').css('display', 'none');
                $('.msgs-contact').html('<label class="sucess"">Mensagem enviada com sucesso</label>');
                $('.msgs-contact').show();
                break;
            case 'false':
                $('.lds-css').css('display', 'none');
                $('.msgs-contact').html('<label class="error">Erro inesperado. Tente novamente mais tarde.</label>');
                $('.msgs-contact').show();
                break;
        }
        setTimeout(function () {
            $('.msgs-contact').html('');
        }, 5000);
    }
}

function slick_banner() {
    $(".list-banners-home").slick({
        fade: true,
        dots: false,
        arrows: false,
        speed: 900,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToScroll: 1,
        slidesToShow: 1,
        adaptiveHeight: true
    });
}