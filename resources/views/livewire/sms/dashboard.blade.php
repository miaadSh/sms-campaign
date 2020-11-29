<div class="contain mx-auto">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="flex bg-indigo-900 rounded-md p-4">
            <div class="grid grid-rows-2 gap-y-4 mx-auto">
                <div class="flex justify-between">
                    <div class="flex-shrink-0 h-10 w-10">
                        <svg class="h-8 w-8 text-yellow-400 mt-2 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
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
            <div class="grid grid-rows-2 gap-y-4 mx-auto">
                <div class="flex justify-between">
                    <div class="flex-shrink-0 h-10 w-10">
                        <svg class="h-8 w-8 text-yellow-400 mt-2 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
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
            <div class="grid grid-rows-2 gap-y-4 mx-auto">
                <div class="flex justify-between">
                    <div class="flex-shrink-0 h-10 w-10">
                        <svg class="h-8 w-8 text-yellow-400 mt-2 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
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
