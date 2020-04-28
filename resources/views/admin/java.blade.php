<script src="{{url('admin/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('admin/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('admin/js/vendor/Chart.bundle.min.js')}}"></script>
<script src="{{url('admin/js/vendor/chartjs-plugin-datalabels.js')}}"></script>
<script src="{{url('admin/js/vendor/moment.min.js')}}"></script>
<!-- <script src="{{url('admin/js/vendor/fullcalendar.min.js')}}"></script>
    <script src="{{url('admin/js/persian-date.min.js')}}"></script>
    <script src="{{url('admin/js/persian-datepicker.min.js')}}"></script>-->
<script src="{{url('admin/js/vendor/datatables.min.js')}}"></script>
<script src="{{url('admin/js/vendor/perfect-scrollbar.min.js')}}"></script>
<script src="{{url('admin/js/vendor/owl.carousel.min.js')}}"></script>
<script src="{{url('admin/js/vendor/progressbar.min.js')}}"></script>
<script src="{{url('admin/js/vendor/jquery.barrating.min.js')}}"></script>
<script src="{{url('admin/js/vendor/select2.full.js')}}"></script>
<script src="{{url('admin/js/vendor/nouislider.min.js')}}"></script>
<!-- <script src="{{url('admin/js/vendor/bootstrap-datepicker.js')}}"></script>-->
<script src="{{url('admin/js/vendor/Sortable.js')}}"></script>
<script src="{{url('admin/js/dore.script.js')}}"></script>
<script src="{{url('admin/js/scripts.js')}}"></script>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
  var editor_config = {
    path_absolute: "/",
    selector: "textarea#editor",
    directionality: "rtl",
    height: 500,
    plugins: [
      "advlist directionality autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern emoticons"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | rtl ltr | bullist numlist outdent indent | link image media emoticons |   ",
    relative_urls: false,
    file_browser_callback: function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file: cmsURL,
        title: 'Filemanager',
        width: x * 0.8,
        height: y * 0.8,
        resizable: "yes",
        close_previous: "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>



<script>
  {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!};
        var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
        $('#lfm').filemanager('image', {prefix: route_prefix});
</script>
