<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Exam') }}
        </h2>
        {{-- @include('flash-message') --}}
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-right"><a href="{{ route('dashboard.index') }}">Dashboard</a></h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('dashboard.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="">Sample Question type 1 (MCQ)</label> <br>
                        <select name="type_1" id="" class="form-control">
                            <option value="">Select One Option</option>
                            <option value="option_1">Option 1</option>
                            <option value="option_2">Option 2</option>
                            <option value="option_3">Option 3</option>
                            <option value="option_4">Option 4</option>
                        </select> <br>
                        <label for="">Sample Question type 2 (Multiple selection)</label> <br>
                        <input type="checkbox" name="type_2[]" value="checkbox_1" id="">Option 1 <br>
                        <input type="checkbox" name="type_2[]" value="checkbox_2" id="">Option 2 <br>
                        <input type="checkbox" name="type_2[]" value="checkbox_3" id="">Option 3 <br>
                        <input type="checkbox" name="type_2[]" value="checkbox_4" id="">Option 4 <br>
                        <label for="type_3_a">Sample Question type 3</label> <br>
                        1 <label for="">Option a</label>
                        <select name="type_3_a" id="" class="form-control">
                            <option value="">True/False</option>
                            <option value="type_3_a_true">True</option>
                            <option value="type_3_a_false">False</option>
                        </select> <br> <br>
                        2 <label for="type_3_b">Option b</label>
                        <select name="type_3_b" id="" class="form-control">
                            <option value="">True/False</option>
                            <option value="type_3_b_true">True</option>
                            <option value="type_3_b_false">False</option>
                        </select> <br> <br>
                        3 <label for="type_3_c">Option c</label>
                        <select name="type_3_c" id="" class="form-control">
                            <option value="">True/False</option>
                            <option value="type_3_c_true">True</option>
                            <option value="type_3_c_false">False</option>
                        </select> <br> <br>
                        4 <label for="type_3_d">Option c</label>
                        <select name="type_3_d" id="" class="form-control">
                            <option value="">True/False</option>
                            <option value="type_3_d_true">True</option>
                            <option value="type_3_d_false">False</option>
                        </select> <br> <br>
                        <button type="submit" class = 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
