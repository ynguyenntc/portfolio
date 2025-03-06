<nav class="w-[var(--navbar-width)] h-screen bg-[#0f1b26] fixed top-0 left-0 text-[#f8f9fa] py-6">
    <div class=" flex justify-center items-center flex-col gap-2">
        <div class="flex justify-center items-center p-4">
            <img src="{{ asset('images/thumbnail.png') }}" alt="logo"
                class="border-solid border-8 w-[11rem] h-[11rem] rounded-full thumbnail-border object-cover">
        </div>
        <h1 class="flex justify-between items-center text-2xl ">Nguyen Thi Nhu Y</h1>
    </div>
    <div class="relative bottom-[150px] left-[240px] cursor-pointer">
        <i class="fa-solid fa-chevron-left"></i>
    </div>
    <div class="w-full flex items-center justify-center pt-10">
        <ul class="p-4 flex flex-col gap-8 text-[16px] font-normal">
            <li><a href="#" class="hover:text-[#20c997] transition duration-200">Home</a></li>
            <li><a href="#" class="hover:text-[#20c997] transition duration-200">About Me</a></li>
            <li><a href="#" class="hover:text-[#20c997] transition duration-200">Resume</a></li>
            <li><a href="#" class="hover:text-[#20c997] transition duration-200">Project</a></li>
            <li><a href="#" class="hover:text-[#20c997] transition duration-200">Contact</a></li>
        </ul>
    </div>
    <ul class="w-full flex justify-center items-center gap-8 relative bottom-[-120px] right-[10px] ">
        <li class="fab fa-github">
            <a href="https://github.com/ynguyenntc" target="_blank" rel="noopener noreferrer"></a>
        </li>
        <li class="fab fa-linkedin">
            <a href="https://www.linkedin.com/in/nguyenthiny/" target="_blank" rel="noopener noreferrer"></a>
        </li>
    </ul>
</nav>
