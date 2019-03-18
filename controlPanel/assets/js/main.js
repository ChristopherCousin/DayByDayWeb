function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
});

var myForm  = document.querySelector('#myForm');
var myTitle = document.querySelector('#title');
var myDescription = document.querySelector('#description');


myForm.addEventListener('submit', function(pEvent) {
    if(myTitle.value === '' || myTitle.value.length < 4) {
        pEvent.preventDefault(); //Prevents the form to be sent
        $('#title').css("border-color", "red");
        $('#title').focus();
    }
    if(myDescription.value === '' || myDescription.value.length < 4) {
            pEvent.preventDefault(); //Prevents the form to be sent
            $('#description').css("border-color", "red");
            $('#description').focus();
        }
});

document.querySelector('#title').addEventListener('keypress', function (e) {
  if(myTitle.value === '' || myTitle.value.length < 4) {
      $('#title').css("border-color", "red");
  } else {
    $('#title').css("border-color", "green");
  }
});
document.querySelector('#description').addEventListener('keypress', function (e) {
  if(myDescription.value === '' || myDescription.value.length < 4) {
      $('#description').css("border-color", "red");
  } else {
    $('#description').css("border-color", "green");
  }
});
