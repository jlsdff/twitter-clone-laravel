<nav class="flex items-center justify-between px-8 py-4">
    <div class="text-xl font-bold">
        Twitter
    </div>
    @auth
    <!-- Navigation list if the user is authenticated -->
     
    @endauth
    @guest
        <ul class="flex gap-2.5 items-center">
            <li>
                <a href="#" role="button" class="px-4 py-2.5 outline outline-slate-800 rounded-md">Sign in</a>
            </li>
            <li>
                <a href="#" role="button"
                    class="px-4 py-2.5 outline outline-slate-800 bg-slate-800 text-slate-100 rounded-md  ">Sign up</a>
            </li>
        </ul>
    @endguest
</nav>