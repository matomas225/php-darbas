@extends("layouts.main") @section("main")

<div class="card-group w-50 m-auto">
@foreach($companies as $company)
<x-card :company='$company'/>
@endforeach

</div>
<div>
        {{$companies->links()}}
</div>
@endsection
