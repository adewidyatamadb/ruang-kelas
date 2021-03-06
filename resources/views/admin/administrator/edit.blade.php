@extends('layout')

@section('page-title')
    Edit Administrator
@endsection

@section('content')
<div class="col-12 grid-margin strecth-card">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                Edit Administrator
            </div>
            @include('admin.administrator.form')
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()

    function deleteData(){
        document.getElementById('deleteForm').submit();
    }
</script>
@endsection
