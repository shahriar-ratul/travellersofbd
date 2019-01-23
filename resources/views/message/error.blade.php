@if (session()->has('errors'))
    <div class="alert alert-danger text-center animated fadeIn">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>**{{ $error }}</li>
              @endforeach
          </ul>
        </strong>
    </div>
@endif
