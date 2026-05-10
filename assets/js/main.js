// Simple JavaScript utilities and cookie functions

// Cookie functions
function setCookie(name, value, days) {
  const d = new Date();
  d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
  const expires = "expires=" + d.toUTCString();
  document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

function getCookie(name) {
  const cname = name + "=";
  const decodedCookie = decodeURIComponent(document.cookie);
  const ca = decodedCookie.split(';');
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(cname) == 0) {
      return c.substring(cname.length, c.length);
    }
  }
  return "";
}

function deleteCookie(name) {
  document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}

// Simple toggle function
function toggleElement(id) {
  const el = document.getElementById(id);
  if (el) {
    el.style.display = el.style.display === 'none' ? 'block' : 'none';
  }
}

// Smooth scrolling for anchor links
document.addEventListener('DOMContentLoaded', function() {
  const anchors = document.querySelectorAll('a[href^="#"]');
  anchors.forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });
});

// Cookie consent banner
document.addEventListener('DOMContentLoaded', function() {
  if (!getCookie('cookieConsent')) {
    const banner = document.createElement('div');
    banner.id = 'cookie-banner';
    banner.innerHTML = `
      <div style="position: fixed; bottom: 0; left: 0; right: 0; background: #333; color: #fff; padding: 10px; text-align: center; z-index: 1000;">
        This website uses cookies to improve your experience. <button id="accept-cookies" style="margin-left: 10px; padding: 5px 10px; background: #d43076; color: #fff; border: none; cursor: pointer;">Accept</button>
      </div>
    `;
    document.body.appendChild(banner);

    document.getElementById('accept-cookies').addEventListener('click', function() {
      setCookie('cookieConsent', 'accepted', 365);
      banner.remove();
    });
  }

  // Toggle password visibility
  const togglePass = document.querySelector('.toggle-pass');
  if (togglePass) {
    togglePass.addEventListener('click', function() {
      const input = this.previousElementSibling;
      if (input.type === 'password') {
        input.type = 'text';
        this.querySelector('i').classList.remove('fa-eye');
        this.querySelector('i').classList.add('fa-eye-slash');
      } else {
        input.type = 'password';
        this.querySelector('i').classList.remove('fa-eye-slash');
        this.querySelector('i').classList.add('fa-eye');
      }
    });
  }
});