document.addEventListener("DOMContentLoaded", function (e) {
    typingTextHeroContent();
    handleProjectTab();
    handleInput();
    clinkSendMail();
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
        console.log(element);
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
