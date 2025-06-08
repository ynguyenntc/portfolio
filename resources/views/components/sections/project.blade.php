<section id="js-project" class=" py-4">
    @include('components.header_section', [
        'background' => 'PORTFOLIO',
        'title' => 'Project',
    ])
    <div class="px-12 pb-4">
        <div>
            <ul class="flex justify-center gap-16 pb-8">
                <li class="active-tab px-4 pb-1 cursor-pointer" id="js-tab-all">All</li>
                <li class="px-4 pb-1 cursor-pointer" id="js-tab-client">Client</li>
                <li class="px-4 pb-1 cursor-pointer" id="js-tab-personal">Personal</li>
            </ul>
            <div>
                <div class="grid-cols-[repeat(auto-fit,minmax(300px,1fr))] gap-6 hidden active-content animate-fadeInUp"
                    id="js-content-all">
                    @for ($i = 0; $i < 5; $i++)
                        <div
                            class="rounded-xl max-w-lg min-h-[300px] max-h-[300px] grid place-items-center overflow-hidden relative group shadow-gray-500 cursor-pointer group-[.active-content]:opacity-100 group-[.active-content]:translate-y-0">
                            <img src="{{ asset('images/vit.jpg') }}" alt="img"
                                class="object-contain w-full h-auto max-h-full group-hover:opacity-98 group-hover:scale-105 group-hover:blur-xs">
                            <div
                                class="p-4 absolute inset-0 flex flex-col gap-8 items-center justify-center opacity-0 
                text-white transition-opacity duration-300 ease-in-out group-hover:opacity-100 bg-[#1d1d1d91]">
                                <p class="text-[24px] font-semibold">
                                    Wine E-commerce Website
                                </p>
                                <p class="line-clamp-3">
                                    A responsive and efficient e-commerce website built using PHP, Laravel, and
                                    MySQL. The website allows users to browse products, add items to their cart,
                                    checkout, and
                                    make payments.
                                    A responsive and efficient e-commerce website built using PHP, Laravel, and
                                    MySQL. The website allows users to browse products, add items to their cart,
                                    checkout, and
                                    make payments.
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>


                <div class="grid-cols-[repeat(auto-fit,minmax(300px,1fr))] gap-6 hidden" id="js-content-client">
                    @for ($i = 0; $i < 3; $i++)
                        <div
                            class="rounded-xl max-w-lg min-h-[300px] max-h-[300px] grid place-items-center overflow-hidden relative group animate-fadeInUp shadow-gray-500">
                            <img src="{{ asset('images/vit.jpg') }}" alt="img"
                                class="object-contain w-full h-auto max-h-full group-hover:opacity-98 group-hover:scale-105 group-hover:blur-xs">
                            <div
                                class="p-4 absolute inset-0 flex flex-col gap-8 items-center justify-center opacity-0 
                text-white transition-opacity duration-300 ease-in-out group-hover:opacity-100 bg-[#1d1d1d91]">
                                <p class="text-[24px] font-semibold">
                                    Wine E-commerce Website
                                </p>
                                <p class="line-clamp-3">
                                    A responsive and efficient e-commerce website built using PHP, Laravel, and
                                    MySQL. The website allows users to browse products, add items to their cart,
                                    checkout, and
                                    make payments.
                                    A responsive and efficient e-commerce website built using PHP, Laravel, and
                                    MySQL. The website allows users to browse products, add items to their cart,
                                    checkout, and
                                    make payments.
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>

                <div class="grid-cols-[repeat(auto-fit,minmax(300px,1fr))] gap-6 hidden" id="js-content-personal">
                    @for ($i = 0; $i < 2; $i++)
                        <div
                            class="rounded-xl max-w-lg min-h-[300px] max-h-[300px] grid place-items-center overflow-hidden relative group animate-fadeInUp shadow-gray-500">
                            <img src="{{ asset('images/vit.jpg') }}" alt="img"
                                class="object-contain w-full h-auto max-h-full group-hover:opacity-98 group-hover:scale-105 group-hover:blur-xs">
                            <div
                                class="p-4 absolute inset-0 flex flex-col gap-8 items-center justify-center opacity-0 
                text-white transition-opacity duration-300 ease-in-out group-hover:opacity-100 bg-[#1d1d1d91]">
                                <p class="text-[24px] font-semibold">
                                    Wine E-commerce Website
                                </p>
                                <p class="line-clamp-3">
                                    A responsive and efficient e-commerce website built using PHP, Laravel, and
                                    MySQL. The website allows users to browse products, add items to their cart,
                                    checkout, and
                                    make payments.
                                    A responsive and efficient e-commerce website built using PHP, Laravel, and
                                    MySQL. The website allows users to browse products, add items to their cart,
                                    checkout, and
                                    make payments.
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    </div>
