// jQuery import and global setup
import jQuery from "jquery";
window.$ = window.jQuery = jQuery;

// Popper.js
import "popper.js";

// Bootstrap JS
import "bootstrap";

// Laravel bootstrap.js
import "./bootstrap";

// ✅ Custom.js ko dynamically import karo jQuery load hone ke baad
Promise.all([
    //All Custom JS Files
    import("./custom.js"),
    
]).then(() => {
    console.log("✅ All Custom JS Loaded After jQuery");
});


