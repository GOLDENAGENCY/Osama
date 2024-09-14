// التبديل بين اللغتين العربية والإنجليزية
function toggleLanguage() {
    var arabicElements = document.querySelectorAll('.arabic');
    var englishElements = document.querySelectorAll('.english');
    var langSwitcher = document.querySelector('.language-switcher');
    var pageTitle = document.getElementById('page-title'); // الحصول على عنصر التايتل

    // التبديل بين إظهار اللغة العربية وإخفاء الإنجليزية أو العكس
    arabicElements.forEach(function(element) {
        element.classList.toggle('hidden');
    });

    englishElements.forEach(function(element) {
        element.classList.toggle('hidden');
    });

    // تبديل النص على زر تغيير اللغة
    if (langSwitcher.textContent === "EN") {
        langSwitcher.textContent = "AR";
        if (pageTitle) {
            pageTitle.textContent = pageTitle.textContent.replace("English", "العربية").replace("Projects", "أعمالنا");
        }
        setLanguage('arabic');
    } else {
        langSwitcher.textContent = "EN";
        if (pageTitle) {
            pageTitle.textContent = pageTitle.textContent.replace("العربية", "English").replace("أعمالنا", "Projects");
        }
        setLanguage('english');
    }
}

document.addEventListener('DOMContentLoaded', () => {
    updateLanguageDisplay();
});

function setLanguage(language) {
    // تخزين اللغة المختارة في localStorage
    localStorage.setItem('language', language);
    updateLanguageDisplay();
}

function updateLanguageDisplay() {
    var language = localStorage.getItem('language') || 'arabic'; // الافتراضي هو العربية
    var arabicElements = document.querySelectorAll('.arabic');
    var englishElements = document.querySelectorAll('.english');

    // إخفاء وإظهار العناصر بناءً على اللغة المختارة
    arabicElements.forEach(element => {
        element.classList.toggle('hidden', language !== 'arabic');
    });

    englishElements.forEach(element => {
        element.classList.toggle('hidden', language !== 'english');
    });
}

function showProject(projectId) {
    document.querySelectorAll('.project-page').forEach(page => page.classList.add('hidden'));
    document.getElementById(projectId).classList.remove('hidden');
}

function hideProject() {
    document.querySelectorAll('.project-page').forEach(page => page.classList.add('hidden'));
}

// دالة للتبديل إلى اللغة الإنجليزية
function switchToEnglish() {
    window.location.href = 'index-en.html'; // التبديل إلى الصفحة الإنجليزية
}

// دالة للتبديل إلى اللغة العربية
function switchToArabic() {
    window.location.href = 'index.html'; // التبديل إلى الصفحة العربية
}
