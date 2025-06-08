document.addEventListener("DOMContentLoaded", function (e) {
    toggleCollapse();
    typingTextHeroContent();
    handleProjectTab();
    handleInput();
    clinkSendMail();
    activeItemNavbar();
});
function typingTextHeroContent() {
    const hero_content = ["Y Nguyen", "a PHP Backend Developer"];
    const base_text = "I'm ";
    const element_text = document.getElementById(
        "js-hero-content__typing-text"
    );

    let index = 0;
    let char_index = 0;
    let is_deleting = false;

    typeEffect(
        hero_content,
        base_text,
        element_text,
        index,
        char_index,
        is_deleting
    );
}
function typeEffect(texts, base_text, element, index, char_index, is_deleting) {
    const speed = 100;
    const delay_between_texts = 2000;
    let current_text = texts[index];

    if (!is_deleting) {
        element.textContent =
            base_text + current_text.substring(0, char_index + 1);
        char_index++;
        if (char_index === current_text.length) {
            is_deleting = true;
            setTimeout(
                () =>
                    typeEffect(
                        texts,
                        base_text,
                        element,
                        index,
                        char_index,
                        is_deleting
                    ),
                delay_between_texts
            );
            return;
        }
    } else {
        element.textContent =
            base_text + current_text.substring(0, char_index - 1);
        char_index--;
        if (char_index === 0) {
            is_deleting = false;
            index = (index + 1) % texts.length;
        }
    }

    setTimeout(
        () =>
            typeEffect(
                texts,
                base_text,
                element,
                index,
                char_index,
                is_deleting
            ),
        is_deleting ? speed / 2 : speed
    );
}
function handleProjectTab() {
    var tabs = ["all", "client", "personal"];
    tabs.forEach(function (tab) {
        var tab_active = document.getElementById("js-tab-" + tab);

        tab_active.addEventListener("click", function (e) {
            tabs.forEach(function (tab) {
                document
                    .getElementById("js-tab-" + tab)
                    .classList.remove("active-tab");
                document
                    .getElementById("js-content-" + tab)
                    .classList.remove("active-content");
            });

            tab_active.classList.add("active-tab");
            document
                .getElementById("js-content-" + tab)
                .classList.add("active-content");
        });
    });
}
function clinkSendMail() {
    const btn_contact = document.getElementById("js-btn-contact");

    if (btn_contact) {
        btn_contact.addEventListener("click", function () {
            sendEmail(btn_contact);
        });
    }
}

async function sendEmail(btn_contact) {
    const loading = document.getElementById("js-loading-spinner");
    const btn_text = document.getElementById("js-btn-text");

    const name = document
        .querySelector("#js-form-contact input[name=name]")
        .value.trim();
    const email = document
        .querySelector("#js-form-contact input[name=email]")
        .value.trim();
    const message = document
        .querySelector("#js-form-contact textarea[name=message]")
        .value.trim();

    loading.classList.remove("hidden");
    loading.classList.add("inline");

    btn_text.textContent = "Sending...";
    btn_contact.disabled = true;

    try {
        const response = await fetch("/send-contact-form", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            body: JSON.stringify({
                name: name,
                email: email,
                message: message,
            }),
        });

        const data = await response.json();
        if (!response.ok) {
            if (response.status === 422) {
                handleContactFormErrorMessage(data.message);
            }
        } else {
            Swal.fire({
                icon: "success",
                text: "Thank you for your message. I will get back to you shortly.",
            });
            document.getElementById("js-form-contact").reset();
        }
    } catch (error) {
        console.error(error);
        Swal.fire({
            icon: "error",
            text: "Something went wrong. Kindly resend the message to me",
        });
    } finally {
        loading.classList.add("hidden");
        loading.classList.remove("inline");
        btn_text.textContent = "Send";
        btn_contact.disabled = false;
    }
}

