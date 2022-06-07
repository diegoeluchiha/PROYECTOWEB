// $(document).ready( function () {
//     $('#tabla1').DataTable();
// } );

// $(document).ready(function() {
//     $('#tableid').DataTable();
//  });

//Código para Datables

//$('#example').DataTable(); //Para inicializar datatables de la manera más simple

// $(document).ready(function() {<font></font>
//     $('#tableid').DataTable( {<font></font>
//         language: {<font></font>
//             url: 'es-CL.json'<font></font>
//         }<font></font>
//     } );<font></font>
// } );<font></font>
$(document).ready(function() {
    $('#tableid').DataTable( {
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "Nothing found - sorry",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
			     },
			     "sProcessing":"Procesando...",
            
        }
    } );
} );