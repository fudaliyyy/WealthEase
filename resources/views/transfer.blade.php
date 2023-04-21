@extends('pages.main')

@section('container')
    <div class="bg-custblack flex flex-row text-white justify-between">
        <div class="flex flex-col gap-4 mt-4">
            <h1 class="font-semibold text-4xl">Transfer</h1>
            <div class="border-2 border-white rounded-md h-[450px] py-6 px-8">
                <div class="text-center">
                    <h1 class="font-semibold">{{ $account['name'] }}</h1>
                    <h3>{{ $account['bank'] }} - {{ $account['nomor_rekening'] }}</h3>
                </div>
                <form action="" class="flex flex-col gap-8 my-4">
                    <div class="flex flex-col">
                        <label for="amount">Amount</label>
                        <input type="text" id="amount" name="amount"
                            class="bg-custblack rounded-lg border-white border-2 w-96 py-2 px-6">
                    </div>
                    <div class="flex flex-col">
                        <label for="notes">Notes</label>
                        <input type="text" id="notes" name="notes"
                            class="bg-custblack rounded-lg border-white border-2 w-96 py-2 px-6">
                    </div>
                    <div>
                        <button class="bg-custpink py-2 px-4 w-48 rounded-md font-semibold" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <img class="w-1/2" src="/img/visa.svg" alt="missing img">
    </div>
@endsection
