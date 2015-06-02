function carga(item)
{

  $.ajax({
      url:item,
      success: function(data){
        $('#contenido').html(data);
      }
  });
}

