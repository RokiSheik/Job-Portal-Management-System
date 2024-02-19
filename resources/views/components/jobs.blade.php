<div class="grid grid-cols-1 mt-10 container mx-auto">
    <div class="bg-gray-300 p-20 pt-3 pb-4">
        @for($i=0;$i<5;$i++)
        <div class="bg-gray-200 p-5 mt-2">
            <div class="flex justify-between">
                <div class="flex justify-items-start gap-3">
                    <div class="place-items-baseline">
                        <h1 class="mt-2">Laravel Web Developer</h1>
                    </div>
                    <div class="bg-green-600 rounded p-2">Remote</div>
                    <div class="bg-green-600 rounded p-2">Facebook</div>
                </div>
                <div class="bg-green-600 rounded p-2">$1000</div>
            </div>
            <div class="flex justify-between mt-3">
                <div class="flex justify-items-start gap-3">
                    <div class="mt-2">Skils: </div>
                    <div class="bg-green-600 rounded p-2">HTML</div>
                    <div class="bg-green-600 rounded p-2">PHP</div>
                    <div class="bg-green-600 rounded p-2">LARAVEL</div>
                    <div class="bg-green-600 rounded p-2">TAILWIND</div>
                    <div class="bg-green-600 rounded p-2">MYSQL</div>
                </div>
                <div class="bg-green-600 rounded p-2"><a href="#">APPLY</a></div>
            </div>
        </div>
        @endfor
        <div class="mt-4 text-center"><button class="bg-green-600 rounded p-4 hover:bg-gray-500">View More</button></div>
    </div>
</div>