function login(){
     if($('#usuario').val() == "") {
        Swal.fire(
            'ATENCIÓN!',
            'Favor de ingresar su usuario!',
            'error'
          )
     } else if ($('#password').val() == ""){
        Swal.fire(
            'ATENCIÓN!',
            'Favor de ingresar su contraseña!',
            'error'
          )
     }else {
        Swal.fire(
            'EXELENTE!',
            'Acceso correcto!',
            'success'
          )
     }
}