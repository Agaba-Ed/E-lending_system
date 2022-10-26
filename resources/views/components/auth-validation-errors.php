@if ($errors->any())
         <div class="alert alert-primary alert-dismissible fade show " role="alert">
         <div  class="mb-4" :errors="$errors">
        <div class="font-medium text-600">
            <i class="fa-regular fa-bell"></i>
        <strong>Hello there!</strong> You forgot something
        </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
          </div>
    </div>
@endif