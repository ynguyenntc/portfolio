<div class="h-screen">
    @include('components.header_section', [
        'background' => 'ABOUT ME',
        'title' => 'Know Me More',
    ])
    <div class="px-12 pb-4">
        <div class="grid gap-12 grid-cols-[6fr_4fr]">
            <div class="flex gap-4 flex-col leading-[1.7]">
                <p class="text-[27px] font-semibold">
                    I'm <span class="text-[var(--green-color)]">Nguyen Thi Nhu Y</span>, a PHP Backend Developer
                </p>
                <p>
                    With a strong passion for software development and optimizing system performance, I am dedicated to
                    delivering efficient and reliable technical solutions.
                </p>
                <p>
                    With a strong passion for software development and optimizing system performance, I am dedicated to
                    delivering efficient and reliable technical solutions.
                </p>
            </div>
            <div>
                <ul class="flex flex-col gap-3">
                    @php
                        $array_infos = [
                            'Name' => 'Nguyen Thi Nhu Y',
                            'Email' => 'ynguyen.ntc@gmail.com',
                            'Phone' => '098 1419 140',
                            'Age' => 24,
                            'Work Location' => 'Ho Chi Minh City',
                        ];
                    @endphp
                    @foreach ($array_infos as $info_key => $info_value)
                        <li class="{{ !$loop->last ? 'border-b border-gray-300/50' : '' }} pb-2">
                            <span class="font-semibold pr-1">{{ $info_key }}:</span>
                            <span>{{ $info_value }}</span>
                        </li>
                    @endforeach
                </ul>
                <div class="pt-4 flex gap-4">
                    <button
                        class="rounded-3xl px-4 py-2 font-medium bg-[var(--green-color)] text-[var(--light-color)] transition-colors duration-300 ease-in-out shadow-md hover:bg-[var(--green-100-color)] hover:shadow-xl cursor-pointer">View
                        CV</button>
                    <button
                        class="rounded-3xl px-5 py-2 font-medium bg-[var(--green-color)] text-[var(--light-color)] transition-colors duration-300 ease-in-out shadow-md hover:bg-[var(--green-100-color)]  hover:shadow-xl  cursor-pointer">
                        Download
                        CV</button>
                </div>
            </div>
        </div>
        <div class="flex justify-around pt-12">
            @php
                $array_statics = [
                    'Years of Experients' => '1+',
                    'Projects Participated In' => '3+',
                    'Companies Worked' => 1,
                ];
            @endphp
            @foreach ($array_statics as $key => $static)
                <div class="flex flex-col items-center justify-center">
                    <p class="text-[64px] text-[var(--gray-100-color)] font-semibold ">{{ $static }}</p>
                    <p class="font-medium">{{ $key }}</p>
                </div>
            @endforeach

        </div>
    </div>
</div>
