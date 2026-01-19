import "./bootstrap";
import tippy from "tippy.js";
import "tippy.js/dist/tippy.css";

document.addEventListener("alpine:initialized", () => {
    function updateTooltips(sidebarOpen) {
        // Destroy existing tooltip instances
        document.querySelectorAll("[data-tippy-content]").forEach((el) => {
            if (el._tippy) {
                el._tippy.destroy();
            }
        });

        // Only create tooltips when sidebar is collapsed
        if (!sidebarOpen) {
            tippy("[data-tippy-content]", {
                placement: "right",
                arrow: false,
                theme: "light-border",
                offset: [0, 10],
                animation: "fade",
            });
        }
    }

    // Watch for sidebar toggle changes
    const observer = new MutationObserver(() => {
        const sidebarElement = document.querySelector("aside");
        const sidebarOpen = sidebarElement?.classList.contains("w-64");
        updateTooltips(sidebarOpen);
    });

    // Observe sidebar class changes
    const sidebarElement = document.querySelector("aside");
    if (sidebarElement) {
        observer.observe(sidebarElement, {
            attributes: true,
            attributeFilter: ["class"],
        });

        // Initial setup
        const sidebarOpen = sidebarElement.classList.contains("w-64");
        updateTooltips(sidebarOpen);
    }
});
