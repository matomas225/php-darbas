<div class="card mt-5">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h2>{{$company->pavadinimas}}</h2></li>
                    <li class="list-group-item"><h4>Kodas</h4> {{$company->kodas}}</li>
                    <li class="list-group-item"><h4>PVM Kodas</h4> {{$company->pvm_kodas}}</li>
                    <li class="list-group-item"><h4>Adresas</h4>{{$company->adresas}}</li>
                    <li class="list-group-item"><h4>Telefonas</h4>{{$company->telefonas}}</li>
                    <li class="list-group-item"><h4>El Pastas</h4>{{$company->el_pastas}}</li>
                    <li class="list-group-item"><h4>Veikla</h4>{{$company->veikla}}</li>
                    <li class="list-group-item"><h4>Vadovas</h4>{{$company->vadovas}}</li>
                </ul>
                <form action="{{route('delete', $company)}}" method="POST">
                    @csrf
                    @method('delete')
                <button type="submit" class="btn btn-outline-dark">Delete</button>
                </form>
                <form action="{{route('editView', $company)}}" method="POST">
                <button type="submit" class="btn btn-outline-dark">Edit</button>
                </form>
            </div>
        </div>