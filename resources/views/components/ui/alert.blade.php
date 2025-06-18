@if (session('success') || session('error'))
    <!-- Modal -->
    <div id="flashModal" tabindex="-1" aria-hidden="true"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="relative p-4 w-full max-w-md">
            <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <button type="button"
                    class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white"
                    onclick="document.getElementById('flashModal').classList.add('hidden')">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Tutup</span>
                </button>

                <div
                    class="w-12 h-12 rounded-full 
                {{ session('success') ? 'bg-green-100 dark:bg-green-900' : 'bg-red-100 dark:bg-red-900' }}
                p-2 flex items-center justify-center mx-auto mb-3.5">
                    <svg aria-hidden="true"
                        class="w-8 h-8 
                    {{ session('success') ? 'text-green-500 dark:text-green-400' : 'text-red-500 dark:text-red-400' }}"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="{{ session('success')
                                ? 'M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z'
                                : 'M10 18a8 8 0 100-16 8 8 0 000 16zm1-11V7a1 1 0 10-2 0v2a1 1 0 002 0zm0 4a1 1 0 10-2 0 1 1 0 002 0z' }}"
                            clip-rule="evenodd" />
                    </svg>
                </div>

                <p
                    class="mb-4 text-lg font-semibold 
                {{ session('success') ? 'text-green-700 dark:text-green-400' : 'text-red-700 dark:text-red-400' }}">
                    {{ session('success') ?? session('error') }}
                </p>

                <button type="button"
                    class="py-2 px-3 text-sm font-medium text-white rounded-lg 
                    {{ session('success') ? 'bg-green-600 hover:bg-green-700' : 'bg-red-600 hover:bg-red-700' }} 
                    focus:ring-4 focus:outline-none focus:ring-opacity-50"
                    onclick="document.getElementById('flashModal').classList.add('hidden')">
                    OK
                </button>
            </div>
        </div>
    </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('flashModal');
        if (modal) {
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 10000); // 4 detik
        }
    });
</script>
