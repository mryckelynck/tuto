{{-- @extends('layouts.app')



@section('content') --}}

    <div class="container">
        <form method="POST" action="{{ route('profil_save') }}">
            @csrf
            <input type="hidden" name="id" value="{{$user->id}}">

            <div class="row">
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{$user->name}}">
                    {{-- <small id="emailHelp" class="form-text text-muted">Nom de Famille</small> --}}
                </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Prénom</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="emailHelp" value="{{$user->firstname ?? ""}}">
                    {{-- <small id="emailHelp" class="form-text text-muted">Prénom</small> --}}
                </div>

                <div class="form-group col-12">
                    <label for="exampleInputEmail1">Adresse Mail</label>
                    <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp" value="{{$user->email ?? ""}}">
                </div>

                <br /><br />
                <div class="dropdown-divider"></div>
                <br /><br />




                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Adresse</label>
                    <input type="text" class="form-control" id="address1" name="address1" aria-describedby="emailHelp" value="{{$user->address1 ?? ""}}">

                </div>

                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Adresse complément</label>
                    <input type="text" class="form-control" id="address2" name="address2" aria-describedby="emailHelp" value="{{$user->address2 ?? ""}}">
                </div>

                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Code postal</label>
                    <input type="text" class="form-control" id="zip" name="zip" aria-describedby="emailHelp" value="{{$user->zip_code ?? ""}}">
                </div>

                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Ville</label>
                    <input type="text" class="form-control" id="city" name="city" aria-describedby="emailHelp" value="{{$user->city ?? ""}}">
                </div>

                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Téléphone</label>
                    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp" value="{{$user->phone ?? ""}}">
                </div>

                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Portable</label>
                    <input type="text" class="form-control" id="gsm" name="gsm" aria-describedby="emailHelp" value="{{$user->phone_gsm ?? ""}}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>

{{-- @endsection --}}
