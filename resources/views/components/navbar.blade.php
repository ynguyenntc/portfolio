<nav class="w-[var(--navbar-width)] h-screen bg-[#0f1b26] fixed top-0 left-0 text-[#f8f9fa] py-6 transition-all duration-300"
    id="navbar">
    <div class=" flex justify-center items-center flex-col gap-2">
        <div class="flex justify-center items-center p-4">
            <img src="{{ asset('images/thumbnail.png') }}" alt="logo"
                class="border-solid border-8 w-[11rem] h-[11rem] rounded-full thumbnail-border object-cover transition-all duration-300"
                id="avatar">
        </div>
        <h1 class="flex justify-between items-center text-2xl transition-all duration-300" id="username">Nguyen Thi Nhu Y
        </h1>
    </div>
    <div class="absolute top-[121px] left-[240px] cursor-pointer transition-all duration-200 hover:text-[#20c997]"
        id="toggle-btn">
        <i class="fa-solid fa-chevron-left text-xl transition-transform duration-200 hover:text-2xl"
            id="toggle-icon"></i>
    </div>
    <div class="absolute w-full flex items-center justify-center pt-10">
        <ul class="p-4 flex flex-col gap-8 text-[16px] font-normal transition-all duration-300" id="menu">
            <li class="flex justify-center items-center">
                <a href="#js-hero-content" class="hover:text-[#20c997] transition duration-200 flex gap-3 items-center">
                    <i
                        class="fa-solid fa-house js-item-menu__icon opacity-0 invisible transition-all duration-300 hover:text-2xl"></i>
                    <span class="js-item-menu__name transition-all duration-300 hover:text-[18px]">Home</span>
                </a>
            </li>
            <li class="flex justify-center items-center">
                <a href="#js-about-me" class="hover:text-[#20c997] transition duration-200 flex gap-3 items-center">
                    <i
                        class="fa-solid fa-user js-item-menu__icon opacity-0 invisible transition-all duration-300 hover:text-2xl"></i>
                    <span class="js-item-menu__name transition-all duration-300 hover:text-[18px]">About Me</span>
                </a>
            </li>
            <li class="flex justify-center items-center">
                <a href="#js-resume" class="hover:text-[#20c997] transition duration-200 flex gap-3 items-center">
                    <i
                        class="fa-solid fa-file-alt js-item-menu__icon opacity-0 invisible transition-all duration-300 hover:text-2xl"></i>
                    <span class="js-item-menu__name transition-all duration-300 hover:text-[18px]">Resume</span>
                </a>
            </li>
            <li class="flex justify-center items-center">
                <a href="#js-project" class="hover:text-[#20c997] transition duration-200 flex gap-3 items-center">
                    <i
                        class="fa-solid fa-briefcase js-item-menu__icon opacity-0 invisible transition-all duration-300 hover:text-2xl"></i>
                    <span class="js-item-menu__name transition-all duration-300 hover:text-[18px]">Project</span>
                </a>
            </li>
            <li class="flex justify-center items-center">
                <a href="#js-contact" class="hover:text-[#20c997] transition duration-200 flex gap-3 items-center">
                    <i
                        class="fa-solid fa-phone js-item-menu__icon opacity-0 invisible transition-all duration-300 hover:text-2xl"></i>
                    <span class="js-item-menu__name transition-all duration-300 hover:text-[18px]">Contact</span>
                </a>
            </li>
        </ul>
    </div>
    <ul class="w-full flex justify-center items-center gap-8 absolute bottom-[40px]" id="social-media">
        <li class="fab fa-github">
            <a href="https://github.com/ynguyenntc" target="_blank" rel="noopener noreferrer"></a>
        </li>
        <li class="fab fa-linkedin">
            <a href="https://www.linkedin.com/in/nguyenthiny/" target="_blank" rel="noopener noreferrer"></a>
        </li>
    </ul>
</nav>
