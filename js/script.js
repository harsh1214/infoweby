function openNav() {
    document.getElementById("edit-ul").classList.remove("add-d-none");
    document.getElementById("edit-ul").classList.add("edit-nav-ul");
    document.getElementById("img-container").classList.add("img-nav");
    document.getElementById("img-element").classList.add("img-nav-ele");
    document.getElementById("edit-fa-times").classList.remove("none-d");
    document.getElementById("edit-btn").classList.add("none-d");
    var con = document.querySelectorAll("#edit-li");
    con.forEach((e) => {
        e.classList.add("edit-nav-li");
    });
}

function closeNav() {
    document.getElementById("edit-ul").classList.add("add-d-none");
    document.getElementById("edit-ul").classList.remove("edit-nav-ul");
    document.getElementById("img-container").classList.remove("img-nav");
    document.getElementById("img-element").classList.remove("img-nav-ele");
    document.getElementById("edit-fa-times").classList.add("none-d");
    document.getElementById("edit-btn").classList.remove("none-d");
    var con = document.querySelectorAll("#edit-li");
    con.forEach((e) => {
        e.classList.remove("edit-nav-li");
    });
}

var acc = document.querySelectorAll(".accordion");
for (var i = 0; i < acc.length; i++) {
    acc[i].addEventListener('click', function() {
        var panel = this.nextElementSibling;
        this.classList.toggle("active");
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

function changeReview(intValue) {

    if (intValue === 1) {
        document.getElementById("review-op-2").classList.remove("d-none");
        document.getElementById("review-op-1").classList.add("d-none");
    } else {
        document.getElementById("review-op-1").classList.remove("d-none");
        document.getElementById("review-op-2").classList.add("d-none");
    }

}

function subNavOpen() {
    var a = document.getElementById('sub-nav');
    var b = document.getElementById('up-down');
    if (a.style.display == 'none') {
        a.style.display = 'block';
        b.classList.remove('dropdown-toggle');
        b.classList.add('dropdown-toggle-up');
    } else if (a.style.display == 'block') {
        document.getElementById('sub-nav').style.display = 'none';
        b.classList.add('dropdown-toggle');
        b.classList.remove('dropdown-toggle-up');
    }

}

// function subNavClose() {
//     document.getElementById('sub-nav').style.display = "none";
// }