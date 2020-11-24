$(document).ready(function (){ 

        function obtenercategoriasportipo($tipo_id)
        {    
            var $ruta = '/colab/categorias/portipo/' + $tipo_id ;
            $datosRetornar = $.ajax({ 
                url:   $ruta,
                type:  'GET',
                async: false, 
                dataType: 'json',
                beforeSend: function () {
                        console.log("Procesando, espere por favor...");
                },
                success:  function (response) {
                    return  response ;
                }
                }).responseJSON; 
                
                return $datosRetornar;
        }; 

        $('#tipo_id').on('change', function() {

        var resultado = obtenercategoriasportipo(this.value);

        $('#categoria_id').empty();    
        $("#categoria_id").append('<option value="" selected>Selecciona una categoria</option>');
        
        $.each(resultado,function(key, registro) {
                $("#categoria_id").append('<option value='+registro.id+'>'+registro.nombre+'</option>');
            });    

        });


});