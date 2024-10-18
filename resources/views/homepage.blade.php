@extends('layouts.guest')

@section('content2')

{{-- <div class="container"> --}}
    <div class="container mx-auto px-4 py-4">
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
    <div class="min-w-full lg:w-3/4 xl:w-3/4 xl:w-2/3">

        <table class="min-w-full bg-white shadow-md border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border text-center border-gray-200 py-2 px-4">Name</th>
                    <th class="border text-center bg-gray-100 border-gray-200 py-2 px-4">Speciality</th>
                    <th class="border text-center border-gray-200 py-2 px-4">Hall Of Residence</th>
                    <th class="border text-center bg-gray-100 border-gray-200 py-2 px-4">Whatsapp Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artisans as $artisan)
                    <tr>
                            <td class="border text-center bg-gray-100 border-gray-200 py-2 px-2">
                                <a href="{{ url('/')}}" class="block text-black hover:text-blue-500 px-4 py-2"> {{ $artisan->name }} </a>
                            </td>

                            <td class="border text-center border-gray-200 py-2 px-2">
                                <a href="{{ url('/')}}" class="block text-black hover:text-blue-500 px-5 py-2"> {{ $artisan->artisan }} </a>
                            </td>

                            <td class="border text-center bg-gray-100 border-gray-200 py-2 px-2">
                                <a href="{{ url('/')}}" class="block text-black hover:text-blue-500 px-4 py-2"> {{ $artisan->hostel }} </a>
                            </td>

                            <td class="border text-center bg-gray-100 border-gray-200 py-2 px-3">
                                <a href="{{ url('/')}}" class="block text-black hover:text-blue-500 px-4 py-2"> {{ $artisan->number }} </a>
                            </td>

                    </tr>
                @endforeach
            </tbody>
        </table>


          @else
            <p class="py-2 px-4"> No Artisan Found </p>
          @endif
    </div>
{{-- </div> --}}




{{--
<h1 class="mb-5 pl-20">Search for an artisan</h1>
<div class="flex items-center">

      <input type="text" class="bg-gray-800 text-white text-sm rounded-full w-72 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
      <div class="absolute top-50%">
        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2 mb-2" xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 512 512"><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6 .1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg>
      </div>

      <div class="absolute bg-gray-800 text-sm rounded w-72 mt-20 text-white">
         <ul>
            <li class="border-b border-gray-700">
                <a href="#" class="black hover:bg-gray-700 px-3 py-3">Example</a>
            </li>
            <li class="border-b border-gray-700">
                <a href="#" class="black hover:bg-gray-700 px-3 py-3">Example</a>
            </li>
            <li class="border-b border-gray-700">
                <a href="#" class="black hover:bg-gray-700 px-3 py-3">Example</a>
            </li>
         </ul>
      </div>
</div> --}}

@endsection
