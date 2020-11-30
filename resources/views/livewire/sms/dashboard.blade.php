<div class="contain mx-auto">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="flex bg-indigo-900 rounded-md p-4">
            <div class="grid grid-rows-2 gap-y-4 mx-auto w-full">
                <div class="flex justify-between">
                    <div class="flex-shrink-0 h-10 w-10">
                        <svg class="h-8 w-8 text-yellow-400 mt-2 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                        </svg>
                    </div>
                    <div class="w-14 h-6 rounded-lg bg-green-400 text-gray-800 text-center mt-2">
                        230
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 text-center">
                        <dt class="text-lg text-white mb-1">تعداد کل کمپین ها</dt>
                        <dd class="text text-gray-200 font-bold">650</dd>
                    </div>

                    <div class="mr-4 text-center">
                        <dt class="text-lg text-white mb-1">تعداد کمپین های فعال</dt>
                        <dd class="text text-gray-200 font-bold">230</dd>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex bg-indigo-900 rounded-md p-4">
            <div class="grid grid-rows-2 gap-y-4 mx-auto w-full">
                <div class="flex justify-between">
                    <div class="flex-shrink-0 h-10 w-10">
                        <svg class="h-8 w-8 text-yellow-400 mt-2 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/>
                        </svg>
                    </div>
                    <div class="w-14 h-6 rounded-lg bg-green-400 text-gray-800 text-center mt-2">
                        230
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 text-center">
                        <dt class="text-lg text-white mb-1">تعداد پیش نویس ها</dt>
                        <dd class="text text-gray-200 font-bold">650</dd>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex bg-indigo-900 rounded-md p-4">
            <div class="grid grid-rows-2 gap-y-4 mx-auto w-full">
                <div class="flex justify-between">
                    <div class="flex-shrink-0 h-10 w-10">
                        <svg class="h-8 w-8 text-yellow-400 mt-2 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div class="w-14 h-6 rounded-lg bg-green-400 text-gray-800 text-center mt-2">
                        230
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 text-center">
                        <dt class="text-lg text-white mb-1">تعداد گروه ها</dt>
                        <dd class="text text-gray-200 font-bold">650</dd>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-2 min-w-0 break-words mb-6 shadow-lg rounded bg-gray-900">
            <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full max-w-full flex-grow flex-1">
                <h6
                    class="uppercase text-gray-200 mb-1 text-xs font-semibold"
                >
                    پیامک های ارسالی
                </h6>
                <h2 class="text-white text-xl font-semibold">
                    نمایش وضعیت پیامک های ارسالی
                </h2>
                </div>
            </div>
            </div>
            <div class="p-4 flex-auto">
            <!-- Chart -->
            <div class="relative" style="height:350px">
                <canvas id="line-chart"></canvas>
            </div>
            </div>
        </div>

        <div class="col-span-1 min-w-0 break-words bg-white mb-6 shadow-lg rounded">
            <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full max-w-full flex-grow flex-1">
                <h6
                    class="uppercase text-gray-500 mb-1 text-xs font-semibold"
                >
                    کمپین ها
                </h6>
                <h2 class="text-gray-800 text-xl font-semibold">
                    وضعیت کمپین ها
                </h2>
                </div>
            </div>
            </div>
            <div class="p-4 flex-auto">
            <!-- Chart -->
            <div class="relative" style="height:350px">
                <canvas id="bar-chart"></canvas>
            </div>
            </div>
        </div>
    </div>
</div>
