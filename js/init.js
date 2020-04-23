$(document).ready(function(){
  $(".encoder").on('click', function(e){
    e.preventDefault();
    var type = $(this).data('code');
    console.log(type);
    var urlText = $("#urlText").val();
    var data = encodeDecode(type, urlText);
    if(data){
      $("#previews").html(result(data));
    }
  });

  function encodeDecode(type, urlText) {
      try {
        return type='encode' ? encodeURIComponent(urlText) : decodeURIComponent(urlText);
      } catch(e){
        error(e);
      }
      return false;
  }

  function error(msg) {
    $("#previews").html('<div class="alert alert-danger" role="alert">'+
        msg
      +'</div>');
      
  }
  function result(data){

    var text =  '<div class="col-12">'+
                '<button class="copytoclipboard">Copy to clipboard </button>'+
                '<div class="toast">'+
                '<div class="toast-body">'+
                  'Copied to clipboard'+
                '</div>'+
              '</div>'+
              '</div>'+
              '<div class="csscode border p-3 col-10">'+
              data
              +'</div>';
    return text;
  }
  $(document).on('click', '.copytoclipboard', function(){
      copyTextToClipboard($(".csscode").html());
    });
  function copyTextToClipboard(msg) {
      if (!navigator.clipboard) {
        fallbackCopyTextToClipboard('text');
        return;
      }
      navigator.clipboard.writeText(msg).then(function () {
        $('.toast').toast('show');
      }, function (err) {
        console.error('Async: Could not copy text: ', err);
      });
    }
});
