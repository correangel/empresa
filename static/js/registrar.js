function registrar(){
    first_name = $("#first_name").val();
    last_name = $("#last_name").val(); 
    dni = $("#dni").val();
    phone = $("#phone").val();
    address = $("#address").val();
    city = $("#city").val();
    department = $("#department").val();
    country = $("#country").val();
    email = $("#email").val();
    password = $("#password").val();
    mobile = $("#mobile").val();
    
    date = $("#date").val();
    month = $("#month").val();
    year = $("#year").val();
    references = $("#references").val();
    
    
 
    if(first_name !="" && last_name!="" && dni !="" && phone !="" && address !="" && city !="" && department !="" && country !="" && email !="" && password !=""){
        
          bootbox.dialog("¿Desea enviar el Registro?", [        
        { "label" : "Cancelar"},
        {
            "label" : "Enviar",
            "class" : "btn-success",
            "callback": function() {
               $.ajax({
                   type: "post",
                   url: site+"registro/crear_cliente",
                   dataType: "json",
                   data: {first_name : first_name,
                          last_name:last_name,
                          dni:dni,
                          phone:phone,
                          address:address,
                          city:city,
                          department:department,
                          country:country,
                          email:email,
                          password:password,
                          mobile:mobile,
                          date:date,
                          month:month,
                          year:year,
                          references:references
                      },
                   success:function(data){
                        if (data.message == "no_item"){                         
                                bootbox.dialog(data.print, [        
                                { "label" : "Cerrar"}
                                ]);
                            
                        }else if(data.message == "no_stock"){
                                bootbox.dialog(data.print, [        
                                { "label" : "Cerrar"}
                                ]);
                        }
                       else{
                            bootbox.dialog(data.print, [        
                                { "label" : "Cerrar"}
                                ]); 
                        }
                  }         
           });
          }
        }
    ]);
        
    }else{
        bootbox.dialog("Debe llenar todos los datos", [        
        { "label" : "Cancelar"}
        ]);
    }
}