@extends('layouts.pages')

@section('content')

{{-- <div class="container"> --}}
    <div class="container mx-auto px-4 pt-20 pb-4">
        <form method="POST" action="{{ url('homepage') }}">
            @csrf
            <div class="flex items-center">
                <input type="text" class="w-full px-4 py-2 border rounded-md mr-2" name="query"
                       placeholder="Search for an artisan" value="{{ request('query') ?? '' }}">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Search</button>
            </div>
        </form>
    </div>

    @if ($artisans->count() > 0)

    <div class="max-width-md md-auto overflow-x-auto">

        <table class="min-w-full bg-white shadow-md border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border text-center border-gray-200 py-2 px-2 md:px-4">Name</th>
                    <th class="border text-center bg-gray-100 border-gray-200 py-2 px-2 md:px-4">Speciality</th>
                    <th class="border text-center border-gray-200 py-2 px-2 md:px-4">Hall Of Residence</th>
                    <th class="border text-center bg-gray-100 border-gray-200 py-2 px-2 md:px-4">Whatsapp Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artisans as $artisan)
                    <tr class="hover:bg-gray-50 transition duration-150"> <!-- Added hover effect -->
                        <td class="border text-center bg-gray-100 border-gray-200 py-4 px-2 md:px-4"> <!-- Increased padding -->
                            <a href="{{ url('/') }}" class="block text-black hover:text-blue-500"> {{ $artisan->name }} </a>
                        </td>

                        <td class="border text-center border-gray-200 py-4 px-2 md:px-4">
                            <a href="{{ url('/') }}" class="block text-black hover:text-blue-500"> {{ $artisan->artisan }} </a>
                        </td>

                        <td class="border text-center bg-gray-100 border-gray-200 py-4 px-2 md:px-4">
                            <a href="{{ url('/') }}" class="block text-black hover:text-blue-500"> {{ $artisan->hostel }} </a>
                        </td>

                        <td class="border text-center border-gray-200 py-4 px-2 md:px-4">
                            <a href="{{ url('/contact/' . $artisan->number) }}" class="block text-black hover:text-blue-500"> {{ $artisan->number }} </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


          @else
            <p class="py-2 px-4"> No Artisan Found </p>
          @endif
    </div>

    <br><br><br><br><br><br><br><br><br><br><br>
@endsection
