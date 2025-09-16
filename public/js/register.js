    window.addEventListener("DOMContentLoaded", () => {
        const popup = document.getElementById("popupMessage");
        if (popup) {
            setTimeout(() => {
                popup.style.transition = "opacity 0.5s ease";
                popup.style.opacity = "0";

                setTimeout(() => {
                    // Check kung success ang sulod
                    const innerMsg = popup.querySelector(".success");

                    // Tangtangon ang popup
                    popup.remove();

                    // Redirect kung success
                    if (innerMsg) {
                        window.location.href = "../../../public/auth/login/login.php";
                    }
                }, 500); // wait para sa fade animation
            }, 3000); // 3 seconds delay
        }
    });
