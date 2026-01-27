import "./bootstrap";
import tippy from "tippy.js";
import "tippy.js/dist/tippy.css";

function updateTooltips() {
    const sidebarOpen = JSON.parse(localStorage.getItem("sidebarOpen")) ?? true;

    // Destroy ALL existing tooltips first
    document.querySelectorAll("[data-tippy-content]").forEach((el) => {
        if (el._tippy) {
            el._tippy.destroy();
        }
    });

    // Only create tooltips when sidebar is COLLAPSED
    if (!sidebarOpen) {
        setTimeout(() => {
            tippy("[data-tippy-content]", {
                content: (reference) =>
                    reference.getAttribute("data-tippy-content"),
                placement: "right",
                appendTo: document.body,
                arrow: false,
                theme: "light-border",
                offset: [0, 10],
                animation: "fade",
                delay: [200, 0],
                trigger: "mouseenter focus",
            });
        }, 350);
    }
}

// Initialize tooltips when Alpine is ready
document.addEventListener("alpine:initialized", () => {
    updateTooltips();
});

// Listen for custom sidebar toggle event
window.addEventListener("sidebar-toggled", () => {
    updateTooltips();
});

// Also listen for storage changes (multiple tabs)
window.addEventListener("storage", (e) => {
    if (e.key === "sidebarOpen") {
        updateTooltips();
    }
});
