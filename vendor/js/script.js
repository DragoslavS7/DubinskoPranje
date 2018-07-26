var date = new Date(), mins = date.getMinutes(), body = $('#body');

function adminLogin () {

    $('#btn_login').on('click', function (e) {
        e.preventDefault();
           var name = $('#log_name').val(),
               pass = $('#log_pass').val(),
               date = new Date(),
               mins = date.getMinutes();

        $.ajax({
            url:'request.php',
            method:'POST',
            data:{
                'name':name,
                'pass':pass,
                'p':'call_login'
            },
            success:function (response) {
                 // $.test = JSON.parse(response);
                 if (response.success == 'OK') {
                     $("#sendmessage").addClass("show");
                     $("#errormessage").removeClass("show");
                     $('.contactForm').find("input").val("");

                     function loader (mins) {
                         if (mins % 4 === 0) {
                             $('#loader div img').removeClass('load_hidden');
                         }else{
                             $('#loader div img').removeClass('load_hidden');
                             window.location.href = 'parts/admin/admin_home.php';
                         }
                     }

                     setInterval(function () {
                         mins++;
                         loader(mins);
                     }, 700);

                 } else {
                     $("#sendmessage").removeClass("show");
                     $("#errormessage").addClass("show");
                     $('#loader div img').addClass('load_hidden');
                     $('#errormessage').html(response.error);
                 }
            },
            error:function (error) {
                console.log(error);
            }
        });
        return false;
    });

}

function adminLogout () {

    $('#delete_session').on('click',function(e) {
        e.preventDefault();

        $.ajax({
            url: '../../request.php?p=logout',
            method: 'GET',
            success: function(data){
                if (data.success == 'logout') {
                    window.location.href = '../../loginForm.php';
                }

            },
            error: function (error) {
                console.log(error);
            }
        });
        return false;
    });

}

function create_admin_fields () {

    $('#btn_create').on('click', function (e) {
        e.preventDefault();
         var inp_about      = $('#inp_about').val(),
             inp_about_1    = $('#inp_about_1').val(),
             inp_about_2     = $('#inp_about_2').val(),
             inp_about_3     = $('#inp_about_3').val(),
             inp_service    = $('#inp_service').val(),
             inp_service_1   = $('#inp_service_1').val(),
             inp_service_2   = $('#inp_service_2').val(),
             inp_service_3   = $('#inp_service_3').val(),
             inp_service_4   = $('#inp_service_4').val(),
             inp_port       = $('#inp_port').val(),
             inp_contact       = $('#inp_contact').val();
        $.ajax({
            url:'../../request.php',
            method:'POST',
            data:{
                'inp_about':inp_about,
                'inp_about_1':inp_about_1,
                'inp_about_2':inp_about_2,
                'inp_about_3':inp_about_3,
                'inp_service':inp_service,
                'inp_service_1':inp_service_1,
                'inp_service_2':inp_service_2,
                'inp_service_3':inp_service_3,
                'inp_service_4':inp_service_4,
                'inp_port':inp_port,
                'inp_contact':inp_contact,
                'p':'insert_fields'
            },
            success:function (response) {
                // $.test = JSON.parse(response);
                console.log(response);
                if (response.success == 'OK') {
                    $("#sendmessage").addClass("show");
                    $("#errormessage").removeClass("show");
                    $('.contactForm').find("input").val("");
                    window.location.href = 'admin_home.php';
                } else {
                    $("#sendmessage").removeClass("show");
                    $("#errormessage").addClass("show");
                    $('#loader div img').addClass('load_hidden');
                    $('#errormessage').html(response.error);
                }
            },
            error:function (error) {
                console.log(error);
            }
        });
        return false;
    });

}

function update_admin() {
    $('#btn_change').on('click', function(e){
        e.preventDefault();
        var inp_about      = $('#inp_about').val(),
            inp_about_1    = $('#inp_about_1').val(),
            inp_about_2     = $('#inp_about_2').val(),
            inp_about_3     = $('#inp_about_3').val(),
            inp_service    = $('#inp_service').val(),
            inp_service_1   = $('#inp_service_1').val(),
            inp_service_2   = $('#inp_service_2').val(),
            inp_service_3   = $('#inp_service_3').val(),
            inp_service_4   = $('#inp_service_4').val(),
            inp_port       = $('#inp_port').val(),
            inp_contact       = $('#inp_contact').val(),
            cid = $('#cid').val();
        $.ajax({
            url:'../../request.php',
            method:'POST',
            data:{
                'inp_about':inp_about,
                'inp_about_1':inp_about_1,
                'inp_about_2':inp_about_2,
                'inp_about_3':inp_about_3,
                'inp_service':inp_service,
                'inp_service_1':inp_service_1,
                'inp_service_2':inp_service_2,
                'inp_service_3':inp_service_3,
                'inp_service_4':inp_service_4,
                'inp_port':inp_port,
                'inp_contact':inp_contact,
                'cid':cid,
                'p':'update_ad'
            },
            success:function (response) {
                console.log(response);
                window.location.href = 'admin_home.php';
            }
        });
    });
}

