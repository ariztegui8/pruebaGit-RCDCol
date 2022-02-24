  $(document).ready(function(){
    $("#submit-rcd-contacto").click(function(e){
      var formNombre = $("#formNombre").val();
      var formCelular = $("#formCelular").val();
      var formEmail = $("#formEmail").val();
      var formMsg = $("#formMsg").val();
      var formMsg = $("#hubspot_owner_id").val();
      e.preventDefault();
      var habilitado = true;

      console.log(formNombre);
      console.log(formCelular);
      console.log(formEmail);
      console.log(formMsg);


      var testNums = /^\d+$/; //regex numeros
      // console.log(testNums.test(formCelular));
      var toastContainer = $("#alertaRCDForm");
      if(formNombre === ''){
        habilitado = false;
        toastContainer.append('<div class="toast bg-danger errorNombre" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-body">Debes escribir tu nombre completo.</div></div>');
        let toastForm = $('#alertaRCDForm > .errorNombre');
        let toast = new bootstrap.Toast(toastForm);
        toast.show();
        return false;
      }
      if (formCelular === '') {
        habilitado = false;
        toastContainer.append('<div class="toast bg-danger errorTel1" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-body">Debes escribir tu teléfono.</div></div>');
        let toastForm = $('#alertaRCDForm > .errorTel1');
        let toast = new bootstrap.Toast(toastForm);
        toast.show();
        return false;
      }
      if (testNums.test(formCelular) === false) {
        habilitado = false;
        toastContainer.append('<div class="toast bg-danger errorTel2" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-body">El campo de teléfono solo debe contener caracteres numéricos.</div></div>');
        let toastForm = $('#alertaRCDForm > .errorTel2');
        let toast = new bootstrap.Toast(toastForm);
        toast.show();
        return false;
      }
      if (formCelular.length < 8) {
        habilitado = false;
        toastContainer.append('<div class="toast bg-danger errorTel3" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-body">El teléfono ingresado debe contener al menos 8 números.</div></div>');
        let toastForm = $('#alertaRCDForm > .errorTel3');
        let toast = new bootstrap.Toast(toastForm);
        toast.show();
        return false;
      }
      if(formEmail === ''){
        habilitado = false;
        toastContainer.append('<div class="toast bg-danger errorEmail1" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-body">Debes escribir tu correo electrónico.</div></div>');
        let toastForm = $('#alertaRCDForm > .errorEmail1');
        let toast = new bootstrap.Toast(toastForm);
        toast.show();
        return false;
      }
      if(formEmail.indexOf('@', 0) == -1 || formEmail.indexOf('.', 0) == -1) {
        habilitado = false;
        toastContainer.append('<div class="toast bg-danger errorEmail2" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-body">El correo electrónico introducido no es correcto.</div></div>');
        let toastForm = $('#alertaRCDForm > .errorEmail2');
        let toast = new bootstrap.Toast(toastForm);
        toast.show();
        return false;
      }
      if(formMsg === ''){
        habilitado = false;
        toastContainer.append('<div class="toast bg-danger errorMsg" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-body">Debes escribir un mensaje.</div></div>');
        let toastForm = $('#alertaRCDForm > .errorMsg');
        let toast = new bootstrap.Toast(toastForm);
        toast.show();
        return false;
      }
      if(habilitado){
        $('#submit-rcd-contacto').append('<span class="spinner-border text-verdelimon"></span>');
        $('#submit-rcd-contacto').attr('disabled', true);
        //$("#submit-rcd-contacto").hide();

        // toastContainer.append('<div class="toast bg-success is-validated" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-body">Tus datos han sido guardados exitósamente.</div></div>');
        // let toastForm = $('#alertaRCDForm > .is-validated');
        // let toast = new bootstrap.Toast(toastForm);
        // toast.show();
        sendform();
      }
    });
  });



  function sendform(){

    console.log('function sendform');

    var formNombre = $("#formNombre").val();
    var formCelular = $("#formCelular").val();
    var formEmail = $("#formEmail").val();
    var formMsg = $("#formMsg").val();

  
    $.ajax({
      data:  {nombre:formNombre, telefono:formCelular, email: formEmail, mensaje:formMsg, action: 'sendform'}, //datos que se envian a traves de ajax
      url:   '/wp-content/themes/rcd-colombia/inc/send-form.php', //archivo que recibe la peticion
      type:  'post', //método de envio
      success:  function (response) {

        console.log(response);
        if(response == 0){
        //   window.location = "/recibido/";
          console.log("contacto enviado");
        }else if(response == 1){
          $("#alert-form").html("Ya te encuentras en nuestra base de datos.");
          $("#loading-spinnet").hide();
          $("#form-submit").show();
        //   window.location = "/recibido/";
        }else{
          console.log(response);
          $("#loading-spinnet").hide();
          $("#form-submit").show();
        }
      }
    });
  }