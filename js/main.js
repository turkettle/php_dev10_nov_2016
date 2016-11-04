
$("#button").click(function(event){
    event.preventDefault();
    // $.post("ajax.php", {'name': 'Luke Skywalker'}, function(data, status){
    //     alert("Data: " + data + "\nStatus: " + status);
    // });
    // $.post("ajax.php", {'name': 'Luke Skywalker'}, function(data, status){
    //     alert("Data: " + data + "\nStatus: " + status);
    // });

    var data = {'name': 'Luke Skywalker'};
    var successFunction = function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    };

    $.ajax({
      type: "POST",
      url: "ajax.php",
      data: data,
      success: successFunction,
    });
});


$('#bookForm').submit(function(event) {
    event.preventDefault();
    var form = $(this).serialize();

    $.ajax({
      type: "POST",
      url: "ajax.php",
      dataType: 'json',
      data: form,
      success: function(data) {
          if (data) {
              $.each(data, function(index, element) {
                  var input = $('#bookForm').find('#' + index);
                  input.parents('.form-group')
                    .addClass('has-error')
                    .before('<div class="alert alert-danger" role="alert">' + element + '</div>')
              });
          }
      },
    });
});
