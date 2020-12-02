<div class="contain mx-auto">
    <div class="flex justify-between">
        <h3>لیست پیش نویس ها</h3>
        <div>
            <a href="{{ route('sms-template.create') }}" class="px-2 py-1 success">
                <i class="fa fa-plus"></i>
            </a>
            <a wire:click="" href="" class="px-2 py-1 info mr-1">
                <i class="fa fa-search"></i>
            </a>
        </div>
    </div>
    <div class="flex flex-col mt-10">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="table-auto w-full shadow divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            عنوان
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            متن
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            آخرین بروز رسانی
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            عملیات
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @for($i=0; $i<=10; $i++)
                        <tr class="divide-y divide-gray-200">
                            <td class="px-6 py-5 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">
                                    {{$i}}
                                </div>
                            </td>
                            <td class="px-6 py-5 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">
                                    پیش نویس شماره {{$i}}
                                </div>
                            </td>
                            <td class="px-6 py-5 whitespace-nowrap">
                                <div class="text-sm text-gray-900">متن مربوط به پیش نویس</div>
                            </td>
                            <td class="px-6 py-5 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    20 مهر 99
                                </span>
                            </td>
                            <td class="px-6 py-5 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route("sms-template.edit",$i) }}" class="text-indigo-600 hover:text-indigo-900">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="#" class="text-red-600 hover:text-red-900 mr-2">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endfor
                    <!-- More rows... -->
                </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
