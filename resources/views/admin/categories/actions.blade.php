<input type="button" class="btn btn-info change-status" name="change-status"  id="{{$id}}" value="Cambiar Status">

<script>

    $(".change-status").unbind().click(function() {

        $id = $(this).attr('id');

        $.ajax({
            url: "{{url('api/categories/change-status')}}",
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
      $dataTable.ajax.reload(null, false );

    });

</script>
