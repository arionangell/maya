  <div class="post">
<table id="usuariost" class="display">
<thead>
<tr>
<th>factura</th>
<td>cliente</td>
<td>fecha/hora</td>

</tr>

</thead>
<tbody>
<tr>
  <td>0001</td>
  <td>carlos viguez</td>
  <td>18/10/2019</td>
</tr>

</tbody>

<tfoot>
  <th>factura</th>
<td>cliente</td>
<td>fecha/hora</td>
</tfoot>

</table>





                   </div>

</div>

<script>
            $(document).ready( function () {
    $('#usuariost').DataTable({
      "language": {
        "decimal":        ".",
        "emptyTable":     "No hay datos para mostrar",
        "info":           "del _START_ al _END_ (_TOTAL_ total)",
        "infoEmpty":      "del 0 al 0 (0 total)",
        "infoFiltered":   "(filtrado de todas las _MAX_ entradas)",
        "infoPostFix":    "",
        "thousands":      "'",
        "lengthMenu":     "Mostrar _MENU_ entradas",
        "loadingRecords": "Cargando...",
        "processing":     "Procesando...",
        "search":         "Buscar:",
        "zeroRecords":    "No hay resultados",
        "paginate": {
          "first":      "Primero",
          "last":       "Último",
          "next":       "Siguiente",
          "previous":   "Anterior"
        },
        "aria": {
          "sortAscending":  ": ordenar de manera Ascendente",
          "sortDescending": ": ordenar de manera Descendente ",
        }
      }


    });
    
} );
            </script>


</div>