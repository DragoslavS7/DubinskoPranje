function adminLogin () {

    $('#btn_login').on('click', function (e) {
        e.preventDefault();
        // var f = $(this).find('.form-group'),
        //     ferror = false;
           var name = $('#log_name').val(),
               pass = $('#log_pass').val();

        // f.children('input').each(function() { // run all inputs
        //
        //     var i = $(this); // current input
        //     var rule = i.data('rule');
        //
        //     if (rule !== undefined) {
        //         var ierror = false; // error flag for current input
        //         var pos = rule.indexOf(':', 0);
        //         if (pos >= 0) {
        //             var exp = rule.substr(pos + 1, rule.length);
        //             rule = rule.substr(0, pos);
        //         } else {
        //             rule = rule.substr(pos + 1, rule.length);
        //         }
        //
        //         switch (rule) {
        //             case 'required':
        //                 if (i.val() === '') {
        //                     ferror = ierror = true;
        //                 }
        //                 break;
        //
        //             case 'minlen':
        //                 if (i.val().length < parseInt(exp)) {
        //                     ferror = ierror = true;
        //                 }
        //                 break;
        //
        //             case 'checked':
        //                 if (! i.is(':checked')) {
        //                     ferror = ierror = true;
        //                 }
        //                 break;
        //         }
        //         i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
        //     }
        // });
        // if (ferror) return false;
        // else var str = $(this).serialize();
        $.ajax({
            url:'request.php',
            method:'POST',
            data:{
                'name':name,
                'pass':pass,
                'p':'call_login'
            },
            success:function (response) {
                console.log(response);
                 if (response.success == 'OK') {
                     $("#sendmessage").addClass("show");
                     $("#errormessage").removeClass("show");
                     $('.contactForm').find("input").val("");
                 } else {
                     $("#sendmessage").removeClass("show");
                     $("#errormessage").addClass("show");
                     $('#errormessage').html(response);
                 }
            },
            error:function (error) {
                console.log(error);
            }
        });
        //return false;
    });

}

$(document).ready(function(){
    adminLogin();
});