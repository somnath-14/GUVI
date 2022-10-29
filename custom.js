$("formvalidation ").validate({
    rules:{
        name:{
            minlength:2
        }
    },
    username:{
        required:"Required input",
        minlength:"name atleast 2 characters"

    },
    password:{
        required:"please enter the password",
        minlength:"must be more than 8 character"
    },




    submitHandler: function(formvalidation) {
      formvalidation.submit();
    }
   });