function popup(status , title , msg){
    new swal({
       title: title,
       html: msg,
       icon: status,
       button: "Okay",
       closeOnClickOutside: false, 
     })
  }
  function popup_reload(status , title , msg){
      new  swal({
     title: title,
     html: msg, 
     icon: status,
     button: "Okay",
     })
     .then(function(){ 
        location.reload();
        }
     );
  }