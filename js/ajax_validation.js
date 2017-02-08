$(document).ready(function() {
    $('#ajax_form').bootstrapValidator({
        container: '#messages',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'Заполнте поле email '
                    },
                    emailAddress: {
                        message: 'Не корректно заполнен "email"'
                    },
                    stringLength: {
                        max: 70,
                        message: 'Не более 70 символов "email" '
                    }
                }
            },
            name: {
                validators: {
                    notEmpty: {
                        message: 'Заполнте поле ФИО'
                    },
                    stringLength: {
                        max: 50,
                        message: 'Не более 50 символов поле ФИО'
                    }
                }
            },
            tel: {
                validators: {
                    notEmpty: {
                        message: 'Заполнте поле Телефон'
                    },
                    stringLength: {
                        min: 7,
                        max: 20,
                        message: 'Не более 20 символов поле Телефон'
                    },
                    value:{value: ""}
                }
            },
            comment: {
                validators: {
                    notEmpty: {
                        message: 'Заполнте поле Ваши комментарии'
                    },
                    stringLength: {
                        max: 500,
                        message: 'Не более 500 символов поле Ваши комментарии'
                    }
                }
            }
        }
    }).on('success.form.bv', function(e) {
        e.preventDefault();
        var formData= new FormData(document.forms.ajax_form);


        $.ajax({
            type: "POST",
            url: '../ajax',
            data: formData,
            contentType: false,
            processData: false,
            success: function (html) {
                $("#result").after(html);
                $('.sendMsg').html('<span style="color: green">"Сообщение лежит на локальном сервере! В папке userdata/tmp/email!"</span>');
                $('#ajax_form').bootstrapValidator('resetForm', true);
                //$('#ajax_form')[0].reset();


            }
        });

    })
});