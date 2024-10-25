@extends('layouts.pages')

@section('content')

     <div class="max-w-5xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl text-green-600 font-bold mb-4">Frequently Asked Questions</h1>
        <h2 class="text-2xl text-green-600 font-bold mb-2">General</h2>

        <div class="bg-gray-100 p-4 mb-4 rounded">
           <details>
                <summary class="text-lg font-bold">Who can use Unilag Artisans?</summary>
                <p class="text-lg">Our platform is exclusively for students.</p>
           </details>

           <details>
               <summary class="text-lg font-bold">How do I register?</summary>
               <p class="text-lg">Click on "Register" and fill your details correctly.</p>
          </details>
        </div>

        <h2 class="text-2xl text-green-600 font-bold mb-2">Services</h2>

        <div class="bg-gray-100 p-4 mb-4 rounded">
            <details>
                <summary class="text-lg font-bold">What type of services are available?</summary>
                <p class="text-lg">Our platform offers various services such as: graphic design, carpentry, hair styling, and so much more.</p>
           </details>

           <details>
               <summary class="text-lg font-bold">How do I request a service?</summary>
               <p class="text-lg">Click on "Find Artisans", search what you require, and you'll be prompted with all available artisans click one and discuss on whatsapp.</p>
           </details>

           <details>
               <summary class="text-lg font-bold">How long does it take to complete a service?</summary>
               <p class="text-lg">Completion time depends on the mutual agreement of the clients and student-artisans.</p>
           </details>

           <details>
               <summary class="text-lg font-bold">How do I pay for services?</summary>
               <p class="text-lg">The payment is based on agreement of the Clients and Student-artisans.</p>
           </details>

        </div>
           <h2 class="text-2xl text-green-600 font-bold mb-2">Student-artisans</h2>

           <div class="bg-gray-100 p-4 mb-4 rounded">
            <details>
                <summary class="text-lg font-bold">How do I become a student-artisan?</summary>
                <p class="text-lg">Register as a student-artisan and clearly state what service offer .</p>
            </details>

            <details>
                <summary class="text-lg font-bold">What are the benefits of being a student-artisan?</summary>
                <p class="text-lg">Earn money, gain experience, and build your portfolio.</p>
            </details>
           </div>

           <h2 class="text-2xl text-green-600 font-bold mb-2">Safety and Support</h2>

           <div class="bg-gray-100 p-4 mb-4 rounded">
            <details>
                <summary class="text-lg font-bold">Is my personal information secure?</summary>
                <p class="text-lg">Yes, we prioritize data protection.</p>
            </details>

            <details>
                <summary class="text-lg font-bold">What if I have issues with a service/student-artisan?</summary>
                <p class="text-lg">Contact our support team.</p>
            </details>

           </div>
        </div>
     </div>


@endsection

