<input type="button" class="btn btn-danger delete" name="delete"  id="{{$id}}" value="Eliminar">

<input type="button" class="btn btn-secondary change-status" name="change-status"  id="{{$id}}" value="Cambiar Status">
<script>
    $(".delete").unbind().click(function() {
        $id = $(this).attr('id');

        $.ajax({
            url: "{{url('api/categories/delete')}}",
            type: "POST",
            data:{
              id: $id,
              _token:'{{ csrf_token() }}'
            },
            cache: false,
            dataType: 'json',
            success: function(dataResult){
            }

          });

          $dataTable.ajax.reload(null, false);

    });
    </script>
