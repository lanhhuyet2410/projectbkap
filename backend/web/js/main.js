tinymce.init({
    selector: 'textarea',
    theme: "modern",
    height: "400",
    width:"",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"
    ],
    toolbar1: "undo redo bold italic underline strikethrough cut copy paste| alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote searchreplace | styleselect formatselect fontselect fontsizeselect ",
    toolbar2: "table | hr removeformat | subscript superscript | charmap emoticons ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | link unlink anchor image media | insertdatetime preview | forecolor backcolor print fullscreen code ",
    image_advtab: true,
    menubar: false,
    toolbar_items_size: 'small',
    content_css: '//www.tinymce.com/css/codepen.min.css',
    relative_urls:false,
    remove_script_host:false,
    external_filemanager_path:"http://localhost/projectbkap/filemanager/",
    filemanager_title:"Responsive Filemanager" ,
    external_plugins: { "filemanager" : "http://localhost/projectbkap/filemanager/plugin.min.js"}
});


function openFileManager(){
    $("#myModal").modal();
}


$(document).ready(function() {
    $("#product-start_sale").datepicker({
        'dateFormat':'dd-mm-yy'
        });
    $("#product-end_sale").datepicker({
        'dateFormat':'dd-mm-yy'
        });
    $('proImg').click(function(event) {
        $('#myModal').modal();
    });
    $('#myModal').on('hidden.bs.modal', function () {
        imgSrc = $('#proImg').val();
        $('#previewImage').attr({
            'src': imgSrc
        });
})
});