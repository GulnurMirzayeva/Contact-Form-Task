@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="w-full md:w-1/3 bg-white rounded-lg shadow-md p-6">
                <div class="flex flex-col items-center my-8">
                    <div class="mb-6 p-4 bg-yellow-50 rounded-full">
                        <img src="{{ asset('images/logo.svg') }}" alt="Company Logo" class="h-16 w-auto">
                    </div>
                    <h2 class="text-xl font-bold text-yellow-700">Andersen</h2>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-yellow-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="text-gray-600">123 Main Street, Baku, Azerbaijan</p>
                    </div>

                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-yellow-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <p class="text-gray-600">info@example.com</p>
                    </div>

                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-yellow-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <p class="text-gray-600">+994 12 345 67 89</p>
                    </div>
                </div>

                <div class="mt-8">
                    <h3 class="text-lg font-semibold text-yellow-700 mb-4">Working Hours</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Monday - Friday</span>
                            <span class="text-gray-800 font-medium">9:00 - 18:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Saturday</span>
                            <span class="text-gray-800 font-medium">10:00 - 16:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Sunday</span>
                            <span class="text-gray-800 font-medium">Closed</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-2/3">
                <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-bold text-yellow-700">Get In Touch</h1>
                        <span class="bg-yellow-100 text-yellow-800 text-sm font-semibold px-3 py-1 rounded-full">Contact Us</span>
                    </div>

                    @if(session('success'))
                        <div id="successAlert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 relative transition-all duration-300">
                            <span class="block sm:inline">{{ session('success') }}</span>
                            <button onclick="closeAlert()" class="absolute top-0 right-0 mt-2 mr-2 text-green-700 hover:text-green-900 focus:outline-none">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    @endif

                    <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-2">Name <span class="text-red-500">*</span></label>
                                <input type="text" id="name" name="name"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent"
                                       value="{{ old('name') }}"
                                       required>
                                @error('name')
                                <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email <span class="text-red-500">*</span></label>
                                <input type="email" id="email" name="email"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent"
                                       value="{{ old('email') }}"
                                       required>
                                @error('email')
                                <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message <span class="text-red-500">*</span></label>
                            <textarea id="message" name="message" rows="5"
                                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent"
                                      required>{{ old('message') }}</textarea>
                            @error('message')
                            <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                    class="bg-yellow-600 hover:bg-yellow-700 text-white px-8 py-3 rounded-lg transition duration-300 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
                                Send Message
                                <svg class="w-4 h-4 inline ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold text-yellow-700">Recent Messages</h2>
                        <span class="text-sm text-gray-500">{{ count($messages) }} messages</span>
                    </div>

                    @if($messages->isEmpty())
                        <div class="text-center py-8">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                            <h3 class="mt-2 text-lg font-medium text-gray-900">No messages yet</h3>
                            <p class="mt-1 text-gray-500">Be the first to send us a message!</p>
                        </div>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200" id="messagesTableBody">
                                @foreach($messages as $index => $message)
                                    <tr class="message-row hover:bg-gray-50 transition duration-150 {{ $index >= 5 ? 'hidden' : '' }}" data-index="{{ $index }}">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10 bg-yellow-100 rounded-full flex items-center justify-center">
                                                    <span class="text-yellow-600 font-medium">{{ strtoupper(substr($message->name, 0, 1)) }}</span>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $message->name }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $message->email }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 max-w-xs">
                                            <div class="truncate" title="{{ $message->message }}">
                                                {{ $message->message }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $message->created_at->format('M d, Y') }}
                                            <div class="text-xs text-gray-400">{{ $message->created_at->format('H:i') }}</div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            @if($messages->count() > 5)
                                <div class="mt-4 flex justify-center space-x-4">
                                    <button id="showMoreBtn" onclick="showMore()"
                                            class="inline-flex items-center px-4 py-2 bg-yellow-100 hover:bg-yellow-200 text-yellow-800 font-medium rounded-lg transition duration-200">
                                        Show More
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>

                                    <button id="showLessBtn" onclick="showLess()"
                                            class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium rounded-lg transition duration-200 hidden">
                                        Show Less
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                                        </svg>
                                    </button>
                                </div>

                                <div class="mt-2 text-center text-sm text-gray-500" id="messageCounter">
                                    Showing <span id="visibleCount">5</span> of {{ $messages->count() }} messages
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        window.contactData = {
            totalMessages: {{ $messages->count() }}
        };
    </script>
@endsection