function btn_delete() {
    $('.btn-delete').on('click',function (e) {
        e.preventDefault();
        var  id = $('#cid').val();
        $.ajax({
            url:'../../request.php',
            method:'POST',
            data:{
                'cid':id,
                'p':'del_row'
            },
            success: function (response) {
                console.log(response);
                location.reload();
            }
        });
    });

}


function added_price_list() {
    $('#btn_price').on('click', function (e) {
        e.preventDefault();
        var price_title = $('#price_title').val(),
            price_list = $('#price_list').val();
        $.ajax({
            url:'../../request.php',
            method:'POST',
            data:{
                'price_title':price_title,
                'price_list':price_list,
                'p':'create_price'
            },
            success:function (response) {
                console.log(response);
                window.location.href = 'admin_price.php'
            },
            error:function (error) {
                console.log(error);
            }
        });
    })
}

function delete_price_list() {
    $('.delete_price_list').on('click', function (e) {
        e.preventDefault();
         var pid = $('#pid').val();
        $.ajax({
            url: '../../request.php',
            method: 'POST',
            data:{
                'pid':pid,
                'p':'delete_price'
            },
            success:function (response) {
                console.log(response);
                location.reload();
            },
            error:function (error) {
                console.log(error);
            }
        });
    })
}

function update_price_list() {
    $('#btn_update_price').on('click', function(e){
        e.preventDefault();
        var price_title = $('#price_title').val(),
            price_list = $('#price_list').val(),
            pid = $('#pid').val();
        $.ajax({
            url:'../../request.php',
            method:'POST',
            data:{
                'price_title':price_title,
                'price_list':price_list,
                'pid':pid,
                'p':'update_price'
            },
            success:function (response) {
                console.log(response);
                window.location.href = 'admin_price.php';
            }
        });
    });
}

function imageHandlers() {

    var quotations = [];

    $("input[name='btn1'],input[name='btn2']").click(function () {
        var data = {};
        var btn = $(this).data('value');

        data.Btn = btn;

        quotations.push(data);
    });


    $('#btn_galery').on('click',function(e){
        e.preventDefault();
        $('#file_slider, #file_galery').trigger('click');

    });


    $('#file_slider, #file_galery').change(function (e) {

        if (!e.target.files || !e.target.files[0]) return;

        var form = new FormData();

        form.append('file', e.target.files[0]);
        form.append('btn',quotations[0].Btn);

            $.ajax({
                type: "POST",
                url: '../../request.php?p=uploaded_images',
                data: form,
                processData: false,
                contentType: false,
                success: function (response) {
                    location.reload();
                },
                error: function (error) {
                    console.log(error);
                }
            });

    });
}

function delete_image() {
    $('.del').on('click', function (e) {
        e.preventDefault();
        var fid = $('#fid').val();
        $.ajax({
            url: '../../request.php',
            method: 'POST',
            data:{
                'fid':fid,
                'p':'delete_image'
            },
            success:function (response) {
                console.log(response);
                location.reload();
            },
            error:function (error) {
                console.log(error);
            }
        });
    });
}


$(document).ready(function(){
    adminLogin();
    adminLogout();
    create_admin_fields();
    btn_delete();
    update_admin();
    added_price_list();
    delete_price_list();
    update_price_list();
    imageHandlers();
    delete_image();

    function background() {

       if( mins % 4 === 0 ) {
           body.css({'background':'url("../../img/bac1.jpg") no-repeat center','width':'100%','background-attachment':'fixed'});
       } else if( mins % 3 === 0 ) {
           body.css({'background':'url("../../img/bac2.jpg") no-repeat center','width':'100%','background-attachment':'fixed'});
       } else if( mins % 2 === 0 ) {
           body.css({'background':'url("../../img/bac3.jpg") no-repeat center','width':'100%','background-attachment':'fixed'});
       } else {
           body.css({'background':'url("../../img/bac1.jpg") no-repeat center','width':'100%','background-attachment':'fixed'});
       }
    }

    background(mins);

    setInterval(function () {
        mins++;
        background(mins);
    },5000)
});