<div class="contain mx-auto">
    <h1>{{ ($mode == "create") ? "ایجاد پیش نویس جدید" : "بروز رسانی پیش نویس" }}</h1>
    <div class="flex mt-10">
        <form class="flex flex-col bg-gray-50 w-full mx-auto p-4 shadow-md" action="{{ ($mode == 'create') ? route('sms-template.store') : route('sms-template.update',$template_id) }}" method="POST">
            @csrf
            @method("PATCH")
            <div class="flex flex-col w-full">
                <label for="title">عنوان</label>
                <input type="text" id="title" class="rounded-md border-blue-100 outline-none border-solid border-2 p-2 focus:border-blue-500" name="title" value="{{$template->title ?? ''}}">
            </div>
            <div class="flex w-full">
                <div class="flex flex-col w-1/2 p-3">
                    <label for="body">متن</label>
                    <textarea id="body" class="rounded-md border-blue-100 outline-none border-solid border-2 p-2 focus:border-blue-500 w-full mt-2 h-80 resize-none" name="body">{{$template->body ?? ''}}</textarea>
                    <div class="flex justify-between p-4">
                        <div class="flex">
                            <span class="ml-2 rounded-full bg-blue-300 w-6 h-6 text-center">1</span>
                            <p class="p-1 text-gray-500">پیامک</p>
                            <i class="fa fa-flag text-yellow-600"></i>
                            <p class="p-1 text-gray-500" data-lang="fa"> فارسی </p>
                        </div>
                        <div class="flex">
                            <span class="ml-2 rounded-full bg-blue-300 w-6 h-6 text-center">160</span>
                            <p class="p-1 text-gray-500">کارکتر باقی مانده است</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-1/2 p-3">
                    <span>پیشنمایش پیش نویس</span>
                </div>
            </div>
            <div>
                <input class="p-2 rounded-md success" type="submit" value="{{ ($mode == 'create') ? 'ذخیره پیش نویس' : 'بروز رسانی پیش نویس' }}">
                <input class="p-2 rounded-md warning"type="reset" value="انصراف">
            </div>
        </form>
    </div>
</div>
