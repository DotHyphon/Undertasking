tabs = document.querySelectorAll(".tab");
tabs.forEach(function (tab) {
    tab.addEventListener("click", clickTab);
});

window.onresize = checkLayout;

if (window.innerWidth < 1024) {
    deactivateAllTabs();
    activateTab(tabs[1]);
} else {
    activateAllTabs();
}

function clickTab(e) {
    e.preventDefault();
    deactivateAllTabs();
    activateTab(e.target);
}

function deactivateAllTabs() {
    tabs.forEach(function (tab) {
        document.querySelector(tab.dataset.target).classList.remove('block');
        document.querySelector(tab.dataset.target).classList.add('hidden');
        tab.classList.remove('bg-sky-200');
    });
}

function activateAllTabs() {
    tabs.forEach(function (tab) {
        document.querySelector(tab.dataset.target).classList.add("block");
        document.querySelector(tab.dataset.target).classList.remove("hidden");
    });
}

function activateTab(tab) {
    document.querySelector(tab.dataset.target).classList.add("block");
    document.querySelector(tab.dataset.target).classList.remove("hidden");
    tab.classList.add("bg-sky-200");
}

if(window.innerWidth < 1024) {
    deactivateAllTabs();
    activateTab(tabs[1]);
} else
{
    activateAllTabs();
}

function checkLayout () {
    console.log(window.innerWidth);
    if(window.innerWidth < 1024) {
        deactivateAllTabs();
        activateTab(tabs[1]);
    } else {
        activateAllTabs();
    }
}