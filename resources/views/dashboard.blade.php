<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leaderboard') }}
        </h2>
        {{-- @include('flash-message') --}}
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-right"><a href="{{ route('dashboard.create') }}">Exam</a></h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Sample Question type 1 (MCQ)</th>
                                <th scope="col">Sample Question type 2 (Multiple selection)</th>
                                <th scope="col">Option A</th>
                                <th scope="col">Option B</th>
                                <th scope="col">Option C</th>
                                <th scope="col">Option D</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($result as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->type_1 }}</td>
                                    <td>{{ $item->type_2 }}</td>
                                    <td>{{ $item->type_3_a }}</td>
                                    <td>{{ $item->type_3_b }}</td>
                                    <td>{{ $item->type_3_c }}</td>
                                    <td>{{ $item->type_3_d }}</td>
                                    <td>{{ $item->total }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td>{{ 'No Data Found!!!' }}</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
