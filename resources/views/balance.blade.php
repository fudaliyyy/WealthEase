@extends('pages.main')

@section('container')
<div class="bg-custblack flex flex-row text-white justify-between">
    <div class="flex flex-col justify-evenly">
        <div class="flex flex-col gap-4">
            <h1 class="text-5xl font-bold">Your Balance is :</h1>
            <h3 class="text-3xl font-semibold">Rp. 10,000,000</h3>
        </div>
        <div>
            <a class="bg-custpink py-4 px-4 w-48 rounded-md font-semibold" href="/mutation">Check My Mutation</a>
        </div>
    </div>
    <img class="w-1/2" src="/img/visa.svg" alt="missing img">
</div>
@endsection
