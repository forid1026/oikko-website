<div>
    <section class="bg-gray-100 py-16 px-4 md:px-20">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">Contact Us</h2>
            <p class="text-gray-600 mt-4">
                Have questions or want to get involved? Reach out to us — we'd love to hear from you.
            </p>
        </div>

        
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-3" role="alert">
                    <strong class="font-bold">{{ session('success') }}</strong>
                </div>
            @endif
            <form wire:submit.prevent="sendMessage">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <span class="text-red-500 text-sm">{{ $errors->first('name') }}</span>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                        <input type="text" wire:model.defer="name"
                            class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Name">
                    </div>
                    <div><span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Your Email</label>
                        <input type="email" wire:model.defer="email" required
                            class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Email">
                    </div>
                </div>

                <div class="mt-6">
                    <span class="text-red-500 text-sm">{{ $errors->first('message') }}</span>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                    <textarea wire:model.defer="message" placeholder="Message" rows="5" required
                        class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="mt-6 text-right">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition"
                        wire:loading.attr="disabled"
                        wire:target="sendMessage">
                        
                        <!-- Normal Text -->
                        <span wire:loading.remove wire:target="sendMessage">
                            Send Message
                        </span>

                         <!-- Loading Spinner + Text -->
                        <div wire:loading wire:target="sendMessage" class="flex items-center justify-center">
                            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" />
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4l5-5-5-5v4a8 8 0 00-8 8z" />
                            </svg>
                            Submitting...
                        </div>
                    </button>

                </div>
            </form>
        </div>
    </section>

</div>
