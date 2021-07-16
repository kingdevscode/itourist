@extends('app')

@section('content')
<div class="content">
    <div class="container">
      <div class="col-md-4 ml-auto mr-auto">
        <div class="card card-login card-plain">
          <form class="form" method="post" action="{{ url('tourisme/ville/add-ville') }}">
            @csrf
            <div class="card-body">
                {{ session('message_success') }}
              <div class="input-group no-border input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons users_circle-08"></i>
                  </span>
                </div>
                <input type="text" class="form-control" name="nom" placeholder="Nom de la ville...">
              </div>
              <div class="pull-right">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection


