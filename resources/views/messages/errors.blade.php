          @if (count($errors) > 0)
              <br>
              @foreach ($errors->all() as $error)
              
              <p class="alert alert-danger">{{ $error }}</p>

              @endforeach

              @endif