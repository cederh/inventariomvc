(function(){

   if (document.getElementById('form-usuario')) {
     //Acceso al formulario
      var formulario= document.getElementById('form-usuario');

      var nombre = formulario.nombre;
      var apellido = formulario.apellido;
      var genero = formulario.genero;
      var dui = formulario.dui;
      var user = formulario.user;
      var user_type = formulario.user_type;
      // var pass = formulario.pass;
      // var pass2 = formulario.pass2;

      //Accedemos al contenedor de errores
      var errores = document.getElementById('errores');

      function validarNombre(e){
       if (nombre.value == '' || nombre.value == null) {
         //console.log('Ingrese Nombre');
         errores.style.display = 'block';
         errores.innerHTML += '<p>Por favor Ingrese el Nombre</p>'; //Ingresar codigo html al elemento seleccionado
         e.preventDefault();
       }else if (nombre.value.length > 50) {
         errores.style.display = 'block';
         errores.innerHTML += '<p>El nombre debe tener menos de 50 Caracteres</p>';
         e.preventDefault();
       }
      }

      function validarApellido(e){
       if (apellido.value == '' || apellido.value == null) {
         errores.style.display = 'block';
         errores.innerHTML += '<p>Por favor Ingrese el Apellido</p>';
         e.preventDefault();
       }else if (apellido.value.length > 50) {
         errores.style.display = 'block';
         errores.innerHTML += '<p>El Apellido debe tener menos de 50 Caracteres</p>';
         e.preventDefault();
       }
      }

      function validarGenero(e){
       if (genero.value == '' || genero.value == null) {
         errores.style.display = 'block';
         errores.innerHTML += '<p>Por favor seleccione una Genero</p>';
         e.preventDefault();
       }
      }

      function validarDUI(e){
       if (dui.value.length != 10) {
         errores.style.display = 'block';
         errores.innerHTML += '<p>Por favor Ingrese un DUI valido</p>';
         e.preventDefault();
       }
      }

      function validarUsuario(e){
       if (user.value == '' || user.value == null) {
         errores.style.display = 'block';
         errores.innerHTML += '<p>Por favor Ingrese el Nombre de Usuario</p>';
         e.preventDefault();
       }else if (user.value.length > 50) {
         errores.style.display = 'block';
         errores.innerHTML += '<p>El Nombre de Usuario debe tener menos de 50 Caracteres</p>';
         e.preventDefault();
       }
      }

      function validarUserType(e){
       if (user_type.value == '' || user_type.value == null) {
         errores.style.display = 'block';
         errores.innerHTML += '<p>Por favor seleccione una Tipo de Usuario</p>';
         e.preventDefault();
       }
      }

      // function validarPassword(e){
      //  if (pass.value == '' || pass.value == null) {
      //    //console.log('Ingrese Nombre');
      //    errores.style.display = 'block';
      //    errores.innerHTML += '<p>Por favor Ingrese su Contraseña</p>';
      //    e.preventDefault();
      //  }else if (pass.value.length > 50) {
      //    errores.style.display = 'block';
      //    errores.innerHTML += '<p>La Contraseña debe tener menos de 50 Caracteres</p>';
      //    e.preventDefault();
      //  }
      // }
      //
      // function validarPassword2(e) {
      //  if (pass.value != pass2.value) {
      //    errores.style.display = 'block';
      //    errores.innerHTML += '<p>Las Contraseñas no coinciden.</p>';
      //    e.preventDefault();
      //  }
      // }

      function validarFormulario(e){
       //Limpiar contenedor
       errores.innerHTML = '';
       validarNombre(e);
       validarApellido(e);
       validarGenero(e);
       validarDUI(e);
       validarUsuario(e);
       validarUserType(e);
       // validarPassword(e);
       // validarPassword2(e);
      }


      formulario.addEventListener('submit', validarFormulario);

      //Mascara de Texto para usuario
      $(document).ready(function(){
         $('#dui').mask('00000000-0');
      });

   }
   //##############################################
   //VALIDACIONES PARA LOGIN
   //##############################################

  //  if (document.getElementById('form-login')) {
  //   //Acceso al formulario
  //   var formulario= document.getElementById('form-login');
  //   var user = formulario.user;
  //   var password = formulario.password;
  //
  //
  //   //Accedemos al contenedor de errores
  //   var errores = document.getElementById('errores');
  //
  //   function validarUser(e){
  //       if (user.value == '' || user.value == null) {
  //         //console.log('Ingrese user');
  //         errores.style.display = 'block';
  //         errores.innerHTML += '<p>Por favor Ingrese el usuario</p>';
  //         e.preventDefault();
  //       }else if (user.value.length > 50) {
  //         errores.style.display = 'block';
  //         errores.innerHTML += '<p>El usuario debe tener menos de 50 Caracteres</p>';
  //         e.preventDefault();
  //       }
  //     }
  //
  //    function validarPassword(e){
  //      if (password.value == '' || password.value == null) {
  //        //console.log('Ingrese Nombre');
  //        errores.style.display = 'block';
  //        errores.innerHTML += '<p>Por favor Ingrese su Contraseña</p>';
  //        e.preventDefault();
  //      }else if (password.value.length > 50) {
  //        errores.style.display = 'block';
  //        errores.innerHTML += '<p>La Contraseña debe tener menos de 50 Caracteres</p>';
  //        e.preventDefault();
  //      }
  //    }
  //
  //
  //   function validarFormulario(e){
  //     //Limpiar contenedor
  //     errores.innerHTML = '';
  //     validarUser(e);
  //     validarPassword(e);
  //   }
  //
  //
  //   formulario.addEventListener('submit', validarFormulario);
  //
  // }

}());