function handleContactFormErrorMessage(errors) {
    document.querySelectorAll("#js-form-contact [name]").forEach((element) => {
        element.classList.remove("border-red-500");
        if (
            element.nextElementSibling &&
            element.nextElementSibling.classList.contains("error-message")
        ) {
            element.nextElementSibling.textContent = "";
            element.nextElementSibling.classList.add("hidden");
        }
    });
    for (const [key, value] of Object.entries(errors)) {
        const elements = document.querySelectorAll(
            `#js-form-contact [name="${key}"]`
        );

        elements.forEach((element) => {
            element.classList.add("border-red-500");
            if (
                !element.nextElementSibling ||
                !element.nextElementSibling.classList.contains("error-message")
            ) {
                const error_div = document.createElement("div");
                error_div.className = "error-message";
                error_div.textContent = `* ${value[0]}`;
                element.parentNode.insertBefore(error_div, element.nextSibling);
            } else {
                element.nextElementSibling.textContent = `* ${value[0]}`;
            }
            element.nextElementSibling.classList.remove("hidden");
        });
    }
}

function handleInput() {
    document.querySelectorAll("#js-form-contact [name]").forEach((element) => {
        element.addEventListener("input", function () {
            console.log(element);
            element.classList.remove("border-red-500");
            if (
                element.nextElementSibling &&
                element.nextElementSibling.classList.contains("error-message")
            ) {
                element.nextElementSibling.textContent = "";
                element.nextElementSibling.classList.add("hidden");
            }
        });
    });
}
function toggleCollapse() {
    const root = document.documentElement;
    const toogle_btn = document.getElementById("toggle-btn");
    const toogle_icon = document.getElementById("toggle-icon");
    // const navbar = document.getElementById("navbar");
    // const main_content = document.getElementById("home-main");
    const avatar = document.getElementById("avatar");
    const username = document.getElementById("username");
    const item_menu_icon = document.querySelectorAll(".js-item-menu__icon");
    const item_menu_name = document.querySelectorAll(".js-item-menu__name");
    const social_media = document.getElementById("social-media");
    toogle_btn.addEventListener("click", function () {
        if (
            getComputedStyle(root).getPropertyValue("--navbar-width") ===
            "16.25rem"
        ) {
            root.style.setProperty("--navbar-width", "4rem");

            toogle_btn.classList.add("left-[23px]");
            toogle_btn.classList.remove("left-[240px]");
            toogle_btn.classList.add("top-[40px]");
            toogle_btn.classList.remove("top-[121px]");

            toogle_icon.classList.add("rotate-180");

            avatar.classList.add("hidden");
            avatar.classList.remove("w-[11rem]", "h-[11rem]");

            username.classList.add("hidden");

            item_menu_icon.forEach((icon) => {
                icon.classList.add("opacity-100", "visible");
                icon.classList.remove("opacity-0", "invisible");
            });
            item_menu_name.forEach((text) => text.classList.add("hidden"));

            social_media.classList.add("flex-col");
        } else {
            root.style.setProperty("--navbar-width", "16.25rem");

            toogle_btn.classList.add("left-[240px]");
            toogle_btn.classList.remove("left-[23px]");
            toogle_btn.classList.remove("top-[40px]");
            toogle_btn.classList.add("top-[121px]");

            toogle_icon.classList.remove("rotate-180");

            avatar.classList.remove("hidden");
            avatar.classList.add("w-[11rem]", "h-[11rem]");

            username.classList.remove("hidden");

            item_menu_icon.forEach((icon) => {
                icon.classList.add("opacity-0", "invisible");
                icon.classList.remove("opacity-100", "visible");
            });

            item_menu_name.forEach((text) => text.classList.remove("hidden"));

            social_media.classList.remove("flex-col");
        }
    });
}

function activeItemNavbar() {
    const navbar_items = document.querySelectorAll("#menu a");
    const sections = document.querySelectorAll("#home-main section");

    window.addEventListener("scroll", function () {
        onScroll();
    });

    function onScroll() {
        let current_section = "";
        sections.forEach(function (section) {
            const section_top = section.offsetTop;
            const section_height = section.offsetHeight;
            const scroll_position = window.scrollY;
            if (
                scroll_position >= section_top - section_height / 3 &&
                scroll_position < section_top + section_height
            ) {
                current_section = section.getAttribute("id");
            }
        });
        navbar_items.forEach((item) => {
            item.classList.remove("active-nav");
            if (item.getAttribute("href").slice(1) === current_section) {
                item.classList.add("active-nav");
            }
        });
    }
}
