<div class="bg-[var(--gray-bg-color)] py-4">
    @include('components.header_section', [
        'background' => 'CONTACT',
        'title' => 'Get In Touch',
    ])
    <div class="px-12 pb-4">
        <div class="grid gap-12 grid-cols-[3fr_7fr]">
            <div class="flex flex-col gap-4">
                <h3 class="text-[20px] font-medium">ADDRESS</h3>
                <p>Thu Duc District, Ho Chi Minh City</p>
                <ul class="flex flex-col gap-3">
                    <li class="flex gap-4 items-center">
                        <i class="fa-solid fa-envelope text-[var(--green-color)] text-xl "></i>
                        <a href="mailto:support@example.com">ynguyen.ntc@gmail.com</a>
                    </li>
                    <li class="flex gap-4 items-center">
                        <i class="fa-solid fa-phone text-[var(--green-color)] text-xl "></i>
                        <a href="tel:+840981419140">098 1419 140</a>
                    </li>
                </ul>
                <h3 class="text-[20px] font-medium">FOLLOW ME</h3>
                <ul>
                    <li class="flex gap-6">
                        <a href="#"> <i class="fab fa-github text-xl text-[var(--gray-100-color)] "></i></a>
                        <a href="#"> <i class="fab fa-linkedin text-xl text-[var(--gray-100-color)] "></i></a>
                        <a href="#"> <i class="fab fa-google text-xl text-[var(--gray-100-color)] "></i></a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-[20px] font-medium pb-4">SEND ME A MESSAGE</h3>
                <form id="js-form-contact">
                    <div class="flex flex-col">
                        <div class="w-full grid grid-cols-2 gap-4">
                            <div>
                                <label class="font-medium relative top-3 left-4 bg-[var(--gray-bg-color)] px-0.5">Name
                                    <span class="text-red-500">*</span></label>
                                <input name="name" type="text" placeholder="Name"
                                    class="w-full bg-white border rounded-[8px] border-solid border-[#ced4da] px-4 py-3 outline-0 focus:border-[var(--green-color)]  focus:shadow placeholder:text-[#cfd4d8]">
                            </div>
                            <div>
                                <label
                                    class="font-medium relative top-3 left-4 bg-[var(--gray-bg-color)] px-0.5 ">Email<span
                                        class="text-red-500">*</span></label>
                                <input name="email" type="text" placeholder="Email"
                                    class="w-full bg-white border rounded-[8px] border-solid border-[#ced4da] px-4 py-3 outline-0 focus:border-[var(--green-color)]  focus:shadow placeholder:text-[#cfd4d8]">
                            </div>
                        </div>
                        <div>
                            <label
                                class="font-medium relative top-3 left-4 bg-[var(--gray-bg-color)] px-0.5 ">Message<span
                                    class="text-red-500">*</span></label>
                            <textarea name="message" placeholder="Tell me more about your needs"
                                class="bg-white border rounded-[8px] border-solid border-[#ced4da] px-4 py-3 w-full h-24 min-h-16 max-h-32 outline-0 focus:border-[var(--green-color)]  focus:shadow placeholder:text-[#cfd4d8]"></textarea>
                        </div>
                    </div>
                    <div class="flex items-center justify-center pt-3">
                        <button type="button" id="js-btn-contact"
                            class="rounded-3xl px-4 py-2 font-medium bg-[var(--green-color)] text-[var(--light-color)] flex gap-3 transition-colors duration-300 ease-in-out shadow-md hover:bg-[var(--green-100-color)] hover:shadow-xl cursor-pointer">
                            <svg id="js-loading-spinner" aria-hidden="true"
                                class=" hidden h-[24px] text-gray-200 animate-spin dark:text-gray-600 fill-[#b5a8e2]"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill" />
                            </svg>
                            <span id="js-btn-text">Send</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
