$('document').ready(function(){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  var route='/szukanie';
  $( '.wyszukiwarka' ).select2({
        placeholder: 'Wyszukaj książke',
        ajax: {
            url: route,
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.ksiazka,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
});
