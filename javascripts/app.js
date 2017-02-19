
$(document).ready(function(){

    var num;//Variable que guarda el id del usuario

    //Si hacemos clic en la opcion de editar
    $('.edit-option').click(function () {
        //Guardamos los valores de la fila seleccionada
        num = $(this).closest("tr").find('td:eq(0)').text();
        var name = $(this).closest("tr").find('td:eq(1)').text();
        var age = $(this).closest("tr").find('td:eq(2)').text();
        var email = $(this).closest("tr").find('td:eq(3)').text();
        var cell = $(this).closest("tr").find('td:eq(4)').text();

        //Insertamos esos valores guardados a los campos de texto del modal
        $('#contact-modal').text(name);
        $('.name').val(name);
        $('.age').val(age);
        $('.email').val(email);
        $('.cell').val(cell);
    }); //end click

    //Si damos al boton para actulizar la informacion de un usuario
    $('.actualizar').click(function(){
        var name  =   $('.name').val();
        var age   =   $('.age').val();
        var email =   $('.email').val();
        var cell  =   $('.cell').val();

        console.log(num);
        //Mandamos la peticion
        var request = $.ajax({
            url  : 'models/UpdateContacts.php',
            type : 'post',
            data : {
                num : num,
                name : name,
                age  : age,
                email: email,
                cell : cell
            }
        });//end ajax

        // en caso de una peticion exitosa
        request.done(function(res,status,jqxhr){
            window.location.href = "index.php";
        });

    });//end click


    //Si damos al boton de borrar contacto
    $('.delete-option').click(function(){
        //obtenemos el id del contacto de la fila seleccionada
        num = $(this).closest("tr").find('td:eq(0)').text();

        var request = $.ajax({
            url  : 'models/DeleteContacts.php',
            type : 'post',
            data : {
                num : num
            }
        });//end ajax

        // en caso de una peticion exitosa
        request.done(function(res,status,jqxhr){
            console.log('Se ha eliminado contacto');
            window.location.href = "index.php";
        });

    });//end click

}); //end ready