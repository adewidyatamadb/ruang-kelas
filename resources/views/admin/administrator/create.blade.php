@extends('layout')

@section('content')

<div class="col-12 grid-margin strecth-card">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                Add Administrator
            </div>
            @include('admin.administrator.form')
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
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
</script>
@endsection
