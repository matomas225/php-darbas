@extends("layouts.main") @section("main")
<form class="w-25 m-auto" action="{{ url('/create') }}" method="POST">
    @csrf
    <h1>Create Post</h1>

    <div class="mb-3">
        <label for="pavadinimas" class="form-label">Pavadinimas</label>
        <input
            type="text"
            class="form-control"
            id="pavadinimas"
            name="pavadinimas"
        />
    </div>
    <div class="mb-3">
        <label for="kodas" class="form-label">Kodas</label>
        <input type="text" class="form-control" id="kodas" name="kodas" />
    </div>
    <div class="mb-3">
        <label for="pvm_kodas" class="form-label">Pvm Kodas</label>
        <input
            type="text"
            class="form-control"
            id="pvm_kodas"
            name="pvm_kodas"
        />
    </div>
    <div class="mb-3">
        <label for="adresas" class="form-label">Adresas</label>
        <input type="text" class="form-control" id="adresas" name="adresas" />
    </div>
    <div class="mb-3">
        <label for="telefonas" class="form-label">Telefonas</label>
        <input
            type="text"
            class="form-control"
            id="telefonas"
            name="telefonas"
        />
    </div>
    <div class="mb-3">
        <label for="el_pastas" class="form-label">El.Pastas</label>
        <input type="text" class="form-control" id="el_pastas" name="el_pastas" />
    </div>
    <div class="mb-3">
        <label for="veikla" class="form-label">Veikla</label>
        <input type="text" class="form-control" id="veikla" name="veikla" />
    </div>
    <div class="mb-3">
        <label for="vadovas" class="form-label">Vadovas</label>
        <input type="text" class="form-control" id="vadovas" name="vadovas" />
    </div>
    <button type="submit" class="btn btn-outline-dark">Sukurti</button>
</form>

@endsection
