jQuery(document).ready( function($) {
    $('.jScrollbar1, .jScrollbar2, .jScrollbar3, .jScrollbar4, .jScrollbar5').jScrollbar();

    $('#form-mailing').validate({
           rules: {
           'mailings[nome]': 'required',
           'mailings[email]': { required: true, email: true },
           'mailings[validacao]': 'required',
           'mailings[tel1]': 'required',
           'mailings[cidade]': 'required'
           },
       messages: {
           'mailings[nome]': 'O nome do responsável é obrigatório',
           'mailings[email]': { required: 'Deve digitar um email', email: 'O email deve ser válido. Por exemplo: contato@dominio.com' },
           'mailings[validacao]': {required: 'Deve aceitar os termos de cadastro'},
           'mailings[tel1]': {required: 'Você deve digitar o telefone'},
           'mailings[cidade]': {required: 'O campo cidade é obrigatório'}
       },
       debug: false,
       errorLabelContainer: $(".RegisterErrors"),
       submitHandler: function(form){
           $(form).submit();
       }
    });

    $('#form-credenciamento').validate({
           rules: {
           'Credenciamento[nome]': 'required',
           'Credenciamento[email]': { required: true, email: true },
           'Credenciamento[validacao]': 'required',
           'Credenciamento[cidade]': 'required'
           },
       messages: {
           'Credenciamento[nome]': 'O nome do responsável é obrigatório',
           'Credenciamento[email]': { required: 'Deve digitar um email', email: 'O email deve ser válido. Por exemplo: contato@dominio.com' },
           'Credenciamento[validacao]': {required: 'Deve aceitar os termos de cadastro'},
           'Credenciamento[cidade]': {required: 'O campo cidade é obrigatório'}
       },
       debug: false,
       errorLabelContainer: $(".RegisterErrors"),
       submitHandler: function(form){
           $(form).submit();
       }
    });


});