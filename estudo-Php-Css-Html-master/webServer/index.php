<script src="https://gist.github.com/kidatti/f93feba1ec4be2117d1b.js"></script>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>

<script>

document.onpaste = function(event){

  var items = (event.clipboardData || event.originalEvent.clipboardData).items;

  for (var i = 0 ; i < items.length ; i++) {

    var item = items[i];

    if (item.type.indexOf("image") != -1) {

      var file = item.getAsFile();
      console.log(file);
      upload_file_with_ajax(file);
    }
  }
}

function upload_file_with_ajax(file){

  var formData = new FormData();
  formData.append('file', file);

  $.ajax('./clipboard_js.php' , {

    type: 'POST',
    contentType: false,
    processData: false,
    data: formData,
    error: function() {
      console.log("error");
    },
    success: function(res) {
      console.log("ok");
    }
  });
}

</script>

</body>
</html>
