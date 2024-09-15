function handleImageHover() {
    const images = document.querySelectorAll('img');
    images.forEach(image => {
        image.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
        });
        image.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
}

function handleImageHover() {
    const images = document.querySelectorAll('img');
    images.forEach(image => {
        image.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
        });
        image.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
}

function handleImageZoom() {
    const images = document.querySelectorAll('img');
    images.forEach(image => {
        image.addEventListener('click', function() {
            this.style.transform = 'scale(1.5)';
        });
    });
}

function handleSearch() {
    const searchInput = document.getElementById('search');
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.trim(); // إزالة الفراغات الزائدة من بداية ونهاية النص
        const regex = new RegExp(searchTerm, 'i'); // تحويل النص إلى نمط RegExp مع تجاهل حالة الحروف (case-insensitive)
        const models = document.querySelectorAll('.phone-brands td:nth-child(1)'); // تستهدف العنصر td الأول في كل صف
        models.forEach(model => {
            const modelName = model.textContent.trim();
            const parentRow = model.parentElement;
            if (regex.test(modelName)) { // استخدام النمط للبحث في اسم الهاتف
                parentRow.style.display = 'table-row';
            } else {
                parentRow.style.display = 'none';
            }
        });
    });
}

function updateTime() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');
    const currentTime = `${hours}:${minutes}:${seconds}`;
    const timeElement = document.getElementById('current-time');
    timeElement.textContent = currentTime;
}

document.addEventListener('DOMContentLoaded', function() {
    handleImageHover();
    handleImageZoom();
    handleSearch();

    updateTime();
    setInterval(updateTime, 1000);
});

function handleImageZoom() {
    const images = document.querySelectorAll('img');
    images.forEach(image => {
        image.addEventListener('click', function() {
            this.style.transform = 'scale(1.5)';
        });
    });
}

function handleSearch() {
    const searchInput = document.getElementById('search');
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.trim();
        const regex = new RegExp(searchTerm, 'i');
        const models = document.querySelectorAll('.phone-brands td:nth-child(1)');
        models.forEach(model => {
            const modelName = model.textContent.trim();
            const parentRow = model.parentElement;
            if (regex.test(modelName)) {
                parentRow.style.display = 'table-row';
            } else {
                parentRow.style.display = 'none';
            }
        });
    });
}

function handleBackToTop() {
    const backToTopBtn = document.getElementById('back-to-top');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            backToTopBtn.style.display = 'block';
        } else {
            backToTopBtn.style.display = 'none';
        }
    });
    backToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

function handleNavigation() {
    const sections = document.querySelectorAll('section');
    window.addEventListener('scroll', function() {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= sectionTop - sectionHeight / 3) {
                current = section.getAttribute('id');
            }
        });
        const navLinks = document.querySelectorAll('nav ul li a');
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').substring(1) === current) {
                link.classList.add('active');
            }
        });
    });
}

function updateTime() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');
    const currentTime = `${hours}:${minutes}:${seconds}`;
    const timeElement = document.getElementById('current-time');
    timeElement.textContent = currentTime;
}

document.addEventListener('DOMContentLoaded', function() {
    handleImageHover();
    handleImageZoom();
    handleSearch();
    handleBackToTop();
    handleNavigation();

    updateTime();
    setInterval(updateTime, 1000);
});

function setSamsungImageWidth() {
    var samsungImages = document.querySelectorAll("#samsung img");
    samsungImages.forEach(function(img) {
        img.style.width = "100px";
        img.style.height = "auto";
    });
}

function setAppleImageWidth() {
    var appleImages = document.querySelectorAll("#apple img");
    appleImages.forEach(function(img) {
        img.style.width = "100px";
        img.style.height = "auto";
    });
}

function setOppoImageWidth() {
    var oppoImages = document.querySelectorAll("#oppo img");
    oppoImages.forEach(function(img) {
        img.style.width = "100px"; // Set the desired width
        img.style.height = "auto"; // Maintain aspect ratio
    });
}

function setRealmeImageWidth() {
    var realmeImages = document.querySelectorAll("#realme img");
    realmeImages.forEach(function(img) {
        img.style.width = "90px"; // Set the desired width
        img.style.height = "auto"; // Maintain aspect ratio
    });
}

function setGooglePixelImageWidth() {
    var googleImages = document.querySelectorAll("#google img");
    googleImages.forEach(function(img) {
        img.style.width = "110px";
        img.style.height = "auto";
    });
}


setSamsungImageWidth();
setAppleImageWidth();
setOppoImageWidth();
setRealmeImageWidth();
setGooglePixelImageWidth();