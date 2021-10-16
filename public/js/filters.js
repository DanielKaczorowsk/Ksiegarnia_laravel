var route="{{ route('filter.filter_gatunek')}}";
$('document').ready(function(){
  var route='/lista?page=';
  var route2='/filter_cena';
  $('input#flexCheckDefault').click(function zaznaczono(url){
    if($(this).is(':checked')){
      var gatunek = $('input#flexCheckDefault:checked').map(function () { return $(this).val(); }).get()
      $.ajax({
        url:route,
        data:{gatunek:gatunek},
        success: function(obj){
          console.log(obj)
          $('#dt').html(obj)
          //$.each(obj,function(i, val)){
          //  console.log(i)
        //  })

        }
      })
    }
  })
})
