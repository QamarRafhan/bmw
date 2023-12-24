

@extends('backend.layouts.app')
@section('PageTitle', 'Profile')
@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#profile_image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js'
            referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
@endsection
