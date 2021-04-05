<footer class="text-gray-500">
            <p>&copy; CopyRight {{date('Y')}} 
                @if(! Route::is('app_about'))
                    &middot; 
                    <a href="{{route('app_about')}}"class="text-indigo-400 underline hover:text-indigo-600">
                    About Us
                    </a>
                @endif
            </p>
</footer>