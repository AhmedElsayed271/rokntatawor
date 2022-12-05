var optionBox   = document.querySelector(".option_box"),
    gear        = document.querySelector(".option_box .gear-check")
gear.onclick = function () {
    if (optionBox.classList.contains("hidden_option") === true) {
        optionBox.classList.remove("hidden_option");
    } else {
        optionBox.classList.add("hidden_option");
    }
}

// Change Color Theme on Click

var listColor = document.querySelectorAll(".option_box .option_color ul li"),
    i;

for (i = 0; i < listColor.length;i++) {
    listColor[i].onclick = function changeTheme() {
        var themeColor      = this.getAttribute("data-value"),
            styleTheme      = document.querySelector("link[data-select]");
            styleTheme.href = "css/" + themeColor;
 
    }
}

// create loading

window.onload = function () {
    var loading = document.querySelector(".loading_overlay");
    document.body.style.overflow = "auto";
    loading.style.display = "none";
}

// Scroll To Top

var scrollButton = document.querySelector(".scroll_top");

window.onscroll = function () {
    if (scrollY >= 700) {
        scrollButton.style.display = "block";
    } else {
        scrollButton.style.display = "none";
    }   
}

scrollButton.onclick = function () {
    window.scrollTo(0,0)
}